<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/





require_once('include/Dashlets/DashletGenericChart.php');

class MonthyTargetAmountChartDashlet extends DashletGenericChart 
{
    public $target_id;
    /**
     * @see DashletGenericChart::$_seedName
     */
    protected $_seedName = 'VLI_Target';

    /**
     * @see DashletGenericChart::displayOptions()
     */
    public function displayOptions()
    {
        $this->getSeedBean()->disable_row_level_security = false;
 		$target = $this->getSeedBean()->get_full_list("","");
        if ( $target != null )
            foreach ($target as $c)
                $this->_searchFields['target_id']['options'][$c->month_c] = $c->month_c;
                //$this->_searchFields['target_year']['options'][$c->year] = $c->year;
        else
            $this->_searchFields['target_id']['options'] = array();
            //$this->_searchFields['target_year']['options'] = array();
        return parent::displayOptions();
    }

    /**
     * @see DashletGenericChart::display()
     */
    public function display()
    {
     
            $rawData = $this->constructQuery(
            $GLOBALS['app_list_strings']['roi_type_dom'],
            $GLOBALS['app_list_strings']['roi_type_dom'],
            $this->target_id[0],null,true,true,true,$this->month_c);
           // $this->target_year[0],null,true,true,true,$this->year);

        $currency_symbol = $GLOBALS['sugar_config']['default_currency_symbol'];
        if ($GLOBALS['current_user']->getPreference('currency')){

            $currency = new Currency();
            $currency->retrieve($GLOBALS['current_user']->getPreference('currency'));
            $currency_symbol = $currency->symbol;
     }
        $thousands_symbol = translate('LBL_OPP_THOUSANDS', 'Charts');
        $canvasId = 'rGraphCampaignROI'.uniqid();
        $chartWidth     = 500;
        $chartHeight    = 400;
        $autoRefresh = $this->processAutoRefresh();

        $chartReadyData = $this->prepareChartData($rawData,$currency_symbol,$thousands_symbol);

        //$chartReadyData['data'] = [[1.1,2.2],[3.3,4.4]];
        $jsonData = json_encode($chartReadyData['data']);
        $jsonLabels = json_encode($chartReadyData['labels']);
        $jsonLabelsAndValues = json_encode($chartReadyData['labelsAndValues']);


        $jsonKey = json_encode($chartReadyData['key']);
        $jsonTooltips = json_encode($chartReadyData['tooltips']);

        //$colours = "['red','blue','green','orange','yellow','pink']";
        $colours = "['#a6cee3','#1f78b4','#b2df8a','#33a02c','#fb9a99','#e31a1c','#fdbf6f','#ff7f00','#cab2d6','#6a3d9a','#ffff99','#b15928']";
		 
        if(!is_array($chartReadyData['data'])||count($chartReadyData['data']) < 1)
        {
            return "<h3 class='noGraphDataPoints'>$this->noDataMessage</h3>";
        }

        //<canvas id='$canvasId'  width=canvas.width height=canvas.width class='resizableCanvas'>[No canvas support]</canvas>

        $chart = <<<EOD
        <canvas id='$canvasId' class='resizableCanvas' width='$chartWidth' height='$chartHeight'>[No canvas support]</canvas>
             $autoRefresh
         <script>
           var bar = new RGraph.Bar({
            id: '$canvasId',
            data:$jsonData,
            options: {
                //grouping: 'stacked',
                colorsSequential:true,
                labels: $jsonLabels,
                xlabels:true,
                labelsAbove: true,
                labelsAbovedecimals: 2,
                linewidth: 2,
                //eventsClick:outcomeByMonthClick,
                textSize:10,
                //labelsAboveSize:10,
                strokestyle: 'white',
                //colors: ['Gradient(#4572A7:#66f)','Gradient(#AA4643:white)','Gradient(#89A54E:white)'],
                //shadowOffsetx: 1,
                //shadowOffsety: 1,
                //shadowBlur: 10,
                //hmargin: 25,
                colors:$colours,
                gutterLeft: 80,
                //gutterTop:50,
                //gutterRight:160,
                //gutterBottom: 155,
                //textAngle: 45,
                backgroundGridVlines: false,
                backgroundGridBorder: false,
                tooltips:$jsonLabels,
                tooltipsEvent:'mousemove',
                //key: $jsonKey,
                //keyColors: $colours,
                //keyPosition: 'gutter',
                //keyPositionX: $canvasId.width - 150,
                //keyPositionY: 18,
                //keyPositionGutterBoxed: true,
                axisColor: '#ccc',
                unitsPre:'$currency_symbol',
                labelsAboveUnitsPre:'$currency_symbol',
                //unitsPost:'$thousands_symbol',
                tooltipsCssClass: 'rgraph_chart_tooltips_css',
                noyaxis: true
            }
        }).draw();
        /*
        .on('draw', function (obj)
        {
            for (var i=0; i<obj.coords.length; ++i) {
                obj.context.fillStyle = 'red';
                if(obj.data_arr[i] > 0)
                {
                RGraph.Text2(obj.context, {
                    font:'Verdana',
                    'size':text_size,
                    'x':obj.coords[i][0] + (obj.coords[i][2] / 2),
                    'y':obj.coords[i][1] + (obj.coords[i][3] / 2),
                    'text':obj.data_arr[i].toString(),
                    'valign':'center',
                    'halign':'center'
                });
                }
            }
        }).draw();

        bar.canvas.onmouseout = function (e)
        {
            // Hide the tooltip
            RGraph.hideTooltip();

            // Redraw the canvas so that any highlighting is gone
            RGraph.redraw();
        }
        */
/*
         var sizeIncrement = new RGraph.Drawing.Text({
            id: '$canvasId',
            x: 10,
            y: 20,
            text: 'Amount in ${currency_symbol}',
            options: {
                font: 'Arial',
                bold: true,
                //halign: 'left',
                //valign: 'bottom',
                colors: ['black'],
                size: text_size
            }
        }).draw();
*/
</script>
EOD;

        return $chart;
		


        //   return $this->getTitle('<div align="center"></div>') . '<div align="center">' . $returnStr . '</div>'. $this->processAutoRefresh();
    }

