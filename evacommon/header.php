<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<div id="head_menu">
	オールEVAメニュー<br>(Ctrl+F10)
</div>

<div id="header_back">
</div>

<div id="all_header_field">
	<div class="all_header_ttl">shop5</div>
	<div class="all_header">
		<a href="/shop5/">top</a>
		<script type="text/javascript">
			function autoOutputLabelWindow() {
				window.open("https://rifa.life/lounge_API/brother/print.php?user_id=<?= $_SESSION["uid"] ?>", "window1", "width=150,height=150");
				return false;
			}

			function outputLabelWindow() {
				window.open("https://rifa.life/lounge_API/brother/printsatei.php?user_id=<?= $_SESSION["uid"] ?>", "window1", "width=150,height=150");
				return false;
			}
		</script>


		<div class="slide_parent_box">
			<div class="slide_child_head">
				買取業務
			</div>
			<div class="slide_child_body">
				<a href="/shop5/Eoc_add.php">顧客入力</a>
				<a href="/shop5/Eoc_list.php">顧客一覧</a>
				<a href="/shop5/kaibutu_list.php">買取物一覧</a>
				<a href="/shop5/Eoc_chigins2_list.php">金査定一覧</a>
				<a href="/shop5/satei_list.php">査定物一覧</a>
				<a href="/shop5/awazu_list.php">合わず一覧</a>
				<a href="/shop5/Eoc_chigins_list.php">買取備考</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				配送CSV
			</div>
			<div class="slide_child_body">
				<a href="/shop5/vw_Ehiden_kaitori_list.php">E飛伝</a>
				<a href="/shop5/vw_Ehiden_kaitori_yuubin_list.php">郵便</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				商品管理
			</div>
			<div class="slide_child_body">
				<a href="/shop5/shouhin_list.php">商品一覧</a>
				<a href="/shop5/PMT_EV001_list.php">D在</a>
				<a href="/shop5/saisun_list.php">採寸待機</a>
				<a href="/shop5/auctions_list.php">出品情報</a>
				<a href="/shop5/shouhin_batch_list.php">商品バッチ</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				集計、ログ
			</div>
			<div class="slide_child_body">
				<a href="/shop5/evav62122_audit_list.php">ログ一覧</a>
				<a href="/shop5/mailsystem_send_schedule_list.php">メールログ</a>
				<a href="/shop5/vw_shuukei_st_list.php">集計商品ステータス</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				サイト用実績
			</div>
			<div class="slide_child_body">
				<a href="/shop5/voice_sub_id_3_list.php">サイト用実績【宝石,色石】</a>
				<a href="/newshop2/voice_sub_id_14_list.php">サイト用実績【ダイヤ】</a>
			</div>
		</div>
		<a href="/kagoya/post_list.php">サイト用呟き投稿</a>
		<a href="/shop5/voice_sub_id_1_list.php">お客様の手紙</a>
	</div>
	<div class="all_header_ttl">マスタ管理</div>
	<div class="all_header">
		<div class="slide_parent_box">
			<div class="slide_child_head">
				全般
			</div>
			<div class="slide_child_body">
				<a href="/shop5/mst_brand_list.php">ブランド一覧</a>
				<a href="/shop5/store_categories_list.php">大カテゴリー</a>
				<a href="/shop5/store_sub_categories_list.php">中カテゴリー</a>
				<a href="/shop5/mst_bank_list.php">金融機関マスタ</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				査物１
			</div>
			<div class="slide_child_body">
				<a href="/shop5/mst_item_list.php">ライン</a>
				<a href="/shop5/mst_item_name_list.php">アイテム名</a>
				<a href="/shop4/mst_Material_list.php">素材</a>
				<a href="/shop4/mst_Sleeve_Length_list.php">袖丈</a>
				<a href="/shop4/mst_length_list.php">丈</a>
				<a href="/shop5/mst_gold_property_list.php">金性</a>
				<a href="/shop4/mst_Ring_size_list.php">リングサイズ</a>
				<a href="/shop4/mst_color_list.php">カラーId</a>
				<a href="/shop4/mst_handle_list.php">柄</a>
				<a href="/shop4/mst_stamp_list.php">刻印</a>
				<a href="/shop4/mst_Destination_selling_list.php">売り先</a>
				<a href="/shop5/mst_Finish_list.php">仕上</a>
				<a href="/shop5/mst_Discrimination_list.php">鑑別</a>
				<a href="/shop4/mst_accessories_list.php">付属品</a>
				<a href="/shop4/mst_line_list.php">ラインカテゴリ</a>
				<a href="/shop4/mst_handle_sub_list.php">柄サブ</a>
				<a href="/shop5/mst_side_gem_list.php">脇石</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				査物２
			</div>
			<div class="slide_child_body">
				<a href="/shop5/mst_country_of_origin_list.php">原産国</a>
				<a href="/shop5/mst_hall_mark_list.php">ホールマーク</a>
				<a href="/shop5/mst_zipper_list.php">金具（ファスナー）</a>
				<a href="/shop5/mst_designer_list.php">デザイナー</a>
				<a href="/shop5/mst_hahakai_list.php">母貝</a>
				<a href="/shop5/mst_effect_list.php">効果</a>
				<a href="/shop5/mst_shape_list.php">シェイプ</a>
				<a href="/shop5/mst_cutting_style_list.php">カッティングスタイル</a>
				<a href="/shop5/mst_chain_type_list.php">チェーン種類</a>
				<a href="/shop5/mst_number_of_stones_list.php">石の個数</a>
				<a href="/shop5/mst_amount_list.php">内容量</a>
				<a href="/shop5/mst_motif_list.php">モチーフ</a>
				<a href="/shop5/mst_Setting_list.php">セッティング</a>
				<a href="/shop5/mst_processing_list.php">処理</a>
				<a href="/shop5/mst_Appraiser_list.php">鑑定機関</a>
				<a href="/shop5/mst_producing_area_list.php">産地</a>
				<a href="/shop5/mst_unit_list.php">単位</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				査物３
			</div>
			<div class="slide_child_body">
				<a href="/shop5/mst_silhouette_list.php">シルエット</a>
				<a href="/shop5/mst_sleeve_list.php">スリーブ</a>
				<a href="/shop5/mst_breast_list.php">ブレスト</a>
				<a href="/shop5/mst_collar_neck_line_list.php">襟・ネックライン</a>
				<a href="/shop5/mst_toe_list.php">トウ</a>
				<a href="/shop5/mst_heel_list.php">ソール/ヒール</a>
				<a href="/shop5/mst_cloth_list.php">生地</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				ダイヤ在庫
			</div>
			<div class="slide_child_body">
				<a href="/shop4/_DIA_DA_SHAPE_list.php">形状</a>
				<a href="/shop4/_DIA_DA_SUGARCANE_list.php">鑑書</a>
				<a href="/shop4/_DIA_DA_STATUS_list.php">ST</a>
				<a href="/shop4/_DIA_DA_ST2_list.php">ST2</a>
				<a href="/shop4/mst_Intensity_list.php">INTENSITY</a>
				<a href="/shop4/mst_overtone_list.php">OVERTONE</a>
				<a href="/shop4/_DIA_DA_COLOR_list.php">COLOR</a>
				<a href="/shop4/_DIA_DA_CLARITY_list.php">CLARITY</a>
				<a href="/shop4/_DIA_DA_CUT_list.php">CUT</a>
				<a href="/shop4/_DIA_DA_FLUO_list.php">INTENSITY_FLUO</a>
				<a href="/shop4/mst_color_fluo_list.php">COLOR_FLUO</a>
				<a href="/shop4/_DIA_DA_APPRAISER_list.php">鑑定機関</a>
				<a href="/shop4/_DIA_DA_CUSTOMER_list.php">お客様</a>
				<a href="/shop5/mst_DA_POLISH_list.php">ポリッシュ</a>
				<a href="/shop5/mst_DA_SYMMETRY_list.php">シンメトリ</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				CSVマスタ
			</div>
			<div class="slide_child_body">
				<a href="/shop4/mst_label_output_list.php">ラベルCSV</a>
				<a href="/shop4/mst_D_zai_output_list.php">D在CSV</a>
			</div>
		</div>
		<!-- <div class="slide_parent_box">
			<div class="slide_child_head">
				出品ZIPマスタ
			</div>
			<div class="slide_child_body">
				<a href="/shop4/mst_csv_raku_item_list.php" >raku_item csvマスタ</a>
				<a href="/shop4/mst_csv_raku_item_cat_list.php" >raku_item_cat csvマスタ</a>
				<a href="/shop4/mst_csv_raku_select_list.php" >raku_item_select csvマスタ</a>
				<a href="/shop4/mst_csv_raku_next_list.php" >raku_item_next csvマスタ</a>
				<a href="/shop4/mst_csv_yahoo_auction_list.php" >yahoo_auction csvマスタ</a>
			</div>
		</div> -->
		<!-- <div class="slide_parent_box">
			<div class="slide_child_head">
				楽天
			</div>
			<div class="slide_child_body">
				<a href="/shop5/mst_rakuten_category_list.php" >楽ジャン</a>
				<a href="/newshop2/mst_raku_teigi_item_list.php" >ディレクトリ定義用項目</a>
				<a href="/newshop2/mst_raku_teigi_1_list.php" >第一ディレクトリ定義</a>
				<a href="/newshop2/mst_raku_teigi_2_list.php" >第二ディレクトリ定義</a>
				<a href="/newshop2/mst_raku_teigi_3_list.php" >第三ディレクトリ定義</a>
				<a href="/newshop2/mst_raku_teigi_4_list.php" >第四ディレクトリ定義</a>
				<a href="/newshop2/mst_raku_teigi_5_list.php" >第五ディレクトリ定義</a>
				<a href="/newshop2/raku_all_dir_list.php" >ディレクトリ全データ</a>
			</div>
		</div> -->
		<!-- <div class="slide_parent_box">
			<div class="slide_child_head">
				ヤフオク
			</div>
			<div class="slide_child_body">
				<a href="/newshop2/mst_yahoo_teigi_item_list.php" >ディレクトリ定義用項目</a>
				<a href="/newshop2/mst_yahoo_teigi_1_list.php" >第一ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_2_list.php" >第二ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_3_list.php" >第三ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_4_list.php" >第四ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_5_list.php" >第五ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_6_list.php" >第六ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_7_list.php" >第七ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_8_list.php" >第八ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_9_list.php" >第九ディレクトリ定義</a>
				<a href="/newshop2/mst_yahoo_teigi_10_list.php" >第十ディレクトリ定義</a>
				<a href="/newshop2/yahoo_all_dir_list.php" >ディレクトリ全データ</a>
			</div>
		</div> -->
		<div class="slide_parent_box">
			<div class="slide_child_head">
				izanami採寸メニュー
			</div>
			<div class="slide_child_body">
				<!-- <a href="https://rifa.life/evaProject/saisun" >izanami採寸</a> -->
				<a href="https://rifa.life/evaProject/store_categories">大カテ一覧<br>※大カテ基準採寸での設定</a>
				<a href="https://rifa.life/evaProject/mst_saisun_item_by_category">設定済み中カテ一覧<br>※中カテ基準での設定</a>
				<a href="https://rifa.life/evaProject/mst_saisun_model">採寸モデル一覧（ワンピース）<br>※採寸モデル基準での設定</a>
				<a href="/shop5/mst_saisun_item_list.php">EVA採寸項目<br>※採寸項目自体を新規追加する時</a>
				<a href="/shop5/store_categories_list.php">EVA大カテ<br>※項目をカテゴリーに新しく紐づけする時</a>
				<a href="/shop5/mst_shouhin_column_name_list.php">ディスクリプション項目</a>
				<a href="https://rifa.life/evaProject/title/edit">タイトル設定画面</a>
				<!-- <a href="/shop5/mst_saisun_item_by_category_list.php" >大カテ別採寸項目一覧</a> -->
				<a href="/shop5/mst_ban_word_list.php">海外NGワード</a>
				<a href="/shop5/mst_saisun_manual_list.php">採寸マニュアル</a>
				<a href="/shop5/mst_condition_details_list.php">コンディションの詳細</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				WASABI
			</div>
			<div class="slide_child_body">
				<a href="/shop5/mst_wasabi_apparel_size_list.php">apparel_size</a>
				<a href="/shop5/mst_wasabi_shoe_size_list.php">shoe_size</a>
			</div>
		</div>

	</div>
	<div class="all_header_ttl">出品系</div>
	<div class="all_header">
		<a href="https://rifa.life/evaProject/box">ボックス一覧</a>
		<a href="/shop5test/vw_box_csv_list.php">ボックスCSV</a>
		<a href="/include/wasabi/confirmation/sansyou.php">出品前確認画面</a>
		<!-- <a href="/include/raku_cabinet_shop5/cabinet_sansyou.php" >通常出品</a> -->
		<!-- <a href="/include/raku_cabinet_shop5/cabinet_sansyou_tanpin.php" >単品出品</a> -->
		<!-- <a href="/include/raku_cabinet_shop5/cabinet_sansyou_multiple.php" >複数出品</a> -->
		<!-- <a href="/include/ec_dir/dir.php" >ディレクトリ設定</a> -->
		<a href="/include/shuppin/shuppin_status.php">出品状況</a>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				楽天出品ナビ
			</div>
			<div class="slide_child_body">
				<a href="/include/shuppin/rakuten/cabinet.php">楽天キャビネット利用容量</a>
				<a href="/include/shuppin/rakuten/cabinet_navi.php">楽天キャビネット一覧</a>
				<a href="/include/shuppin/rakuten/items/no_zaiko.php">在庫ｾﾞﾛ商品一覧</a>
				<!-- <a href="/include/shuppin/rakuten/folder_file.php" >フォルダ内画像一覧</a> -->
				<a href="/include/shuppin/rakuten/folder_insert.php">フォルダ作成</a>
				<!-- <a href="/include/shuppin/rakuten/items/item.php" >商品情報</a> -->
				<!-- <a href="/include/shuppin/rakuten/items/item_delete.php" >商品情報削除</a> -->
				<!-- <a href="/include/shuppin/rakuten/file_delete.php" >画像消去</a> -->
				<a href="/include/shuppin/rakuten/trashbox.php">削除フォルダ参照</a>
				<a href="/include/shuppin/rakuten/file_revert.php">画像復活</a>
			</div>
		</div>
		<a href="/include/kensakusenyou/">画像検索専用</a>
		<a href="/include/wasabi/world.php">WS用エクスポート</a>
		<a href="/include/wasabi/loginyuuko.php">ロジザード用エクスポート</a>
		<a href="/include/shouhin_no/oomoji.php">比較変換</a>
		<a href="/include/wasabi/syukka/logisyukka.php">弊社戻し</a>
		<a href="/include/shuppin/wowma/">wowma画像確認</a>
		<!-- <a href="/include/satei/" >査定用エクスポート</a> -->
	</div>
	<div class="all_header_ttl">その他</div>
	<div class="all_header">
		<a href="https://rifa.life/lounge_API/evaeva/change_currency_form.php" target="_blank">催事用ラベル発行</a>
		<!-- <a href="https://rifa.life/lounge_API/wkhtml/ichiba_exhibition/" target="_blank">市場出品表作成</a> -->
		<a href="https://rifa.life/lounge_API/wkhtml/ichiba_exhibition/id_qr_input.php" target="_blank">ソーティングメモ登録</a>
		<a href="/include/csv/label/create_csv_shop5.php" target="_blank">ラベル出力</a>
		<a href="/shop5/kit_confirm_list.php" target="_blank">宅配キット確認画面</a>
		<a href="/include/evacommon/btns/mst_brand_suggest_set.php" target="_blank">魔法【サジェスト復活】</a>
		<!-- <a id="db_restart" href="/include/evacommon/btns/database_restart.php" target="_blank">パラレル【データベース再起動】（プログラム停止中）</a> -->
		<a href="/kagoya/zendesk__data_list.php?q=(timestamp~between~<?= date("Y/m/d 00:00:00", strtotime("-1 day")) ?>~date11~<?= date("Y/m/d 23:59:59", strtotime("-1 day")) ?>)(check_flag~equals~off~checkbox)#" target="_blank">チャット検閲(前日分)</a>
		<a href="/shop/ckimages/ckfinder/img/php/standalone.php">CKfinder</a>
        <a href="https://rifa.life/evaProject/api/yamato_export">ヤマトCSV</a>
		<a href="https://rifa.life/evaProject/api/refining_logi_export">ロジザード用<br>精錬キットCSV</a>
	</div>
	<div class="all_header_ttl">買取（販売）サイト系</div>
	<div class="all_header">
		<a href="/mypage_eva/users_list.php">マイページアカウント一覧</a>
		<a href="/mypage_eva/vw_user_id_file_list.php?q=(ecc_id~empty)">【未確認】身分証一覧</a>
		<a href="https://diakaimasu.jp/ubuy/goldcoin_list.php">コイン</a>
		<a href="/include/kagoya_check/takuhai/list.php">宅配EVA反映待機画面</a>
		<a href="/include/kagoya_check/refining/list.php">精錬分割EVA反映待機画面</a>
		<a href="/include/kagoya_check/guestquestion/list.php">サイトアンケート</a>
		<a href="/kagoya/Eoc_guestquestion_list.php">アンケート/小窓反映</a>
		<a href="/include/kagoya/mst_item_group_list.php">アイテム群マスタ</a>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				販売キャンペーン
			</div>
			<div class="slide_child_body">
				<a href="/kagoya/mst_sell_campaign_list.php">販売キャンペーン</a>
				<a href="/kagoya/mst_sell_coupon_list.php">販売クーポン</a>
			</div>
		</div>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				買取キャンペーン
			</div>
			<div class="slide_child_body">
				<a href="/kagoya/mst_buy_campaign_list.php">買取キャンペーン</a>
				<a href="/kagoya/mst_buy_campaign_content_list.php">コンテンツ</a>
				<a href="/kagoya/mst_buy_campaign_layout_list.php">レイアウト</a>
				<a href="/kagoya/mst_buy_result_list.php">買取実績例</a>
			</div>
		</div>
		<a href="https://rifa.life/kagoya/mst_result_category_list.php">resultマスタ</a>
		<a href="https://rifa.life/kagoya/interview_list.php">インタビュー</a>
		<a href="https://rifa.life/kagoya/videos_list.php">動画マスタ</a>
	</div>
	<div class="all_header_ttl">evaProject</div>
	<div class="all_header">
		<a href="https://rifa.life/evaProject/pl_statement/department">採算表</a>
        <a href="https://rifa.life/evaProject/in_house_sales">配賦料率決定画面</a>
		<a href="https://rifa.life/evaProject/task">タスク一覧</a>
		<a href="https://rifa.life/evaProject/rapa">rapa一覧</a>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				身分証確認業務
			</div>
			<div class="slide_child_body">
				<a href="https://rifa.life/evaProject/mypage/id_pdf_file_upload">PDFファイルアップ画面</a>
				<a href="https://rifa.life/evaProject/mypage/id_pdf_file_batch">PDF顧客紐付け画面</a>
				<a href="https://rifa.life/evaProject/mypage/idfile_confirm/list/waiting">最終確認待ち一覧</a>
			</div>
		</div>
		<a href="https://rifa.life/evaProject/seiyakumachi">成約待ち一覧</a>
		<a href="https://rifa.life/evaProject/ichiba_func/img_batch/scan_seq">市場画像一括アップ</a>
		<a href="https://rifa.life/evaProject/satei_func/search/list">査定検索画面一覧</a>
		<a href="https://rifa.life/evaProject/analysisMail/dashboard/index">AnalysisMail</a>
		<a href="https://rifa.life/evaProject/ycbm/Eoc_check">YCBM顧客確認</a>
		<a href="https://rifa.life/evaProject/area_report">地域別買備レポート</a>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				集計ページ
			</div>
			<div class="slide_child_body">
				<a href="https://rifa.life/evaProject/vw_report_seiyaku">成約金額集計</a>
				<a href="https://rifa.life/evaProject/vw_report_arari">粗利益集計</a>
				<a href="https://rifa.life/evaProject/vw_inventory_report">在庫効率化集計</a>
			</div>
		</div>

	</div>
	<div class="all_header_ttl">重要</div>
	<div class="all_header">
		<a href="https://d.bmb.jp/bm/p/f/tf.php?id=bm62029px&task=cancel">BMメルマガ解除</a>
		<a href="/include/hinban_get/">品番削除</a>
		<div class="slide_parent_box">
			<div class="slide_child_head">
				ヴィトン
			</div>
			<div class="slide_child_body">
				<a href="/graph/vw_satei_to_kanryou_Ymd_vuitton_Chart_chart.php?q=(time~between~2018%2F05%2F01%2000%3A00%3A00~date2~2018%2F05%2F31%2000%3A00%3A00)">査定完了グラフ</a>
			</div>
		</div>
	</div>

	<!-- <div class="all_header_ttl">マイページ</div>
	<div class="all_header">
		<div class="slide_parent_box">
			<div class="slide_child_head">
				メール設定
			</div>
			<div class="slide_child_body">
				<a href="/MyPage/mst_mail_template___select_list.php">メールパーツセレクト</a>
				<a href="/MyPage/mst_mail_template___parts_categories_list.php">メールカテゴリー</a>
				<a href="/MyPage/mst_mail_template___parts_list.php">メールパーツ</a>
			</div>
		</div>
	</div> -->





