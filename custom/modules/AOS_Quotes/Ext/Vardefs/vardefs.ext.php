<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-04-25 08:27:30
$dictionary["AOS_Quotes"]["fields"]["aos_quotes_accounts_1"] = array (
  'name' => 'aos_quotes_accounts_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_AOS_QUOTES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);


 // created: 2018-05-11 01:20:36
$dictionary['AOS_Quotes']['fields']['approval_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['approval_c']['labelValue']='Approval';

$dictionary['AOS_Quotes']['fields']['aos_inquiry_c'] = array (
    'name' => 'aos_inquiry_c',
    'id_name' => 'aos_inquiry_id',
    'type' => 'relate',
    'rname' => 'aos_inquiry',
    'vname' => 'LBL_AOS_INQUIRY',
    'link' => 'aos_inquiry',
    'module' => 'AOS_Inquiry',
    'source' => 'non-db',
    'dbType' => 'non-db',
    'studio' => 'visible',
);

 

 // created: 2018-05-25 01:08:56
$dictionary['AOS_Quotes']['fields']['aos_inquiry_c']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['aos_inquiry_c']['merge_filter']='disabled';

 

 // created: 2018-05-25 01:32:18
$dictionary['AOS_Quotes']['fields']['inquiry_number_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['inquiry_number_c']['labelValue']='Inquiry Number';

 
?>