<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Offshore - Responsive HTML Template">
<meta name="author" content="Surjith S.M">

<title> {{setting('site.title')}}</title>

<link rel="shortcut icon" href="{{ asset("storage/app/public/".setting('site.icon')) }}" type="image/x-icon">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">

<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.min.css') }}">

<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="homepage">

<div class="loader-wrapper">
<div class="sk-cube-grid">
<div class="sk-cube sk-cube1"></div>
<div class="sk-cube sk-cube2"></div>
<div class="sk-cube sk-cube3"></div>
<div class="sk-cube sk-cube4"></div>
<div class="sk-cube sk-cube5"></div>
<div class="sk-cube sk-cube6"></div>
<div class="sk-cube sk-cube7"></div>
<div class="sk-cube sk-cube8"></div>
<div class="sk-cube sk-cube9"></div>
</div>
</div>

<div class="wrapper">

<header>
<div class="header-area">

<div class="row logo-top-info">
<div class="container">
<div class="col-md-3 logo">

<a href="index.html"><img src="{{asset('/storage/app/public/'.setting('site.logo'))}}" style="width: 70%;" alt="Offshore Logo" /></a>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
<span class="sr-only"> Main Menu </span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="col-md-9 top-info-social">
<div class="pull-right">
<div class="top-info">
<div class="call">
<h3> CALL US </h3>
<p> {{setting('site.phone')}}</p>
</div>
<div class="email">
<h3> EMAIL US </h3>
<p> <a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a> </p>
</div>

</div>
<div class="social">
<ul class="social-icons">
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
 </ul>
</div>
</div>
</div>
</div>
</div>

<nav id="navbar" class="collapse navbar-collapse main-menu">
<div class="container">
<ul class="main-menu">
<li class="active"> <a href="{{route('/')}}"> Home </a></li>
<li><a href="{{route('about')}}"> About </a> </li>
<li><a href="{{route('services')}}"> Services </a> </li>


<li><a href="{{route('policies')}}"> Policies </a> </li>
<li><a href="{{route('conductinters')}}"> 
    CONDUCT OF INTEREST  </a> </li>
    <li><a href="{{route('valuingcreations')}}"> 
        VALUING CREATION  </a> </li>
<li><a href="{{route('saftycultures')}}"> 
    Safety Culture
</a> </li>
<li><a href="{{route('contact')}}"> CONTACT </a> </li>
</ul>
</div>
</nav>
</div>
</header>
