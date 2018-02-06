<?php

include 'config.php';
$email = $_POST['iemail'];
$con=  mysqli_connect("50.62.209.85:3306", "theeduca","ajinkyavijayamrutR", "educa");
$str= "select * from institute where iemail='".$email."'";
$result= mysqli_query($con,$str);
$str1= "select * from student where semail='".$email."'";
$result1= mysqli_query($con,$str1);


//$email1_check= result_for_query("select * from institute where iemail=".$email."");
$count=  mysqli_num_rows($result);
$count1=  mysqli_num_rows($result1);
if ($count!=0)
{
    $random= rand(728912, 92721);
    $new_passward=$random;
    $email_passward=$new_passward;
    mysqli_query($con,"update institute set ipass='".$new_passward."' WHERE iemail='".$email."'");
    //send passward to user
    $subject="Login Information";
    $message=" your password has been changed to $email_passward";
    $from="From:passwordchange@theeduca.com";
    mail($email, $subject, $message,$from);
    echo "pssward mail to you";
}
else if ($count1!=0)
{
    $random1= rand(728912, 92721);
    $new_passward1=$random1;
    $email_passward1=$new_passward1;
    mysqli_query($con,"update student set spass='".$new_passward1."' WHERE semail='".$email."'");
    //send passward to user
    $subject="Login Information";
    $message=" your password has been changed to $email_passward1";
    $from="From:passwordchange@theeduca.com";
    mail($email, $subject, $message,$from);
    echo "password mail to you";
}
 else {
    echo "email not exits";
}


?>
