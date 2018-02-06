<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Institute upload page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php
        include 'config.php';

        //$noofrecord=
$username=NULL;
if (isset($_SESSION['institute'])) 

    $username=$_SESSION['institute'];

$institutecode=$DB->result_for_query("select code from institute where iuid=".$username."");
$insitutename=$DB->result_for_query("select iname from institute where iuid=".$username."");

           $count=$DB->get_count_for_query("select * from document");
           $rec_limit=12;
           if( isset($_GET{'page'} ) )
            {
                  $page = $_GET{'page'} + 1;
                    $offset = $rec_limit * $page ;
            }
            else
            {
                $page = 0;
                $offset = 0;
            }
                $left_rec = $count - ($page * $rec_limit);
      $document=$DB->result_for_query("select * from document where institute_code='".$institutecode[0][0]."' order by date desc limit ".$offset.", ".$rec_limit." ");          
         
        ?> 

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
         <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
								   
<script>
function showHint(str)
{
var xmlhttp;

if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("hello").innerHTML=xmlhttp.responseText;
    }
  }

     
  if(str==-1)
      str=prevq-1;
  else
       prevq=str;
   
xmlhttp.open("GET","getDocument.php?q="+str,true);
xmlhttp.send();
}
</script>

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
                            echo "<b  style='color:#FFFFFF' > [ ".$institutecode[0][0]." ] </b> ";
                            ?>
                            </font>
                            <a href="#" class="navbar-link"></a> 
                            <?php
                            if (isset($_SESSION['institute'])) {
                                $username = $_SESSION['institute'];
                                echo "<b  style='color:#FFFFFF' >hello " . $insitutename[0][0]." </b>";
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
                            <li class="active"><a href="uploadinstitute.php">Home</a></li>
                           
                            <li><a href="institutehome.php">Profile</a></li>
                        </ul>
                        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
       
        
        <div class="container-fluid">
            <div class="row-fluid">
                <form name="myform" method="POST" action="uploadfiles.php" id="upload_form" enctype="multipart/form-data">
                    
                    <input type="hidden"  name="institutecode" value="<?php echo $institutecode[0][0]; ?>">

                    <table style=" margin-bottom:6%;" id="table15" width="213" border="3" align="left" border-color="#333333" class="table-bordered">
                        <tr class="success">



                            <td  bgcolor="#CCCCCC" width="25%" height="45"><h4>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload</h4></td>
                        </tr>

                       
                        <tr class="success">
                            
                            <td  bgcolor="#CCCCCC" height="134">




                         <input id="change" type="file"  name="uploadedfile"> <!accept form>
                         <br>
                         <h5>(pdf,ppt,word,zip only accepted)</h5>
                        </td>
                        </tr>
                       
                        <tr class="success">
                            <td  bgcolor="#CCCCCC" height="45"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type :


                                    <select name="filetypename" class="span7">


                                        <option value="paper">Paper</option>
                                        <option value="notes">Notes</option>
                                        <option value="book">Book</option>
                                        <option value="ppt">Ppt</option>
                                    </select>
                                </h5>

                            </td>
                        </tr>
                        <tr class="success">
                            <td  bgcolor="#CCCCCC" height="45">
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;Course :
                                    <input class="span7" name="course" type="text" placeholder="">
                                </h5></td>
                        </tr>
                        <tr class="success">
                            <td  bgcolor="#CCCCCC" height="45"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject :
                                    <input class="span7" name="subject" type="text" placeholder="">
                                </h5></td>
                        </tr>
                        <tr class="success">
                            <td  bgcolor="#CCCCCC" height="45"><h5>Topic Name :
                                    <input class="span7" type="text" name="topic" placeholder="">
                                </h5></td>
                        </tr>
 <tr class="success">
                            <td  bgcolor="#CCCCCC" height="45"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount : 
                                    <select name="amount" class="span3">
                                        <option value="0">0</option>
                                      
                                    </select>
                                </h5></td>
                        </tr>

                      
                        <tr class="success">
                            <td  bgcolor="#CCCCCC" height="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input  type="submit" class="btn btn-success" value="Upload" > 
  <h3 id="status"></h3>
 </td>
                      
                        </tr>
                        
                    </table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </form>
				
       
                <div style="margin-bottom:1%; margin-top:%;" id="find" align="center">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <input type="text" name="searchfile" class="input-medium search-query">
                        <input type="submit" name="searchsubmit"class="btn btn-medium btn-primary" value="Search History">
                        </form>
                      </div>
            



              

                                
                   <!-- printing all the value fetching from getDocument.php -->
         <div class="span8">          
  <?php      
  
   if(isset($_POST['searchsubmit']))
  {
      $searchtext=NULL;
      $foundrecords=NULL;
          $searchtext=$_POST['searchfile'];
          
          if($searchtext!=NULL)
            $foundrecords=$DB->result_for_query("select * from document where institute_code='".$institutecode[0][0]."' and  (course LIKE '".$searchtext."%' or subject LIKE '".$searchtext."%' or topic LIKE '".$searchtext."%' or amount LIKE '".$searchtext."%' or Doctype LIKE '".$searchtext."%') limit ".$offset.", ".$rec_limit."");
        
 else
                      $foundrecords=$DB->result_for_query("select * from document where institute_code='".$institutecode[0][0]."' order by date desc limit ".$offset.", ".$rec_limit." ");
     
      $i = 1;
      echo "<table class='table table-bordered'>";
	   echo "<caption>Documents</caption>";
                    foreach ($foundrecords as $p) 
//                        echo $p[1]."<br>";
                    {
                        if ($i == 0)
                        {
                            echo " <tr>";
                        }
if (substr($p[9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" ||substr($p[9], 0, 29) =="application/vnd.ms-powerpoint")
                        echo "<td style='height:10%; width:10%;'><a href='ppt/$p[1]' target='blank'><img src='images/ppt_image.png' class='img-polaroid'></a></td>";
                        else if (substr($p[9], 0, 15) == "application/pdf")
                        echo "<td style='height:10%; width:10%;'><a href='pdf/$p[1]' target='blank'><img src='images/pdf_image.jpg' class='img-polaroid'></a></td>";
                        else if (substr($p[9], 0, 15) == "application/zip" || substr($p[9], 0, 24) == "application/octet-stream")
                        echo "<td style='height:10%; width:10%;'><a href='zips/$p[1]' target='blank'><img src='images/images.jpeg' class='img-polaroid'></a></td>";
                        else if(substr($p[9], 0, 71) == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
                        echo "<td style='height:10%; width:10%;'><a href='words/$p[1]' target='blank'><img src='images/word_image.png' class='img-polaroid'></a></td>";
                        
                        
                                           echo "<td width='15%' height='105'   border='2' ><ul>
    <li><b>Code:</b> " . $p[2] . "</li>
	<li><b>Type :</b> " . $p[10] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
    <li><a href='DELETEFILE.php?id=".$p[0]."'> <font color='red'><b>Delete</b> </font></a></li></ul>   </td>";

                        if ($i == 3) 
                        {
                            echo "</tr>";
                            $i = 0;
                        }
                        $i++;
                    }

echo "</table>";
   
      
  }
  else
  {
      $i = 1;
      echo "<table class='table table-bordered'>";
                    foreach ($document as $p) 
//                        echo $p[1]."<br>";
                    {
                        if ($i == 0)
                        {
                            echo " <tr>";
                        }

                        
     if (substr($p[9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" ||substr($p[9], 0, 29) =="application/vnd.ms-powerpoint")
                        echo "<td width='15%' height='105'   border='2' ><ul>
						<a href='ppt/$p[1]' target='blank'><img src='images/ppt_image.png' class='img-polaroid'></a>
    <li><b>Code:</b><b style='color:#0066FF'> " . $p[2] . "</b></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
    <li><a href='DELETEFILE.php?id=".$p[0]."'> <font color='red'><b>Delete</b> </font></a></li></ul>   </td>";
	else if (substr($p[9], 0, 15) == "application/pdf")
	echo "<td width='15%' height='105'   border='2' ><ul>
						<a href='pdf/$p[1]' target='blank'><img src='images/pdf_image.jpg' class='img-polaroid'></a>
    <li><b>Code:</b><b style='color:#0066FF'> " . $p[2] . "</b></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
    <li><a href='DELETEFILE.php?id=".$p[0]."'> <font color='red'><b>Delete</b> </font></a></li></ul>   </td>";
	 else if (substr($p[9], 0, 15) == "application/zip" || substr($p[9], 0, 24) == "application/octet-stream")
	echo "<td width='15%' height='105'   border='2' ><ul>
						<a href='zips/$p[1]' target='blank'><img src='images/images.jpeg' class='img-polaroid'></a>
    <li><b>Code:</b><b style='color:#0066FF'> " . $p[2] . "</b></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
    <li><a href='DELETEFILE.php?id=".$p[0]."'> <font color='red'><b>Delete</b> </font></a></li></ul>   </td>";
	 else if(substr($p[9], 0, 72) == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
	 echo "<td width='15%' height='105'   border='2' ><ul>
					<a href='words/$p[1]' target='blank'><img src='images/word_image.png' class='img-polaroid'></a>
    <li><b>Code:</b><b style='color:#0066FF'> " . $p[2] . "</b></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Downloads :</b> " . $p[8] ."</li>
    <li><a href='DELETEFILE.php?id=".$p[0]."'> <font color='red'><b>Delete</b> </font></a></li></ul>   </td>";
                        if ($i == 3) 
                        {
                            echo "</tr>";
                            $i = 0;
                        }
                        $i++;

                    }

echo "</table>";
  }
  
  ?>
      </div>          
                   
                
		    <ul style=" margin-top:-2%;" class="pager">
			<?php
 if( $page > 0 )
{
   $last = $page - 2;
    echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".$last."'>Last Record</a></li>";
   echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".$page."'>Next Records</a></li>";
	} 
else if( $page == 0 )
{
echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".$page."'>Next Records</a></li>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".$last."'>Last Record</a></li>";
   }
    
    ?>
    </ul>        <hr>
        <!--/row-->

		



        <div id="wrap">




            <div id="footer">
                <div class="container">
                    <p class="muted credit"><span class="copyright">Copyright &copy; 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
                </div>

            </div><!--/.fluid-container-->
        </div>



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
