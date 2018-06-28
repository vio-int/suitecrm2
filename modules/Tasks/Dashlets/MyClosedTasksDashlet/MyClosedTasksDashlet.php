<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/




require_once('include/Dashlets/Dashlet.php');

class MyClosedTasksDashlet extends Dashlet 
{
	protected $user_name; 
	protected $total_task;
	protected $pending_task;
	protected $complete_task;
	
     
	/**
	 * @see Dashlet::Dashlet()
	 */
	public function __construct($id, $def = null) 
	{
        global $current_user, $app_strings;
		// echo "<pre>";
		// print_r($current_user);
		// exit;
        parent::__construct($id);
        $this->isConfigurable = true;
        $this->isRefreshable = true;        

        if(empty($def['title'])) { 
            $this->title = translate('LBL_MY_CLOSED_TASKS', 'Tasks'); 
        } 
        else {
            $this->title = $def['title'];
        }
        
        if(isset($def['autoRefresh'])) $this->autoRefresh = $def['autoRefresh'];
        
        $this->seedBean = new Task();      
   
		
		 
		
	 	
	 	$qry = "SELECT * from tasks WHERE assigned_user_id = '" . $current_user->id . "' AND deleted=0";
		$result = $this->seedBean->db->query($this->seedBean->create_list_count_query($qry));	
		$row = $this->seedBean->db->fetchByAssoc($result);

		$this->user_name = $current_user->user_name;//$row['c'];
		
		
        $qry = "SELECT * from tasks WHERE assigned_user_id = '" . $current_user->id . "' AND deleted=0";
		$result = $this->seedBean->db->query($this->seedBean->create_list_count_query($qry));	
		$row = $this->seedBean->db->fetchByAssoc($result);
	 	$this->total_task = $row['c'];
		
        $qry = "SELECT * from tasks WHERE assigned_user_id = '" . $current_user->id . "' AND status = 'Pending Input'  AND deleted=0";
		$result = $this->seedBean->db->query($this->seedBean->create_list_count_query($qry));	
		$row = $this->seedBean->db->fetchByAssoc($result);

		$this->pending_task = $row['c'];
		
		$qry = "SELECT * from tasks WHERE assigned_user_id = '" . $current_user->id . "' AND status = 'Completed'  AND deleted=0";
		$result = $this->seedBean->db->query($this->seedBean->create_list_count_query($qry));	
		$row = $this->seedBean->db->fetchByAssoc($result);

		$this->complete_task = $row['c'];
    }
    
    /**
	 * @see Dashlet::display()
	 */
	public function display()
    {	
    	$ss = new Sugar_Smarty();
    	$ss->assign('lblUserName', translate('LBL_USER_NAME', 'Tasks'));
    	$ss->assign('lblTotalTask', translate('LBL_TOTAL_TASKS', 'Tasks'));
    	$ss->assign('lblPendingTasks', translate('LBL_PENDING_TASKS', 'Tasks'));    	
    	$ss->assign('lblCompleteTasks', translate('LBL_COMPLETE_TASKS', 'Tasks'));
    	
    	$ss->assign('user_name', $this->user_name);
    	$ss->assign('total_task', $this->total_task);
    	$ss->assign('pending_task', $this->pending_task);
    	$ss->assign('complete_task', $this->complete_task);    	
    	
    	return parent::display() . $ss->fetch('modules/Tasks/Dashlets/MyClosedTasksDashlet/MyClosedTasksDashlet.tpl');
    }
    
    /**
	 * @see Dashlet::displayOptions()
	 */
	public function displayOptions() 
    {
        $ss = new Sugar_Smarty();
        $ss->assign('titleLBL', translate('LBL_DASHLET_OPT_TITLE', 'Home'));
        $ss->assign('title', $this->title);
        $ss->assign('id', $this->id);
        $ss->assign('saveLBL', $GLOBALS['app_strings']['LBL_SAVE_BUTTON_LABEL']);
        if($this->isAutoRefreshable()) {
       		$ss->assign('isRefreshable', true);
			$ss->assign('autoRefresh', $GLOBALS['app_strings']['LBL_DASHLET_CONFIGURE_AUTOREFRESH']);
			$ss->assign('autoRefreshOptions', $this->getAutoRefreshOptions());
			$ss->assign('autoRefreshSelect', $this->autoRefresh);
		}
        
		return $ss->fetch('modules/Tasks/Dashlets/MyClosedTasksDashlet/MyClosedTasksDashletConfigure.tpl');        
    }

    /**
	 * @see Dashlet::saveOptions()
	 */
	public function saveOptions($req) 
    {
        $options = array();
        
        if ( isset($req['title']) ) {
            $options['title'] = $req['title'];
        }
        $options['autoRefresh'] = empty($req['autoRefresh']) ? '0' : $req['autoRefresh'];
        
        return $options;
    }   
}
