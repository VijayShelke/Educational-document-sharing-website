<?php
include 'config.php';


$imgname=$_POST['photo'];

$img="upload/".$imgname;
    
$success=$DB->query("DELETE FROM instimg WHERE imgname='".$imgname."' ");
if(isset($success))
{
    unlink($img);
}
 else {
    echo "unsucessfull delete";
}

header("location:institutehome.php");

?>
