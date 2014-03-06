<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="initial-scale=2.0,width=device-width"/>-->
	<!--<meta name="viewport" content="width=device-width, maximum-scale=3, minimun-scale=0.5" />-->
	<!--<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Estudos css3 html5</title>
	<script>document.coockie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
	<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrapper">
		<!-- o cabeçalho e navegação -->
		<header role="banner">
			<div id="logo">E o vencedor <span>é...</span> </div>
			<nav role="navigation">
				<ul>
					<li><a href="#">Por quê?</a></li>
					<li><a href="#">Sinopse</a></li>
					<li><a href="#">Stills/Fotos</a></li>
					<li><a href="#">Vídeos/clips</a></li>
					<li><a href="#">Cotações</a></li>
					<li><a href="#">Problema</a></li>
				</ul>
			</nav>
		</header>
		<!-- o conteúdo -->
		<div id="content" role="main">
			<img class="oscarMain" src="img/oscar.png" alt="atwi_oscar">
			<h1>Todos os anos <em>quando vejo o Oscar Estou chateado...</em></h1>
			<p>que filmes como <b>King Kong</b>, <b>Moulin Rouge</b> e <b>Munique </b> se a estátua, enquanto os verdadeiros heróis cinematográficos perder. Não muito Hollywood é?</p>
			<p><i>Estamos aqui para colocar as coisas direito.</i></p>
			<a href="#">Estes devem ter ganho &raquo;</a>
		</div>
		<!-- a barra lateral -->
		<aside>
			<section role="complementary">
				<div class="sideBlock unSung">
					<h4>Unsung Heroes...</h4>
					<a href="#"><img src="img/midnightRun.jpg" alt="Midnight Run"></a>
					<a href="#"><img src="img/wyattEarp.jpg" alt="Wyatt Earp"></a>
				</div>
			</section>
			<section role="complementary">
				<div class="sideBlock overHyped">
					<h4>Overhyped absurdo...</h4>
					<a href="#"><img src="img/moulinRouge.jpg" alt="Moulin Rouge"></a>
					<a href="#"><img src="img/kingKong.jpg" alt="King Kong"></a>
				</div>
			</section>
		</aside>
		<!-- o rodapé -->
		<footer role="contentinfo">
			<p>Nota: nossa opinião é absolutamente correto. Você está errado, mesmo se você acha que está certo. Isso é um fato. Lidar com ele.</p>
		</footer>
	</div>
</body>
</html>