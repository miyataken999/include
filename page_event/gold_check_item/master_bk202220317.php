<div class="all__jigane_table_box">

<?php
$users_sql = "SELECT user_id, first_name FROM users ";
$users_rs = CustomQuery($users_sql);
$users_array = array();
while($users_data = db_fetch_array($users_rs)){
  $first_name = explode("　",$users_data["first_name"]);
  $users_array[$users_data["user_id"]] = $first_name[0];
}


$gold_check_id = $_GET["masterkey1"];



// --------------------------------------------------------
// 更新入金額計算
// --------------------------------------------------------


// --------------------------------------------------------
// END 更新入金額計算
// --------------------------------------------------------





// --------------------------------------------------------
// スキャンデータ
// --------------------------------------------------------
$scan_sql = "SELECT *
  FROM gold_check_scan_links
  WHERE gold_check_id = {$gold_check_id}
  ORDER BY sort ASC
  ";
$scan_rs = CustomQuery($scan_sql);
$scan_text = "";
$shouhin_scan = array();// 商品のforeachでスキャン結果を出す為のSEQ格納
$only_scan_id = array();// スキャンのみで商品がないSEQの格納
$scan_all_product_id_array = array();// 全ての合致しているスキャンデータを格納。$only_shouhin_id_arrayを出す為。
$only_shouhin_id_array = array();// 商品のforeachのとこでスキャンされていないSEQを格納する
$scan_all_scan_id_array = array();// 合否関係なく、スキャンしたデータ全て。
while($scan_data = db_fetch_array($scan_rs)){
  $scan_all_product_id_array[] = $scan_data["product_id"];
  $scan_all_scan_id_array[] = $scan_data["scan_id"];
  $scan_text .= $scan_data["scan_id"]."\n";
  if($scan_data["product_id"] != ""){
    $shouhin_scan[$scan_data["product_id"]] = "scan_ok";
  }else{
    $only_scan_id[] = $scan_data["scan_id"];
  }
}

// --------------------------------------------------------
// END スキャンデータ
// --------------------------------------------------------






$jigane_query = "SELECT
`id`,
`name`,
count( `product_id` ) AS `ct`,
sum( `Gram` ) AS `sumGram`,
sum( `price` ) AS `sumPrice`
FROM vw_jigane_taiki
where gold_check_id={$gold_check_id} and `name` is not null
group by id
";
$jigane_rs = CustomQuery($jigane_query);
$jigane_table = "
<table id='jiganetaiki_table'>
<tr>
<th colspan='5'>G待機集計</th>
<th colspan='2'>払出ーG待機集計</th>
<th colspan='2'></th>
</tr>
<tr>
  <th>ID</th>
  <th>金性</th>
  <th>個数</th>
  <th>重量</th>
  <th>価格</th>
  <th>重量</th>
  <th>価格</th>
  <th colspan='2'></th>
</tr>
";

$master_sql = "SELECT trade_day FROM gold_check WHERE id = {$gold_check_id}";
$master_rs = CustomQuery($master_sql);
$master_data = db_fetch_array($master_rs);

$date = date("Y-m-d", strtotime($master_data["trade_day"]));

$sumData = array();
$sumData["ct"] = 0;
$sumData["sumGram"] = 0;
$sumData["price"] = 0;

// 地金チェックアイテムの総計
$check_sql = "SELECT SUM(`gram`) as 'sumgram', SUM(`price`) as 'sumprice' FROM gold_check_item WHERE gold_check_id = {$gold_check_id}";
$check_rs = CustomQuery($check_sql);
$check_data = '';
$check_data = db_fetch_array($check_rs);
$sum_gold_check_price = $check_data["sumprice"];
// 商品の総計
$shouhin_check_sql = "SELECT SUM(`price`) as 'sumprice' FROM shouhin WHERE gold_check_id = {$gold_check_id}";
$shouhin_check_rs = CustomQuery($shouhin_check_sql);
$shouhin_check_data = '';
$shouhin_check_data = db_fetch_array($shouhin_check_rs);
$sum_shouhin_price = $shouhin_check_data["sumprice"];

