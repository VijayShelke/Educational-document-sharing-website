
<!DOCTYPE html>
<html lang="en">
    <?php
    include 'config.php';
    ?>

    <head>
        <meta charset="utf-8">
        <title>Institute upload page</title>
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
            {color: #0000FF; size:2px;
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
        <script>
            function showFiles(str) {
                if (str=="") {
                    document.getElementById("txtHint").innerHTML="";
                    return;
                } 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                        document.getElementById("report").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","getFiles.php?q="+str,true);
                xmlhttp.send();
            }
        </script>

    </head>

    <body background="images/aj.jpg">
        <div id="report"></div>
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
                            <i class="icon-envelope"></i> <a href="#" class="navbar-link"></a> 
                            <?php
                            if (isset($_SESSION['student'])) {
                                $username = $_SESSION['student'];
                                echo "hello " . $username;
                            }
                            else
                                header("location:index.php");
                            ?>

                            <i class="icon-cog"></i> <a href="#" class="navbar-link"></a> 
                            <?php
                            echo "<a href='logout.php'>Sign Out</a>";
                            ?>
                        </p>
                        <ul style="" class="nav" >
                            <li><a href="studenthome.php">Home</a></li>

                            <li><a href="#contact"></a></li>
                        </ul>
                        <div id="search1" align="center">

                            <form action="searchbystudent.php" method="POST">
                                <input type="text" name="txt"  class="input-medium search-query">
                                <input type="submit" name="submit" class="btn" value="Search">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </form></div>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div>
            <p> <b>RESULT FOR SEARCH</b></p>

            <p>
                <?php
                $text = NULL;
                $namefound = FALSE;
                $codefound = FALSE;

                if ($_POST['submit']) 
                {
                    if ($_POST['txt'] != "") 
                     {
                        $text = $_POST['txt'];
                        $institutelist = $DB->result_for_query("select iname,code from institute");

                        foreach ($institutelist as $i) {
                            
                            if ($i[1] == $text) {
                                
                                echo "<a href='studentshownhome.php?id=" . $i[1] . "' >" . $i[1] . "  " . $i[0].". </a> </br>"    ;
                            } else if ($i[0] == $text) {
                                echo "<a href='studentshownhome.php?id=" . $i[1] . "'>" . $i[1] . "    " . $i[0] . "</a>  </br>  ";

                                break;
                            }
                        }

                        /* if ($codefound == TRUE) 
                          {
                          header("location:studentshownhome.php?id=" . $text);
                          }
                          else if ($namefound == TRUE)
                          {
                          header("location:studentshownhome.php?name=" . $text);
                          }
                          else
                          {
                          header("location:studenthome.php");
                          }
                         * */
                    }
                    else
                        header("location:studenthome.php");
                }
                else
                    header("location:studenthome.php");
                /*
                 * To change this template, choose Tools | Templates
                 * and open the template in the editor.
                 */
                ?>
            </p>
        </div>
        <hr>
        <!--/row-->



        <div id="wrap">




            <div id="footer">
                <div class="container">
                    <p class="muted credit"><span class="copyright">Copyright © 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
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
