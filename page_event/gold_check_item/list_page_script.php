<style type="text/css">
	select#jigane_kakaku_auto_list {
	    /*position: fixed;*/
	    bottom: 0;
	    right: 0;
	    z-index: 10000000;
	}
	select#value_motif_64 {
	    max-width: 300px;
	}
	#jigane_table_box {
    height: 100px;
    overflow-y: scroll;
    border: 1px solid #111;
    position: fixed;
    bottom: 0;
    right: 0;
    font-size: 11px;
	}
	#jigane_table_box th {
	    text-align: center;
	    background: #ccc;
	    color: #111;
	}
	form#reflect_data_form input[type="submit"]{
			margin: 0 35px;
			padding: 10px 15px;
			background: radial-gradient(#99dae4, #155ee4);
			color: #f0f328;
			font-size: 14px;
	}
	.bs-gridcell[data-field="name"] select.form-control {
		width: auto!important;
	}	
</style>
<?php

// 地金単価テーブルの更新
// if($_GET["reflect_date"]!=''){
//     $reflect_date = $_GET["reflect_date"];
// }else{
//     $reflect_date = date("Y-m-d");
// }
// $date_sql = "SELECT DISTINCT `date` FROM mst_gold_of_bullion_merchants_price order by `date` desc limit 1";
// $date_rs = CustomQuery($date_sql);
// $is_today_reflect = false;
// while($date_data = db_fetch_array($date_rs)){
// 	if($date_data == $reflect_date){
// 		$is_today_reflect = true;
// 	}
// }
// // 当日の反映がなかったら更新する
// if($is_today_reflect === false){
// 	$mst_gold_of_bullion_merchants_price_url = "http://rifa.life/lounge_API/mst_gold_of_bullion_merchants_price.php";
// 	$post_array = array(
// 		"tokentoken" => "djfkal;jfjkdaslfj;sdljvslf;dkjvfsdlk;jfo;sirfjer;wodfja;lkfjer;eoiwjfa;dosjv;odlfjair;oerwjfn;lksdnvlkscnv;lzcxknvo;ifsnh;igfsnjfg;iasdjhfoi;weahgo;rihjgo;ihejrg;osfadj;lasdjfgaoi",
// 		"uid" => $_SESSION[uid],
// 		"reflect_date" => $reflect_date,
// 	);
// 	$post_array = http_build_query($post_array, "", "&");
// 	$context = array(
// 		"http" => array(
// 			"method"  => "POST",
// 			"content" => $post_array
// 		)
// 	);
// 	file_get_contents($mst_gold_of_bullion_merchants_price_url, false, stream_context_create($context));
// }



$date_sql = "SELECT DISTINCT `date` FROM mst_gold_of_bullion_merchants_price order by `date` desc limit 7";
$date_rs = CustomQuery($date_sql);

$date_array = array();
while($date_data = db_fetch_array($date_rs)){
	$date_array[] = $date_data["date"];
}


$sql = "
	SELECT
	a.name_id as 'name_id',
	c.`name` as 'name',
	a.price as 'price',
	a.date as 'date'
	FROM
	mst_gold_of_bullion_merchants_price  as a left join mst_gold_of_bullion_merchants as c on a.name_id=c.id
	where a.`date` BETWEEN '{$date_array[count($date_array)-1]}' and '{$date_array[0]}'
	order by a.`date` desc, a.`id` asc
";
// echo $sql;
$rs = CustomQuery($sql);

?>
<div id="jigane_table_box"><table id="jigane_table">
	<tr><th colspan="4">地金単価</th></tr>
