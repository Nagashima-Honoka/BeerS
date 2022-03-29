<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$details = $user->more();

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
<link href="/css/product.css" rel="stylesheet">
<!-- <link href="/css/product.css" rel="stylesheet"> -->
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">


<title>BeerS!</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="main.php" class="nav-link px-2 link-secondary">Top Page</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <a href="logout.php" class="btn btn-outline-primary me-2">Logout</a>
            </div>
        </header>
        <main>
            <div class="card mx-auto" style="max-width: 540px;">
                <div class="align-items-center">
                    <div>
                        <img src="/img/<?= $details['beer']['img'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div>
                        <div class="card-body f-box">
                            <div>
                                <h5 class="card-title"><?= $details['beer']['name'] ?></h5>
                                <p class="card-text"><?= $details['beer']['about'] ?></p>
                                <a href="search.php">一覧ページへ</a>
                            </div>
                            <div style="margin-top: auto;">
                                <!-- いいね機能 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
