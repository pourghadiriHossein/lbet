<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="Hossein Pourghadiri">
    <title>{!! \App\Models\Tools::getWebsiteTitle() !!}</title>
    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="{!! \App\Models\Tools::getLogo() !!}">

    <link href="{{asset('/')}}adminassets/css/bootstrap-slider.css" rel="stylesheet">
    <link href="{{asset('/')}}adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}adminassets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{asset('/')}}adminassets/js/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--external css-->
    <link href="{{asset('/')}}adminassets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('/')}}adminassets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{asset('/')}}adminassets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('/')}}adminassets/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}adminassets/css/style-responsive.css" rel="stylesheet" />

    <script src="{{asset('/')}}adminassets/js/jquery.js"></script>
    <script src="{{asset('/')}}adminassets/js/jquery-1.8.3.min.js"></script>
    @yield('css')

</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="برای باز و بسته شدن منو کلیک کنید" data-placement="left" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo">  مدیریت <span>{!! \App\Models\Tools::getWebsiteTitle() !!}</span></a>
        <!--logo end-->

        <div class="top-nav ">
            <ul class="nav pull-left top-menu">

                <li id="header_notification_bar" class="dropdown">
                    <a href="{{route('home')}}">خانه</a>

                </li>

                <li class="dropdown">

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username">
                              حسین پورقدیری
                            <b class="caret"></b>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <p></p>
                                <li><a href=""><i class="icon-eject"></i> خروج</a></li>
                            </ul>
                        </span>
                        </a>

                </li>
            </ul>
        </div>

    </header>

    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li @if(Route::currentRouteName() == 'APTPage2VisitUser')
                    class="sub-menu active"
                    @elseif(Route::currentRouteName() == 'APTPage2VisitUser')
                    class="sub-menu active"
                    @else
                    class="sub-menu">
                    @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>کاربرها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('APTPage2VisitUser')}}" style="color: #f2f2f2">لیست کاربران</a></li>
                        <li><a href="{{route('APTPage3addUser')}}" style="color: #f2f2f2">افزودن کاربر</a></li>
                    </ul>
                </li>
                <li @if(Route::currentRouteName() == 'APTPage4VisitPermissions')
                    class="sub-menu active"
                    @elseif(Route::currentRouteName() == 'APTPage5AddPermission')
                    class="sub-menu active"
                    @elseif(Route::currentRouteName() == 'APTPage6VisitRoles')
                    class="sub-menu active"
                    @elseif(Route::currentRouteName() == 'APTPage7AddRoles')
                    class="sub-menu active"
                    @else
                    class="sub-menu"
                        @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-ban-circle"></i>
                        <span>سطوح دسترسی</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li> <a href="{{route('APTPage4VisitPermissions')}}" style="color: #f2f2f2">مدیریت سطوح دسترسی</a></li>
                        <li> <a href="{{route('APTPage5AddPermission')}}" style="color: #f2f2f2">افزودن سطح دسترسی</a></li>
                        <li> <a href="{{route('APTPage6VisitRoles')}}" style="color: #f2f2f2">مدیریت نقش</a></li>
                        <li> <a href="{{route('APTPage7AddRoles')}}" style="color: #f2f2f2">افزودن نقش</a></li>
                    </ul>
                </li>

                <li @if(Route::currentRouteName() == 'APTPage8VisitCommission')
                    class="sub-menu active"
                    @elseif(Route::currentRouteName() == 'APTPage9AddCommission')
                    class="sub-menu active"
                    @else
                    class="sub-menu"
                        @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>جدول پورسانت ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('APTPage8VisitCommission')}}" style="color: #f2f2f2">لیست پورسانت ها</a></li>
                        <li><a href="{{route('APTPage9AddCommission')}}" style="color: #f2f2f2">افزودن پورسانت</a></li>
                    </ul>
                </li>

                <li @if(Route::currentRouteName() == 'APTPage10VisitTransaction')
                    class="sub-menu active"
                    @else
                    class="sub-menu"
                        @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-archive"></i>
                        <span>مالی</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('APTPage10VisitTransaction')}}" style="color: #f2f2f2">تراکنش ها</a></li>
                    </ul>
                </li>



                <li @if(Route::currentRouteName() == 'APTPage11VisitAbout')
                    class="sub-menu active"
                    @elseif(Route::currentRouteName() == 'APTPage12AddAbout')
                    class="sub-menu active"
                    @else
                    class="sub-menu"
                        @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>درباره ما</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('APTPage11VisitAbout')}}" style="color: #f2f2f2">لیست درباره ما</a></li>
                        <li><a href="{{route('APTPage12AddAbout')}}" style="color: #f2f2f2">افزودن درباره ما</a></li>
                    </ul>
                </li>

                <li @if(Route::currentRouteName() == 'APTPage13VisitContact')
                    class="sub-menu active"
                    @else
                    class="sub-menu"
                        @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>تماس با ما</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li> <a href="{{route('APTPage13VisitContact')}}" style="color: #f2f2f2">لیست تماس ها</a></li>
                    </ul>
                </li>

                <li @if(Route::currentRouteName() == 'APTPage14SiteTitle')
                    class="sub-menu active"
                    @elseif(Route::currentRouteName() == 'APTPage15SiteAddress')
                    class="sub-menu active"
                    @elseif(Route::currentRouteName() == 'APTPage16SiteLogo')
                    class="sub-menu active"
                    @else
                    class="sub-menu"
                        @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>ابزار ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li> <a href="{{route('APTPage14SiteTitle')}}" style="color: #f2f2f2">عنوان سایت</a></li>
                        <li> <a href="{{route('APTPage15SiteAddress')}}" style="color: #f2f2f2">آدرس پشتیبانی سایت</a></li>
                        <li> <a href="{{route('APTPage16SiteLogo')}}" style="color: #f2f2f2">لوگو سایت</a></li>
                    </ul>
                </li>

                <li @if(Route::currentRouteName() == 'APTPage17VisitLog')
                    class="sub-menu active"
                    @else
                    class="sub-menu"
                        @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>دسترسی های غیر مجاز</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('APTPage17VisitLog')}}" style="color: #f2f2f2">لیست تلاش برای نفوذ</a></li>
                    </ul>
                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>

    @yield('content')

</section>

</body>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="{{asset('/')}}adminassets/js/html5shiv.js"></script>
<script src="{{asset('/')}}adminassets/js/respond.min.js"></script>
<![endif]-->

<script src="{{asset('/')}}adminassets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}adminassets/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('/')}}adminassets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('/')}}adminassets/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="{{asset('/')}}adminassets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{asset('/')}}adminassets/js/owl.carousel.js" ></script>
<script src="{{asset('/')}}adminassets/js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="{{asset('/')}}adminassets/js/common-scripts.js"></script>
<!--script for this page-->
<script src="{{asset('/')}}adminassets/js/sparkline-chart.js"></script>
<script src="{{asset('/')}}adminassets/js/easy-pie-chart.js"></script>
<script src="{{asset('/')}}adminassets/js/bootstrap-select.js"></script>
@yield('script')
</html>