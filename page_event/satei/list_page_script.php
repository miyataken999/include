<style type="text/css">
	.bs-gridcell.rnr-field-number[data-field="meisai_number"] span {
	    width: 20px!important;
	}
	th.bs-gridcell.rnr-field-text[data-field="Remarks"] {
	    min-width: 80px;
	}
	select#kinsyou_auto_list {
	    /*position: fixed;*/
	    bottom: 0;
	    right: 0;
	    z-index: 10000000;
	}
</style>
<select id="kinsyou_auto_list">
<?php
$sql = "SELECT val,reference_id FROM mst_gold_property ";
$rs = CustomQuery($sql);

while($data = db_fetch_array($rs)){
	$reference_id = $data["reference_id"];
	if($reference_id == ''){
		continue;
	}
	$price_sql = "SELECT id,category,item,price FROM tb_gold_property_price where id={$reference_id}";
	$price_rs = CustomQuery($price_sql);
	$price_data = db_fetch_array($price_rs);

?>
	<option value="<?=floor($price_data['price'])?>" data="<?=$data['val']?>" ><?=number_format(floor($price_data['price']))?> ： <?=$data['val']?></option>
<?php
}
?>
</select>


<script type="text/javascript">

<?php
$current_page_pass = $_SERVER["REQUEST_URI"];
// if(stristr($current_page_pass,'/shop5test/')){
	if(stristr($current_page_pass,'satei_of_jewelry_list.php')){
?>
	//php issetの役割
	function isset(data){
	    if(data === "" || data === null || data === undefined){
	        return false;
	    }else{
	        return true;
	    }
	};

	function housa_togtog(){
		jQuery("[data-field=yahoo_sozai]").toggle();
		jQuery("[data-field=ichiba_title]").toggle();
		jQuery("[data-field=DA_SELFGRES]").toggle();
		jQuery("[data-field=DA_INTENSITY]").toggle();
		jQuery("[data-field=DA_OVERTONE]").toggle();
		jQuery("[data-field=DA_POLISH]").toggle();
		jQuery("[data-field=DA_SYMMETRY]").toggle();
		jQuery("[data-field=DA_FLUO]").toggle();
		jQuery("[data-field=DA_COLOR_FLUO]").toggle();
		jQuery("[data-field=DA_WIDE]").toggle();
		jQuery("[data-field=DA_HIGH]").toggle();
		jQuery("[data-field=DA_DEPTH]").toggle();
		jQuery("[data-field=DA_COLOR]").toggle();
		jQuery("[data-field=DA_CLARITY]").toggle();
		jQuery("[data-field=DA_CUT]").toggle();
		jQuery("[data-field=multiplication_rate]").toggle();
		jQuery("[data-field=DA_FRAPA]").toggle();
		jQuery("[data-field=DA_RATE]").toggle();
	}
	//end isset

	window.onload = function() {
		jQuery("[data-field=yahoo_sozai]").hide();
		jQuery("[data-field=ichiba_title]").hide();
		jQuery("[data-field=DA_SELFGRES]").hide();
		jQuery("[data-field=DA_INTENSITY]").hide();
		jQuery("[data-field=DA_OVERTONE]").hide();
		jQuery("[data-field=DA_POLISH]").hide();
		jQuery("[data-field=DA_SYMMETRY]").hide();
		jQuery("[data-field=DA_FLUO]").hide();
		jQuery("[data-field=DA_COLOR_FLUO]").hide();
		jQuery("[data-field=DA_WIDE]").hide();
		jQuery("[data-field=DA_HIGH]").hide();
		jQuery("[data-field=DA_DEPTH]").hide();
		jQuery("[data-field=DA_COLOR]").hide();
		jQuery("[data-field=DA_CLARITY]").hide();
		jQuery("[data-field=DA_CUT]").hide();
		jQuery("[data-field=multiplication_rate]").hide();
		jQuery("[data-field=DA_FRAPA]").hide();
		jQuery("[data-field=DA_RATE]").hide();
		$(document).keydown(function(event){
			// クリックされたキーのコード
			var list_keyCode = event.keyCode;
			if(list_keyCode == 113 ){
				housa_togtog();
			}

		});
		console.log("tamiya_test");
		//発火：掛け率、親石単価 focusout
		$column = "table.table.table-bordered.table-striped.bs-flexgrid.rnr-b-grid.rnr-gridtable tr td ";
		$($column+"[id*=Parent_stone],"+$column+"[id*=DA_COLOR],"+$column+"[id*=DA_CLARITY]").change(function(){
			console.log("change");
			$this_id_num = $(this).attr("id");

			$multiplication_rate = $("#"+$this_id_num+" span input").val();
			$tr = $(this).parent().parent().attr('id');

			$parent_stone = $('#'+$tr+" td[data-field = 'Parent_stone'] span input").val();
			$color = $('#'+$tr+" td[data-field = 'DA_COLOR'] span select > option:selected").val();
			$clarity = $('#'+$tr+" td[data-field = 'DA_CLARITY'] span select > option:selected").val();
			$api_url = "https://rifa.life/evaProject/api/get_rapadata/"+$parent_stone+"/"+$clarity+"/"+$color+"//";
			// $api_url = "http://localhost/evaProject/api/get_rapadata/"+$parent_stone+"/"+$clarity+"/"+$color+"/"+$multiplication_rate+"/";

			$.ajax(
			  {
			    type: 'get',
					url: $api_url,
			    dataType: 'json'
			  }
			)
			.done(function (data){
				console.log("success");
				$json = JSON.stringify(data);
				$json = '['+$json+']'
				$json_decode = JSON.parse($json);

				$frapa = $('#'+$tr+" td[data-field = 'DA_FRAPA'] span span input").val();
				$rate = $('#'+$tr+" td[data-field = 'DA_RATE'] span span input").val();
				$price_per_parent_stone = $('#'+$tr+" td[data-field = 'price_per_parent_stone'] span span input").val();

				if((isset($json_decode[0]['rapa_price'])!=false)&&($json_decode[0]['rapa_price']!="")){
					$('#'+$tr+" td[data-field = 'DA_FRAPA'] span span input").val($json_decode[0]['rapa_price']);
				}
				if(($rate == "")||($rate == null)||($rate == 0)){
					if((isset($json_decode[0]['rate'])!=false)&&($json_decode[0]['rate']!="")){
						$('#'+$tr+" td[data-field = 'DA_RATE'] span span input").val($json_decode[0]['rate']);
					}
				}
				if((isset($json_decode[0]['alert_msg'])!=false)&&($json_decode[0]['alert_msg']!="")){
					window.alert($json_decode[0]['alert_msg']);
				}
			})
			.fail(function(){
				console.log("fail");
				// window.alert("正しい結果を得られませんでした。");
			})
		});
		$("table.table.table-bordered.table-striped.bs-flexgrid.rnr-b-grid.rnr-gridtable tr td [id*=multiplication_rate]").focusout(function(){
			$this_id_num = $(this).attr("id");
			$multiplication_rate = $("#"+$this_id_num+" span input").val();
			$tr = $(this).parent().parent().attr('id');
			$parent_stone = $('#'+$tr+" td[data-field = 'Parent_stone'] span input").val();
			$frapa = $('#'+$tr+" td[data-field = 'DA_FRAPA'] span span input").val();
			$rate = $('#'+$tr+" td[data-field = 'DA_RATE'] span span input").val();
			$api_url = "https://rifa.life/evaProject/api/get_rapadata/////";
			$.ajax(
			  {
			    type: 'get',
					url: $api_url,
			    dataType: 'json'
			  }
			)
			.done(function (data){
				console.log("success");
				$json = JSON.stringify(data);
				$json = '['+$json+']'
				$json_decode = JSON.parse($json);
				$tax = $json_decode[0]['tax'];

				//親石単価　計算・挿入
				$price_parent_stone = Math.floor($multiplication_rate*$frapa*$rate*$tax/1000)*1000;
				$('#'+$tr+" td[data-field = 'price_per_parent_stone'] span span input").val($price_parent_stone);

				if((isset($json_decode[0]['alert_msg'])!=false)&&($json_decode[0]['alert_msg']!="")){
					window.alert($json_decode[0]['alert_msg']);
				}
			})
			.fail(function(){
				console.log("fail");
				// window.alert("正しい結果を得られませんでした。");
			})
		});
	};
	<?php
	}
	?>
</script>