while($jigane_data = db_fetch_array($jigane_rs)){
  // $tanka_query = "SELECT price from mst_gold_of_bullion_merchants_price where date='{$date}' AND name_id={$jigane_data['id']} limit 1";
  // $tanka_rs = CustomQuery($tanka_query);
  // $tanka_data = db_fetch_array($tanka_rs);
  // $tanka = $tanka_data['price'];

  // $sumPrice = $tanka * $jigane_data["sumGram"];

  $sumData["ct"] += $jigane_data["ct"];
  $sumData["sumGram"] += $jigane_data["sumGram"];
  // $sumData["price"] += $sumPrice;
  $sumData["price"] += $jigane_data["sumPrice"];
  $sumPrice= number_format($jigane_data["sumPrice"]);
  // if(isset($jigane_data['id'])){
    $haraidashi_query = "SELECT sum(gram) as gram, sum(price) as price from gold_check_item where `gold_check_id`='{$gold_check_id}' AND `name` = '{$jigane_data[id]}' LIMIT 1";
  // }
  $haraidashi_rs = CustomQuery($haraidashi_query);
  $haraidashi_data = db_fetch_array($haraidashi_rs);
  $gram_sabun = $haraidashi_data['gram'] - $jigane_data['sumGram'];
  $gram_sabun = floor($gram_sabun * 10)/10;
  $price_sabun = $haraidashi_data['price'] - $jigane_data["sumPrice"];
  $price_sabun = number_format($price_sabun);



    $jigane_table .= "
    <tr>
    <th>{$jigane_data["id"]}</th>
    <td>{$jigane_data["name"]}</td>
    <td class = 'right_aligned'>{$jigane_data["ct"]}</td>
    <td class='sumGram_col right_aligned'>{$jigane_data["sumGram"]}</td>
    <td class='sumPrice_col right_aligned'>{$sumPrice}</td>";
    if($gram_sabun<0){
      $jigane_table .= "<td class = 'alert_color_col right_aligned'>{$gram_sabun}</td>";
    }else{
      $jigane_table .= "<td class = 'right_aligned'>{$gram_sabun}</td>";
    }
    if($price_sabun<0){
      $jigane_table .= "<td class = 'alert_color_col right_aligned'>{$price_sabun}</td>";
    }else{
      $jigane_table .= "<td class = 'right_aligned'>{$price_sabun}</td>";
    }
    $jigane_table .= "<td colspan='2'><span class='btn btn-primary jigane_ac_btn' data='{$jigane_data["id"]}'>詳細</span></td>";
    $jigane_table .= "</tr>";



    //tamiya
    // if(isset($_GET["tamiya_test"])){

    $jigane_shouhin_query = "SELECT
      `A`.`product_id` AS `product_id`,
      `A`.`ecc_id` AS `ecc_id`,
      `A`.`satei_by` AS `satei_by`,
      `A`.`satei_hi` AS `satei_hi`,
      `A`.`REG_AUTHOR` AS `REG_AUTHOR`,
      `A`.`DT_UP_DATE` AS `DT_UP_DATE`,
      `A`.`price_per_gram` AS `price_per_gram`,
      `A`.`gold_check_id` AS `gold_check_id`,
      `A`.`Gram` AS `Gram`,
      `A`.`price` AS `price`,
      `A`.`nyuukin_price` AS `nyuukin_price`,
      `A`.`gold_property` AS `gold_property`,
      `A`.`Eoc_takuhai_id` AS `Eoc_takuhai_id`,
      `A`.`Eoc_unfinished_id` AS `Eoc_unfinished_id`,
      `A`.`purchase_category` AS `purchase_category`,
      `A`.`gold_property` AS `gold_property`,
      `C`.`goods_status` AS `goods_status`,
      `A`.`title` AS `title`
      FROM `shouhin` `A`
      LEFT JOIN `mst_gold_property` `B`
      ON `A`.`gold_property` = `B`.`val`
      LEFT JOIN `_goods_status2` `C`
      ON `A`.`status` = `C`.`goods_id`
      WHERE `B`.`dealer_reference_id` = {$jigane_data['id']}
      AND `A`.`gold_check_id` = {$gold_check_id}
      order by `DT_UP_DATE` DESC
    ";
    // }

    //tamiya
    // $jigane_shouhin_query = "SELECT
    // *
    // FROM vw_jigane_taiki
    // where id={$jigane_data['id']} and gold_check_id={$gold_check_id} and `name` is not null
    // order by DT_UP_DATE DESC
    // ";
    $jigane_shouhin_rs = CustomQuery($jigane_shouhin_query);
    $jigane_product_ct = 0;
    while($jigane_product = db_fetch_array($jigane_shouhin_rs)){
      $jigane_product_ct++;

      if($jigane_product_ct === 1){
        $jigane_table .= "
        <tr class='jigane_shouhin_row' id='jigane_row_{$jigane_data["id"]}'>
        <td colspan='9'>
        <div>
        <table>
        <tr>
        <th></th>
        <th>SEQ</th>
        <th>顧客</th>
        <th>宅配ID</th>
        <th>店頭ID</th>
        <th>種別</th>
        <th>商品状態</th>
        <th>査定人</th>
        <th>査定日</th>
        <th>成約人</th>
        <th>成約日</th>
        <th>重量</th>
        <th>金性単価</th>
        <th>買取額</th>
        <th>入金額</th>
        <th>入金更新額</th>
        <th colspan=''>金性</th>
        <th>スキャン</th>
        </tr>
        ";
      }


      // 入金額の計算
      $wariai[$jigane_product["product_id"]]["wariai"] = $jigane_product["price"] / $sum_shouhin_price;
      $wariai[$jigane_product["product_id"]]["nyuukin_price"] = floor($wariai[$jigane_product["product_id"]]["wariai"] * $sum_gold_check_price);

      // それ以外の整形
      $jigane_product["price"] = number_format($jigane_product["price"]);
      $jigane_product["price_per_gram"] = number_format($jigane_product["price_per_gram"]);
      $jigane_product["satei_hi"] = date("y/n/d H:i",strtotime($jigane_product["satei_hi"]));
      $jigane_product["DT_UP_DATE"] = date("y/n/d H:i",strtotime($jigane_product["DT_UP_DATE"]));
      $jigane_product["satei_by"] = $users_array[$jigane_product["satei_by"]];
      $jigane_product["REG_AUTHOR"] = $users_array[$jigane_product["REG_AUTHOR"]];
      $jigane_product["nyuukin_price"] = number_format($jigane_product["nyuukin_price"]);



      // スキャンされていないデータを配列に保持
      if(!in_array($jigane_product["product_id"], $scan_all_product_id_array)){
        $only_shouhin_id_array[] = array(
          "product_id" => $jigane_product["product_id"],
          "ecc_id" => $jigane_product["ecc_id"],
          "Eoc_takuhai_id" => $jigane_product["Eoc_takuhai_id"],
          "Eoc_unfinished_id" => $jigane_product["Eoc_unfinished_id"],
          "purchase_category" => $jigane_product["purchase_category"],
          "goods_status" => $jigane_product["goods_status"],
          "satei_by" => $jigane_product["satei_by"],
          "satei_hi" => $jigane_product["satei_hi"],
          "REG_AUTHOR" => $jigane_product["REG_AUTHOR"],
          "DT_UP_DATE" => $jigane_product["DT_UP_DATE"],
          "Gram" => $jigane_product["Gram"],
          "price_per_gram" => $jigane_product["price_per_gram"],
          "price" => $jigane_product["price"],
          "gold_property" => $jigane_product["gold_property"],
          "gold_check_id" => $jigane_product["gold_check_id"],
          "title" => $jigane_product["title"],
          
        );
      }

      $jigane_table .= "
      <tr class='jigane_table_row' product_id='{$jigane_product["product_id"]}'>
      <td><div class='jigane_checkout_btn btn btn-primary' product_id='{$jigane_product["product_id"]}'>外す</div></td>
      <td>{$jigane_product["product_id"]}</td>
      <td>{$jigane_product["ecc_id"]}</td>
      <td>{$jigane_product["Eoc_takuhai_id"]}</td>
      <td>{$jigane_product["Eoc_unfinished_id"]}</td>
      <td>{$jigane_product["purchase_category"]}</td>
      <td>{$jigane_product["goods_status"]}</td>
      <td>{$jigane_product["satei_by"]}</td>
      <td>{$jigane_product["satei_hi"]}</td>
      <td>{$jigane_product["REG_AUTHOR"]}</td>
      <td>{$jigane_product["DT_UP_DATE"]}</td>
      <td class='right_aligned'>{$jigane_product["Gram"]}</td>
      <td class='right_aligned'>{$jigane_product["price_per_gram"]}</td>
      <td class='right_aligned'>{$jigane_product["price"]}</td>
      <td class='right_aligned'>{$jigane_product["nyuukin_price"]}</td>
      <td class='right_aligned'>{$wariai[$jigane_product["product_id"]]["nyuukin_price"]}</td>
      <td class='left_aligned'>{$jigane_product["gold_property"]}</td>
      <td class='{$shouhin_scan[$jigane_product["product_id"]]}'></td>
      </tr>
      ";

    }
    if($jigane_product_ct !== 0){
      $jigane_table .= "</table></div></td></tr>";


    }


}


