<?php

include "config.php";


$q = $_REQUEST["q"];
$flag=0;


$hint = "";
if(isset($q))
{
$usernames = $DB->result_for_query("select * from institute ");

    $usernamesStud = $DB->result_for_query("select * from student ");
    
}
// get the q parameter from URL
// lookup all hints from array if $q is different from "" 
if ($q !== "") 
    {
        $q = strtolower($q);
        foreach ($usernames as $name) 
        {
        if ($name[1] === $q) 
            {
                if ($hint === "") 
                {
                     echo "already exists";
                     $flag=1;
                     
                }
            }
        }
   
          if($flag==0)
          {
             foreach ($usernamesStud as $name) 
            {
                 if ($name[1] === $q) 
                 {
                    if ($hint === "") 
                    {
                       echo "already exists";
                        
                    }
                }
            }
            
          }
       
     }
    
  
?>
