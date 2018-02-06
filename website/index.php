<!DOCTYPE html>
<?php
include 'config.php';
if (isset($_SESSION['institute']))
    header("location:institutehome.php");
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
                <li class="active">
                     <?php
                                    if (isset($_SESSION['institute']))
                                        echo" <a href='institutehome.php'>Home</a></li>";
                                   else if (isset($_SESSION['student']))
                                        echo" <a href='studenthome.php'>Home</a></li>";
                                    else
                                        echo" <a href='index.php'>Home</a></li>";
                                    ?>
                <li><a href="about.php">About</a></li>
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
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
       
        <div class="item">
          <img src="assets/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div style="margin-top:9%;" class="carousel-caption">
              <h1>Educa For Institutes/Teacher:</h1>
			  <h2 style="color: #0000FF" >Educa is a platform :</h2>
              <p  class="lead">    <ul style="color:#FFFFFF">
                            <li style="font-size:18px" ><b>To publish and promote your educational material all across the world.</b></li><br>
                        <li style="font-size:18px"><b>To connect with students individually from all over the world.</b></li><br>
                            <li style="font-size:18px"><b>To expand and accelarate the educational reach all over the world.</b></li><br>
                            <li style="font-size:18px"><b>To be a part of the best online educational network in the world.</b></li><br>
                            </ul></p>
              <a class="btn btn-large btn-primary" href="InstituteForm.php">Institute Sign Up</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div style="margin-top:9%;" class="carousel-caption">
              <h1>Educa For Students:</h1>
			  <h2 style="color: #0000FF" >Educa is a platform :</h2>
              <p class="lead"><ul style="color:#FFFFFF">
                            <li style="font-size:18px" ><b>To get best educational material from all institutions of the world.</b></li><br>
                        <li style="font-size:18px"><b>To get educational material at absolutly Free of cost.</b></li><br>
                            <li style="font-size:18px"><b>To get material from your own favourite faculty or institute.</b></li><br>
                            <li style="font-size:18px"><b>To connect with top class educational institutions of the world.</b></li><br>
							<li style="font-size:18px"><b>To be a part of the best online educational network in the world.</b></li>
                            </ul></p>
              <a class="btn btn-large btn-primary" href="studentform.php">Student Sign Up</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
	

    <form style="text-align:center" class="form-search" action='searchinstipage.php'   method='POST' name='mySearch' onSubmit='return checkempty();'>
	<?php
	if (isset($_SESSION['institute']))
	        
    echo  "<input type='text' name='txt' class='input-medium search-query' placeholder='Name Or Code'>";
	else {
                              echo  " <input type='text' name='txt' class='input-medium search-query' placeholder='Name Or Code' >";
							  }
							   if (isset($_SESSION['institute']))
							    echo  "<button type='submit' name='submit' class='btn btn-medium btn-primary' value='Search Institute'>Search Institute</button>";
								  else {
                              echo  "<button type='submit' name='submit' class='btn btn-medium btn-primary' value='Search Institute'>Search Institute</button>";
                        
}
	?>
    </form>


  
                             
                             
                            
                       
                          
                               
                           
                             
                        
                                
                        
                            
   
    
  </div>
</div>


<form action="getFiles.php" method="POST">
 <div align="center" class="hero-unit1">

            <div style="margin-left:13%;" align="center" class="jad">
			<table width="%"
                        border="3" class="table">
  <caption></caption>
  <thead>
  </thead>
   
  <tbody>
      <tr bgcolor="red" class="success">
                        <td >
                            <h4 class="style3">&nbsp;Search Documents </h4></td>
          </tr>
    <tr  class="success">   </tr>
                    <tr class="success">
                        <td   bgcolor="" height="45"><h5 class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type :
                                <select name="selectedtype" class="span2">
								 <option value="">All</option>
                                    <option>Paper</option>
                                    <option>Notes</option>
                                    <option>Book</option>
                                    
                                </select>
                            </h5></td>
                    </tr>
                    <tr class="success">
                        <td bgcolor="" height="45">
                            <h5 class="style3">&nbsp; &nbsp;&nbsp; Course :
                                <input class="span2" name="selectedcourse" type="text" placeholder="All">
                            </h5></td>
                    </tr>
                    
                    <tr class="success">
                        <td  bgcolor="" height="59"> <input type="submit" name="submit" <?php
                            if (isset($_SESSION['institute']))
                              echo  " <input type='submit' name='submit' class='btn btn-large btn-primary' value='Search'>";
                          else {
                              echo  " <input type='submit' name='submit' class='btn btn-large btn-primary' value='Search'>";
                        
}
                                ?></td>
                    </tr>
  </tbody>
</table></div>

                               
 </div>            </form>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
    
 </div>
      <hr class="featurette-divider">

		    
       <!-- /.span4 -->
      
	  


      <!-- START THE FEATURETTES -->

         
          <div class="row-fluid">
            <div class="span4">
             <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- alpha -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8858480164286905"
     data-ad-slot="5720443670"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div><!--/span-->
            <div class="span4">
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- alpha -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8858480164286905"
     data-ad-slot="5720443670"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div><!--/span-->
            <div class="span4">
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- alpha -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8858480164286905"
     data-ad-slot="5720443670"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <hr class="featurette-divider">
       
<div><a href=""><img src="images/google__small.png"></a> &nbsp;&nbsp;<a href=""><img src="images/Facebook Small-32x32.png"></a>&nbsp;&nbsp;&nbsp;<a href=""><img src="images/twitter-small-icon.png"></a></div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 The Educa.com <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
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
