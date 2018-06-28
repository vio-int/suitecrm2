<?php
if (!defined('sugarEntry') || !sugarEntry)die('Not A Valid Entry Point');

class VLI_Approvalcls{

    function VLI_approvalfun(&$bean, $event, $arguments){

      if($bean->parent_type= "AOS_Quotes" && $bean->id==""){
          $quotesBean= new AOS_Quotes();
          $quotesBean->retrieve($bean->parent_id);
          $quotesBean->approval_status= $bean->approval_status;
          $quotesBean->approval_issue= $bean->approval_issue_c;
          $quotesBean->save();
      }


    }


}


?>