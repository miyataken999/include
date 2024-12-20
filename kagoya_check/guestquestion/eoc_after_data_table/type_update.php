<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>
<style type="text/css" >
#eoc_after_data_table .top_row_th {
    background-color: #f5ee16;
    padding: 5px 0;
}
</style>
<?
$kizon_column = array();
	array_push($kizon_column,'name1');
	array_push($kizon_column,'name2');
	array_push($kizon_column,'tel');
	array_push($kizon_column,'tel2');
	array_push($kizon_column,'mail1');
	array_push($kizon_column,'mail2');
	array_push($kizon_column,'zip1');
	array_push($kizon_column,'zip2');
	array_push($kizon_column,'address1');
	array_push($kizon_column,'address2');
	array_push($kizon_column,'address3');
	array_push($kizon_column,'remark');
	array_push($kizon_column,'created_t');
	array_push($kizon_column,'sagawa_shuukairai_denwabangou');
	array_push($kizon_column,'_registerd_id');
	array_push($kizon_column,'purchase_type');
	array_push($kizon_column,'line_check');


$kizon_select = "";
for ($kizon_i=0; $kizon_i < count($kizon_column); $kizon_i++) {
	if($kizon_select != ""){
		$kizon_select .= ",";
	}
	$kizon_select .= $kizon_column[$kizon_i];
}
$kizon_query = "SELECT {$kizon_select} FROM {$target_table} WHERE ecc_id={$kousin_id} LIMIT 1";



	$kizon_sql = mysql_query('SET NAMES utf8');
	$kizon_sql = mysql_query($kizon_query);
	while ($kizon_result = mysql_fetch_assoc($kizon_sql)) {

		$kizon_name1 = $kizon_result['name1'];
		$kizon_name1_array = explode("　", $kizon_name1);
		$kizon_name1_sei = $kizon_name1_array[0];
		$kizon_name1_mei = $kizon_name1_array[1];
		$kizon_name2 = $kizon_result['name2'];
		$kizon_name2_array = explode("　", $kizon_name2);
		$kizon_name2_sei = $kizon_name2_array[0];
		$kizon_name2_mei = $kizon_name2_array[1];
		$kizon_tel = $kizon_result['tel'];
		$kizon_tel2 = $kizon_result['tel2'];
		$kizon_mail1 = $kizon_result['mail1'];
		$kizon_mail2 = $kizon_result['mail2'];
		$kizon_zip1 = $kizon_result['zip1'];
		$kizon_zip2 = $kizon_result['zip2'];
		$kizon_address1 = $kizon_result['address1'];
		$kizon_address2 = $kizon_result['address2'];
		$kizon_address3 = $kizon_result['address3'];
		$kizon_remark = $kizon_result['remark'];
		$kizon_created_t = $kizon_result['created_t'];
		$kizon_sagawa_shuukairai_denwabangou = $kizon_result['sagawa_shuukairai_denwabangou'];
		$kizon__registerd_id = $kizon_result['_registerd_id'];
		$kizon_purchase_type = $kizon_result['purchase_type'];
		$kizon_line_check = $kizon_result['line_check'];


	}

