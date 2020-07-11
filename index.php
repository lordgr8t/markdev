<?php
@session_start();
$LangArray = array("ru", "en");
$DefaultLang = "ru";
if(@$_SESSION['NowLang']) {
	if(!in_array($_SESSION['NowLang'], $LangArray)) {
		$_SESSION['NowLang'] = $DefaultLang;
	}
}
else {
	$_SESSION['NowLang'] = $DefaultLang;
}
$language = addslashes($_GET['lang']);
if($language) {
	if(!in_array($language, $LangArray)) {
		$_SESSION['NowLang'] = $DefaultLang;
	}
	else {
		$_SESSION['NowLang'] = $language;
	}
}
$CurentLang = addslashes($_SESSION['NowLang']);
include_once ("lang/".$CurentLang.".php");
?>
<!DOCTYPE HTML>
<head>
	<title><?php echo $Lang['title']; ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="logo">

				<span class="fas fa-desktop"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1><?php echo $Lang['title']; ?></h1>
					<p><?php echo $Lang['webdev']; ?> <br> HTML-CSS GOD
					/ PHP / JS-JQ / SQL</p>
				</div>
			</div>
			<nav>
				<ul>
					
					<li><a href="#work"><?php echo $Lang['works']; ?></a></li>
					<li><a href="#about"><?php echo $Lang['about']; ?></a></li>
					<li><a href="#contact"><?php echo $Lang['contact']; ?></a></li>

				</ul>
			</nav>
			<nav id="lang_wrapper">
				<ul>
					<li class="lang_pick"><a href="index.php?lang=ru">RU</a></li>
					<li class="lang_pick"><a href="index.php?lang=en">EN</a></li>
				</ul>
			</nav>
		</header>


		<!-- Main -->
		<div id="main">

			<!-- Work -->
			<article id="work">
				<h2 class="major"><?php echo $Lang['myworks']; ?></h2>
				<span class="image main"><img src="images/pic02.jpg" alt="" /></span>
				<div class="works_wrapper">
					<div class="work">
						<a href="http://musictape.ru/" target="_blanck"><img src="assets/works/musictape/logo.png" alt="" class="workimg"></a>
					</div>
					<div class="work">
						<a href="assets/works/lucid/index.html" target="_blanck"><img src="assets/works/lucid/logo.png" alt="" class="workimg"></a>
					</div>
				</div>
				<div class="works_wrapper">
					<div class="work">
						<a href="assets/works/counsel/index.html" target="_blanck"><img src="assets/works/counsel/logo.png" alt="" class="workimg"></a>
					</div>
					<div class="work">
						<a href="assets/works/landing-page/index.html" target="_blanck"><img src="assets/works/landing-page/logo.png" alt="" class="workimg"></a>
					</div>
				</div>
			</article>

			<!-- About -->
			<article id="about">
				<h2 class="major"><?php echo $Lang['about']; ?></h2>
				<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
				<div class="about_wrapper">
					<div class="about_ican">
						<?php echo $Lang['ican']; ?>
						<li><?php echo $Lang['adaptsite']; ?></li>
						<li><?php echo $Lang['dinamicsite']; ?></li>
						<li><?php echo $Lang['snimsite']; ?></li>
						<li><?php echo $Lang['saitbd']; ?></li>
						<li><?php echo $Lang['localaizsait']; ?></li>
						<li><?php echo $Lang['optimezecode']; ?></li>
						<li><?php echo $Lang['moneysite']; ?></li>
						<li><?php echo $Lang['workapi']; ?></li>

					</div>
					<div class="about_idevelop">
						<?php echo $Lang['idevelop']; ?>
						<li>html/css</li>
						<li>bootstrap</li>
						<li>php</li>
						<li>js/jq</li>
						<li>sass/scss</li>
						<li>git</li>
						<li>sql</li>
						<li>WordPress</li>
					</div>

				</div>
			</article>

			<!-- Contact -->
			<article id="contact">
				<h2 class="major"><?php echo $Lang['contact']; ?></h2>
				<form method="post" action="#">
					<div class="fields">
						<div class="field half">
							<label for="name"><?php echo $Lang['name']; ?></label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="email"><?php echo $Lang['mail']; ?></label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message"><?php echo $Lang['messege']; ?></label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" value="<?php echo $Lang['send']; ?>" class="primary" /></li>
						<!-- <li><input type="reset" value="Reset" /></li> -->
					</ul>
				</form>
				<ul class="icons">
					<li><a href="https://vk.com/smlsth" target="_blanck" class="icon brands fa-vk"><span class="label">Vk</span></a></li>
					<li><a href="https://twitter.com/gr8t_mark" target="_blanck" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.weblancer.net/users/lordgr8t/" target="_blanck" class="fas fa-briefcase"><span class="label"></span></a></li>
					<li><a href="https://github.com/lordgr8t" target="_blanck" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
				</ul>
			</article>

			</article>

		</div>

		<!-- Footer -->
		<footer id="footer">
			<p class="copyright">&copy; <?php echo $Lang['title']; ?></p>
		</footer>

	</div>

	<!-- BG -->
	<div id="bg"></div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