// 差分の計算
$sabun["price"] = number_format($check_data["sumprice"] - $sumData["price"]);
$sabun["gram"] = $check_data["sumgram"] - $sumData["sumGram"];

$sumData["price"] = number_format($sumData["price"]);
$shouhin_url = "https://rifa.life/shop5/shouhin_list.php?q=(gold_check_id~contains~$gold_check_id)";
$jigane_table .= "
<tr class = 'sum_colum'>
<td>合計</td>
<td></td>
<td class = 'right_aligned'>{$sumData["ct"]}</td>
<td id='shouhin_sumgram' class = 'right_aligned'>{$sumData["sumGram"]}</td>
<td id='sumDataPriceBox' class = 'right_aligned'>{$sumData["price"]}</td>";
if($sabun["gram"]>=0){
  $jigane_table .= "<td class = 'fine_color_col right_aligned'>{$sabun["gram"]}</td>";
}else{
  $jigane_table .= "<td class = 'alert_color_col right_aligned'>{$sabun["gram"]}</td>";
}
if($sabun["price"]>=0){
  $jigane_table .= "<td class = 'fine_color_col right_aligned'>{$sabun["price"]}</td>";
}else{
  $jigane_table .= "<td class = 'alert_color_col right_aligned'>{$sabun["price"]}</td>";
}
$jigane_table .= "
<td colspan='2' id='check_sumgram'>
{$check_data["sumgram"]}
</td>
</tr>
<tr>
";

