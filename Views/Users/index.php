<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/product.css" type="text/css" rel="stylesheet">

    <title>BeerS!</title>
  </head>
  <body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Main Page</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <a href="login.php" class="btn btn-outline-secondary me-2">Login</a>
                <a href="signup.php" class="btn btn-outline-primary">Signup</a>
            </div>
        </header>
        <main>
        <div class="card topimg" onclick="scrollToTop()">
            <img src="/img/index.jpg" class="img-fluid" alt="index_img">
            <a href="#" class="scroll-down" address="true" ></a>
        </div>
        <h3 style="margin-top: 2rem;">彩の国ビールのご紹介</h3>
        <div id="target" class="row-original">
            <div class="col-lg-4 moimg1">
                <img src="/img/coedo.jpeg" class="top-beer rounded-circle" width="140" height="140">
                <h5 style="margin-top: 1rem">COEDO</h5>
                <p class="lead-original">個性豊かなビールを川越から世界へ。強烈な個性と職人が細部までこだわり抜いたCOEDOビールを味わってください。</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 moimg1">
                <img src="/img/kobaton.jpeg" class="top-beer rounded-circle" width="140" height="140">
                <h5 style="margin-top: 1rem">コバトンビール</h5>
                <p class="lead-original">埼玉県のマスコットキャラクター「コバトン」が描かれています。すっきりとフルーティーなビールで埼玉県民、必飲です。</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 moimg1">
                <img src="/img/tokorozawa.jpeg" class="top-beer rounded-circle" width="140" height="140">
                <h5 style="margin-top: 1rem">所沢ビール</h5>
                <p class="lead-original">職人の情熱が詰まった厳選されたビールです。常に進化を遂げる所沢ビールの今をご賞味ください。</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Special Time</h2>
                <p class="lead-original">埼玉には、おうち時間を彩るビールがあります。ちょっと贅沢な時間をBeerS!から始めませんか?</p>
                <a class="btn btn-outline-secondary" href="about.php">About</a>
            </div>
            <div class="col-md-5">
                <img src="/img/index2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">My Best</h2>
                <p class="lead-original">新規登録をして私たちと埼玉ビールの魅力を深めましょう!一度ハマったら抜け出せないかもしれません。</p>
                <a href="signup.php" class="btn btn-outline-primary">Signup</a>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="/img/index3.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
        </main>
        <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="/js/index.js"></script> 
    <script type="text/javascript"> /* この中にjQueryのコード */ </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


