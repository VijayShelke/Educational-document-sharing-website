<?php
include "config.php";
if(isset($_SESSION['institute']))
    header("location:uploadinstitute.php");
else if (isset($_SESSION['student'])){
    header("location:studenthome.php");  
}
$_SESSION['student_last_page']=$_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <script>
            function validatestudent()
            {
			   var name1 = document.forms["myForm"]["name1"].value;
                if(name1 == "" || name1 == null )
                {
                    alert("city MUST BE GIVEN");
                    return false;
                }
                 
                   
                var semail1 = document.forms["myForm"]["semail1"].value;
             
                if (semail1 == null || semail1 == "") 
                {
                    alert("EMAIL MUST BE GIVEN");
                    return false;
                }
                else
                {
                    var atpos = semail1.indexOf("@");
                    var dotpos = semail1.lastIndexOf(".");
                    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=semail1.length) {
                        alert("Not a valid e-mail address");
                        return false;
                    }    
                }
                
                var semail2 = document.forms["myForm"]["semail2"].value;
             
                if (semail2 == null || semail2 == "") 
                {
                    alert("EMAIL MUST BE GIVEN");
                    return false;
                }
                else
                {
                    var atpos = semail1.indexOf("@");
                    var dotpos = semail1.lastIndexOf(".");
                    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=semail2.length) {
                        alert("Not a valid e-mail address");
                        return false;
                    }    
                }
                 if(semail1!=semail2)
                {
                    alert("Email do not match");
                    return false;
                }
                
                var spass1 = document.forms["myForm"]["spass1"].value;
             
                if (spass1 == null || spass1 == "") 
                {
                    alert("PASSWORD MUST BE GIVEN");        
                    return false;
                }
             
                var spass2 = document.forms["myForm"]["spass2"].value;
                if (spass2 == null || spass2 == "") 
                {
                    alert("CONFIRM THE PASSWORD ");        
                    return false;
                }
 
                if(spass1!=spass2)
                {
                    alert("passwords do not match");
                    return false;
                }
                var scity=document.forms["myForm"]["scity"].value;
                if(scity=="" || scity==NULL )
                {
                    alert("city MUST BE GIVEN");
                    return false;
                }
               
                var sstate=document.forms["myForm"]["sstate"].value;
                if(sstate=="" || sstate==NULL )
                {
                    alert("STATE MUST BE GIVEN");
                    return false;
                }
             
                var scountry=document.forms["myForm"]["scountry"].value;
                  
                  
               
                if(scountry=="" || scountry==NULL )
                {
                    alert("COUNTRY MUST BE GIVEN");
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
        <title>Student Form</title>
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
            #at{
                background: #999999}

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

        <body background="">


        <!-- Part 1: Wrap all page content here -->
        <!-- NAVBAR
      ================================================== -->
        <div class="navbar-wrapper">
            <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
            <div class="container">

                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="index.php"><img src="images/Picture1.png" width="35" height="47">TheEduca.com</a>
                        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="active">
                                    <?php 
                                             echo" <a href='index.php'>Home</a></li>";
                                           
                                        ?>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>

                        
                       
                            
                           
                            
                        </div>
                    </div><!-- /.navbar-inner -->
                </div><!-- /.navbar -->

            </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->



        



      
            <!-- Begin page content -->
            <div class="container">
                <div class="page-header" style="position:absolute ; top: 0px"></div>
                <div  class="page-header" style="background-color:">

                </div>
                <div  align="center">

                    <form name="myForm" action="sregistration.php" onSubmit=" return validatestudent()" method="post">

                        <table >
						


                             <?php 
   
                            echo "<label style='color:#FF0000;' class='control-label' for='inputError'>";
                           if(isset ($_SESSION["mgs"])){
                               echo "PLEASE TRY ANOTHER EMAIL";
                           }
                              echo  "</label>";
                            ?>
                          
							 <tr><td align="right">Name :</td><td>  <input type="text" class="input-large" placeholder="Name" name="name1"></td></tr>

                            <tr><td align="right">Email :</td><td><input type="text" class="input-large" placeholder="Email" name="semail1"  onkeyup="showHint(this.value)"></td><td><p>&nbsp; <span id="txtHint"></span></p></td></tr>
                            <tr><td align="right">Re-Enter Email :</td><td>  <input type="text" class="input-large" placeholder="Re-enterEmail " name="semail2"></td><td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></tr>
                            <tr><td align="right"> Password :</td><td><input type="Password" placeholder="Password" name="spass1"></td></tr>
                            <tr><td align="right" valign="middle">Confirm Password : </td><td valign="middle"> <input type="Password" placeholder="Confirm Password"  name="spass2"></td></tr>
                            <tr><td align="right">Current City :</td><td><input type="text" placeholder="current city" name="scity"></td></tr>
                            <tr><td align="right">State :</td><td>

                                    <select name="sstate">
                                        <?php
                                        $state = $DB->result_for_query("select * from state");


                                        foreach ($state as $s) {
                                            echo "<option value='" . $s[1] . "'>" . $s[1] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td></tr>
                            <tr><td align="right">Country :</td><td>

                                    <select name='scountry'>
                                        <?php
                                          $country = $DB->result_for_query("select * from country");


                                        foreach ($country as $c) {
                                            echo "<option value='" . $c[1] . "'>" . $c[1] . "</option>";
                                        }
//                                    echo "</select>";
                                        ?>
                                    </select>
                            <tr><td>&nbsp;</td><td></td></tr>

                            <tr><td></td>
                                <td>    <div class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="submit"  class="btn btn-primary">Submit</button>
                                             
                                     
                                    </div></td>
                            </tr>
                            <tr><td align="right">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>

                    </form>
                </div>
                <hr>
            </div>
            <div id="footer" style="background-color:white">
                <div class="container">
                    <p class="muted credit">Copyright &copy; 2014 . All Rights Reserved to The Educa</p>
                </div>
            </div>

        
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
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
