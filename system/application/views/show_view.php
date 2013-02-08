<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<label class='name'>Name:</label><?=$username?>
		<br />
		<label class='phone'>Phone:</label><?=$phone?>

		<br />
		<?=anchor('people/index', 'Main')?>
	</body>
</html>