$jigane_table .= "<tr><td colspan='6'>";
$jigane_table .= "<div id='gold_check_btn' class='btn btn-default'>金額チェック</div>";
$jigane_table .= "<div id='check_text'></div>";
$jigane_table .= "<div id='gold_check_btn_force' class='btn btn-danger hidden'>それでも構わずG完了にする</div>";
$jigane_table .= "</td>";
// $jigane_table .= "<td><a class='btn btn-warning amount_breakdown_btn' href='https://rifa.life/evaProject/gold_check/amount_breakdown/{$gold_check_id}'>入金額反映</a></td>";
$jigane_table .= "<td></td>";
$jigane_table .= "<td>";
$jigane_table .= "<div class='product_id_scan_btn btn' data-toggle='modal' data-target='#product_id_scan_modal'>シールチェック</div>";

$jigane_table .= "</td></tr>";

if($_GET["nishitani"] == "nishitani"){
  $jigane_table .= "<td colspan='7'><a id='gold_complete_btn' class='gold_complete_btn btn' href='https://rifa.life/include/page_event/gold_check/gold_check_complete_nishitani.php?gold_check_id={$gold_check_id}'>G完了確定</a></td>";
}else{
  $jigane_table .= "<td colspan='7'><a id='gold_complete_btn' class='gold_complete_btn btn' href='https://rifa.life/include/page_event/gold_check/gold_check_complete.php?gold_check_id={$gold_check_id}'>G完了確定</a></td>";
}

$jigane_table .= "
<td colspan='2'>
<span class='btn btn-primary all_open'>全開</span>
<span class='btn btn-default all_close'>全閉じ</span>
</td>
</tr>
</table>";

echo $jigane_table;


