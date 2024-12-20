<?//ここに各JSを一覧、追加と別記述でロードさせる?>
<div id="js_load_area"></div>

<?//ここに各JSを一覧、追加と別記述でロードさせる 元ページごとにロードエリアをわけ、関数名も個別化にする(js_load()だけはやめる)?>
<div id="js_load_area_awazu"></div>
<div id="js_load_area_Eoc"></div>
<div id="js_load_area_Eoc_chigins2"></div>
<div id="js_load_area_kaibutu"></div>
<div id="js_load_area_PMT_EV001"></div>
<div id="js_load_area_saisun"></div>
<div id="js_load_area_satei"></div>
<div id="js_load_area_shouhin"></div>
<div id="js_load_area_shouhin_batch"></div>
<div id="js_load_area_voice_sub_id_3"></div>

<!-- <script src="/include/evacommon/cookies.js" charset="utf-8"></script> -->

<script type="text/javascript">
jQuery(window).load(function(){

<?
//一覧ページの共通ファイル
if(
	(!stristr($current_page_pass, "dia_list.php"))
	 && (!stristr($current_page_pass, "kin_satei_list.php"))
	 && (!stristr($current_page_pass, "satei_of_jewelry_list.php"))
	 && (!stristr($current_page_pass, "mst_Eoc_received_event_contents_list.php"))
	 && (!stristr($current_page_pass, "mst_item_list.php"))
	 && (!stristr($current_page_pass, "mst_item_name_list.php"))
	 && (!stristr($current_page_pass, "shouhin_list.php"))
	 && (!stristr($current_page_pass, "shouhin_batch_list.php"))
	 && (!stristr($current_page_pass, "chohyo_by_seihin_result_list.php"))
	 && (!stristr($current_page_pass, "market_product_performance_list.php"))
	 && (!stristr($current_page_pass, "gold_check_item_list.php"))
	 && (!stristr($current_page_pass, "gold_check_list.php"))
	 && (!stristr($current_page_pass, "sorting_batch_list.php"))
	 && (!stristr($current_page_pass, "market_product_performance_original_list.php"))
	 // && (!stristr($current_page_pass, "satei_of_brand1_list.php"))
	 && (!stristr($current_page_pass, "satei_of_jewelry_list.php"))
	 && (!stristr($current_page_pass, "market_product_performance_original_list.php"))
	 && (!stristr($current_page_pass, "buy_campaign_data_list.php"))
	){
	//閉じるの回避
?>
	jQuery("[data-field=gold_property]").hide();

	jQuery("[data-field=ichiba_title]").hide();
	jQuery("[data-field=Gram]").hide();
	jQuery("[data-field=Parent_stone]").hide();
	jQuery("[data-field=Aside_stone]").hide();
	jQuery("[data-field=Appraiser]").hide();
	jQuery("[data-field=Remarks]").hide();

	jQuery("[data-field=price_per_gram]").hide();
	jQuery("[data-field=price_per_parent_stone]").hide();
	jQuery("[data-field=price_per_aside_stone]").hide();

	jQuery("[data-field=motif]").hide();
	jQuery("[data-field=Setting]").hide();
	jQuery("[data-field=processing]").hide();
	jQuery("[data-field=Ring_size]").hide();

	jQuery("[data-field=designer]").hide();

	jQuery("[data-field=hahakai]").hide();
	jQuery("[data-field=effect]").hide();
	jQuery("[data-field=shape]").hide();
	jQuery("[data-field=cutting_style]").hide();
	jQuery("[data-field=chain_type]").hide();
	jQuery("[data-field=number_of_stones]").hide();
	jQuery("[data-field=producing_area]").hide();

	// jQuery("[data-field=shape_supplement]").hide();
	jQuery("[data-field=side_gem]").hide();
	jQuery("[data-field=unit]").hide();


	jQuery("[data-field=order_gold_property]").hide();
	jQuery("[data-field=order_ichiba_title]").hide();
	jQuery("[data-field=order_Gram]").hide();
	jQuery("[data-field=order_Parent_stone]").hide();
	jQuery("[data-field=order_Aside_stone]").hide();
	jQuery("[data-field=order_Appraiser]").hide();
	jQuery("[data-field=order_Remarks]").hide();

	jQuery("[data-field=order_price_per_gram]").hide();
	jQuery("[data-field=order_price_per_parent_stone]").hide();
	jQuery("[data-field=order_price_per_aside_stone]").hide();

	jQuery("[data-field=order_motif]").hide();
	jQuery("[data-field=order_Setting]").hide();
	jQuery("[data-field=order_processing]").hide();
	jQuery("[data-field=order_Ring_size]").hide();

	jQuery("[data-field=order_designer]").hide();

	// jQuery("[data-field=order_shape_supplement]").hide();
	jQuery("[data-field=order_side_gem]").hide();
	jQuery("[data-field=order_unit]").hide();

	jQuery("[data-field=order_hahakai]").hide();
	jQuery("[data-field=order_effect]").hide();
	jQuery("[data-field=order_shape]").hide();
	jQuery("[data-field=order_cutting_style]").hide();
	jQuery("[data-field=order_chain_type]").hide();
	jQuery("[data-field=order_number_of_stones]").hide();
	jQuery("[data-field=order_producing_area]").hide();

	// jQuery("[data-field=size6]").hide();

<?
}	//END 閉じるの回避
?>

	$(document).keydown(function(event){
	  // クリックされたキーのコード
	  var list_keyCode = event.keyCode;
	  // console.log(list_keyCode);

	  //Ctrlキー+F3インライン追加
	    if(event.ctrlKey){//ctrlキー
		  if(list_keyCode == 114 ){
			//Ctrl+F3
			$("[id*=inlineAdd]").click();
		  }else if(list_keyCode == 113 ){
			//Ctrl+F2
			help_tog();
		  }else if(list_keyCode == 123 ){
			//Ctrl+F12
			$("[id*=chooseAll]").click();
		  }else if(list_keyCode == 122 ){
			//Ctrl+F11
			$("[id*=edit_selected]").click();
		  }else if(list_keyCode == 121 ){
			//Ctrl+F10
			$("#header_back").toggleClass('active');
			$("#all_header_field").toggleClass('active');
			$("#sidebar1").toggleClass('off_z');
		  }


		}else{
		  if(list_keyCode == 115 )//F4
		  {
			// 確認メッセージ
			var msg = "編集中の内容を全て保存します。\nよろしいですか？" ;
			// 「はい」を選択した場合
			if( window.confirm( msg ) ) {
				$("[id*=saveall_edited]").click();
			// 「いいえ」を選択した場合
			} else {
				alert("キャンセルしました。");
			}
		  }

		  if(list_keyCode == 113 ){
		  	//F2
			togtog();
		  }else if(list_keyCode == 120 ){
			//F9
		  	search_tog();
		  }

		}//end Ctrlなし



	});//end document keydown


	function help_tog(){
		$("#list_script").toggleClass('active');
	}

	function search_tog(){
		$("#showOptPanel1").click();
		// $("#sidebar1").find("input:first").focus();
	}

<?
if(
	(!stristr($current_page_pass, "satei_of_jewelry_list.php"))
	 // && (!stristr($current_page_pass, "satei_of_brand1_list.php"))
	 ){
?>
	function togtog(){
		jQuery("[data-field=gold_property]").toggle();

		jQuery("[data-field=ichiba_title]").toggle();
		jQuery("[data-field=Gram]").toggle();
		jQuery("[data-field=Parent_stone]").toggle();
		jQuery("[data-field=Aside_stone]").toggle();
		jQuery("[data-field=Appraiser]").toggle();
		jQuery("[data-field=Remarks]").toggle();

		jQuery("[data-field=price_per_gram]").toggle();
		jQuery("[data-field=price_per_parent_stone]").toggle();
		jQuery("[data-field=price_per_aside_stone]").toggle();

		jQuery("[data-field=motif]").toggle();
		jQuery("[data-field=Setting]").toggle();
		jQuery("[data-field=processing]").toggle();
		jQuery("[data-field=Ring_size]").toggle();


		// jQuery("[data-field=country_of_origin]").toggle();
		// jQuery("[data-field=serial_number]").toggle();
		jQuery("[data-field=yahoo_color]").toggle();

		jQuery("[data-field=zipper]").toggle();
		jQuery("[data-field=designer]").toggle();

		// jQuery("[data-field=shape_supplement]").toggle();
		jQuery("[data-field=side_gem]").toggle();
		jQuery("[data-field=unit]").toggle();

		jQuery("[data-field=hahakai]").toggle();
		jQuery("[data-field=effect]").toggle();
		jQuery("[data-field=shape]").toggle();
		jQuery("[data-field=cutting_style]").toggle();
		jQuery("[data-field=chain_type]").toggle();
		jQuery("[data-field=number_of_stones]").toggle();
		jQuery("[data-field=producing_area]").toggle();

		jQuery("[data-field=toe]").toggle();
		jQuery("[data-field=cloth]").toggle();
		jQuery("[data-field=heel]").toggle();


		jQuery("[data-field=Sleeve_Length]").toggle();
		jQuery("[data-field=collar_neck_line]").toggle();
		jQuery("[data-field=breast]").toggle();
		jQuery("[data-field=handle]").toggle();
		jQuery("[data-field=silhouette]").toggle();
		jQuery("[data-field=sleeve]").toggle();
		jQuery("[data-field=length]").toggle();

		jQuery("[data-field=amount]").toggle();

// いる？
		jQuery("[data-field=order_gold_property]").toggle();
		jQuery("[data-field=order_ichiba_title]").toggle();
		jQuery("[data-field=order_Gram]").toggle();
		jQuery("[data-field=order_Parent_stone]").toggle();
		jQuery("[data-field=order_Aside_stone]").toggle();
		jQuery("[data-field=order_Appraiser]").toggle();
		jQuery("[data-field=order_Remarks]").toggle();

		jQuery("[data-field=order_price_per_gram]").toggle();
		jQuery("[data-field=order_price_per_parent_stone]").toggle();
		jQuery("[data-field=order_price_per_aside_stone]").toggle();

		jQuery("[data-field=order_motif]").toggle();
		jQuery("[data-field=order_Setting]").toggle();
		jQuery("[data-field=order_processing]").toggle();
		jQuery("[data-field=order_Ring_size]").toggle();

		// jQuery("[data-field=order_country_of_origin]").toggle();
		// jQuery("[data-field=order_serial_number]").toggle();
		jQuery("[data-field=order_yahoo_color]").toggle();

		jQuery("[data-field=order_zipper]").toggle();
		jQuery("[data-field=order_designer]").toggle();
		// jQuery("[data-field=order_shape_supplement]").toggle();
		jQuery("[data-field=order_side_gem]").toggle();
		jQuery("[data-field=order_unit]").toggle();

		jQuery("[data-field=order_hahakai]").toggle();
		jQuery("[data-field=order_effect]").toggle();
		jQuery("[data-field=order_shape]").toggle();
		jQuery("[data-field=order_cutting_style]").toggle();
		jQuery("[data-field=order_chain_type]").toggle();
		jQuery("[data-field=order_number_of_stones]").toggle();
		jQuery("[data-field=order_producing_area]").toggle();

		jQuery("[data-field=order_toe]").toggle();
		jQuery("[data-field=order_cloth]").toggle();
		jQuery("[data-field=order_heel]").toggle();


		jQuery("[data-field=order_Sleeve_Length]").toggle();
		jQuery("[data-field=order_collar_neck_line]").toggle();
		jQuery("[data-field=order_breast]").toggle();
		jQuery("[data-field=order_handle]").toggle();
		jQuery("[data-field=order_silhouette]").toggle();
		jQuery("[data-field=order_sleeve]").toggle();
		jQuery("[data-field=order_length]").toggle();
		// jQuery("[data-field=size6]").toggle();

		jQuery("[data-field=order_amount]").toggle();




	}//end togtog


<?
}//end togtog 除外

if(stristr($current_page_pass, "satei_of_brand1_list.php")){
?>
togtog();
<?
}
if((stristr($current_page_pass, "satei_of_jewelry_list.php"))or(stristr($current_page_pass, "market_product_performance_original_list.php"))){
?>
// jQuery("[data-field=yahoo_sozai]").hide();
// jQuery("[data-field=ichiba_title]").hide();
// jQuery("[data-field=DA_SELFGRES").hide();
// jQuery("[data-field=DA_INTENSITY").hide();
// jQuery("[data-field=DA_OVERTONE").hide();
// jQuery("[data-field=DA_POLISH").hide();
// jQuery("[data-field=DA_SYMMETRY").hide();
// jQuery("[data-field=DA_FLUO").hide();
// jQuery("[data-field=DA_COLOR_FLUO").hide();
// jQuery("[data-field=DA_WIDE").hide();
// jQuery("[data-field=DA_HIGH").hide();
// jQuery("[data-field=DA_DEPTH").hide();
function togtog(){
// jQuery("[data-field=yahoo_sozai]").toggle();
// jQuery("[data-field=ichiba_title]").toggle();
// jQuery("[data-field=DA_SELFGRES").toggle();
// jQuery("[data-field=DA_INTENSITY").toggle();
// jQuery("[data-field=DA_OVERTONE").toggle();
// jQuery("[data-field=DA_POLISH").toggle();
// jQuery("[data-field=DA_SYMMETRY").toggle();
// jQuery("[data-field=DA_FLUO").toggle();
// jQuery("[data-field=DA_COLOR_FLUO").toggle();
// jQuery("[data-field=DA_WIDE").toggle();
// jQuery("[data-field=DA_HIGH").toggle();
// jQuery("[data-field=DA_DEPTH").toggle();
};
<?
}
?>


});//end window load
</script>
<?
//全ヘッダー
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
?>
<a href="#" class="rnr-button btn btn-warning" onclick="outputLabelWindow();">査定ラベル発行</a>
<div id="list_script_ttl">
	一覧共通キー<br>(Ctrl+F2)
