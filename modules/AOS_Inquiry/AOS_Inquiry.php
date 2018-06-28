<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 */

require_once('modules/AOS_Quotes/AOS_Quotes_sugar.php');
class AOS_Inquiry extends AOS_Quotes_sugar
{
    public $new_schema = true;
    public $module_dir = 'AOS_Inquiry';
    public $object_name = 'AOS_Inquiry';
    public $table_name = 'aos_inquiry';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    
    function __construct(){
		parent::__construct();
    }
    
    function AOS_Inquiry(){
        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if(isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        }
        else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct();
    }

    

    function save($check_notify = false)
    {
        global $sugar_config;

        if (empty($this->id) || $this->new_with_id
            || (isset($_POST['duplicateSave']) && $_POST['duplicateSave'] == 'true')) {
            if (isset($_POST['group_id'])) {
                unset($_POST['group_id']);
            }
            if (isset($_POST['product_id'])) {
                unset($_POST['product_id']);
            }
            if (isset($_POST['service_id'])) {
                unset($_POST['service_id']);
            }

            if($sugar_config['dbconfig']['db_type'] == 'mssql'){
                $this->number = $this->db->getOne("SELECT MAX(CAST(number as INT))+1 FROM aos_quotes");
            } else {
                $this->number = $this->db->getOne("SELECT MAX(CAST(number as UNSIGNED))+1 FROM aos_quotes");
            }

            if($this->number < $sugar_config['aos']['quotes']['initialNumber']){
                $this->number = $sugar_config['aos']['quotes']['initialNumber'];
            }
        }

        require_once('modules/AOS_Products_Quotes/AOS_Utils.php');

        perform_aos_save($this);

		parent::save($check_notify);

		require_once('modules/AOS_Line_Item_Groups/AOS_Line_Item_Groups.php');
		$productQuoteGroup = new AOS_Line_Item_Groups();
		$productQuoteGroup->save_groups($_POST, $this, 'group_');
    }
    
    function mark_deleted($id)
	{
		$productQuote = new AOS_Products_Quotes();
		$productQuote->mark_lines_deleted($this);
		parent::mark_deleted($id);
	}
	
}