array_push($eoc_up_col,array('name'=>'ecc_id','wamei'=>'顧客SEQ'));
array_push($eoc_up_col,array('name'=>'sagawa_shuuka_flag','wamei'=>'佐川集荷依頼'));
array_push($eoc_up_col,array('name'=>'rakuda_csv_flag','wamei'=>'配送印刷'));
array_push($eoc_up_col,array('name'=>'FLAG_SPEED','wamei'=>'スピード'));
array_push($eoc_up_col,array('name'=>'size_kosuu','wamei'=>'キット種別'));
array_push($eoc_up_col,array('name'=>'EOC_REUSE','wamei'=>'再利用'));
array_push($eoc_up_col,array('name'=>'EOC_SIZE','wamei'=>'サイズ'));
array_push($eoc_up_col,array('name'=>'EOC_NUMBER','wamei'=>'個数'));
array_push($eoc_up_col,array('name'=>'EOC_SPECIFIED_TIME','wamei'=>'時間帯指定'));
array_push($eoc_up_col,array('name'=>'EOC__DATE_AND_TIME_2','wamei'=>'日時'));
array_push($eoc_up_col,array('name'=>'EOC__DELIVERY_DATES','wamei'=>'集荷日時'));
array_push($eoc_up_col,array('name'=>'EOC__BOX_NUMBER','wamei'=>'箱数'));
// array_push($eoc_up_col,array('name'=>'purchase_type','wamei'=>'買取種別'));
array_push($eoc_up_col,array('name'=>'kizon_purchase_type','wamei'=>'現　買取種別'));
array_push($eoc_up_col,array('name'=>'name1_sei','wamei'=>'姓'));
array_push($eoc_up_col,array('name'=>'name1_mei','wamei'=>'名'));
array_push($eoc_up_col,array('name'=>'name2_sei','wamei'=>'セイ'));
array_push($eoc_up_col,array('name'=>'name2_mei','wamei'=>'メイ'));
array_push($eoc_up_col,array('name'=>'tel','wamei'=>'電話'));
array_push($eoc_up_col,array('name'=>'tel2','wamei'=>'携帯'));
array_push($eoc_up_col,array('name'=>'mail1','wamei'=>'メアド'));
array_push($eoc_up_col,array('name'=>'mail2','wamei'=>'メアド2'));
array_push($eoc_up_col,array('name'=>'mail_check_type','wamei'=>'メルマガ拒否'));
array_push($eoc_up_col,array('name'=>'hentou_houhou','wamei'=>'返答方法'));
array_push($eoc_up_col,array('name'=>'zip1','wamei'=>'郵便番号'));
array_push($eoc_up_col,array('name'=>'zip2','wamei'=>'郵便番号2'));
array_push($eoc_up_col,array('name'=>'address1','wamei'=>'都道府県'));
array_push($eoc_up_col,array('name'=>'address2','wamei'=>'市区町村'));
array_push($eoc_up_col,array('name'=>'address3','wamei'=>'以下住所'));
array_push($eoc_up_col,array('name'=>'EOC_COURIER_CHECK','wamei'=>'宅配チェック'));
array_push($eoc_up_col,array('name'=>'kaitori_staff_id','wamei'=>'買取者'));
array_push($eoc_up_col,array('name'=>'line_check','wamei'=>'ライン本確'));
array_push($eoc_up_col,array('name'=>'remark','wamei'=>'備考'));
array_push($eoc_up_col,array('name'=>'SEARCH_SITE','wamei'=>'検索サイト'));
array_push($eoc_up_col,array('name'=>'SEARCH_MEDIA','wamei'=>'検索媒体'));
array_push($eoc_up_col,array('name'=>'eoc_search_keyword','wamei'=>'検索キーワード'));
array_push($eoc_up_col,array('name'=>'_registerd_id','wamei'=>'顧客登録者'));
array_push($eoc_up_col,array('name'=>'created_t','wamei'=>'顧客登録日'));
array_push($eoc_up_col,array('name'=>'key_code','wamei'=>'暗号化メールアドレス'));
array_push($eoc_up_col,array('name'=>'mousikomi_id','wamei'=>'申込みIP'));
array_push($eoc_up_col,array('name'=>'cv_time','wamei'=>'申込み日付'));


?>

<form id="eoc_after_data_table_form" action="./submit_update.php" method="post">
	<input type="hidden" name="move_id" value="<?=$hikaku_id?>">

