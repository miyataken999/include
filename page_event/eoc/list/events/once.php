<style type="text/css">
.Eoc_details_table.speed_date_and_time_table {
    margin: 5px 0;
}
.Eoc_details_table.speed_date_and_time_table th{
	background: #111;
	color: #fff;
}
.Eoc_details_table.line_chat_content.line_chat_content {
    margin: 5px 0;
    width: 75%;
}
#timeline_data_block.on{
	height: 400px;
	overflow-y: scroll;
	display: block;
}
table[data-brick="grid"] .rnr-toprow th:nth-child(3) {
    /*display: none;*/
}
.bs-griddetails {
    /*display: none;*/
}
.btns_col textarea{
	min-width: 200px;
	min-height: 150px;
}
.custom-select {
    display: block;
    width: 100%!important;
    padding: 5px!important;
    line-height: 1.5!important;
    color: #495057;
    vertical-align: middle;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem!important;
    font-size: 14px!important;
    margin: 5px auto;
}

.btns_col .btn.btn-outline-primary {
    color: #007bff;
    border-color: #007bff;
    background: #fff;
    font-size: 12px;
    padding: 5px;
    margin: 5px auto;
    display: block;
    text-align: left;
}
.btns_col .btn.btn-outline-primary:hover {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}


	.top_details_table{
		border: 5px solid #111!important;
		margin-bottom: 10px;
	}
	.Eoc_details_table.top_details_table th {
	    background-color: #e94545;
	}
	.Eoc_details_table th{
	    text-align: center;
	    font-weight: normal;
	    background-color: #45ade9;
	    color: #fff;
	    line-height: 18px;
	    border-right: 1px solid #888;
	}
	.Eoc_details_table td{
		background-color: #fff;
	    border-right: 1px solid #888;
	}
	.Eoc_details_table td span {
	    display: block;
	    width: max-content;
	    /*max-width: 100px;*/
	    margin: auto;
	}
	.event_all_table {
	    width: 800px;
	    border: 1px solid #ccc!important;
	    background: #efefef;
	}
	.Eoc_details_table th.ecc_id_box {
	    color: #111;
	    background: #0f0;
	    border-bottom: 1px solid #111;
	}
	.Eoc_details_table td.ecc_id_box {
	    background-color: #0f0;
	}

	.event_all_table .table_box_td{
		vertical-align: top;
	}


	.mail_event_table .subject_cell, .event_table .subject_cell
	, .mail_event_table .bs-gridcell , .mail_event_table .rnr-gridfieldlabel , .event_table .bs-gridcell , .event_table .rnr-gridfieldlabel{
	    line-height: 1.2!important;
	    vertical-align: baseline;
	}
	.event_table .timeline_ttl{
		background-color: #0ff!important;
	}

	.bs-sidebar-main .table-bordered.timeline-table {
	    width: 100%!important;
	}
	.timeline-table td{
		background-color: #fff!important;
	}
	.timeline-table.table.event_table.table-bordered .bs-gridrow th[colspan="4"] , 
	.timeline-table.table.mail_event_table.table-bordered .bs-gridrow th[colspan="4"],
	.timeline-table.table.sagawa_event_table.table-bordered .bs-gridrow th[colspan="6"]{
		background-color: #ffbebe;
	}
	.sagawa_event_table th, .sagawa_event_table td {
		word-break: keep-all;
		white-space: nowrap;
	}
	.table.event_table.table-bordered .bs-gridrow th {
	    font-weight: normal;
	    background-color: #ddd;
	    color: #000;
	    padding: 5px!important;
	}
	.table.event_table.table-bordered .bs-gridrow th.takuhai_id_cell {
		background-color: #ffbebe;
	}

	.event_table td .border_btm{
		border-bottom: 1px solid #111;
		line-height: 2!important;
	}
	.event_table td, .event_table td span{
		text-align: left;
		line-height: 2!important;
		width: max-content;
	}
	.event_table .event_time span span{
		display: block;
		width: max-content;
		line-height: 2!important;
	}

	.event_table .bs-gridcell.detail_col span{
		line-height: 1.2!important;
		max-width: 600px;
	}


<?php
$color_sql = "SELECT id, color FROM mst_Eoc_received_event_contents ";
$color_rs = CustomQuery($color_sql);
while($color_data = db_fetch_array($color_rs)){
	$event_id = $color_data["id"];
	if($color_data["color"] != ''){
		$color_id = $color_data["color"];
		$color_dt_sql = "SELECT code, font_color FROM mst_color_code where id='{$color_id}' ";
		$color_dt_rs = CustomQuery($color_dt_sql);
		$color_dt_data = db_fetch_array($color_dt_rs);
		$code = $color_dt_data["code"];
		$font_color = $color_dt_data["font_color"];
?>
	.event_<?=$event_id?> td{
		background: <?=$code?>; color: <?=$font_color?>;
	}
<?php
	}//end if
}//end while
?>

table.mypage_account_info {
  border-top: 1px solid;
  border-left: 1px solid;
  background: #fff;
}
.mypage_info_ttl, .mypage_info_column th, .mypage_info_data td, .mypage_info_data th{
  border-bottom: 1px solid;
  border-right: 1px solid;
}
.mypage_info_column th, .mypage_info_data td{
  text-align: center;
}
.mypage_info_ttl{
  background: #72CC82;
}

.shop_front_content.Eoc_details_table {
    margin: 0 0 5px;
}
.shop_front_content.Eoc_details_table th {
    background: #ffc107;
    color: #333;
}

</style>
