<?php
  $gold_check_id = $data["id"];
  $query = "SELECT SUM(gram) as 'sumgram'
            FROM `gold_check_item`
            WHERE `gold_check_id` = $gold_check_id
            ";
  $rs = CustomQuery($query);
  $data = db_fetch_array($rs);

  if($data != false){
    $value = $data["sumgram"];
    $value = number_format(floor($value*100) / 100 , 2);
  }else{
    $value = '';
  }
