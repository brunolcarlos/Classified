<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta property="description" content="Car Sale New - In English - Spanish and Portuguese">
        <meta property="og:title" content="Car Sale New - Come find the car of your dreams"/>
        <meta property="og:description" content="Car Sale New - In English - Spanish and Portuguese"/>
        <meta property="og:image" content="<?= base_url('img/carroOg.jpg') ?>"/>
        <link rel="icon" href="<?= base_url('img/icone.png') ?>">
        <link href="<?= base_url('css/materialize.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('css/style.css') ?>" rel="stylesheet" type="text/css"/>
        <script src="<?= base_url('js/jquery.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('js/materialize.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('js/eventos.js') ?>" type="text/javascript"></script>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <header id="top">
            <nav>
                <div class="#01579b light-blue darken-4 topo">
                    <div class="container"  style="background: #303030">
                        <a href="<?= base_url() ?>" class="brand-logo fundoLogo"><img class="logo" src="<?= base_url('img/logo.fw.png') ?>"></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse sand"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="#">Register</a></li>
                            <li class="active #0277bd light-blue darken-3"><a class="ativo" href="">Publish</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <ul class="side-nav fundoMenu" id="mobile-demo">
                            <li>
                                <div class="userView">
                                    <img class="background" src="<?= base_url('img/carro.jpg') ?>">
                                    <a href="#"><img class="circle" src="<?= base_url('img/familia.jpg') ?>"></a>
                                    <a href="#" class="resetaBackground"><span class="white-text name">Bruno</span></a>
                                    <a href="#" class="resetaBackground"><span class="white-text email">sitespomerode@gmail.com</span></a>
                                </div>
                            </li>
                            <li class="linhaMenu"><a href="<?= base_url() ?>" class="corMenu">Home</a></li>
                            <li class="linhaMenu"><a href="#" class="corMenu">Register</a></li>
                            <li class="linhaMenu"><a href="#" class="corMenu">Publish</a></li>
                            <li class="linhaMenu"><a href="#" class="corMenu">Contact</a></li>
                        </ul>
                    </div>
                </div><!--Aqui acaba a div do menu-->
            </nav>
            <div class="row container">
                <div class="col s12 m12 l12">
                    <div>
                        <img class="bandeiras" src="<?= base_url('img/United-States-Flag-icon.png') ?>">
                        <img class="bandeiras" src="<?= base_url('img/Brazil-Flag-icon.png') ?>">
                        <img class="bandeiras" src="<?= base_url('img/Spain-Flag-icon.png') ?>">
                    </div>
                </div>
            </div><!--Aqui acaba a div container dos flags-->
            <div class="selecoes #f5f5f5 grey lighten-4">
                <form>
                    <div class="row container">
                        <div class="col s12 m6 l7 input-field col s12">
                            <input type="text" id="models">
                            <label for="models">Search for models</label>
                            </select>
                        </div>
                        <div class="input-field col s6 m3 l2">
<!--<i class="material-icons prefix iconeSerach">search</i>-->
                            <input type="number" id="min">
                            <label for="min">Price min</label>
                        </div>
                        <div class="input-field col s6 m3 l2">
<!--<i class="material-icons prefix iconeSerach">search</i>-->
                            <input type="number" id="max">
                            <label for="max">Price max</label>
                        </div>
                    </div>
                </form>
            </div>
            <a class="btn-floating btn-large waves-effect waves-light red btnBuscar">
                <i class="material-icons">search</i>
            </a>
        </header>

        <div class="row container">
            <div class="col s12 m12 l8 AnunciosCarros">
                <center><h3>Page not found</h3></center>
            </div>
        </div>

        <footer class="page-footer #01579b light-blue darken-4 topo">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">Wait ... CarsaleNew is in developement.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right links scroll" href="#top">Top</a>
                </div>
            </div>
        </footer>
    </body>
</html>
