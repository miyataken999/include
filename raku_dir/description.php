<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>楽天ディレクトリ定義マニュアル</title>
	<link rel="stylesheet" href="./css/description.css">
</head>
<body>
<h1>楽天ディレクトリ定義マニュアル</h1>
<div id="mokuji">
	<h4>目次</h4>
	<ul>
		<li><a href="#item_settei">定義マスタでの使用項目</a></li>
		<li><a href="#teigi_settei">定義マスタの設定方法</a></li>
		<li><a href="#kousin_flow">ディレクトリID変更時のフロー</a></li>
	</ul>
</div>	<!-- end mokuji -->
<div id="item_settei" class="contents">
	<h3>定義マスタでの使用項目</h3>
	<img src="/include/raku_dir/img/item_settei.PNG">
	<br>
	ここは基本的に西谷がいじります。<br>
	他、定義をする上で必要な項目が出てきたらその際に教えてください。

	<br><br><br>

	<h3 id="teigi_settei">定義マスタの設定方法</h3>
	<img src="/include/raku_dir/img/teigi_settei.PNG">
	<br>
	<strong>※根本的に重要なこと</strong>
	<ol>
		<li>
			自動入力の際、何階層目まであったとしても第一階層から当て込んでいきます。<br>
			なので、第一階層の定義をしていないカテゴリの場合、<br>
			その以下の定義をしても完全自動には至りません。
		</li>
		<li>
			逆に言うと、第二階層以下はその親階層で定義されていることは再定義する必要はありません。
		</li>
	</ol>

	<h5>第一定義がORの場合</h5>
	<div class="text">
		例えば、<br>
		<br>
		<img src="/include/raku_dir/img/teigi_2.PNG"><br><br>
		<img src="/include/raku_dir/img/teigi_1.PNG"><br>
		<br>
		これの場合、<br>
		第一定義で　大カテ：バッグ　OR　大カテ：アパレル雑貨　OR　大カテ：財布<br>
		と定義していて、<br>
		第二定義で　大カテ：バッグ　AND　性別：女
		と限定的に定義しているので、<br>
		第三定義以下では大カテ、性別を定義する必要はありません。<br>
		<br>
		この例では、第三定義は<br>
		中カテ：トートバッグ<br>
		のみです。<br>
		また同様に、<br>
		第四定義では　ブラジャン頭文字：ア行<br>
		第五定義では　ブラジャン：アンテプリマ<br>
		のみを定義してます。
	</div>

	<h5>第一定義が単独の場合</h5>
	<div class="text">
		例えば、<br>
		第一定義が　大カテ：靴　のみの場合、<br>
		第二定義以下は　大カテ：靴　を指定する必要はありません。
	</div>

	<h5>第一定義が定義なしの場合</h5>
	<div class="text">
		定義がないので、自動選択はされません。
		ただ、例えば、<br>
		その下の第二を定義していた場合、<br>
		ディレクトリ入力時に自動選択はされませんが、<br>
		第一階層から手動で入力した瞬間に、<br>
		下層の定義がマッチしていれば自動選択はされます。
	</div>

	<h5>注意点など</h5>
	<div class="text">
		これらの定義マスタのページは全て、<br>
		一覧を出したときのみ数字の値を日本語に変換してるので、保存後は数字です。更新で対応してください。<br>
		<br>
		ディレクトリ名について　修正時<br>
		Dir_1_Name⇒Dir_2_Name⇒Dir_3_Name・・・<br>
		と、親子関係の連続の設定の為、インライン編集時は毎回空になります。<br>
		その場合、もう一度親から選択しなおしてください。<br>
	</div>


	<h5>一括ボタン</h5>
	<div class="text">
		一番上段の値で一括設定します。<br>
		これも親子関係のせいで一回でできません。<br>
		やり方としては、例えば、第三定義では、<br>
		インライン追加で必要数レコードを出し、<br>
		最上段のdir_1選択　⇒　dir_1一括ボタン　⇒　dir_2選択　⇒　dir_2一括ボタン　⇒　dir_3選択、定義・・・<br>
		のような感じです。
	</div>


	<!-- 第二定義以下では大カテを定義する必要はありません。<br> -->
</div><!-- end item_settei -->

	<br><br><br>

<div id="kousin_flow" class="contents">

	<h3>ディレクトリID変更時のフロー</h3>

	<div class="text">
		<ol>
			<li>
				毎週月曜日、更新の確認<br>
				更新があれば、サポートニュース、もしくはRMS商品登録・更新の画面からCSVダウンロード<br>
				！！！データがかなり重いので作業に注意！！！とくにタグIDのほう！<br><br>
			</li>
			<li>
				新規データCSVから必要カテゴリのみにフィルタをかけ、<br>
				B列を「>」でsplitしてC,D,E,F列に分割格納、<br>
				元B列を削除、<br>
				最上段に項目名設定、<br>
				インポート（丸々差し替え）<br><br>
			</li>
			<li>
				「変更対象」で対象になっているか確認<br>
				↓↓↓対象であれば↓↓↓<br>
				★既存の項目に変更がある場合<br>
				そのカテゴリ以下は全て再編集。<br>
				<strong>
					！変更内容に注意！
				</strong>
				<br>
				廃統合、変更などわかれているので、それに見合った対応を考えます。<br>
				しばらくは西谷が対応方法を考え、定義する部分だけ誰かに依頼します。
			</li>
		</ol>
	</div>

	<h3>インポートフロー</h3>

	<div class="text">
		<ol>
			<li>
				フォーマット<br>（/pc/ドキュメント/作業中/楽天ディレクトリ更新/raku_all_dir.xlsx）<br>
				を使って、新CSVからコピーして元データを作る<br><br>
			</li>
			<li>
				テーブル一覧から対象のテーブル「raku_all_dir」を開く<br><br>
			</li>
			<li>
				インポート（差し替え）する<br>
				左上の「import Wizard」クリック<br>
				ファイル形式選択<br>
				「import from」で対象のCSVファイル「raku_all_dir.xlsx」を選択<br>
				「Tables」で対象のシート「raku_all_dir」を選択<br>
				そのままNEXT<br>
				Target Tableを確認<br>
				各項目、Fieldを確認<br>
				！重要！　「Copy」　選択<br>
				「Start」<br>
				終了後、「Close」<br>
				View　⇒　「Refresh」<br>
				完了<br><br>
			</li>
			<li>
				全データのページから、
				<a href="/shop5/raku_all_dir_list.php" target="_blank">/shop5/raku_all_dir_list.php</a><br>
				「元データ分割」ボタン<br>
				⇒origin_dirのデータを分割し、<br>
				dir_1 ~ dir_5に格納<br>
				完了<br><br>
			</li>
		</ol>
	</div>


	<h3>タグID用インポートフロー</h3>

	<div class="text">
		<ol>
			<li>
				/pc/ドキュメント/作業中/楽天タグ更新/から、<br>
				各テーブルのフォーマットを探し、「パス名」と「項目選択肢別在庫登録可」の列を削除し、オールコピー<br>
				「id」は空白のまま。
			</li>
			<li>
				Navicatで各テーブルにインポート<br>
				これを該当する各CSV、テーブルごとに繰り返す。
			</li>
		</ol>
	</div>

</div>

</body>
</html>
