
<script type="text/javascript">
jQuery(window).load(function(){
});//end window load
</script>
<?
//全ヘッダー
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
?>

<style type="text/css">
	a:hover{
		opacity: 0.5;
	}
	.bs-center td[data-field*='save_img_dir']{
		width: 500px;
	}
	.bs-center td[data-field*='save_img_dir'] img{
		max-width: 100%;
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
	{
	    min-width: 100px!important;
	    width: auto!important;
	}
	table {
	    font-size: inherit;
	}
	select.form-control{
	    width: auto!important;
	}
</style>

<script>
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
			// help_tog();
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
			// togtog();
		  }else if(list_keyCode == 120 ){
			//F9
		  	// search_tog();
		  }

		}//end Ctrlなし



	});//end document keydown

</script>
