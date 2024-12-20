<?php

$img_id = $data["comment_img_url_id"];
$img_query = "SELECT img_url FROM mst_interview_users_img WHERE `id`='{$img_id}' limit 1";
$img_rs = CustomQuery($img_query);
$img_data = db_fetch_array($img_rs);

if(count($img_data) > 0){
    
}
$value = "<img src='{$img_data['img_url']}' class='inline_img'>";
