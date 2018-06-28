<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
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
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'last_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'comment' => 'The title of the contact',
            'label' => 'LBL_TITLE',
          ),
          1 => 'department',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'displayParams' => 
            array (
              'key' => 'billing',
              'copy' => 'primary',
              'billingKey' => 'primary',
              'additionalFields' => 
              array (
                'phone_office' => 'phone_work',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'Contact fax number',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
            'comment' => 'How did the contact come about',
            'label' => 'LBL_LEAD_SOURCE',
          ),
          1 => 
          array (
            'name' => 'language_preference_c',
            'studio' => 'visible',
            'label' => 'LBL_LANGUAGE_PREFERENCE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'portal_active_c',
            'label' => 'LBL_PORTAL_ACTIVE',
          ),
          1 => 
          array (
            'name' => 'portal_application_c',
            'label' => 'LBL_PORTAL_APPLICATION',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'password_c',
            'label' => 'LBL_PASSWORD',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'company_website_c',
            'label' => 'LBL_COMPANY_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'education_c',
            'label' => 'LBL_EDUCATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'education_additional_c',
            'label' => 'LBL_EDUCATION_ADDITIONAL',
          ),
          1 => 
          array (
            'name' => 'previous_jobs_c',
            'label' => 'LBL_PREVIOUS_JOBS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'company_size_c',
            'label' => 'LBL_COMPANY_SIZE',
          ),
          1 => 
          array (
            'name' => 'industry_c',
            'studio' => 'visible',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'company_location_c',
            'label' => 'LBL_COMPANY_LOCATION',
          ),
          1 => 
          array (
            'name' => 'company_description_c',
            'label' => 'LBL_COMPANY_DESCRIPTION',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'year_founded_c',
            'label' => 'LBL_YEAR_FOUNDED',
          ),
          1 => 
          array (
            'name' => 'industry_tags_c',
            'label' => 'LBL_INDUSTRY_TAGS',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'npwp_code_c',
            'label' => 'LBL_NPWP_CODE',
          ),
          1 => 
          array (
            'name' => 'sic_code_c',
            'label' => 'LBL_SIC_CODE',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'fy_end_c',
            'label' => 'LBL_FY_END',
          ),
          1 => 
          array (
            'name' => 'annual_rev_c',
            'label' => 'LBL_ANNUAL_REV',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'facebook_link_c',
            'label' => 'LBL_FACEBOOK_LINK',
          ),
          1 => 
          array (
            'name' => 'twitter_link_c',
            'label' => 'LBL_TWITTER_LINK',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'company_facebook_c',
            'label' => 'LBL_COMPANY_FACEBOOK',
          ),
          1 => 
          array (
            'name' => 'company_twitter_c',
            'label' => 'LBL_COMPANY_TWITTER',
          ),
        ),
      ),
    ),
  ),
);
;
?>