</div>
<div id="list_script" class="active">
	<table>
		<tr>
			<th rowspan="2">Ctrl<br>なし</th>
			<th>F1</th>
			<th>F2</th>
			<th>F3</th>
			<th>F4</th>
			<th>F5</th>
			<th>F6</th>
			<th>F7</th>
			<th>F8</th>
			<th>F9</th>
			<th>F10</th>
			<th>F11</th>
			<th>F12</th>
			<th rowspan="2">Ctrl+</th>
			<th>F1</th>
			<th>F2</th>
			<th>F3</th>
			<th>F4</th>
			<th>F5</th>
			<th>F6</th>
			<th>F7</th>
			<th>F8</th>
			<th>F9</th>
			<th>F10</th>
			<th>F11</th>
			<th>F12</th>
		</tr>
		<tr>
			<td>ヘルプ</td>
			<td>一部項目開閉</td>
			<td>検索窓</td>
			<td>全保存</td>
			<td>更新</td>
			<td>×</td>
			<td>×</td>
			<td>×</td>
			<td>検索パネル開閉</td>
			<td>×</td>
			<td>全画面表示</td>
			<td>ツール</td>
			<td>一括設定</td>
			<td>ここの開閉</td>
			<td>インライン追加</td>
			<td>タブ閉じる</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>全メニュー開閉</td>
			<td>選択範囲を編集</td>
			<td>全選択</td>
		</tr>
	</table>
