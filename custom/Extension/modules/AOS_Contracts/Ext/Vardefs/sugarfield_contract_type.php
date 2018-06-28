<?php
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
 ?>