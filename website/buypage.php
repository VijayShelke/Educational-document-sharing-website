<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Student Buy page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/stubootstrap.css" rel="stylesheet">
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
    <link href="css/stubootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../ico/favicon.png">
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
                                echo "hello " . $username;
                                 echo "<a href='logout.php'>Sign Out</a>";
                            }
                            else
                               echo "<a href='index2.php'>Sign In</a>";
                            ?>

                            <i class="icon-cog"></i> <a href="#" class="navbar-link"></a>                            
                        </p>
            <ul style="" class="nav" >
              <li><a href="studenthome.php">Home</a></li>
              
               <li><a href="contact.php">Contact us</a></li>
                            <li><a href="about.php">About</a></li>
            </ul>
            
			<div id="search1" align="center"><form class="form-search" >
    <form class="form-search" >
    <input type="text" class="input-medium search-query">
    <button type="submit" class="btn">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </form></div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <hr>
    
    <?php 
    include "config.php";
    $id=$_GET['id'];
$fileinfo=$DB->result_for_query("select * from document where id=".$id."");
$comments=$DB->result_for_query("select * from comment where fileid=".$id."");
        
    ?>
	<table id="buytable1" width="8%" border="1" cellspacing="0" cellpadding="0">
  <tr>
     
    <th height="122" scope="row">&nbsp; 
        
        <?php 
        if (substr($fileinfo[0][9], 0, 50) == ".ppt" || substr($fileinfo[0][9], 0, 50) == "presentation" || substr($fileinfo[0][9], 0, 19) == "powerpoint")
        echo "<img src='images/ppt_image.png' width='100' height='50'/>";
                   else if (substr($fileinfo[0][9], 0, 15) == "application/pdf")
             echo "<img src='images/pdf_image.jpg' width='100' height='50'/>";
                   else if (substr($fileinfo[0][9], 0, 15) == "application/zip" || substr($fileinfo[0][9], 0, 24) == "application/octet-stream")
                                 echo "<img src='images/images.jpeg' width='100' height='50'/>";
                               else
                                         echo "<img src='images/word_image.png' width='100' height='50'/>";
        ?></th>
  </tr>
</table>

	<table id="buytable" width="20%" height="15%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th width="37%" scope="row"><h5>Code : </h5></th>
    <th width="63%" scope="row"><?php echo $fileinfo[0][2]; ?></th>
  </tr>
  <tr>
    <th scope="row"><h5>Date:</h5></th>
    <th scope="row"><?php echo $fileinfo[0][4]; ?></th>
  </tr>
  <tr>
    <th scope="row"><h5>Course:</h5></th>
    <th scope="row"><?php echo $fileinfo[0][5]; ?></th>
  </tr>
  
  <tr>
    <th scope="row"><h5>Subject:</h5></th>
    <th scope="row"><?php echo $fileinfo[0][6]; ?></th>
  </tr>
  <tr>
    <th scope="row"><h5>Topic:</h5></th>
    <th scope="row"><?php echo $fileinfo[0][7]; ?></th>
  </tr>
  
  <tr>
    <th scope="row"><h5>Amount(Rs):</h5></th>
    <th scope="row"><?php echo "<font color='red'>".$fileinfo[0][3]."</font>"; ?></th>
  </tr>
<tr>
    <th scope="row"><h5>Downloads:</h5></th>
    <th scope="row"><?php echo $fileinfo[0][8]; ?></th>
  </tr>
  
</table>
<br>

<?php
//$file=$_GET['ref'];
if(isset($_SESSION['id'])){
    unset ($_SESSION['id']);
    $file=$_SESSION['ref'];
    unset($_SESSION['ref']);
    //$file = $_GET['ref'];
//$id = $_GET['id'];
}
else{
$file = $_GET['ref'];
$_SESSION['ref']=$file;
$id = $_GET['id'];
$_SESSION['id']=$id;
}
?>
<div id="ct">
    
     <?php
     if (isset($_SESSION['student'])) 
         echo "echo <a href='gdb.php' class='btn btn-success'>Buy</a>";
     else
         echo "<button class='btn btn-danger' type='button'><a href='index2.php'>Buy</a></button>";
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn btn-danger" type="button"><a href="studenthome.php">Cancel</button></div>
<br>
<hr>
<br>
<?php

$id=$_GET['id'];
?>
<form action="postcommentfrombuypage.php" method="post">
<div id="row"><textarea  name="comment" rows="2"></textarea>
       
     </div>
    <input type="hidden" name="fileid" >
    <input type="hidden" name="ref">
	  <div id="bt"><input type="submit" name="submit" class="btn btn-info" value="Post"></div>
</form>
	 <div id="te"> 
             <!--<table  width="28%" border="1" cellspacing="0" cellpadding="0">
         <tr>
            
           <th height="31" scope="row">ajdfhsf;</th>
         </tr>
       </table>-->
         
             <?php
             foreach($comments as $c)
             {    
                 echo "<div class='minibar'>";
                 echo "".$c[1]."<br>";
                echo $c[2]."<br>";
                
                echo "</div>";
             }
             
             ?>
         
         </div>
	 
       <!--/row-->
       <div id="wrap">
     
     <hr>
<div id="footer">
      <div class="container">
        <p class="muted credit"><span class="copyright">Copyright © 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
      </div>

</div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap-transition.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-tab.js"></script>
    <script src="../js/bootstrap-tooltip.js"></script>
    <script src="../js/bootstrap-popover.js"></script>
    <script src="../js/bootstrap-button.js"></script>
    <script src="../js/bootstrap-collapse.js"></script>
    <script src="../js/bootstrap-carousel.js"></script>
    <script src="../js/bootstrap-typeahead.js"></script>

</body>
</html>
