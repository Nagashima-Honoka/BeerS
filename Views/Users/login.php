<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$userPrams = $user->index();

// バリデーション
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    if (empty($_POST['email'])) {
        $errors['email'] = '*メールアドレスを入力してください。';
    } 
    
    if (empty($_POST['password'])) {
        $errors['password'] = '*パスワードを入力してください。';
    } elseif (!preg_match('/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,30}+\z/',$_POST['password'])) {
        $errors['password'] = '*8文字以上で半角英小文字大文字数字を含んで入力してください';
    }

    if(count($errors) === 0){
        $log = $user->logIn();
        $hash_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

        switch ($_SESSION['role']){
            case '0':
            header('Location:/Users/manage.php');
            break;
            case '1':
            header('Location:/Users/main.php');
            break;
        }

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
    <form action = "login.php" method ="post">
        <img class="mb-4" src="/img/r0685.png" alt="signup_btn" width="80" height="80">
        <h1 class="h3 mb-3 fw-normal">Please log in</h1>
        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            <p class="alert">
                <?php if (isset($errors['email'])) {
                        echo $errors['email'];
                }?>
            </p>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            <p class="alert">
                <?php 
                if (isset($errors['password'])) {
                    echo $errors['password'];
                }
                if (isset($log)) {
                    echo $log;
                }?>
            </p>
        </div>
        <div>
            <a href="reset.php">パスワードをお忘れの方はこちら</a>
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-primary" style="margin-top: 1rem;">Log in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
    </main>
</body>
</html>

