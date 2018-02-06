<?php

class DB
{

	function __construct($host,$user,$pass,$DB)
	{
		if($host!=""&&$user!="")
		{
			mysql_connect($host,$user,$pass);
			mysql_select_db($DB);
		}
		else exit("could not connect to db");
	}

	public function query($query)
	{
		if($success=  mysqli_query($con, $query))
		return $success;
		else
		echo "Could not connect".mysql_error();
	}


	public function get_count_for_query($query)
	{
	$q=mysql_query($query);
	$cnt=mysql_num_rows($q);
	return $cnt;
	}

	function clean($str)
	{
	$newstring=trim($str);
	$newsstring=mysql_real_escape_string($newstring);
	return $newstring;
	}
}
?>
