<script type="text/javascript">

<?php
$url = $_SERVER["REQUEST_URI"];
$uid = $_SESSION["UserData"]["user_id"];
// if(stristr($url,"/shop5test/")){



$label_query = "SELECT * from mst_label_layout where shouhin_for_labels_list=1 order by sort";
$label_rs = CustomQuery($label_query);

?>

function clearInputVal(){
	$("#product_id_area").val('');
}

$(window).load(function() {
	$link_btn = '';

	$link_btn += '<div>';
	$link_btn += '<div class="col-md-12">';
	$link_btn += '<h4 class="label_paragraph">SEQを改行区切りで入力し、送信してください。ステータスなどは変更されません。<br>※自動ラベル出力をつけていたら発行できないので注意してください。</h4>';
	$link_btn += '</div>';
	$link_btn += '<br clear="all">';
	$link_btn += '</div>';


	$link_btn += '<div class="">';
	$link_btn += '<div class="col-md-5">';
	$link_btn += '<div class="input_area">';
	$link_btn += '<h3>通常ラベル出力</h3>';

  $link_btn += '<form id="print_form" target="_blank" action="https://rifa.life/lounge_API/brother/print_only.php" method="post">';
  // $link_btn += '<input type="text" name="box_id" value="">';
  $link_btn += '<textarea name="product_id_area" id="product_id_area" rows="3" cols="30" placeholder="改行区切りのSEQ"></textarea>';
  $link_btn += '<input type="hidden" name="user_id" value="<?=$uid?>" readonly>';


	$link_btn += '<br>出力レイアウト：';
	$link_btn += '<select name="label_tmp" id="label_tmp">';

  <?php
  while($label_data = db_fetch_array($label_rs)){
  ?>
    $link_btn += '<option value="<?=$label_data["id"]?>"><?=$label_data["name"]?></option>';
  <?php
  }//end while
  ?>

  $link_btn += '</select>';


  $link_btn += '<br><input type="submit" name="" value="ラベル発行">';
  $link_btn += '</form>';
	$link_btn += '</div>';
	$link_btn += '</div>';
	$link_btn += '<div class="col-md-5">';
	$link_btn += '<div class="input_area">';

	$link_btn += '<h3>催事用ラベル出力</h3>';
	// $link_btn += '<a href="http://rifa.life/lounge_API/evaeva/change_currency_form.php" class="btn btn-default">催事用ラベル発行</a>';

	$link_btn += '<form target="_blank" action="http://rifa.life/lounge_API/evaeva/change_currency.php" method="post">';
	$link_btn += '<textarea id="seq_array" name="seq_array" rows="3" cols="30" placeholder="改行区切りのSEQ"></textarea>';
	$link_btn += '<br>';
	$link_btn += '出力レイアウト：';
	$link_btn += '<select name="label_tmp" id="label_tmp">';
	$link_btn += '<option value="saiji.lbx">18mm</option>';
	$link_btn += '<option value="loose_12mm.lbx">ルース用12mm</option>';
	$link_btn += '<option value="loose.lbx">ルース用6mm</option>';
	$link_btn += '</select>';
	$link_btn += '<br>';
	$link_btn += '表示通貨：';
	$link_btn += '<select name="pair">';
	$link_btn += '<option value="doru">ドル</option>';
	$link_btn += '<option value="gen">人民元</option>';
	$link_btn += '<option value="yen">円</option>';
	$link_btn += '</select>';
	$link_btn += '<br>';
	$link_btn += '<input type = "submit" value="ラベル発行">';
	$link_btn += '</form>';



	$link_btn += '</div>';
	$link_btn += '</div>';
	$link_btn += '<div class="col-md-2">';
	$link_btn += '</div>';
	$link_btn += '<br clear="all">';
	$link_btn += '</div>';




  $(".rnr-hfiller").append($link_btn);
	$("#print_form").submit(function(event) {
		setTimeout(clearInputVal, 2000);
		$("#product_id_area").focus();
	});
})
<?php
// }
?>
</script>
<style media="screen">
  #label_tmp{
    width: auto!important;
  }
	.label_paragraph{
		background-color: #f5f5f5;
		padding: 10px;
		border-radius: 3px;
	}
	.input_area{
		border: 1px solid #dcdcdc;
		padding: 20px 30px;
		border-radius: 3px;
	}
</style>
