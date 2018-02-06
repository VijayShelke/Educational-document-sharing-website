<?php

include 'config.php';
/*
 * 
 * 
 */
if ($_POST['submit']) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($password) && isset($username)) {
        $success = Institute::CheckInstitute($username, $password);
        if ($success == TRUE) {
            $list = $DB->result_for_query("select iuid from institute where iusername='" . $username . "' and ipass='" . $password . "'");

            
            //session_start();
        }
   
        else {
            $success = Student::CheckStudent($username, $password);
            if ($success == TRUE) {
                $list = $DB->result_for_query("select susername from student where susername='" . $username . "'");
                //  session_start();
                $_SESSION['student'] = $list[0][0];
                                    header("location:buyzeropage.php");
                if (isset($_SESSION['id'])) {
                    

                    $price = $DB->result_for_query("select amount from document where id='" . $_SESSION['id'] . "'");
                   if ($price[0 ][0] == 0)
                        header("location:buyzeropage.php?id=$_SESSION[id]");
                    else {
                        header("location:buypage.php?id=$_SESSION[id]");
                    }
                }
                else
                    header("location:buyzeropage.php");
            }


            else {
                echo "<script>";
                echo "alert('Id or password is incorrect')";
                echo "</script>";
                // header("location:index.php");
            }
        }
    }
}
?>
