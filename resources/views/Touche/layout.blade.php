
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    {!! Html::style('Touche/css/bootstrap.css') !!}
    {!! Html::style('Touche/fonts/font-awesome/css/font-awesome.css') !!}


    <!-- Stylesheet
        ================================================== -->
    {!! Html::style('Touche/css/style.css') !!}
    {!! Html::style('Touche/css/nivo-lightbox/nivo-lightbox.css') !!}
    {!! Html::style('Touche/css/nivo-lightbox/default.css') !!}

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="#page-top">Wé Hungry</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="page-scroll">About</a></li>
                <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
                <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
                <li><a href="#team" class="page-scroll">Chefs</a></li>
                <li><a href="#call-reservation" class="page-scroll">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<!-- Header -->



<div id="footer">
    <div class="container text-center">
        <div class="col-md-4">
            <h3>Address</h3>
            <div class="contact-item">
                <p>Sat Rasta Mor</p>
                <p>Khulna, Bangladesh</p>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Opening Hours</h3>
            <div class="contact-item">
                <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
                <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Contact Info</h3>
            <div class="contact-item">
                <p>Phone: +8801571777609</p>
                <p>Email: wehungry@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center copyrights">
        <div class="col-md-8 col-md-offset-2">
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <p>&copy; All rights reserved. Designed by <a href="#" rel="nofollow">CSE Discipline, Khulna University</a></p>
        </div>
    </div>
</div>
{!! Html::script('Touche/js/jquery.1.11.1.js') !!}
{!! Html::script('Touche/js/bootstrap.js') !!}
{!! Html::script('Touche/js/SmoothScroll.js') !!}
{!! Html::script('Touche/js/nivo-lightbox.js') !!}
{!! Html::script('Touche/js/jquery.isotope.js') !!}
{!! Html::script('Touche/js/jqBootstrapValidation.js') !!}
{!! Html::script('Touche/js/contact_me.js') !!}
{!! Html::script('Touche/js/main.js') !!}

</body>
</html>
