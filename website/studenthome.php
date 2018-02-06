<!DOCTYPE html>
 <?php
    include 'config.php';
    ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>STUDENTHOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
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
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

   
 
      <script src="assets/js/html5shiv.js"></script>
  

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
								   
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
        <script>
            function performaction(str)
            {
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
  
                xmlhttp.open("GET",str,true);
                xmlhttp.send();
            }
        </script>
  </head>

  <body>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a class="brand" href="index.php">The Educa.com </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="studenthome.php">Home</a></li>
			  <?php
	if (isset($_SESSION['student'])){
            
				  }
				  else
				  {
				
                echo  "<li><a href='studentform.php'>Student Registration</a></li>";
				  }
				  ?>
				  
                   
                  
                </ul>
              </li>
			   
            </ul>
			
			 </div>
			   <?php
                            if (isset($_SESSION['student'])) {
                                $username = $_SESSION['student'];
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b  style='color:#FFFFFF' >hello " . $username. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>";
                                  echo "<a href='logout.php'>Sign Out</a>";
                            }
                           else 
                               {
			 
            echo "<form class='navbar-form pull-right' name='myform' action='validation.php' method='post' onSubmit='return validateform();'>";
	         echo "<input class='span2' type='text' placeholder='Email' name='username'>";
              echo "<input class='span2' type='password' placeholder='Password' name='password'>";
			  echo "<button type='submit' class='btn' name='submit' value='submit'>Sign in</button>";
			  echo "<a href='forgetpass.php'>&nbsp;&nbsp;&nbsp;<b>Forgot passward?</b></a>";
			  
             echo "</form>";
			
                           }
                                 
                            ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
	<div ><form class="form-search" style="margin-bottom:-1%; margin-top:1%;" action="searchinstipage.php" method="POST" name="mySearch" onSubmit="return checkempty();">	<?php
	if (isset($_SESSION['institute']))
	        
    echo  "<input type='text' name='txt' class='input-medium search-query' placeholder='Name Or Code'>";
	else {
                              echo  " <input type='text' name='txt' class='input-medium search-query' placeholder='Name Or Code' >";
							  }
							   if (isset($_SESSION['institute']))
							    echo  "<button type='submit' name='submit' class='btn btn-medium btn-primary' value='Search Institute'>Search Institute</button>";
								  else {
                              echo  "<button type='submit' name='submit' class='btn btn-medium btn-primary' value='Search Institute'>Search Institute</button>";
                        
}
	?>
