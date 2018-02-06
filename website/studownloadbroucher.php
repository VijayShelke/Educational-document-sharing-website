<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Institute broucher download</title>
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

  <body background="images/aj.jpg">
<?php
include "config.php";
$institutecode=NULL;
$institutename=NULL;
$scount=array();
$brouchers=$DB->result_for_query("Select * from brouchers");
if(isset($_GET['id']))
{
    $institutecode=$_GET['id'];
$institutename=$DB->result_for_query("select iname from institute where code='".$institutecode."'");
$iid=$DB->result_for_query("select iuid from institute where iname='".$institutename[0][0]."'");
$scount=$DB->get_count_for_query("select * from studjoininst where iuid=".$iid[0][0]."");
}

?>    <div class="navbar navbar-inverse navbar-fixed-top">
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
                                echo "hello " . $username;
                                echo "<a href='logout.php'>  Sign Out</a>";
                            }
                            else
                               echo "<a href='index2.php'>Sign In</a>";
                            ?>
                            </font>
                            <a href="#" class="navbar-link"></a> 
                           

		

                            <i class="icon-cog"></i> <a href="#" class="navbar-link"></a>
                          
                        </p>
            <ul style="" class="nav" >
               
               <li><a href="studenthome.php">Home</a></li>
               
             <li> <?php echo "<a href='studentshownhome.php?id=".$institutecode."' >Institute Home</a>" ?></li>
               <li><a href="about.php">About</a></li>
                 <li><a href="contact.php">Contact us</a></li>
             
              <li><a href="#contact"></a></li>
            </ul>
			 <div id="search1" align="center"><form action="searchinstipage.php" method="POST">
                                <input type="text" name="txt" placeholder="Search Institute" class="input-medium search-query">
                                <input type="submit" name="submit" class="btn" value="Search" >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </form></div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <br>
	 <br>
	 <br>
	  <table
		 width="24%" border="2" align="center" bordercolor="#333333" class="table-bordered">
   <tr class="success">

<td width="35%" height="131"  bgcolor="#CCCCCC">   
     <?php
                            if ($brouchers)
                                echo " <a href= '".$brouchers[0][1]."' target='blank'  > <img src='images/pdf_image.jpg' ></a>";
                            ?> 
</td>
<td width="65%" height="131"  bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <?php
                            if ($brouchers)
                            {
                                
                                            echo  "<b> Uploaded on </b> :   ".$brouchers[0][4];
                            }
                            else
                              echo " Upload Your Broucher For Users";
                            ?>
    <?php
    echo " <a href='".$brouchers[0][1]."' target='_blank' class='btn btn-success'>Download Now</a></td>   </td>";
    ?>

   </tr>
 
  </table>
     
	 
      
      </div></div>
<hr>
      <!--/row-->

      

       <div id="wrap">

      
	  

    <div id="footer">
      <div class="container">
        <p class="muted credit"><span class="copyright">Copyright ? 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
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
