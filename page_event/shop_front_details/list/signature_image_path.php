<?php 
$user_id = $_SESSION['UserData']['user_id'];

$signature_image_path = $data['signature_image_path'];
if($signature_image_path != ""){
    // adminユーザーだけ絞り込む
    $query = "SELECT user_login FROM users WHERE `user_id`='{$user_id}' limit 1";
    $rs = CustomQuery($query);
    $users = db_fetch_array($rs);
    if(isset($users['user_login'])){
        $query = "SELECT GroupID FROM evashop5ugmembers WHERE `UserName`='{$users['user_login']}' and `GroupID`='-1' limit 1";
        $rs = CustomQuery($query);
        $evashop5ugmembers = db_fetch_array($rs);
        if(isset($evashop5ugmembers['GroupID'])){
            $signature_image_path = str_replace('/../../../../storage/app/public/', 'https://rifa.life/refasta_shop_front/storage/', $signature_image_path);
            $signature_image_path = str_replace('/../../../storage/app/public/', 'https://rifa.life/refasta_shop_front/storage/', $signature_image_path);
            $products_image_path_array = explode("\n", trim($signature_image_path));
            $value = "";
            foreach($products_image_path_array as $image_path){
                $value .= '<a href="' . $image_path . '" target="_blank"><img src="' . $image_path . '" width="50px"></a>';
            }
        }
    }

}






