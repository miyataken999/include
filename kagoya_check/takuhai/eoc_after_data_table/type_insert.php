<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>
<style type="text/css" >
#eoc_after_data_table .top_row_th {
    background-color: #91ff84;
    padding: 5px 0;
}
.alert_background_color{
  background:#ff0000!important;
}
.alert_row{
  background:#ff0000!important;
  color:#fff;
}
.alert_background_color span{
  color:#fff!important;
}
</style>
<?
array_push($eoc_up_col,array('name'=>'sagawa_shuuka_flag','wamei'=>'佐川集荷依頼'));
array_push($eoc_up_col,array('name'=>'rakuda_csv_flag','wamei'=>'配送印刷'));
array_push($eoc_up_col,array('name'=>'FLAG_SPEED','wamei'=>'スピード'));
array_push($eoc_up_col,array('name'=>'kit_flag','wamei'=>'宅配キット'));
array_push($eoc_up_col,array('name'=>'size_kosuu','wamei'=>'キット種別'));
array_push($eoc_up_col,array('name'=>'EOC_REUSE','wamei'=>'再利用'));
array_push($eoc_up_col,array('name'=>'EOC_SIZE','wamei'=>'サイズ'));
array_push($eoc_up_col,array('name'=>'EOC_NUMBER','wamei'=>'個数'));
array_push($eoc_up_col,array('name'=>'EOC_SPECIFIED_TIME','wamei'=>'時間帯指定'));
array_push($eoc_up_col,array('name'=>'EOC__DATE_AND_TIME_2','wamei'=>'日時'));
array_push($eoc_up_col,array('name'=>'EOC__DELIVERY_DATES','wamei'=>'集荷日時'));
array_push($eoc_up_col,array('name'=>'EOC__BOX_NUMBER','wamei'=>'箱数'));
array_push($eoc_up_col,array('name'=>'purchase_type','wamei'=>'買取種別'));
array_push($eoc_up_col,array('name'=>'name1_sei','wamei'=>'姓'));
array_push($eoc_up_col,array('name'=>'name1_mei','wamei'=>'名'));
array_push($eoc_up_col,array('name'=>'name2_sei','wamei'=>'セイ'));
array_push($eoc_up_col,array('name'=>'name2_mei','wamei'=>'メイ'));
array_push($eoc_up_col,array('name'=>'sex','wamei'=>'性別'));
array_push($eoc_up_col,array('name'=>'tel','wamei'=>'電話'));
array_push($eoc_up_col,array('name'=>'tel2','wamei'=>'携帯'));
array_push($eoc_up_col,array('name'=>'mail1','wamei'=>'メアド'));
array_push($eoc_up_col,array('name'=>'mail_check_type','wamei'=>'メルマガ拒否'));
array_push($eoc_up_col,array('name'=>'tel_mail_line','wamei'=>'返答方法'));
array_push($eoc_up_col,array('name'=>'zip1','wamei'=>'郵便番号'));
array_push($eoc_up_col,array('name'=>'zip2','wamei'=>'郵便番号2'));
array_push($eoc_up_col,array('name'=>'address1','wamei'=>'都道府県'));
array_push($eoc_up_col,array('name'=>'address2','wamei'=>'市区町村'));
array_push($eoc_up_col,array('name'=>'address3','wamei'=>'以下住所'));
array_push($eoc_up_col,array('name'=>'EOC_COURIER_CHECK','wamei'=>'宅配チェック'));
array_push($eoc_up_col,array('name'=>'insurance_kingaku','wamei'=>'配送補償'));
array_push($eoc_up_col,array('name'=>'kaitori_staff_id','wamei'=>'買取者'));
array_push($eoc_up_col,array('name'=>'remark','wamei'=>'備考'));
array_push($eoc_up_col,array('name'=>'timeline_text','wamei'=>'タイムライン'));
array_push($eoc_up_col,array('name'=>'SEARCH_SITE','wamei'=>'検索サイト'));
array_push($eoc_up_col,array('name'=>'SEARCH_MEDIA','wamei'=>'検索媒体'));
array_push($eoc_up_col,array('name'=>'eoc_search_keyword','wamei'=>'検索キーワード'));
array_push($eoc_up_col,array('name'=>'_registerd_id','wamei'=>'顧客登録者'));
array_push($eoc_up_col,array('name'=>'created_t','wamei'=>'顧客登録日'));
array_push($eoc_up_col,array('name'=>'key_code','wamei'=>'暗号化メールアドレス'));
array_push($eoc_up_col,array('name'=>'mousikomi_id','wamei'=>'申込みIP'));
array_push($eoc_up_col,array('name'=>'cv_time','wamei'=>'申込み日付'));
?>

<form id="eoc_after_data_table_form" action="./submit_insert.php" method="post">
	<input type="hidden" name="move_id" value="<?=$hikaku_id?>">
