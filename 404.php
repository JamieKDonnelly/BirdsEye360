<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js">
<head>
	<title>404</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="decription" content="Uh ohhhh, that page must have been nuked from orbit" />
    <meta name="theme-color" content="#1a1a1a" />
    <meta property="og:image" content="http://www.jamiekdonnelly.co.uk/images/ogimage.jpg">
	<link rel="shortcut icon" type="image/png" href="http://www.jamiekdonnelly.co.uk/favicon.png">	
	<!-- STYLES -->
	<link rel="stylesheet" href="http://www.jamiekdonnelly.co.uk/dist/app.min.css">
	<style>
		.wrap404{
			height: 100%;
			width: 100%;
		  	background-color: rgba(26,26,26,.8);
		}
		.wrap404 p{
			text-align: center;
			width: 100%;
			padding: 1%;
			margin: 0 auto;
		}
		.wrap404 p, .error404{	
			top: 50%;
			position: absolute;
			transform: translateY(-50%);
			-webkit-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
		}
		.logoWrap{
			height: auto;
		}
		.logoOuter{
			height: auto;
			top: auto;
			bottom: 10px;
		  	width: 450px;
		}
		.error404 path{
			background: #1a1a1a;
		}
		@media only screen and (max-width: 1024px){
			.logoOuter{
				width: 65%;
			}
		}
		@media only screen and (max-width: 768px){
			.logoOuter{
				top: auto;
				bottom: 1%;
				width: 75%;
			}
		}
	</style>
</head>
<body>

	<!-- Google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-59985423-1', 'auto');
	  ga('send', 'pageview');
	</script>
	
	<div class="wrap404">

		<?php require($_SERVER['DOCUMENT_ROOT']."/images/_404.svg"); ?>	
		<p>Uh ohhhh, that page must have been nuked from orbit. <br/><br/>How about navigating to the <a href="/">homepage?</a></p>

		<footer class="footer404">
			<div class="logoOuter">
				<div class="logoWrap saturated">
					<a href="/">
						<?php require($_SERVER['DOCUMENT_ROOT']."/images/_mainLogo.svg"); ?>	
					</a>
				</div>
				<h1 class="logoSup">Front end developer</h1>
			</div>
		</footer>

	</div>
	
	<!-- SCRIPTS -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html> 