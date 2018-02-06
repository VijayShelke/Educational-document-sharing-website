<?php

include 'config.php';



$iname=strtoupper($_POST['iname']);

$iusername=$_POST['iemail1'];

$ipassword = $_POST['ipass1'];

$iaddress = strtoupper($_POST['iaddress']);
$icpassword = $_POST['ipass2'];
$icontact=$_POST['icontact'];

$iemail=$_POST['iemail1'];

$icity=strtoupper($_POST['icity']);

$istate=strtoupper($_POST['istate']);
$icountry=strtoupper($_POST['icountry']);
$ipincode=$_POST['ipincode'];


if(isset($iname) && isset($iaddress) && isset($ipincode) && isset($iemail) && isset($icountry) && isset($ipassword) &&isset($iusername) && isset($icpassword) && isset($istate) && isset($icity))
{
    if($ipassword==$icpassword)
    {
       $stu=Student::checkUser1($iemail);
	    $check=  Institute::checkUser1($iemail);
        if($check==TRUE)
        {
           
            header("location:Instituteform.php");
             $_SESSION['mgs']="PLEASE TRY ANOTHER EMAIL";
            
            
        }
		 else if($stu==TRUE)
        {
           
            header("location:Instituteform.php");
             $_SESSION['mgs']="PLEASE TRY ANOTHER EMAIL";
            
            
        }
        else
        {
            $count=$DB->result_for_query("Select count from count where cid=1");
              $sum=$count[0][0]+1;
             
              
            
            $update=$DB->query("update count set count=".$sum." where cid=1");

            $randomnumber=$DB->result_for_query("select count from count where cid=1");
                                    $randomchar=  Institute::randLetter();
                                    $randomcode=$randomchar."".$randomnumber[0][0];
                                    
                                   
            Institute::add_profile($iusername, $ipassword, $iname, $iemail, $iaddress, $icity, $istate, $icountry,$ipincode,$randomcode,$icontact);
            $success = Institute::CheckInstitute($iemail, $ipassword);
            if ($success == TRUE)
            {
                $list = $DB->result_for_query("select iuid from institute where iusername='" . $iemail . "' and ipass='".$ipassword."'");

              
                 $_SESSION['institute'] = $list[0][0];
                header("location:uploadinstitute.php");
            } 
            else 
            {
           // header("location:index.php");
            }
            
        }
    }
    else
    {
            header("location:Instituteform.php");
            
    }
    
}
else
{
            header("location:Instituteform.php");
            Constants::$SETFIELDS=TRUE;
}
if(isset($iname) && isset($iaddress) && isset($ipincode) && isset($iemail) && isset($icountry) && isset($ipassword) &&isset($iusername) && isset($icpassword) && isset($istate) && isset($icity)!= isset($icontact))
{
    if($ipassword==$icpassword)
    {
        $check=  Institute::checkUser1($iemail);
        if($check==TRUE)
        {
            header("location:Instituteform.php");
            
        }
        else
        {
            $count=$DB->result_for_query("Select count from count where cid=1");
              $sum=$count[0][0]+1;
             
              
            
            $update=$DB->query("update count set count=".$sum." where cid=1");

            $randomnumber=$DB->result_for_query("select count from count where cid=1");
                                    $randomchar=  Institute::randLetter();
                                    $randomcode=$randomchar."".$randomnumber[0][0];
                                    
                                   
            Institute::add_profile($iusername, $ipassword, $iname, $iemail, $iaddress, $icity, $istate, $icountry,$ipincode,$randomcode);
            $success = Institute::CheckInstitute($iemail, $ipassword);
            if ($success == TRUE)
            {
                $list = $DB->result_for_query("select iuid from institute where iusername='" . $iemail . "' and ipass='".$ipassword."'");

              
                 $_SESSION['institute'] = $list[0][0];
                header("location:uploadinstitute.php");
            } 
            else 
            {
           // header("location:index.php");
            }
            
        }
    }
    else
    {
            header("location:Instituteform.php");
            
    }
    
}
else
{
            header("location:Instituteform.php");
            
}
?>
