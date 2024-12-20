<style type="text/css">
	.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12{
		text-align: left;
	}
	.open_mail_input{
		max-width: 500px!important;
	}
	.JCLRgrips {
	    width: auto!important;
	}
	.tab-pane[id*='Eoc_takuhai'] span[id*='bikou'] {
	    width: 100px;
	}
	td span[id*="mail"] {
	    overflow-wrap: break-word;
	    max-width: 200px;
	}
	textarea[id*='kit_detail']{
		height: 200px!important;
	}
</style>
<script type="text/javascript">
	$(window).load(function(){


		// $mail_link_btn_nav = '<li class="dropdown"><a class="dropdown-toggle" data-toggle="nested-dropdown" aria-haspopup="true" aria-expanded="false" id="itemlink110" href="shouhin_list.php"> メール送信<span class="caret"></span></a><ul class="dropdown-menu" id="append_mail_nav"></ul></li>';

		// $(".navbar-nav").append($mail_link_btn_nav);

		// $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="スピード一括送信" href="/mailsystem/send_mail/regist_mail_all.php" target="_blank"> スピード一括送信</a></li>');
		// $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="到着一斉送信" href="/mailsystem/send_mail/all1/regist_mail_all.php" target="_blank"> 到着一斉送信</a></li>');
		// $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="佐川一斉送信" href="/mailsystem/send_mail/all2/regist_mail_all.php" target="_blank"> 佐川一斉送信</a></li>');
		// $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="その他一斉送信" href="/mailsystem/send_mail/all3/regist_mail_all.php" target="_blank"> その他一斉送信</a></li>');

		// $(".sidebar").find("input[id*='value_ecc_id']").focus();


		$mail_link_btn_nav = '<a id="" class="rnr-button btn btn-default" itemtitle="宅配キットエクスポート" href="/include/mailingkit/kitprint.php" target="_blank"> 宅配キットエクスポート</a>';
		$mail_link_btn_nav += '→ロジザードへアップする。<br>';
		$mail_link_btn_nav += '<a id="" class="rnr-button btn btn-default" itemtitle="配送番号インポート" href="/include/mailingkit/kit_csv.php"> 配送番号インポート</a>';
		$mail_link_btn_nav += '←ロジザードからインポートする。<br>';


		$(".bs-sidebar-screenbound+div").append($mail_link_btn_nav);



	});
</script>
