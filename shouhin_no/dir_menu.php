<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>
<div id="dir_menu">
	<a href="/include/shouhin_no/oomoji.php">大文字⇔小文字</a>
	<a href="/include/shouhin_no/hikaku.php">比較</a>
	<a href="/include/shouhin_no/hikaku_match.php">合致</a>
	<a href="/include/shouhin_no/seq_hinban.php">SEQ⇒品番</a>
	<a href="/include/shouhin_no/hinban.php">品番⇒SEQ</a>
	<a href="/include/shouhin_no/hokanbasyo.php">品番⇒保管場所</a>
	<a href="/include/wasabi/syukka/logisyukka.php">弊社戻し</a>
	<a href="/include/shouhin_no/zouge.php">特定国際種該当一覧</a>
	<a href="/include/shouhin_no/gazou.php">画像一括取得</a>
</div>
<style type="text/css">
	#dir_menu{
		display:-webkit-box;/*--- Androidãƒ–ãƒ©ã‚¦ã‚¶ç”¨ ---*/
		display:-ms-flexbox;/*--- IE10 ---*/
		display: -webkit-flex;/*--- safariï¼ˆPCï¼‰ç”¨ ---*/
		display:flex;
		margin-bottom: 10px;
	}
	#dir_menu a:hover{
		cursor: pointer;
		font-weight: bold;
	}
	#dir_menu>a{
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
</style>
