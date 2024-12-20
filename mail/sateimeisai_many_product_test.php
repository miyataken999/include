<?php


// var_dump($Eoc_takuhai_id);
if($Eoc_takuhai_id != ""){
  $query = "SELECT is_many_product FROM Eoc_takuhai WHERE id= '{$Eoc_takuhai_id}' limit 1";
  $sql = mysql_query($query);
  $res = mysql_fetch_assoc($sql);
  if($res["is_many_product"] != 1){
    echo "not many product";
    exit;
  }
}

$org_sumprice["H"] = 0;
$org_sumprice["K"] = 0;
$org_sumprice["W"] = 0;
$org_sumprice["D"] = 0;
$org_sumprice["J"] = 0;
$org_sumprice["B"] = 0;
$org_sumprice["A"] = 0;


$org_write = '';

// 商品データの格納
$org_product_data = array();

$sql = mysql_query('SET NAMES utf8');


//many_productからSEQを取得し、商品データを抽出
$group_query = "SELECT *
          FROM many_product_group
          WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}'
          ORDER BY sort ASC
          ";
$group_sql = mysql_query($group_query);


// 初期値
$total_price = 0;
$syoukei_num = 0;// 小計１、２の採番
while ($group_res = mysql_fetch_assoc($group_sql)) {
  $syoukei_num++;
  $group_ttl = $group_res['name'];
  $group_id = $group_res['id'];



  if($meisai_state == 'awazu'){
    $sum_query = "SELECT COUNT(a.product_id) as 'count', SUM(a.price) as 'sumprice'
              FROM shouhin as a
              left join many_product as b
              on a.product_id=b.product_id
              WHERE
              a.many_product_group_id='{$group_id}'
              and
              a.`status`=34
              ";
  }elseif($meisai_state == 'satei'){
    $sum_query = "SELECT COUNT(a.product_id) as 'count', SUM(a.price) as 'sumprice'
              FROM shouhin as a
              left join many_product as b
              on a.product_id=b.product_id
              WHERE
              a.many_product_group_id='{$group_id}'
              and
              (
                a.`status`=32 or a.`status`=126
              )
              ";
  }else{
    //成約を想定
    $sum_query = "SELECT COUNT(a.product_id) as 'count', SUM(a.price) as 'sumprice'
              FROM shouhin as a
              left join many_product as b
              on a.product_id=b.product_id
              WHERE
              a.many_product_group_id='{$group_id}'
              and
              (
              	( a.`status`=7 )
              	 OR ( a.`status`=33 )
              	 OR ( a.`status`=119 )
              	 OR ( a.`status`=121 )
              	 OR ( a.`status`=122 )
              	 OR ( a.`status`=127 )
              	 OR ( a.`status`=110 )
              	 OR ( a.`status`=124 )
              	 OR ( a.`status`=29 )
              	 OR ( a.`status`=133 )
              	 OR ( a.`status`=134 )
              	 OR ( a.`status`=106 )
              	 OR ( a.`status`=107 )
              	 OR ( a.`status`=108 )
              	 OR ( a.`status`=111 )
              	 OR ( a.`status`=113 )
              	 OR ( a.`status`=3 )
              	 OR ( a.`status`=136 )
              	 OR ( a.`status`=142 )
              	 OR ( a.`status`=148 )
              	 OR ( a.`status`=147 )
              )
              ";

  }


  $sum_sql = mysql_query($sum_query);
  $sum_res = mysql_fetch_assoc($sum_sql);
  $group_sumprice = number_format($sum_res["sumprice"]);
  $group_count = $sum_res["count"];

  if($org_write != ''){
    $org_write .= "<br>";
  }

  $org_write .= "▼{$group_ttl}<br>";

  if($meisai_state == 'awazu'){
    $shouhin_query = "SELECT a.*
              FROM shouhin as a
              WHERE
              a.many_product_group_id='{$group_id}'
              and
              a.`status`=34
              ORDER BY a.trading_sort_id ASC
              ";
  }elseif($meisai_state == 'satei'){
    $shouhin_query = "SELECT a.*
              FROM shouhin as a
              WHERE
              a.many_product_group_id='{$group_id}'
              and
              (
                a.`status`=32 or a.`status`=126
              )
              ORDER BY a.trading_sort_id ASC
              ";
  }else{
    //成約を想定
    $shouhin_query = "SELECT a.*
              FROM shouhin as a
              WHERE
              a.many_product_group_id='{$group_id}'
              and
              (
                ( a.`status`=7 )
                 OR ( a.`status`=33 )
                 OR ( a.`status`=119 )
                 OR ( a.`status`=121 )
                 OR ( a.`status`=122 )
                 OR ( a.`status`=127 )
                 OR ( a.`status`=110 )
                 OR ( a.`status`=124 )
                 OR ( a.`status`=29 )
                 OR ( a.`status`=133 )
                 OR ( a.`status`=134 )
                 OR ( a.`status`=106 )
                 OR ( a.`status`=107 )
                 OR ( a.`status`=108 )
                 OR ( a.`status`=111 )
                 OR ( a.`status`=113 )
                 OR ( a.`status`=3 )
                 OR ( a.`status`=136 )
                 OR ( a.`status`=142 )
                 OR ( a.`status`=148 )
                 OR ( a.`status`=147 )
              )
              ORDER BY a.trading_sort_id ASC
              ";

  }









  $shouhin_sql = mysql_query($shouhin_query);

  while ($res = mysql_fetch_assoc($shouhin_sql)) {
    $product_id = $res["product_id"];
    $comment = $res["comment"];
    // $comment = "";

    // if(isset($_GET["nishitanitest"])){
      $url = "https://rifa.life/lounge_API/evaeva/create_user_side_title.php?product_id={$product_id}&token=dkaslhfijgfnhasihfgnslkdfnhashdfushakjdfnasihdfp";
  		$title = file_get_contents($url);
    // }else{
    //   //タイトル生成
    // 	include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
    // }



    $saiban = $res["trading_sort_id"];

  	$price = $res["price"];
  	$total_price = $total_price+$price;
  	$price = number_format($price);

    if($saiban > 0){
      $org_write .= "【{$saiban}】{$title} = {$price} 円 {$comment}<br>";
    }else{
      $org_write .= "【 】{$title} = {$price} 円 {$comment}<br>";
    }



    if($res["purchase_category"] != ''){
      $org_sumprice[$res["purchase_category"]] += $res["price"];
    }


    $org_product_data[] = array(
      "saiban" => $res["trading_sort_id"],
      "purchase_category" => $res["purchase_category"],
      "product_id" => $res["product_id"],
  		"category_id" => $res["category_id"],
  		"sub_category_id1" => $res["sub_category_id1"],
  		"title" => $title,
  		"price" => $res["price"],
  		"Destination_selling" => $res["Destination_selling"],
  		"Finish" => $res["Finish"],
  		"Discrimination" => $res["Discrimination"],
  		"accessories" => $res["accessories"],
  		"Remarks" => $res["Remarks"],
  	);
  }// end while shouhin


  if($group_ttl != ""){
    $group_ttl = "　{$group_ttl}";
  }
  $org_write .= "小計{$syoukei_num}{$group_ttl}　点数：{$group_count}点　金額：{$group_sumprice}円<br>";
}// end while group


