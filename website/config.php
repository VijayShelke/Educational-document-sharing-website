<?php



global $DB;
$items_per_page=2;
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","educa");
define("ROOT_DIR","");


include "includes/class_DB.php";
//include "includes/Constants.php";
include "includes/Admin.php";
include "includes/Student.php";
include "includes/Institute.php";
include "includes/Comment.php";
include "includes/Downloads.php";

//include "includes/User.php";
session_start();


$DB=new DB(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
?>
