<html>
<head>
<title>Paging Using PHP</title>
</head>
<body>
<?php

include "config.php";
$rec_limit=2;
/* Get total number of records */

$retval = $DB->result_for_query("SELECT count(id) FROM pdf");
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}


$rec_count=$retval[0][0];

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
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT id, name ".
       "FROM pdf ".
       "LIMIT $offset, $rec_limit";

$retval=$DB->result_for_query($sql);

foreach($retval as $r)
    echo $r[0]."     ".$r[1];
if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"test.php?page=$last\">Last 2 Records</a> |";
   echo "<a href=\"test.php?page=$page\">Next 2 Records</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
}
/*
$row = mysql_fetch_array($retval,MYSQLI_NUM);
$rec_count = $row[0];

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
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT id, name ".
       "FROM pdf ".
       "LIMIT $offset, $rec_limit";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo " ID :{$row['id']}  <br> ".
         " NAME : {$row['name']} <br> -------------------------------<br>";
} 

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a> |";
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
}
mysql_close($conn);
*
 * ?>
 */

?>