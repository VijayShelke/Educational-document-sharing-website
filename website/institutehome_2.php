<!DOCTYPE html>
<?php 
include 'config.php';
                             //        echo "Hello  ".$username;
                             
?>
<html lang="en">
    <head>
         <script>
function showuser(openFileDialog) {
    alert("hello");
    document.getElementById(openFileDialog).oclick();
        var x=document.getElementById(openFileDialog).value;
        alert(x);
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
      document.getElementById("hello").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","up.php?q="+str,true);
  xmlhttp.send();
}


</script>
<script>
function openfileoption()
{
    document.getElementById("brouchername").click();
}
</script> 
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
                                if(isset($_SESSION['institute']))
                                {
                                    $username=$_SESSION['institute'];
                                    echo "hello ".$username;
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
                                <li><a href="" onclick="openfileoption(); return;">Upload Info Broucher</a></li>
                                <li><input type="file" id="brouchername" >
</li>
                            <li><a href="sendmail.php">Send Message</a></li>

                            <li><a href="#"> Students</a></li>




                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span9">
                    <div class="hero-unit">
                        <h1>Hello, world</h1>
                        <p>This page will shown by Students</p>
                        <span id="hello"></span>
                        
                        <p><input type="button" name="uploaded"  onclick="showuser(uploaded)" class="btn btn-primary btn-large">
                           <!-- <input type="submit" name="submit" value="Add Cover Pic" onclick="showUser()">&raquo;--></p>
                  
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
            <table width="75%" class="table-bordered">
                <tr class="success">
                    <td width="25%" height="272">photos</td>

                </tr>
            </table>
            <div id="addbar2">
                hellow
            </div>


            <table width="75%" class="table-bordered">
                <tr class="success">
                    <td width="50%" height="272">photos</td>
                    <td width="50%" height="272">photos</td>
                </tr>
            </table>
            <div id="addbar3">
                hellow
            </div>
            <table width="75%" class="table-bordered">
                <tr class="success">
                    <td width="33%" height="272">photos</td>
                    <td width="33%" height="272">photos</td>
                    <td width="33%" height="272">photos</td>

                </tr>
            </table>
            <div id="addbar4">
                hellow
            </div>
            <table width="75%" class="table-bordered">
                <tr class="success">
                    <td width="25%" height="272">photos</td>
                    <td width="25%" height="272">photos</td>
                    <td width="25%" height="272">photos</td>
                    <td width="25%" height="272">photos</td>

                </tr>
            </table>
            <div id="addbar5">
                hellow
            </div>
            <hr>

            <div id="wrap">

                <!-- Begin page content -->
                <div id="push"></div>
            </div>

            <div id="footer">
                <div class="container">
                    <p class="muted credit"><span class="copyright">Copyright © 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
                </div>
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
