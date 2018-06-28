<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class VersionCheck {

    function version_check($event, $arguments)
    {
        global $current_user;
    
        require_once('include/utils.php');
        
        
                
        if(is_admin($current_user) && empty($_REQUEST['to_pdf']) && empty($_REQUEST['sugar_body_only'])) {
        
            //require_once('modules/SecurityGroups/SecurityGroup.php');
            
            //check to see if the securitysuite version
            //matches the sugar version. If not then display an error messag
            
		}
    } 


}
?>