<table cellpadding="0" cellspacing="0" id="eoc_after_data_table">
	<tr class="ttl_row">
		<th colspan="4" class="top_row_th">既存顧客更新</th>
	</tr>
	<tr class="ttl_row">
		<th>項目名</th>
		<th style="width: 200px;">入力値</th>
		<th class="copy_col"></th>
		<th>反映値</th>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i=0;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$kousin_id?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<input type="hidden" name="ecc_id" value="<?=$kousin_id?>" >
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$sagawa_shuuka_flag?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<input type="checkbox" <?if($sagawa_shuuka_flag ==1){?>checked<?}?> >
			<input type="hidden" name="sagawa_shuuka_flag" value="<?=$sagawa_shuuka_flag?>" >
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$haisou_insatsu?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<input type="checkbox" <?if($haisou_insatsu ==1){?>checked<?}?> >
			<input type="hidden" name="haisou_insatsu" value="<?=$haisou_insatsu?>" >
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$FLAG_SPEED?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<input type="checkbox" <?if($FLAG_SPEED ==1){?>checked<?}?> >
			<input type="hidden" name="FLAG_SPEED" value="<?=$FLAG_SPEED?>" >
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$kit_detail?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><textarea name="kit_detail" value="<?=$kit_detail?>"><?=$kit_detail?></textarea></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$reuse_box?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="reuse_box" >
				<option value="">未選択</option>
				<option value="再利用" <?if(stristr($reuse_box,"再利用")){?>selected<?}?>>再利用</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$kit_size?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="kit_size">
				<option value="">選択して下さい。</option>
				<option value="SS" <?if($kit_size == "SS"){?>selected<?}?>>SS</option>
				<option value="S" <?if($kit_size == "S"){?>selected<?}?>>S</option>
				<option value="M" <?if($kit_size == "M"){?>selected<?}?>>M</option>
				<option value="L" <?if($kit_size == "L"){?>selected<?}?>>L</option>
				<option value="LL" <?if($kit_size == "LL"){?>selected<?}?>>LL</option>
				<option value="その他" <?if($kit_size == "その他"){?>selected<?}?>>その他</option>
				<option value="伝票" <?if($kit_size == "伝票"){?>selected<?}?>>伝票</option>
				<option value="クッション封筒" <?if($kit_size == "クッション封筒"){?>selected<?}?>>クッション封筒</option>
				<option value="返品" <?if($kit_size == "返品"){?>selected<?}?>>返品</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$kit_kosuu?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="kit_kosuu" >
				<option value="">選択して下さい。</option>
				<option value="×１" <?if($kit_kosuu == "1"){?>selected<?}?>>×１</option>
				<option value="×２" <?if($kit_kosuu == "2"){?>selected<?}?>>×２</option>
				<option value="×３" <?if($kit_kosuu == "3"){?>selected<?}?>>×３</option>
				<option value="×４" <?if($kit_kosuu == "4"){?>selected<?}?>>×４</option>
				<option value="×５" <?if($kit_kosuu == "5"){?>selected<?}?>>×５</option>
				<option value="×その他" <?if($kit_kosuu == "その他"){?>selected<?}?>>×その他</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$time_select?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="time_select" >
				<option value="">選択して下さい。</option>
				<option value="00" <?if($time_select == "00"){?>selected<?}?>>00</option>
				<option value="01" <?if($time_select == "01"){?>selected<?}?>>01</option>
				<option value="12" <?if($time_select == "12"){?>selected<?}?>>12</option>
				<option value="14" <?if($time_select == "14"){?>selected<?}?>>14</option>
				<option value="16" <?if($time_select == "16"){?>selected<?}?>>16</option>
				<option value="18" <?if($time_select == "18"){?>selected<?}?>>18</option>
				<option value="20" <?if($time_select == "20"){?>selected<?}?>>20</option>
				<option value="04" <?if($time_select == "04"){?>selected<?}?>>04</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$speed_date?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="speed_date" value="<?=$speed_date?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$speed_time?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="speed_time" >
				<option value="">選択して下さい。</option>
				<option value="01" <?if($speed_time == "01"){?>selected<?}?>>01</option>
				<option value="11" <?if($speed_time == "11"){?>selected<?}?>>11</option>
				<option value="13" <?if($speed_time == "13"){?>selected<?}?>>13</option>
				<option value="15" <?if($speed_time == "15"){?>selected<?}?>>15</option>
				<option value="17" <?if($speed_time == "17"){?>selected<?}?>>17</option>
				<option value="19" <?if($speed_time == "19"){?>selected<?}?>>19</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$speed_box?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="speed_box" >
				<option value="">選択して下さい。</option>
				<option value="1" <?if($speed_box == "1"){?>selected<?}?>>1</option>
				<option value="2" <?if($speed_box == "2"){?>selected<?}?>>2</option>
				<option value="3" <?if($speed_box == "3"){?>selected<?}?>>3</option>
				<option value="4" <?if($speed_box == "4"){?>selected<?}?>>4</option>
				<option value="5" <?if($speed_box == "5"){?>selected<?}?>>5</option>
				<option value="それ以上" <?if($speed_box == "それ以上"){?>selected<?}?>>それ以上</option>
			</select>
		</span></td>
	</tr>
	<!-- <tr class="ecc_row">
		<?//$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span>
			<?
			if($purchase_type == "3"){
				print '宅kin';
			}elseif($purchase_type == "5"){
				print '宅bra';
			}elseif($purchase_type == "25"){
				print '宅dia';
			}
			?>
		</span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="purchase_type" >
				<option value="">選択して下さい。</option>
				<option value="3" <?if($purchase_type == "3"){?>selected<?}?>>宅kin</option>
				<option value="5" <?if($purchase_type == "5"){?>selected<?}?>>宅bra</option>
				<option value="25" <?if($purchase_type == "25"){?>selected<?}?>>宅dia</option>
			</select>
		</span></td>
	</tr> -->
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="hidden" name="kizon_purchase_type" value="<?=$kizon_purchase_type?>" >
			<?
			if($kizon_purchase_type == "3"){
				print '宅kin';
			}elseif($kizon_purchase_type == "5"){
				print '宅bra';
			}elseif($kizon_purchase_type == "25"){
				print '宅dia';
			}
			?>
		</span></td>
	</tr>


	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_name_sei?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_sei" value="<?=$kizon_name1_sei?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_name_mei?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_mei" value="<?=$kizon_name1_mei?>" ></span></td>
	</tr>

	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_name_kana_sei?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_kana_sei" value="<?=$kizon_name2_sei?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_name_kana_mei?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_kana_mei" value="<?=$kizon_name2_mei?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$tel_res?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="tel" value="<?=$kizon_tel?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$tel2?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="tel2" value="<?=$kizon_tel2?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_mail?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_mail1" value="<?=$kizon_mail1?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_mail2" value="<?=$kizon_mail2?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span>
			<?
			if($mail_magazin == "1"){print "拒否";}elseif($mail_magazin == "2") {print "許可";}
			?>
		</span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="mail_magazin" >
				<option value="">選択して下さい。</option>
				<option value="1" <?if($mail_magazin == "1"){?>selected<?}?>>拒否</option>
				<option value="2" <?if($mail_magazin == "2"){?>selected<?}?>>許可</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span>
			<?
			if($tel_mail_line == "1"){
				print "メール";
			}elseif($tel_mail_line == "2"){
				print "電話";
			}elseif($tel_mail_line == "5"){
				print "ライン";
			}
			?>
		</span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="hentou_houhou" >
				<option value="">選択して下さい。</option>
				<option value="1" <?if($tel_mail_line == "1"){?>selected<?}?>>M</option>
				<option value="2" <?if($tel_mail_line == "2"){?>selected<?}?>>T</option>
				<option value="3" >F</option>
				<option value="4" >M T</option>
				<option value="5" <?if($tel_mail_line == "5"){?>selected<?}?>>L</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_yuubinn_1?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_yuubinn_1" value="<?=$kizon_zip1?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_yuubinn_2?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_yuubinn_2" value="<?=$kizon_zip2?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_todou?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_todou" value="<?=$kizon_address1?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_sikutyouson?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_sikutyouson" value="<?=$kizon_address2?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td class="kizon_data_td"><span><?=$user_banti?></span></td>
		<td class="copy_col"><span class="<?=$eoc_up_col[$eoc_column_name_i]['name']?>_copy copy_btn" data="<?=$eoc_up_col[$eoc_column_name_i]['name']?>">⇒</span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_banti" value="<?=$kizon_address3?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$guestquestion_check?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="guestquestion_check" >
				<option value="">選択して下さい。</option>
				<option value="スピード" <?if($guestquestion_check == "スピード"){?>selected<?}?>>スピード</option>
				<option value="佐川" <?if($guestquestion_check == "佐川"){?>selected<?}?>>佐川</option>
				<option value="郵" <?if($guestquestion_check == "郵"){?>selected<?}?>>郵</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><? //user_name_change($uid); ?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<?
			user_select_list("","kaitori_staff_id");
			?>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?
		if($kizon_line_check == '1'){
			print "<img src='/include/img/check_yes.gif'>";
		}else{
			print "<img src='/include/img/check_no.gif'>";
		}
		?></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$bikou?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
