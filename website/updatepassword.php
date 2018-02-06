<?php

include 'config.php';
$ipass = $_POST['ipass'];
$iuid = $_SESSION['institute'];
echo $ipass;

if (isset($ipass) && isset($iuid))
                {
        $s = Institute::confirmpass($iuid, $ipass);
        if($s==TRUE)
    {
    header("location:changepassword.php");
    }
    else
         {
        echo "<script>";
    echo "<alert> Old password is not correct</alert>";
    echo "</script>";
    echo 'not correct';
    }
    
}
else {
    echo 'value is not set';
}

?>
