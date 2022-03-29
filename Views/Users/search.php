<?php
    session_start();
    require_once(ROOT_PATH . 'Controllers/UserController.php');
    $user = new UserController();
    $products = $user->product();

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
<link href="/css/search.css" type="text/css" rel="stylesheet">
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
                <a href="account.php?id=<?= $_SESSION['id']; ?>" class="btn btn-primary">Account</a>
            </div>
        </header>
        <main>
            <h3 class="search-title">黒ビール</h3>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_10.png" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">COEDO 漆黒 -Shikkoku-</h5>
                        <a href="detail.php?id=<?= $products['beers'][9]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="10">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_15.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">所沢ビール Pharaoh</h5>
                        <a href="detail.php?id=<?= $products['beers'][14]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="15">
                            <div class="btn-good  <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <h3 class="search-title">ラガービール</h3>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_2.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">こぶし花ビール</h5>
                        <a href="detail.php?id=<?= $products['beers'][1]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="2">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_7.png" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">COEDO 毬花 -Marihana-</h5>
                        <a href="detail.php?id=<?= $products['beers'][6]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="7">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_9.png" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">COEDO 伽羅 -Kyara-</h5>
                        <a href="detail.php?id=<?= $products['beers'][8]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="9">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_11.png" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">COEDO 紅赤 -Beniaka-</h5>
                        <a href="detail.php?id=<?= $products['beers'][10]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="11">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_22.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">Shikibeer AMBER</h5>
                        <a href="detail.php?id=<?= $products['beers'][21]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="22">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <h3 class="search-title">フルーツビール</h3>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_14.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">所沢ビール 3355</h5>
                        <a href="detail.php?id=<?= $products['beers'][13]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="14">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_17.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">所沢ビール Smoked Lemon</h5>
                        <a href="detail.php?id=<?= $products['beers'][16]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="17">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_19.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">Shikibeer YAMABUKI </h5>
                        <a href="detail.php?id=<?= $products['beers'][18]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="19">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_20.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">Shikibeer JUNOS </h5>
                        <a href="detail.php?id=<?= $products['beers'][19]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="20">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_21.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">Shikibeer MARIGOLD</h5>
                        <a href="detail.php?id=<?= $products['beers'][20]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="21">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <h3 class="search-title">エールビール</h3>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_1.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">アラビアンライム・エール</h5>
                        <a href="detail.php?id=<?= $products['beers'][0]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="1">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_3.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">ペールエール華熊</h5>
                        <a href="detail.php?id=<?= $products['beers'][2]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="3">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_4.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">雑穀ヴァイツェン</h5>
                        <a href="detail.php?id=<?= $products['beers'][3]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="4">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_5.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">コバトンビール</h5>
                        <a href="detail.php?id=<?= $products['beers'][4]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="5">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_6.png" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">COEDO 瑠璃 -Ruri-</h5>
                        <a href="detail.php?id=<?= $products['beers'][5]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="6">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_8.png" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">COEDO 白 -Shiro-</h5>
                        <a href="detail.php?id=<?= $products['beers'][7]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="favorite_count" action="#" method="post">
                            <input type="hidden" name="beer_id">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>">
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_12.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">所沢ビール Bitches Brew</h5>
                        <a href="detail.php?id=<?= $products['beers'][11]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="12">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_13.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">所沢ビール The Cannonball</h5>
                        <a href="detail.php?id=<?= $products['beers'][12]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="13">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_16.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">所沢ビール Milestone</h5>
                        <a href="detail.php?id=<?= $products['beers'][15]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="16">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_18.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">Shikibeer CARMINE</h5>
                        <a href="detail.php?id=<?= $products['beers'][17]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="18">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="re-card">
                <div>
                    <img src="/img/beerId_23.jpeg" class="card-img-top" alt="search_img">
                </div>
                <div class="card-body f-box">
                    <div class="content col-md-9">
                        <h5 class="card-title">Shikibeer PEARL </h5>
                        <a href="detail.php?id=<?= $products['beers'][22]['id']; ?>" class="btn btn-outline-dark">more</a>
                    </div>
                    <div style="margin-top: auto;">
                        <form class="post" name="form_favorite" action="#" method="post" data-beer_id="23">
                            <div class="btn-good <?php if($cnt > 0) echo ' active'; ?>"> 
                                <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                <i class="fa-heart fa-lg px-16
                                <?php 
                                if($cnt > 0){ //いいね押したらハートが塗りつぶされる 
                                    echo ' active fas';
                                }else{ //いいねを取り消したらハートのスタイルが取り消される
                                    echo ' far';
                                }; ?>"></i>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/like.js"></script> 

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>

