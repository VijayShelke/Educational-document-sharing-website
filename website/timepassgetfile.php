
<?php

include "config.php";
if($_POST['submit'])
{
    $selectedtype=NULL;
    $selectedinstitute=NULL;
    $selectedamount=NULL;
    $selectedcourse=NULL;
    $selectedsubject=NULL;
    $selectedamount=NULL;
  
    
  
    
    
    if(isset($_POST['selectedtype']))
        $selectedtype=$_POST['selectedtype'];
    if($_POST['other']==NULL)
    {
        $selectedcourse=$_POST['selectedcourse'];
    }
    else
    {
        $selectedcourse=$_POST['other'];
      
    }
    if(isset($_POST['selectedsubject']))
        $selectedsubject=$_POST['selectedsubject'];
    if(isset($_POST['selectedtopic']))
        $selectedtopic=$_POST['selectedtopic'];
    if(isset($_POST['selectedinstitute']))
        $selectedinstitute=$_POST['selectedinstitute'];
    if(isset($_POST['selectedamount']))
        $selectedamount=$_POST['selectedamount'];
  
    
    
   
    switch($selectedtype)
    {
        case 1:/*$fileList=$DB->result_for_query("select * from document where Doctype='paper' or course='".$selectedcourse."' or subject='".$selectedsubject."' or topic='".$selectedtopic."' or institute_code='".$selectedinstitute."' or amount='".$selectedamount."'");
                if($selectedcourse!=NULL)
                {
                    $fileList=$DB->result_for_query("select * from document where Doctype='paper' and course='".$selectedcourse."'");
                
                    if($selectedsubject!=NULL)
                    {
                     $fileList=$DB->result_for_query("select * from document where Doctype='paper' and course='".$selectedcourse."' and subject='".$selectedsubject."'");
                        if($selectedtopic!=NULL)
                        {
         $fileList=$DB->result_for_query("select * from document where Doctype='paper' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."'");                  
         //print_r($fileList);
         if($selectedinstitute!=NULL)
                          {
                    $fileList=$DB->result_for_query("select * from document where Doctype='paper' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code='".$selectedinstitute."'");
                             
                            if($selectedamount!=NULL)
                            {
                                $fileList=$DB->result_for_query("select * from document where Doctype='paper' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute." and amount=".$selectedamount."");
                                
                            }   
                          }
                        }
                    }
                }
                    
            $_SESSION['filelist']=$fileList;
            break;
        
        case 2:$fileList=$DB->result_for_query("select * from document where Doctype='notes' or course='".$selectedcourse."' or subject='".$selectedsubject."' or topic='".$selectedtopic."' or institute_code='".$selectedinstitute."' or amount='".$selectedamount."'");
                if($selectedcourse!=NULL)
                {
                    $fileList=$DB->result_for_query("select * from document where Doctype='notes' and course='".$selectedcourse."'");
                
                    if($selectedsubject!=NULL)
                    {
                     $fileList=$DB->result_for_query("select * from document where Doctype='notes' and course='".$selectedcourse."' and subject='".$selectedsubject."'");
                        if($selectedtopic!=NULL)
                        {
         $fileList=$DB->result_for_query("select * from document where Doctype='notes' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."'");                  
                          if($selectedinstitute!=NULL)
                          {
                          $fileList=$DB->result_for_query("select * from document where Doctype='notes' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute."");
                              
                            if($selectedamount!=NULL)
                            {
                                $fileList=$DB->result_for_query("select * from document where Doctype='notes' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute." and amount=".$selectedamount."");
                            }   
                          }
                        }
                    }
                }
                    
            $_SESSION['filelist']=$fileList;
            break;
        
        
        case 3:$fileList=$DB->result_for_query("select * from document where Doctype='book' or course='".$selectedcourse."' or subject='".$selectedsubject."' or topic='".$selectedtopic."' or institute_code='".$selectedinstitute."' or amount='".$selectedamount."'");
                if($selectedcourse!=NULL)
                {
                    $fileList=$DB->result_for_query("select * from document where Doctype='book' and course='".$selectedcourse."'");
                
                    if($selectedsubject!=NULL)
                    {
                     $fileList=$DB->result_for_query("select * from document where Doctype='book' and course='".$selectedcourse."' and subject='".$selectedsubject."'");
                        if($selectedtopic!=NULL)
                        {
         $fileList=$DB->result_for_query("select * from document where Doctype='book' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."'");                  
                          if($selectedinstitute!=NULL)
                          {
                          $fileList=$DB->result_for_query("select * from document where Doctype='book' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute."");
                              
                            if($selectedamount!=NULL)
                            {
                                $fileList=$DB->result_for_query("select * from document where Doctype='book' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute." and amount=".$selectedamount."");
                            }   
                          }
                        }
                    }
                }
                    
            $_SESSION['filelist']=$fileList;
            break;
        
        
        case 4:$fileList=$DB->result_for_query("select * from document where Doctype='ppt' or course='".$selectedcourse."' or subject='".$selectedsubject."' or topic='".$selectedtopic."' or institute_code='".$selectedinstitute."' or amount='".$selectedamount."'");
                if($selectedcourse!=NULL)
                {
                    $fileList=$DB->result_for_query("select * from document where Doctype='ppt' and course='".$selectedcourse."'");
                
                    if($selectedsubject!=NULL)
                    {
                     $fileList=$DB->result_for_query("select * from document where Doctype='ppt' and course='".$selectedcourse."' and subject='".$selectedsubject."'");
                        if($selectedtopic!=NULL)
                        {
         $fileList=$DB->result_for_query("select * from document where Doctype='ppt' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."'");                  
                          if($selectedinstitute!=NULL)
                          {
                          $fileList=$DB->result_for_query("select * from document where Doctype='ppt' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute."");
                              
                            if($selectedamount!=NULL)
                            {
                                $fileList=$DB->result_for_query("select * from document where Doctype='ppt' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute." and amount=".$selectedamount."");
                            }   
                          }
                        }
                    }
                }
                    
            $_SESSION['filelist']=$fileList;
            break;
        
        case 5:$fileList=$DB->result_for_query("select * from document where Doctype='zip' or course='".$selectedcourse."' or subject='".$selectedsubject."' or topic='".$selectedtopic."' or institute_code='".$selectedinstitute."' or amount='".$selectedamount."'");
                if($selectedcourse!=NULL)
                {
                    $fileList=$DB->result_for_query("select * from document where Doctype='zip' and course='".$selectedcourse."'");
                
                    if($selectedsubject!=NULL)
                    {
                     $fileList=$DB->result_for_query("select * from document where Doctype='zip' and course='".$selectedcourse."' and subject='".$selectedsubject."'");
                        if($selectedtopic!=NULL)
                        {
         $fileList=$DB->result_for_query("select * from document where Doctype='zip' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."'"); 
         
                          if($selectedinstitute!=NULL)
                          {
                          $fileList=$DB->result_for_query("select * from document where Doctype='zip' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute."");
                              
                            if($selectedamount!=NULL)
                            {
                                $fileList=$DB->result_for_query("select * from document where Doctype='zip' and course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute." and amount=".$selectedamount."");
                            }   
                          }
                        }
                    }
                }
                    
            $_SESSION['filelist']=$fileList;
            break;
        
       case 6:$fileList=$DB->result_for_query("select * from document where course='".$selectedcourse."' or subject='".$selectedsubject."' or topic='".$selectedtopic."' or institute_code='".$selectedinstitute."' or amount='".$selectedamount."'");
                if($selectedcourse!=NULL)
                {
                    $fileList=$DB->result_for_query("select * from document where  course='".$selectedcourse."'");
                
                    if($selectedsubject!=NULL)
                    {
                     $fileList=$DB->result_for_query("select * from document where  course='".$selectedcourse."' and subject='".$selectedsubject."'");
                        if($selectedtopic!=NULL)
                        {
         $fileList=$DB->result_for_query("select * from document where course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."'"); 
         
                          if($selectedinstitute!=NULL)
                          {
                          $fileList=$DB->result_for_query("select * from document where course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute."");
                              
                            if($selectedamount!=NULL)
                            {
                                $fileList=$DB->result_for_query("select * from document where course='".$selectedcourse."' and subject='".$selectedsubject."' and topic='".$selectedtopic."' and institute_code=".$selectedinstitute." and amount=".$selectedamount."");
                            }   
                          }
                        }
                    }
                }
                    
            $_SESSION['filelist']=$fileList;
           break;
           
           default:$fileList=$DB->result_for_query("Select * from document");
                 $_SESSION['filelist']=$fileList;
               break;
    }
    * 
    */
    switch($selectedtype)
    {
    case 1: $sql = "SELECT * FROM document ";

   if( isset($_REQUEST['selectedcourse']) && $_REQUEST['selectedcourse'] != '' || isset($_REQUEST['other']) && $_REQUEST['other'] != '' ){
        if( strpos($sql, "WHERE") ){
             $sql .= "AND WHERE course LIKE '".$selectedcourse."%' and Doctype='paper' ";
        }else{
             $sql .= "WHERE course LIKE '".$selectedcourse."%' and Doctype='paper' ";
        };           
   }
   else
   {
                    $sql .= "WHERE Doctype='paper' ";
   }
       
   $sql1=$sql;
  
   if( isset($_REQUEST['selectedsubject']) && $_REQUEST['selectedsubject'] != '' ){
      
             $sql1 .= "AND subject LIKE '".$selectedsubject."%'";
      
   }
   
   $sql2=$sql1;
   if( isset($_REQUEST['selectedtopic']) && $_REQUEST['selectedtopic'] != '' ){
      
             $sql2 .= "AND topic LIKE '".$selectedtopic."%'";
      
   }
*/   
    $filelist=$DB->result_for_query($sql2);
    if(isset($_SESSION['filelist']))
    {
        unset($_SESSION['filelist']);
   $_SESSION['filelist']=$filelist;
    }
    else
    {
        $_SESSION['filelist']=$filelist;
    }
 //  print_r($filelist);
  
        break;
    }
    header("location:studenthome.php");
     
}
   
 
?>
