<?php
include "config.php";
if ($_POST['submit']) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $id=$_POST['id'];
    $file=$_POST['file'];
 $success = Student::CheckStudent($username, $password);
            if ($success == TRUE) {
                $list = $DB->result_for_query("select susername from student where susername='" . $username . "'");
                $_SESSION['student'] = $list[0][0];
                if (isset($_SESSION['id'])) {

                    $price = $DB->result_for_query("select amount from document where id='" . $_SESSION['id'] . "'");
                   if ($price[0 ][0] == 0)
                        header("location:buyzeropage.php?id=$_SESSION[id]&ref=".$file."");
                    else {
                        header("location:buypage.php?id=$_SESSION[id]&ref=".$file."");
                    }
                }
                else
                    header("location:buypage.php?id=".$id."&ref=".$file."");
            }
            else
                header("location:buypage.php?id=".$id."&ref=".$file."");
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
