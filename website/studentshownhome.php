<?php



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>studentshownpage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
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

		
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
            .table-bordered{
                background:#999999}

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }
            .hero-unit
            {line-height:40px;
            }
            .icon-envelope
            {color: #0000FF; size:5px;
            }
        </style>
   <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

       
      
          <script src="assets/js/html5shiv.js"></script>
      

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="ico/favicon.png">
    </head>

    <body background="images/aj.jpg">
        
        <?php
        include "config.php";
        $institutecode = NULL;
        $institutename = NULL;
        $scount = array();
        $i = $_GET['id'];
       
        if (isset($_GET['id'])) {
           
            $institutecode = $_GET['id'];
            $institutename = $DB->result_for_query("select iname from institute where code='" . $institutecode . "'");
            $iid = $DB->result_for_query("select iuid from institute where iname='" . $institutename[0][0] . "'");

            $scount = $DB->get_count_for_query("select * from studjoininst where iuid=" . $iid[0][0] . "");
        } else {
            echo "skafhkh";
        }
        ?>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div  class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a class="brand" href="index.php">The Educa.com </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="studenthome22.php">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="studentform.php">Student Registration</a></li>
				  
                   
                  
                </ul>
              </li>
			   &nbsp;
            </ul>
			
			 </div>
			 <div>
<form class="form-search"  action="searchinstipage.php" method="POST" name="mySearch" onSubmit="return checkempty();">	<?php
	if (isset($_SESSION['institute']))
	
	        
    echo  " <input style='margin-left:8%;' type='text' name='txt' class='input-medium search-query' placeholder='Name Or Code'>";
	else {
                              echo  " <input style='margin-left:8%;' type='text' name='txt' class='input-medium search-query' placeholder='Name Or Code' >";
							  }
							   if (isset($_SESSION['institute']))
							    echo  "<button type='submit' name='submit' class='btn btn-medium btn-primary' value='Search Institute'>Search Institute</button>";
								  else {
                              echo  "<button type='submit' name='submit' class='btn btn-medium btn-primary' value='Search Institute'>Search Institute</button>";
                        
}
	?>
</form>
</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
	<div align="center" >
</div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div style="margin-top:2%;" class="span2">
                    <div align="center" class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li  class="nav-header">
                              
      
                           
                             <li><?php
                            if (isset($_GET['id']))
                                echo "<a href='studentuploadshown.php?id=" . $_GET['id'] . "'> <input type='submit'  class='btn btn-medium btn-primary'   value='Uploaded Document'></a></a></li>";
?>
                            
                            
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <div style="margin-top:2%;" class="span9">
 <div id="hello" style=" background-image: images/pdf_image.jpg">					  <div style="background-image:url(images/Picture13.png); margin-top:0%" class="hero-unit">
                        <h1> <?php
                            $institutename = $DB->result_for_query("select * from institute where code='" . $institutecode . "'");

                            echo $institutename[0][3];
?></h1>
                        <p>Email: <?php echo $institutename[0][4];?><br>
                            Address: <?php echo $institutename[0][5].",".$institutename[0][6].",".$institutename[0][7]
                            ;?><br>
                        </p>
                        <p>Add Cover Pic</p>
						</div>

                    </div>
                    <div class="navbar navbar-inverse">




                    </div>
                    <!--/row-->
                </div>
                <div style="background-color: #FFFFFF" id="addbar1">
                    
                </div>
                <!--/span-->
            </div><!--/row-->
            <hr>
            <div id="pd"></div> <?php
            $uploadedimages = $DB->result_for_query("select imgname from instimg where code='" . $institutecode. "' ");

            if (isset($uploadedimages)) {
                $counter = 0;

                foreach ($uploadedimages as $img) {

                    if ($counter % 2 == 0) {
                         echo "<div style=' margin-left:20%; margin-top:-5%;'  align='center' class='featurette'>";
			   }
			    echo "<form  class='span7'  action='deletephoto.php' method='post' >";
			   echo "  <img   class='img-polaroid' src='upload/$img[0]'>";
			
			    

					echo "<hr class='featurette-divider'>";
                    echo "</form   >";
					echo "</div>";
                 
                    $counter++;
                }
            }
            ?>
            </div>
	

            <div id="footer">
                <div class="container">
                    <p class="muted credit"><span class="copyright">Copyright &copy; 2014 . All Rights Reserved to The Educa<a href="#" class="toptip" title=""></a> </span></p>
                </div>

            </div><!--/.fluid-container-->

            <!-- Le javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
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

  </body>
</html>
