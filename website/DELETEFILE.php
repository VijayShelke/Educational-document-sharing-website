<?php
include "config.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$id=$_GET['id'];
$filename=NULL;
$target=NULL;
if(isset($id))
{
  $filename=$DB->result_for_query("select name,filetype from document where id=".$id."");
  
   if($filename[0][1] == "application/docx")
            $target="words/".$filename[0][0];
   else if($filename[0][1] == "application/pdf")
            $target="pdf/".$filename[0][0];
			 else if($filename[0][1] == "application/vnd.openxmlformats-officedocument.presentationml.presentation")
            $target="ppt/".$filename[0][0];
			else if($filename[0][1] == "application/vnd.ms-powerpoint")
            $target="ppt/".$filename[0][0];
			
     else if($filename[0][1] == "application/zip")
            $target="zips/".$filename[0][0];          
       else if($filename[0][1] == "application/octet-stream")
            $target="zips/".$filename[0][0];          
      
            echo $target;
  unlink($target);
  $success=$DB->query("delete from document where id=".$id."");
  header("location:uploadinstitute.php");
}
else {
    header("location:institutehome.php");
}
  
?>
