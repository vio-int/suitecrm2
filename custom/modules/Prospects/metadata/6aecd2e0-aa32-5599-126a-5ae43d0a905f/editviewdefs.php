<?php
$viewdefs ['Prospects'] = 
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
        'LBL_PROSPECT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_prospect_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_manager_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_MANAGER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'target_amount_c',
            'label' => 'LBL_TARGET_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'year_c',
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
