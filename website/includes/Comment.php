<?php

class Comment
{
               
             public static function CheckComment($comment)
                {
                 global $DB;
		$uid=-1;
                $uid=$DB->result_for_query("SELECT * FROM comment WHERE commentname='".$comment."'");
		if(count($uid)==1)
			return TRUE;
		else 
			return FALSE;
                }
               
                   
                
               public static function add_comment($comment,$fileid,$suid)
            {
		global $DB;
                echo $comment;
                echo $fileid;
                  $success=$DB->query("INSERT into comment(commentname,date,fileid,suid) values('".$comment."',NOW(),".$fileid.",".$suid.");");
	
     

             }



}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
