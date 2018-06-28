<?php
require_once ('include/MVC/View/views/view.detail.php');
Class AOS_QuotesViewDetail extends ViewDetail {

    function display(){
        global $db;
            $qid=$this->bean->id;
            $query="SELECT * FROM `vli_approval` WHERE `parent_id`='".$qid."' and `approval_status`='Approved' and deleted=0";
            $result= $db->query($query);
            $row= $db->fetchByAssoc($result);
            $Approvalid=$row['id'];
        ?>
        <script>
         $(document).ready(function(){
             var approvalid= '<?php echo $Approvalid; ?>';
             if(approvalid==''){
               
               $("#print_as_pdf").hide();
               $("#email_pdf").hide();
               $("#send_email").hide();
               $("#delete_button").hide();
               $("#duplicate_button").hide();
               $("#merge_duplicate_button").hide();
               $("#create_contract_button").hide();
               $("#convert_to_invoice_button").hide();
               $("#btn_view_change_log").hide();
             }
         });
        
        </script>


        <?php
        parent::display();
    }

}



?>