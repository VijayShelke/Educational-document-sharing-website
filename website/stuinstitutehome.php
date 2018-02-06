<!DOCTYPE html>
<?php
include 'config.php';
$username = NULL;
?>
<html lang="en">
    <head>
        <script src="//code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://malsup.github.io/jquery.form.js"></script>
        <meta charset="utf-8">
        <title>Institute After Login</title>
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
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="ico/favicon.png">
    </head>

    <body background="images/aj.jpg">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#"><img src="images/Picture1.png" width="35" height="47">The Educa.com </a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <i class="icon-envelope"></i> 

                            <font size="5">
                            <?php
                            if (isset($_SESSION['institute'])) {
                                $username = $_SESSION['institute'];
                                $institutecode = $DB->result_for_query("select code from institute where iuid=" . $username . "");
                                $insitutename = $DB->result_for_query("select iname from institute where iuid=" . $username . "");

                                $scount = $DB->get_count_for_query("select * from studjoininst where iuid=" . $username . "");

                                echo " [ " . $institutecode[0][0] . " ] ";
                            }
                            else
                                header("location:index.php");
                            ?>

                            </font>
                            <a href="#" class="navbar-link"></a> 



                            <?php
                            echo "hello ";
                            echo "<a href=institutehome.php>";
                            echo $insitutename[0][0];
                            echo "</a>";
                            ?>

                            <i class="icon-cog"></i> <a href="#" class="navbar-link"></a>
                            <?php
                            echo "<a href='logout.php'>Sign Out</a>";
                            ?>

                        </p>
                        <ul style="" class="nav" >
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="uploadinstitute.php">Upload</a></li>
                            <li><a href="#contact"></a></li>
                        </ul>
                        <div id="search1" align="center"><form class="form-search" >
                                <form class="form-search" >
                                    <input type="text" class="input-medium search-query">
                                    <button type="submit" class="btn">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </form></div>

                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">
                                <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INFO</h4> </li>
                            <li><a href="#">Link Account</a></li>
                            <li><a href="BROUCHER.php" onclick="openfileoption(); return;">Upload Info Broucher</a></li>
                            <li>
                            </li>
                            <li><a href="sendmail.php">Send Message</a></li>

                            <li><a href="#"> Students<?php echo "(" . $scount . ")"; ?></a></li>
                            <li><a href="editp.php">Edit Profile</a></li>
                        </ul>
                    </div><!--/.well -->


                </div><!--/span-->
                <div class="span9">
                    <div id="hello" style=" background-image: images/pdf_image.jpg">
                        <div class="hero-unit">
                            <?php
                            $collegeinfolist = $DB->result_for_query("select * from institute where code='" . $institutecode[0][0] . "'");
                            echo "<h3 style='letter-spacing:0.3em;'>[" . $institutecode[0][0] . "]</h3>";
                            echo "<h3>" . $insitutename[0][0] . " (";
                            echo "" . $collegeinfolist[0][6] . ")</h3>";
                            echo "<h4>Address : " . $collegeinfolist[0][5] . "</h4> ";
                            echo "<h4>Contact : " . $collegeinfolist[0][11] . "</h4>";
                            ?> 
                            <!--
                            <form action="uploading.php" id="uploadform" method="POST">
                                <p><input type="file" name="file" class="btn btn-primary btn-large">
                                    <input type="submit" value="Upload">
                            </form>
                            -->
                               <!-- <input type="submit" name="submit" value="Add Cover Pic" onclick="showUser()">&raquo;--></p>

                        </div>
                    </div>
                    <div class="navbar navbar-inverse">
                    </div>
                    <!--/row-->
                </div>
                <div id="addbar1">
                    hellow
                </div>
                <!--/span-->
            </div><!--/row-->
            <hr>

            <form action="uploading.php" id="uploadform" enctype="multipart/form-data" method="POST">
                <input type="file" name="file" class="btn btn-primary btn-large">
                <input type="submit" value="Upload">
            </form>
            <?php
            $uploadedimages = $DB->result_for_query("select imgname from instimg where code='" . $institutecode[0][0] . "' ");

            if (isset($uploadedimages)) {
                $counter = 0;

                foreach ($uploadedimages as $img) {

                    if ($counter % 2 == 0) {
                        echo "<table  >";
                        echo "<tr >";
                    }
                    echo "<td >";
                    echo "  <img src='upload/$img[0]' class='img-rounded' >";
                    echo "</td>";
                    if ($counter % 2 == 1) {
                        echo "</tr>";
                        echo "</table>";
                    }
                    echo "</div>";
                    $counter++;
                }
            }
            ?>

        </div>

        <div id="footer">
            <div class="container">
                <p class="muted credit"><span class="copyright">Copyright &copy; 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
            </div>
        </div>

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
        <script>
          
        </script>
    </body>
</html>
