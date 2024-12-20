<?
include_once "config.php";

if(isset($_GET["test"])){
	// ini_set("display_errors",1);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>メール送信画面</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;
?>


<?

if(($ecc_id == '') && ($flag_name == '')){
?>
	<h2>顧客SEQが入っていません。</h2>
	<form action="./input.php" method="get" accept-charset="utf-8">
		顧客SEQ<input type="text" name="ecc_id" value="" id="ecc_id_text">
		<input type="submit" name="" value="更新">
	</form>
	<script type="text/javascript">
		$("#ecc_id_text").focus();
	</script>
<?
	exit();
}else{
?>


<?
if(isset($alert_html)){
	echo $alert_html;
}
?>





	<?php if($flag_name == ''){?>
		<form action="./action/send.php" method="post" accept-charset="utf-8" class="container" id="send_form">
	<?php }else{ ?>
		<form action="./action/send_tougou.php" method="post" accept-charset="utf-8" class="container" id="send_form">
	<?php }?>
	
		<input type="hidden" name="ecc_id" value="<?=$ecc_id?>">
		<input type="hidden" name="Eoc_takuhai_id" value="<?=$Eoc_takuhai_id?>">
		<input type="hidden" name="tmp_id" value="<?=$tmp_id?>">
		<input type="hidden" name="group_id" value="<?=$group_id?>">
		<input type="hidden" name="is_many_satei" value="<?=$is_many_satei?>">
		<input type="hidden" name="auto_mail_send" value="<?=$auto_mail_send?>">
		<input type="hidden" name="flag_name" value="<?=$flag_name?>">
		<input type="hidden" name="uid" value="<?=$uid?>">
		<?php
		if((isset($_GET["return_to"])) && ($_GET["return_to"] == "furikomi")){
		?>
		<input type="hidden" name="return_to" value="furikomi">
		<?php
		}
		?>




		<div class="form-row form-group">
			<div class="col-1">
				<label class="control-label" for="flag_name">一斉送信対象</label>
			</div>
			<div class="col-4">
				<select name="flag_name" id="flag_name" class="form-control">
					<option></option>
					<option value="FLAG_SPEED" <?php if($_GET['flag_name'] == 'FLAG_SPEED') echo 'selected'; ?>>スピード一斉送信</option>
					<option value="UN_REACHABLE" <?php if($_GET['flag_name'] == 'UN_REACHABLE') echo 'selected'; ?>>到着一斉送信</option>
					<option value="FLG_MAIL_SAGAWA" <?php if($_GET['flag_name'] == 'FLG_MAIL_SAGAWA') echo 'selected'; ?>>佐川一斉送信</option>
					<option value="FLG_MAIL_OTHER" <?php if($_GET['flag_name'] == 'FLG_MAIL_OTHER') echo 'selected'; ?>>その他一斉送信</option>
					<option value="kit_done_flag" <?php if($_GET['flag_name'] == 'kit_done_flag') echo 'selected'; ?>>宅配完了一斉送信</option>
					<option value="transfer_confirm" <?php if($_GET['flag_name'] == 'transfer_confirm') echo 'selected'; ?>>振込一斉送信</option>
				</select>
			</div>
		</div>



		<div class="form-row form-group">
			<div class="col-1">
				<label class="control-label" for="tmp_categoryInput">大カテ</label>
			</div>
			<div class="col-3">
				<?
				$array = $tmp_category_result; // リスト用Array
				$itemName = "tmp_category"; // name,id用
				$key = "id"; // 保存値
				$val = $category_id; // 選択値
				$displayNameKey = "name"; // 表示値
				echo createSelectHtml($array, $itemName, $key, $val, $displayNameKey);
				?>
			</div>
			<div class="col-1">
				<label class="control-label" for="tmp_sub_categoryInput">中カテ</label>
			</div>
			<div class="col-4">
				<?
				$array = $tmp_sub_category_result; // リスト用Array
				$itemName = "tmp_sub_category"; // name,id用
				$key = "id"; // 保存値
				$val = $sub_category_id; // 選択値
				$displayNameKey = "name"; // 表示値
				$option_data_key = "category_id";
				echo createSelectHtml($array, $itemName, $key, $val, $displayNameKey, $option_data_key);
				?>
			</div>
		</div>
		<div class="form-row form-group">
			<div class="col-1">
				<label class="control-label" for="templateInput">テンプレート</label>
			</div>
			<div class="col-8">
				<?
				$array = $tmp_result; // リスト用Array
				$itemName = "template"; // name,id用
				$key = "id"; // 保存値
				$val = $tmp_id; // 選択値
				$displayNameKey = "title"; // 表示値
				$option_data_key = "sub_category_id";
				echo createSelectHtml($array, $itemName, $key, $val, $displayNameKey, $option_data_key);
				?>
			</div>
			<div class="col-2">
				<input type="button" value="読込" class="btn btn-outline-primary" id="reload">
			</div>
		</div>




<?php if($flag_name == ''){?>
	<div class = "form-row form-group border border-danger rounded" style="font-size:20px">
			<div class = "col-2 text-center bg-secondary text-white border-right border-danger">顧客check</div>
			<div class = "col-1 text-center">
				<input type="checkbox" id="kokyaku_check">
			</div>
			<div class = "col-2 text-center bg-secondary text-white border-right border-danger">顧客名</div>
			<div class = "col-3 text-center border-right border-danger"><?=$name1?></div>
			<div class = "col-2 text-center bg-secondary text-white border-right border-danger">顧客SEQ</div>
			<div class = "col-2 text-center border-right border-danger"><?=$ecc_id?></div>
		</div>
		<div class="form-row form-group">
			<div class="col">
				<label class="control-label" for="to_addrInput">Toアドレス</label>
				<input type="text" class="form-control" id="to_addrInput" name="to_addrInput" value="<?=$replace_data["Eoc"]["mail1"]?>" readonly>
			</div>
			<div class="col">
				<label class="control-label" for="cc_addrInput">Ccアドレス</label>
				<input type="text" class="form-control" id="cc_addrInput" name="cc_addrInput" value="<?=$replace_data["Eoc"]["mail2"]?>" readonly>
			</div>
			<div class="col">
				<label class="control-label" for="from_addrInput">Fromアドレス</label>

<?
if((isset($_GET["nishitani"])) AND ($_GET["nishitani"] == "nishitani")){
?>
				<input type="text" class="form-control" id="from_addrInput" name="from_addrInput" value="rifa@urlounge.co.jp" readonly>
				<input type="hidden" name="nishitani" value="nishitani">
<?
}else{
?>
				<input type="text" class="form-control" id="from_addrInput" name="from_addrInput" value="<?=$from_addr?>" readonly>
<?
}
?>




			</div>
		</div>

	<?php }else{ 
		include 'issei_soushin_list.php';
	 }?>




		<div class="form-row form-group">
			<div class="satei_comment_box" for="insert_satei_comment">コメント挿入</div>
			<textarea type="text" class="form-control" id="insert_satei_comment" style="height:50px;"></textarea>
		</div>
		<div class="form-row form-group">
			<label class="control-label" for="displayNameInput">表示名</label>
			<input type="text" class="form-control" id="displayNameInput" name="displayNameInput" value="<?=$displayName?>">
		</div>
		<div class="form-row form-group">
			<label class="control-label" for="subject_pcInput">件名</label>
			<input type="text" class="form-control" id="subject_pcInput" name="subject_pcInput" value="<?=$subject_pc?>">
		</div>
<?php
if($line_chat_url != ""){
	echo "<div class ='line_chat_btn'><a href='".$line_chat_url."' target='_blank'>LINEchat</a></div>";
}
 ?>
 <input type="hidden" class="form-control" id="line_url" name="line_url" value="<?=$line_chat_url?>">
 <table class = "mail_content_func_table">
 	<tr>
		<th>ヘッダー</th>
 		<td><div class="btn btn-info open_close_btn" target_input = "str_header">非表示</div></td>
		<td><a class="btn btn-success copy_btn" target_input = "str_header" tabindex="0">コピー</a></td>
 	</tr>
 </table>


		<div class="form-row form-group" target_input = "str_header">
			<!-- <label class="control-label" for="str_headerInput">本文 ヘッダー</label> -->

			<textarea type="text" class="form-control" id="str_headerInput" name="str_headerInput" target_input = "str_header" tabindex="1"><?=$str_header?></textarea>
		</div>





		<!-- <div class="form-row form-group">
		<?if($tmp_id == 136){?>
			<div class="col-3">
			<a href="/include/mail/tentou_label/sateimeisai.php?ecc_id=<?=$ecc_id?>&label_flag=1" class="btn btn-outline-primary" target="_blank">ST変更なしラベル付与</a>
			</div>
			<div class="col-3">
			<a href="/include/mail/tentou_label/sateimeisai.php?ecc_id=<?=$ecc_id?>&label_flag=0" class="btn btn-outline-danger" target="_blank">ST変更なしラベル外し</a>
			</div>
			<div class="col-6">
			<a href="/include/csv/label/create_csv_shop5.php" class="btn btn-primary" target="_blank">ラベル出力</a>
			</div>
		<?}?>
		</div> -->



<?
//査定送信の場合のみ
if($category_id == 5){
?>
<div id="category_table">
<?
if((isset($sumprice)) && (array_sum($sumprice) != 0)){
?>
	<div class="form-row form-group">
		<div class="col-12">
			<label>カテゴリー別計算</label>
		</div>
	</div>
	<div class="form-row form-group">
		<div class="col col-k">
			<label>K</label>
			<span><?=number_format($sumprice["K"])?>円</span>
		</div>
		<div class="col col-d">
			<label>D</label>
			<span><?=number_format($sumprice["D"])?>円</span>
		</div>
		<div class="col col-j">
			<label>J</label>
			<span><?=number_format($sumprice["J"])?>円</span>
		</div>
		<div class="col col-w">
			<label>W</label>
			<span><?=number_format($sumprice["W"])?>円</span>
		</div>
		<div class="col col-b">
			<label>B</label>
			<span><?=number_format($sumprice["B"])?>円</span>
		</div>
		<div class="col col-h">
			<label>H</label>
			<span><?=number_format($sumprice["H"])?>円</span>
		</div>
	</div>
	<div class="form-row form-group total-row">
		<div class="col-2 col-t">
			<label>Total</label>
		</div>
		<div class="col-2 col-t">
			<span><?=number_format(array_sum($sumprice))?>円</span>
		</div>
		<div class="col-8 col-t">
			<span style='display:block; height: 100%;'></span>
		</div>
	</div>
<?
}
?>

<?
if((isset($seiyaku_sumprice)) && (array_sum($seiyaku_sumprice) != 0)){
?>
	<div class="form-row form-group">
		<div class="col-12">
			<label>【成約】カテゴリー別計算</label>
		</div>
	</div>
	<div class="form-row form-group">
		<div class="col col-k">
			<label>K</label>
			<span><?=number_format($seiyaku_sumprice["K"])?>円</span>
		</div>
		<div class="col col-d">
			<label>D</label>
			<span><?=number_format($seiyaku_sumprice["D"])?>円</span>
		</div>
		<div class="col col-j">
			<label>J</label>
			<span><?=number_format($seiyaku_sumprice["J"])?>円</span>
		</div>
		<div class="col col-w">
			<label>W</label>
			<span><?=number_format($seiyaku_sumprice["W"])?>円</span>
		</div>
		<div class="col col-b">
			<label>B</label>
			<span><?=number_format($seiyaku_sumprice["B"])?>円</span>
		</div>
		<div class="col col-h">
			<label>H</label>
			<span><?=number_format($seiyaku_sumprice["H"])?>円</span>
		</div>
	</div>
	<div class="form-row form-group total-row">
		<div class="col-2 col-t">
			<label>Total</label>
		</div>
		<div class="col-2 col-t">
			<span><?=number_format(array_sum($seiyaku_sumprice))?>円</span>
		</div>
		<div class="col-8 col-t">
			<span style='display:block; height: 100%;'></span>
		</div>
	</div>
<?
}
?>
<?
if((isset($awazu_sumprice)) && (array_sum($awazu_sumprice) != 0)){
?>
	<div class="form-row form-group">
		<div class="col-12">
			<label>【合わず】カテゴリー別計算</label>
		</div>
	</div>
	<div class="form-row form-group">
		<div class="col col-k">
			<label>K</label>
			<span><?=number_format($awazu_sumprice["K"])?>円</span>
		</div>
		<div class="col col-d">
			<label>D</label>
			<span><?=number_format($awazu_sumprice["D"])?>円</span>
		</div>
		<div class="col col-j">
			<label>J</label>
			<span><?=number_format($awazu_sumprice["J"])?>円</span>
		</div>
		<div class="col col-w">
			<label>W</label>
			<span><?=number_format($awazu_sumprice["W"])?>円</span>
		</div>
		<div class="col col-b">
			<label>B</label>
			<span><?=number_format($awazu_sumprice["B"])?>円</span>
		</div>
		<div class="col col-h">
			<label>H</label>
			<span><?=number_format($awazu_sumprice["H"])?>円</span>
		</div>
	</div>
	<div class="form-row form-group total-row">
		<div class="col-2 col-t">
			<label>Total</label>
		</div>
		<div class="col-2 col-t">
			<span><?=number_format(array_sum($awazu_sumprice))?>円</span>
		</div>
		<div class="col-8 col-t">
			<span style='display:block; height: 100%;'></span>
		</div>
	</div>
<?
}
?>

</div>


<?
// if(isset($_GET["test"])){
?>


<div id="shouhin_table">
<?
if(isset($product_data) AND (count($product_data) > 0)){
?>
	<div class="col-12">
		<label>買取商品</label>
	</div>
<?
for ($product_i=0; $product_i < count($product_data); $product_i++) {

	if($ecc_id == 117997){
		$product_ttl = "[".$product_data[$product_i]["Remarks"]."]　".$product_data[$product_i]["product_id"];
	}else{
		// $product_ttl = "[".($product_i+1)."]　".$product_data[$product_i]["product_id"];
		$product_ttl = "[".$product_data[$product_i]["saiban"]."]　".$product_data[$product_i]["product_id"];
	}



	// $category_id = $product_data[$product_i]["category_id"];
	// if($category_id != ''){
	// 	$query = "SELECT * FROM store_categories WHERE category_id={$category_id} limit 1 ";
	// 	$sql = mysql_query($query);
	// 	$res = mysql_fetch_assoc($sql);
	// 	$product_ttl .= "/".$res["category_name"];
	// }
	//
	// $sub_category_id1 = $product_data[$product_i]["sub_category_id1"];
	// if($sub_category_id1 != ''){
	// 	$query = "SELECT * FROM store_sub_categories WHERE id={$sub_category_id1} limit 1 ";
	// 	$sql = mysql_query($query);
	// 	$res = mysql_fetch_assoc($sql);
	// 	$product_ttl .= "/".$res["name"];
	// }



	$title = $product_data[$product_i]["title"];
	if($title != ''){
		$product_ttl .= "/".$product_data[$product_i]["title"];
	}

	$price = $product_data[$product_i]["price"];
	if($price != ''){
		$product_ttl .= "/".number_format($product_data[$product_i]["price"])."円";
	}

	$Destination_selling = $product_data[$product_i]["Destination_selling"];
	if($Destination_selling != ''){
		$product_ttl .= "/".$product_data[$product_i]["Destination_selling"];
	}

	$Finish = $product_data[$product_i]["Finish"];
	if($Finish != ''){
		$product_ttl .= "/".$product_data[$product_i]["Finish"];
	}

	$Discrimination = $product_data[$product_i]["Discrimination"];
	if($Discrimination != ''){
		$product_ttl .= "/".$product_data[$product_i]["Discrimination"];
	}

	$accessories = $product_data[$product_i]["accessories"];
	if($accessories != ''){
		$product_ttl .= "/".$product_data[$product_i]["accessories"];
	}
?>
		<div class="col"><?=$product_ttl?></div>
<?
}
?>

<?
}// end product_data
?>




<?
if(isset($seiyaku_product_data) AND (count($seiyaku_product_data) > 0)){
?>
	<div class="col-12">
		<label>【成約】買取商品</label>
	</div>
<?
for ($product_i=0; $product_i < count($seiyaku_product_data); $product_i++) {
	// $product_ttl = ($product_i+1)."　".$seiyaku_product_data[$product_i]["product_id"];
	$product_ttl = "[".$seiyaku_product_data[$product_i]["saiban"]."]　".$seiyaku_product_data[$product_i]["product_id"];

	$category_id = $seiyaku_product_data[$product_i]["category_id"];
	if($category_id != ''){
		$query = "SELECT * FROM store_categories WHERE category_id={$category_id} limit 1 ";
		$sql = mysql_query($query);
		$res = mysql_fetch_assoc($sql);
		$product_ttl .= "/".$res["category_name"];
	}

	$sub_category_id1 = $seiyaku_product_data[$product_i]["sub_category_id1"];
	if($sub_category_id1 != ''){
		$query = "SELECT * FROM store_sub_categories WHERE id={$sub_category_id1} limit 1 ";
		$sql = mysql_query($query);
		$res = mysql_fetch_assoc($sql);
		$product_ttl .= "/".$res["name"];
	}



	$title = $seiyaku_product_data[$product_i]["title"];
	if($title != ''){
		$product_ttl .= "/".$seiyaku_product_data[$product_i]["title"];
	}

	$price = $seiyaku_product_data[$product_i]["price"];
	if($price != ''){
		$product_ttl .= "/".number_format($seiyaku_product_data[$product_i]["price"])."円";
	}

	$Destination_selling = $seiyaku_product_data[$product_i]["Destination_selling"];
	if($Destination_selling != ''){
		$product_ttl .= "/".$seiyaku_product_data[$product_i]["Destination_selling"];
	}

	$Finish = $seiyaku_product_data[$product_i]["Finish"];
	if($Finish != ''){
		$product_ttl .= "/".$seiyaku_product_data[$product_i]["Finish"];
	}

	$Discrimination = $seiyaku_product_data[$product_i]["Discrimination"];
	if($Discrimination != ''){
		$product_ttl .= "/".$seiyaku_product_data[$product_i]["Discrimination"];
	}

	$accessories = $seiyaku_product_data[$product_i]["accessories"];
	if($accessories != ''){
		$product_ttl .= "/".$seiyaku_product_data[$product_i]["accessories"];
	}
?>
		<div class="col"><?=$product_ttl?></div>
<?
}
?>

<?
}// end seiyaku_product_data
?>




<?
if(isset($awazu_product_data) AND (count($awazu_product_data) > 0)){
?>
	<div class="col-12">
		<label>【合わず】買取商品</label>
	</div>
<?
for ($product_i=0; $product_i < count($awazu_product_data); $product_i++) {
	// $product_ttl = ($product_i+1)."　".$awazu_product_data[$product_i]["product_id"];
	$product_ttl = "[".$awazu_product_data[$product_i]["saiban"]."]　".$awazu_product_data[$product_i]["product_id"];

	$category_id = $awazu_product_data[$product_i]["category_id"];
	if($category_id != ''){
		$query = "SELECT * FROM store_categories WHERE category_id={$category_id} limit 1 ";
		$sql = mysql_query($query);
		$res = mysql_fetch_assoc($sql);
		$product_ttl .= "/".$res["category_name"];
	}

	$sub_category_id1 = $awazu_product_data[$product_i]["sub_category_id1"];
	if($sub_category_id1 != ''){
		$query = "SELECT * FROM store_sub_categories WHERE id={$sub_category_id1} limit 1 ";
		$sql = mysql_query($query);
		$res = mysql_fetch_assoc($sql);
		$product_ttl .= "/".$res["name"];
	}



	$title = $awazu_product_data[$product_i]["title"];
	if($title != ''){
		$product_ttl .= "/".$awazu_product_data[$product_i]["title"];
	}

	$price = $awazu_product_data[$product_i]["price"];
	if($price != ''){
		$product_ttl .= "/".number_format($awazu_product_data[$product_i]["price"])."円";
	}

	$Destination_selling = $awazu_product_data[$product_i]["Destination_selling"];
	if($Destination_selling != ''){
		$product_ttl .= "/".$awazu_product_data[$product_i]["Destination_selling"];
	}

	$Finish = $awazu_product_data[$product_i]["Finish"];
	if($Finish != ''){
		$product_ttl .= "/".$awazu_product_data[$product_i]["Finish"];
	}

	$Discrimination = $awazu_product_data[$product_i]["Discrimination"];
	if($Discrimination != ''){
		$product_ttl .= "/".$awazu_product_data[$product_i]["Discrimination"];
	}

	$accessories = $awazu_product_data[$product_i]["accessories"];
	if($accessories != ''){
		$product_ttl .= "/".$awazu_product_data[$product_i]["accessories"];
	}
?>
		<div class="col"><?=$product_ttl?></div>
<?
}
?>

<?
}// end awazu_product_data
?>










</div>

<?php
// $satei_meisai_arr[$meisai_state];
if(isset($satei_meisai_arr['satei'])){
	$sateimeisai = $satei_meisai_arr['satei'];
}elseif(isset($satei_meisai_arr['seiyaku'])){
	$sateimeisai = $satei_meisai_arr['seiyaku'];
	if(isset($satei_meisai_arr['awazu'])){
		$sateimeisai .= "<br><br>【返却明細】<br>".$satei_meisai_arr['awazu'];
	}
}
if(isset($sateimeisai)){
?>
	<input type="hidden" name="sateimeisai" value="<?=$sateimeisai?>" >
<?php
}else{
?>
	<input type="hidden" name="sateimeisai" value="" >
<?
}
?>






<?
}//end if
?>
		<table class = "mail_content_func_table">
		 <tr>
			 <th>本文１</th>
			 <td><div class="btn btn-info open_close_btn" target_input = 'str_pc'>非表示</div></td>
			 <td><a class="btn btn-success copy_btn" target_input = 'str_pc' tabindex="0">コピー</a></td>
		 </tr>
		</table>
		<div class="not_replace_str_pc d-none">
			<?=$not_replace_str_pc?>
		</div>
		<div class="form-row form-group" target_input = 'str_pc'>
			<!-- <label class="control-label" for="str_pcInput">本文１</label> -->
			<textarea type="text" class="form-control" id="str_pcInput" name="str_pcInput" target_input = 'str_pc' tabindex="1"><?=$str_pc?></textarea>
		</div>

		<table class = "mail_content_func_table">
		 <tr>
			 <th>本文２</th>
			 <td><div class="btn btn-info open_close_btn" target_input = 'str2_pc'>表示</div></td>
			 <td><a class="btn btn-success copy_btn" target_input = 'str2_pc' tabindex="0">コピー</a></td>
		 </tr>
		</table>

		<div class="form-row form-group d-none" target_input = 'str2_pc'>
			<!-- <label class="control-label" for="str2_pcInput">本文２</label> -->
			<textarea type="text" class="form-control" id="str2_pcInput" name="str2_pcInput" target_input = 'str2_pc' tabindex="1"><?=$str2_pc?></textarea>
		</div>

		<table class = "mail_content_func_table">
		 <tr>
			 <th>署名</th>
			 <td><div class="btn btn-info open_close_btn" target_input = 'shomei'>表示</div></td>
			 <td><a class="btn btn-success copy_btn" target_input = 'shomei' tabindex="1">コピー</a></td>
		 </tr>
		</table>

		<div class="form-row form-group d-none" target_input = 'shomei'>
			<!-- <label class="control-label" for="str3_pcInput">署名</label> -->
			<textarea type="text" class="form-control" id="shomeiInput" name="shomeiInput" target_input = 'shomei' tabindex="1"><?=$shomei?></textarea>
		</div>

		<div class="form-row form-group">
			<button type="button" class="control-label btn btn-outline-primary btn-block" role="button" id="sousin_pcInput" tabindex="0">送信</button>
		</div>

		<button type="button" class="control-label btn btn-outline-primary btn-block" role="button" id="fixed_btn" tabindex="0">送<br>信</button>
	</form>

<?
} //end else (通常form)
?>





<style type="text/css">
#fixed_btn {
    position: fixed;
    right: 15px;
    top: 50%;
    width: 40px;
    height: 80%;
    -webkit-transform: translateY(-50%);
       -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
         -o-transform: translateY(-50%);
            transform: translateY(-50%);
}
/*

対応デバイス	画面サイズ	prefixの指定方法（*は数値）	prefixの意味
デスクトップ	1200px以上	col-lg-*	Large
デスクトップ	992px以上、1200px未満	col-md-*	Medium
タブレット	768px以上、992px未満	col-sm-*	Small
モバイル	768px以下	col-xs-*	Xtra Small

*/

	#tmp_sub_categoryInput .disabled , #templateInput .disabled{
		display: none;
	}
	.control-label{
		font-size: 12px;
	}
	.form-control{
		font-size: 12px;
	}
	textarea.form-control{
		/*max-height: 400px;*/
	}
	#sousin_pcInput{
		margin-bottom: 100px;
	}


	#category_table{
		border-right: 1px solid #ccc;
	    margin-bottom: 15px;
	}
	#category_table .col-12 label{
		background-color: #111;
		color: #fff;
	}
	#category_table label, #category_table span, #shouhin_table label{
		padding: 5px;
		border-bottom: 1px solid #ccc;
		border-left: 1px solid #ccc;
		margin: 0;
		display: block;
		text-align: center;
	}
	#category_table span{
		text-align: right;
	}
	#category_table .form-row>div {
	    padding: 0;
	}
	#category_table .form-row {
	    margin: 0;
	}
