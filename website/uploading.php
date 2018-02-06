<?php

include 'config.php';

function getExtension($str) {
    $i = strrpos($str, ".");
    if (!$i) 
    {
        return"";
    }
    $l = strlen($str) - $i;
    $ext = substr($str, $i + 1, $l);
    return $ext;
}

$formats = array("jpg", "png", "gif", "bmp", "jpeg", "PNG", "JPG", "JPEG", "GIF", "BMP");
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") 
{
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $tmp = $_FILES['file']['tmp_name'];

    
    $institutecode="raw";
    
    
    if (isset($_SESSION['institute'])) {
                                      $username=$_SESSION['institute'];
             $institutecode=$DB->result_for_query("select code from institute where iuid=".$username."");
    }

    if (strlen($name)) 
    {
        $ext = getExtension($name);
        if (in_array($ext, $formats)) 
        {
            if ($size < (1024 * 1024)) 
            {
                $imgn = time() . "." . $ext;
                if (move_uploaded_file($tmp, "./upload/" . $imgn)) 
                {
                    

                    $DB->query("insert into instimg(imgname,imgtype,code,date) values('" . $imgn . "','" . $name . "','" . $institutecode[0][0] . "',NOW())");
                
                    header("location:institutehome.php");
                    
                } else {
                    echo "<script>";
            echo "alert('Uploading Failed.')";
            echo "</script>";
                }
            } else {
                 echo "<script>";
            echo "alert('Image File Size Max 1 MB')";
            echo "</script>";
               // echo "Image File Size Max 1 MB";
            }
        }
        else
        {
            //header("Location:institutehome.php");
             echo "<script>";
            echo "alert('Invalid Image')";
            echo "</script>";
        }
    } 
    else 
    {
        echo "Please select an image.";
        exit;
    }
}
