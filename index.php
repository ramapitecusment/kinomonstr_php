<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MonsterKino</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <nav roles="navigation" class="navbar navbar-inverse">
                    <div class="container">

                        <div class="navbar-header">

                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1><a href="index.html">Киномонстр</a></h1>
                                        <p>Кино - наша страсть</p>
                                    </div>
                                </div>

                            </div>

                            <button type="button" data-target="#navbarCollapse" data-toggle="collapse"
                                class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="index.html">Главная</a></li>
                                <li><a href="#">Фильмы</a></li>
                                <li><a href="#">Сериалы</a></li>
                                <li><a href="#">Рейтинг фильмов</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-lg-push-3">

                    <form action="" role="search" class="visible-xs" method = "POST" action="pages/search.php">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" class="form-control input-lg" placeholder="Ваш запрос" name="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-lg" type="submit" name = "srch-btn"><i
                                            class="glyphicon glyphicon-search" ></i></button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <h2>Новые фильмы</h2>
                    <hr>
                    <div class="row">

                        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <img src="img/inter.png" alt="Интерстеллар">
                            <div class="film_label">Интерстеллар</div>
                        </div>

                        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <img src="img/matrix.png" alt="Матрица">
                            <div class="film_label">Матрица</div>
                        </div>

                        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <img src="img/cloud.png" alt="Облачный атлас">
                            <div class="film_label">Облачный атлас</div>
                        </div>

                        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <img src="img/max.png" alt="Безумный Макс">
                            <div class="film_label">Безумный Макс</div>
                        </div>


                    </div>

                    <div class="margin-8"></div>

                    <h2>Новые сериалы</h2>
                    <hr>
                    <div class="row">

                        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <img src="img/xfiles.png" alt="Секретные Материалы">
                            <div class="film_label">Секретные Материалы</div>
                        </div>

                        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <img src="img/silicon.png" alt="Кремневая долина">
                            <div class="film_label">Кремневая долина</div>
                        </div>

                        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <img src="img/dead.png" alt="Ходячие мертвецы">
                            <div class="film_label">Ходячие мертвецы</div>
                        </div>

                        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <img src="img/breakingbad.png" alt="Во все тяжкие">
                            <div class="film_label">Во все тяжкие</div>
                        </div>

                    </div>

                    <div class="margin-8"></div>

                    <a href="#">
                        <h3>Как снимали Интерстеллар</h3>
                    </a>
                    <hr>
                    <p>
                        45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи
                        работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом
                        изначально занималась студия Paramount. Когда Кристофер Нолан занял место режиссера, студия
                        Warner Bros., которая выпускала его последние фильмы, добилась участия в проекте.
                    </p>

                    <a href="#" class="btn btn-warning pull-right">Читать</a>

                    <div class="margin-8"></div>

                    <a href="#">
                        <h3>Актер Том Хенкс поделился впечатлением о фестивале</h3>
                    </a>
                    <hr>
                    <p>16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо
                        ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл,
                        Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.</p>

                    <a href="#" class="btn btn-warning pull-right">Читать</a>

                    <div class="margin-8 clear"></div>
                </div>

                <!--  -->
                <!--  -->

                <div class="col-lg-3 col-lg-pull-9">

                    <div class="panel panel-info hiden-xs">
                        <div class="panel-heading">
                            <div class="sidebar-header">Поиск</div>
                        </div>
                        <div class="panel-body">
                            <form  role="search"  method = "GET" action="pages/search.php">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" class="form-control input-lg" placeholder="Ваш запрос" name = "name">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default btn-lg" type="submit" name = "search-btn"><i
                                                    class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                    if(isset($_GET['srch-btn'])){
                        
                        $name = mysqli_real_escape_string($connection,trim($_GET['name']));
                        if(!empty($name)){
                            
                            header('location: pages/search.php?get=$name');
                        }
                        
                        }
                    ?>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="sidebar-header">Вход</div>
                        </div>
                        <div class="panel-body">

                            <form action="" role="login">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Логин">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" placeholder="Пароль">
                                </div>
                                <button type="submit" class="btn btn-warning pull-right">Вход</button>
                            </form>

                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="sidebar-header">Новости</div>
                        </div>
                        <div class="panel-body">

                            <form action="" role="news">
                                <div class="form-group">
                                    <p>Hello news</p>
                                </div>
                                <div class="form-group">
                                    <p>There is some good news</p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="sidebar-header">Рейтинг</div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">

                                <li class="list-group-item list-group-warning">
                                    <span class="badge">8.9</span>
                                    <a href="#">Интерстеллар</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <span class="badge">8.7</span>
                                    <a href="#">Безумный Макс</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <span class="badge">8.3</span>
                                    <a href="#">Матрица</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <span class="badge">8.1</span>
                                    <a href="#">Особый атлас</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <span class="badge">8.9</span>
                                    <a href="#">Секретные материалы</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <span class="badge">8.7</span>
                                    <a href="#">Кремневая долина</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <span class="badge">8.3</span>
                                    <a href="#">Ходячие мертвецы</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <span class="badge">8.1</span>
                                    <a href="#">Во все тяжкие</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="clear">

        </div>

    </div>

    </div>

    <!--  -->
    <!--  -->

    <footer>
        <div class="contaier">

            <p class="text-center"><a href="#">Мой сайт</a></p>

        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>