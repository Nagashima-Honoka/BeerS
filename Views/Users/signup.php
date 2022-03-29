<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$userPrams = $user->index();

// バリデーション
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    if (empty($_POST['name'])) {
        $errors['name'] = '*氏名を入力してください。';
    } 

    if (empty($_POST['email'])) {
        $errors['email'] = '*メールアドレスを入力してください。';
    } else {
        //重複チェック
        foreach($userPrams['users'] as $user) {
            if($user['email'] == $_POST['email']) {
                $errors['email'] = "このメールアドレスはすでに登録されています。";
            } 
        }
    }

    if (empty($_POST['password'])) {
        $errors['password'] = '*パスワードを入力してください。';
    } elseif (!preg_match('/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,30}+\z/',$_POST['password'])) {
        $errors['password'] = '*8文字以上で半角英小文字大文字数字を含んで入力してください';
    }

    if(count($errors) === 0){
        // もしエラーがなかったらsignUp()を適用
        $user = new UserController();
        $signUp = $user->signUp();
        header('Location:/Users/signup_done.php');
    }

}


?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/signup.css" rel="stylesheet">

    <title>BeerS!</title>
</head>
<body class="text-center">
    <main class="form-signin">
    <form action="signup.php" method="post">
        <img class="mb-4" src="/img/b0685.png" alt="signup_btn" width="80" height="80">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            <div class="row-Chenge mb-3">
                <label for="inputemail2" class="visually-hidden">Username</label>
                <input type="text" class="form-control" name ="name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                <span class="alert">
                <?php if (isset($errors['name'])) {
                    echo $errors['name'];
                }?>
                </span>
            </div>
            <div class="row-Chenge mb-3">
                <label for="inputemail2" class="visually-hidden">Email</label>
                <input type="email" class="form-control" name="email" id="inputemail2" placeholder="Email">
                <span class="alert">
                    <?php if (isset($errors['email'])) {
                        echo $errors['email'];
                    }?>
                </span>
            </div>
            <div class="row-Chenge mb-3">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword2" placeholder="Password">
                <span class="alert">
                    <?php if (isset($errors['password'])) {
                        echo $errors['password'];
                    }?>
                </span>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="role" id="inlineRadio2" value="1" checked>
                <!-- <label class="form-check-label" for="inlineRadio2">一般会員</label> -->
            </div>
            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="role" id="inlineRadio1" value="0">
                <label class="form-check-label" for="inlineRadio1">システム管理者</label>
            </div> -->
        <button type="submit" class="w-100 btn btn-lg btn-primary">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
    </main>
</body>
</html>

