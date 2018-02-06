<!DOCTYPE html>
<html lang="en">
  <head>
      <script>
      
  function getFilePathFromDialog() {
     
    document.getElementById('fileBrowser').click();
    document.getElementById('filePath').value = document.getElementById('fileBrowser').value;
}
      </script>
    <meta charset="utf-8">
    <title>Sendmail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/sendbootstrap.css" rel="stylesheet">
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
    
    <?php
    include "config.php";
    if(isset($_SESSION['institute']))
        $institutename=$_SESSION['institute'];
    
    ?>
    <link href="css/sendbootstrap-responsive.css" rel="stylesheet">

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
                    <a class="brand" href="index.php"><img src="images/Picture1.png" width="35" height="47">The Educa.com </a>
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
                            <li class="active"><a href="institutehome.php">Home</a></li>
                            
                            <li class="active"><a href="about.php">About</a></li>
                           <li class="active"><a href="contact.php">Contact Us</a></li>
                           
                            
                            <li><a href="#contact"></a></li>
                        </ul>
                       

                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

    <div class="container-fluid">
        <form action="tempsendmail.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="institutename" value="<?php echo $institutename; ?>">
<div id="send">
  <textarea name="textcontent" cols="7" rows="8"></textarea>
</div>
<div id="img5">
    <img src="images/PaperClip4_Black.png" onclick="getFilePathFromDialog();">
<input type="text" id="filePath" name="filePath" class="visibilitybox" /><br />
<input type="file" id="fileBrowser" name="fileBrowser" class="visibilitybox" />
</div>
       
   <!--/row-->
 <div id="sendbatton">  <input type="submit" name="submit" class="btn btn-success" value="Send to All">
 
 </div>
    </form>
<hr>
          <hr>

       <div id="wrap">

      <!-- Begin page content -->
      <div id="push"></div>
    </div>

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