$org_write .= "合計金額：".number_format($total_price)."円<br>";


$meisai = $org_write;





$after_val = str_replace("<br>","\n",$org_write);
$after_val = str_replace("･","・",$after_val);


// if(isset($_GET["test"])){
$after_val_check = mb_convert_encoding($after_val,"iso-2022-jp","UTF-8");
$after_val_check = mb_convert_encoding($after_val_check,"UTF-8","iso-2022-jp");
if(stristr($after_val_check,'??')){
	$alertArray[] = array($after_val_check,$after_val);
}
$after_val = $after_val_check;
// }

$str_header = preg_replace('/'.$before_txt.'/i',$after_val,$str_header);
$str_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str_pc);
$str2_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str2_pc);
$str3_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str3_pc);




  if($meisai_state == 'awazu'){
    $awazu_write = $org_write;
    $awazu_sumprice = $org_sumprice;
    $awazu_product_data = $org_product_data;
  }elseif($meisai_state == 'seiyaku'){
    $seiyaku_write = $org_write;
    $seiyaku_sumprice = $org_sumprice;
    $seiyaku_product_data = $org_product_data;

    $sateimeisai = $meisai;

  }elseif($meisai_state == 'satei'){
    $write = $org_write;
    $sumprice = $org_sumprice;
    $product_data = $org_product_data;

    $sateimeisai = $meisai;
  }