$scan_data_html='
<table class="error_scan_table only_shouhin_table">
  <tr>
    <th>#</th>
    <th>地金ID</th>
    <th>顧客</th>
    <th>宅配ID</th>
    <th>店頭ID</th>
    <th>種別</th>
    <th>ST</th>
    <th>査定人</th>
    <th>成約人</th>
    <th>重量</th>
    <th>金性単価</th>
    <th>買取額</th>
    <th>金性</th>
    <th>タイトル</th>
  </tr>
  <tr>
    <th>スキャン内容</th>
    <th colspan="14">スキャンのみにある商品</th>
  </tr>
  {{only_scan_data_html}}
  <tr>
    <th>SEQ</th>
    <th colspan="15">スキャンされていない商品</th>
  </tr>
  {{no_scan_data_html}}
</table>
';
$only_scan_data_html = '';
$no_scan_data_html = '';

foreach ($only_scan_id as $scan_id) {
  if($scan_id == ""){
    continue;
  }
  $scan_sql = "SELECT
    `A`.`product_id` AS `product_id`,
    `A`.`ecc_id` AS `ecc_id`,
    `A`.`satei_by` AS `satei_by`,
    `A`.`satei_hi` AS `satei_hi`,
    `A`.`REG_AUTHOR` AS `REG_AUTHOR`,
    `A`.`DT_UP_DATE` AS `DT_UP_DATE`,
    `A`.`price_per_gram` AS `price_per_gram`,
    `A`.`gold_check_id` AS `gold_check_id`,
    `A`.`Gram` AS `Gram`,
    `A`.`price` AS `price`,
    `A`.`nyuukin_price` AS `nyuukin_price`,
    `A`.`gold_property` AS `gold_property`,
    `A`.`Eoc_takuhai_id` AS `Eoc_takuhai_id`,
    `A`.`Eoc_unfinished_id` AS `Eoc_unfinished_id`,
    `A`.`purchase_category` AS `purchase_category`,
    `A`.`gold_property` AS `gold_property`,
    `C`.`goods_status` AS `goods_status`,
    `A`.`title` AS `title`
    FROM `shouhin` `A`
    LEFT JOIN `mst_gold_property` `B`
    ON `A`.`gold_property` = `B`.`val`
    LEFT JOIN `_goods_status2` `C`
    ON `A`.`status` = `C`.`goods_id`
    WHERE `A`.`product_id` = '{$scan_id}' limit 1
    ";

  $scan_rs = CustomQuery($scan_sql);
  $scan_data = db_fetch_array($scan_rs);
  if($scan_data == false){
    $scan_data["gold_check_id"] = "--";
    $scan_data["ecc_id"] = "--";
    $scan_data["Eoc_takuhai_id"] = "--";
    $scan_data["Eoc_unfinished_id"] = "--";
    $scan_data["purchase_category"] = "--";
    $scan_data["goods_status"] = "--";
    $scan_data["satei_by"] = "--";
    $scan_data["satei_hi"] = "";
    $scan_data["REG_AUTHOR"] = "--";
    $scan_data["DT_UP_DATE"] = "";
    $scan_data["Gram"] = "--";
    $scan_data["price_per_gram"] = "--";
    $scan_data["price"] = "--";
    $scan_data["gold_property"] = "--";
    $scan_data["title"] = "--";
  }
  $only_scan_data_html .= "<tr>";
    $only_scan_data_html .= "<td>{$scan_id}</td>";
    $only_scan_data_html .= "<td>{$scan_data[gold_check_id]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[ecc_id]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[Eoc_takuhai_id]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[Eoc_unfinished_id]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[purchase_category]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[goods_status]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[satei_by]}<br>{$scan_data[satei_hi]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[REG_AUTHOR]}<br>{$scan_data[DT_UP_DATE]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[Gram]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[price_per_gram]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[price]}</td>";
    $only_scan_data_html .= "<td>{$scan_data[gold_property]}</td>";
    $only_scan_data_html .= "<td>{$scan_data["title"]}</td>";
  $only_scan_data_html .= "</tr>";
}// end foreach scan

