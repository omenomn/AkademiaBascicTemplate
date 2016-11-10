<body>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
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
                        aria-hidden="true">×</span></button>
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
                <form id="login_form" action='{{ route('post.login') }}' method='POST'>
                    {{ csrf_field() }}
                    <h1>
                        Zaloguj się
                    </h1>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 no_padding">
                                <input type="email" name='email' placeholder="Podaj adres e-mail" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 no_padding">
                                <input type="password" name='password' placeholder="Podaj hasło" required>
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
<div class="container ">
    <section class="site_content">
        <h1>{{ $page->title }}</h1>
        {!! $page->content !!}
        <h4>{{ $page->created_at }}</h4>
    </section>
</div>
<div class="container no_padding">
    <div class="separator with_info"><span>Najbliższe szkolenie</span></div>
</div>
<div class="container">

    <div class="row with_callendar col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 left_box no_padding">
            <div class="date_title">
                <h1 id="date_day"></h1>
                <h4 id="month_name"></h4>
                <ul class="event_ul">
                    <li id="eventTitle"></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 callendar_box ">
                <div id='calendar'></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 right_box event_information" event-id="">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
                <h2 class="eventTitle"></h2>
                <p class="eventCategory"></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 no_padding_left host_section">
                    <div class="full_width"><img class="hostPhoto img-circle" src="" alt=""></div>
                    <h4 class="host_name"></h4>
                    <h4 class="host_surname"></h4>
                    <p class="host_desc"></p>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 no_padding">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <div class="red_box col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h1>Zarys szkolenia</h1>
                            <div class="event_draw"></div>
                            <p class="dur_tit">Czas trwania</p>
                            <div class="duration">
                                <i><img src="{{ asset('sources/img/small_clock_white.png') }}" alt=""></i><span
                                    class="eventDuration"></span>
                            </div>
                        </div>                            
                        <a href="/" id='login-button' class="black_reg col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="">
                                    ZAPISZ SIĘ
                                </div>
                            </a>
                        <div class="shortDesc"></div>
                    </div>
                    <div class="col--xs-12 col-sm-12 col-md-6 col-lg-6 no_padding">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a id='event-more' class="default-button sm red more-button">Dowiedz się więcej</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 three_box">
            <div class="inside_box">
                <p class="data_row"><img src="{{ asset('sources/img/small_clock_grey.png') }}" alt=""><span>dodane: 22 września 2015</span>
                </p>
                <h3>30 lat G DATA – od czasów studenckich do globalnej korporacji</h3>
                <p class="inside_text">
                    We wrześniu 2015 roku G DATA Software AG obchodzi swoje 30 urodziny. Firma, założona przez dwóch
                    studentów informatyki z Bochum, miasta w Zagłebiu Ruhry, opracowała pierwszy na świecie program
                    antywirusowy.
                </p>
            </div>
            <a href="/" class="default-button sm pull-right">Dowiedz się więcej</a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 three_box">
            <div class="inside_box">
                <p class="data_row"><img src="{{ asset('sources/img/small_clock_grey.png') }}" alt=""><span>dodane: 22 września 2015</span>
                </p>
                <h3>Bezpieczne rozmowy z G DATA SECURE CHAT</h3>
                <p class="inside_text">
                    By mieć pewność, że nasze prywatne wiadomości czy biznesowe informacje trafią wyłącznie do
                    adresatów,
                    warto zainstalować aplikację szyfrującą G DATA. O tym co dzieje się z naszymi wiadomościami,
                    zdjęciami, filmami, czy danymi zgromadzonymi na smartfonie powinniśmy decydować wyłącznie my.
                </p>
            </div>
            <a href="/" class="default-button sm pull-right">Dowiedz się więcej</a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 three_box">
            <div class="inside_box">
                <p class="data_row"><img src="{{ asset('sources/img/small_clock_grey.png') }}" alt=""><span>dodane: 22 września 2015</span>
                </p>
                <h3>30 lat G DATA – od czasów studenckich do globalnej korporacji</h3>
                <p class="inside_text">
                    We wrześniu 2015 roku G DATA Software AG obchodzi swoje 30 urodziny. Firma, założona przez dwóch
                    studentów informatyki z Bochum, miasta w Zagłebiu Ruhry, opracowała pierwszy na świecie program
                    antywirusowy.
                </p>
            </div>
            <a href="/" class="default-button sm pull-right">Dowiedz się więcej</a>
        </div>
    </div>

</div>
<div class="container no_padding">
    <div class="separator with_info"><span>STAŁE WEBINARIA</span></div>
