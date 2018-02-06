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
 <script>
            function validateform()
            {
                var username=document.forms["myform"]["username"].value;
                var password=document.forms["myform"]["password"].value;
                if(username=="" || username==null)
                {
                    alert("usrname is empty");
                    return false;
                }
                if(password=="" || password==null) 
                {
                    alert("Password is empty");
                    return false;
                }
            }
        </script>
       
    <meta charset="utf-8">
<title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">

       

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto 0px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }
	  .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading{
	  
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }


    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
   
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-size: 18px;
	color: #0000CC;
	font-weight: bold;
}
.style1 {
	font-size: 32px;
	font-family: "Courier New", Courier, monospace;
}
-->
</style>
 <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style></head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a class="brand" href="index.php">The Educa.com </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
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
                   
                  
                </ul>
              </li>
			   
            </ul>
			
			 </div>
			  </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header" style="position:absolute ; top: 0px"></div>
		<div  class="page-header" style="background-color:">
		
      </div>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	    <div align="center">
	     
		
	  <form class="form-signin" action="emailcheck1.php" name="pass"  method="POST">
        <h4 class="form-signin-heading">  Enter Your Email Id   :</h4>
		<br>
     
	  
	  <input type="text" placeholder="Email id" name="iemail">
        
        
       <input type="submit" value="Change" class="btn btn-large btn-success" />
      </form>

      <div id="push"></div>
    </div>

    <div id="footer" style="background-color:"grey">
      <div class="container">
        <p class="muted credit"> <small><h4>&copy; THE EDUCA.</h4></small></p>
      </div>
    </div>



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

  </body>
</html>
