<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-04-25 08:49:39
$dictionary['Prospect']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2018-04-25 08:44:56
$dictionary['Prospect']['fields']['year_c']['inline_edit']='1';
$dictionary['Prospect']['fields']['year_c']['labelValue']='Year';

 

 // created: 2018-04-25 08:49:37
$dictionary['Prospect']['fields']['target_amount_c']['inline_edit']='1';
$dictionary['Prospect']['fields']['target_amount_c']['labelValue']='Target Amount';

 

 // created: 2018-04-25 08:43:14
$dictionary['Prospect']['fields']['account_manager_c']['inline_edit']='1';
$dictionary['Prospect']['fields']['account_manager_c']['labelValue']='Account Manager';

 


$dictionary['Prospect']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_prospects',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);





?>