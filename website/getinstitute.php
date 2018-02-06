<?php

include "config.php";
$text = NULL;
$namefound = FALSE;
$codefound = FALSE;




if ($_POST['submit']) 
{
    if ($_POST['txt'] != "") 
    {
        $text = $_POST['txt'];
        $institutelist = $DB->result_for_query("select iname,code from institute");

        foreach ($institutelist as $i) 
        {
            if ($i[1] == $text)
            {
                $codefound = TRUE;
                break;
            }
            else if ($i[0] == $text)
            {
                $namefound = TRUE;

                break;
            }
        }

        if ($codefound == TRUE) 
        {
            header("location:studentshownhome.php?id=" . $text);
        } 
        else if ($namefound == TRUE) 
        {
            header("location:studentshownhome.php?name=" . $text);
        } 
        else 
        {
            header("location:studenthome.php");
        }
    }
    else
        header("location:studenthome.php");
}
else
    header("location:studenthome.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
