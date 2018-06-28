<?php
$module_name = 'VLI_Approval';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'studio' => 'visible',
            'label' => 'LBL_FLEX_RELATE',
          ),
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'approval_status',
            'studio' => 'visible',
            'label' => 'LBL_APPROVAL_STATUS',
          ),
          1 => 
          array (
            'name' => 'approval_issue_c',
            'label' => 'LBL_APPROVAL_ISSUE',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'cost_price_c',
            'label' => 'LBL_COST_PRICE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
