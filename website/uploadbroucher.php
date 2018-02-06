
<?php

include "config.php";
if (isset($_POST['submit'])) {

    $iname = $_POST['institute'];
    $list = $DB->result_for_query("select iuid from institute where iname='" . $iname . "'");
    $currentcollege=$list[0][0];
    $target = "brouchers/";
    //$filedata = $_FILES['uploadbroucher']['tmp_name'];
    $filetype = $_FILES['uploadbroucher']['type'];
    $target = $target. basename($_FILES['uploadbroucher']['name']);
    $curdate = date("Y-m-d");
    

    if (move_uploaded_file($_FILES['uploadbroucher']['tmp_name'], $target)) 
    {
        $name=$DB->result_for_query("select brouchername from brouchers where iuid='$currentcollege'");
        if(isset($name[0][0]))
        { 
            unlink($name[0][0]);
        //echo "insert into document (name,institute_code,amount,date,course,subject,topic,NoOfDownloads,filetype) values('" . $filename . "'," . $code[0][0] . "," . $amount . ",'" . $date . "','" . $course . "','" . $subject . "','" . $topic . "'," . $noofdownloads . ",'" . $filetype . "'";
          $DB->query("delete from brouchers where iuid =' $currentcollege '");
       
          }
         $DB->query("insert into brouchers (brouchername,iuid,TYPE,upload_date) values('".$target."',".$list[0][0].",'".$filetype."','$curdate');");
         //
         
         
        header("location:BROUCHER.PHP");
    }
else
      header("location:BROUCHER.php");
      

      

}
 else {
    echo "can't upload ";
    header("location:BROUCHER.php");
}
?>