<script>

jQuery(window).load(function(){
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

	function togtog(){
		// jQuery("[data-field=gold_property]").toggle();
	}//end togtog

});//end window load
</script>

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
td.bs-gridcell.rnr-field-text[data-field="camptop_img"],
td.bs-gridcell.rnr-field-text[data-field="page1_url"],
td.bs-gridcell.rnr-field-text[data-field="page2_url"],
td.bs-gridcell.rnr-field-text[data-field="page3_url"],
td.bs-gridcell.rnr-field-text[data-field="page4_url"],
td.bs-gridcell.rnr-field-text[data-field="page5_url"]
 {
    /* max-width: 200px; */
    word-break: break-all;
		min-width: 200px;
}
td.bs-gridcell.rnr-field-text[data-field="camp_txt"]{
	min-width:300px;
}
	select#value_rate_4 {
		width: 85px;
	}
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
	img.inline_img {
		width: 150px;
	}
</style>
