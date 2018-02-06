<!DOCTYPE html>
<?php
include 'config.php';
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SEARCH INSTITUTE</title>
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

     <script src="assets/js/html5shiv.js"></script>

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
                    <a class="brand" href="index.php"><img src="images/Picture1.png" width="35" height="47">The Educa.com </a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <i class="icon-envelope"></i> <a href="#" class="navbar-link"></a> 
                          <?php
                            if (isset($_SESSION['student'])) {
                                $username = $_SESSION['student'];
                                echo "hello &nbsp; " . $username;
                                  echo " &nbsp;&nbsp;<a href='logout.php'>Sign Out</a>";
                            }
                         
                                 
                            ?>

                     <ul style="" class="nav" >
                            <li> <?php
                          
                            if (isset($_SESSION['student']))
                                echo" <a href='studenthome.php'>Home</a></li>";
                            else
                                echo" <a href='index.php'>Home</a></li>";
                            ?></li>
                             <li> <?php
                          
                            if (isset($_SESSION['student']))
                                echo' <li><a href="">&nbsp;</a></li>';
                            else
                                echo" <a href='contact.php'>Contact</a></li>";
                            ?></li>
                            
                         <li>
                               <?php
                          
                           if (isset($_SESSION['student']))
                                echo' <li><a href="">&nbsp;</a></li>';
                            else
                                echo" <a href='about.php'>About</a></li>";
                            ?></li>
                            

                            
                           
                        </ul>
                        
                       
                    </div>
                     <!--/.nav-collapse -->
                </div>
            </div>
        </div>

<?php
//include "config.php";
$text = NULL;
$namefound = FALSE;
$codefound = FALSE;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div align="center" style=" margin-top:1.3%; margin-bottom:1%;" id="search1" align="center"><form action="searchinstipage.php" method="POST">
                                <input type="text" name="txt" placeholder="Name Or Code" class="input-medium search-query">
                                <input type="submit" name="submit" class='btn btn-medium btn-primary' value="Search Institute" >

                            </form></div>


        <div class="container-fluid">
            <div class="row-fluid">


                <table width="97%" border="1" cellspacing="0" cellpadding="0">




                    <tr>
                        <th width="11%" height="62" scope="row"><h4>CODE</h4></th>
                    <td align="center" width="21%"><h4>NAME</h4></td>
                    <td align="center" width="25%"><h4>ADDRESS</h4></td>
                    <td align="center" width="11%"><h4>CITY</h4></td>
                    <td align="center" width="9%"><h4>CONTACT</h4></td>
                    <td align="center" width="9%"><h4>STATE</h4></td>
                    <td align="center" width="14%"><h4>COUNTRY</h4></td>
                    </tr>
<?php
if ($_POST['submit']) {
    if ($_POST['txt'] != "" ||!(isset($_POST['txt']))||($_POST['txt']!=NULL)) 
    {
        $text = $_POST['txt'];
        $institutelist = $DB->result_for_query("select * from institute where code LIKE '%" . $text . "%' or iname LIKE '%" . $text . "%'");

        foreach ($institutelist as $i) {
            echo "<tr >";
            echo "<th height='72' scope='row'><a href='studentuploadshown.php?id=" . $i[10] . "'>" . $i[10] . "</a></th>";
            echo "<td align='center'><a href='studentuploadshown.php?id=" . $i[10] . "'>" . $i[3] . "</a></td>";
            echo "<td><center>" . $i[5] . "</center></td>";
            echo "<td><center>" . $i[6] . "</center></td>";
            echo "<td><center>" . $i[11] . "</center></td>";
            echo "<td><center>" . $i[7] . "</center></td>";
            echo "<td><center>" . $i[8] . "</center></td>";
            echo "</tr>";
        }
    }
    else "No result Found";
}
else
    header("location:studenthome22.php");
?>
                </table>

                <br>
                <br>
                <br>
            </div></div>
        <hr>
        <!--/row-->



        <div id="wrap">




            <div id="footer">
                <div class="container">
                    <p class="muted credit"><span class="copyright">Copyright &copy; 2014 . All Rights Reserved to The Educa<a href="#" class="toptip" title=""></a> </span></p>
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
