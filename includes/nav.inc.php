	<nav class="main-menu">
        <ul>
        	<?php
        		if ($pageTitle == "Accomplishments"){
        			echo '<li><a href="#first">Z-Pattern</a></li>
            		<li><a href="#second">F-Pattern</a></li>';
        		}
            ?>

            <li <?php if ($pageTitle == "Accomplishments") echo 'class="active"'; ?>><a href="accomplishments.php">Accomplishments</a></li>
            <li <?php if ($pageTitle == "Portfolio") echo 'class="active"'; ?>><a href="portfolio.php">Portfolio</a></li>
            <li <?php if ($pageTitle == "Contact Form") echo 'class="active"'; ?>><a href="contact-form.php">Contact Form</a></li>

        </ul>
    </nav>