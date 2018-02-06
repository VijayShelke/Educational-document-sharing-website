
<?php

include "config.php";

if ($_POST['submit']) 
{


   

    $selectedtype = NULL;
    $selectedinstitute = NULL;
    $selectedamount = NULL;
    $selectedcourse = NULL;
    $selectedsubject = NULL;



    if (isset($_POST['selectedtype']))
        $selectedtype = $_POST['selectedtype'];
    if ($_POST['other'] == NULL) 
    {
        $selectedcourse = $_POST['selectedcourse'];
    } 
    else 
    {
        $selectedcourse = $_POST['other'];
    }
    if (isset($_POST['selectedsubject']))
        $selectedsubject = $_POST['selectedsubject'];
    if (isset($_POST['selectedtopic']))
        $selectedtopic = $_POST['selectedtopic'];
    if (isset($_POST['selectedinstitute']))
        $selectedinstitute = $_POST['selectedinstitute'];
    if (isset($_POST['selectedamount']))
        $selectedamount = $_POST['selectedamount'];


    $query = "1 ";


    if (isset($selectedtype) and $selectedtype != NULL)
        $query = $query . "and Doctype LIKE '%" . $selectedtype . "%'";

    if (isset($selectedsubject) and $selectedsubject != NULL)
        $query = $query . "and subject LIKE '%" . $selectedsubject . "%'";

    if (isset($selectedcourse) and $selectedcourse != NULL)
        $query = $query . "and course LIKE '%" . $selectedcourse . "%'";

    if (isset($selectedtopic) and $selectedtopic != "")
        $query = $query . " and topic LIKE '%" . $selectedtopic . "%'";


    if (isset($selectedinstitute) and $selectedinstitute != "")
        $query = $query . " and institute_code LIKE '%" . $selectedinstitute . "%'";

    if (isset($selectedamount) and $selectedamount != "")
        $query = $query . " and amount = " . $selectedamount ;



    $filelist = $DB->result_for_query("select * from document where " . $query . " order by date desc");
    //echo "select * from document where " . $query . "  order by date desc";
    if (isset($_SESSION['filelist'])) {
        unset($_SESSION['filelist']);
        $_SESSION['filelist'] = $filelist;
    }
$_SESSION['filelist'] = $filelist;



    if (isset($_SESSION['newrecord'])) 
        unset($_SESSION['newrecord']);
        
  

    header("location:studenthome.php");
}

?>
