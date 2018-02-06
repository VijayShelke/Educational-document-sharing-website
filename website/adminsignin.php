<?php

include 'config.php';
/*
 * 
 * 
 */
if ($_POST['submit']) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($password) && isset($username)) 
    {
        $success = Admin::checkAdmin($username, $password);
        if ($success == TRUE) {
            $list = $DB->result_for_query("select auid from admin where ausername='" . $username . "' and apassword='" . $password . "'");

            $_SESSION['admin'] = $list[0][0];
            //session_start();

            
            header("location:adminhome.php");
        }
        else 
            {
            header("location:index.php");
            }
    } 
    else
    {
        
        header("location:index.php");
    }
}
?>
