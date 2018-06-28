<?php
$module_name = 'VLI_Target';
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
          0 => 
          array (
            'name' => 'account_manager',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_MANAGER',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'target_amount',
            'label' => 'LBL_TARGET_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'year',
            'studio' => 'visible',
            'label' => 'LBL_YEAR',
          ),
        ),
      ),
    ),
  ),
);
;
?>
