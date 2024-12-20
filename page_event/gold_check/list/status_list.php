<?php
// if(isset($_GET["test"])){
  $value = 1;
  $gold_check_id = $data["id"];
  $query = "SELECT `_goods_status2`.`goods_status`,COUNT(`product_id`) AS `shouhin_count`
            FROM `shouhin`
            LEFT JOIN `_goods_status2`
            ON `shouhin`.`status` = `_goods_status2`.`goods_id`
            WHERE `gold_check_id` = $gold_check_id
            GROUP BY `shouhin`.`status`
            ";
  $rs = CustomQuery($query);
  while($data = db_fetch_array($rs)){
    $display_name .= $data["goods_status"]."(".$data["shouhin_count"].")<br>";
  }
  $value = $display_name;
// }
// $status = $data["status"];
// $mst_query = "SELECT `goods_status` FROM `_goods_status2` WHERE `goods_id`=$status LIMIT 1";
// $mst_rs = CustomQuery($mst_query);
// $mst_data = db_fetch_array($mst_rs);
