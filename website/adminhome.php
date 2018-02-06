<!DOCTYPE html>
<?php
include 'config.php';
$username = NULL;
?>
<html lang="en">
    <head>
        
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
                xmlhttp.open("GET","getallcountry.php?q="+str,true);
                xmlhttp.send();
            }
        </script>
        
        <meta charset="utf-8">
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="css/admistrap.css" rel="stylesheet">
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
        <link href="css/admistrap-responsive.css" rel="stylesheet">

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

    <body>


        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#"><img src="images/Picture1.png" width="35" height="47">The Educa.com </a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right"> 
                            <i class="icon-cog"></i> 
                            <font size="5">
                            <?php
                            if (isset($_SESSION['admin'])) {
                                $auid = $_SESSION['admin'];
                                if ($auid == 1)
                                    $adminname = "Vijay";
                                else if ($auid == 2)
                                    $adminname = "Ajinkya";
                                else {
                                    header("location:logout.php");
                                }
                                echo "hello " . $adminname;
                                // $scount = $DB->get_count_for_query("select * from studjoininst where iuid=" . $username . "");
                                ///echo " [ " . $institutecode[0][0] . " ] ";
                            }
                            else
                               // header("location:index.php");
                            ?>

                            </font>
                            <a href="#" class="navbar-link"></a> 




                            <i class="icon-cog"></i> <a href="#" class="navbar-link"></a>
                            <?php
                            echo "<a href='logout.php'>Sign Out</a>";
                            ?>

                        </p>
                        <ul style="" class="nav" >
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Upload</a></li>
                            <li><a href="#contact"></a></li>
                        </ul>
                        <div id="search1" align="center">
                            <form class="form-search" >
                            </form>
                            <form class="form-search" >
                                <input name="text" type="text" class="input-medium search-query">
                                <button type="submit" class="btn">Search</button>
                                                            
                            </form>
                        </div>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid"><table id="table15" width="20%" border="3" align="left"  class="table-bordered">
                    <tr class="success">



                        <td  bgcolor="#CCCCCC" width="25%" height="45"></td>
                    </tr>
                    <tr class="success">
                        <td  bgcolor="#CCCCCC" height="134">    
                            <div align="center">
                                <h4>No of students</h4>
                                <?php
                                $noofstudent = $DB->result_for_query("select count(DISTINCT suid) from student");
                                echo $noofstudent[0][0]
                                ?> 
                                <h4>No of institute</h4><?php
                                $noofinstitute = $DB->result_for_query("select count(DISTINCT iuid) from institute");
                                echo $noofinstitute[0][0]
                                ?>
                            </div>
                        </td>
                    </tr>

                    <tr>

                    </tr>
                    <tr class="success">
                        <td  bgcolor="#CCCCCC" height="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    </tr>
                </table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>
                <br>
                <br>
                <table id="table10"  width="30%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th scope="row"><button type="submit" class="btn btn-danger">DELETE STUDENTS</button></th>
                        <td><button type="submit" class="btn btn-danger">DELETE INSTITUTES</button></td>
                    </tr>
                </table>

                <table id="table9" width="30%" border="2" align="left"  class="table-bordered">
                    <tr id="add" class="success">

                        <td align="center" width="21%" height="50"  bgcolor="#CCCCCC"><h4>  Section</h4>     </td>
                        <td align="center" width="79%" height="50"  bgcolor="#CCCCCC"><h4>&nbsp;</h4>    </td>

                        <td align="center" width="79%"  bgcolor="#CCCCCC">&nbsp;</td>
                        <td align="center" width="79%"  bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>



                    <tr class="success">

                        <td align="center" width="21%" height="50"  bgcolor="#CCCCCC"> <div align="center">
                                <button type="submit" class="btn btn-success">CITY</button>

                            </div>    </td>
                        <td align="center" width="79%" height="50"  bgcolor="#CCCCCC"> <div align="left">
                                <input type="text" placeholder="Type something…">

                            </div>    </td>

                        <td align="center" width="79%"  bgcolor="#CCCCCC"><button type="submit" class="btn btn-success">ADD</button></td>
                        <td align="center" width="79%"  bgcolor="#CCCCCC"><button type="submit" class="btn btn-danger">DELETE</button></td>
                    </tr>


                    <tr class="success">

                        <td align="center" width="21%" height="50"  bgcolor="#CCCCCC"> <div align="center">
                                <button type="submit" class="btn btn-success">STATE</button>

                            </div>    </td>
                        <td align="center" width="79%" height="50"  bgcolor="#CCCCCC"> <div align="left">
                                <input type="text" placeholder="Type something…">

                            </div>    </td>

                        <td align="center" width="79%"  bgcolor="#CCCCCC"><button type="submit" class="btn btn-success">ADD</button></td>
                        <td align="center" width="79%"  bgcolor="#CCCCCC"><button type="submit" class="btn btn-danger">DELETE</button></td>
                    </tr>




                    <tr class="success">

                        <td align="center" width="21%" height="50"  bgcolor="#CCCCCC"> <div align="center"><button type="submit" class="btn btn-success">COUNTRY</button>



                            </div>     </td>
                        <td align="center" width="79%" height="50"  bgcolor="#CCCCCC"> <div align="left">
                                <input type="text" placeholder="Type something…">

                            </div>    </td>

                        <td align="center" width="79%"  bgcolor="#CCCCCC"><button type="submit" class="btn btn-success">ADD</button></td>
                        <td align="center" width="79%"  bgcolor="#CCCCCC"><button type="submit" class="btn btn-danger">DELETE</button></td>
                    </tr>




                    <tr class="success">

                        <td align="center" width="21%" height="50"  bgcolor="#CCCCCC"> <div align="center">


                            </div>    </td>
                        <td align="center" width="79%" height="50"  bgcolor="#CCCCCC"> <div align="left">
                                <input type="text" placeholder="Type something…">

                            </div>    </td>

                        <td align="center" width="79%"  bgcolor="#CCCCCC">&nbsp;</td>
                        <td align="center" width="79%"  bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>



                    <tr class="success">

                        <td align="center" width="21%" height="50"  bgcolor="#CCCCCC"> <div align="center">

                            </div>    </td>
                        <td align="center" width="59%" height="50"  bgcolor="#CCCCCC"> <div align="left">


                            </div>    </td>

                        <td align="center" width="79%"  bgcolor="#CCCCCC">&nbsp;</td>
                        <td align="center" width="79%"  bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>



                    <tr class="success">

                        <td align="center" width="21%" height="50"  bgcolor="#CCCCCC"> <div align="center">

                            </div>    </td>
                        <td align="center" width="79%" height="50"  bgcolor="#CCCCCC"> <div align="left">


                            </div>    </td>

                        <td align="center" width="79%"  bgcolor="#CCCCCC">&nbsp;</td>
                        <td align="center" width="79%"  bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                </table>



            </div>
            <div style="border: thin; height:580px; width:470px; margin-left:60%; margin-top:-45%; background-color:#0066FF;" >



                <div style="border:thin; height:100%; width:20%;  background-color: #FFFFFF" >
                    <form action="" method="GET">
                    <table width="100%" height="100%" border="1" cellspacing="0" cellpadding="0">
                        <tr>
                            <th scope="row"><input type="submit" name="country" value="country" class="btn btn-success" ></th>
                        </tr>
                        <tr>
                            <th scope="row"><input type="submit" name="state" value="state" class="btn btn-success" ></th>
                        </tr>
                        <tr>
                            <th scope="row"><button type="submit" class="btn btn-success">ADD</button></th>
                        </tr>
                        <tr>
                            <th scope="row"><button type="submit" class="btn btn-success">ADD</button></th>
                        </tr>
                        <tr>
                            <th scope="row"><button type="submit" class="btn btn-success">ADD</button></th>
                        </tr>
                        <tr>
                            <th scope="row"><button type="submit" class="btn btn-success">ADD</button></th>
                        </tr>
                        <tr>
                            <th scope="row"><button type="submit" class="btn btn-success">ADD</button></th>
                        </tr>
                        <tr>
                            <th scope="row"><button type="submit" class="btn btn-success">ADD</button></th>
                        </tr>
                        <tr>
                            <th scope="row"><button type="submit" class="btn btn-success">ADD</button></th>
                        </tr>
                        <tr>
                            <th scope="row"><button type="submit" class="btn btn-success">ADD</button></th>
                        </tr>
                    </table>
                    </form>


                </div> 
                <div    style="border: thin; height:100%; width:80%; margin-left:20%; margin-top:-123.5%; background-color:pink;">
                
                    <?php 
                    if(isset($_GET['country']))
                    {
                     $result=$DB->result_for_query("select cname from country");
                     foreach ($result as $q) 
                     {
                         
                         echo " <input type='text' value='".$q[0]."'>";
                     }
                    }
                    
                     if(isset($_GET['state']))
                    {
                     $result=$DB->result_for_query("select statename from state");
                     foreach ($result as $q) 
                     {
                         echo "<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$q[0]."</b></br>";
                     }
                    }
                    ?>
                  </p> 
               </div>
                

            </div> 



        </div> 
        <hr>
        <!--/row-->








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
