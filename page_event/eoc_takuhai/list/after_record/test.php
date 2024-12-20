<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page


if($data['status'] == '14'){
	$record["css"]='background-color:#ff0000; color: #fff;';
}elseif($data['not_hi_shuka'] == '1'){
	$record["css"]='background-color:#00FFFF; color: #111;';
}elseif($data['status'] == '2'){
	$record["css"]='background-color:#7fff00; color: #111;';
}elseif($data['status'] == '15'){
	$record["css"]='background-color:#FFFF00; color: #111;';
}else{
	$record["css"]='background-color:#fff; color: #111;';
}
?>

<style type="text/css">
	#order_new_link_1 {
		width: 110px;
	}
	#order_edit_link_1 {
		width: 50px;
	}
	#order_shuka_error_1 {
		width: 150px;
	}
	.bs-gridcell a{
		display: inline-block;
    	width: 100%;
		background-color: #1774aa;
		color: #fff;
		padding: 5px;
		margin-bottom: 5px;
		border-radius: 3px;
		text-align: center;
	}
	a.btn.btn-default.for_takuhai {
		text-align: center;
	    text-shadow: 0px 1px 0px #fa6014;
	    background: linear-gradient(to bottom, #ff8b21 30%, #fa6014 100%) 100%/100%;
	    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, 0.6), 0 1px 2px rgba(0,0,0,.05);
	    border: 1px solid #fa6014;
	    padding: 8px 0px 9px 0px;
	    border-radius: 3px;
	    cursor: pointer;
	    color: #fff;
	    font-size: 16px;
	    /*font-weight: bold;*/
	    width: 300px;
	}
	a.btn.btn-default.for_takuhai:hover {
		background: linear-gradient(to bottom, #888 30%, #111 100%) 100%/100%;
		text-shadow: 0px 1px 0px #000;
		border: 1px solid #000;
	}
</style>
