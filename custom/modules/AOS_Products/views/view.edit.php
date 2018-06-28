<?php
Class AOS_ProductsViewEdit extends ViewEdit {
    function display(){
        global $db, $current_user;
        $qry = "SELECT acl_roles.* FROM acl_roles INNER JOIN acl_roles_users ON acl_roles_users.user_id = '".$current_user->id."' AND acl_roles_users.role_id = acl_roles.id AND acl_roles_users.deleted = 0 WHERE acl_roles.deleted=0";
		$results = $db->query($qry);
		$row = $db->fetchByAssoc ($results);
		$roleid = $row['id'];
        ?>
        <script>
        var roleid='<?php echo $roleid; ?>';
        $(document).ready(function(){
            if(roleid=='92c469a2-5ae6-6dbe-820e-5ae1973d2c95'){
            $("#cost").hide();
            }
        });
        
        
        </script>

        <?php

        parent::display();
    }

}

?>