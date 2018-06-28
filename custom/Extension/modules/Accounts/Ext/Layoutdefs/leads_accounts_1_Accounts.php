<?php
 // created: 2018-04-25 08:24:50
$layout_defs["Accounts"]["subpanel_setup"]['leads_accounts_1'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_ACCOUNTS_1_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'leads_accounts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
