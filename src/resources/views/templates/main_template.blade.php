<body>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Rejestracja</h4>
            </div>
            <div class="modal-body">
                <div class="input_row">
                    <input type="email" placeholder="Podaj adres e-mail" required>
                </div>
                <div class="input_row">
                    <input type="password" placeholder="Podaj hasło" required>
                </div>
                <div class="input_row">
                    <input type="password" placeholder="Powtórz hasło" required>
                </div>
                <blockquote>
                    Rejestracji konta możesz dokonać korzystając ze skrzynki e-mail w doenie która jest zarejestrowana w naszym Programie Partnerskim.
                </blockquote>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Rezygnuję</button>
                <button type="button" class="btn btn-primary">Zarejestruj</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Logowanie</h4>
            </div>
            <div class="modal-body">
                <div class="input_row">
                    <input type="email" placeholder="Podaj adres e-mail" required>
                </div>
                <div class="input_row">
                    <input type="password" placeholder="Podaj hasło" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Rezygnuję</button>
                <button type="button" class="btn btn-primary">Zaloguj</button>
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<div id="cookies">
    <p>Używamy plików cookies, by ułatwić korzystanie z serwisu WYBOROWA. Jeśli nie źyczysz sobie, aby pliki cookies
        były zapisywane na Twoim dysku, zmień ustawienia swojej przeglądarki tak by pliki cookies nie mogły być
        zapisane. Jeżeli nie wyrażasz zgody na używanie przez nas plików cookies, opuść tą stronę. Kontynuacja
        przeglądania oznacza Twoją zgodę na używanie przez nas plików cookies.</p>
    <div class="btn btn-danger" id="cookies_close">Ok rozumiem</div>
</div>
<div id="help_bar">
    <div class="box_with animated">
        <div class="close_help fa fa-close"></div>
        <h2>Potrzebujesz pomocy?</h2>
        <p>Sprawdź jak przygotować się do szkoleń.</p>
        <a href="/" class="default-button creme sm">Dowiedz się wiecej</a>
    </div>
    <img class="help_girl" style="cursor: pointer;z-index:999;position: relative;" src="{{ asset('sources/img/girls.png') }}" alt="">
</div>
<section class="header">
    <div class="container">
        <div class="head_logreg col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <div id="log-in_box">
                <form action="" id="login_form">
                    <h1>
                        Zaloguj się
                    </h1>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 no_padding">
                                <input type="email" placeholder="Podaj adres e-mail" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 no_padding">
                                <input type="password" placeholder="Podaj hasło" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 no_padding">
                                <button type="submit"> Zaloguj</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div id="reg-in_box">
                <form action="" id="register_form">
                    <h1>
                        Zarejestruj się
                    </h1>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 no_padding">
                                <input type="email" placeholder="Podaj adres e-mail" required>
                                <p>
                                    Rejestracji konta możesz dokonać korzystając ze skrzynki e-mail w doenie która jest
                                    zarejestrowana w naszym Programie Partnerskim.
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 no_padding">
                                <input type="password" placeholder="Podaj hasło" required>
                                <input type="password" placeholder="Powtórz hasło" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 no_padding">
                                <button type="submit"> Zarejestruj</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="color_box pull-right">
                <a href="javascript:void(0)" id="login_box">
                    <img src="{{ asset('sources/img/users_icon.png') }}" alt=""><span>Logowanie</span>
                </a>
                <a href="javascript:void(0);" id="reg_box">
                    <img src="{{ asset('sources/img/register_icon.png') }}" alt=""><span>Rejestracja</span>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 no_padding">
            <a href="/" class="gdata_logo"></a>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding article_header">
                <h1>LOREM IPSUM DOLOR SIT AMENT. MINUTRIUM AMIS DOLOR.</h1>
                <p>
                    Programy G Data Software nieprzerwanie od wielu lat zdobywają nagrody w większości testów
                    antywirusowych w całej Europie.
                </p>
                <a href="/" class="default-button">Dowiedz się wiecej</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <div id="navigation">
                <button type="button" class="navbar-toggle collapsed" onclick="$('#navi_ul').toggle()"
                        data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul id="navi_ul">
                    <li><a href="">Terminarz</a></li>
                    <li><a href="">Prelegenci</a></li>
                    <li><a href="">O nas</a></li>
                    <li><a href="">Multimedia</a></li>
                    <li><a href="">Kontakt</a></li>
                    <li class="show_on_mobile_navi" data-toggle="modal" data-target="#register_modal"><a
                            class="activated" href="javascript:void(0);">Rejestracja</a></li>
                    <li class="show_on_mobile_navi" data-toggle="modal" data-target="#login_modal"><a
                            class="activated" href="javascript:void(0);">Logowanie</a></li>
                </ul>
            </div>
        </div>

    </div>
</section>
<section class="site_content">
    @yield ('content')
</section>
<div class="container ">
    <footer>
        <div class="col-md-5 col-xs-12 col-md-5 col-sm-12 box_with_logo">
            <div class="col-xs-5 col-md-5 col-sm-5 col-lg-5"><img class="bottom-logo pull-right"
                                                                  style="max-width: 100%;"
                                                                  src="{{ asset('sources/img/bottom_logo.png') }}" class="pull-right" alt="">
            </div>
            <div class="col-xs-7 col-md-7 col-sm-5 col-lg-7">
                <p class="copy-right">
                    © 2015 Wszelkie prawa zastrzeżone <br>
                    G DATA Software Sp. z o.o.
                </p>
                <a href="" class="social-icon fb"></a>
                <a href="" class="social-icon tw"></a>
                <a href="" class="social-icon yt"></a>
            </div>
        </div>
        <div class="col-md-2 col-xs-12 col-lg-2 col-sm-12 box_with_links">
            <ul>
                <li><a href="">Rejestracja</a></li>
                <li><a href="">Terminarz</a></li>
                <li><a href="">Prelegenci</a></li>
                <li><a href="">O nas</a></li>
                <li><a href="">Multimedia</a></li>
                <li><a href="">Kontakt</a></li>
            </ul>
        </div>
        <div class="col-md-5 col-xs-12 col-lg-5 col-sm-12 box_with_newsletter">
            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 no_padding">
                <p>NEWSLETTER <br>
                    Zapisz się do naszego newslettera</p>
                <form method="post" id="newsletter_form">
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                           placeholder="Adres e-mail" required>
                    <button type="submit" id="ok_button" class="btn btn-default">OK</button>
                </form>
            </div>
        </div>

    </footer>
</div>
<script src="{{ asset('sources/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('sources/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('sources/js/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('sources/js/fullcalendar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('sources/js/lang-all.js') }}" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js" type="text/javascript"></script>
<script src="{{ asset('sources/js/main.js') }}"></script>
<script src="//malsup.github.com/jquery.cycle2.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

</body>
</html>