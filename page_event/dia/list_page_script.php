<?php
$url = $_SERVER["REQUEST_URI"];
$uid = $_SESSION["UserData"]["user_id"];
// if(stristr($url,"/shop5test/")){
?>
<script>
function clearInputVal(){
	$("#product_id_area").val('');
}

$(window).load(function() {
	$link_btn = '';
  $link_btn += '<form id="print_form" target="_blank" action="https://rifa.life/lounge_API/brother/print_only.php" method="post">';
  // $link_btn += '<input type="text" name="box_id" value="">';
  $link_btn += '<textarea name="product_id_area" id="product_id_area" rows="3" cols="30" placeholder="ここにSEQを入れればラベルでます。ステータスなど変更されません。"></textarea>';
	$link_btn += '<input type="hidden" name="user_id" value="<?=$uid?>" readonly>';
	$link_btn += '<input type="hidden" name="label_tmp" value="5" readonly>';
  $link_btn += '<input type="submit" name="" value="ラベル発行">';
  $link_btn += '</form>';
  $link_btn += '<div><a class="rnr-button btn btn-default" href="https://rifa.life/evaProject/batch_gross_profits">更新する</a></div>';
// $link_btn += '</div>';
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


<style type="text/css">
	.bs-gridcell .form-control[name*='DA_INTENSITY']
	,.bs-gridcell .form-control[name*='DA_OVERTONE']
	,.bs-gridcell .form-control[name*='DA_COLOR']
	,.bs-gridcell .form-control[name*='DA_CLARITY']
	,.bs-gridcell .form-control[name*='DA_CUT']
	,.bs-gridcell .form-control[name*='DA_POLISH']
	,.bs-gridcell .form-control[name*='DA_SYMMETRY']
	,.bs-gridcell .form-control[name*='DA_FLUO']
	,.bs-gridcell .form-control[name*='DA_COLOR_FLUO']
	{
		width: auto!important;
	}
</style>
