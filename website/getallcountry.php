<?php

include "config.php";


$q = $_REQUEST["q"];

$hint = "";
if(isset($q))
{
$countrynames = $DB->result_for_query("select * from country ");
}
 
// get the q parameter from URL
// lookup all hints from array if $q is different from "" 
if ($q !== "") 
    {
    $q = strtolower($q);
    foreach ($countrynames as $name) 
        {
        
        echo " ".$name[0]." ".$name[1]."</br>";
                           
        }
    }
?>
