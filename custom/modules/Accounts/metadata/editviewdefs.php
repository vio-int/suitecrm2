<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'account_type',
          1 => 'industry',
        ),
        1 => 
        array (
          0 => 'annual_revenue',
          1 => 'employees',
        ),
        2 => 
        array (
          0 => 'parent_name',
          1 => 
          array (
            'name' => 'year_founded_c',
            'label' => 'LBL_YEAR_FOUNDED',
          ),
        ),
        3 => 
        array (
          0 => 'campaign_name',
          1 => 
          array (
            'name' => 'npwp_code_c',
            'label' => 'LBL_NPWP_CODE',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'company_location_c',
            'label' => 'LBL_COMPANY_LOCATION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'company_size_c',
            'label' => 'LBL_COMPANY_SIZE',
          ),
          1 => 
          array (
            'name' => 'industry_tags_c',
            'label' => 'LBL_INDUSTRY_TAGS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fy_end_c',
            'label' => 'LBL_FY_END',
          ),
          1 => 
          array (
            'name' => 'company_feedback_c',
            'label' => 'LBL_COMPANY_FEEDBACK',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'last_contact_c',
            'label' => 'LBL_LAST_CONTACT',
          ),
          1 => 
          array (
            'name' => 'contacted_by_c',
            'label' => 'LBL_CONTACTED_BY',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'last_in_c',
            'label' => 'LBL_LAST_IN',
          ),
          1 => 
          array (
            'name' => 'last_out_c',
            'label' => 'LBL_LAST_OUT',
          ),
        ),
      ),
    ),
  ),
);
;
?>
