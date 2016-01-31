<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    {!! Html::style('theme/css/bootstrap.min.css') !!}
    {!! Html::style('theme/css/font-awesome.min.css') !!}
    {!! Html::style('theme/css/prettyPhoto.css') !!}
    {!! Html::style('theme/css/price-range.css') !!}
    {!! Html::style('theme/css/animate.css') !!}
    {!! Html::style('theme/css/main.css') !!}
    {!! Html::style('theme/css/responsive.css') !!}
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

<body>
	
	
	<header id="header"><!--header-->
		@yield("header")
	</header><!--/header-->
	
	
	
	<section>
		@yield("main")
	</section>


	
	<footer id="footer"><!--Footer-->
		@yield("footer")
	</footer><!--/Footer-->
	

  	{!! Html::script('theme/js/bootstrap.min.js') !!}
  	{!! Html::script('theme/js/jquery.js') !!}
  	{!! Html::script('theme/js/jquery.scrollUp.min.js') !!}
  	{!! Html::script('theme/js/jquery.prettyPhoto.js') !!}
  	{!! Html::script('theme/js/main.js') !!}
    
</body>
</html>