<?
switch ($cv_site) {
    case 'kinkaimasu.jp':
        $speed_sbj ="【宅配申込】kinkaiスピード";//スピード件名
        $basic_sbj ="【宅配申込】kinkaiベーシック";//ベーシック件名
        break;
    case 'diakaimasu.jp':
        $speed_sbj ="【宅配申込】diakaiスピード";//スピード件名
        $basic_sbj ="【宅配申込】diakaiベーシック";//ベーシック件名
        break;
    case 'brandkaimasu.com':
        $speed_sbj ="【宅配申込】brakaiスピード";//スピード件名
        $basic_sbj ="【宅配申込】brakaiベーシック";//ベーシック件名
        //URL振り分け
        if($cv_page == "brakai_ladies"){
            $speed_sbj = "【宅配申込】ledies_LPスピード";
            $basic_sbj = "【宅配申込】ledies_LPベーシック";
        }elseif($cv_page == "brakai_mens"){
            $speed_sbj = "【宅配申込】mens_LPスピード";
            $basic_sbj = "【宅配申込】mens_LPベーシック";
        }elseif($cv_page == "brakai_vuitton"){
            $speed_sbj = "【宅配申込】LV_LPスピード";
            $basic_sbj = "【宅配申込】LV_LPベーシック";
        }elseif($cv_page == "brakai_chanel"){
            $speed_sbj = "【宅配申込】Chanel_LPスピード";
            $basic_sbj = "【宅配申込】Chanel_LPベーシック";
        }elseif($cv_page == "brakai_hermes"){
            $speed_sbj = "【宅配申込】Hermes_LPスピード";
            $basic_sbj = "【宅配申込】Hermes_LPベーシック";
        }else{
        }
        break;
}
if(preg_match("/ベーシック/",$type_selection)){
	$mousikomi_type = $basic_sbj;
	$bikou_in_txt = "キットコンディション：{$reuse_box}\n";
	$bikou_in_txt .= "キット詳細：{$kit_detail}";
	$bikou_in_txt .= "配送時間指定：{$time_select_hidden}\n";
	$bikou_in_txt .= "配送補償：{$insurance}\n";
	$bikou_in_txt .= "利用規約・プライバシーポリシーの同意：同意する\n";
	$bikou_in_txt .= "暗号化メールアドレス：{$key_code}\n";
}else{
	$mousikomi_type = $speed_sbj;
	$bikou_in_txt .= "集荷予定箱数：{$speed_box}\n";
	$bikou_in_txt .= "希望集荷日時：{$date_and_time_hidden}\n";
	$bikou_in_txt .= "配送補償：{$insurance_speed}\n";
	$bikou_in_txt .= "利用規約・プライバシーポリシーの同意：同意する\n";
	$bikou_in_txt .= "暗号化メールアドレス：{$key_code}\n";
}

