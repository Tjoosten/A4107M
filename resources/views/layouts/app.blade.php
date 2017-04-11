<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/costum.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="background">
    <div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="fa-btn fa fa-leaf icon-color" aria-hidden="true"></span>Takken {{-- <span class="caret"></span> --}}
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href=""><span class="fa-btn fa fa-asterisk" aria-hidden="true"></span> De Kapoenen</a></li>
                                <li><a href=""><span class="fa-btn fa fa-asterisk" aria-hidden="true"></span> De Welpen</a></li>
                                <li><a href=""><span class="fa-btn fa fa-asterisk" aria-hidden="true"></span> De Jong-Givers</a></li>
                                <li><a href=""><span class="fa-btn fa fa-asterisk" aria-hidden="true"></span> De Givers</a></li>
                                <li><a href=""><span class="fa-btn fa fa-asterisk" aria-hidden="true"></span> De Jins</a></li>
                                <li><a href=""><span class="fa-btn fa fa-asterisk" aria-hidden="true"></span> De Leiding</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('lease.index') }}"><span class="fa-btn fa fa-home icon-color" aria-hidden="true"></span>Verhuur</a></li>

                        <li><a href=""><span class="fa-btn fa fa-picture-o icon-color" aria-hidden="true"></span>Foto's</a></li>
                        <li><a href=""><span class="fa-btn fa fa-info-circle icon-color" aria-hidden="true"></span>Info</a></li>
                        <li><a href=""><span class="fa-btn fa fa-envelope icon-color" aria-hidden="true"></span>Contact</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="fa-btn fa fa-sign-in icon-color"></span> Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">Account settings</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!--footer start from here-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft" style="margin-left: -15px;">
                    <div class="logofooter"> Logo</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>
                    <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>
                    <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>

                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">GENERAL LINKS</h6>
                    <ul class="footer-ul">
                        <li><a href="#"> Career</a></li>
                        <li><a href="#"> Privacy Policy</a></li>
                        <li><a href="#"> Terms & Conditions</a></li>
                        <li><a href="#"> Client Gateway</a></li>
                        <li><a href="#"> Ranking</a></li>
                        <li><a href="#"> Case Studies</a></li>
                        <li><a href="#"> Frequently Ask Questions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">LATEST POST</h6>
                    <div class="post">
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© {{ date('Y') }} - Scouts en Gidsen Sint-Joris</p>
                </div>
                <div class="col-md-6">
                    <ul class="bottom_ul">
                        <li><a href="">Nederlands</a></li>
                        <li><a href="">Engels</a></li>>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
