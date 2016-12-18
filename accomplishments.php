<?php
	$pageTitle = "Accomplishments"; 
	include "includes/top-part.inc.php";
	include "includes/nav.inc.php";
?>

	

    <!-- Top Section -->
    <section id="first">
        <div class="container">

        	<div class="z-area1">
            	<h1><a href="#first"><img class="logo" src="images/jjmlogo.png" alt="logo"></a></h1>
            </div>
            <div class="z-area2">
            	<a href="#first">Learn more about Jacob</a>
            </div>
            <div class="background-photo">
                <img src="images/roofpull.jpg" alt="Roofus">
            </div>
            <div class="z-area3">
                <p>Jacob Margolis makes lots of funny faces while he is playing ultimate Frisbee. Support him by making funny faces at your computer screen!
                </p>
            </div>
            <div class="z-area4">
                <a href="#first">Funny Face</a>
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


                        <p>I am an accomplished lifeguard, water safety instructor, and lifeguard instructor. People try to drown around me so that I can save them. Awwww! <br>
                        <br> Once, when I was lifeguarding at a summer camp lake, I had to evacuate the campers from the water because a child had spotted what he described as "a huge turtle". Kid wasn't joking, the dude must've been 75 pounds and a foot and a half across. <br>
                        <br> It took three lifeguards with a fishing net to corral the turtle into a trash can filled with water. We tried to flip the can upright and out of the lake, but it became clear that the turtle was too big to lie flat in the can. Eventually we got the creature into a full size rowboat, turned out that was the only thing we had at the beach that could contain the monster. 

                        </p>
                
                    </div> <!--platform-idea -->

                    <div class="platform-idea">

                        <h3 id="frisbee">Throwing Flat Circles</h3>

                        <img class="thumb" src="images/disc.jpg" alt="disc">

                            <p>
                                Four years of hard work at practice pays off! As senior captain of the U of R Men's Ultimate Frisbee team, I led our program to our first ever tournament win. Talk about things Chris Dawson never did. That guy doesn't even have a shoulder anymore. Pathetic. <br>
                                <br> Ultimate Frisbee is a 7-on-7 non-contact sport. One of its most defining features is the lack of officials - the sport is intended to be self officiated. Despite this, it is seemingly common for players to think that questionable calls go in their favor. Weird. <br>
                                <br> If you are interested in playing with the U of R Piggies, reach out!

                            </p>

                    </div> <!--platform-idea -->

                    <div class="platform-idea">

                        <h3 id="computer">Computer Science</h3>

                        <img class="thumb" src="images/computer.png" alt="computer science">

                            <p>
                                I've done some cool computer science stuff, like this very project! That's something. Another something: I once hacked into the Pentagon mainframe. It was so easy I could do it in my sleep, and I know this to be true because in this particular instance I was dreaming. <br>
                                <br> There is some really cool stuff being done in computer science by people that aren't me, believe it or not. Im too lazy to find stuff about that, so instead enjoy this sweet lorem!<br>
                                <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

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