</div>

<style type="text/css">
	#list_script_ttl{
		font-size: 12px;
		padding: 5px 10px;
		display: inline-block;
		width: 100px;
	}
	#list_script{
		display: none;
		background-color: #eee;
	}
	#list_script.active{
		display: inline-table;
	}
	#list_script table{
		border-collapse: collapse;
		background-color: #fff;
	}
	#list_script th[rowspan="2"] {
	    width: 50px;
	    text-align: center;
	    background-color: #888;
	    font-size: 16px;
	}
	#list_script th{
		border: 1px solid #dcdcdc!important;
		font-weight: normal;
		font-size: 12px;
		background-color: #2fa4e7;
		color: #fff;
	}
	#list_script td{
		border: 1px solid #dcdcdc!important;
		font-size: 12px;
	}
	input:focus, select.form-control:focus, textarea.form-control:focus {
	    border: 2px solid #008eff!important;
	    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6)!important;
	}
	[data-hidden] + * > .bs-sidebar-screenbound {
	    max-width: none;
	    width: auto!important;
	    height: auto!important;
	}
	select.form-control[id*="value_sub_category_id"]{
		width: auto!important;
		min-width: 140px;
		}

	select.form-control[id*="value_event_"]
	, select.form-control[id*="value_content_"]
	{
		width: auto!important;
	}
	.bs-sidebar-main .table-bordered{
		width: auto!important;
	}
	td.bs-gridcell.error_row {
	    background-color: #f00;
	    color: #fff;
	}
	tr.error_row td{
	    background-color: #f00;
	    color: #fff;
	}

