<?php


// if(isset($_GET["test"])){
	$html = '';
	$alertArray = array();
	$ecc_id = $_GET["editid1"];

	$sql = "SELECT name1 FROM Eoc where ecc_id={$ecc_id} limit 1";
	$rs = CustomQuery($sql);
	$ecc_data = db_fetch_array($rs);


	$name1 = $ecc_data["name1"];

	$name1_check = mb_convert_encoding($name1,"iso-2022-jp","UTF-8");
	$name1_check = mb_convert_encoding($name1_check,"UTF-8","iso-2022-jp");
	if(stristr($name1_check,'??')){
		$alertArray[] = array($name1_check,$name1);
	}
	$name1 = $name1_check;

	if(count($alertArray) > 0){
		$alert_html = "";
		$alert_html .= "<div class='row alert alert-danger' role='alert'><div class='col col-12'>文字化け発見しました！</div></div>";

		$alert_html .= "<div class='alert alert-warning' role='alert'>";
		$alert_html .= "<div class='row'>";
		$alert_html .= "<div class='col col-6'>変換前</div>";
		$alert_html .= "<div class='col col-6'>変換後</div>";
		$alert_html .= "</div>";
		for ($al_i=0; $al_i < count($alertArray); $al_i++) {
			$after_val = $alertArray[$al_i][0];
			$before_val = $alertArray[$al_i][1];
			$alert_html .= "<div class='row'>";
			$alert_html .= "<div class='col col-6'>{$before_val}</div>";
			$alert_html .= "<div class='col col-6'>{$after_val}</div>";
			$alert_html .= "</div>";
		}

		$alert_html .= "</div>";

		$alert_html = "<div class='container alert_origin'>{$alert_html}</div>";
	}
	echo $alert_html;
// }


?>
<style type="text/css">
.alert_origin .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.alert_origin .col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
.alert_origin .col{
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
	.alert_origin .alert-danger {
		text-align: left;
	    color: #721c24;
	    background-color: #f00;
	    border-color: #a00;
	    color: #fff;
	}
	.alert .row:first-child {
	    text-align: center;
	}
	.alert-warning {
	    color: #856404;
	    background-color: #fff3cd;
	    border-color: #ffeeba;
	}

	.alert {
	    position: relative;
	    padding: .75rem 1.25rem;
	    margin-bottom: 1rem;
	    border: 1px solid transparent;
	    border-radius: .25rem;
	}
	.alert-danger {
	    color: #721c24;
	    background-color: #f00;
	    border-color: #a00;
	    color: #fff;
	    border-width: 5px;
	    font-size: 36px;
	}

	.bs-details .panel-heading {
	    background: #f35;
	}
	.bs-details ~ .bs-details .panel-heading {
	    background: #033c73;
	}


</style>
<script type="text/javascript">
$(window).load(function(){
	$("h4.panel-title").click();
	$("#value_purchase_type_1").focus();
})
</script>
