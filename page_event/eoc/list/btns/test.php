<?
$ecc_id = $value;

$html = "";
$html .= "<div class='btns_col'>";

$c_sql = "SELECT COUNT(`chigin_id`) as 'ct' from Eoc_chigins where chigin_ecc_id={$ecc_id}";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='Eoc_chigins_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>買取備考{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (ecc_id={$ecc_id}) AND (`status` =126 OR `status` =34) AND (`kinsa_flag` =1)";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='kin_satei_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>NEW 金査定一覧{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (ecc_id={$ecc_id}) AND
(`category_id` =  10 OR `category_id` =  12 OR `category_id` =  17 OR `category_id` =  18 OR `category_id` =  19 OR `category_id` =  50 OR `category_id` =  20 OR `category_id` =  51 OR `category_id` =  21 OR `category_id` =  22 OR `category_id` =  23)
AND (`status` =32 OR `status` =34)";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='satei_of_jewelry_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>宝飾査定{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (ecc_id={$ecc_id}) AND
(`category_id` !=  10 AND `category_id` !=  17 AND `category_id` !=  18 AND `category_id` !=  19 AND `category_id` !=  50 AND `category_id` !=  20 AND `category_id` !=  51 AND `category_id` !=  21 AND `category_id` !=  22 AND `category_id` !=  23)
AND (`status` =32 OR `status` =34)";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='satei_of_brand1_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>服飾査定{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (ecc_id={$ecc_id}) AND ((`status` = 122) OR (`status` = 120) OR (`status` = 127) OR (`status` = 128) OR (`status` = 129) OR (`status` = 134))";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='dia_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>NEW D在{$ct}</a>";

//大量査定のリンク
/*
新規申込
到着済
成約あり
振込確認済
振込メール送信済
完了
合わず
振込メール未送信
査定中
エクスポート済み
店頭成約済み
*/
$c_sql = "SELECT id, is_many_product from Eoc_takuhai
          where
          ecc_id='{$ecc_id}'
          and(
          `status`=1
          or `status`=4
          or `status`=5
          or `status`=6
          or `status`=7
          or `status`=8
          or `status`=9
          or `status`=10
          or `status`=12
          or `status`=16
          or `status`=17
          )
          order by id desc limit 1
          ";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$Eoc_takuhai_satei_id = $c_data["id"];
if($Eoc_takuhai_satei_id > 0){
  if($c_data["is_many_product"] == 1){
    $c_sql = "SELECT COUNT(a.id) as 'ct' FROM many_product as a
              LEFT JOIN many_product_group as b on a.many_product_group_id=b.id
              WHERE b.Eoc_takuhai_id='{$Eoc_takuhai_satei_id}' LIMIT 1";
    $c_rs = CustomQuery($c_sql);
    $c_data = db_fetch_array($c_rs);
    $tairyou_ct = $c_data["ct"];
    if($tairyou_ct > 0){
      $html .= "<a class='btn btn-outline-primary' href='https://rifa.life/evaProject/many_satei/{$Eoc_takuhai_satei_id}'>大量宝飾査定({$tairyou_ct})</a>";
    }else{
      $html .= "<a class='btn btn-outline-primary' href='https://rifa.life/evaProject/many_satei/{$Eoc_takuhai_satei_id}'>大量宝飾査定</a>";
    }
  }else{
    $html .= "<a class='btn btn-outline-primary' href='https://rifa.life/evaProject/many_satei/{$Eoc_takuhai_satei_id}'>大量宝飾査定</a>";
  }
  $html .= "<a class='btn btn-outline-primary' href='https://rifa.life/evaProject/many_satei/{$Eoc_takuhai_satei_id}?is_direct_edit'>大量宝飾査定　直接編集</a>";

}



$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (ecc_id={$ecc_id}) AND (`status` =32 OR `status` =34)";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='satei_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>査定物一覧{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='kaibutu_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>買取物一覧{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (ecc_id={$ecc_id}) AND (`status` =34)";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='awazu_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>合わず一覧{$ct}</a>";

$c_sql = "SELECT COUNT(`id`) as 'ct' from mailsystem_send_schedule where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='mailsystem_send_schedule_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>メールログ{$ct}</a>";


$c_sql = "SELECT COUNT(`id`) as 'ct' from Eoc_guestquestion where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='Eoc_guestquestion_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>サイトアンケート{$ct}</a>";

// $html .= "<a class='btn btn-outline-primary' href='Eoc_chigins2_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>旧) 金査定一覧{$ct}</a>";

$c_sql = "SELECT COUNT(`id`) as 'ct' from Eoc_unfinished where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='Eoc_unfinished_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>店頭取引{$ct}</a>";

$c_sql = "SELECT COUNT(`id`) as 'ct' from Eoc_takuhai where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='Eoc_takuhai_for_catch_history_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>宅配取引履歴{$ct}</a>";
$html .= "<a class='btn btn-outline-primary' href='Eoc_takuhai_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>宅配取引全項目{$ct}</a>";
// $html .= "<a class='btn btn-outline-primary' href='Eoc_takuhai_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>宅配取引全項目{$ct}</a>";
// $html .= "<a class='btn btn-outline-primary' href='PMT_EV001_list.php?masterkey1={$data["ecc_seq"]}&mastertable=Eoc'>Result_D{$ct}</a>";

$c_sql = "SELECT COUNT(`id`) as 'ct' from Eoc_timeline where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='Eoc_timeline_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>タイムライン{$ct}</a>";


$c_sql = "SELECT COUNT(`id`) as 'ct' from Eoc_refining where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='Eoc_refining_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>精錬取引{$ct}</a>";

$c_sql = "SELECT COUNT(`shop_front_seiren_id`) as 'ct' from shop_front_seiren_details where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='shop_front_seiren_details_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>精錬撮影{$ct}</a>";

$c_sql = "SELECT COUNT(`shop_front_id`) as 'ct' from shop_front_details where (ecc_id={$ecc_id})";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='shop_front_details_list.php?masterkey1={$ecc_id}&mastertable=Eoc'>店タブ{$ct}</a>";

$html .= "</div>";

$value = $html;
?>
