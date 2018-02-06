<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Downloads
 *
 * @author LORD BUDDHA
 */
class Downloads {
    //put your code here
      public static function Checkfile($id)
                {
                 global $DB;
		$uid=-1;
                $uid=$DB->result_for_query("SELECT * FROM document WHERE id=".$id."");
		if(count($uid)==1)
			return TRUE;
		else 
			return FALSE;
                }
               
}

?>
