<?php

namespace App\Traits;

Trait ReportsExportTraits{

    protected function filterSettingsReport( $reportName , $checkKey =false ){
        $reports = [
            'lead_report' => [
                'campaign_type'=> 'required',
                'queue'=> 'required',
                'date_start'=> 'required',
                'date_end'=> 'required'
            ],
            'jomo_lead_report' => [
                'campaign_type'=> 'required',
                'queue'=> 'required',
                'date_start'=> 'required',
                'date_end'=> 'required'
            ],
        ];
        if($checkKey){
            if(array_key_exists($reportName,$reports)){
                return $reports[$reportName];
            }else{
                return false;
            }
        }else{
            return $reports;
        }
    }

    protected function exportReportColumn($reportName){
        $reportColumns = [
            'jomo_lead_report' => [
                'ticket_status' => "Ticket Status",
                'lead_id' => "Lead ID",
                'time_id' => "Date & Time",
                'modify_time' => "Modify Time",
                'extension' => "Extension",
                'agent' => "Agent",
                'queue' => "Queue",
                'status' => "Status",
                'channel_type' => "Channel",
                'cli' => "CLI",
                'product_name' => "Article",
                'sku' => "SKU",
                'identification' => "Identification",
                'ticket_type' => "ticket_type",
                'reason_name' => "Reason",
                'sub_reason_name' => "Sub Reason",
                // 'tag' => "Tag",
                'call_type' => "Call Type",
                'duration' => "Duration",
                'full_name' => "Name",
                'order_id' => "Order Number",
                'ticket_number' => "Ticket Number",
                'details' => "Details",
                'cro_comments' => "CRO Comments",
                'shipping_address' => "Address",
                'created_by_name'=>'Created/Updated By'
            ],
        ];
        return $reportColumns[$reportName];
    }


}