<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

//EVA共通ヘッダー
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
?>


<div id="header">
	<a href="/include/raku_cabinet_shop5/cabinet_sansyou.php" >通常出品</a>
	<a href="/include/raku_cabinet_shop5/cabinet_sansyou_tanpin.php" >単品出品</a>
	<a href="/include/raku_cabinet_shop5/cabinet_sansyou_multiple.php" >複数出品</a>
	<a href="/include/ec_dir/dir.php" >ディレクトリ設定</a>
	<a href="/include/shuppin/shuppin_status.php" >出品状況</a>
	<div class="slide_parent_box">
		<div class="slide_child_head">
			楽天出品ナビ
		</div>
		<div class="slide_child_body">
			<a href="/include/shuppin/rakuten/cabinet.php" >楽天キャビネット利用容量</a>
			<a href="/include/shuppin/rakuten/cabinet_navi.php" >楽天キャビネット一覧</a>
			<a href="/include/shuppin/rakuten/items/no_zaiko.php" >在庫ｾﾞﾛ商品一覧</a>
			<!-- <a href="/include/shuppin/rakuten/folder_file.php" >フォルダ内画像一覧</a> -->
			<a href="/include/shuppin/rakuten/folder_insert.php" >フォルダ作成</a>
			<!-- <a href="/include/shuppin/rakuten/items/item.php" >商品情報</a> -->
			<!-- <a href="/include/shuppin/rakuten/items/item_delete.php" >商品情報削除</a> -->
			<!-- <a href="/include/shuppin/rakuten/file_delete.php" >画像消去</a> -->
			<a href="/include/shuppin/rakuten/trashbox.php" >削除フォルダ参照</a>
			<a href="/include/shuppin/rakuten/file_revert.php" >画像復活</a>
		</div>
	</div>
	<a href="/include/shuppin/rakuten.php" >出品チェックアラート</a>
	<!-- <a href="/include/zip/function/box_zip_log.php" >西谷テスト</a> -->
	<a href="/include/shuppin/rakuten/tag_get/get.php" >楽天タグ情報</a>
</div>

<div id="to_top" >トップへ</div>

<style type="text/css">
	#header{
		display:-webkit-box;/*--- Androidブラウザ用 ---*/
		display:-ms-flexbox;/*--- IE10 ---*/
		display: -webkit-flex;/*--- safari（PC）用 ---*/
		display:flex;
		margin-bottom: 10px;
	}
	#header a:hover{
		cursor: pointer;
		font-weight: bold;
	}
	#header>a , .slide_child_head{
		min-width: 120px;
		display: block;
		color: #333;
		text-decoration: none;
		border: 2px solid #333;
		padding: 5px 10px;
		border-radius: 6px;
		background-color: #ffc;
		text-align: center;
	}
	.slide_child_body a{
		min-width: 200px;
		display: block;
		color: #333;
		text-decoration: none;
		border: 2px solid #333;
		padding: 5px 10px;
		border-radius: 6px;
		background-color: #ffc;
		text-align: center;
	}
	.slide_parent_box{
		position: relative;
	}
	.slide_parent_box:hover .slide_child_body{
		display: block;
	}
	.slide_child_body{
		display: none;
		position: absolute;
		top: 100%;
		left: 0;
	}
	#to_top{
		position: fixed;
		top: 0;
		right: 0;
		background-color: #111;
		color: #fff;
		padding: 10px 15px;
		border-radius: 12px;
		cursor: pointer;
	}
</style>
<script type="text/javascript">
	var body_html = $('html,body');
	$("#to_top").click(function(){
        body_html.animate({ scrollTop: 0 }, 200);
        return false;
	})


$(document).keydown(function(event){
	// クリックされたキーのコード
	var list_keyCode = event.keyCode;
	// console.log(list_keyCode);
	if(event.ctrlKey){//ctrlキー
		if(list_keyCode == 121 ){
			//Ctrl+F10
			$("#header_back").toggleClass('active');
			$("#all_header_field").toggleClass('active');
			$("#sidebar1").toggleClass('off_z');
		}
	}
});

</script>