$bikoutext = "★time★\n";
$bikoutext .= $mousikomi_type."\n";
$bikoutext .= $bikou_in_txt."\n";
$bikoutext .= $bikou;
$bikou = $kizon_remark."\n".$bikoutext;
?>
			<textarea name="bikou" value="<?=$bikou?>"><?=$bikou?></textarea>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$anke_1?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="SEARCH_SITE" value="<?=$anke_1?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$anke_2?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="SEARCH_MEDIA" value="<?=$anke_2?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$anke_3?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<textarea name="eoc_search_keyword" value="<?=$anke_3?>"><?=$anke_3?></textarea>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><? user_name_change($kizon__registerd_id); ?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<? user_name_change($kizon__registerd_id); ?>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$kizon_created_t?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$key_code?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="key_code" value="<?=$key_code?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$REMOTE_ADDR?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="REMOTE_ADDR" value="<?=$REMOTE_ADDR?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$cv_time?></span></td>
		<td class="copy_col"><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="hidden" name="cv_time" value="<?=$cv_time?>" ></span></td>
	</tr>
</table>

<div class="submit_box">
	<input type="submit" name="" value="送信する">
</div>

</form>

<script type="text/javascript">
	var checked_flag = "";
	$("#eoc_after_data_table input[type='checkbox']").change(function(){
		checked_flag = $(this).prop("checked");
		if(checked_flag == true){
			checked_flag = '1';
		}else{
			checked_flag = '0';
		}
		$(this).siblings("input[type='hidden']").val(checked_flag);
		checked_flag = "";
	})

var copy_name = "";
var copy_data = "";
$(".copy_btn").click(function(){
	copy_name = $(this).attr("data");
	copy_data = $(this).parent().siblings(".kizon_data_td").find("span").text();
	// copy_data = $(".th_"+copy_name).find("span").text();
	console.log("copy_data  "+copy_data);
	$("td.td_"+copy_name).find("input").val(copy_data);
})

	// $("#eoc_after_data_table input[type='checkbox']").each(function(index,ele){
	// 	checked_flag = $(this).siblings("input[type='text']").val();
	// 	if(checked_flag == '1'){
	// 		checked_flag = 'true';
	// 	}else{
	// 		checked_flag = 'false';
	// 	}
	// 	$(this).prop("checked",checked_flag);
	// })

	$("#eoc_after_data_table").find(".td_sagawa_shuuka_flag input").focus();

</script>