#category_table label{
	text-align: center;
}
#category_table .col-k label{
	background-color: #f90;
}
#category_table .col-d label{
	background-color: #0ff;
}
#category_table .col-j label{
	background-color: #0f0;
}
#category_table .col-w label{
	background-color: #ccc;
}
#category_table .col-b label{
	background-color: #f0f;
}
#category_table .col-h label{
	background-color: #ff0;
}
.total-row .col-t.col-2 label{
	background-color: #00f;
	color: #fff;
}
#category_table .col-t+.col-t+.col-t span{
	background-color: #ccc;
}
#shouhin_table .col-12{
	background-color: #111;
	color: #fff;
	padding: 0;
}
#shouhin_table .col {
    font-size: 14px;
    line-height: 1.2;
    border: 1px solid #bbb;
    padding: 5px;
    border-top: none;
}
.alert .row:first-child{
	text-align: center;
}
.alert-danger {
    color: #721c24;
    background-color: #f00;
    border-color: #a00;
    color: #fff;
    border-width: 5px;
    font-size: 36px;
}
.line_chat_btn {
    background-image: linear-gradient(-225deg, #20E2D7 0%, #F9FEA5 100%);
    margin: 15px 0px;
    width: 125px;
    border-radius: 5px;
    padding: 5px 0px;
}
.line_chat_btn a {
    display: block;
    text-align: center;
    color: #346833;
}
.btn.open_close_btn, .btn.copy_btn {
    /* margin: 0 1rem 0.5rem 1rem; */
    font-size: 11px;
		width: 100%;
}
.mail_content_func_table{
	width: 40%;
	/* border: 1px solid #9e9e9e; */
	margin: 0.5rem 0;
}
.mail_content_func_table th {
  text-align: center;
  font-weight: normal;
  color: #fff;
  background: #9e9e9e;
	width:25%;
}
.satei_comment_box {
	background: #629cd8;
  color: #fff;
  border-radius: 2zpx;
  padding: 0.5rem 1rem;
  margin-bottom: 0.5rem;
}

#insert_satei_comment{
	height: 60px!important;
}
</style>


