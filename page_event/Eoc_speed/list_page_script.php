<style type="text/css">
	div[data-container="center"] td span {
	    width: max-content;
	}
	.btn-blue{
		background-image: linear-gradient(#54c8eb, #5dc2fd 60%, #14a1cc);
    color: #fff;
	}
	.btn-orange{
		background-image: linear-gradient(#ffbe6d, #f7a95a 60%, #f37254);
    color: #fff;
	}
	a.sagawa_shuuka_irai_btn.btn {
	    border: 1px solid #06aeff;
	    background: #30bcff;
	    color: #fff;
	    margin: 10px;
	}

</style>
<script type="text/javascript">
	$(window).load(function() {
		$link_btn = '';
		$link_btn += '<a class="rnr-button btn btn-blue" target="_blank" href="http://rifa.life/lounge_API/brother/print_speed.php" typeid="ib">ラベル発行（庶務島プリンタ）</a>';
		$link_btn += '<a class="rnr-button btn btn-orange" target="_blank" href="http://rifa.life/lounge_API/brother/print_speed.php?printer=konpou" typeid="ib">ラベル発行（梱包デスクプリンタ）</a>';
		$link_btn += '<br>';
		$link_btn += '<br>';
		$link_btn += '<a class="rnr-button btn btn-primary" target="_blank" href="https://rifa.life/include/mailingkit/speed_print.php" typeid="ib">ロジザード出荷用お申込確認書</a>';
		$link_btn += '<br>';
		$link_btn += '<br>';
		$link_btn += '<a class="sagawa_shuuka_irai_btn btn" target="_blank" href="http://rifa.life/lounge_API/wkhtml/sagawa_shuuka_irai/index.php" data-container="add_delete">';
		$link_btn += '★新★佐川集荷依頼FAX';
		$link_btn += '</a>';


		$(".rnr-hfiller").append($link_btn);

	});
</script>
