<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="SEOhub - SEO, Marketing. Social Media, Multipurpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Cricket Tournament</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    
    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="/css/mega-menu/mega_menu.css" />
    
    <!-- font awesome -->
    {{-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" /> --}}
    
    <!-- Themify icons -->
    <link rel="stylesheet" type="text/css" href="/css/themify-icons.css" />
    
    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup/magnific-popup.css" />
    
        <!-- main style -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    
	<!-- Responsive style -->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    </head>

<body>

    <header id="header" class="default">
        {{-- <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="topbar-left text-center text-md-left">
                            <ul class="list-inline">
                                <li> <i class="ti-location-pin"> </i> Manhattan, New York</li>
                                <li> <i class="ti-headphone-alt"></i>+1 234 56789</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="topbar-right text-center text-md-right">
                            <ul class="list-inline">
                                <li><a href="#"> Check your rankings anytime anywhere </a> </li>
                                <li><a href="#"> Register for FREE!</a></li>
                                <li><a href="#"> Support & FAQ</a></li>
                                <li><a href="#">Login </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

<!--=================================
    mega menu -->
       
        <div class="menu">
            <!-- menu start -->
            <nav id="menu" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- menu logo -->
                                <ul class="menu-logo">
                                    <li>
                                        <a href="/tournament"><img id="logo_img" src="/assets/images/logo.png" alt="logo"> </a>
                                    </li>
                                </ul>
                                <!-- menu links -->
                                <ul class="menu-links">
                                    <li class="{{ Request::is('tournament') ? 'active':'' }}">
                                       <a href="/tournament">Tournament</a>
                                    </li>
                                    <li class="{{ Request::is('teams') ? 'active':'' }}">
                                        <a href="/teams">Teams</a>
                                     </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- menu end -->
        </div>
    </header>

    @yield('content')


    
<!-- jquery  -->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="/js/mega-menu/mega_menu.js"></script>

<!-- custom -->
<script type="text/javascript" src="/js/custom.js"></script>

</body>

</html>