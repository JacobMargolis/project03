<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		if ($pageTitle == "Accomplishments") {
			echo '<link rel="stylesheet" href="css/long-scrolly.css">
	';
			echo '<link rel="stylesheet" href="css/styles-acc.css">
	';
		}
		elseif ($pageTitle == "Portfolio") {
		    echo '<script src="js/modernizr.js"></script>
	';
			echo '<link rel="stylesheet" href="css/reset.css">
	';
			echo '<link rel="stylesheet" href="css/style.css">
	';
		}
		else {
			echo '<link rel="stylesheet" href="css/style.css">';
		}
	?>

	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/nav.css">
	<link href="https://fonts.googleapis.com/css?family=Noticia+Text:400,400i|Raleway:400,700,700i" rel="stylesheet">

	<title>Project 3 | <?php echo $pageTitle ?></title>

</head>
<body>


	