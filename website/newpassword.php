<?php

include 'config.php';
$ipass1 = $_POST['ipass1'];
$ipass2 = $_POST['ipass2'];

$iuid = $_SESSION['institute'];

if (isset($ipass1) && isset($iuid) && isset($ipass2)) {
    
    if($ipass1!=$ipass2) {
        echo "<script>";
        echo "<alert> Password does not match</alert>";
        echo "</script>";
    }
 else {
        
    
    
    $s = Institute::newmpass($iuid, $ipass1);
    if ($s == TRUE) {
      echo "Your password has been changed successfully";
	  echo "<br> <a href='uploadinstitute.php'> Back To Home</a>";
    } else {
        echo "<script>";
        echo "<alert> Password is not updated</alert>";
        echo "</script>";
    }
 }
} else {
    echo 'value is not set';
}
?>
