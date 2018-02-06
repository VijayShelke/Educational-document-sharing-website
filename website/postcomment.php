
<?php

include "config.php";

if(isset($_POST['submit']))
{
$comment=$_POST['comment'];
$id=$_POST['fileid'];
$ref=$_POST['ref'];
$sname=$_SESSION['student'];
$suid=$DB->result_for_query("select suid from student where susername = '".$sname."'");
if($comment!="" && $id!="")
{
  
    Comment::add_comment($comment, $id,$suid[0][0]);
    
    header("location:buyzeropage.php?id=".$id."&ref=".$ref."");
}
else
    header("location:buyzeropage.php?id=".$id."&ref=".$ref."");

}
 else {
header("location:studentuploadshown.php");    

}
?>
