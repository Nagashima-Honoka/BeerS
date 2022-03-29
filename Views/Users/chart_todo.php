<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Custom styles for this template -->
<link href="/css/chart.css" rel="stylesheet">

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
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 fw-normal">Perfect for you</h1>
                        <p style="font-size: 1rem;">個性豊かな埼玉のクラフトビールは、その時の気分によって味わいも様々です。最適で最高なビールをパパッと選びましょう。</p>
                        <a class="btn btn-outline-secondary" href="chart.php">My Bestを見つける</a>
                    </div>
                    <div class="product-device shadow-sm d-none d-md-block"></div>
                    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>

            <ul class="gallery">
                <li class="gallery-item">
                    <figure>
                        <img src="/img/chart1.jpeg" alt="写真：イメージ1">
                        <figcaption>No.1<br>直感で"Yes or No"を選ぶだけ</figcaption>
                    </figure>
                </li>
                <li class="gallery-item">
                    <figure>
                        <img src="/img/chart2.jpeg" alt="写真：イメージ2">
                        <figcaption>No.2<br>BeerS!があなたにピッタリなビールを抽出します</figcaption>
                    </figure>
                </li>
                <li class="gallery-item">
                    <figure>
                        <img src="/img/chart3.jpeg" alt="写真：イメージ3">
                        <figcaption>No.3<br>選択してたったの10秒!最適なビールをおすすめ</figcaption>
                    </figure>
                </li>
                <li class="gallery-item">
                    <figure>
                        <img src="/img/chart4.jpeg" alt="写真：イメージ4">
                        <figcaption>No.4<br>実際に飲んで、いいね&記録に残しましょう</figcaption>
                    </figure>
                </li>
            </ul>
        </main>
        <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/chart.js"></script> 

<!-- Option 1: Bootstrap Bundle with Popper -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
