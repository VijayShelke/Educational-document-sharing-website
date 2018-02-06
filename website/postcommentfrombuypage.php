
<?php

include "config.php";

if(isset($_POST['submit']))
{
$comment=$_POST['comment'];
$id=$_POST['fileid'];
$ref=$_POST['ref'];

if($comment!="" && $id!="")
{
    $success=Comment::CheckComment($comment);
    
    if($success!=true)
    Comment::add_comment($comment, $id);
    
    header("location:buypage.php?id=".$id."&ref=".$ref."");
}
else
    header("location:buypage.php?id=".$id."&ref=".$ref."");

}
 else {
header("location:studentuploadshown.php");    

}
?>