foreach ($only_shouhin_id_array as $product_id_data) {
  $no_scan_data_html .= "<tr>";
    $no_scan_data_html .= "<td>";
      $no_scan_data_html .= "<a href='/shop5/shouhin_list.php?q=(product_id~equals~{$product_id_data[product_id]})'>";
        $no_scan_data_html .= $product_id_data["product_id"];
      $no_scan_data_html .= "</a>";
    $no_scan_data_html .= "</td>";
    $no_scan_data_html .= "<td>{$product_id_data[gold_check_id]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[ecc_id]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[Eoc_takuhai_id]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[Eoc_unfinished_id]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[purchase_category]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[goods_status]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[satei_by]}<br>{$product_id_data[satei_hi]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[REG_AUTHOR]}<br>{$product_id_data[DT_UP_DATE]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[Gram]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[price_per_gram]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[price]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[gold_property]}</td>";
    $no_scan_data_html .= "<td>{$product_id_data[title]}</td>";
  $no_scan_data_html .= "</tr>";
}// end foreach scan

if($only_scan_data_html != '' || $no_scan_data_html != ''){
  $scan_data_html = str_replace("{{only_scan_data_html}}", $only_scan_data_html, $scan_data_html);
  $scan_data_html = str_replace("{{no_scan_data_html}}", $no_scan_data_html, $scan_data_html);
  echo $scan_data_html;
}
?>
</div><!-- end all__jigane_table_box -->

<div class="modal" id="product_id_scan_modal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
				<h4 class="modal-title">地金シールスキャン</h4>
			</div>
			<div class="modal-body">

        地金チェックID：<input type="text" id="scan_gold_check_id" value="<?=$gold_check_id?>" readonly>
				<div class="">
          スタート！<br>
          改行区切りでどうぞ！
        </div>

        <textarea id="product_id_scan_textarea" rows="20" cols="40"><?=$scan_text?></textarea>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
				<button type="button" class="btn btn-primary" id="scan_submit">登録する</button>
			</div>
		</div>
	</div>
</div>

<div class="loading"><span>Loading.......................</span></div>


<style>
.product_id_scan_btn.btn {
    background: #e8e100;
    border: 1px solid;
}
.all__jigane_table_box{
  display: flex;
  align-items: flex-start;
}
.error_scan_table{
  border-spacing: 0;
  border-collapse: collapse;
  width: max-content;
}
.error_scan_table th{
  background: #eee;
  font-weight: normal;
}
.error_scan_table th, .error_scan_table td{
  padding: 0.2rem;
  font-size: 12px;
  border: 1px solid #555;
  line-height: 1.1;
}
.loading{
  display: none;
}
.loading.active {
  display: flex;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  justify-content: center;
  align-items: center;
  color: #fff;
  background-color: rgba(0,0,0,0.7);
  z-index: 11111;
}
.loading.active span {
  animation-name: guruguru;
  animation-duration: 8s;
  animation-timing-function: linear;
  animation-delay: 0s;
  animation-iteration-count: infinite;
  border: 2px solid #fff;
  padding: 1rem;
  border-radius: 10px;
  font-size: 2rem;
  font-weight: normal;
  background: #ffa2a2;
}
@keyframes guruguru {
  0%{
    transform: rotate(0deg);
  }
  100%{
    transform: rotate(360deg);
  }
}
#jiganetaiki_table .scan_ok::before {
    content: "ok";
    background: #038c03;
    display: block;
    width: max-content;
    margin: auto;
    padding: 0.7rem;
    border-radius: 100%;
    color: #fff;
}
.hidden{
  display: none;
}
#jiganetaiki_table span.btn.btn-primary.jigane_ac_btn {
    padding: 2px 10px;
    font-size: 12px;
}
#fixedheader1 {
    position: static;
}
#underheader1 {
    margin-top: 0!important;
}
.jigane_shouhin_row div{
  display: none;
}