<?
while($data = db_fetch_array($rs)){
?>
<tr data="<?=$data["date"]?>:<?=$data["name_id"]?>" >
	<td class="date" ><?=$data["date"]?></td>
	<td class="name_id" ><?=$data["name_id"]?></td>
	<td class="name" ><?=$data["name"]?></td>
	<td class="price" data="<?=$data["price"]?>" ><?=$data["price"]?></td>
</tr>
<?
}//end while
?>
</table></div>
<!-- 約定日デフォルト設定 -->
<?php
if($_GET["masterkey1"] != ''){
	$gold_check_id = $_GET["masterkey1"];
	$trade_day_sql = "SELECT trade_day FROM gold_check WHERE id = {$gold_check_id} LIMIT 1";
	$rs_trade_day = CustomQuery($trade_day_sql);
	$trade_day_data = db_fetch_array($rs_trade_day);
	$trade_day = $trade_day_data["trade_day"];
	$trade_day = strtotime($trade_day);
 	$trade_day = date('Y-m-d',$trade_day);
}else{
	$trade_day = date('Y-m-d');
}
$token_html = "";
$form_info_html = "<form id =reflect_data_form action='https://rifa.life/evaProject/api/gold_check/make_gold_price_list' method = 'GET'>";

// $form_info_html = "<form id ='reflect_data_form' action='http://rifa.life/lounge_API/mst_gold_of_bullion_merchants_price.php' target = '_blank' method = 'post'>";
// $token_html = "<input type='hidden' name='tokentoken' value='djfkal;jfjkdaslfj;sdljvslf;dkjvfsdlk;jfo;sirfjer;wodfja;lkfjer;eoiwjfa;dosjv;odlfjair;oerwjfn;lksdnvlkscnv;lzcxknvo;ifsnh;igfsnjfg;iasdjhfoi;weahgo;rihjgo;ihejrg;osfadj;lasdjfgaoi'/>";


?>



<script type="text/javascript">
$(window).load(function() {
  $link_btn = '';

	$link_btn += '<span class="rnr-button btn btn-default" >';
	$link_btn += "<?=$form_info_html?>";
	$link_btn += '<input type = "date" name = "reflect_date" value = "<?=$trade_day?>"/>';
	$link_btn += '<input type = "submit" target="_blank" value = "金額反映"/>';
	$link_btn += "<?=$token_html?>";
	$link_btn += '<input type="hidden" name="uid" value="<?=$_SESSION[uid]?>"/>';
	$link_btn += '</form></span>';

  // $link_btn += '<span class="rnr-button btn btn-default" ><a href="/include/page_event/mst_gold_of_bullion_merchants/reflect.php" target="_blank" onclick="location.reload()" >金額反映</a></span>';

	$link_btn += '<span class="date_selctor">約定日<input id="date_selctor_input" type="date" value="<?=$trade_day?>"/></span>';
//地金チェックID変更バッチ
	$link_btn += '<span class="rnr-button btn btn-default" >';
	$link_btn += '<form id =change_gold_check_id_form action="http://rifa.life/lounge_API/evaeva/gold_check_id_change_batch.php" target = "_blank" method = "post">';
	$link_btn += '<input type="text" name="change_gold_check_id"/>';
	$link_btn += '<input type="submit" target="_blank" value = "地金ID一括変更"/>';
	$link_btn += '<input type="hidden" name="tokentoken" value="jkfhebilquhenp32y21983ujckfsdbajfphn9234h283hjnlds.dafnhba;uifi"/>';
	$link_btn += '<input type="hidden" name="uid" value="<?=$_SESSION[uid]?>"/>';
	$link_btn += '<input type="hidden" name="gold_check_id" value="<?=$_GET[masterkey1]?>"/>';
	$link_btn += '</form></span>';


  $link_btn += '<br clear="all" >';

  $(".bs-sidebar-screenbound .rnr-rowcontainer div[data-container='add_delete']").append($link_btn);
})
</script>

<?

