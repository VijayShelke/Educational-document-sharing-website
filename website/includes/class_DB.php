<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class_DB
 *
 * @author yes
 */
class DB
{
    public $con;
    function __construct($DB_HOST,$USER,$PASS,$DATABASE)
     {
        
        
             $this->con=  mysqli_connect($DB_HOST, $USER, $PASS);
        
         mysqli_select_db($this->con, $DATABASE);
             
        
         if(isset($this->con))
         {
             //echo "Connection successfull";
         }
         else
         {
             echo "connection Error";
         }
     }
     
     
     
     
	public function result_for_query($query)
	{
            
             if($this->con!=NULL)
             {
            
		$q=  mysqli_query($this->con, $query);
                
		$i=0;
                
		$arr=array();
		while($r= mysqli_fetch_row($q))
			{
			$arr[$i]=$r;
			$i++;
                        
			}
			return $arr;
             }
             else
             {
                 echo "connection failure";
               }
	}
        
        
        
	public function get_connection()
	{
	
	return $this->con;
	}
        
        
	public function get_count_for_query($query)
	{
	$q=mysqli_query($this->con, $query);
	$cnt=mysqli_num_rows($q);
	return $cnt;
	}
        
	public function query($query)
	{
            $success=  mysqli_query($this->con, $query);
		if($success)
                    return $success;
		else
                    echo "Could not connect".mysql_error();
	}

    
     
}

?>
