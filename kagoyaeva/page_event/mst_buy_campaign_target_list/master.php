<?
//全ヘッダー
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";

$masterkey1 = htmlspecialchars($_GET["masterkey1"]);
?>
<script type="text/javascript">
	$(window).load(function() {
		$link_btn = '<a class="rnr-button btn btn-default" href="/include/kagoyaeva/page_event/mst_buy_campaign_target_list/dia_add.php?content_id=<?=$masterkey1?>" typeid="ib">ダイヤ追加</a>';

		$(".bs-center .bs-navcontrolled").append($link_btn);
	});
</script>
