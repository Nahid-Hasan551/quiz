<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>SelfTeach-Lab</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('asset/images/logo/icon2.png')}}" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/slick.css')}}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/nice-select.css')}}">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/jquery.nice-number.min.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/default.css')}}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">

     <!--====== Card css ======-->
     <link rel="stylesheet" href="{{asset('asset/css/card.css')}}">
  @livewireStyles
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <a href="index.php">
                                    <img src="asset/images/logo/Selfteach.png" alt="Logo" style="height: 100px;">
                                </a>
                                <!-- <li><img src="images/all-icon/map.png" alt="icon"><span>127/5 Mark street, New york</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>info@yourmail.com</span></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            
                            @if(Route::has('login'))
                                @auth 
                                    @if(Auth::user()->utype ==='ADM')
                                       
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a> 
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('logout')}}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf   
                                                </form>
                                            </ul>
                                        </li>
                                    @else 
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a> 
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('logout')}}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf   
                                                </form>
                                            </ul>
                                        </li>
                                    @endif
                                @else 
                                    <li>
                                        
                                        <a href="{{route('login')}}">Login</a>&nbsp; |
                                        <a href="{{route('register')}}">Register</a>&nbsp;
                                    </li>
                                @endif 
                            @endif
                        </div>
                    </div>
                </div>
                
            </div> 
            <!-- container  -->
        </div> 
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                
                                <!-- Nahid Work -->
                                <ul class="navbar-nav mr-auto">
                                    
                                    <li class="nav-item">
                                        <a href="/homepage">Home</a>
                                       
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="/freequiz">Free Quiz</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact.html">Lavel 1</a></li>
                                            <li><a href="contact-2.html">Lavel 2</a></li>
                                            <li><a href="contact-2.html">Lavel 3</a></li>
                                            <li><a href="contact-2.html">Lavel 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/classicquiz">Classic Quiz</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact.html">SSC Preparation</a></li>
                                            <ul class="sub-menu">
                                                <li><a href="contact.html">Bangla</a></li>
                                            </ul>
                                            <li><a href="contact-2.html">HSC Preparation</a></li>
                                            <li><a href="contact-2.html">Admission</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/login">Login</a>
                                       
                                    </li>

                                </ul>-->
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->``

            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    
   
  </body>
</html>

    <!--====== jquery js ======-->
    <script src="{{asset('asset/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('asset/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{asset('asset/js/slick.min.js')}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{asset('asset/js/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.counterup.min.js')}}"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{asset('asset/js/jquery.nice-select.min.js')}}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{asset('asset/js/jquery.nice-number.min.js')}}"></script>
    
    <!--====== Count Down js ======-->
    <script src="{{asset('asset/js/jquery.countdown.min.js')}}"></script>
    
    <!--====== Validator js ======-->
    <script src="{{asset('asset/js/validator.min.js')}}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{asset('asset/js/ajax-contact.js')}}"></script>
    
    <!--====== Main js ======-->
    <script src="{{asset('asset/js/main.js')}}"></script>
    
    <!--====== Map js ======-->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script> --}}
    <script src="{{asset('asset/js/map-script.js')}}"></script>
    @livewireScripts
</body>
</html>
