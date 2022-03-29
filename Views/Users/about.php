<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="/css/carousel.css" rel="stylesheet">

    <title>BeerS!</title>
  </head>
  <body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Main page</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
                <a href="signup.php" class="btn btn-primary">Signup</a>
            </div>
        </header>
        <main>
            <div class="card container">
                <div class="row" style="background-color: black;">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="about-font">BeerS!</h5>
                            <p class="card-text" style="color: white;">埼玉には知られていない魅力がたくさんあります。<br>コロナ禍で今では当たり前になった家飲みに、埼玉のクラフトビールはいかがですか?<br>BeerS!では、そんな未知なる埼玉ビールとあなたの出会いを支えます。</p>
                            <a href="signup.php" class="btn btn-outline-light">Sign up now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="/img/saitamaLogo_black.jpeg" class="img-fluid rounded-start" alt="saitama_logo">
                    </div>
                </div>
            </div>
            <!--/slider-->
            <ul class="slider">
                <li><img src="/img/beerId_1.jpeg" alt=""></li>
                <li><img src="/img/beerId_18.jpeg" alt=""></li>
                <li><img src="/img/beerId_12.jpeg" alt=""></li>
                <li><img src="/img/beerId_6.png" alt=""></li>
                <li><img src="/mg/beerId_5.jpeg" alt=""></li>
                <li><img src="/mg/beerId_16.jpeg" alt=""></li>
            </ul>
            <div class="row row-cols-1 row-cols-md-2 g-2">
                <div class="col">
                    <div class="card">
                    <img src="/img/about2.jpeg" class="card-img-top" alt="about2">
                    <div class="card-body">
                        <h5 class="card-title" style="color: blue;">Discover</h5>
                        <p class="card-text">質問に答えてたった10秒！<br>あなたに合う埼玉ビールをご紹介します。</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="/img/about1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: green;">Pick up</h5>
                        <p class="card-text">気になるビールをお気に入り登録！<br>記録して最高の一杯を思い出に残しましょう。</p>
                    </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>

    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--/slider-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--自作のJS-->
    <script type="text/javascript" src="/js/carousel.js"></script>


  </body>
</html>


