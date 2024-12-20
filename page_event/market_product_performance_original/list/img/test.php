<?php
// $value - a value to be displayed on the page.
// Example:
// $value = strtoupper($value);
//
// $data - array with all field values.
// Example:
// $value = $data["FirstName"].$data["LastName"];
// where FirstName and LastName are actual field names.

$img_data = $value;
$json_data = json_decode($img_data,1);
// $error = json_last_error();
//
// var_dump($json_data,$errors === JSON_ERROR_UTF8);
// var_dump($json_data);
// var_dump($json_data->json_last_error());

if(($json_data == FALSE)or($json_data == NULL)){
  if((stristr($img_data,"jpg")===FALSE)
  and(stristr($img_data,"jpeg")===FALSE)
  and(stristr($img_data,"gif")===FALSE)
  and(stristr($img_data,"png")===FALSE)
  and(stristr($img_data,"webp")===FALSE)
  ){
    $value = "";
  }else{
    $value = "<a><img style='width:150px;height:150px;object-fit:cover;' src='".$img_data."'></a>";
  }
}else{
  $file_pass = $json_data[0]["name"];
  $file_name = str_replace("files/","",$file_pass);
  $img_url = "https://rifa.life/shop5/files/".$file_name;
  if((stristr($img_url,"jpg")===FALSE)
  and(stristr($img_url,"jpeg")===FALSE)
  and(stristr($img_url,"gif")===FALSE)
  and(stristr($img_url,"png")===FALSE)
  and(stristr($img_url,"webp")===FALSE)
  ){
    $value = "";
  }else{
    $value = "<a><img style='width:150px;height:150px;object-fit:cover;' src='".$img_url."'></a>";
  }
}
