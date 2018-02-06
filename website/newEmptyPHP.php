<?php

$filepath=$DB->result_for_query("Select * from document where id=".$q."");

if (substr($filepath[0][9], 0, 75) == "application/vnd.openxmlformats-officedocument.presentationml.presentation")
{
    header('Content-Description: File Transfer');
    header('Content-Type:application/vnd.openxmlformats-officedocument.presentationml.presentation');
    header('Content-Disposition: attachment; filename=ppt/'.basename($filepath[0][1]));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
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
    header('Content-Length: ' . filesize($filepath[0][1]));
    readfile($filepath[0][1]);
    exit;
    
}
else
{
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document|| application/docx');
    header('Content-Disposition: attachment; filename=words/'.basename($filepath[0][1]));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath[0][1]));
    readfile($filepath[0][1]);
    exit;
    
}

                 
?>
 
?>
