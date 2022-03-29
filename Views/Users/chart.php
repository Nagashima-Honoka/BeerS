<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/chart.css" type="text/css" rel="stylesheet">

    <title>BeerS!</title>
  </head>
  <body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="main.php" class="nav-link px-2 link-secondary">Home</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <a href="logout.php" class="btn btn-outline-secondary me-2">Logout</a>
                <a href="account.php?id=<?= $_SESSION['id'] ?>" class="btn btn-primary">Account</a>
            </div>
        </header>
        <main>
            <div class="yesno clearfix">
                <!-- Question -->
                <div id="q_01" class="positionFit">
                    <h2>Question1</h2>
                    <p class="chart-font">最近ビールをよく飲む</p>
                    <ul class="col_2">
                        <li><a href="#q_02_A" class="yn_btn btn btn-outline-secondary">Yes</a></li>
                        <li><a href="#q_02_B" class="yn_btn btn btn-outline-secondary">No</a></li>
                    </ul>
                </div>
                <div id="q_02_A" style="display: none;">
                    <h2>Question2</h2>
                    <p class="chart-font">ビールの苦味が好き</p>
                    <ul class="col_2">
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_03_A">YES</a></li>
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_03_B">NO</a></li>
                    </ul>
                </div>
                <div id="q_02_B" style="display: none;">
                    <h2>Question2</h2>
                    <p class="chart-font">ビールの喉ごしを味わいたい</p>
                    <ul class="col_2">
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_03_D">YES</a></li>
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_03_E">NO</a></li>
                    </ul>
                </div>
                <div id="q_03_A" style="display: none;">
                    <h2>Question3</h2>
                    <p class="chart-font">濃厚で深みのあるビールが飲みたい</p>
                    <ul class="col_2">
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_04_A">YES</a></li>
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_04_B">NO</a></li>
                    </ul>
                </div>
                <div id="q_03_B" style="display: none;">
                    <h2>Question3</h2>
                    <p class="chart-font">すっきりとフルーティーなビールが飲みたい</p>
                    <ul class="col_2">
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_04_C">YES</a></li>
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_04_D">NO</a></li>
                    </ul>
                </div>
                <div id="q_03_D" style="display: none;">
                    <h2>Question3</h2>
                    <p class="chart-font">ビールっぽさがある方がいい</p>
                    <ul class="col_2">
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_04_B">YES</a></li>
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_04_C">NO</a></li>
                    </ul>
                </div>
                <div id="q_03_E" style="display: none;">
                    <h2>Question3</h2>
                    <p class="chart-font">カクテルのようなビールが飲みたい</p>
                    <ul class="col_2">
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_04_C">YES</a></li>
                        <li><a class="yn_btn btn btn-outline-secondary" href="#q_04_D">NO</a></li>
                    </ul>
                </div>
                <!-- Answer -->
                <div id="q_04_A" style="display: none;">
                <h5 style="color: #999999;">あなたにおすすめの埼玉ビールは・・・</h5>
                    <ul class="col_1">
                        <li>黒ビール</li>
                    </ul>
                    <div class="d-grid gap-2">
                        <a href="search.php" class="btn btn-outline-primary" type="button">My Bestを探す</a>
                    </div>
                </div>
                <div id="q_04_B" style="display: none;">
                    <h5 style="color: #999999;">あなたにおすすめの埼玉ビールは・・・</h5>
                    <ul class="col_1">
                        <li style="color: #FF0066;">ラガービール</li>
                    </ul>
                    <div class="d-grid gap-2">
                        <a href="search.php" class="btn btn-outline-primary" type="button">My Bestを探す</a>
                    </div>
                </div>
                <div id="q_04_C" style="display: none;">
                    <h5 style="color: #999999;">あなたにおすすめの埼玉ビールは・・・</h5>
                    <ul class="col_1">
                        <li style="color: #33FFCC;">フルーツビール</li>
                    </ul>
                    <div class="d-grid gap-2">
                        <a href="search.php" class="btn btn-outline-primary" type="button">My Bestを探す</a>
                    </div>
                </div>
                <div id="q_04_D" style="display: none;">
                    <h5 style="color: #999999;">あなたにおすすめの埼玉ビールは・・・</h5>
                    <ul class="col_1">
                        <li style="color: #FF6600;">エールビール</li>
                    </ul>
                    <div class="d-grid gap-2">
                        <a href="search.php" class="btn btn-outline-primary" type="button">My Bestを探す</a>
                    </div>
                </div>
                <div id="q_04_D" style="display: none;">
                    <h5 style="color: #999999;">なたにおすすめの埼玉ビールは・・・</h5>
                    <ul class="col_1">
                        <li style="color: #33FFCC">フルーツビール</li>
                    </ul>
                    <div class="d-grid gap-2">
                        <a href="search.php" class="btn btn-outline-primary" type="button">My Bestを探す</a>
                    </div>
                </div>
            </div>
            <video autoplay muted playsinline src="/img/Beer59600.mp4" loop autoplay muted></video>
        </main>
        <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $(".yn_btn").on("click", function() {
                $(this).closest("div").css("display","none");
                id = $(this).attr("href");              
                $(id).addClass("positionFit").show("fast");
            });
        });   
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