<script type="text/javascript">
	<?php if($flag_name != ''){?>
		// $("#insert_satei_comment").prop('readonly', true);
		// $("#displayNameInput").prop('readonly', true);
		// $("#subject_pcInput").prop('readonly', true);
		// $("#str_headerInput").prop('readonly', true);
		// $("#str_pcInput").prop('readonly', true);
		// $("#str2_pcInput").prop('readonly', true);
		// $("#shomeiInput").prop('readonly', true);
	<?php } ?>


	$("#tmp_categoryInput").change(function(){
		$("#tmp_sub_categoryInput option").addClass("disabled").removeClass("enabled");
		$("#tmp_sub_categoryInput option[data='"+$(this).val()+"']").removeClass("disabled").addClass("enabled");
		if( $("#tmp_sub_categoryInput").attr("data") != $(this).val() ){
			$("#tmp_sub_categoryInput").val($("#tmp_sub_categoryInput .enabled:first").val());
		}
		$("#tmp_sub_categoryInput").change();
	});
	// $("#tmp_categoryInput").change();

	$("#tmp_sub_categoryInput").change(function(){
		$("#templateInput option").addClass("disabled").removeClass("enabled");
		$("#templateInput option[data='"+$(this).val()+"']").removeClass("disabled").addClass("enabled");
		if( $("#templateInput").attr("data") != $(this).val() ){
			$("#templateInput").val($("#templateInput .enabled:first").val());
		}
	});
	// $("#tmp_sub_categoryInput").change();


	$("#tmp_sub_categoryInput option").addClass("disabled");
	$("#tmp_sub_categoryInput option[data='<?=$template_category_id?>']").removeClass("disabled");
	$("#templateInput option").addClass("disabled");
	$("#templateInput option[data='<?=$sub_category_id?>']").removeClass("disabled");


	var templateInput_val;
	var flag_name_val;
	$("#reload").click(function(){
		templateInput_val = $("#templateInput").val();
		flag_name_val = $("#flag_name").val();
		if(templateInput_val == ''){

		}else{
			window.location.href = '/include/mail/input_tougou.php?tmp_id='+templateInput_val+'&ecc_id=<?=$ecc_id?>&Eoc_takuhai_id=<?=$Eoc_takuhai_id?>&is_many_satei=<?=$is_many_satei?>&flag_name=' + flag_name_val;
		}
	});


	$("#tmp_categoryInput").focus();



	$('textarea').each(function(){
		var lineHeight = parseInt($(this).css('lineHeight'));
		var lines = ($(this).val() + '\n').match(/\n/g).length;
		if(lineHeight * lines > 400){
			$(this).height(450);
		}else{
			$(this).height(lineHeight * lines);
		}
	})


	$("#sousin_pcInput, #reload, #fixed_btn").focus(function() {
		$(this).addClass('active');
	});
	$("#sousin_pcInput, #reload, #fixed_btn").focusout(function() {
		$(this).removeClass('active');
	});
	$("#sousin_pcInput, #fixed_btn").click(function() {
	// ini_set("display_errors",1);
		if($("#kokyaku_check").prop("checked")==true){
			$("#send_form").submit();
		}else{
			window.alert("顧客チェックがチェックされていません。確認してチェックして下さい！");
		}
	});






