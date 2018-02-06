<?php

	class Admin
	{
		private $ainfo=array();

		function __construct($amail,$apass)
		{
		global $DB;
		//$aid=-1;
		$aid=$DB->result_for_query("SELECT * FROM admin WHERE username='".$amail."' AND password='".$apass."'");
		if(count($aid==1))
		{
			$this->ainfo=$aid;
		}
		else 
			$this->ainfo=FALSE;
                }
           
                
                
                public static function checkUser1($fname)
                {
                 global $DB;
		//$uid=-1;
               $uid=$DB->result_for_query("SELECT * FROM user WHERE FullName='".$fname."'");
		if(count($uid)==1)
			return TRUE;
		else 
			return FALSE;
                }
               
             
                   
           
                
                public static function checkAdmin($emailid,$passwd)
                {
                 global $DB;
		//$uid=-1;
		$uid=$DB->result_for_query("SELECT * FROM admin WHERE ausername='".$emailid."' and apassword='".$passwd."'");
		if(count($uid)==1)
			return TRUE;
		else 
			return FALSE;
                }
                   
                
               public static function add_profile($fname,$address,$mobile,$residentno,$emailid,$school,$Qualification,$statusofjoining,$newjdate,$courses)
               {
		global $DB;
                
                
		$success=$DB->query("INSERT into user(Fullname,Address,Mobile,Resident_no,Email,School,Qualification,courses_interested,status_of_joining,date_of_enquiry) VALUES('".$fname."','".$address."','".$mobile."','".$residentno."','".$emailid."','".$school."','".$Qualification."','".$courses."','".$statusofjoining."','".$newjdate."');");

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
                
                
                 public static function add_country($country)
               {
		global $DB;
                
                
		$success=$DB->query("INSERT into country (cname) VALUES ('".$country."');");
                    echo $success;
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
		unset($_SESSION['admin']);
            
		header("location:index.php");
	}
    }
   ?>
