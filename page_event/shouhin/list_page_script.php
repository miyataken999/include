<?php
$url = $_SERVER["REQUEST_URI"];
$uid = $_SESSION["UserData"]["user_id"];
// if(stristr($url,"/shop5test/")){
if (stristr($url, "/shop5test/")) {
	$print_url = "https://rifa.life/lounge_API/brother/print_only_test.php";
} else {
	$print_url = "https://rifa.life/lounge_API/brother/print_only.php";
}
?>
<script>
	function clearInputVal() {
		$("#product_id_area").val('');
	}

	$(window).load(function() {
		$link_btn = '';
		$link_btn += '<table>';
		$link_btn += '<tr>';

		$link_btn += '<td>';
		$link_btn += '<form id="print_form" target="_blank" action="<?= $print_url ?>" method="post">';
		// $link_btn += '<input type="text" name="box_id" value="">';
		$link_btn += '<textarea name="product_id_area" id="product_id_area" rows="3" cols="30" placeholder="ここにSEQを入れればラベルでます。ステータスなど変更されません。"></textarea>';
		$link_btn += '<input type="hidden" name="user_id" value="<?= $uid ?>" readonly>';
		$link_btn += '<input type="hidden" name="label_tmp" value="1" readonly>';
		$link_btn += '<input type="submit" name="" value="ラベル発行">';
		$link_btn += '</form>';
		$link_btn += '</td>';

		$link_btn += '<td>';
		$link_btn += '<a class="btn btn-primary" target="_blank" href="https://rifa.life/evaProject/batch_purchase_category/day">本日買取種別反映</a>';
		$link_btn += '<a class="btn btn-primary" target="_blank" href="https://rifa.life/evaProject/sales_report/three_month">即時販売先反映（3ヶ月）</a>';
		
		$link_btn += '</td>';
		$link_btn += '</tr>';
		$link_btn += '</table>';


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
	body .table>thead:first-child>tr:first-child>th[data-field='nyuukin_price'] {
		background-color: #0f0 !important;
		color: #111 !important;
	}

	.table>tbody>tr>td[data-field='nyuukin_price'] {
		background-color: #0f0 !important;
		color: #111 !important;
	}

	td[data-field="price_without_tax"].bs-gridcell.rnr-field-text span {
		text-align: right;
	}
</style>
<script type="text/javascript">
	$(window).load(function() {
		$(".sidebar").find("input[id*='value_product_id']").focus();
	});
</script>