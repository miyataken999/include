<style type="text/css">
	.bs-gridcell.rnr-field-number[data-field="meisai_number"] span {
	    width: 20px!important;
	}
	body .table>thead:first-child>tr:first-child>th[data-field='gold_property']{
		background-color: #ff0;
		color: #111;
	}
	.table>tbody>tr>td[data-field='gold_property']{
		background-color: #ff0;
		color: #111;
	}
	span textarea[id*='comment']{
		/*width: 200px!important;*/
		height: 100px!important;
	}
	span input[id*='DA_SELFGRES']{
		width: 100px!important;
		min-width: 0px!important;
	}
	.rnr-rowcontainer .rnr-button:nth-child(1){
		background: #0f0;
	}
	.rnr-rowcontainer .rnr-button:nth-child(3){
		background: #f00;
		color: #fff;
	}
	.rnr-rowcontainer .rnr-button:nth-child(4){
		background: #0ff;
	}
	/*.rnr-rowcontainer .rnr-button:nth-child(2){
		background: #f00;
		color: #fff;
	}*/

	body .table>thead:first-child>tr:first-child>th[data-field='Gram'] , body .table>thead:first-child>tr:first-child>th[data-field='price_per_gram']{
		background-color: #ff0;
		color: #111;
	}
	body .table>thead:first-child>tr:first-child>th[data-field='Parent_stone'] , body .table>thead:first-child>tr:first-child>th[data-field='price_per_parent_stone']{
		background-color: #0f0;
		color: #111;
	}
	body .table>thead:first-child>tr:first-child>th[data-field='Aside_stone'] , body .table>thead:first-child>tr:first-child>th[data-field='price_per_aside_stone']{
		background-color: #0ff;
		color: #111;
	}
	body .table>thead:first-child>tr:first-child>th[data-field='product_num'] {
		background-color: #f00;
		color: #fff;
	}

</style>
<script type="text/javascript">

jQuery(window).load(function(){
	jQuery("[data-field=line]").hide();
	// jQuery("[data-field=item_name]").hide();
	jQuery("[data-field=serial_number]").hide();
	jQuery("[data-field=DA_SELFGRES]").hide();
	// jQuery("[data-field=product_num]").hide();
	jQuery("[data-field=DA_INTENSITY").hide();
	jQuery("[data-field=DA_OVERTONE").hide();
	jQuery("[data-field=DA_POLISH").hide();
	jQuery("[data-field=DA_SYMMETRY").hide();
	jQuery("[data-field=DA_FLUO").hide();
	jQuery("[data-field=DA_COLOR_FLUO").hide();
	jQuery("[data-field=DA_WIDE").hide();
	jQuery("[data-field=DA_HIGH").hide();
	jQuery("[data-field=DA_DEPTH").hide();


	$(document).keydown(function(event){
		// クリックされたキーのコード
		var list_keyCode = event.keyCode;
		console.log(list_keyCode);

		$kin_satei_ikkatsu_time = '';

	  //Ctrlキー+F3インライン追加
	    // if(event.ctrlKey){//ctrlキー
		  if(list_keyCode == 112 ){

			if($kin_satei_ikkatsu_time == ""){
	      		console.log("kin_satei_ikkatsu_time "+$kin_satei_ikkatsu_time);
				// 確認メッセージ
				var msg = "編集中のレコード全てに対して、最上段の内容をコピーします。\nよろしいですか？" ;
				// 「はい」を選択した場合
				if( window.confirm( msg ) ) {
					kin_satei_ikkatsu_settei();
					$kin_satei_ikkatsu_time = "on";//フラグ
					return false;
				// 「いいえ」を選択した場合
				} else {
					alert("キャンセルしました。");
					$kin_satei_ikkatsu_time = "on";//フラグ
				}
			}

		  }
		// }else if(list_keyCode == 113 ){
		// //F2
		// kin_satei_togtog();
		// }
	});
});

