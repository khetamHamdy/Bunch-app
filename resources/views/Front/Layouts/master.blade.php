<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bunch</title>
    <!-- Stylesheets -->
    <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/material-design-iconic-font.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/simple-line-icons.css')}}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700|Lato:300,400,700,900|Raleway:300,400,500,600,700,800,900"
        rel="stylesheet">
    <link href="{{asset('front/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/animate.css')}}" rel="stylesheet" type="text/css"/>

    @if(LaravelLocalization::getCurrentLocaleDirection() == "rtl")

        <link href="{{asset('front/css/style.rtl.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
    @else
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    @endif
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="{{asset('front/js/respond.js')}}"></script><![endif]-->
    <script src="{{asset('front/js/jquery-1.12.2.min.js')}}"></script>
</head>

<body>

<div class="mobile-menu">
    <div class="menu-mobile">
        <div class="brand-area">
            <a href="{{route('index.html')}}">
                <img src="{{asset('front/images/logo-site.png')}}">
            </a>
        </div>
        <div class="mmenu">
            <ul>
                <li>
                    <a href="index.html">{{__('Home')}}</a>
                </li>
                <li>
                    <a href="about.html">{{__('About us')}}</a>
                </li>

                <li>
                    <a href="careers.html">{{__('Careers')}}</a>
                </li>
                <li>
                    <a href="contact.html">{{__('Contact us')}}</a>
                </li>
            </ul>
            <ul class="clearfix">
                <li class="mo_lang">
                    <a href=""></a>
                </li>
            </ul>
        </div>

        <a href="join.html" class="mo_join">{{__('Join us')}}</a>
    </div>
    <div class="m-overlay"></div>
</div><!--mobile-menu-->
<div id="search">
    <div class="overlay-close"></div>
    <div class="center-screen">
        <form action="{{route('search.html')}}" class="form_search" method="get">
            <div class="form-group">
                <button type="submit" class="search_submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                <input type="text" name="search" class="form-control" placeholder="{{__('Search Here')}}">
            </div>
        </form>
    </div>
</div>
<div class="main-wrapper">
    <header id="header" class="hd-po">
        <div class="container-fluid">
            <div class="logo-site">
                <a href="{{route('index.html')}}"><img src="{{asset('front/images/logo-site.png')}}" alt=""
                                                       class="img-responsive"></a>
                @auth()
{{--                    <img style="width: 3.5rem ; height: 3.5rem ; margin-left:.9rem"--}}
{{--                         src="{{ asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image) }}">--}}
                    <a href="{{route('profileUser')}}" style="color: white; margin: .7rem"
                       class="clearfix">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                @endauth
            </div>
            <div class="header_middle clearfix">
                <ul class="top_action clearfix">
                    <li class="search_site">
                        <a href="#search"><img src="{{asset('front/images/Search-Icon-xs.svg')}}" alt=""></a>
                    </li>

                    <li class="lang_site">

                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="search_site">
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{$localeCode }}
                            </a>
                        </li>
                        @endforeach
                        </li>
                </ul>

                <ul class="main_menu clearfix">

                    <li>
                        <a href="{{route('index.html')}}">{{__('Home')}}</a>
                    </li>
                    <li>
                        <a href="{{route('about.html')}}">{{__('About us')}}</a>
                    </li>
                    <li>
                        <a href="{{route('careers.html')}}">{{__('Careers')}}</a>
                    </li>
                    <li>
                        <a href="{{route('contact.html')}}">{{__('Contact us')}}</a>
                    </li>
                </ul>
                <button type="button" class="hamburger is-closed">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
            </div>
            <div class="header_right">

                <a href="{{route('join.html')}}" class="join_btn">{{__('Join us')}}</a>

            </div>
            @guest()
            <div class="header_right">

                <a href="{{route('login')}}" class="join_btn">login</a>

            </div>
            @endguest
            @auth()
            <div class="header_right">
                <a class="join_btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('log').submit(); ">Logout
                </a>
                <form id="log" style="display:none" action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
            </div>
            @endauth
        </div>
    </header><!--header-->
    @yield('section')
    @yield('content')

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-push-6 col-md-6 clearfix">
                    <div class="f_right clearfix">
                        <ul class="f_menu clearfix">
                            <li><a href="{{route('policy.html')}}">{{__('Privecy Policy')}}</a></li>
                            <li><a href="{{route('tearms.html')}}">{{__('Tearms of conditions')}}</a></li>
                        </ul>
                        <ul class="f_social clearfix">
                            <li class="facebook">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="linkedin">
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-pull-6 col-md-6">
                    <p class="copy_right"><a href="#">{{__('Powered By Line')}}</a></p>
                </div>
            </div>
        </div>
    </footer>
</div><!--main-wrapper-->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/js/wow.js')}}"></script>
<script src="{{asset('front/js/script.js')}}"></script>
<script>
    new WOW().init();
</script>
@include('sweetalert::alert')
</body>
</html>
