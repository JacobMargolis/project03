	<footer id="page-footer">
		<p>Jacob Margolis CSC 174, Project 3</p>
	</footer>

<!-- Close container div for all pages except accomplishments (long scrolly) -->
<?php 
if ($pageTitle == "Contact Form"){
	echo '</div>';
}
if ($pageTitle == "Portfolio"){
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script>
		if( !window.jQuery ) document.write(\'<script src="js/jquery-3.0.0.min.js"><\/script>\');
	</script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->';
}

?>



<!-- <script src="http://code.jquery.com/jquery.js"></script> -->
<!-- <script src="js/menu-highlighter.js"></script>
 --> <!-- <script src="js/validation.js"></script> -->
</body>
</html>