</div>

<div id="to_top">トップへ</div>
<?
//ページごとの読み込みファイル
$current_page_pass = $_SERVER["REQUEST_URI"];
// if(stristr($current_page_pass, "/shop5/")){
?>
<style type="text/css">
	.bs-fixedheader {
		z-index: 1000000000;
	}

	#head_menu {
		display: inline-block;
		border: 1px solid #dcdcdc;
		width: 150px;
		text-align: center;
		padding: 10px 0;
		margin: 0 10px 5px;
		cursor: pointer;
		line-height: 1;
	}

	.all_header_ttl {
		padding: 10px 10px;
		background-color: #eee;
		margin: 10px 0 0;
		font-size: 15px;
	}

	#header_back.active {
		display: block;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.5);
		z-index: 1000;
		padding: 0px 100px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	#all_header_field.active {
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		/*background-color: rgba(0,0,0,0.5);*/
		z-index: 1000;
		padding: 0px 100px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	#header_back,
	#all_header_field {
		display: none;
	}

	#all_header_field.active .all_header {
		display: -webkit-box;
		/*--- Androidブラウザ用 ---*/
		display: -ms-flexbox;
		/*--- IE10 ---*/
		display: -webkit-flex;
		/*--- safari（PC）用 ---*/
		display: flex;
		background-color: #fff;
		padding: 10px 10px 10px;
	}

	.all_header {
		display: none;
	}

	.all_header a:hover {
		cursor: pointer;
		font-weight: bold;
	}

	.all_header>a {
		min-width: 120px;
		display: block;
		color: #fff;
		text-decoration: none;
		border: 1px solid #fff;
		padding: 5px 10px;
		background-color: #1e8fd0;
		text-align: center;
		font-size: 12px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	.slide_child_head {
		min-width: 120px;
		display: block;
		color: #fff;
		text-decoration: none;
		border: 1px solid #fff;
		padding: 5px 10px;
		background-color: #6fc9fd;
		text-align: center;
		font-size: 12px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	.slide_child_body a {
		min-width: 200px;
		width: 250px;
		display: block;
		color: #fff;
		text-decoration: none;
		border: 1px solid #fff;
		padding: 5px 10px;
		background-color: #1e8fd0;
		text-align: left;
	}

	.slide_parent_box {
		position: relative;
	}

	.slide_parent_box:hover .slide_child_body {
		display: block;
		z-index: 10000;
		font-size: 12px;
	}

	.slide_child_body {
		display: none;
		position: absolute;
		top: 100%;
		left: 0;
	}

	#to_top {
		position: fixed;
		top: 0;
		right: 0;
		background-color: #111;
		color: #fff;
		padding: 10px 15px;
		border-radius: 12px;
		cursor: pointer;
	}

	#sidebar1.off_z {
		z-index: -1;
	}

	body>p[align="center"]>font {
		display: none;
	}

	body .modal-dialog {
		margin-top: 130px;
	}
</style>
<script type="text/javascript">
	var body_html = $('html,body');
	$("#to_top").click(function() {
		body_html.animate({
			scrollTop: 0
		}, 200);
		return false;
	})
	$("#head_menu").click(function() {
		$("#header_back").addClass('active');
		$("#all_header_field").addClass('active');
		$("#sidebar1").addClass('off_z');
	});
	$("#all_header_field").click(function() {
		close_menu();
	})
	$("#header_back").click(function() {
		close_menu();
	})

	function close_menu() {
		$("#header_back").removeClass('active');
		$("#all_header_field").removeClass('active');
		$("#sidebar1").removeClass('off_z');
	}
	$("#db_restart").click(function() {
		if (window.confirm('データベースを再起動します。\n声掛けよろしいですか？')) {
			window.alert('実行開始します。');
		} else {
			window.alert('キャンセルされました');
			return false;
		}
	});
</script>
<?
// }
//include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shop5_box/list_page_script.php";
//box一覧
if (stristr($current_page_pass, "shop5_box/box_list.php")) {
	include_once $_SERVER["DOCUMENT_ROOT"] . "/include/page_event/shop5_box/list_page_script.php";
}
?>
