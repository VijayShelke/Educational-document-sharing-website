<?php
include 'config.php';


$name= strtoupper($_POST['name1']);
$email=$_POST['semail1'];
$password = $_POST['spass1'];
//$cpassword = $_POST['spass2'];
$city=strtoupper($_POST['scity']);
$state=strtoupper($_POST['sstate']);
$country=strtoupper($_POST['scountry']);
$previous_page=$_SESSION['student_last_page'];




if(isset($name) && isset($email) && isset($city) && ($password))
{
 // $s1= new Student($email,$password);

 $check=Student::checkUser1($email);
  $inst=Institute::checkUser1($email);
// $int=$DB->result_for_query("SELECT iusername FROM institute WHERE iemail='".$email."'");
 if($check==TRUE)
 {
 //if($int[0][0]=$email){
          
     header("location:studentform.php");
     $_SESSION['mgs']="PLEASE TRY ANOTHER EMAIL";
	
 //} 
   
 }
 else if($inst==TRUE)
 {

          
     header("location:studentform.php");
     $_SESSION['mgs']=" PLEASE TRY ANOTHER EMAIL";
	
 
   
 }
 else
 {
     Student::add_profile($email, $password,  $city, $state, $country, $name);
     $success = Student::CheckStudent($email, $password);
        if ($success == TRUE)
        {
            $list = $DB->result_for_query("select susername from student where susername='" . $email . "'");

            $_SESSION['student'] = $list[0][0];
            unset($_SESSION['student_last_page']);
            header("location:$previous_page");
        } else {
            header("location:index.php");
        }
 }
}
else
{
    header("location:studentform.php");
}
?>
