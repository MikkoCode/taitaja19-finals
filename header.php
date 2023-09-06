<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Robobisnes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
     <link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
     <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
     

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<?php
   ob_start();
   session_start();
?>
<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                    
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="https://www.facebook.com/RoboBisnes"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/RoboBisnes"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://robobisnes.blogspot.com"><i class="fa fa-blog"></i></a></li>
                        </ul>
                    </div> 
                
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/">
                    	<img src="images/profilepic.jpg" alt="logo" class="main-logo img-responsive" style="float:left">
                        <h1 style="float:right; margin-top:1em; margin-left:10px" id="main-text">MIKKO RAUTAVIRTA</h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">KOTI</a></li>
                        <li><a href="/pepper.php">PEPPER-ROBOTTI</a></li>            
                        <li><a href="/admin.php">YLLÄPITO</a></li>          
                    </ul>
                </div>
            </div>
        </div>
    </header>
<?php 
$conn = postgres("postgres://mikko:'Paska123'@mikkorautavirta.postgres.database.azure.com:5432/mikkor");
?>