.rnr-gridtable input[name*='Gram']
, .rnr-gridtable input[name*='price_per_gram']
, .rnr-gridtable input[name*='Parent_stone']
, .rnr-gridtable input[name*='price_per_parent_stone']
, .rnr-gridtable input[name*='Aside_stone']
, .rnr-gridtable input[name*='price_per_aside_stone']
, .rnr-gridtable input[name*='DA_FRAPA']
, .rnr-gridtable input[name*='DA_RATE']
, .rnr-gridtable input[class*='multiple_rate_text_for_ajax']
{
	width: 50px!important;
	min-width: 0px!important;
}


	.rnr-gridtable select[name*='country_of_origin'], .rnr-gridtable select[name*='zipper'], .rnr-gridtable select[name*='designer']
	, .rnr-gridtable select[name*='motif']
	, .rnr-gridtable select[name*='producing_area']
	, .rnr-gridtable select[name*='hahakai']
	, .rnr-gridtable select[name*='effect']
	, .rnr-gridtable select[name*='shape']
	, .rnr-gridtable select[name*='cutting_style']
	, .rnr-gridtable select[name*='Setting']
	, .rnr-gridtable select[name*='processing']
	, .rnr-gridtable select[name*='chain_type']
	, .rnr-gridtable select[name*='appraiser']
	, .rnr-gridtable select[name*='number_of_stones']
	, .rnr-gridtable select[name*='Finish']
	, .rnr-gridtable select[name*='yahoo_color_id']
	, .rnr-gridtable select[name*='number_of_stones']
	, .rnr-gridtable select[name*='side_gem']
	{
	    min-width: 100px!important;
	    width: auto!important;
	}
	table {
	    font-size: inherit;
	}

	.navbar-form .form-group {
	    display: none;
	}
	ul.list-group.rnr-list.controlChooseMenu.dropdown-menu {
	    height: 600px;
	    overflow-y: scroll;
	}



	.batch_popup_back{
		transform: translateY(-500%);
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(0,0,0,0.7);
		z-index: 10000000000;
		-webkit-transition: all .25s linear;
		   -moz-transition: all .25s linear;
		    -ms-transition: all .25s linear;
		     -o-transition: all .25s linear;
		        transition: all .25s linear;
	}
	.batch_popup_back.active{
		transform: translateY(0%);
	}
	.batch_popup_box{
		position: absolute;
		top: 0%;
		left: 0%;
		width: 70%;
		height: 80%;
	}
	.batch_popup_back.active .batch_popup_box{
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background: #fff;

	}
	.batch_popup_box form {
	    margin: 15px auto;
	    width: 95%;
	    padding: 10px;
	    border: 1px solid #888;
	    border-radius: 3px;
	}
	.batch_popup_box textarea {
		width: 300px;
		height: 600px;
		display: block;
	}
	.batch_popup_box select {
	    width: 100%!important;
	    display: block;
	    padding: 10px 15px!important;
	    font-size: 20px!important;
	    -webkit-appearance: none;
	}


	#submit{
		width: 100%;
		display: block;
		padding: 5px 10px;
		margin-top: 30px;
	}
	.batch_popup_box .float-left{
		float: left;
		width: 50%;
		padding: 0 10px;
	}
	.bs-sidebar-screenbound .rnr-rowcontainer div[data-container='add_delete']{
		width: 70%!important;
	}
	.bs-sidebar-screenbound .rnr-rowcontainer div[data-container='gridinfo']{
		width: 30%!important;
	}
	.bs-sidebar-screenbound .rnr-rowcontainer .org_btn_box .float-left{
		float: left;
	}
	#count_num_content{
		border: 2px solid #b1a8a8;
		background: #f0f0f0;
		padding: 10px;
		margin: 5px 0px;
		display: block;
		text-align: right;
		width: 100px;
	}
	#count_num_content span{
		font-size: 15px;
	}
