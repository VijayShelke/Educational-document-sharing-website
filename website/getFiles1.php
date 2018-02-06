<?php

include "config.php";

if ($_GET['page']!="") 
{
    
    
    
    
    
   // $rec_limit=9;
    $filelist=  $_SESSION['filelist'];
    $newrecord=array(array(11));
           if( isset($_GET{'page'} ) )
            {
                  $page = $_GET{'page'} + 1;
                   
                   // echo $page;
            }
          
            
            $k=0;
            
            for($i=0;$i<11*$page;$i++)
            {
                if(($i>=(11*($page-1)))&& ($i<=(11*$page)))
                {
                for($j=0;$j<11;$j++)
                {
                    if(isset($filelist[$i][$j]))
                    $newrecord[$k][$j]=$filelist[$i][$j];
                //echo $i;
                    
                }
                $k++;
                }
                
            }
                //$left_rec = $count - ($page * $rec_limit);
  
    if (isset($_SESSION['newrecord'])) {
        unset($_SESSION['newrecord']);}
        $_SESSION['newrecord'] = $newrecord;
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    /*$selectedtype = NULL;
    $selectedinstitute = NULL;
    $selectedamount = NULL;
    $selectedcourse = NULL;
    $selectedsubject = NULL;

    if (isset($_GET['selectedtype']))
        $selectedtype = $_GET['selectedtype'];
    if ($_GET['other'] == NULL) 
    {
        $selectedcourse = $_GET['selectedcourse'];
    } 
    else 
    {
        $selectedcourse = $_GET['other'];
    }
    if (isset($_GET['selectedsubject']))
        $selectedsubject = $_GET['selectedsubject'];
    if (isset($_GET['selectedtopic']))
        $selectedtopic = $_GET['selectedtopic'];
    if (isset($_GET['selectedinstitute']))
        $selectedinstitute = $_GET['selectedinstitute'];
    if (isset($_GET['selectedamount']))
        $selectedamount = $_GET['selectedamount'];


    $query = "1 ";


    if (isset($selectedtype) and $selectedtype != NULL)
        $query = $query . "and Doctype='" . $selectedtype . "'";

    if (isset($selectedsubject) and $selectedsubject != NULL)
        $query = $query . "and subject='" . $selectedsubject . "'";

    if (isset($selectedcourse) and $selectedcourse != NULL)
        $query = $query . "and course='" . $selectedcourse . "'";

    if (isset($selectedtopic) and $selectedtopic != "")
        $query = $query . " and topic='" . $selectedtopic . "'";


    if (isset($selectedinstitute) and $selectedinstitute != "")
        $query = $query . " and institute_code='" . $selectedinstitute . "'";

    if (isset($selectedamount) and $selectedamount != "")
        $query = $query . " and amount=" . $selectedamount . "";

  $rec_limit=24;
           if( isset($_GET{'page'} ) )
            {
                  $page = $_GET{'page'} + 1;
                    $offset = $rec_limit * $page ;
            }
            else
            {
                $page = 0;
                $offset = 0;
            }
                $left_rec = $count - ($page * $rec_limit);

    $filelist = $DB->result_for_query("select * from document where " . $query . " order by date desc limit ".$offset.", ".$rec_limit." ");
  
    if (isset($_SESSION['filelist'])) {
        unset($_SESSION['filelist']);
        $_SESSION['filelist'] = $filelist;
     * 
     * 
     */
    
//$_SESSION['filelist'] = $filelist;
}
    header("location:studenthome.php?page=".$page."");

?>
