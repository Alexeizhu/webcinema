<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Movie Store</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script type="text/javascript">
          let a = ["аниме", "биографический", "боевик", "вестерн", "военный", "детектив", "детский", "документальный",
          "драма", "исторический", "кинокомикс", "комедия", "концерт", "короткометражный",
          "криминал", "мелодрама", "мистика", "музыка", "мультфильм", "мюзикл",
          "научный", "нуар", "приключения", "реалити-шоу", "семейный", "спорт",
          "эротика", "фэнтези", "фантастика", "ужасы", "триллер", "ток-шоу"];
          let max = 31, min = 0;

          function randomr() {
            let b = Math.round(Math.random() * (max - min) + min);
            document.querySelector('.asd').innerHTML = a[b];
        }
        </script>
        <script src="js/scripts.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="image/logo.png" width="120" height="23" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Фильмы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Сериалы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="games.php">Игры</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Комиксы</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-secondary nav-link" onclick="randomr();">Случайный выбор жанра: </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><span class="asd"></span></a>
              </li>
            </ul>
          </div>
        </div>
        </nav>
        <section class="features-icons text-center">
            <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <h4>Список игр:</h4>
                      <a href="game.php">Игра "Угадай число"</a>
                  </div>
                </div>
            </div>
        </section>
        <footer class="footer fixed-bottom bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="">О нас</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="">Контакт</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Movie Store 2021. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href=""><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href=""><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
