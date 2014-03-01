<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
		<header>
			<div id="logo">E o vencedor é... </div>
			<nav>
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
		<div id="content">
			<article>
				<header>Um artigo sobre HTML5</header>
				<nav>
					<a href="1.html">link relacionado 1</a>
					<a href="2.html">link relacionado 2</a>
				</nav>
				<p>Aqui é o conteúdo do artigo.</p>
				<footer>Este foi um artigo escrito por Ben Frain.</footer>
			</article>
			<h1>Todos os anos <span style="border: 1px solid red;">quando vejo o Oscar Estou chateado...</span></h1>
		</div>
		<!-- a barra lateral -->
		<aside>
			<div class="sideBlock unSung">
				<h4>Unsung Heroes...</h4>
				<a href="#"><img src="img/midnightRun.jpg" alt="Midnight Run"></a>
				<a href="#"><img src="img/wyattEarp.jpg" alt="Wyatt Earp"></a>
			</div>
			<div class="sideBlock overHyped">
				<h4>Overhyped absurdo...</h4>
				<a href="#"><img src="img/moulinRouge.jpg" alt="Moulin Rouge"></a>
				<a href="#"><img src="img/kingKong.jpg" alt="King Kong"></a>
			</div>
		</aside>
		<!-- o rodapé -->
		<footer>
			<p>Aqui está o rodapé</p>
		</footer>
	</div>
</body>
</html>