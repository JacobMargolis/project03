<?php
	$pageTitle = "Contact Form"; 
	include "includes/top-part.inc";
	include "includes/nav.inc";
?>

	<h1>Phonebook Entry</h1>

	<form method="post" action="database-write.php">
		
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


	Or Go <a href=".">Back to the Index</a>

<?php include "inc/footer.inc" ?>