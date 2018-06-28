<?php
if (!defined('sugarEntry') || !sugarEntry)die('Not A Valid Entry Point');

class AOS_Quotescls{

    function AOS_Quotesfun(&$bean, $event, $arguments){
        global $db;
        $quotesBean= new AOS_Quotes();
        $quotesBean->retrieve($bean->id);
        $qid=$quotesBean->id;
        if(empty($qid)){
            
            $approvalBean= new VLI_Approval();
            $approvalBean->parent_type="AOS_Quotes";
            $approvalBean->parent_id=$bean->id;
            $approvalBean->name=$bean->name;
            $approvalBean->cost_price_c= $bean->total_amount;
            $qaid=$approvalBean->save();
            $db->query("UPDATE `vli_approval` SET `parent_type` = 'AOS_Quotes' WHERE `vli_approval`.`id` = '".$qaid."'");
        }
    }


}




?>