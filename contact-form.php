<?php
	$pageTitle = "Contact Form"; 
	include 'includes/top-part.inc.php';
	include 'includes/nav.inc';
?>

	<h1>Phonebook Entry</h1>

	<form method="post" name="myForm" action="database-write.php" onsubmit="return(validate());">
		
		<div>
			<label for="name">Name: </label>
			<input type="text" name="name">
			<br>
		</div>
		
		<div>
			<label for="email">Email: </label>
			<input type="email" name="email">
			<br>
		</div>
		
		<div>
			<label for="number"> Telephone: </label>
			<input type="tel" name="number">
			<br>
		</div>

		<div>
			<label for="message"> Message: </label>
			<br>
			<textarea name="message"></textarea>
			<br>
		</div>

		<input type="submit" value="Send">
	</form>
	<br>


	<p> Or Go <a href=".">Back to the Index</a> </p>


<?php 
	include 'includes/footer.inc.php';
?>

