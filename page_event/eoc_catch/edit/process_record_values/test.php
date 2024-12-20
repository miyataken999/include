<?//郵便番号自動入力ファイル取得?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>


<?
//$values['mail1'] = "aaaaaaaaaaaaaaaaaaa";

// Place event code here.
// Use "Add Action" button to add code snippets.
$values['updated_at'] = date("Y/m/d H:i:s");

if($values['registerd_id'] == "")
$values['registerd_id'] = $_SESSION["uid"];

//if($values['kaitori_staff_id'] == "")
//$values['kaitori_staff_id'] = $_SESSION["uid"];

if($values['_registerd_id'] == "")
$values['_registerd_id'] = $_SESSION["uid"];


if($values['mail_check_type'] == ""){
	$values['mail_check_type'] = 2;
}

if($values['dm_check_type'] == ""){
	$values['dm_check_type'] = 2;
}








$ecc_id = $values["ecc_id"];
$query = "SELECT * FROM Eoc_takuhai WHERE ecc_id={$ecc_id} AND `status` != 11 ORDER BY id DESC LIMIT 1";
$rs = CustomQuery($query);
$data = db_fetch_array($rs);
$masterkey1 = $data["id"];
if($data["id"] != ''){
	$Eoc_takuhai_id = $data["id"];
	$query = "SELECT * FROM Eoc_takuhai_events WHERE Eoc_takuhai_id={$Eoc_takuhai_id} LIMIT 1";
	$rs = CustomQuery($query);
	$data = db_fetch_array($rs);
	if($data["id"] != ''){
		$values["space_10"] = $masterkey1;
	}
}


if(($values["purchase_type"] == "") OR ($values["purchase_type"] == 0)){
	if($data["cv_site"] == "kinkaimasu.jp"){
		$values["purchase_type"] = 3;
	}elseif($data["cv_site"] == "brandkaimasu.com"){
		$values["purchase_type"] = 5;
	}elseif($data["cv_site"] == "diakaimasu.jp"){
		$values["purchase_type"] = 25;
	}else{
		$values["purchase_type"] = 3;
	}
}




//現在進行中のステータス「新規申込」「到着済」「成約あり」が複数あった場合
$query = "SELECT COUNT(id) AS ct FROM Eoc_takuhai WHERE ecc_id={$ecc_id} AND ((`status`=1) OR (`status`=4) OR (`status`=5)) ";
$rs = CustomQuery($query);
$data = db_fetch_array($rs);
$now_takuhai = $data["ct"];

if($now_takuhai > 1){
	$values["space_2"] = 'error';
}else{
	$values["space_2"] = '';
}




?>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script>
window.onload = function(){
	console.log("onload")
	//案内マニュアル
	var append_html = ''
	append_html += '<div id="syomuuketuke_manual_ttl">受付マニュアル開閉</div>'
	append_html += '<div id="syomuuketuke_manual" class="page_flow panel panel-default">'
	append_html += '<ol>'

	append_html += '<li><i class="page_flow_head">'
	append_html += '<i>1</i>'
	append_html += '「宅配　到着反映」クリック'
	append_html += '</i><i class="page_flow_body">'
	append_html += '宅配取引ST「到着済」になり、ページが自動更新されます。<strong>※タブのくるくるが止まるまで放置していてください。</strong>'
	append_html += '</i></li>'

	append_html += '<li><i class="page_flow_head">'
	append_html += '<i>2</i>'
	append_html += '到着チェック'
	append_html += '</i><i class="page_flow_body">'
	append_html += '買取種別を見てkin（diakaiもコチラ）・braを分けてください。'
	append_html += '</i></li>'

	append_html += '<li><i class="page_flow_head">'
	append_html += '<i>3</i>'
	append_html += '項目チェック'
	append_html += '</i><i class="page_flow_body">'
	append_html += '買取カードや宅配伝票を見ながら、黄色い項目を確認・入力してください。名前/性別/生年月日/住所/措置/電話番号/金融機関情報'
	append_html += '</i></li>'

	append_html += '<li><i class="page_flow_head">'
	append_html += '<i>4</i>'
	append_html += '宅配取引履歴'
	append_html += '</i><i class="page_flow_body">'
	append_html += '状況に応じてイベントを追加してください。多くはご身分証・金融機関情報関連です。'
	append_html += '</i></li>'

	append_html += '<li><i class="page_flow_head">'
	append_html += '<i>5</i>'
	append_html += '「保存」'
	append_html += '</i><i class="page_flow_body">'
	append_html += '一番下にあります。'
	append_html += '</i></li>'

	append_html += '<li><i class="page_flow_head">'
	append_html += '<i>6</i>'
	append_html += '「ラベル発行」'
	append_html += '</i><i class="page_flow_body">'
	append_html += '顧客SEQや宅配イベントの付いたシールが出ます。　<strong>※[自動ラベル]画面は閉じておいてください。</strong>'
	append_html += '</i></li>'

	append_html += '</ol>'
	append_html += '</div>'

	var editpage = document.querySelector('div[data-container=editpage]')
	editpage.insertAdjacentHTML('afterbegin',append_html);


	var kakunin_array = [
		'name1',
		'name2',
		'b1',
		'b2',
		'b3',
		'option11',
		'tel',
		'tel2',
		'bank_name',
		'bank_details_code',
		'bank_details_deposit_type',
		'bank_details_blunch_name',
		'bank_details_blunch_code',
		'bank_details_account_number',
		'bank_details_symbol',
		'bank_details_number',
		'bank_details_account_name',
		'address1',
		'address2',
		'address3'
	]
	kakunin_add(kakunin_array)
	$("#syomuuketuke_manual").hide();
	$("#syomuuketuke_manual_ttl").click(function(event){
		$("#syomuuketuke_manual").slideToggle(400)
	})
}

function kakunin_add(array){
	for (var i = 0; i < array.length; i++) {
		document.querySelectorAll('div[data-fieldname="' + array[i] + '"]').forEach(function(element) {
		  element.parentNode.classList.add('kakunin');
		});
	}
}


</script>
<style media="screen">
	.container.kakunin{
		background: #ff0;
	}
	.page_flow.page_flow{
		padding: 3px;
		margin: 10px 0;
		background: #f00;
	}
	.page_flow i {
	    font-style: normal;
	    font-size: 12px;
			padding: 2px 10px;
	}
	.page_flow ol {
	    padding: 0;
			margin: 0;
	}
	.page_flow ol li{
		display: flex;
		background: #fff;
	}
	.page_flow ol li:nth-of-type(even){
		background: #eee;
	}
	.page_flow_head{
		width: 20%;
	}
	.page_flow_body{
		width: 80%;
	}
	.page_flow_body strong{
		color: #f00;
	}
	.page_flow_head {
	    width: 20%;
	    background: aliceblue;
	    padding: 4px;
	}
	.container.container {
	    max-width: none;
	    width: auto;
	}
	a#______8_58, a#_______8_57, button#saveButton1 {
	    background: #ff0;
	    border: 5px solid #f00;
			color: #111;
			font-size: 18px;
	}
	div#syomuuketuke_manual_ttl {
    border: 1px solid #111;
    width: 140px;
    padding: 5px;
    background: #9dc0e6;
    margin-top: 5px;
	}
</style>
