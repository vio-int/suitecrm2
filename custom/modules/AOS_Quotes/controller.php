<?php
/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */
 
require_once('include/MVC/Controller/SugarController.php');

class AOS_QuotesController extends SugarController {

    function action_getInquiry(){
        
        $inquiry_id= $_REQUEST['inquiry_id'];
        $mainarray= array();
        if($inquiry_id!=""){
            $subarray=array();

            $inquiryBean= new AOS_Inquiry();
            $inquiryBean->retrieve($inquiry_id);
            $subarray['inquiry_num']= $inquiryBean->number;
            $subarray['accountname']=$inquiryBean->billing_account;
            $subarray['accountid']= $inquiryBean->billing_account_id;
            $subarray['contactname']= $inquiryBean->billing_contact;
            $subarray['contact_id']= $inquiryBean->billing_contact_id;
            $subarray['billing_street']= $inquiryBean->billing_address_street;
            $subarray['billing_city']= $inquiryBean->billing_address_city;
            $subarray['billing_pincode']= $inquiryBean->billing_address_postalcode;
            $subarray['billing_state']= $inquiryBean->billing_address_state;
            $subarray['billing_country']= $inquiryBean->billing_address_country;
            $subarray['shipping_street']= $inquiryBean->shipping_address_street;
            $subarray['shipping_city']= $inquiryBean->shipping_address_city;
            $subarray['shipping_pincode']= $inquiryBean->shipping_address_postalcode;
            $subarray['shipping_state']= $inquiryBean->shipping_address_state;
            $subarray['shipping_country']= $inquiryBean->shipping_address_country;
        }
        if(sizeof($subarray)>0){
			$mainarray['status']="success";
			$mainarray['inquerydata']=$subarray;
		}else{
			$mainarray['status']="fail";
		}
		echo json_encode($mainarray);
		exit;
    }


}