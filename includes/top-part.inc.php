<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Project 3 | <?php echo $pageTitle ?></title>
	<?php
	if ($pageTitle == "Accomplishments") {
		echo '<link rel="stylesheet" href="css/long-scrolly.css">';
		echo '<link rel="stylesheet" href="css/styles-acc.css">';
	}
	else {
		echo '<link rel="stylesheet" href="css/styles.css">';
	}
	?>
	<link rel="stylesheet" href="css/fonts.css">
	<link href="https://fonts.googleapis.com/css?family=Noticia+Text:400,400i|Raleway:400,700,700i" rel="stylesheet">
</head>
<body>

<?php
if ($pageTitle != "Accomplishments"){
	echo 
	'<div class="container">
		<header>
			<h1><a href="accomplishments.php">Project 3 | ' . $pageTitle . '</a></h1>
		</header>';
}
?>

	