</script>


<?php

if(
	((
		($replace_data["Eoc"]["mail1"] == "")
		&&
		($replace_data["Eoc"]["mail2"] == "")
	)
	OR
	(
		($replace_data["Eoc"]["mail1"] == "rifa@urlounge.co.jp")
		&&
		($replace_data["Eoc"]["mail2"] == "")
	)
	OR
	(
		($replace_data["Eoc"]["mail1"] == "")
		&&
		($replace_data["Eoc"]["mail2"] == "rifa@urlounge.co.jp")
	))
	&& 
	($flag_name === '')
){
?>
<audio id="bgm1" preload loop autoplay>
	<source src="/include/sounds/tel_1.mp3" type="audio/mp3">
</audio>
<!-- <button id="btn-play" type="button"><i class="fas fa-play"></i></button> -->
<!-- <iframe src="/include/sounds/tel_1.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe> -->

<div class="black_out">
	<strong>メールアドレスがありません。<br>電話してください。<br>※この画面をクリックしたら通常通り作業出来ます。</strong>
</div>
<style media="all">
	.black_out{
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(0,0,0,0.7);
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.black_out strong{
		color: #fff;
		font-size: 50px;
		font-weight: bold;
	}
</style>
<?php
}
?>

<script type="text/javascript">
	var mail1 = "<?=$replace_data["Eoc"]["mail1"]?>"
	var mail2 = "<?=$replace_data["Eoc"]["mail2"]?>"
	if((mail1 == "") && (mail2 == "")){
		// alert("メールアドレスがありません。先にメールアドレスを設定してください。")
		// if(window.confirm("メールアドレスがありません。先にメールアドレスを設定してください。")){
		// }else{
		// }
		// window.location.href = "https://rifa.life/shop5/Eoc_list.php?q=(ecc_id~equals~<?=$replace_data["Eoc"]["ecc_id"]?>)"
	}
	$("#btn-play").click(function(event) {
		const bgm1 = document.querySelector("#bgm1")
		bgm1.play();
	});

	$(".black_out").click(function(event) {
		$(".black_out").remove()
	});



	$('.copy_btn').click(function(event) {
		console.log($(this));
		var target_input = $(this).attr('target_input');
		target_cls = ".form-control[target_input = '" + target_input + "']";
		target_text = $(target_cls).val();
		if(target_text == ""){
			target_text = " ";
		}
		console.log(target_text)
		let textarea = $('<textarea></textarea>');
		// テキストエリアに文章を挿入
		textarea.val(target_text);
		//　テキストエリアを挿入
		$(this).append(textarea);
		//　テキストエリアを選択
		textarea.select();
		// コピー
		document.execCommand('copy');
		// テキストエリアの削除
		textarea.remove();
	})

	$(document).on('keyup','.copy_btn', function(event){
		if(event.keyCode == 13){
			$(this).click();
		}
	})

	$('.open_close_btn').click(function(event) {
		console.log($(this));
		var target_input = $(this).attr('target_input');
		target_cls = ".form-group[target_input = '" + target_input + "']";
		$(target_cls).toggleClass("d-none");
		if($(target_cls).hasClass("d-none")){
			$(this).text('表示')
		}else{
			$(this).text('非表示')
		}
	})
	$(document).on('keyup', '#insert_satei_comment', function(){
		var reflect_text = $(this).val();
		console.log(reflect_text);
		var not_replace_str_pc = $('.not_replace_str_pc').text();

		// console.log(not_replace_str_pc);
		var replaced_str_pc = not_replace_str_pc.replace("★コメント★", reflect_text)
		// console.log(replaced_str_pc);
		$('#str_pcInput').text(replaced_str_pc);
	})
	window.onload = function() {
		<?php
		if($auto_mail_send == "on"){
		?>
		$("#send_form").submit();
		// console.log(y)
		<?php
		}
 		?>
	}
</script>

</body>
</html>