    protected function constructQuery($datay= array(),$targets=array(),$target_id = null, $cache_file_name='a_file', $refresh=false,$marketing_id='',$is_dashlet=false,$dashlet_id='') {
        //global $app_strings,$mod_strings, $current_module_strings, $charset, $lang, $app_list_strings, $current_language,$sugar_config;
        global $mod_strings, $db;
          if(!$target_id) {
            $GLOBALS['log']->debug('roi chart need a campaign id');
            return false;
        }
		
        $not_empty = false;

        $chartData = array();

        // $focus = new VLI_Target();
        // $focus->retrieve($target_id);
		
         
        //report query
         
         
        
		
         $camp_query1  = "select trc.month_c, SUM(tar.target_amount) as target_amount , assigned_user_id from vli_target tar left join vli_target_cstm as trc on tar.id=trc.id_c where trc.month_c='".$target_id."' AND deleted=0 GROUP BY assigned_user_id";
         $camp_result1=$db->query($camp_query1);
	
		
				
		$i=0;
        while($camp_data1=$db->fetchByAssoc($camp_result1)){
        	$camp_query2  = "select user_name FROM users where id='".$camp_data1['assigned_user_id']."'";
		    $camp_result2=$db->query($camp_query2);
			$camp_data2=$db->fetchByAssoc($camp_result2);
			$user=$camp_data2['user_name'];
        	$year=$camp_data1['month_c'];
        	$chartData[$user]= $camp_data1['target_amount'];
			$i++;
        }
		 
	 

       
        if (empty($camp_data1['target_amount']))
                    $camp_data1['target_amount'] = 0;
                        else
                    $not_empty = true;
        
        
        
         
        /*
            $opp_data1[$mod_strings['LBL_ROI_CHART_INVESTMENT']]=$camp_data1['investment'];
            $opp_data1[$mod_strings['LBL_ROI_CHART_BUDGET']]=$camp_data1['budget'];
            $opp_data1[$mod_strings['LBL_ROI_CHART_EXPECTED_REVENUE']]=$camp_data1['expected_revenue'];


            $query = "SELECT activity_type,target_type, count(*) hits ";
            $query.= " FROM campaign_log ";
            $query.= " WHERE campaign_id = '$campaign_id' AND archived=0 AND deleted=0";
            //if $marketing id is specified, then lets filter the chart by the value
            if (!empty($marketing_id)){
                $query.= " AND marketing_id ='$marketing_id'";
            }
            $query.= " GROUP BY  activity_type, target_type";
            $query.= " ORDER BY  activity_type, target_type";
            $result = $focus->db->query($query);
*/
        return $chartData;
    }

    protected function prepareChartData($data,$currency_symbol, $thousands_symbol)
    {
        //Use the  lead_source to categorise the data for the charts
         $chart['labels'] = array();
         $chart['data'] = array();
		 
        //Need to add all elements into the key, as they are stacked (even though the category is not present, the value could be)
        $chart['key'] = array();
        $chart['tooltips']= array();

        foreach($data as $key=>$value)
        {
            $formattedFloat = (float)number_format((float)$value, 2, '.', '');
            $chart['labels'][] = $key;
			 
            $chart['data'][] = $formattedFloat;
            /*
            $key = $i["m"];
            $stage = $i["sales_stage"];
            if(!in_array($key,$chart['labels']))
            {
                $chart['labels'][] = $key;
                $chart['data'][] = array();
            }
            if(!in_array($stage,$chart['key']))
                $chart['key'][] = $stage;

            $formattedFloat = (float)number_format((float)$i["total"], 2, '.', '');
            $chart['data'][count($chart['data'])-1][] = $formattedFloat;
            $chart['tooltips'][]="<div><input type='hidden' class='stage' value='$stage'><input type='hidden' class='date' value='$key'></div>".$stage.'('.$currency_symbol.$formattedFloat.$thousands_symbol.') '.$key;
            */
        }
        return $chart;
    }
}