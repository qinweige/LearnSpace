
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
            <a class="navbar-brand logo" href="./index.html"><i class="fa fa-pencil-square"></i>LearnHSK</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="{{ URL::asset('assets//cdn-cgi/l/email-protection#5b373e3a29353328301b3c363a323775383436') }}">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Header -->

<!-- Form Body -->
<!-- top Content -->
<div id="services" class="services">
    <div class="container">
        <div class="row">

            <!-- Service - 1 -->
            <div class="col-lg-3 text-center">
                <div class="service-item">
                    <h4>Every Saturday</h4>
                    <h4>6pm - 8pm</h4>
                    <i class="service-icon fa fa-desktop"></i>
                    <h4>We will send the skype ID to your email</h4>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-6">
            <div class="row-lg-6"></div>
                <form id="trial" action="trial/email" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <input id="name" name="name" type="text" maxlength="20"  class="form-control" required placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="email" class="padding-lg">EMAIL</label>
                        <input id="email" name="email" type="email" maxlength="40" required class="form-control" placeholder="Enter your email"/>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> submit </button>
                </form>
            </div>
        </div>
    </div>
</div>




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