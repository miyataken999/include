<?php
$users_sql = "SELECT user_id, first_name FROM users ";
$users_rs = CustomQuery($users_sql);
$users_array = array();
while($users_data = db_fetch_array($users_rs)){
  $first_name = explode("　",$users_data["first_name"]);
  $users_array[$users_data["user_id"]] = $first_name[0];
}


$gold_check_id = $_GET["masterkey1"];


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
<th></th>
</tr>
<tr>
  <th>ID</th>
  <th>金性</th>
  <th>個数</th>
  <th>重量</th>
  <th>価格</th>
  <th>重量</th>
  <th>価格</th>
  <th></th>
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
    $haraidashi_query = "SELECT * from gold_check_item where `gold_check_id`='{$gold_check_id}' AND `name` = '{$jigane_data[id]}' LIMIT 1";
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
    $jigane_table .= "<td><span class='btn btn-primary jigane_ac_btn' data='{$jigane_data["id"]}'>詳細</span></td>";
    $jigane_table .= "</tr>";







    $jigane_shouhin_query = "SELECT
    *
    FROM vw_jigane_taiki
    where id={$jigane_data['id']} and gold_check_id={$gold_check_id} and `name` is not null
    order by product_id
    ";
    $jigane_shouhin_rs = CustomQuery($jigane_shouhin_query);
    $jigane_product_ct = 0;
    while($jigane_product = db_fetch_array($jigane_shouhin_rs)){
      $jigane_product_ct++;

      if($jigane_product_ct === 1){
        $jigane_table .= "
        <tr class='jigane_shouhin_row' id='jigane_row_{$jigane_data["id"]}'>
        <td colspan='8'>
        <div>
        <table>
        <tr>
        <th>SEQ</th>
        <th>顧客</th>
        <th>査定人</th>
        <th>査定日</th>
        <th>成約人</th>
        <th>成約日</th>
        <th>重量</th>
        <th>金性単価</th>
        <th>買取額</th>
        <th colspan='2'>金性</th>
        </tr>
        ";
      }

      $jigane_product["price"] = number_format($jigane_product["price"]);
      $jigane_product["price_per_gram"] = number_format($jigane_product["price_per_gram"]);
      $jigane_product["satei_hi"] = date("y/n/d H:i",strtotime($jigane_product["satei_hi"]));
      $jigane_product["DT_UP_DATE"] = date("y/n/d H:i",strtotime($jigane_product["DT_UP_DATE"]));
      $jigane_product["satei_by"] = $users_array[$jigane_product["satei_by"]];
      $jigane_product["REG_AUTHOR"] = $users_array[$jigane_product["REG_AUTHOR"]];



      $jigane_table .= "
      <tr>
      <td>{$jigane_product["product_id"]}</td>
      <td>{$jigane_product["ecc_id"]}</td>
      <td>{$jigane_product["satei_by"]}</td>
      <td>{$jigane_product["satei_hi"]}</td>
      <td>{$jigane_product["REG_AUTHOR"]}</td>
      <td>{$jigane_product["DT_UP_DATE"]}</td>
      <td class='right_aligned'>{$jigane_product["Gram"]}</td>
      <td class='right_aligned'>{$jigane_product["price_per_gram"]}</td>
      <td class='right_aligned'>{$jigane_product["price"]}</td>
      <td class='left_aligned' colspan='2' style='width: 200px;'>{$jigane_product["gold_property"]}</td>
      </tr>
      ";

    }
    if($jigane_product_ct !== 0){
      $jigane_table .= "</table></div></td></tr>";


    }


}


$check_sql = "SELECT SUM(`gram`) as 'sumgram', SUM(`price`) as 'sumprice' FROM gold_check_item WHERE gold_check_id = {$gold_check_id} ";
$check_rs = CustomQuery($check_sql);
$check_data = '';
$check_data = db_fetch_array($check_rs);

$sabun["price"] = number_format($check_data["sumprice"] - $sumData["price"]);
$sabun["gram"] = $check_data["sumgram"] - $sumData["sumGram"];

$sumData["price"] = number_format($sumData["price"]);
$shouhin_url = "https://rifa.life/shop5/shouhin_list.php?q=(gold_check_id~contains~$gold_check_id)";
$jigane_table .= "
<tr class = 'sum_colum'>
<td>合計</td>
<td></td>
<td class = 'right_aligned'>{$sumData["ct"]}</td>
<td class = 'right_aligned'>{$sumData["sumGram"]}</td>
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
<td>
</td>
</tr>
<tr>
<td colspan='7'><a class='gold_complete_btn btn' href='https://rifa.life/include/page_event/gold_check/gold_check_complete.php?gold_check_id={$gold_check_id}'>G完了確定</a></td>
<td>
<span class='btn btn-primary all_open'>全開</span>
<span class='btn btn-default all_close'>全閉じ</span>
</td>
</tr>
</table>";

echo $jigane_table;


?>
<style>
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
    /* margin: 5px 10px; */
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


</script>
