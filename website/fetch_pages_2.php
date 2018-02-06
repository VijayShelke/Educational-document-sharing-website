<?php

include("config.php");
include_once('functions.php');
 
$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) $page = 1;
 
$per_page = 10; // Set how many records do you want to display per page.
 
$startpoint = ($page * $per_page) - $per_page;
 
//$statement = "`pdf` ORDER BY `id` DESC"; // Change table name according to your database table.
 
$results = $DB->result_for_query("SELECT * FROM pdf LIMIT {$startpoint} , {$per_page}");
   
    // displaying records.
foreach($results as $r)
    echo $r[1];
 
// displaying paginaiton.
echo pagination($statement,$per_page,$page); 

?>