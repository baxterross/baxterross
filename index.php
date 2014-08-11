<?php

include('defs.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>[baxterross]</title>
		<link rel="stylesheet" type="text/css" href="/resources/main.css" />
	</head>
	<body>
		<div id="topContent">
			<a href="mailto:baxterross@gmail.com" target="_blank" title="email me or whatever">baxterross@gmail</a>
			<a href="http://twitter.com/baxterross" target="_blank" title="i don't tweet much...">@baxterross</a>
			<a href="http://app.relishmix.com" target="_blank" title="this is gonna be big">app.relishmix</a>
		</div>
		<div id="bottomContent">
<?php switch (isset($_GET['a']) ? $_GET['a'] : 'index') : case 'index' : ?>
			<h1 title="hey, that's my name!">Baxter Ross</h1>
			<img id="panorama" src="<?php echo IMAGE; ?>/panorama.jpg" title="i had myself cloned for this photo" />
	<?php break; case 'portfolio' : ?>
			<img class="portfolio" src="<?php echo IMAGE; ?>/ugaw1.png" />
			<img class="portfolio" src="<?php echo IMAGE; ?>/ugaw2.png" />
			<img class="portfolio" src="<?php echo IMAGE; ?>/unreasonable1.png" />
			<img class="portfolio" src="<?php echo IMAGE; ?>/relish1.png" />
			<img class="portfolio" src="<?php echo IMAGE; ?>/relish2.png" />
		</div>
	<?php break; ?>
<?php endswitch; ?>
	</body>
</html>
