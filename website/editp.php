
<!DOCTYPE html>
<?php
include 'config.php';
?>
<html lang="en">
    <title>
        editprofile
    </title>
    <head>
        <script>
            function instituteValidation()
            {
                var iname=document.forms["myForm"]["iname"].value;
                var iemail1 = document.forms["myForm"]["iemail1"].value;
                var icontact=document.forms["myForm"]['icontact'].value;
                
                if(iname==null ||iname=="")
                {
                    alert("Institute name must be given");
                    return false;
                }
                var iaddress=document.forms["myForm"]["iaddress"].value;
                if(iaddress=="" ||iaddress==null)
                {
                    alert("Enter Address");
                    return false;
                }
        
                if(icontact=="" ||icontact==null)
                {
                    alert("Enter Contact");
                    return false;
                }
                
        
                if (iemail1 == null || iemail1 == "") 
                {
                    alert("EMAIL MUST BE GIVEN");
                    return false;
                }
                else
                {
                    var atpos = iemail1.indexOf("@");
                    var dotpos = iemail1.lastIndexOf(".");
                    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=iemail1.length) {
                        alert("Not a valid e-mail address");
                        return false;
                    }    
                }
               
                
                
                    
                var icity=document.forms["myForm"]["icity"].value;
                if(icity=="" || icity==null )
                {
                    alert("CITY MUST BE GIVEN");
                    return false;
                }
                var ipincode=document.forms["myForm"]["ipincode"].value;
                if(ipincode=="" || ipincode==null )
                {
                    alert("PINCODE MUST BE GIVEN");
                    return false;
                }
                
                var pattern = /^\d{6}([\-]\d{4})?$/;
                if (pattern.test(ipincode)) {
           
                } 
                else
                {
                    alert("It is not valid zip code !");
                    return false;
                }
               
               
                var istate=document.forms["myForm"]["istate"].value;
                if(istate=="" || istate==null )
                {
                    alert("STATE MUST BE GIVEN");
                    return false;
                }
             
                var icountry=document.forms["myForm"]["icountry"].value;
                  
                  
               
                if(icountry=="" || icountry==null )
                {
                    alert("COUNTRY MUST BE GIVEN");
                    return false;
                }
            }
			
			 function institutepassValidation()
            {
                var ipass=document.forms["pass"]["ipass"].value;
                if(ipass==null ||ipass=="")
                {
                    alert("Insert the old password");
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
				margin-top:-16%;
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
                           



                            <?php
                            echo "<b  style='color:#FFFFFF' >hello </b>";
                           
                            echo "<b  style='color:#FFFFFF' >".$insitutename[0][0]."</b>";
                           
                            ?>

                           
                            <?php
							
                            echo "<a href='logout.php'>Sign Out</a>";
                            ?>

                        </p>
                        <ul style="" class="nav" >
                            <li class=""><a href="uploadinstitute.php">Home</a></li>
							<li class=><a href="institutehome.php">Profile</a></li>
							<li class="active"><a href="editp.php">Edit Profile</a></li>
                            
							
                            
                           
                        </ul>
                        

                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
            <!-- Begin page content -->
            <div class="container">
                <div class="page-header" style="position:absolute ; top: 0px"></div>
                <div  class="page-header" style="background-color:">

                </div>
                <div class="at" align="center">
                    <?php
                    $info = $DB->result_for_query("select * from institute where iuid=" . $username . "");
                    foreach ($info as $i) {
                        $iname = $i[3];
                        $iadd = $i[5];
                        $icontact = $i[11];
                        $iemail = $i[4];
                        $icity = $i[6];
                        $ipin = $i[9];
                        $istate = $i[7];
                        $icontry = $i[8];
                    }
                 
                    ?>
					 <div style="margin-top:3%" class="span5">
          <div class="hero-unit">
            <form  action="updatepassword.php" name="pass"  method="POST" onSubmit=" return institutepassValidation()">
					<br>
					<h3 class="form-signin-heading">Reset Password</h3>
					<h4>Enter Old Password : </h4> <input type="text" placeholder="Old password" name="ipass"><input type="submit" value="Change" class="btn btn-large btn-success" />
					</form>
          </div>
					
					
                </div>
        <div style="margin-top:3%" class="span5">
          <div class="well sidebar-nav">
            <form  method="post" action="updateiprofile.php" name="myForm" onSubmit=" return instituteValidation()">
                        <table>
                            <tr>
                                <td align="right">Name of Institute: </td>
                                <td> <input type="text" placeholder="Name" name="iname" value="<?php echo $iname; ?>"</td></tr>
                            <tr><td align="right">Address :</td><td><textarea onSelect="<?php echo $iadd; ?>" rows="3" name="iaddress" value="<?php echo $iadd; ?>"></textarea></td></tr>
                            <tr><td align="right">Contact :</td><td><input type="text" placeholder="Optional" value="<?php echo $icontact; ?>" name="icontact"></td></tr>
                            <tr><td align="right">Primary Email :</td><td><input type="text" placeholder="Optional" name="iemail1" value="<?php echo $iemail; ?>"></td></tr>

                            <tr><td align="right">CurrentCity :</td><td><input type="text" placeholder="" name="icity" value="<?php echo $icity; ?>"></td></tr>
                            <tr><td align="right">PinCode :</td><td><input type="text" placeholder="" value="<?php echo $ipin; ?>" name="ipincode"></td></tr>
                            <tr><td align="right">State :</td><td>

                                    <?php
                                    $state = $DB->result_for_query("select * from state");
                                    echo "<select name='istate'>";
                                    echo "<option></option>";
                                    foreach ($state as $s) {
                                        echo "<option value='" . $s[1] . "'>" . $s[1] . "</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </td></tr>
                            <tr><td align="right">Country :</td><td>


                                    <?php
                                    $country = $DB->result_for_query("select * from country");
                                    echo "<select name='icountry'>";
                                    echo "<option></option>";
                                    foreach ($country as $c) {
                                        echo "<option value='" . $c[1] . "'>" . $c[1] . "</option>";
                                    }
                                    echo "</select>";
                                    ?>
                            <tr><td  align="right"></td><td></td></tr>
                            <tr><td>&nbsp;</td><td></td></tr>

                            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Update" class="btn btn-large btn-success" /></td></tr>
                        </table>
                    </form>          </div><!--/.well -->
        </div><!--/span--></div>
					</div>
					  

                <div id="push"></div>
            </div>

           <div   id="footer">
            <div class="container">
                <hr>
                <p class="muted credit"><span class="copyright">Copyright &copy; 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
            </div>
        </div>

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