</style>



<div class="batch_popup_back">
	<div class="batch_popup_box">
		<form action="/include/evacommon/list_page_batch.php" method="post">
			<div class="float-left">
				<textarea name="product_id_text" id="product_id_text" placeholder="SEQを改行区切りで入力してください。"></textarea>
			</div>
			<div class="float-left">
				<h4>▼処理内容▼</h4>

					<!-- <label><input type="radio" name="process_content" value="chohyo_touroku_seihin" />帳票登録 製品test</label><br>
					<label><input type="radio" name="process_content" value="chohyo_touroku_dia" />帳票登録 ダイヤ</label><br>
					<label><input type="radio" name="process_content" value="o_toutyaku" />O到着</label><br>
					<label><input type="radio" name="process_content" value="os_hassou_satuei" />OS発送/撮影</label><br>
					<label><input type="radio" name="process_content" value="os_toutyaku_satuei" />OS到着/撮影</label><br> -->
					<?php
					if(stristr($current_page_pass, "shouhin_batch_list.php")){
						$status_sql = "SELECT goods_id,goods_status FROM _goods_status2 WHERE goods_id != 10 AND batch_flag = 1 ORDER BY sort ASC";
						$status_rs = CustomQuery($status_sql);
						while($status_data = db_fetch_array($status_rs)){
								$goods_id = $status_data["goods_id"];
								$goods_status = $status_data["goods_status"];
								$select_box .= '<option value='.'"'.$goods_id.'"'.'>'.$goods_status.'</option><br>';

					}//while end
				}elseif((stristr($current_page_pass, "saisun_list.php"))or(stristr($current_page_pass, "shouhin_list.php"))){
						$status_sql = "SELECT goods_id,goods_status FROM _goods_status2 WHERE goods_id=137 OR goods_id=136 OR goods_id=146 ORDER BY sort ASC";
						$status_rs = CustomQuery($status_sql);
						while($status_data = db_fetch_array($status_rs)){
								$goods_id = $status_data["goods_id"];
								$goods_status = $status_data["goods_status"];
								$select_box .= '<option value='.'"'.$goods_id.'"'.'>'.$goods_status.'</option><br>';
						}//while end
				  }elseif(stristr($current_page_pass, "chohyo_by_seihin_list.php")){
						$select_box = "<option value=\"chohyo_touroku_seihin\">帳票登録 製品</option>";
					}elseif(stristr($current_page_pass, "chohyo_by_dia_list.php")){
						$select_box = "<option value=\"chohyo_touroku_dia\">帳票登録 ダイヤモンド</option>";
					}//if end
			?>
					<select name="process_content">
					<option value="none">▼---選択してください---▼</option>
					<?=$select_box ?>
					</select>

				<input id="submit" type="submit" value="送信">

				<!-- SEQの数カウント -->
				<script type "text/javascript">
				window.onload=function(){
					var seqCount = 0;
					var seqArray = new Array()
					document.getElementById("product_id_text").addEventListener('keyup',function(event){
						// console.log(event.keyCode);
						var str = document.getElementById("product_id_text").value;
						var result = str.split('\n');
						seqCount = result.length-1;
						// console.log(keyCodeLength);
						 document.getElementById("count_num_of_seq").innerHTML = seqCount;
					});
				}
				</script>
				<div id =count_num_content>SEQ数:　<span id="count_num_of_seq"></span></div>
				<!-- end SEQの数カウント -->

			</div>
			<br clear="all">
		</form>
	</div>
