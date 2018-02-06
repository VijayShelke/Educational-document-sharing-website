<?php

include 'config.php';
$iemail = $_POST['iemail'];

if (isset($iemail)) {
    $s = Institute::confirmemail($iemail);
    if ($s == TRUE) {
        echo $s;
        $_SESSION['ipassemail'] = $iemail;
        header("location:resetpassward.php");
    } else {
        $i = Student::confirmemail($iemail);
        if ($i == TRUE) {
            $_SESSION['spassemail'] = $iemail;
            header("location:resetpassward.php");
        } else {
            echo "<script>";
            echo "<alert> Eamil is not present</alert>";
            echo "</script>";
            echo 'not correct';
        }
    }
} else {
    echo 'value is not set';
}
?>