<table cellpadding="0" cellspacing="0" id="eoc_after_data_table">
	<tr class="ttl_row">
		<th colspan="3" class="top_row_th">新規追加</th>
	</tr>
	<tr class="ttl_row">
		<th>項目名</th>
		<th style="width: 200px;">入力値</th>
		<th>反映値</th>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i=0;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$sagawa_shuuka_flag?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<input type="checkbox" <?if($sagawa_shuuka_flag ==1){?>checked<?}?> >
			<input type="hidden" name="sagawa_shuuka_flag" value="<?=$sagawa_shuuka_flag?>" >
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$haisou_insatsu?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<input type="checkbox" <?if($haisou_insatsu ==1){?>checked<?}?> >
			<input type="hidden" name="haisou_insatsu" value="<?=$haisou_insatsu?>" >
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$FLAG_SPEED?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<input type="checkbox" <?if($FLAG_SPEED ==1){?>checked<?}?> >
			<input type="hidden" name="FLAG_SPEED" value="<?=$FLAG_SPEED?>" >
		</span></td>
	</tr>

<?php 
		if(preg_match("/ベーシック/",$type_selection)){
			$kit_flag = 1;
		} else {
			$kit_flag = 0;
		}
?>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$kit_flag?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<input type="checkbox" <?if($kit_flag ==1){?>checked<?}?> >
			<input type="hidden" name="kit_flag" value="<?=$kit_flag?>" >
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$kit_detail?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><textarea name="kit_detail" value="<?=$kit_detail?>"><?=$kit_detail?></textarea></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$reuse_box?></span></td>
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
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="speed_date" value="<?=$speed_date?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$speed_time?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="speed_time" >
				<option value="">選択して下さい。</option>
				<option value="01" <?if($speed_time == "01"){?>selected<?}?>>午前中</option>
        <option value="12-14" <?if($speed_time == "12-14"){?>selected<?}?>>12時～14時</option>
				<option value="14-16" <?if($speed_time == "14-16"){?>selected<?}?>>14時～16時</option>
				<option value="16-18" <?if($speed_time == "16-18"){?>selected<?}?>>16時～18時</option>
				<option value="18-21" <?if($speed_time == "18-21"){?>selected<?}?>>18時～21時</option>
				<!-- <option value="19" <?if($speed_time == "19"){?>selected<?}?>>19</option> -->
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$speed_box?></span></td>
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
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
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
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="purchase_type"  required="required">
				<option value="">選択して下さい。</option>
				<option value="3" <?if($purchase_type == "3"){?>selected<?}?>>宅kin</option>
				<option value="5" <?if($purchase_type == "5"){?>selected<?}?>>宅bra</option>
				<option value="25" <?if($purchase_type == "25"){?>selected<?}?>>宅dia</option>
			</select>
		</span></td>
	</tr>

