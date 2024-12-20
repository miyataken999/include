<?php 

$Eoc_takuhai_id = $values["Eoc_takuhai_id"];
if($Eoc_takuhai_id != ""){
    $query = "SELECT SUM(ching_price) as sum_ching_price FROM Eoc_chigins WHERE Eoc_takuhai_id = {$Eoc_takuhai_id} ";
    $rs = CustomQuery($query);
    $sum_ching_price = 0;
    while($data = db_fetch_array($rs)){
        $sum_ching_price = $data["sum_ching_price"];
    }
      
    if($sum_ching_price < 0){
        $values["ching_price"] = 0;
    }
    
    
}
