<style type="text/css">
table td.bs-labelcell[data-field="tel"]
,table td.bs-labelcell[data-field="tel2"]
,table td.bs-labelcell[data-field="zip1"]
,table td.bs-labelcell[data-field="zip2"]
,table td.bs-labelcell[data-field="address1"]
,table td.bs-labelcell[data-field="address2"]
,table td.bs-labelcell[data-field="address3"]{
  font-weight: bold;
  background-color: #ff0;
}
table td.bs-labelcell[data-field="tel"] label
,table td.bs-labelcell[data-field="tel2"] label
,table td.bs-labelcell[data-field="zip1"] label
,table td.bs-labelcell[data-field="zip2"] label
,table td.bs-labelcell[data-field="address1"] label
,table td.bs-labelcell[data-field="address2"] label
,table td.bs-labelcell[data-field="address3"] label{
  color: #111;
}

table td.bs-valuecell[data-field="tel"] span
,table td.bs-valuecell[data-field="tel2"] span
,table td.bs-valuecell[data-field="zip1"] span
,table td.bs-valuecell[data-field="zip2"] span
,table td.bs-valuecell[data-field="address1"] span
,table td.bs-valuecell[data-field="address2"] span
,table td.bs-valuecell[data-field="address3"] span{
  font-size: 18px;
  font-weight: bold;
}
table td.bs-labelcell label {
    min-width: max-content;
}


.bs-gridcell span {
    width: auto!important;
}
.bs-gridcell input[type="text"] {
    min-width: 100px!important;
    width: 100px!important;
}
table td.bs-labelcell {
    background-color: #4fb2ea;
}
table td.bs-labelcell label {
    font-weight: normal;
    color: #fff;
}
table td.bs-valuecell textarea[id*='remark']{
	width: 500px!important;
    height: 150px!important;
}
table td.bs-valuecell>span[id*='remark'],table td.bs-valuecell>span[id*='mail1'],table td.bs-valuecell>span[id*='mail2'] {
    width: max-content;
    max-width: 400px;
}
table td.bs-labelcell {
    background-color: #4fb2ea;
    width: 200px;
    min-width: 150px;
    padding: 0 5px!important;
    text-align: left;
}
table td.bs-valuecell {
    padding: 0px!important;
}
table td.bs-valuecell>span {
    display: block;
    width: 200px!important;
    border-bottom: 1px solid #ddd;
    padding: 5px 5px;
}
.panel-heading a.glyphicon {
    width: 50px;
    text-align: center;
    font-size: 25px;
}
a.sagawa_shuuka_irai_btn.btn {
    border: 1px solid #06aeff;
    background: #30bcff;
    color: #fff;
    margin: 10px;
}
table td.bs-valuecell[data-field='space_3'] .btn.btn-default{
    background: #ff0;
    font-size: 20px;
    margin: 10px;
    display: block;
}
.use_history{
    margin-top: 10px;
    padding: 15px;
    width: 100%;
    background: #eee;
}
.use_history.純新規{
    background: #f3dddd;
}
.use_history.再来{
    background: #ddf3dd;
}
.use_history.再チャレ{
    background: #ddddf3;
}
.line-box a{
    word-break: break-all;
}
</style>



<script type="text/javascript">
	$(window).load(function(){
		$(".rnr-searchcontrol input[id*='ecc_id']").focus();
	})
</script>

<script type="text/javascript">
    $(window).load(function(){


        $mail_link_btn_nav = '<li class="dropdown"><a class="dropdown-toggle" data-toggle="nested-dropdown" aria-haspopup="true" aria-expanded="false" id="itemlink110" href="shouhin_list.php"> メール送信<span class="caret"></span></a><ul class="dropdown-menu" id="append_mail_nav"></ul></li>';

        $(".navbar-nav").append($mail_link_btn_nav);

        $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="スピード一括送信" href="/mailsystem/send_mail/regist_mail_all.php" target="_blank"> スピード一括送信</a></li>');
        $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="kin到着" href="/mailsystem/send_mail/all1/regist_mail_all.php" target="_blank"> kin到着</a></li>');
        $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="bra到着" href="/mailsystem/send_mail/all1_bra/regist_mail_all.php" target="_blank"> bra到着</a></li>');
        $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="佐川一斉送信" href="/mailsystem/send_mail/all2/regist_mail_all.php" target="_blank"> 佐川一斉送信</a></li>');
        $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="その他一斉送信" href="/mailsystem/send_mail/all3/regist_mail_all.php" target="_blank"> その他一斉送信</a></li>');
        $("#append_mail_nav").append('<li class="  "><a id="" itemtitle="宅配完了一斉送信" href="/mailsystem/send_mail/takuhai/regist_mail_all.php" target="_blank"> 宅配完了一斉送信</a></li>');

        $(".sidebar").find("input[id*='value_tel2']").focus();

        $append_btn = '';
        $append_btn += '<a class="sagawa_shuuka_irai_btn btn" target="_blank" href="http://rifa.life/lounge_API/wkhtml/sagawa_shuuka_irai/index.php" data-container="add_delete">';
        $append_btn += '★新★佐川集荷依頼FAX';
        $append_btn += '</a>';
        $("div[data-container='add_delete'] p").append($append_btn);

        // var arg  = new Object;
        // url = location.search.substring(1).split('&');
        // for(i=0; url[i]; i++) {
        //   var k = url[i].split('=');
        // }
        // var ecc_id = arg.editid1;
        // console.log(ecc_id);
        console.log(11111111111);
        // $("span[id^='readonly_value_space_10_']").parent().parent().append('<a class ="btn btn-primary" href=>身分証アップロード画面</a>');
    });
</script>
