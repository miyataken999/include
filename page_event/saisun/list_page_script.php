<script type="text/javascript">
	$(window).load(function(){
		$(".sidebar").find("input[id*='value_product_id']").focus();
	});
<?php
$url = $_SERVER["REQUEST_URI"];
$uid = $_SESSION["UserData"]["user_id"];
// if(stristr($url,"/shop5test/")){
?>

function clearInputVal(){
	$("#product_id_area").val('');
}

$(window).load(function() {
	$link_btn = '';
  $link_btn += '<form id="print_form" target="_blank" action="https://rifa.life/lounge_API/brother/print_only.php" method="post">';
  // $link_btn += '<input type="text" name="box_id" value="">';
  $link_btn += '<textarea name="product_id_area" id="product_id_area" rows="3" cols="30" placeholder="ここにSEQを入れればラベルでます。ステータスなど変更されません。"></textarea>';
  $link_btn += '<input type="hidden" name="user_id" value="<?=$uid?>" readonly>';
  $link_btn += '<input type="submit" name="" value="ラベル発行">';
  $link_btn += '</form>';
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
	.bs-sidebar-screenbound{
		max-width: 2000px;
	}
	.bs-left:not([data-hidden]) + .bs-screenwidth > * > .bs-grid, .sidebar:not([data-hidden]) + * .bs-sidebar-screenbound > * > .bs-grid{
		width: 1350px!important;
	}
	.bs-sidebar-main td span[id*='ecc_id'] {
	    width: max-content;
	    text-align: left;
	}
</style>
<?php
// $url = $_SERVER["REQUEST_URI"];
// echo $url;
// if(strstr($url,"/shop5test/")){
// 	var_dump($_SESSION);
// }
$csv_download_flag = $_GET["csv_download_flag"];
$file_name = $_GET["file_name"];
if($csv_download_flag=="on"){
	// echo 111111111111111111111111111;
	// echo "https://rifa.life/include/evacommon/$file_name";
?>
<script type = "text/javascript">
// console.log(111111111111111111111111111)
var url = "https://rifa.life/include/evacommon/<?=$file_name?>";
// console.log(url);
window.open(url);
</script>
<?php
}
?>
