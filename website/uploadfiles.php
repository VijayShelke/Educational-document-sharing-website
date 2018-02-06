<?php

include "config.php";
$code = $_POST['institutecode'];
$target=NULL;

$filename = $_FILES['uploadedfile']['name'];
$filetype = $_FILES['uploadedfile']['type'];
$course = strtoupper($_POST['course']);
$random_digit=rand(0000,9999);
$new_file_name=$random_digit.$filename;

if ($course == NULL)
    $course = strtoupper($_POST['other']);
$subject = strtoupper($_POST['subject']);
$topic = strtoupper($_POST['topic']);
$amount = $_POST['amount'];
$date = date("Y-m-d");
$filetypename =strtoupper($_POST['filetypename']);
$noofdownloads = 0;

if (substr($filetype, 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" ||substr($filetype, 0, 29) =="application/vnd.ms-powerpoint")
    $target = "ppt/".$new_file_name;
else if (substr($filetype, 0, 15) == "application/pdf")
    $target = "pdf/".$new_file_name;
else if (substr($filetype, 0, 15) == "application/zip" || substr($filetype, 0, 25) == "application/octet-stream")
    $target = "zips/".$new_file_name;
else if(substr($filetype, 0, 72) == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"||substr($filetype, 0, 16) == "application/docx")
    $target = "words/".$new_file_name;
else
    $target=NULL;
echo "SORRY THIS FILE IS NOT SUPPORTED BY SYSTEAM ";
echo $filetype;

if($target==NULL)
{
  
}
else
{
   
if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target)) {
    $success = $DB->query("insert into document (name,institute_code,amount,date,course,subject,topic,NoOfDownloads,filetype,Doctype) values('" . $new_file_name . "','" . $code . "'," . $amount . ",NOW(),'" . $course . "','" . $subject . "','" . $topic . "'," . $noofdownloads . ",'" . $filetype . "','" . $filetypename . "');");
}
else
{
    echo "Sorry, there was a problem uploading your file.";
}

header("location:uploadinstitute.php");
}
?>
