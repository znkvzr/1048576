<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="./resources/images/png/favicon.png">
	<link rel="shortcut icon" type="image/png" href="./resources/images/png/favicon.png">
	<link rel="apple-touch-icon" href="./resources/images/png/apple-touch-icon.png">
	<link rel="stylesheet" type="text/css" href="./resources/css/2048.css">
	<link rel="apple-touch-startup-image" href="./resources/images/png/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
	<link rel="apple-touch-startup-image" href="./resources/images/png/apple-touch-startup-image-640x920.png"  media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
	<title>1 048 576</title>
</head>

<body>
	<div class="container">
		<div class="heading">
			<h1 class="title">1 048 576</h1>
			<div class="scores-container">
				<div class="score-container">0</div>
				<div class="best-container">0</div>
				<br style="clear: both;">
			</div>
		</div>

		<div class="above-game">
			<a class="restart-button">Nouvelle partie</a>
		</div>

		<div class="game-container">
			<div class="game-message">
				<p></p>
				<div class="lower">
					<a class="keep-playing-button">Continuer</a>
					<a class="retry-button">Réessayer</a>
				</div>
			</div>

			<div class="grid-container">
				<div class="grid-row">
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
				</div>
				<div class="grid-row">
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
				</div>
				<div class="grid-row">
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
				</div>
				<div class="grid-row">
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
				</div>
			</div>

			<div class="tile-container"></div>
		</div>

		<p class="game-explanation">
			<strong class="important">Comment jouer:</strong> Utilise <strong>les flèches directionnelles</strong> pour faire bouger les carrés. Quand deux carrés de la même valeur se touchent, ils <strong>fusionnent en un carré</strong> qui a comme valeur la somme des deux autres carrés.
		</p>
		<hr>
		<p>
			Créé par <a href="http://gabrielecirulli.com/">Gabriele Cirulli</a>. Modifié par <a href="https://znkvzr.com/#team">Maxime Meurisse</a>.
		</p>
	</div>

	<script src="./resources/js/bind_polyfill.js"></script>
	<script src="./resources/js/classlist_polyfill.js"></script>
	<script src="./resources/js/animframe_polyfill.js"></script>
	<script src="./resources/js/keyboard_input_manager.js"></script>
	<script src="./resources/js/html_actuator.js"></script>
	<script src="./resources/js/grid.js"></script>
	<script src="./resources/js/tile.js"></script>
	<script src="./resources/js/local_storage_manager.js"></script>
	<script src="./resources/js/game_manager.js"></script>
	<script src="./resources/js/application.js"></script>
</body>

</html>
