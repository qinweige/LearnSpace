
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="Learn HSK" />
    <meta name="description" content="Learn HSK landing page">
    <meta name="Qin weige" content="LearnHSK">

    <title>Learn HSK landing page</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('assets/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('assets/img/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('assets/img/apple-touch-icon-144x144.png') }}">

    <!-- Google Webfonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/js/owl-carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/js/owl-carousel/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/flexslider.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/prettyphoto.css') }}"/>

    <!-- Add custom CSS here -->
    <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.js"></script>
    <![endif]-->

    <!-- Modernizer -->
    <script src="js/modernizr.custom.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-78054766-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-default navbar-fixed-top header" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="{{ url('/hsk') }}"><i class="fa fa-pencil-square"></i>LearnHSK</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="">About</a></li>
                <li><a href="#pricing">Services</a></li>
                <li><a href="{{ URL::asset('assets//cdn-cgi/l/email-protection#5b373e3a29353328301b3c363a323775383436') }}">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    @if(Session::has('flash_message'))
        <div class="container">
            <div class="row">
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
            </div>
        </div>
    @endif
    <!-- /.container -->
</nav>
<!-- Header -->



<!-- top Content -->
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="top-message">
                    <h1>Master HSK</h1>
                    <h3>Your HSK learning station</h3>
                    <hr class="top-divider">
                    <br>
                    <p>We provide the professional HSK training. The best professional teacher with over 6 years experience! </p>
                    <ul class="list-inline top-buttons">
                        <li><a href="{{ url('hsk/trial') }}"><button class="btn1 btn-7 btn-7a"><i class="fa fa-inbox"></i>Trial Lesson</button></a></li>
                        <li><a href="#" class="lmore"><i class="fa fa-arrow-circle-o-right fa-fw"></i> <span>Learn Space</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="main-slider" class="flexslider">
                    <ul class="slides">
                        <!--
                        <li><img src="demo/slide/hsk1.jpg" alt="" /></li>
                        <li><img src="demo/slide/3.png" alt="" /></li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- top Content -->

<!-- Welcome Content -->
<div class="section text-center welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>The best place to learn Mandarin & HSK </h2>
                <p>Welcome for all levels of learners who are interested in mandarin</p>
                <div class="cl-effect-2 btn2">
                    <a href="{{ url('hsk/join') }}"><span data-hover="Click to join us!">Why not?</span></a>
                </div>
                <hr>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- Welcome Content -->

<!-- Services -->
<div id="services" class="services">
    <div class="container">
        <div class="row">

            <!-- Service - 1 -->
            <div class="col-lg-3 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-desktop"></i>
                    <h4>Programs</h4>
                    <p></p>
                </div>
            </div>

            <!-- Service - 2 -->
            <div class="col-lg-3 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-rocket"></i>
                    <h4>HSK test</h4>
                    <p></p>
                </div>
            </div>

            <!-- Service - 3 -->

                <div class="col-lg-3 text-center">
                    <div class="service-item">
                        <a href='#pricing'>
                        <i class="service-icon fa fa-code"></i>
                        </a>
                        <h4>Fees and schedule</h4>
                        <p></p>
                    </div>
                </div>


            <!-- Service - 4 -->
            <div class="col-lg-3 text-center">
                <div class="service-item">
                    <a href="hsk/trial">
                    <i class="service-icon fa fa-users"></i>
                    </a>
                    <h4>Trial class</h4>
                    <p></p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Online lessons</h2>
            <button type="button" class="btn btn-success pull-right">More</button>
            <br>
        </div>
        <div class="col-lg-3">
            <h2>Lesson 1</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <h2>Lesson 2</h2>
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <h2>Lesson 3</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
            </div>
            <br>
        </div>
    </div>
</div>


<!-- Pricing Content -->
<div class="pricing" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="pull-center" style="text-align:center;color:#fff;margin-bottom:50px;">Fees Table</h1>
            </div>
        </div>
        <div class="row">

            <!-- Pricing Plan - 1 -->
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <strong>Group</strong>
                    </div>
                    <div class="panel-body">
                        <h3 class="panel-title price">$20/hr</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">4 people max</li>
                        <li class="list-group-item">group practice</li>
                        <li class="list-group-item">homework</li>
                        <li class="list-group-item">discuss</li>
                        <li class="list-group-item"><a class="btn btn-primary" href="{{ url('hsk/join/group') }}">Sign Up Now!</a></li>
                    </ul>
                </div>
            </div>

            <!-- Pricing Plan - 2 -->
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <strong>Individual</strong>
                    </div>
                    <div class="panel-body">
                        <h3 class="panel-title price">$50/hr</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Flexible</li>
                        <li class="list-group-item">Effective learn</li>
                        <li class="list-group-item">Homework check</li>
                        <li class="list-group-item">Question anytime</li>
                        <li class="list-group-item"><a class="btn btn-primary" href="{{ url('hsk/join/individual') }}">Sign Up Now!</a></li>
                    </ul>
                </div>
            </div>

            <!-- Pricing Plan - 3 -->
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <strong>Trial class  <span class="label label-success">Must try!</span></strong>
                    </div>
                    <div class="panel-body">
                        <h3 class="panel-title price">Free</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">7-8pm wed</li>
                        <li class="list-group-item">Everyone welcome</li>
                        <li class="list-group-item">Beginner level</li>
                        <li class="list-group-item">Total free</li>
                        <li class="list-group-item"><a class="btn btn-primary" href="{{ url('hsk/trial')}}">Sign Up Now!</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- Pricing Content -->

<!-- Contact info -->
<div class="cinfo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <ul class="contact-info">
                    <li><i class="fa fa-phone"></i> +65 93649371</li>
                    <li><i class="fa fa-envelope"></i> LEARNHSK@gmail.com</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul class="list-inline cinfo-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-dribbble fa-fw"></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- Contact info -->

<!-- Footer Content -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li><a href="./index.html">Home</a></li>
                    <li>&sdot;</li>
                    <li><a href="#">About</a></li>
                    <li>&sdot;</li>
                    <li><a href="{{ URL::asset('assets//cdn-cgi/l/email-protection#5b373e3a29353328301b3c363a323775383436') }}">Contact</a></li>
                </ul>
                <p class="copyright text-center medium">Copyright &copy; <a href="https://theme.express">LEARNHSK</a> 2018. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Content -->

<!-- JavaScript -->
<script data-cfasync="false" src="{{ URL::asset('assets//cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js') }}"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ URL::asset('assets/js/jquery.prettyphoto.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('assets/js/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.flexslider.js') }}"></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ URL::asset('assets/js/gmaps.js') }}"></script>

</body>
</html>