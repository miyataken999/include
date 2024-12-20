<?php
$ecc_id = $values["ecc_id"];
if($ecc_id!=""){
  $query = "SELECT `status` FROM `Eoc_guestquestion` WHERE `ecc_id`= '$ecc_id' AND `status`='使用' LIMIT 1";
  $rs = CustomQuery($query);
  if($rs!=false){
    $values["status"] = '過去使用';
  }
}
// $values['service-name-text'] = "test";
// $values["ecc_id"] = 0;
