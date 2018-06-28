<?php

$hook_version = 1; 
$hook_array = Array(); 
////
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Approval Status Change', 'custom/modules/VLI_Approval/logic_hook/Approval_logichook.php','VLI_Approvalcls', 'VLI_approvalfun'); 

?>