function kin_satei_togtog(){
	jQuery("[data-field=line]").toggle();
	// jQuery("[data-field=item_name]").toggle();
	jQuery("[data-field=serial_number]").toggle();
	jQuery("[data-field=DA_SELFGRES]").toggle();
	// jQuery("[data-field=product_num]").toggle();
	jQuery("[data-field=DA_INTENSITY").toggle();
	jQuery("[data-field=DA_OVERTONE").toggle();
	jQuery("[data-field=DA_POLISH").toggle();
	jQuery("[data-field=DA_SYMMETRY").toggle();
	jQuery("[data-field=DA_FLUO").toggle();
	jQuery("[data-field=DA_COLOR_FLUO").toggle();
	jQuery("[data-field=DA_WIDE").toggle();
	jQuery("[data-field=DA_HIGH").toggle();
	jQuery("[data-field=DA_DEPTH").toggle();


	jQuery("[data-field=gold_property").show();
	jQuery("[data-field=Gram").show();
	jQuery("[data-field=unit").show();
	jQuery("[data-field=Parent_stone").show();
	jQuery("[data-field=Aside_stone").show();
	jQuery("[data-field=price_per_gram").show();
	jQuery("[data-field=price_per_parent_stone").show();
	jQuery("[data-field=price_per_aside_stone").show();

}

function kin_satei_ikkatsu_settei(){
	console.log("ikkatsu_settei");
	//最上段のid取得
	$sc_top = 10000;
	$(".bs-sidebar-main [id*=value_status_]").each(function(v,vv){
		$sc_top_now = $(vv).scrollTop();
		if($sc_top_now < $sc_top){
			$sc_top = $sc_top_now;
			$default_id = $(vv).attr("id");
			$default_id = $default_id.replace("value_status_","");
		}
	});

	$da_st = $("#value_status_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_status_]").val($da_st);

	$da_st = $("#value_category_id_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_category_id_]").val($da_st);
	$("[id*=value_category_id]").change();

	$da_st = $("#value_yahoo_sex_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_yahoo_sex_]").val($da_st);


	$da_st = $("#value_product_num_"+$default_id).val();
	$(".bs-sidebar-main [type='hidden'][id*=value_product_num_]").val($da_st);
	$da_st = $("#display_value_product_num_"+$default_id).val();
	$(".bs-sidebar-main [type='text'][id*=display_value_product_num_]").val($da_st);


	$da_st = $("#value_line_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_line_]").val($da_st);

	$da_st = $("#value_item_name_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_item_name_]").val($da_st);

	$da_st = $("#value_serial_number_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_serial_number_]").val($da_st);

	$da_st = $("#value_gold_property_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_gold_property_]").val($da_st);

	$da_st = $("#value_DA_SELFGRES_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_DA_SELFGRES_]").val($da_st);

	$da_st = $("#value_comment_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_comment_]").val($da_st);

	$da_st = $("#value_Gram_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_Gram_]").val($da_st);

	$da_st = $("#value_unit_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_unit_]").val($da_st);

	$da_st = $("#value_Parent_stone_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_Parent_stone_]").val($da_st);

	$da_st = $("#value_Aside_stone_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_Aside_stone_]").val($da_st);

	$da_st = $("#value_price_per_gram_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_price_per_gram_]").val($da_st);

	$da_st = $("#value_price_per_parent_stone_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_price_per_parent_stone_]").val($da_st);

	$da_st = $("#value_price_per_aside_stone_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_price_per_aside_stone_]").val($da_st);

	$da_st = $("#value_price_"+$default_id).val();
	$(".bs-sidebar-main .bs-gridcell[data-field='price'] [id*=value_price_]").val($da_st);

	$da_st = $("#value_sales_price_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_sales_price_]").val($da_st);

	$da_st = $("#value_yahoo_sankou_uwadai_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_yahoo_sankou_uwadai_]").val($da_st);

	$da_st = $("#value_satei_by_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_satei_by_]").val($da_st);

}


</script>


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