#jiganetaiki_table .jigane_shouhin_row th {
    font-size: 12px;
    padding: 2px!important;
    background-color: #2fa4e7;
    color: #fff;
    font-weight: normal;
    text-align: center;
}
#jiganetaiki_table .jigane_shouhin_row td {
    font-size: 14px;
    padding: 0!important;
}
#jiganetaiki_table .jigane_shouhin_row td td {
    padding: 2px!important;
    width: 70px;
    text-align: center;
}
#jiganetaiki_table .jigane_shouhin_row td td.right_aligned {
    text-align: right;
}
#jiganetaiki_table .jigane_shouhin_row td td.left_aligned {
    text-align: left;
}
.jigane_shouhin_row table {
    width: 100%;
}
  #jiganetaiki_table {
    margin: 5px 10px;
    width: max-content;
  }
  #jiganetaiki_table th{
    background-color: #ccc;
  }
  #jiganetaiki_table td, #jiganetaiki_table th{
    border: 1px solid #111;
  }
  .gold_complete_btn.btn {
    display: block;
    background: #f00;
    color: #fff;
  }
  .gold_complete_btn.btn:hover{
    opacity: 0.5;
  }
  .input_field textarea{
    display: none;
  }
  .input_field textarea.active{
    display: block;
  }
  .input_field div{
    display: block;
  }
  .input_field div.remove{
    display: none;
  }
  .alert_color_col{
    background:#FF0000;
    color:#fff;
  }
  .fine_color_col{
    background:#00FF00;
    /* color:#fff; */
  }
  #jiganetaiki_table td{
    padding:2px!important;
    font-size:18px;
  }
  #jiganetaiki_table .sum_colum td{
    font-size: 27px;
    padding: 5px 10px!important;
  }
  #jiganetaiki_table tr{
    line-height:1;
  }
  .right_aligned{
    text-align:right;
  }
  .widelink{
    display:block;
  }
  .jigane_checkout_btn {
      padding: 0.4rem;
      font-size: 1rem;
  }
  #check_sumgram {
    background: #333;
  }
</style>
<script type="text/javascript">

// jigane_ac_btn
// jigane_row_
// jigane_shouhin_row
$(".jigane_ac_btn").click(function(event) {
  let jigane_id = $(this).attr("data");
  $("#jigane_row_"+jigane_id+" div").slideToggle(400);
});
$(".all_open").click(function(event) {
  $(".jigane_shouhin_row div").slideDown(400);
});
$(".all_close").click(function(event) {
  $(".jigane_shouhin_row div").slideUp(400);
});


function input_toggle($this,$flag){
  $display_area = $this.find("div");
  $input_area = $this.find("textarea");

  if(($input_area.hasClass("active")) || ($flag == "all_close")){
    $input_area.removeClass("active");
    $display_area.removeClass("remove");
    $display_area.html(
      $input_area.val().replace(/\r?\n/g,"<br>").replace(/\n/g,"").replace(/\r/g,"").replace(/\r\n/g,"")
      );
  }else{
    $input_area.addClass("active");
    $display_area.addClass("remove");
    $input_area.val($display_area.html().replace(/\t/g,"").replace(/\<br\>/g,"\n").replace(/\n\n/g,"\n"));

  }

}
$(".input_field").dblclick(function(){
  input_toggle($(this));
})


function sumDataPriceCalc(){
  let sumprice = 0
  $("#jiganetaiki_table .sumPrice_col").each(function(index, el) {
    sumprice = sumprice + Number($(this).text())
  })
  $("#sumDataPriceBox").text(sumprice)
}
$(".price_col textarea").keyup(function(){
  let val = $(this).val() * Number($(this).parent().siblings(".sumGram_col").text())
  $(this).parent().siblings(".sumPrice_col").text(val)
  sumDataPriceCalc()
})

