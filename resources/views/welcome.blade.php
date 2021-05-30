<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://primanugraha.tech/public/favicon.ico">
    <title>Weather With OpenWeather</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
    @livewireStyles
</head>


<body>

    <div class="site-content">
        <div class="site-header">
            <div class="container">
                <a href="/" class="branding">
                    <img src="blue.png" alt="" style="width: 100px;">
                </a>

                <!-- Default snippet for navigation -->
                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                        <li class="menu-item"><a href="#">News</a></li>
                        <li class="menu-item"><a href="#">Live cameras</a></li>
                        <li class="menu-item"><a href="#">Photos</a></li>
                        <li class="menu-item"><a href="#">Contact</a></li>
                    </ul> <!-- .menu -->
                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>

            </div>
        </div> <!-- .site-header -->

        <livewire:weather />


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter your email to subscribe...">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-3 col-md-offset-1">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <p class="colophon">Copyright {{date('Y')}} Prima Tech . Designed by Themezy. All rights reserved</p>
            </div>
        </footer> <!-- .site-footer -->
    </div>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    @livewireScripts
</body>

</html>