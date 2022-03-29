<?php
require_once(ROOT_PATH .'/Models/User.php');

class UserController{
    private $request; //リクエストパラメータ(GET,POST)
    private $User; //Userモデル

    public function __construct(){
        //リクエストパラメータの取得
        $this->request['get'] = $_GET;
        $this->request['post'] = $_POST;
        
        //モデルオブジェクトの生成
        $this->User = new User();
        
        // 別モデルとの連携
        $dbh = $this->User->get_db_handler();
    }
        
    public function index(){
        $users = $this->User->findAll();
        $params = [
            'users' => $users
        ];
        return $params;
    }

    //idデータの取得
    public function view() {
        //画面エラーを避けるためのエラー処理
        if (empty($this->request['get']['id'])) {
            echo '指定のパラメータが不正です。このページを表示できません。';
            exit;
        }

        $user = $this->User->findById($this->request['get']['id']);
        $params = [
            'user' => $user
        ];
        return $params;
    } 

    //ビールデータの取得
    public function product(){
        $beers = $this->User->product();
        $products = [
            'beers' => $beers
        ];
        return $products;
    }

    //ビールidデータの取得
    public function more() {
        //画面エラーを避けるためのエラー処理
        if (empty($this->request['get']['id'])) {
            echo '指定のパラメータが不正です。このページを表示できません。';
            exit;
        }

        $beer = $this->User->beerById($this->request['get']['id']);
        $products = [
            'beer' => $beer
        ];
        return $products;
    } 

    //新規登録
    public function signUp(){
        $signUp = $this->User->signUp();
        return $signUp;
    }

    //ログイン
    public function logIn(){
        $logIn = $this->User->logIn();
        return $logIn;
    }

    //パスワード再設定
    public function reset(){
        $reset = $this->User->reset();
        return $reset;
    }


    //退会
    public function delete() {
        $delete = $this->User->delete();
        return $delete;
    } 

    //いいね履歴
    public function accountLike() {
        $accountLike = $this->User->accountLike();
        return $accountLike;
    } 

    //いいね履歴
    public function comment() {
        //画面エラーを避けるためのエラー処理
        if (empty($this->request['get']['id'])) {
            echo '指定のパラメータが不正です。このページを表示できません。';
            exit;
        }

        $comment = $this->User->comment($this->request['get']['id']);
        $comments = [
            'comment' => $comment
        ];
        return $comments;
    } 

    //ビールidデータの取得
    public function selectComment() {
        //画面エラーを避けるためのエラー処理
        if (empty($this->request['get']['id'])) {
            echo '指定のパラメータが不正です。このページを表示できません。';
            exit;
        }

        $selectComment = $this->User->selectComment($this->request['get']['id']);
        $selectComments = [
            'selectComment' => $selectComment
        ];
        return $selectComments;
    } 
        
    
    
}

?>