<?php

include 'config.php';
$iname = $_POST['iname'];
$iusername = $_POST['iemail1'];
$iaddress = $_POST['iaddress'];
$icontact = $_POST['icontact'];
$iemail = $_POST['iemail1'];
$icity = $_POST['icity'];
$istate = $_POST['istate'];
$icountry = $_POST['icountry'];
$ipincode = $_POST['ipincode'];
$iuid = $_SESSION['institute'];

if (isset($iname) && isset($iaddress) && isset($ipincode) && isset($iemail) && isset($icountry) && isset($iusername) && isset($istate) && isset($icity)) {
    $s = Institute::updateprofile($iuid, $iusername, $iname, $iemail, $iaddress, $icity, $istate, $icountry, $ipincode, $icontact);
    if($s==TRUE)
    {
        echo "<script>";
    echo "<alert> Profile is updated successffully</alert>";
    echo "</script>";
    }
    else
         {
        echo "<script>";
    echo "<alert> Profile is not updated</alert>";
    echo "</script>";
    }
    
}
?>
