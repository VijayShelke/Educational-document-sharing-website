<!DOCTYPE html>
<?php
include 'config.php';
if (isset($_SESSION['institute']))
    header("location:uploadinstitute.php");
else if (isset($_SESSION['student'])) {
    header("location:studenthome.php");
}
?>
<html lang="en">
  <head>
      <meta charset="utf-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
     <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
	margin-left:2%;
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
	  margin-top:-6%;
    }
	.featurette-heading1 {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
	  margin-top:-6%;
	  margin-left:50%;
	  
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

   
      <script src="assets/js/html5shiv.js"></script>
   

    <!-- Fav and touch icons -->
 
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar">  </span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="brand" href="index.php"><img src="images/Picture1.png" width="35" height="47">TheEduca.com</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li >
                     <?php
                                    if (isset($_SESSION['institute']))
                                        echo" <a href='uploadinstitute.php'>Home</a></li>";
                                   else if (isset($_SESSION['student']))
                                        echo" <a href='studenthome.php'>Home</a></li>";
                                    else
                                        echo" <a href='index.php'>Home</a></li>";
                                    ?>
                <li class="active"><a  href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="studentform.php">Student Registration</a></li>
                    <li><a href="InstituteForm.php">Institute/Teacher Registration</a></li>
                    </ul>
                </li>
				<li><a href="signin.php"><p style="color:#0000FF">Sign In</p></a></li>
				
              </ul>

            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
	    <div style="margin-top:9%;" class="span13">
          <div class="hero-unit">
            <h1 style="color: #0000FF">The Educa</h1>
			<h3>Educating the world...</h3>
            <p>The Educa, is India's fastest emerging and widely recognised online

education hub that offers</p>
            <p><ul>
			<li>Free as well as premium notes, practice and mock papers & much

more</li>
			<li>All content is uploaded by India's most respected teachers from

around all leading schools,high schools,undergaraduate colleges</li>
			<li>high quality content but it is also a learning partner, since the

complete content is designed in a fashion where user can move 

from one topic to another topic of any course in any format 

without any gap.</li>

			
			
			</ul></p>
			<h3>Our Vision</h3>
			<p>We envision ourselves as a dominant player in the domain of Entrance 

Exams Training and promote various educational streams through the 

online platform across the world.</p>
<h3>Our Mission</h3>
 <p><ul>
			<li>To give valued and high quality services in the field of education

through online access.</li>
			<li>To participate in different spheres of education, at different

stages via online engagement.</li>
			<li>Make these tools available to educational enterprises worldwide

for uplifting the state of education around the world.</li>
			
			
			</ul>
			Education with Values....</p>
			<h3>Why The Educa : Summary</h3>
			 <h4>Educa For Students:</h4>
			  <h4 style="color: #0000FF" >Educa is a platform :</h4>
              <p class="lead"><ul>
                            <li style="font-size:18px" ><b>To get best educational material from all institutions of the world.</b></li><br>
                        <li style="font-size:18px"><b>To get educational material at absolutly Free of cost.</b></li><br>
                            <li style="font-size:18px"><b>To get material from your own favourite faculty or institute.</b></li><br>
                            <li style="font-size:18px"><b>To connect with top class educational institutions of the world.</b></li><br>
							<li style="font-size:18px"><b>To be a part of the best online educational network in the world.</b></li>
                            </ul></p>
							 <h4>Educa For Institutes/Teacher:</h4>
			  <h4 style="color: #0000FF" >Educa is a platform :</h4>
              <p  class="lead">    <ul >
                            <li style="font-size:18px" ><b>To publish and promote your educational material all across the world.</b></li><br>
                        <li style="font-size:18px"><b>To connect with students individually from all over the world.</b></li><br>
                            <li style="font-size:18px"><b>To expand and accelarate the educational reach all over the world.</b></li><br>
                            <li style="font-size:18px"><b>To be a part of the best online educational network in the world.</b></li><br>
                            </ul></p>
          </div>
		  </div>

       
<div><a href=""><img src="images/google__small.png"></a> &nbsp;&nbsp;<a href=""><img src="images/Facebook Small-32x32.png"></a>&nbsp;&nbsp;&nbsp;<a href=""><img src="images/twitter-small-icon.png"></a></div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 The Educa.com <a href="#"></a> &middot; <a href="#"></a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="assets/js/holder/holder.js"></script>
  </body>
</html>