$("#gold_check_btn").click(function(){
  $sum_check_price = $(".table[data-brick='masterlistgrid']").find("td[data-field='billing_amount'] span").text();
  $total1_price = $("#total1_price").text();
  $sum_check_price = $sum_check_price.replace('¥','');
  $sum_check_price = $sum_check_price.replace(',','').replace(',','').replace(',','').replace(',','');
  $total1_price = $total1_price.replace('¥','');
  $total1_price = $total1_price.replace(',','').replace(',','').replace(',','').replace(',','');


  $check_sumgram = $("#check_sumgram").text();
  $shouhin_sumgram = $("#shouhin_sumgram").text();
  console.log($shouhin_sumgram);
  console.log($check_sumgram);
  $diff_wariai = Math.floor($shouhin_sumgram / $check_sumgram * 10000) / 100;
  console.log($diff_wariai);

  if($diff_wariai > 103){
    $diff_display = $diff_wariai - 100;
    $("#gold_complete_btn").addClass("hidden");
    $("#gold_check_btn_force").removeClass("hidden");
    $("#check_text").text("商品重量が払い出しより3%の誤差を越えております。(+" + $diff_display + "%)");
  }else if($diff_wariai < 97){
    $diff_display = $diff_wariai - 100;
    $("#gold_complete_btn").addClass("hidden");
    $("#gold_check_btn_force").removeClass("hidden");
    $("#check_text").text("商品重量が払い出しより3%の誤差を越えております。(-" + $diff_display + "%)");
  }else if($sum_check_price == $total1_price){
    $("#gold_complete_btn").removeClass("hidden");
    $("#gold_check_btn_force").addClass("hidden");
    $("#check_text").text("金額OK");
  }else{
    $("#gold_complete_btn").addClass("hidden");
    $("#gold_check_btn_force").removeClass("hidden");
    $("#check_text").text("払い出しと合計金額が合っていません。");
  }

})

$("#gold_check_btn_force").click(function(event) {
  if(!window.confirm("本当によろしいでしょうか")){
    alert("キャンセルしました。")
    return false
  }
  if(!window.confirm("本当に間違いないでしょうか")){
    alert("キャンセルしました。")
    return false
  }

  alert("それでは完了ボタンを表示します。")
  $("#gold_complete_btn").removeClass("hidden");
  $("#gold_check_btn_force").addClass("hidden");
});



$(document).on("click", ".jigane_checkout_btn", function(){
  var click_btn = $(this)
  if(click_btn.hasClass('clicked')){
    return false
  }
  click_btn.addClass('clicked')
  var product_id = $(this).attr("product_id")
  var send_data = {
    product_id : product_id,
    gold_check_id : "delete",
    user_id : "<?=$_SESSION["UserData"]["user_id"]?>"
  }
  let send_dataJSON = JSON.stringify(send_data);

  $.ajax({
    url: '/evaProject/api/shouhin/gold_check_id_delete',
    type: 'POST',
    contentType: 'json',
    data: send_dataJSON
  })
  .done(function(data) {
    console.log("success");
    var obj = JSON.parse(data)
    var msg = obj.msg
    var status = obj.status
    if(status == "error"){
      alert(msg)
    }else{
      alert(product_id+"の地金チェックIDを外しました。")
      $(".jigane_table_row[product_id='" + product_id + "']").remove()
    }


    click_btn.removeClass('clicked')

  })
  .fail(function(e) {
    console.log("error");
    console.log(e);
    click_btn.removeClass('clicked')
  })
})








$(document).on("click", "#scan_submit", function(){
  var click_btn = $(this)
  if(click_btn.hasClass('clicked')){
    return false
  }
  click_btn.addClass('clicked')
  $(".loading").addClass('active')
  var product_id_scan_textarea = $("#product_id_scan_textarea").val()
  var scan_gold_check_id = $("#scan_gold_check_id").val()
  var send_data = {
    product_id_scan_textarea : product_id_scan_textarea,
    scan_gold_check_id : scan_gold_check_id,
  }
  let send_dataJSON = JSON.stringify(send_data);

  $.ajax({
    url: '/evaProject/api/gold_check_product_id_scan',
    type: 'POST',
    contentType: 'json',
    data: send_dataJSON
  })
  .done(function(data) {
    console.log("success");
    var obj = JSON.parse(data)
    var msg = obj.msg
    var status = obj.status
    alert(msg)
    if(status == "success"){
      window.location.reload()
    }

    $(".loading").removeClass('active')
    click_btn.removeClass('clicked')

  })
  .fail(function(e) {
    console.log("error");
    console.log(e);
    click_btn.removeClass('clicked')
    alert("更新エラーです")
    $(".loading").removeClass('active')
  })
})

$(window).load(function(){
  $('#product_id_scan_modal').on('shown.bs.modal', function () {
    console.log("bbb")
      $('#product_id_scan_textarea').focus();
  });

})

</script>


<?php
// var_dump($_SESSION);
