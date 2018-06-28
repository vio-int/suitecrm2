<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-05-10 01:56:53
$dictionary['AOS_Contracts']['fields']['name']['inline_edit']=true;
$dictionary['AOS_Contracts']['fields']['name']['merge_filter']='disabled';
$dictionary['AOS_Contracts']['fields']['name']['unified_search']=false;

 

 // created: 2018-05-10 02:57:17
$dictionary['AOS_Contracts']['fields']['contract_type']['inline_edit']=true;
$dictionary['AOS_Contracts']['fields']['contract_type']['merge_filter']='disabled';
$dictionary['AOS_Contracts']['fields']['contract_type']['default']='Material';
$dictionary['AOS_Contracts']['fields']['contract_type']['required']=true;


$dictionary["AOS_Contracts"]["fields"]["ponumber"] =array (
    'required' => true,
    'name' => 'ponumber',
    'vname' => 'LBL_PONUMBER',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'calculated' => false,
    'auto_increment'=>true,
    );
    
    $dictionary["AOS_Contracts"]["indices"]["ponumber"] = array(
    'name' => 'ponumber',
    'type' => 'unique',
    'fields' => array(
    'ponumber'
    ),
    );
 

 // created: 2018-05-10 01:57:36
$dictionary['AOS_Contracts']['fields']['total_contract_value']['inline_edit']=true;
$dictionary['AOS_Contracts']['fields']['total_contract_value']['merge_filter']='disabled';

 

 // created: 2018-05-10 01:59:45
$dictionary['AOS_Contracts']['fields']['total_contract_value_usdollar']['inline_edit']=true;
$dictionary['AOS_Contracts']['fields']['total_contract_value_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Contracts']['fields']['total_contract_value_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Contracts']['fields']['total_contract_value_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Contracts']['fields']['total_contract_value_usdollar']['enable_range_search']=false;

 

 // created: 2018-05-10 02:15:00
$dictionary['AOS_Contracts']['fields']['aos_inquiry_id_c']['inline_edit']=1;

 

 // created: 2018-05-10 02:15:00
$dictionary['AOS_Contracts']['fields']['inquiry_number_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['inquiry_number_c']['labelValue']='Inquiry Number';

 

 // created: 2018-05-10 02:54:30
$dictionary['AOS_Contracts']['fields']['payment_terms_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['payment_terms_c']['labelValue']='Payment Terms';

 

 // created: 2018-05-10 03:01:39
$dictionary['AOS_Contracts']['fields']['po_stage_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['po_stage_c']['labelValue']='PO Stage';

 

 // created: 2018-05-10 03:04:02
$dictionary['AOS_Contracts']['fields']['billing_address_city_c']['inline_edit']=1;

 

 // created: 2018-05-10 03:04:02
$dictionary['AOS_Contracts']['fields']['billing_address_state_c']['inline_edit']=1;

 

 // created: 2018-05-10 03:04:02
$dictionary['AOS_Contracts']['fields']['billing_address_postalcode_c']['inline_edit']=1;

 

 // created: 2018-05-10 03:04:02
$dictionary['AOS_Contracts']['fields']['billing_address_country_c']['inline_edit']=1;

 

 // created: 2018-05-10 03:04:02
$dictionary['AOS_Contracts']['fields']['billing_address_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['billing_address_c']['labelValue']='Billing Address';

 

 // created: 2018-05-10 04:07:23
$dictionary['AOS_Contracts']['fields']['shipping_street_city_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['shipping_street_city_c']['labelValue']='Shipping City';

 

 // created: 2018-05-10 04:08:33
$dictionary['AOS_Contracts']['fields']['shipping_street_state_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['shipping_street_state_c']['labelValue']='Shipping Area';

 

 // created: 2018-05-10 04:08:04
$dictionary['AOS_Contracts']['fields']['shipping_street_postalcode_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['shipping_street_postalcode_c']['labelValue']='Shipping PostalCode';

 

 // created: 2018-05-10 04:07:46
$dictionary['AOS_Contracts']['fields']['shipping_street_country_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['shipping_street_country_c']['labelValue']='Shipping Country';

 

 // created: 2018-05-10 03:04:24
$dictionary['AOS_Contracts']['fields']['shipping_street_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['shipping_street_c']['labelValue']='Shipping Street';

 

 // created: 2018-05-10 06:19:24
$dictionary['AOS_Contracts']['fields']['ponumber']['inline_edit']=true;
$dictionary['AOS_Contracts']['fields']['ponumber']['merge_filter']='disabled';
$dictionary['AOS_Contracts']['fields']['ponumber']['enable_range_search']=false;
$dictionary['AOS_Contracts']['fields']['ponumber']['autoinc_next']='4';
$dictionary['AOS_Contracts']['fields']['ponumber']['min']=false;
$dictionary['AOS_Contracts']['fields']['ponumber']['max']=false;
$dictionary['AOS_Contracts']['fields']['ponumber']['disable_num_format']='';

 
?>