<?
////////////////////【姓】文字化け確認//////////////////////
$sei_garbled_alert_flag = "";//姓文字化けフラグ
if($user_name_sei!=""){
  $user_name_sei_check = mb_convert_encoding($user_name_sei,"iso-2022-jp","UTF-8");
  $user_name_sei_check = mb_convert_encoding($user_name_sei_check,"UTF-8","iso-2022-jp");
  if(stristr($user_name_sei_check,'??')){
    $sei_garbled_alert_flag = "on";
  }
}
////////////////////end【姓】文字化け確認//////////////////////
////////////////////【名】文字化け確認//////////////////////
$mei_garbled_alert_flag = "";//名文字化けフラグ
if($user_name_sei!=""){
  $user_name_mei_check = mb_convert_encoding($user_name_mei,"iso-2022-jp","UTF-8");
  $user_name_mei_check = mb_convert_encoding($user_name_mei_check,"UTF-8","iso-2022-jp");
  if(stristr($user_name_mei_check,'??')){
    $mei_garbled_alert_flag = "on";
  }
}
////////////////////end【名】文字化け確認//////////////////////
if($sei_garbled_alert_flag == "on"){
?>
  <tr class="ecc_row">
    <td></td>
    <td class="alert_row" colspan="2">文字化けするので、旧字体の修正をお願いします！</td>
  </tr>
<?
}
?>
  <tr class="ecc_row">
		<?$eoc_column_name_i++;
    if($sei_garbled_alert_flag == "on"){
    ?>
      <th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
      <td class="alert_background_color font_white"><span><?=$user_name_sei?></span></td>
      <td class="alert_background_color td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_sei" value="<?=$user_name_sei?>" ></span></td>
    <?
    }else{
    ?>
      <th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
      <td><span><?=$user_name_sei?></span></td>
      <td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_sei" value="<?=$user_name_sei?>" ></span></td>
    <?
    }
    ?>
	</tr>

  <?
  if(isset($_GET["test"])){
    $mei_garbled_alert_flag = "on";
  }
  if($mei_garbled_alert_flag == "on"){
  ?>
    <td class="alert_row" colspan="3">文字化けするので、旧字体の修正をお願いします！<td>
  <?
  }
  ?>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;

      if($mei_garbled_alert_flag == "on"){
      ?>
      <th class=" th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
      <td class="alert_background_color"><span><?=$user_name_mei?></span></td>
      <td class="alert_background_color td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_mei" value="<?=$user_name_mei?>" ></span></td>
      <?
      }else{
      ?>
      <th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
      <td><span><?=$user_name_mei?></span></td>
      <td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_mei" value="<?=$user_name_mei?>" ></span></td>
      <?
      }
      ?>
  </tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$user_name_kana_sei?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_kana_sei" value="<?=$user_name_kana_sei?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$user_name_kana_mei?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_name_kana_mei" value="<?=$user_name_kana_mei?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="sex">
				<option value="">選択して下さい。</option>
				<option value="男性">男性</option>
				<option value="女性">女性</option>
				<option value="不明">不明</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="tel" value="" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$tel_res?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="tel2" value="<?=$tel_res?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$user_mail?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_mail" value="<?=$user_mail?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span>
			<?
			//項目からなくし、デフォルト許可
			// if($mail_magazin == "1"){print "拒否";}elseif($mail_magazin == "2") {print "許可";}
			?>
			※項目外し済み
		</span></td>
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
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="tel_mail_line" >
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
		<td><span><?=$user_yuubinn_1?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_yuubinn_1" value="<?=$user_yuubinn_1?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$user_yuubinn_2?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_yuubinn_2" value="<?=$user_yuubinn_2?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$user_todou?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_todou" value="<?=$user_todou?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$user_sikutyouson?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_sikutyouson" value="<?=$user_sikutyouson?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$user_banti?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="user_banti" value="<?=$user_banti?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$takuhai_check?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<select name="takuhai_check" >
				<option value="">選択して下さい。</option>
				<option value="スピード" <?if($takuhai_check == "スピード"){?>selected<?}?>>スピード</option>
				<option value="佐川" <?if($takuhai_check == "佐川"){?>selected<?}?>>佐川</option>
				<option value="郵" <?if($takuhai_check == "郵"){?>selected<?}?>>郵</option>
			</select>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$insurance_kingaku?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="insurance_kingaku" value="<?=$insurance_kingaku?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><? //user_name_change($uid); ?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<?
			user_select_list("","kaitori_staff_id");
			?>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$bikou?></span></td>
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
	$bikou_in_txt .= "キット詳細：{$kit_detail}\n";
	$bikou_in_txt .= "配送時間指定：{$time_select_hidden}\n";
	$bikou_in_txt .= "配送補償：{$insurance}\n";
	$bikou_in_txt .= "配送補償対象金額：{$insurance_kingaku}\n";
	$bikou_in_txt .= "事前査定：{$line_satei}\n";
	$bikou_in_txt .= "利用規約・プライバシーポリシーの同意：同意する\n";
	$bikou_in_txt .= "暗号化メールアドレス：{$key_code}\n";
}else{
	$mousikomi_type = $speed_sbj;
	$bikou_in_txt .= "集荷予定箱数：{$speed_box}\n";
	$bikou_in_txt .= "希望集荷日時：{$date_and_time_hidden}\n";
	$bikou_in_txt .= "配送補償：{$insurance_speed}\n";
	$bikou_in_txt .= "配送補償対象金額：{$insurance_kingaku}\n";
	$bikou_in_txt .= "事前査定：{$line_satei}\n";
	$bikou_in_txt .= "利用規約・プライバシーポリシーの同意：同意する\n";
	$bikou_in_txt .= "暗号化メールアドレス：{$key_code}\n";
}

$bikoutext = "★time★\n";
$bikoutext .= $mousikomi_type."\n";
$bikoutext .= $bikou_in_txt."\n";
$bikoutext .= $bikou;
$bikou = $kizon_remark;
$timeline_text = $bikoutext;
?>
			<textarea name="bikou" value="<?=$bikou?>"><?=$bikou?></textarea>
		</span></td>
	</tr>
	<!-- タイムライン -->
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<textarea name="timeline_text"><?=$timeline_text?></textarea>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$anke_1?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="SEARCH_SITE" value="<?=$anke_1?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$anke_2?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="SEARCH_MEDIA" value="<?=$anke_2?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$anke_3?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<textarea name="eoc_search_keyword" value="<?=$anke_3?>"><?=$anke_3?></textarea>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><? user_name_change($uid); ?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>
			<?
			user_select_list($uid,"_registerd_id");
			?>
		</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span>保存後に自動入力されます。</span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$key_code?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="key_code" value="<?=$key_code?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$REMOTE_ADDR?></span></td>
		<td class="td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><input type="text" name="REMOTE_ADDR" value="<?=$REMOTE_ADDR?>" ></span></td>
	</tr>
	<tr class="ecc_row">
		<?$eoc_column_name_i++;?>
		<th class="th_<?=$eoc_up_col[$eoc_column_name_i]['name']?> td_<?=$eoc_up_col[$eoc_column_name_i]['name']?>"><span><?=$eoc_up_col[$eoc_column_name_i]['wamei']?></span></th>
		<td><span><?=$cv_time?></span></td>
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
