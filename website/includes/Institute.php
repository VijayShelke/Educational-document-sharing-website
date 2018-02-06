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
class Institute {

    private $ainfo = array();

    function __construct($semail, $spass) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM institute WHERE iusername='" . $semail . "' AND ipass='" . $spass . "'");
        if (count($aid == 1)) {
            $this->ainfo = $aid;
        }
        else
            $this->ainfo = FALSE;
    }

    public static function CheckInstitute($iemail, $ipass) {
        global $DB;
        //$uid=-1;
        $uid = $DB->result_for_query("SELECT * FROM institute WHERE iusername='" . $iemail . "' AND ipass='" . $ipass . "'");
        if (count($uid) == 1)
            return TRUE;
        else
            return FALSE;
    }

    public static function checkUser1($emailid) {
        global $DB;
        //$uid=-1;
        $uid = $DB->result_for_query("SELECT * FROM institute WHERE iusername='" . $emailid . "'");
        if (count($uid) == 1)
            return TRUE;
        else
            return FALSE;
    }

    public static function checkUser($emailid, $passwd) {
        global $DB;
        //$uid=-1;
        $uid = $DB->result_for_query("SELECT * FROM institute WHERE iusername='" . $emailid . "' and ipass='" . $passwd . "'");
        if (count($uid) == 1)
            return TRUE;
        else
            return FALSE;
    }

    public static function add_profile($iusername, $password, $name, $email, $address, $city, $state, $country, $pincode, $randomcode, $contact) {
        global $DB;

        $success = $DB->query("INSERT into institute(iusername,ipass,iname,iemail,iaddress,icity,istate,icountry,ipincode,code,contact) values('" . $iusername . "','" . $password . "','" . $name . "','" . $email . "','" . $address . "','" . $city . "','" . $state . "','" . $country . "'," . $pincode . ",'" . $randomcode . "'," . $contact . ");");
       // $success=$DB->query("INSERT into institute(iusername,ipass,iname,iemail,iaddress,icity,istate,icountry,ipincode,code) VALUES('".$iusername."','".$password."','".$name."','".$email."','".$address."','".$city."','".$state."','".$country."',".$pincode.",'" . $randomcode . "');");
        echo $success;
    }

    public static function updateprofile($iuid, $iusername, $iname, $iemail, $iaddress, $icity, $istate, $icountry, $ipincode, $icontact) {

        global $DB;
        $query = $DB->query("update institute set iusername='" . $iusername . "',iname='" . $iname . "',iemail='" . $iemail . "',
            iaddress='" . $iaddress . "',icity='" . $icity . "',istate='" . $istate . "',icountry='" . $icountry . "',
                ipincode='" . $ipincode . "',contact='" . $icontact . "' where iuid=" . $iuid . " ");
        if (isset($query))
            return TRUE;
        else {

            return FALSE;
        }
    }
	public static function confirmpass($iuid,$ipass) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM institute WHERE iuid='" . $iuid . "'");
        foreach ($aid as $v) {
            echo $v[2];
            if ($v[2]==$ipass)
            return TRUE;
        else
            return FALSE;
        }
        
    }
     public static function confirmemail($iemail) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM institute WHERE iemail='" . $iemail . "'");
        echo count($aid);
       if(count($aid==1))
            return TRUE;
       if(count($aid==0))
            return FALSE;
        
        
    }
    public static function newmpass($iuid,$ipass) {
        global $DB;
        //$aid=-1;
        $query = $DB->query("update institute set ipass='".$ipass."' where iuid=".$iuid."");
        if (isset($query))
            return TRUE;
        else 

            return FALSE;
    }



    public static function checkCourse($course) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM courses WHERE cname='" . $course . "'");
        if (count($aid) == 1)
            return TRUE;
        else
            return FALSE;
    }

    public static function checkEnglishCourse($course) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM english WHERE ename='" . $course . "'");
        if (count($aid) == 1)
            return TRUE;
        else
            return FALSE;
    }

    public static function checkComputerCourse($course) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM computer WHERE compname='" . $course . "'");
        if (count($aid) == 1)
            return TRUE;
        else
            return FALSE;
    }

    public static function checkTechnicalCourse($course) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM technicalwriting WHERE t_name='" . $course . "'");
        if (count($aid) == 1)
            return TRUE;
        else
            return FALSE;
    }

    public static function checkRoboticsCourse($course) {
        global $DB;
        //$aid=-1;
        $aid = $DB->result_for_query("SELECT * FROM robotics WHERE r_name='" . $course . "'");
        if (count($aid) == 1)
            return TRUE;
        else
            return FALSE;
    }

    function get_info() {
        return $this->ainfo;
    }

    static function is_member() {
        if (isset($_SESSION['institute']))
            return TRUE;
        else
            return FALSE;
    }

    static function is_same_user($id) {
        if ($this->sinfo['i_id'] == $id)
            return TRUE;
        else
            return FALSE;
    }

    public static function logout() {
        unset($_SESSION['institute']);

        header("location:index.php");
    }

    public static function rand6($min, $max) {
        $num = array();

        for ($i = 0; $i < 4; $i++) {
            $num[] = mt_rand($max, $min);
        }
        return $num;
    }

    public static function randLetter() {
        return chr(65 + mt_rand(0, 25));
    }

}

?>