</form>
</div>
      <div class="row-fluid">
		<form action="getFiles.php" method="POST">
        <div style=" margin-top:2%;" class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h4>&nbsp;Search Documents </h4></li>
              <li style=" height:50%;"><h5>&nbsp;&nbsp;&nbsp;Type :
                                <select name="selectedtype" class="span4">
								 <option value="">All</option>
                                    <option>Paper</option>
                                    <option>Notes</option>
                                    <option>Book</option>
                                    <option>Ppt</option>
                                </select>
                            </h5></li>
              <li style=" height:50%;"><h5> Course :
                                <input class="span5" name="selectedcourse" type="text" placeholder="All">
                            </h5></li>
              <li style=" height:50%;"><h5>Subject :
                                <input class="span5" name="selectedsubject" type="text" placeholder="All">
                                 
                            </h5></li>
              <li style=" height:50%;"><h5>&nbsp;&nbsp;&nbsp;&nbsp;Topic :
                                <input class="span5" name="selectedtopic" type="text" placeholder="All">
                                 </li>
             
              
			  <li  style=" height:50%;"><input type="submit" name="submit" class="btn btn-medium btn-primary" value="Search"></td></li>
              
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
		</frame>
        <div class="span9">
		    <table class="table table-bordered">
			<?php
                    $filelist = NULL;
                    $i = 1;
                    if (isset($_SESSION['filelist'])) {

                        if (isset($_SESSION['newrecord'])) {
                            $filelist = $_SESSION['newrecord'];
                        } else {
                            $filelist = $_SESSION['filelist'];
                        }
                    } else {
                        $filelist = $DB->result_for_query("select * from document  order by date desc");
                        $_SESSION['filelist'] = $filelist;
                    }


                    $counter = 0;
                    echo "<table class='table table-bordered'>";

                    foreach ($filelist as $p) {

                        if (isset($p[3])) {
						if ($p[3] > 0) {
                                if ($i == 0) {

   echo "<caption>Documents</caption>";
   echo "<thead>";
    echo "<tr>";
    
   
	
	echo "</tr>";

	
    echo "</thead>";
   echo "<tbody>";
    echo "<tr>";
	} if (substr($p[9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" ||substr($p[9], 0, 29) =="application/vnd.ms-powerpoint")
                        echo "<td width='15%' height='105'   border='2' ><ul>
						<img src='images/ppt_image.png' class='img-polaroid'>
	 
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "' target='blank'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
	 else if (substr($p[9], 0, 15) == "application/pdf")
	echo "<td width='15%' height='105'   border='2' ><ul>
						<img src='images/pdf_image.jpg' class='img-polaroid'>
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "' target='blank'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
	else if (substr($p[9], 0, 15) == "application/zip" || substr($p[9], 0, 24) == "application/octet-stream")
	echo "<td width='15%' height='105'   border='2' ><ul>
						<img src='images/images.jpeg' class='img-polaroid'>
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "' target='blank'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
	 else if(substr($p[9], 0, 72) == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
	 echo "<td width='15%' height='105'   border='2' ><ul>
			<img src='images/word_image.png' class='img-polaroid'>
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "' target='blank'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=words/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
	 if ($i == 3) {
                                    echo "</tr>";
                                    $i = 0;
                                }
                                $i++;
                            } else {
                                if ($i == 0) {
								   echo "<tr>";
	}
	
	 if (substr($p[9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" ||substr($p[9], 0, 29) =="application/vnd.ms-powerpoint")
                        echo "<td width='15%' height='105'   border='2' ><ul>
						<img src='images/ppt_image.png' class='img-polaroid'>
	 
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "' target='blank'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
	 else if (substr($p[9], 0, 15) == "application/pdf")
	echo "<td width='15%' height='105'   border='2' ><ul>
						<img src='images/pdf_image.jpg' class='img-polaroid'>
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "' target='blank'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
	else if (substr($p[9], 0, 15) == "application/zip" || substr($p[9], 0, 24) == "application/octet-stream")
	echo "<td width='15%' height='105'   border='2' ><ul>
						<img src='images/images.jpeg' class='img-polaroid'>
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "' target='blank'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
	 else if(substr($p[9], 0, 72) == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
	 echo "<td width='15%' height='105'   border='2' ><ul>
			<img src='images/word_image.png' class='img-polaroid'>
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "' target='blank'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
								
	if ($i == 3) {
                                    echo "</tr>";
                                    $i = 0;
                                }
                                $i++;
                            }
                        }
                        if ($counter >= 11)
                            break;
                        $counter++;
                    }
                    echo "</table>";
                    ?>   
					                
  <ul style=" margin-top:0%;" class="pager">
<?php
$page = 1;
if (isset($_GET['page']))
    $page = $_GET['page'];

if ($page > 1) {
    $last = $page - 2;
    echo "<li><a href='getFiles1.php?page=" . $last . "'>Last Record</a></li>";
   echo "<li><a href='getFiles1.php?page=" . $page . "'>Next Records</a></li>";
} else if ($page == 1) {

echo "<li><a href='getFiles1.php?page=" . $page . "'>Next Records</a></li>";
} else if ($left_rec < $rec_limit) {
    $last = $page - 2;
   echo "<li><a href='getFiles1.php?page=" . $last . "'>Last Record</a></li>";
   }
   
    
    ?>
    </ul>                            

  </div></div>
<hr>
	
 
     
          <div class="row-fluid">
            <div class="span4">
             <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- alpha -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8858480164286905"
     data-ad-slot="5720443670"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div><!--/span-->
            <div class="span4">
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- alpha -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8858480164286905"
     data-ad-slot="5720443670"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div><!--/span-->
            <div class="span4">
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- alpha -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8858480164286905"
     data-ad-slot="5720443670"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div><!--/span-->
          </div><!--/row-->
         
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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