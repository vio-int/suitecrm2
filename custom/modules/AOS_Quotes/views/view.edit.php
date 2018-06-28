<?php
require_once ('include/MVC/View/views/view.edit.php');

class AOS_QuotesViewEdit extends ViewEdit{

    function display(){

        ?>
        <script>
        function set_class_return (popupReplyData) {
            set_return(popupReplyData);
             function_get_value();       
        }
        function function_get_value() {
            var inquiry_id=document.getElementById("aos_inquiry_id").value;
            var url1 = "index.php?module=AOS_Quotes&action=getInquiry&sugar_body_only=1";
			var dataString = {"inquiry_id" : inquiry_id};
			$.ajax({
				type: "POST",
				data: dataString,
				url: url1,	
				success: function (data) {
                    obj = JSON.parse(data);
                        //$('#main_search').val('hi');
						 if(obj.status == "success"){
                             var inquirydata= obj.inquerydata;
                             $('#inquiry_number_c').val(inquirydata.inquiry_num);
                             $('#billing_account').val(inquirydata.accountname);
                             $('#billing_account_id').val(inquirydata.accountid);
                             $('#billing_contact').val(inquirydata.contactname);
                             $('#billing_contact_id').val(inquirydata.contact_id);
                             $('#billing_address_street').val(inquirydata.billing_street);
                             $('#billing_address_postalcode').val(inquirydata.billing_pincode);
                             $('#billing_address_city').val(inquirydata.billing_city);
                             $('#billing_address_state').val(inquirydata.billing_state);
                             $('#billing_address_country').val(inquirydata.billing_country);
                             $('#shipping_address_street').val(inquirydata.shipping_street);
                             $('#shipping_address_postalcode').val(inquirydata.shipping_pincode);
                             $('#shipping_address_city').val(inquirydata.shipping_city);
                             $('#shipping_address_state').val(inquirydata.shipping_state);
                             $('#shipping_address_country').val(inquirydata.shipping_country);
                             

                         }
                }
            });
        }
        function function_btn_aos_inquiry_c() {
            var popupRequestData = {
                "call_back_function":"set_class_return",
                "form_name":"EditView",
                "field_to_name_array":{
                    "id":"aos_inquiry_id",
                    "name":"aos_inquiry_c",
         }
                };

            var resOr = "";
            open_popup('AOS_Inquiry', 600, 400, resOr, true, true, popupRequestData);
        }
        $(document).ready(function(){
            //alert("Bhargav");
            document.getElementById("btn_aos_inquiry_c").onclick = function() {function_btn_aos_inquiry_c()};

        });
        
        </script>

        <?php
        parent::display();
    }



}


?>