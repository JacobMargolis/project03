<?php
	$pageTitle = "Accomplishments"; 
	include "includes/top-part.inc.php";
?>

	<nav class="main-menu">
        <ul>
            <li><a href="#first">Z-Pattern</a></li>
            <li><a href="#second">F-Pattern</a></li>
            <li><a>|---------------------------------------------|</a></li>
            <li class="active"><a href="accomplishments.php">Accomplishments</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact-form.php">Contact Form</a></li>

        </ul>
    </nav>

    <!-- Top Section -->
    <section id="first">
        <div class="container">

        	<div class="z-area1">
            	<h1><a href="#first"><img class="logo" src="images/jjmlogo.png" alt="logo"></a></h1>
            </div>
            <div class="z-area2">
            	<a href="#platform">*Broken link*Learn more about Jacob</a>
            </div>
            <div class="background-photo">
                <img src="images/roofpull.jpg" alt="Roofus">
            </div>
            <div class="z-area3">
                <p>Support Jill Stein's people-powered campaign! 
                Join with thousands of your neighbors to build the momentum for real change. Support Jill Stein's people-powered campaign today! Any amount you give will go to support the candidate who puts people, planet, and peace over profit—every time.
                </p>
            </div>
            <div class="z-area4">
                <a href="http://www.jill2016.com/donate">Donate Now!</a>
            </div>

       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="container">

            <div class="f-area1">
                <a href="#second"><img class="logo" src="images/jjmlogo.png" alt="logo"></a>
            </div> <!-- f-area1 -->

            <div class="f-area2">
                <nav class="platform-menu">
                    <ul>
                        <li><a href="#lifeguard">Lifeguarding</a></li>
                        <li><a href="#frisbee">Frisbee</a></li>
                        <li><a href="#computer">Computer Science</a></li>
                    </ul>
                </nav>
            </div> <!-- f-area2 -->
                <h2>Things Jacob has done</h2>
    

            <div class="content">
                <div class="f-area3">
                    
                    <div class="platform-idea">

                        <h3 id="lifeguard">Lifeguarding</h3>

                        <img class="thumb" src="images/lifeguard.jpg" alt="lifeguard">


                        <p>I am an accomplished lifeguard, water safety instructor, and lifeguard instructor. People try to drown around me so that I can save them. Awwww! <br><br> Once, when I was lifeguarding at a summer camp lake, I had to evacuate the campers from the water because a child had spotted what he described as "a huge turtle". Kid wasn't joking, the dude must've been 75 pounds and a foot and a half across. <br><br> It took three lifeguards with a fishing net to corral the turtle into a trash can filled with water. We tried to flip the can upright and out of the lake, but it became clear that the turtle was too big to lie flat in the can. Eventually we got the creature into a full size rowboat, turned out that was the only thing we had at the beach that could contain the monster. 

                        </p>
                
                    </div> <!--platform-idea -->

                    <div class="platform-idea">

                        <h3 id="frisbee">Throwing Flat Circles</h3>

                        <img class="thumb" src="images/disc.jpg" alt="disc">

                            <p>
                                Four years of hard work as a handler pay off! As senior captain of the U of R Men's Ultimate Frisbee team, I led our program to our first ever tournament win. Frisbee is fun.
                            </p>

                    </div> <!--platform-idea -->

                    <div class="platform-idea">

                        <h3 id="computer">Computer Science</h3>

                        <img class="thumb" src="images/computer.png" alt="computer science">

                            <p>
                                I've done some cool computer science stuff, like this very project! That's something.
                            </p>

                    </div> <!--platform-idea -->

                </div><!--f-area3 -->

                <div class="f-area4">
                    <img src="images/cabbage.jpg" alt="Cabbage">
                    <p> I once ate a whole cabbage! If that's not an accomplishment worth sharing I don't know what is.</p>
                </div> <!-- f-area4 -->

            </div><!-- .content -->

       </div><!-- .container -->

    </section>
   

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>


<?php include "includes/footer.inc.php"; ?>