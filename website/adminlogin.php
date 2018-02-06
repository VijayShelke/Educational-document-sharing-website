<!DOCTYPE html>
<?php
include 'config.php';
if(isset($_SESSION['admin']))
    header("location:logout.php");

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


                .form-signin.checkbox {
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
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
            <!--
            body,td,th {
                font-size: 24px;
                color: #0000CC;
                font-weight: bold;
            }
            .style1 {
                font-size: 32px;
                font-family: "Courier New", Courier, monospace;
            }
            -->
        </style></head>

    <body>


        <!-- Part 1: Wrap all page content here -->
        <div id="wrap">

            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li  style="font-size:20px"class="active"><a href="#">Home</a></li>
                                <li style="font-size:20px"><a href="#about">About</a></li>
                                <li style="font-size:20px"><a href="#contact">Contact</a></li>



                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            
            
            <!-- Begin page content -->
            <div class="container">
                <div class="page-header" style="position:absolute ; top: 0px"></div>
                <div  class="page-header" style="background-color:">

                </div>
               

                <form class="form-signin" name="myform" action="adminsignin.php" method="post" onsubmit="return validateform();">
                    <h2 class="form-signin-heading"> Sign In</h2>
                    <input type="text" class="input-block-level" placeholder="Email address" name="username">
                    <input type="password" class="input-block-level" placeholder="Password" name="password">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me">Remember me &nbsp;&nbsp;&nbsp;&nbsp; <a href="#"> Forgot Password?</a>
                    </label> 
                    <input class="btn btn-large btn-primary" type="submit" name="submit" value="submit">
                </form>

                <div id="push"></div>
            </div>

            <div id="footer" >
                <div class="container">
                    <p class="muted credit">
                        <small><h4>powered by Alpha.</h4></small></p>
                </div>
            </div>

   
     
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/bootstrap-transition.js"></script>
        <script src="../assets/js/bootstrap-alert.js"></script>
        <script src="../assets/js/bootstrap-modal.js"></script>
        <script src="../assets/js/bootstrap-dropdown.js"></script>
        <script src="../assets/js/bootstrap-scrollspy.js"></script>
        <script src="../assets/js/bootstrap-tab.js"></script>
        <script src="../assets/js/bootstrap-tooltip.js"></script>
        <script src="../assets/js/bootstrap-popover.js"></script>
        <script src="../assets/js/bootstrap-button.js"></script>
        <script src="../assets/js/bootstrap-collapse.js"></script>
        <script src="../assets/js/bootstrap-carousel.js"></script>
        <script src="../assets/js/bootstrap-typeahead.js"></script>

    </body>
</html>
