<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js">

<!--
	-- JamieKDonnelly.co.uk --
	A simple, standalone portfolio webapp built by Jamie K Donnelly

	** Special thanks to these superb plugins **
	-	PACE - by Hubspot
		http://github.hubspot.com/pace/docs/welcome/

	-	scrollReveal.js - by Julian Lloyd
		http://scrollrevealjs.org/

	-	Velocity.js - Julian Shapiro
		http://julian.com/research/velocity/
-->

<head>
	<title>JamieKDonnelly</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="decription" content="I'm Jamie K Donnelly, a front end web developer. This is my website" />
    <meta name="theme-color" content="#1a1a1a" />
    <meta property="og:image" content="http://www.jamiekdonnelly.co.uk/images/ogimage.jpg">
	<link rel="shortcut icon" type="image/png" href="/favicon.png">
	<!-- STYLES -->
	<link rel="stylesheet" href="dist/app.min.css">
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

	<section id="scrollable">
		<header class="splash">
			<div class="header">
				<div class="logoOuter">
					<div class="logoWrap">
						<?php require 'images/_mainLogo.svg' ;?>
					</div>
					<h1 class="logoSup">Front end developer</h1>
				</div>
			</div>
		</header>
		<section class="contentWrapper fullWidth">
		 	<section class="portfolioList fullWidth">
			 	<nav>
					<ul class="leftItems">
						<li class="portfolioListItem" data-sr="enter left please, and hustle 100px">
							<a data-nav="ski">
								<img src="images/websites/ski-desktop.jpg" alt="Ski Weekends"/>
							</a>
						</li>
						<li class="portfolioListItem" data-sr="enter left please, and hustle 100px">
							<a data-nav="security">
								<img src="images/websites/security-desktop.jpg" alt="Jacksons Security"/>
							</a>
						</li>
						<li class="portfolioListItem" data-sr="enter left please, and hustle 100px">
							<a data-nav="memory">
								<img src="images/websites/memory-desktop.jpg" alt="Memory"/>
							</a>
						</li>
					</ul>
					<ul class="rightItems">
						<li class="portfolioListItem" data-sr="enter right please, and hustle 100px">
							<a data-nav="banks">
								<img src="images/websites/banks-desktop.jpg" alt="Banks Sadler"/>
							</a>
						</li>
						<li class="portfolioListItem" data-sr="enter right please, and hustle 100px">
							<a data-nav="toyota">
								<img src="images/websites/toyota-desktop.jpg" alt="Toyota Oekaki"/>
							</a>
						</li>
 						<li class="portfolioListItem" data-sr="enter right please, and hustle 100px">
							<a data-nav="home" href="http://codepen.io/JamieKDonnelly/" target="_blank">
								<img src="images/websites/codePen.jpg" alt="Codepen"/>
							</a>
						</li>
					</ul>
				</nav>
			</section>

			<!-- <section class="fullWidth portfolioExtra">
				<div class="row">
					<div class="small-7 small-centered medium-8 large-10 columns">
						<div class="row">
							<div class="small-12 medium-6 columns">
								<a href="http://codepen.io/JamieKDonnelly/" target="_blank" class="extraItem">
									<img src="images/websites/codePen.jpg" alt="Codepen"/>
								</a>
							</div>
							<div class="small-12 medium-6 columns">
								<a href="https://github.com/JamieKDonnelly" target="_blank" class="extraItem">
									<img src="images/websites/gitHub.jpg" alt="Codepen"/>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section> -->

			<footer class="footerWrap fullWidth">
				<div class="row">
					<div class="small-12 small-centered medium-10 large-8 columns">
						<!-- <img src="images/avatar.png" alt="Jamie K Donnelly" class="footerAvatar"/> -->
						<h2 style="text-align: left">Hello</h2>
						<p style="text-align: left">I'm a front end web developer from the UK, specialising in HTML, Sass and Javascript. I'm building websites at <a href="http://www.sagittarius.agency" target="_blank">Sagittarius</a>, spending some of my free time progressing my Javscript and front end skills. You can usually find me talking geek on Twitter, please feel free to connect! :-)</p>
						<ul class="small-block-grid-1 medium-block-grid-2 footerContact">
							<li>
								<a href="mailto:mr@jamiekdonnelly.co.uk?Subject=Website enquiry" target="_top">
									<div class="logoWrap email">
										<?php require 'images/_emailLogo.svg' ;?>
									</div>
									<p class="email">
										mr@jamiekdonnelly.co.uk
									</p>
								</a>
							</li>
							<li>
								<div class="logoWrap twitter">
									<a href="https://twitter.com/Jamie_JKD" target="_blank">
										<?php require 'images/_twitterLogo.svg' ;?>
									</a>
								</div>
								<a class="twitter-timeline"
								href="https://twitter.com/Jamie_JKD"
								data-widget-id="567404570834640896"
								data-tweet-limit="1" data-chrome="nofooter noheader noborders transparent"
								width="300">
								Tweets by @Jamie_JKD
								</a>
							</li>
						</ul>
					</div>
				</div>
			</footer>
			<p class="copyright">Copyright &#169; JamieKDonnelly <span></span></p>
		</section>
	</section>

	<div class="loaderWrapper">
		<div class="loader">Loading...</div>
	</div>

	<section class="modalWrapper">
		<a data-nav="home" class="closeButton">
			<span class="closeX1"></span>
			<span class="closeX2"></span>
		</a>
		<div class="modalContentWrap">
			<div class="modalContent">
			</div>
		</div>
	</section>

	<!-- SCRIPTS -->
	<script src="dist/app.min.js"></script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>
