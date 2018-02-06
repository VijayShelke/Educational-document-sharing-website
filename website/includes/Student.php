<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author yes
 */
class Student {
    private $ainfo=array();

		function __construct($semail,$spass)
		{
		global $DB;
		//$aid=-1;
		$aid=$DB->result_for_query("SELECT * FROM student WHERE susername='".$semail."' AND spass='".$spass."'");
		if(count($aid==1))
		{
			$this->ainfo=$aid;
		}
		else 
			$this->ainfo=FALSE;
                }
           
                
                public static function CheckStudent($semail,$spass)
                {
                 global $DB;
		//$uid=-1;
                $uid=$DB->result_for_query("SELECT * FROM student WHERE susername='".$semail."' AND spass='".$spass."'");
		if(count($uid)==1)
			return TRUE;
		else 
			return FALSE;
                }
                
                
                
                public static function checkUser1($semail)
                {
                 global $DB;
		//$uid=-1;
               $uid=$DB->result_for_query("SELECT * FROM student WHERE semail='".$semail."'");
			    
		if(count($uid)==1){
		
			return TRUE;
			}
		else 
			return FALSE;
                }
               
             
                   
           
                
                public static function checkUser($emailid,$passwd)
                {
                 global $DB;
		//$uid=-1;
		$uid=$DB->result_for_query("SELECT * FROM admin WHERE ausername='".$emailid."' and apassword='".$passwd."'");
		if(count($uid)==1)
			return TRUE;
		else 
			return FALSE;
                }
                   
                
               public static function add_profile($susername, $password, $city, $state, $country, $name)
            {
		global $DB;
                $email=$susername;
                
		$success=$DB->query("INSERT into student(susername,spass,semail,scity,sstate,scountry,sname) VALUES('".$susername."','".$password."','".$email."','".$city."','".$state."','".$country."','".$name."');");

                    echo $success;
             }


                
                public static function checkCourse($course)
                {
                 global $DB;
		//$aid=-1;
		$aid=$DB->result_for_query("SELECT * FROM courses WHERE cname='".$course."'");
		if(count($aid)==1)
			return TRUE;
		else 
			return FALSE;
                }
                
                
                public static function checkEnglishCourse($course)
                {
                 global $DB;
		//$aid=-1;
		$aid=$DB->result_for_query("SELECT * FROM english WHERE ename='".$course."'");
		if(count($aid)==1)
			return TRUE;
		else 
			return FALSE;
                }
                
                
                public static function checkComputerCourse($course)
                {
                 global $DB;
		//$aid=-1;
		$aid=$DB->result_for_query("SELECT * FROM computer WHERE compname='".$course."'");
		if(count($aid)==1)
			return TRUE;
		else 
			return FALSE;
                }
                public static function confirmemail($semail) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM student WHERE semail='" . $semail . "'");
       if(count($aid==1))
            return TRUE;
        else
            return FALSE;
        
        
    }
     public static function newmpass($semail,$spass) {
        global $DB;
        //$aid=-1;
        //echo $iemail.$ipass;
        $query = $DB->query("update student set spass='".$spass."' where semail='".$semail."'");
        if (isset($query))
            return TRUE;
        else 

            return FALSE;
    }
                
                
                public static function checkTechnicalCourse($course)
                {
                 global $DB;
		//$aid=-1;
		$aid=$DB->result_for_query("SELECT * FROM technicalwriting WHERE t_name='".$course."'");
		if(count($aid)==1)
			return TRUE;
		else 
			return FALSE;
                }
                
                
                public static function checkRoboticsCourse($course)
                {
                 global $DB;
		//$aid=-1;
		$aid=$DB->result_for_query("SELECT * FROM robotics WHERE r_name='".$course."'");
		if(count($aid)==1)
			return TRUE;
		else 
			return FALSE;
                }

        

	function get_info()
	{
		return $this->ainfo;
	}




	static function is_member()
	{
		if(isset($_SESSION['student']))
		return TRUE;
		else
		return FALSE;
	}



	static function is_same_user($id)
	{
		if($this->sinfo['s_id']==$id)
		return TRUE;
		else return FALSE;
	}


	
		
	public static function logout()
	{
		unset($_SESSION['student']);
                unset($_SESSION['filelist']);
		header("location:index.php");
	}
}

?>