if($_GET["mastertable"]=='gold_check'){
	$net_japan_flag = "";
	if($_GET["test"] === "test"){
		include 'master_test.php';
	}else{
		include 'master.php';
	}

	if($_GET["masterkey1"] != ''){
		$gold_check_id = $_GET["masterkey1"];
		$company_sql = "SELECT `company`,`slip_type` FROM `gold_check` WHERE `id` = '{$gold_check_id}' LIMIT 1";
		$rs_company = CustomQuery($company_sql);
		$company_data = db_fetch_array($rs_company);

		$company_value = $company_data["company"];
		if($company_value==1){
			$net_japan_flag = "on";
		}//end if($company_value==1)
		$slip_type = $company_data["slip_type"];
	}//end if($_GET["masterkey1"] != '')
?>
<div id ="net_japan_flag"><?=$net_japan_flag?></div>
<div id ="slip_type"><?=$slip_type?></div>
<style type="text/css">
div#jigane_table_box{
    height: 300px;
}
table#jigane_table {
    width: max-content;
    font-size: 15px;
    background: #fff;
}
#net_japan_flag,#slip_type{
	display:none;
}
</style>



<?
}
if(strstr($_SERVER["REQUEST_URI"],'gold_check_list.php')){
?>

<style type = "text/css">
th[ieditcont="all"]+th+th{
	display:none;
}
td[ieditcont="all"]+td+td{
	display:none;
}
div#jigane_table_box{
    height: 300px;
}
table#jigane_table{
    width: 450px;
    font-size: 15px;
}




</style>



<?
}
?>




<script type="text/javascript">
$(window).load(function() {
  $link_btn = '';

  $link_btn += '<div id="ikkatsu_open_btn" class="rnr-button btn btn-default" >全て開く</div>';
  $link_btn += '<div id="ikkatsu_btn" class="rnr-button btn btn-default" >一括単価反映</div>';
	<?php
	if(isset($gold_check_id)){
	?>
	// $link_btn += '<a href="/evaProject/gold_check/amount_breakdown/<?=$gold_check_id?>" class="rnr-button btn btn-link" >金額振り分け確認ページ</div>';
	<?php
	}
	?>

  $(".bs-sidebar-screenbound .rnr-rowcontainer div[data-container='add_delete']").append($link_btn);


  document.getElementById('ikkatsu_open_btn').onclick = function(){
    document.getElementById('chooseAll_1').click()
    document.getElementById('edit_selected1').click()
  }

  document.getElementById('ikkatsu_btn').onclick = function(){
    $id_cell = $('table[data-brick="grid"] .bs-gridrow .bs-gridcell[data-field=id]')
    $id_cell.each(function(index, el) {
      //idの固有連番を取得、抜き出す
    	$this_id_num = $(this).attr("data-record-id");
    	$name_val = $("#value_name_"+$this_id_num).val();
    	$date_selctor_input = $("#date_selctor_input").val();
    	$tanka_data = $date_selctor_input+':'+$name_val;
    	$kinsyou_tanka = $("#jigane_table tr[data='"+$tanka_data+"'] .price").attr("data");
    	$netjapan_flag = document.getElementById("net_japan_flag").innerHTML;
    	if(($netjapan_flag == "on") && (($this_id_num == 4) || ($this_id_num == 19) || ($this_id_num == 29))){
    		$kinsyou_tanka = parseInt($kinsyou_tanka) + 1;
    	}
  		$("#value_unit_"+$this_id_num).val($kinsyou_tanka);
			$gram_2 = $("#value_gram_2_"+$this_id_num).val();
			//伝票重量が空、nullじゃないとき伝票重量と金性単価をかける
			if($gram_2 != null || $gram_2 != ""){
				$price = $kinsyou_tanka * $("#value_gram_2_"+$this_id_num).val()
			}else{
				$price = $kinsyou_tanka * $("#value_gram_"+$this_id_num).val()
			}
			console.log($price)
      $("#value_price_"+$this_id_num).val(parseInt($price))
    });
  }
	$("#gold_check_btn").click();
	function funcAfter(fieldsData) {
  for (f in fieldsData) {
      var field = fieldsData[f];
      if (field.name == 'authorize_check') {
          if (field.value == '1') {
               field.container.closest('tr').css('background', '#0F0');
               field.container.closest('tr').css('color', '#555');
           }else{
               field.container.closest('tr').css('background', '#FFF');
               field.container.closest('tr').css('color', '#555');
           }
       }
   }
}
})
</script>
