<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>studentuploadpage</title>
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
            {color: #0000FF; size:px;
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
    </head>

    <body>
        <?php
        include "config.php";
        $institutecode = NULL;
        $institutename = NULL;
        $scount = array();
        if (isset($_GET['id'])) {
            $institutecode = $_GET['id'];
            $institutename = $DB->result_for_query("select iname from institute where code='" . $institutecode . "'");
            $iid = $DB->result_for_query("select iuid from institute where iname='" . $institutename[0][0] . "'");
            $scount = $DB->get_count_for_query("select * from studjoininst where iuid=" . $iid[0][0] . "");
        }
        $count = $DB->get_count_for_query("select * from document");
        $rec_limit = 12;
        if (isset($_GET{'page'})) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page;
        } else {
            $page = 0;
            $offset = 0;
        }
        $left_rec = $count - ($page * $rec_limit);
        $document = $DB->result_for_query("select * from document where institute_code='" . $institutecode . "' order by date desc limit " . $offset . ", " . $rec_limit . " ");
        ?>       
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
                            <li class=""><a href="studenthome.php">Home</a></li>
                            <li class="active"><a href="studentuploadshown.php">Institute profile</a></li>
                            <?php
                            if (isset($_SESSION['student'])) {
                                
                            } else {

                                echo "<li><a href='studentform.php'>Student Registration</a></li>";
                            }
                            ?>



                        </ul>
                        </li>

                        </ul>

                    </div>
                    <?php
                    if (isset($_SESSION['student'])) {
                        $username = $_SESSION['student'];
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b  style='color:#FFFFFF' >hello " . $username . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>";
                        echo "<a href='logout.php'>Sign Out</a>";
                    } else {

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
	 <div style=" margin-top:3.4%;" class="span3">
          <div class="well sidebar-nav">
    <div style="background-image:url(images/Picture13.png); align="center"class="span9">
       
                <?php
                if (isset($_GET['id'])) {
                    $code1 = $_GET['id'];

                    $data = $DB->result_for_query("select * from institute where code='" . $code1 . "'");

                    echo "  <ul class='nav nav-list'>
              <li>NAME :<h style='color:#0066FF'> " . $data[0][3] . "</h></li>
             <li>CODE :<h style='color:#0066FF'> " . $data[0][10] . "</h></li>
              <li>CONTACT :<h style='color:#0066FF'> " . $data[0][11] . "</h></li>
             <li>ADDRESS :<h style='color:#0066FF'> " . $data[0][5] . "</h></li>
             <li>CITY :<h style='color:#0066FF'> " . $data[0][6] . "</h></li>
             <li>PINCODE :<h style='color:#0066FF'> " . $data[0][9] . "</h></li>
              
			 <li>STATE:<h style='color:#0066FF'> " . $data[0][7] . "</h></li>
	<li>COUNTRY: <h style='color:#0066FF'> " . $data[0][8] . " </h></li>
              
            </ul> ";
                }
                ?>
				 <div class="row-fluid">
		
       
          
          </div><!--/.well -->
        </div><!--/span-->


            </div>
        </div>

    </div>

    <div style=" margin-top:-33%;" class="container-fluid">
        <div class="row-fluid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div id="find" align="center">
                <form style="margin-top:32%;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                    <input type="hidden" name="id" value="<?php echo $institutecode; ?>">
                    <input type="text" name="searchfile" class="input-medium search-query">
                    <input type="submit" name="searchsubmit" class='btn btn-medium btn-primary' value="Search">
                </form>
            </div>








            <!-- printing all the value fetching from getDocument.php -->
			 <div style=" margin-left:26%; margin-top:-15%;" class="span9">

            <?php
            if (isset($_GET['searchsubmit'])) {
                //$searchtext = NULL;
                $foundrecords = NULL;
                $searchtext = $_GET['searchfile'];
                $institutecode = $_GET['id'];
                if ($searchtext != NULL)
                {
                    $foundrecords = $DB->result_for_query("select * from document where institute_code='" . $institutecode . "' and  (course LIKE '" . $searchtext . "%' or subject LIKE '" . $searchtext . "%' or topic LIKE '" . $searchtext . "%' or amount LIKE '" . $searchtext . "%' or Doctype LIKE '" . $searchtext . "%') limit " . $offset . ", " . $rec_limit . "");
                }
                else
                    $foundrecords = $DB->result_for_query("select * from document where institute_code='" . $institutecode . "' order by date desc limit " . $offset . ", " . $rec_limit . " ");

                $i = 1;
                echo "<table class='table table-bordered'>";
                foreach ($foundrecords as $p) {
//                        echo $p[1]."<br>";
                    if ($i == 0) {
                        echo " <tr>";
                    }
                    if (substr($p[9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" || substr($p[9], 0, 29) =="application/vnd.ms-powerpoint")
                        echo "<td style='height:10%; width:10%;'><a href='buypage.php?id=$p[0]&ref=zips/$p[1]' target='blank'>
     <img src='images/ppt_image.png' class='img-polaroid'></a></td>";
                    else if (substr($p[9], 0, 15) == "application/pdf")
                        echo "<td style='height:10%; width:10%;'><a href='buypage.php?id=$p[0]&ref=zips/$p[1]' target='blank'>
     <img src='images/pdf_image.png' class='img-polaroid'></a></td>";
                    else if (substr($p[9], 0, 15) == "application/zip" || substr($p[9], 0, 24) == "application/octet-stream")
                        echo "<td style='height:10%; width:10%;'><a href='buypage.php?id=$p[0]&ref=zips/$p[1]' target='blank'>
     <img src='images/images.jpeg' class='img-polaroid'></a></td>";
                    else
                        echo "<td style='height:10%; width:10%;'><a href='buypage.php?id=$p[0]&ref=zips/$p[1]' target='blank'>
     <img src='images/word_image.png' class='img-polaroid'></a></td>";

                    echo "<td>  
	<ul>
    <li><b>Code:</b> " . $p[2] . "</li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] . "</li>
    </ul> </td>";
                    if ($i == 3) {
                        echo "</tr>";
                        $i = 0;
                    }
                    $i++;
                }

                echo "</table>";
            } else {
                $i = 1;
                echo "<table class='table table-bordered'>";
                foreach ($document as $p) {
//                        echo $p[1]."<br>";
                    if ($i == 0) {
                        echo " <tr>";
                    }
                    if (substr($p[9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" || substr($p[9], 0, 29) =="application/vnd.ms-powerpoint")
                        echo "<td width='15%' height='105'   border='2' ><ul>
					<img src='images/ppt_image.png' class='img-polaroid'>
	 
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] . "</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
                    else if (substr($p[9], 0, 15) == "application/pdf")
                        echo "<td width='15%' height='105'   border='2' ><ul>
						<img src='images/pdf_image.jpg' class='img-polaroid'>
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] . "</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
                    else if (substr($p[9], 0, 15) == "application/zip" || substr($p[9], 0, 24) == "application/octet-stream")
                        echo "<td width='15%' height='105'   border='2' ><ul>
					<img src='images/images.jpeg' class='img-polaroid'>
	
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] . "</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";
                    else if (substr($p[9], 0, 72) == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
                        echo "<td width='15%' height='105'   border='2' ><ul>
					<img src='images/word_image.png' class='img-polaroid'>
	
    <li><b>Code:</b>  <a href='studentuploadshown.php?id=" . $p[2] . "'><h7 style='color:#FF0000;' > " . $p[2] . "</h></a></li>
	<li><b>Type :</b> " . $p[10] . "</li>
	
	<li><b>Course :</b> " . $p[5] . "</li>
	<li><b>Subject :</b> " . $p[6] . "</li>
	<li><b>Topic :</b> " . $p[7] . "</li>
	<li><b>Date :</b> " . $p[4] . "</li>
	<li><b>Downloads :</b> " . $p[8] . "</li>
	<li><a href='buyzeropage.php?id=$p[0]&ref=zips/$p[1]' target='blank'><b style='color:#0066FF'>Download here</b></a> </li>
    </ul> </td>";

                    if ($i == 3) {
                        echo "</tr>";
                        $i = 0;
                    }
                    $i++;
                }

                echo "</table>";
            }
            ?>
			</div>
			</div>


            <div align="center" id="pagination1" class="pagination">
                <ul>

                    <?php
                    /* if(!isset($currentpage))
                      $currentpage=1;
                      if($currentpage!=1)
                      echo "<li><input type='button' value='prev' onclick='showHint(this.value,$currentpage-1)'></li>";
                      for($j=1;$j<=$pages;$j++)
                      echo "<li><input type='button' value='".$j."' onclick='showHint(this.value)'></li>";
                      echo "<li><input type='button' value='next' onclick='showHint($currentpage+1)'></li>";

                     * */
                    ?>


                </ul>
        


            <ul style=" margin-top:-2%;" class="pager">
                <?php
                   if ($page > 0) 
                   {
                        $last = $page - 2;
                        echo "<li><a href='" . $_SERVER['PHP_SELF'] . "?page=" . $last . "&id=".$institutecode."'>Last Record</a></li>";
                        echo "<li><a href='" . $_SERVER['PHP_SELF'] . "?page=" . $page . "&id=".$institutecode."'>Next Records</a></li>";
                   } 
                   else if ($page == 0) 
                   {
                        echo "<li><a href='" . $_SERVER['PHP_SELF'] . "?page=" . $page . "&id=".$institutecode."'>Next Records</a></li>";
                   } 
                   else if ($left_rec < $rec_limit) 
                   {
                        $last = $page - 2;
                        echo "<li><a href='" . $_SERVER['PHP_SELF'] . "?page=" . $last . "&id=".$institutecode."'>Last Record</a></li>";
                   }
                ?>
            </ul>        <hr>

            <!--/row-->



            <div id="wrap">




                <div id="footer">
                    <div class="container">
                        <p class="muted credit"><span class="copyright">Copyright � 2014 . All Rights Reserved to The Educa <a href="#" class="toptip" title=""></a> </span></p>
                    </div>

                </div><!--/.fluid-container-->
            </div>



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