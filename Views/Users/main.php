<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$checks = $user->accountLike();

$sliceChecks = array_slice($checks, 0, 3);

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

<title>BeerS!</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Top Page</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <a href="logout.php" class="btn btn-outline-primary me-2">Logout</a>
                <a href="account.php?id=<?= $_SESSION['id'] ?>" class="btn btn-primary">Account</a>
            </div>
        </header>
        <main>
            <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">BeerS!</h1>
                <p class="text-muted">クラフトビールとは、小規模な醸造所がつくる、多様で個性的なビールのことを指します。<br>バラエティ豊かで職人の想いが詰まった埼玉のクラフトビールをご堪能ください。</p>
                <p>
                <a href="search.php" class="btn btn-outline-secondary">Search</a>
                </p>
                </div>
            </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <h3 class="featurette-heading">お気に入り</h3>
                    <p>さらにお気に入り登録したものはAccountページから閲覧可能です。</p>
                    <div>
                        <div class="col">
                            <div class="re-card shadow-sm">
                                <?php if($sliceChecks): ?>
                                <div class="flex-recard">
                                    <?php foreach($sliceChecks as $check): ?>
                                    <div class="flex-card">
                                        <div>
                                            <img src="/img/<?= $check['image_pass']; ?>" class="card-img-top" alt="search_img">
                                        </div>
                                        <div class="card-body f-box">
                                            <div class="content col-md-9">
                                                <h5 class="card-title"><?= $check['name']; ?></h5>
                                                <a href="detail.php?id=<?= $check['beer_id']; ?>" class="btn btn-outline-dark">more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                                <?php else :?>
                                    <p>お気に入り登録がありません。</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- START THE FEATURETTES -->
                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Special Time</h2>
                            <p class="lead-original">とっておきを探そう</p>
                            <a class="btn btn-outline-secondary" href="search.php">Search</a>
                        </div>
                        <div class="col-md-5">
                            <img src="/img/index2.jpg" class="card-img-bottom" alt="beerday">
                        </div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading">My Best</h2>
                            <p class="lead-original">たった10秒!あなたにぴったりな埼玉ビールをご紹介します</p>
                            <a href="chart_todo.php" class="btn btn-outline-primary">My Bestを見つける</a>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <img src="/img/index3.jpg" class="card-img-bottom" alt="craftbeer">
                        </div>
                    </div>
                    <hr class="featurette-divider">
                    <!-- /END THE FEATURETTES -->
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
