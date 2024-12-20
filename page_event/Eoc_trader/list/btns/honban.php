<?php
// $value - a value to be displayed on the page.
// Example:
// $value = strtoupper($value);
//
// $data - array with all field values.
// Example:
// $value = $data["FirstName"].$data["LastName"];
// where FirstName and LastName are actual field names.
$trader_id = $value;

$html = "";
$html .= "<div class='btns_col'>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (Eoc_trader_id_for_buy='{$trader_id}') AND (`status` =126 OR `status` =34) AND (`kinsa_flag` =1)";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='kin_satei_list.php?masterkey1={$trader_id}&mastertable=Eoc_trader'>NEW 金査定一覧{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (Eoc_trader_id_for_buy='{$trader_id}') AND
(`category_id` =  10 OR `category_id` =  12 OR `category_id` =  17 OR `category_id` =  18 OR `category_id` =  19 OR `category_id` =  50 OR `category_id` =  20 OR `category_id` =  51 OR `category_id` =  21 OR `category_id` =  22 OR `category_id` =  23)
AND (`status` =32 OR `status` =34)";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='satei_of_jewelry_list.php?masterkey1={$trader_id}&mastertable=Eoc_trader'>宝飾査定{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (Eoc_trader_id_for_buy='{$trader_id}') AND
(`category_id` !=  10 AND `category_id` !=  17 AND `category_id` !=  18 AND `category_id` !=  19 AND `category_id` !=  50 AND `category_id` !=  20 AND `category_id` !=  51 AND `category_id` !=  21 AND `category_id` !=  22 AND `category_id` !=  23)
AND (`status` =32 OR `status` =34)";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='satei_of_brand1_list.php?masterkey1={$trader_id}&mastertable=Eoc_trader'>服飾査定{$ct}</a>";

$c_sql = "SELECT COUNT(`product_id`) as 'ct' from shouhin where (Eoc_trader_id_for_buy='{$trader_id}')";
$c_rs = CustomQuery($c_sql);
$c_data = db_fetch_array($c_rs);
$ct = $c_data["ct"];
if($ct > 0){	$ct = " ({$ct})";}else{	$ct = "";}
$html .= "<a class='btn btn-outline-primary' href='shouhin_list.php?q=(Eoc_trader_id_for_buy~equals~{$trader_id})'>商品一覧{$ct}</a>";

$html .= "</div>";

$value = $html;
?>
<style type="text/css">
.btns_col{
  display: flex;
  flex-direction: column;
}
</style>
