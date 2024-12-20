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
	td[data-field="bank_name"] span {
	    width: max-content;
	}

	body .table>thead:first-child>tr:first-child>th[data-field='seiyakukin'],body .table>thead:first-child>tr:first-child>td[data-field='seiyakukin'],body .table .bs-gridcell[data-field='seiyakukin']{
		background-color: #ff0!important;
		color: #111;
	}
	.alert_origin .alert-danger {
		text-align: left;
	    color: #721c24;
	    background-color: #f00;
	    border-color: #a00;
	    color: #fff;
	    margin: 5px;
	}
	.alert_origin .alert_details table {
	    min-width: 50%;
	    margin: 10px;
	}
<?if($_GET["send"] == "after"){?>
	.rnr-rowcontainer p a.rnr-button:nth-child(11) {
	    background: #ff0;
	    border: 5px solid #111;
	    font-size: 50px;
	    color: #111;
	    padding: 40px;
	}
<?}?>
.line_chat_form {
	text-align: center;
	border: 1px solid #888;
	padding: 10px 5px;
	background: #18bc34;
	color: #fff;
}
.line_chat_form form textarea{
	height:150px;
}
table.Eoc_details_table.line_chat_content {
    margin: 10px 0;
    width: 75%;
}
table.Eoc_details_table.line_chat_content th{
	width:20px;
	background: #18bc34;
}
a.sagawa_shuuka_irai_btn.btn, a.haisouhosyo_btn.btn {
		border: 1px solid #06aeff;
		background: #30bcff;
		color: #fff;
		margin: 10px;
}
</style>
<script type="text/javascript">
	$(window).load(function(){


		$mail_link_btn_nav = '<li class="dropdown"><a class="dropdown-toggle" data-toggle="nested-dropdown" aria-haspopup="true" aria-expanded="false" id="itemlink110" href="shouhin_list.php"> メール送信<span class="caret"></span></a><ul class="dropdown-menu" id="append_mail_nav"></ul></li>';

		$(".navbar-nav").append($mail_link_btn_nav);

		$("#append_mail_nav").append('<li class="  "><a id="" itemtitle="スピード一括送信" href="/mailsystem/send_mail/regist_mail_all.php" target="_blank"> スピード一括送信</a></li>');
		$("#append_mail_nav").append('<li class="  "><a id="" itemtitle="到着一斉送信" href="/mailsystem/send_mail/all1/regist_mail_all.php" target="_blank"> 到着一斉送信</a></li>');
		$("#append_mail_nav").append('<li class="  "><a id="" itemtitle="佐川一斉送信" href="/mailsystem/send_mail/all2/regist_mail_all.php" target="_blank"> 佐川一斉送信</a></li>');
		$("#append_mail_nav").append('<li class="  "><a id="" itemtitle="その他一斉送信" href="/mailsystem/send_mail/all3/regist_mail_all.php" target="_blank"> その他一斉送信</a></li>');
		$("#append_mail_nav").append('<li class="  "><a id="" itemtitle="宅配完了一斉送信" href="/mailsystem/send_mail/takuhai/regist_mail_all.php" target="_blank"> 宅配完了一斉送信</a></li>');


		$mail_link_btn_nav = '<li class="dropdown"><a class="dropdown-toggle" data-toggle="nested-dropdown" aria-haspopup="true" aria-expanded="false" id="itemlink110" href="shouhin_list.php"> メール送信【ベータ版】<span class="caret"></span></a><ul class="dropdown-menu" id="append_mail_nav_tougou"></ul></li>';

		$(".navbar-nav").append($mail_link_btn_nav);

		$("#append_mail_nav_tougou").append('<li class="  "><a id="" itemtitle="スピード一括送信" href="https://rifa.life/include/mail/input_tougou.php?tmp_id=6&flag_name=FLAG_SPEED" target="_blank"> スピード一括送信</a></li>');
		$("#append_mail_nav_tougou").append('<li class="  "><a id="" itemtitle="到着一斉送信" href="https://rifa.life/include/mail/input_tougou.php?tmp_id=79&flag_name=UN_REACHABLE" target="_blank"> 到着一斉送信</a></li>');
		$("#append_mail_nav_tougou").append('<li class="  "><a id="" itemtitle="佐川一斉送信" href="https://rifa.life/include/mail/input_tougou.php?tmp_id=6&flag_name=FLG_MAIL_SAGAWA" target="_blank"> 佐川一斉送信</a></li>');
		$("#append_mail_nav_tougou").append('<li class="  "><a id="" itemtitle="その他一斉送信" href="https://rifa.life/include/mail/input_tougou.php?tmp_id=6&flag_name=FLG_MAIL_OTHER" target="_blank"> その他一斉送信</a></li>');
		$("#append_mail_nav_tougou").append('<li class="  "><a id="" itemtitle="宅配完了一斉送信" href="https://rifa.life/include/mail/input_tougou.php?tmp_id=99&flag_name=kit_done_flag" target="_blank"> 宅配完了一斉送信</a></li>');






		$(".sidebar").find("input[id*='value_ecc_id']").focus();

<?php
if($_SESSION["uid"]){
	$uid = $_SESSION["uid"];
}else{
	$uid = '';
}
?>



		var letterHtml = '';
		letterHtml += '<form action="https://rifa.life/lounge_API/wkhtml/letterpack/index.php" method="get" target="_blank" id="letterPackForm">';
		letterHtml += '<input type="hidden" name="user_id" value="<?=$uid?>">';
		letterHtml += '<select name="text">';
		letterHtml += '<option value="見積り書在中">見積り書在中</option>';
		letterHtml += '<option value="書類在中">書類書在中</option>';
		letterHtml += '<option value="預かり書在中">預かり書在中</option>';
		letterHtml += '</select>';
		letterHtml += '<select name="color" >';
		letterHtml += '<option value="red">赤</option>';
		letterHtml += '<option value="blue">青</option>';
		letterHtml += '</select>';
		letterHtml += '<input type="submit" value="レターパック作成">';
		letterHtml += '</form>';
		letterHtml += '<a class="sagawa_shuuka_irai_btn btn" target="_blank" href="https://rifa.life/lounge_API/wkhtml/sagawa_shuuka_irai/index.php" data-container="add_delete">';
		letterHtml += '★新★佐川集荷依頼FAX';
		letterHtml += '</a>';
		letterHtml += '<a class="haisouhosyo_btn btn" target="_blank" href="https://rifa.life/evaProject/make_pdf/haisouhosyo" data-container="add_delete">';
		letterHtml += '配送補償PDF作成';
		letterHtml += '</a>';
		$("div[data-container='add_delete'] p").append(letterHtml);




		// $("#letterPackForm").submit(function(){
		// 	location.reload();
		// });



	});
</script>

<style type="text/css">
	select#kinsyou_auto_list {
	    /*position: fixed;*/
	    bottom: 0;
	    right: 0;
	    z-index: 10000000;
	}
</style>
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
