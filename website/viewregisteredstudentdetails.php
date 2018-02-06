<!DOCTYPE html>

<html>
    <head>
   
        <script src="js/jquery-1.11.0.min.js"/>
        </script>
       
       <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <meta charset="UTF-8">
        <title>View Student Details</title>   
      
    </head>
    
    <body>
        <?php
         include '../config.php';
           $count=$DB->get_count_for_query("select * from user1");
           $rec_limit=5;
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
                $studentdetails=$DB->result_for_query("select * from user1 limit ".$offset.", ".$rec_limit."");
  
                if(isset($_SESSION['admin']))
             $ausername=$_SESSION['admin'];
         else
            header("location:../index.php");
         ?>
        <div id="header">
        </div>
             <div id="menu1">
            <?php
            if(isset($ausername))
            {
            ?>
         <a href=<?php echo LOGOUT?>>LOGOUT</a>
         <?php
            }
            else
            {
                header("location:".ROOT_DIR_FROM_ADMIN."");
            }
         ?>
        </div>
        <div id="menu2">
            <a href=""> ENQUIRY<sup>New</sup></a>
            
        </div>
        <div id="menu3">
            <a href="<?php echo ROOT_CONTACT_TO_ADMIN;?>">CONTACT DETAILS</a> 
        </div>
        <div id="menu4">
            <a href="<?php echo ADMIN_PROFILE;?>">PROFILE</a>
        </div>
      <div id="menu5">
          <a href="<?php echo TO_ADMINS_ROOT_DIR;?>">HOME</a>
      </div>
       
        <div id="adminsidebar">
            <div class="admininnsersidebar1">
                <ul>
            <li><a href="<?php echo OPERATION ?>?id=1206">Edit Address</a><br></li>
            <li><a href="<?php echo OPERATION ?>?id=1207">Edit Contact Details</a><br></li>
            <li><a href="<?php echo OPERATION ?>?id=1204">Edit Student Details</a><br></li>
                </ul>                
            </div>
            <div class="admininnsersidebar1">
                <ul>
                    <li><a href="<?php echo OPERATION ?>?id=1201">Add Student Details</a><br></li> 
                </ul>
            </div>
            <div class="admininnsersidebar1">
                <ul>
                    <li><a href="<?php echo OPERATION ?>?id=1200">Registered Students</a><br></li>
                   
                </ul>            
            </div>
            <!--
           
      -->      
        </div>
<div id="addstudentcontent" >        
        <table border="1">
            <th>
            <h3>Full name</h3>
            </th>
            <th>
                <h3>Address</h3>
            </th>
            
            <th>
                <h3>Mobile</h3>
            </th>
            <th>
            <h3>    Courses</h3>
            </th>
            <th>
            <h3>    Interest</h3>
            </th>
            <th>
            <h3>    Status of Joining</h3>
            </th>
            <th>
            <h3> Date of Enquiry</h3>
            </th>
            <th>
            <h3> Action</h3>
            </th>
           <?php
           
           foreach($studentdetails as $s)
           {
               echo "<tr>";
               echo "<td>".$s[1]."</td><td>".$s[2]."</td><td>".$s[3]."</td><td>".$s[4]."</td><td>".$s[7]."</td><td>".$s[9]."</td><td>".$s[10]."</td><td><a href='editstudentdetails2.php?uid=".$s[0]."'>EDIT</a></td>";
               echo "</tr>";
           }
          
           ?>
        </table>
    <?php
   /* $pageno=19;
    if($pageno>19)
    echo "<div class='previous'><a href='".$_SERVER['PHP_SELF']."?id=".($pageno-5)."'>Previous</a></div>";
    echo "<div class='next'><a href='".$_SERVER['PHP_SELF']."?id=".($pageno+5)."'>Next</a></div>"
    
    */ 
    
    if( $page > 0 )
{
   $last = $page - 2;
  echo "<div class='previous'><a href='".$_SERVER['PHP_SELF']."?page=".$last."'>Last 5 Records</a></div>";
  echo "<div class='next'><a href='".$_SERVER['PHP_SELF']."?page=".$page."'>Next 5 Records</a></div>";
  
} 
else if( $page == 0 )
{
   
 echo "<div class='next'><a href='".$_SERVER['PHP_SELF']."?page=".$page."'>Next 5 Records</a></div>";
   
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<div class='previous'><a href='".$_SERVER['PHP_SELF']."?page=".$last."'>Last 5 Records</a></div>";
}
    
    ?>
    
    
</div>
    </body>
</html>
