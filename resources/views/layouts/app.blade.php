<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>StockStar</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="icon" type="image/png" href="../img/favicon.png" sizes="16x16">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Clamp.js/0.5.1/clamp.min.js"></script>
    </head>
    <div id="registration_pc">
        <body>
            <header class="mb-4">
                <nav class="header_content">
                    <a href="/"><img src="../../img/logo.png" class="logo"></a>
                <ul class="header_ul">
                    <li><a id="company_jump" href="/#company">Company</a></li>
                    <li><a class="" href="{{ route('vision') }}">Vision</a></li>
                    <li><a class="" href="{{ route('service') }}">Service</a></li>
                    <li><a class="" href="{{ route('news') }}">News</a></li>
                    <li><a id="contact_jump" href="/#contact">Contact</a></li>
                </ul>
                </nav>
            </header>

            @yield('content')

            <footer>
                @yield('footer_px')
                    <img src="../../img/logo.png" class="logo_footer">
                    <ul class="footer_ul">
                        <li><a id="company_jump2" href="/#company">Company</a></li>
                        <li><a class="" href="{{ route('vision') }}">Vision</a></li>
                        <li><a class="" href="{{ route('service') }}" target="_blank">Service</a></li>
                        <li><a class="" href="{{ route('news') }}">News</a></li>
                        <li><a id="contact_jump2" href="/#contact">Contact</a></li>
                    </ul>
                    <div class="copyright">©︎ 2022 StockStar.inc. All right.</div>
                </nav>
            </footer>
        </body>
    </div>

    <div id="registration_sp">
        <body>
            <header class="mb-4">
                <nav class="header_content">
                    <div class="logo_div_sp">
                        <a href="/" class="logo_a"><img src="../../img/logo.png" class="logo_sp"></a>
                    </div>
                    <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                            <a id="company_jump_sp" href ="/#company" class="humberger_menu">Company</a>
                            </li>
                            <li>
                            <a href ="{{ route('vision') }}" class="humberger_menu">Vision</a>
                            </li>
                            <li>
                            <a href ="{{ route('service') }}" class="humberger_menu">Service</a>
                            </li>
                            <li>
                            <a href ="{{ route('news') }}" class="humberger_menu">News</a>
                            </li>
                            <li>
                            <a id="contact_jump_sp" href ="/#contact" class="humberger_menu">Contact</a>
                            </li>
                        </ul>
                    
                    </div>
                </div>

                </nav>
            </header>

            @yield('content_sp')

            <footer>
                @yield('footer_px_sp')
                    <img src="../../img/logo.png" class="logo_footer_sp">
                    <ul class="footer_ul_sp">
                        <li><a id="company_jump2_sp" href="/#company">Company</a></li>
                        <li><a class="" href="{{ route('vision') }}">Vision</a></li>
                        <li><a class="" href="{{ route('service') }}">Service</a></li>
                        <li><a class="" href="{{ route('news') }}">News</a></li>
                        <li><a id="contact_jump2_sp" href="/#contact">Contact</a></li>
                        <li></li>
                    </ul>
                    <div class="copyright_sp">Copyright ©︎ 2022 StockStar.inc. All right.</div>
                </nav>
            </footer>
        </body>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
    @yield('script')
    <script type="text/javascript">
    if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPad') > 0
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>