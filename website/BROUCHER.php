<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include "config.php";
$username = NULL;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Institute broucher</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="css/instibootstrap.css" rel="stylesheet">
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
            .hero-unit
            {line-height:40px;
            }
            .icon-envelope
            {color: #0000FF; size:px;
            }
        </style>
        <link href="css/instibootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="ico/favicon.png">
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">The Educa.com </a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <i class="icon-envelope"></i> <a href="#" class="navbar-link"></a> 
                            <?php
                            if (isset($_SESSION['institute'])) {
                                $username = $_SESSION['institute'];

                                $institutecode = $DB->result_for_query("select code from institute where iuid=" . $username . "");
                                $insitutename = $DB->result_for_query("select iname from institute where iuid=" . $username . "");


                                $brouchers = $DB->result_for_query("select * from brouchers where iuid=" . $username . "");
                                echo " [ " . $institutecode[0][0] . " ] ";
                            }
                            else
                                header("location:index.php");
                            ?>

                            <a href="#" class="navbar-link"></a> 
                            <?php
                            echo "hello " . $insitutename[0][0];
                            ?>


                            <i class="icon-cog"></i> <a href="#" class="navbar-link"></a>
                            <?php
                            echo "<a href='logout.php'>Sign Out</a>";
                            ?>

                        </p>
                        <ul style="" class="nav" >
                            <li><a href="institutehome.php">Home</a></li>
                             <li><a href="about.php">About</a></li>
                            
                            <li class="active"><a href="contact.php">Contact Us</a></li>
                            <li><a href="#contact"></a></li>
                        </ul>
                        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">

                <form action="uploadbroucher.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="institute" value="<?php echo $insitutename[0][0]; ?>">

                    <table id="table15" width="20%" border="3" align="left"  class="table-bordered">
                        <tr class="success">
                            <td  bgcolor="#CCCCCC" width="25%" height="45"><h4>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload</h4></td>
                        </tr>

                        <tr class="success">
                            <td  bgcolor="#CCCCCC" height="134">    <div align="center">
                                    <input type="file" name="uploadbroucher" class="btn btn-success">
                                </div>
                            </td>
                        </tr>


                        <tr class="success">
                            <td  bgcolor="#CCCCCC" height="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="submit" class="btn btn-success" name="submit" value="Upload"></td>
                        </tr>

                    </table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </form>

                <br>
                <br>
                <br>
                <table width="30%" align="left"  >
                    <tr>

                    <b>  Uploaded Broucher</b>           
                    <td>
                    </td>
                    </tr>
                </table>

                <br>
                <br>
                <br>
                <table  width="55%" height="20%" border="2" align="center" class="table-bordered">

                    <tr class="success">
                        <td  width="15%" height="10%" bgcolor="#CCCCCC"> 
                            <?php
                            if ($brouchers)
                                echo " <a href= '" . $brouchers[0][1] . "' target='blank'  > <img src='images/pdf_image.jpg' ></a>";
                            ?> 
                        </td>

                        <td  bgcolor="#CCCCCC"> 
                            <?php
                            if ($brouchers) {
                                echo "<b> Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>: &nbsp&nbsp  " . $brouchers[0][1];
                                echo "<br>";
                                echo "<b> Uploaded on </b> : &nbsp&nbsp  " . $brouchers[0][4];
                            }
                            else
                                echo " Upload Your Broucher For Users";
                            ?> 

                        </td>
                    </tr>

                </table>



            </div>
        </div>
        <hr>
        <!--/row-->



        <div id="wrap">




            <div id="footer">
                <div class="container">
                    <p class="muted credit"><span class="copyright">Copyright � 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
                </div>

            </div><!--/.fluid-container-->

            <!-- Le javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap-transition.js"></script>
            <script src="js/bootstrap-alert.js"></script>
            <script src="js/bootstrap-modal.js"></script>
            <script src="js/bootstrap-dropdown.js"></script>
            <script src="js/bootstrap-scrollspy.js"></script>
            <script src="js/bootstrap-tab.js"></script>
            <script src="js/bootstrap-tooltip.js"></script>
            <script src="js/bootstrap-popover.js"></script>
            <script src="js/bootstrap-button.js"></script>
            <script src="js/bootstrap-collapse.js"></script>
            <script src="js/bootstrap-carousel.js"></script>
            <script src="js/bootstrap-typeahead.js"></script>

    </body>
</html>