</div>
<div class="container">
    <div id="slider" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding cycle-slideshow"
         data-cycle-timeout="0" data-cycle-fx="fade" data-cycle-slides="> div">
        <div class="slider_content">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no_padding left_box">
                <div class="big_play_button"><img src="{{ asset('sources/img/big_play_button.png') }}" alt=""></div>
                <div class="youtube_video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kucP6R7JrJs" frameborder="0"
                            allowfullscreen></iframe>
                </div>
                <div class="video_image" style="background-image:url('img/gostek.jpg');">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no_padding right_box">
                <h2>
                    G DATA ANTIVIRUS <br> BUSSINESS <br> JAKO PODSTAWOWA <br> OCHRONA <br> ANTYWIRUSOWA
                </h2>
                <p>
                    Przedstawienie rozwiązania od strony funkcjonalnej. Korzystając z prezentacji online, w dogodnym
                    czasie możesz spotykać się z wysokiej klasy specjalistą, który wyjaśni specyfikę produktu, jego
                    cechy, funkcje, oraz korzyści.
                </p>
            </div>
        </div>
        <div class="slider_content">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no_padding left_box">
                <div class="big_play_button"><img src="{{ asset('sources/img/big_play_button.png') }}" alt=""></div>
                <div class="youtube_video">
                    <iframe width="560" height="315" src="//www.youtube.com/embed/kucP6R7JrJs" frameborder="0"
                            allowfullscreen></iframe>
                </div>
                <div class="video_image" style="background-image:url('img/gostek.jpg');">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no_padding right_box">
                <h2>
                    G DATA ANTIVIRUS <br> BUSSINESS <br> JAKO PODSTAWOWA <br> OCHRONA <br> ANTYWIRUSOWA V2
                </h2>
                <p>
                    Przedstawienie rozwiązania od strony funkcjonalnej. Korzystając z prezentacji online, w dogodnym
                    czasie możesz spotykać się z wysokiej klasy specjalistą, który wyjaśni specyfikę produktu, jego
                    cechy, funkcje, oraz korzyści.
                </p>
            </div>
        </div>
        <a id="prev" class="cycle-prev"></a>
        <a id="next" class="cycle-next"></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding getready">
        <div class="top_bar col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 left_title"><h1>Jak się przygotować?</h1></div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 right_info">
                <p>Najbliższe szkolenie: <b>20 Pażdziernika 2015</b></p>
                <p>Rejestracja do dnia <b>19.10.2015 do godziny 19:00</b></p>
            </div>
        </div>
        <div class="bottom_bar col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding">
            <div class="webinar_box">
                <div class="col-md-12 no_padding image_box"><img src="{{ asset('sources/img/date_icon.png') }}" alt=""></div>
                <p>Wybierz datę <b>webinariów</b></p>
            </div>
            <div class="webinar_box">
                <div class="col-md-12 no_padding image_box"><img src="{{ asset('sources/img/webdate_icon.png') }}" alt=""></div>
                <p>Zarejestruj siebie lub swoją firmę w <b>webinariach</b></p>
            </div>
            <div class="webinar_box">
                <div class="col-md-12 no_padding image_box"><img src="{{ asset('sources/img/clock_icon.png') }}" alt=""></div>
                <p>Dołącz do interesujących wykładów</p>
            </div>
            <div class="webinar_box">
                <div class="col-md-12 no_padding image_box"><img src="{{ asset('sources/img/student_icon.png') }}" alt=""></div>
                <p>Bierz udział w <b>Webinariach</b>, Zdobywaj wiedzę</p>
            </div>
            <div class="webinar_box">
                <div class="col-md-12 no_padding image_box"><img src="{{ asset('sources/img/light_icon.png') }}" alt=""></div>
                <p>Wykorzystuj zdobytą wiedzę</p>
            </div>
        </div>
    </div>
</div>
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
<toaster-container 
    toaster-options="{
        'time-out': 3000, 
        'close-button':true, 
        'position-class':'toast-top-full-width'}"></toaster-container>
<script src="{{ asset('sources/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('sources/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
<script src="{{ asset('sources/js/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('sources/js/fullcalendar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('sources/js/lang-all.js') }}" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js" type="text/javascript"></script>
<script src="//malsup.github.com/jquery.cycle2.js"></script>
@if (session('loginError'))
<script>
    $(document).ready(function() {
            toastr.options.preventDuplicates = true;
            toastr.options.closeButton = true;
            toastr.info('{{ session('loginError') }}')
    })
</script>
@endif
{!! seminarsScript() !!}
<script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="{{ asset('sources/js/main.js') }}"></script>

</body>
</html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  