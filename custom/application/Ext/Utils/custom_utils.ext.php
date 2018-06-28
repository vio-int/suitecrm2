<?php 
 //WARNING: The contents of this file are auto-generated



function getUserSecurityGroups(){

    static $userSecurityGroups = null;
    if(!$userSecurityGroups){

        $userSecurityGroups = array();
        $userSecurityGroups[''] = '';

        global $current_user;

        $groups = BeanFactory::getBean('SecurityGroups');
        
        if(is_admin($current_user)) {
            $user_groups = $groups->getAllSecurityGroups();
            foreach($user_groups as $id => $data) {
                $userSecurityGroups[$id] = $data['name'];
            }
        } else {
            $user_groups = $groups->getUserSecurityGroups($current_user->id);
            foreach($user_groups as $id => $data) {
                $userSecurityGroups[$id] = $data['name'];
            }
        }

    }
    
    return $userSecurityGroups;
}

?>