<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-04-25 09:19:00
$dictionary['Lead']['fields']['account_name']['inline_edit']=true;
$dictionary['Lead']['fields']['account_name']['comments']='Account name for lead';
$dictionary['Lead']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_name']['full_text_search']=NULL;

 

 // created: 2018-04-25 09:19:58
$dictionary['Lead']['fields']['account_id_c']['inline_edit']=1;

 

 // created: 2018-04-25 09:19:58
$dictionary['Lead']['fields']['account_names_c']['inline_edit']='1';
$dictionary['Lead']['fields']['account_names_c']['labelValue']='Account Name';

 

// created: 2018-04-25 08:24:50
$dictionary["Lead"]["fields"]["leads_accounts_1"] = array (
  'name' => 'leads_accounts_1',
  'type' => 'link',
  'relationship' => 'leads_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_LEADS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);



$dictionary['Lead']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_leads',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);





?>