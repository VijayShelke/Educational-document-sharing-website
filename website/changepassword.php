
<!DOCTYPE html>
<?php
include 'config.php';
?>
<html lang="en">
    <title>
        changepassword
    </title>
    <head>
	<script>
	var iname=document.forms["pass"]["ipass1"].value;
    var iname=document.forms["pass"]["ipass2"].value;
                
        	 function institutepassValidation()
            {
                var ipass=document.forms["pass"]["ipass1"].value;
                if(ipass==null ||ipass=="")
                {
                    alert("Insert the new password");
                    return false;
                }
				 var ipass2=document.forms["pass"]["ipass2"].value;
               if(ipass2==null ||ipass2=="")
                {
                    alert("Insert the confirmation password");
                    return false;
                }
				}
                
        </script>

        <script>
            function showHint(str) {
                if (str.length==0) { 
                    document.getElementById("txtHint").innerHTML="";
                    return;
                }
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                        document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","gethint.php?q="+str,true);
                xmlhttp.send();
            }
        </script>
        <meta charset="utf-8">
        <title>Institute Form</title>
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
                height: 40px;
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
    </head>

    <body>


        <!-- Part 1: Wrap all page content here -->
        <div id="wrap">

            <!-- Fixed navbar -->
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
                                <li  style="font-size:20px" class="active"><a href="#">Home</a></li>
                                <li style="font-size:20px"><a href="#about">About</a></li>
                                <li style="font-size:20px"><a href="#contact">Contact</a></li>



                            </ul>
                            <p align="right">

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
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            <!-- Begin page content -->
            <div class="container">
                <div class="page-header" style="position:absolute ; top: 0px"></div>
                <div  class="page-header" style="background-color:">

                </div>
                <div class="at" align="center">
                    
                   					
					<form action="newpassword.php" name="pass" method="POST" onSubmit=" return institutepassValidation()">
					<p align="center"> Reset Password</p>
					 <table width="470" height="117">
                            <tr>
                            <td width="114" align="right">New Password  :</td><td width="232"><input type="text" placeholder="New password" name="ipass1"></td></tr>
							 <tr>
                            <td width="114" align="right">Confirm Password  :</td><td width="232"><input type="text" placeholder="Confirm password" name="ipass2"></td></tr>

                            <tr><td height="64"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Change" class="btn btn-large btn-success" /></td></tr>
                      </table>					
					</form>
					
              </div>

                <div id="push"></div>
            </div>

            <div id="footer" style="background-color:white">
                <div class="container">
                    <p class="muted credit">Copyright &copy; 2014 . All Rights Reserved to The Educa</p>
                </div>
            </div>
        </div>


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
