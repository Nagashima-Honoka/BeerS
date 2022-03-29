<?php
require_once(ROOT_PATH .'/Models/Db.php');

class User extends Db{
    public function __construct($dbh = null){
        parent::__construct($dbh);
    }

    // usersテーブルから全てのデータを取得
    public function findAll():Array {
        $sql = 'SELECT * FROM users';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //ユーザデータを取得
    public function findById($id = 0) {
        $sql = 'SELECT * FROM users';
        $sql .= ' WHERE id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //beersテーブルから全てのデータを取得
    public function product():Array {
        $sql = 'SELECT beers.*,i.image_pass AS img
        FROM beers
        JOIN images i ON beers.id = i.id';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //beersデータを取得
    //imagesデータを取得
    public function beerById($id = 0):Array {
        $sql = 'SELECT beers.*,i.image_pass AS img
        FROM beers
        JOIN images i ON beers.id = i.id';
        $sql .= ' WHERE beers.id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    //新規登録
    public function signUp() {
        try {  
            $hash_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)";
            $this->dbh->beginTransaction();
            $sth = $this->dbh->prepare($sql);
            $sth->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
            $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $sth->bindParam(':password', $hash_pass, PDO::PARAM_STR);
            $sth->bindParam(':role', $_POST['role'], PDO::PARAM_INT);
            $sth->execute();
            $this->dbh->commit();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch(PDOException $e) {
            echo $e->getMessage();
            $this->dbh->rollBack();
            exit();
        }
    }

    //ログイン
    public function logIn(){
        $sql = "SELECT * FROM users WHERE email = :email";
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result)) {
            $result = "アカウントが見つかりません。メールアドレスとパスワードをご確認ください。";
        } else {
            //password_verify: 第一引数には認証する文字列を指定、第二引数では暗号化済みの文字列を指定
            if (password_verify($_POST['password'],$result[0]['password'])) {
                $_SESSION['role'] = $result[0]['role'];
                $_SESSION['id'] = $result[0]['id'];
            } else {
                // エラーの非表示
                error_reporting(0);
                $result = "アカウントが見つかりません。メールアドレスとパスワードをご確認ください。";
            }

        }

        return $result;
    }

    //パスワード再設定
    public function reset(){
        $hash_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $sql = 'UPDATE users SET password = :password WHERE email = :email';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':password', $hash_pass, PDO::PARAM_STR);
        $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //退会
    public function delete() {
        $sql = 'DELETE FROM users WHERE id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //いいね
    public function checkLike($beer_id) {
        try {
            $sql = 'SELECT * FROM likes WHERE user_id = :u_id AND beer_id = :beer_id';
            $sth = $this->dbh->prepare($sql);
            $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
            $sth->bindParam(':beer_id', $beer_id, PDO::PARAM_INT);
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);

            // レコードが1件でもある場合
            if(!empty($result)){
                // レコードを削除する
                $sql = 'DELETE FROM likes WHERE user_id = :u_id AND beer_id = :beer_id';
                $sth = $this->dbh->prepare($sql);
                $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
                $sth->bindParam(':beer_id', $beer_id, PDO::PARAM_INT);
                $sth->execute();
                $result = $sth->fetch(PDO::FETCH_ASSOC);
            }else{
                // レコードを挿入する
                $sql = 'INSERT INTO likes (user_id, beer_id) VALUES (:u_id, :beer_id)';
                $sth = $this->dbh->prepare($sql);
                $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
                $sth->bindParam(':beer_id', $beer_id, PDO::PARAM_INT);
                $sth->execute();
                $result = $sth->fetch(PDO::FETCH_ASSOC);
            }

        }catch(PDOException $e){
                echo $e->getMessage();
                $this->dbh->rollBack();
                exit();
        }
    }

    //いいね保持
    public function keepLike($beer_id){
        try {
            $sql = 'SELECT * FROM likes';
            $sth = $this->dbh->prepare($sql);
            $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
            $sth->bindParam(':beer_id', $beer_id, PDO::PARAM_INT);
            $sth->execute();

        } catch(PDOException $e) {
            echo $e->getMessage();
            $this->dbh->rollBack();
            exit();
        }

        //結果が$cntで数字が返る
        $cnt = 0;
        foreach ($sth as $key => $val) {
            $cnt = $cnt + 1;
            // var_dump ($cnt);
        }

        
    }

    // いいね履歴を取得
    public function accountLike():Array {
        $sql = 'SELECT l.*, i.image_pass,b.name 
                FROM likes l 
                JOIN beers b ON l.beer_id = b.id 
                JOIN images i ON b.id = i.id
                WHERE user_id = :u_id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Commentを挿入
    public function comment($beer_id):Array{
        $sql = 'INSERT INTO comments(text,user_id,beer_id) 
                VALUES (:text, :user_id,:beer_id)';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':text', $_POST['text'], PDO::PARAM_STR);
        $sth->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_INT);
        $sth->bindParam(':beer_id', $beer_id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Commentを表示
    public function selectComment($beer_id){
        $sql = 'SELECT * FROM comments WHERE user_id = :u_id AND beer_id = :beer_id order by update_at desc LIMIT 1';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
        $sth->bindParam(':beer_id', $beer_id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }




    
}
?>
