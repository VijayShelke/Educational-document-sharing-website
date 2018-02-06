<!DOCTYPE html>
 <?php include "config.php";?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Student Buyzero page</title>
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
            .hero-unit
            {line-height:40px;
            }
            .icon-envelope
            {color: #0000FF; size:2px;
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
            function incrementcounter(str)
            {
                window.location.href = 'downloadcounter.php?q='+str;
 
            }

        </script>
          <script>
                           function gateway(str)
                           {
                               
                               if(str=="")
                                  {
                                      alert("Please sign up....link is provided at top right");
                                      return false;
                                  }
                                 else
                                     {
                                         
                                     }
                           }
                               
                           </script>
                            <script>
            function validateform()
            {
                var username=document.forms["myform"]["username"].value;
                var password=document.forms["myform"]["password"].value;
                if(username=="" || username==null)
                {
                    alert("usrname is empty");
                    return false;
                }
                if(password=="" || password==null)
                {
                    alert("Password is empty");
                    return false;
                }
            }
        </script>
		<script>
            function validateform1()
            {
                var username=document.forms["myform"]["username"].value;
                var password=document.forms["myform"]["password"].value;
                if(username=="" || username==null)
                {
                    alert("Please sign up....link is provided at top right");
                    return false;
                }
                if(password=="" || password==null)
                {
                    alert("Please sign up....link is provided at top right");
                    return false;
                }
            }
        </script>
    </head>
    <body >
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
	<div align="center" ><form  class="form-search" style="margin-bottom:%; margin-top:1%;" action="searchinstipage.php" method="POST" name="mySearch" onSubmit="return checkempty();">	<?php
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
    

        <hr>
        <?php
if(isset($_SESSION['id'])){
    unset ($_SESSION['id']);
   
$id = $_GET['id'];
}
else{

$id = $_GET['id'];
$_SESSION['id']=$id;
}
       
        
        $fileinfo = $DB->result_for_query("select * from document where id=" . $id . "");
        $comments = $DB->result_for_query("select * from comment where fileid=" . $id . "");
        
                             $studentsession=NULL;
                              if(isset($_SESSION['student']))
            $studentsession=$_SESSION['student'];
            if(isset($_SESSION['student']))
            {
                ?>
            
            <?php
            }
            else
            {
            ?>
            
            <?php
            }
            ?>
 <div style="width:30%; margin-left:30%;"> 
    <table class="table table-bordered">
    <?php
	echo "<caption>";
                    if (substr($fileinfo[0][9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" || substr($fileinfo[0][9], 0, 29) =="application/vnd.ms-powerpoint")
                        echo "<img src='images/ppt_image.png'width='100' height='50'/>";
                    else if (substr($fileinfo[0][9], 0, 15) == "application/pdf")
                        echo "<img src='images/pdf_image.jpg' width='100' height='50'/>";
                    else if (substr($fileinfo[0][9], 0, 15) == "application/zip" || substr($fileinfo[0][9], 0, 24) == "application/octet-stream")
                        echo "<img src='images/images.jpeg' width='100' height='50'/>";
                    else
                        echo "<img src='images/word_image.png' width='100' height='50'/>";
                   echo "</caption>";
				    ?>
    <thead>
    <tr>
           <th><h5>Code : </h5></th>
        <th width="63%" scope="row"><?php echo $fileinfo[0][2]; ?></th>
		</tr>
		<tr>
		 <th><h5>Date:</h5></th>
<th><?php echo $fileinfo[0][4]; ?></th>
    </tr>
	<tr>
    <th><h5>Course:</h5></th>
<th><?php echo $fileinfo[0][5]; ?></th>
</tr>
<tr>
    <th><h5>Subject:</h5></th>
<th><?php echo $fileinfo[0][6]; ?></th>
</tr>
<tr>
    <th><h5>Topic:</h5></th>
<th><?php echo $fileinfo[0][7]; ?></th>
</tr>
<tr>
    <th scope="row"><h5>Downloads:</h5></th>
<th scope="row"><?php echo $fileinfo[0][8]; ?></th>
</tr>
<tr>
    <th scope="row"> <?php
     if (isset($_SESSION['student'])) {
         echo "<button  type='button' onClick=incrementcounter(this.value) value=". $fileinfo[0][0]." class='btn btn-success'> Download</button> ";
         
     }
     else
          echo "<button class='btn btn-success' onclick='return gateway(this.value)' value='".$studentsession."'>Download</button>";
    ?></th>
<th scope="row"><button class="btn btn-danger" type="button"><a href="studenthome.php">Cancel</a></button></th>
</tr>
    </thead>
    <tbody>

    </tbody>
    </table>
	</div>
<br>
<br>
<hr>


<?php
$id = $_GET['id'];

?>

<form style="margin-left:30%;" action="postcomment.php" method="post" onSubmit='return validateform1();'>
<?php
     if (isset($_SESSION['student'])) {
   echo "<div id='row'><textarea  name='comment' rows='2'></textarea>

    </div>";
	}
	?>
	
    <input type="hidden" name="fileid" value="<?php echo $id; ?>">
    <input type="hidden" name="ref" value="< ?>">
	<?php
     if (isset($_SESSION['student'])) {
    echo "<div id='bt'><input type='submit' name='submit' class='btn btn-info' value='Post'></div>";
	}
	?>
</form>
<hr>

    <blockquote style="margin-left:20%;">
	<?php
        
	
          
       
                          
foreach ($comments as $c) {
    
    
     $cuname = $DB->result_for_query("select sname from student where suid=" . $c[4] . "");
   
   echo "<p>" . $c[1] . "</p>";
   echo "<small>". $cuname[0][0] ."</small>";
   }
?>

   
    </blockquote>
<!--/row-->
<div id="wrap">

    <hr>
    <div id="footer">
        <div class="container">
            <p class="muted credit"><span class="copyright">Copyright &copy; 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
        </div>

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
