<?php
include "config.php";
$filehit=0;
$q=$_REQUEST['q'];


$success= Downloads::Checkfile($q);
echo $success;



if($success!=true)
{
    $filehit++;
   $success=$DB->query("insert into document(NoOfDownloads) values(".$filehit.");");
  
  
}
else
{
    echo $q;
$count=$DB->result_for_query("select NoOfDownloads from document where id=".$q."");
$count[0][0]++;
echo "<br> count".$count[0][0];
$success=$DB->query(" update document set NoOfDownloads=".$count[0][0]." where id=".$q."");

}


$filepath=$DB->result_for_query("Select * from document where id=".$q."");

if (substr($filepath[0][9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation" || substr($filepath[0][9], 0, 29) =="application/vnd.ms-powerpoint")
{
    header('Content-Description: File Transfer');
    header('Content-Type:application/vnd.openxmlformats-officedocument.presentationml.presentation || application/vnd.ms-powerpoint');
    header('Content-Disposition: attachment; filename=ppt/'.basename($filepath[0][1]));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    $filepath[0][1]="ppt/".$filepath[0][1];
    header('Content-Length: ' . filesize($filepath[0][1]));
    readfile($filepath[0][1]);
    exit;
    
}
else if (substr($filepath[0][9], 0, 15) == "application/pdf")
{
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=pdf/'.basename($filepath[0][1]));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    $filepath[0][1]="pdf/".$filepath[0][1];
    header('Content-Length: ' . filesize($filepath[0][1]));
    readfile($filepath[0][1]);
    exit;
    
}                           
else if (substr($filepath[0][9], 0, 15) == "application/zip" || substr($filepath[0][9], 0, 25) == "application/octet-stream")
{
     header('Content-Description: File Transfer');
    header('Content-Type: application/zip||application/octet-stream');
    header('Content-Disposition: attachment; filename=zips/'.basename($filepath[0][1]));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    $filepath[0][1]="zips/".$filepath[0][1];
    header('Content-Length: ' . filesize($filepath[0][1]));
    readfile($filepath[0][1]);
    exit;
    
}
else if( substr($filepath[0][9], 0, 71) == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || substr($filepath[0][9], 0, 16) == "application/docx"|| substr($filepath[0][9], 0, 15) == "application/doc"|| substr($filepath[0][9], 0, 16) == "application/docm")
{
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document || application/docx || application/doc');
    header('Content-Disposition: attachment; filename=words/'.basename($filepath[0][1]));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    $filepath[0][1]="words/".$filepath[0][1];
    header('Content-Length: ' . filesize($filepath[0][1]));
    readfile($filepath[0][1]);
    exit;
    
}
else {}
       
?>
 