</div>


<script type="text/javascript">
	function batch_popup_open(){
		$(".batch_popup_back").addClass("active");
		$("#product_id_text").focus();

				<?php
				if(stristr($current_page_pass, "chohyo_by_dia_list.php")){
					$batch_default_select = 'chohyo_touroku_dia';
				}elseif((stristr($current_page_pass, "saisun_list.php")) or (stristr($current_page_pass, "shouhin_list.php"))){
					$batch_default_select = 'o_toutyaku';
				}else{
					$batch_default_select = 'chohyo_touroku_seihin';
				}
				?>
				$(".batch_popup_box input[value='<?=$batch_default_select?>']").prop("checked",true);

	}
	$(".batch_popup_back").click(function(){
		$(".batch_popup_back").removeClass("active");
	})
    $('.batch_popup_box').click(function (event) {
        event.stopPropagation();
    });

<?php
if((stristr($current_page_pass, "saisun_list.php")) or (stristr($current_page_pass, "shouhin_list.php")) or (stristr($current_page_pass, "shouhin_batch_list.php"))){
?>



		$(window).load(function() {
			$link_btn = '';
			// $link_btn += '<div class="org_btn_box">';
			// $link_btn += '<div class="float-left">';
			$link_btn += '<span class="rnr-button btn btn-default" id="batch_popup_open" onclick="batch_popup_open();" >SEQ batch</span>';
			// $link_btn += '</div>';

			$link_btn += '<br clear="all" >';
			// $link_btn += '</div>';
			<?php
			if(stristr($current_page_pass, "shouhin_list.php")){
				$selector = '".bs-sidebar-screenbound .rnr-rowcontainer div[data-container=\'add_delete\']"';
			}elseif(stristr($current_page_pass, "shouhin_batch_list.php")){
				$selector = '"div[data-container=\'gridcontrols\'] .rnr-hfiller"';
			}else{
				$selector = '".rnr-hfiller"';
			}

			?>

			$(<?=$selector?>).append($link_btn);





		});

		<?
		}
		?>

</script>
