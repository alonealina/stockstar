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
                    <li><a id="company" href="/#company">Company</a></li>
                    <li><a class="" href="{{ route('vision') }}">Vision</a></li>
                    <li><a class="" href="{{ route('service') }}">Service</a></li>
                    <li><a class="" href="{{ route('news') }}">News</a></li>
                    <li><a id="contact" href="/#contact">Contact</a></li>
                </ul>
                </nav>
            </header>

            @yield('content')

            <footer>
                @yield('footer_px')
                    <img src="../../img/logo.png" class="logo_footer">
                    <ul class="footer_ul">
                        <li><a id="company2" href="/#company">Company</a></li>
                        <li><a class="" href="{{ route('vision') }}">Vision</a></li>
                        <li><a class="" href="{{ route('service') }}" target="_blank">Service</a></li>
                        <li><a class="" href="{{ route('news') }}">News</a></li>
                        <li><a id="contact2" href="/#contact">Contact</a></li>
                    </ul>
                    <div class="copyright">©︎ 2022 StockStar.inc. All right.</div>
                </nav>
            </footer>
        </body>
    </div>

    <div id="registration_ipad">
        <body>
            <header class="mb-4">
            </header>

            <footer>
            </footer>
        </body>
    </div>

    <div id="registration_sp">
        <body>
            <header class="mb-4">
            </header>

            <footer class="footer_sp">
                <a href="#page_top">ページTOPへ</a>
                <div class="copyright_sp">copyright (c) © KOC・JAPAN, Inc. all rights reserved.</div>
                <div class="footer_black_sp"></div>
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
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_ipad').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    }  else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>