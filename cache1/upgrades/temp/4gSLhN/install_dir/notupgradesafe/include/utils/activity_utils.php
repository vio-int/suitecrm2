<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


function build_related_list_by_user_id($bean, $user_id,$where) {
    $bean_id_name = strtolower($bean->object_name).'_id';

    $select = "SELECT {$bean->table_name}.* from {$bean->rel_users_table},{$bean->table_name} ";

    $auto_where = ' WHERE ';
    if(!empty($where)) {
        $auto_where .= $where. ' AND ';
    }

    /* BEGIN - SECURITY GROUPS */
    /**
    $auto_where .= " {$bean->rel_users_table}.{$bean_id_name}={$bean->table_name}.id AND {$bean->rel_users_table}.user_id='{$user_id}' AND {$bean->table_name}.deleted=0 AND {$bean->rel_users_table}.deleted=0";
    */
    $auto_where .= " {$bean->rel_users_table}.{$bean_id_name}={$bean->table_name}.id AND {$bean->table_name}.deleted=0 AND {$bean->rel_users_table}.deleted=0";

    $cal_view = $_REQUEST['view'];
    global $current_user, $sugar_config;
    // If they shouldn't see non-group records for another user...even if displayed as busy
    if(!empty($sugar_config['securitysuite_shared_calendar_hide_restricted']) && $sugar_config['securitysuite_shared_calendar_hide_restricted'] == true)
    {
        if((!empty($cal_view) && $cal_view == 'shared') && $bean->bean_implements('ACL') && ACLController::requireSecurityGroup($bean->module_dir, 'list') )
        {
            require_once('modules/SecurityGroups/SecurityGroup.php');
            $group_where = SecurityGroup::getGroupWhere($bean->table_name,$bean->module_dir,$current_user->id);
            $auto_where .= " AND ({$bean->rel_users_table}.user_id='{$user_id}' and ".$group_where.") ";
        } else {
            $auto_where .= " AND {$bean->rel_users_table}.user_id='{$user_id}' ";
        }
    } else {
        $auto_where .= " AND {$bean->rel_users_table}.user_id='{$user_id}' ";
    }
    /* END - SECURITY GROUPS */

    $query = $select.$auto_where;

        
    $result = $bean->db->query($query, true);

    $list = array();

    while($row = $bean->db->fetchByAssoc($result)) {
        $row = $bean->convertRow($row);
        $bean->fetched_row = $row;
        $bean->fromArray($row);
//        foreach($bean->column_fields as $field) {
//            if(isset($row[$field])) {
//                $bean->$field = $row[$field];
//            } else {
//                $bean->$field = '';
//            }
//        }

        $bean->processed_dates_times = array();
        $bean->check_date_relationships_load();
        $bean->fill_in_additional_detail_fields();
        
        /**
         * PHP  5+ always treats objects as passed by reference
         * Need to clone it if we're using 5.0+
         * clone() not supported by 4.x
         */
        if(version_compare(phpversion(), "5.0", ">=")) {
            $newBean = clone($bean);    
        } else {
            $newBean = $bean;
        }
        $list[] = $newBean;
    }

    return $list;
}
?>
