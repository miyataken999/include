<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>宅配キットロジザード出荷ダウンロード</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?

//権限ファイル
include "./auth.php";


mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

$log_ip = $_SERVER["REMOTE_ADDR"];
$log_table = "Eoc_takuhai";
$log_action = "edit";//ここでは固定

$log_user = $kengen_user_name;



if (is_uploaded_file($_FILES["csvfile"]["tmp_name"])) {
  $file_tmp_name = $_FILES["csvfile"]["tmp_name"];
  $_FILES["csvfile"]["name"] = 'kit_num.csv';
  $file_name = $_FILES["csvfile"]["name"];

  //拡張子を判定
  if (pathinfo($file_name, PATHINFO_EXTENSION) != 'csv') {
    $err_msg = 'CSVファイルのみ対応しています。';
  } else {
    //ファイルをdataディレクトリに移動
    if (move_uploaded_file($file_tmp_name, "./csv/" . $file_name)) {
      //後で削除できるように権限を644に
      chmod("./csv/" . $file_name, 0644);
      $msg = $file_name . "をアップロードしました。";
      $file = './csv/'.$file_name;
      $fp   = fopen($file, "r");

      //配列に変換する
      $rowCount = 0;
      while (($data = fgetcsv($fp, 0, ",")) !== FALSE) {
        $rowCount++;
        if(($rowCount == 1) OR ($data[0] == "")){
          continue;
        }
        $asins[] = $data;
        // var_dump($data);

        $takuhai_id = $data[0];
        $haisou_bangou = $data[1];
        $shipping_number = $data[2];

        if($takuhai_id != ""){
          $query = "UPDATE Eoc_takuhai SET shipping_number='{$shipping_number}' , haisou_bangou='{$haisou_bangou}' , updated_by={$uid} WHERE id='{$takuhai_id}' LIMIT 1";
          $sql = mysql_query($query);
          if(!$sql){
            $error_text = "";
            $error_text .= "アップデートに失敗しました。\n";
            // $error_text .= "クエリ {$query}\n";
            $error_text .= mysql_error();
          }else{
            if($haisou_bangou != ""){
              $ecc_query = "SELECT ecc_id FROM Eoc_takuhai WHERE id = {$takuhai_id}";
              $ecc_sql = mysql_query($ecc_query);
              $data = mysql_fetch_assoc($ecc_sql);
              $ecc_id = $data["ecc_id"];


              if($ecc_id != ""){
                $sql = "UPDATE Eoc SET kit_flag=0 , kit_done_flag=1 , updated_at=NOW() , registerd_id={$uid}, haisou_bangou='{$haisou_bangou}' WHERE ecc_id={$ecc_id} LIMIT 1";
                // print $sql;
                mysql_query($sql);
              }
            }
          }


          $log_descri = "---Keys\n";
          $log_descri = $log_descri."id : \n{$takuhai_id}\n";
          $log_descri = $log_descri."---Query\n";
          $log_descri = $log_descri.str_replace("'","",$query)."\n";

          $log_descri = $log_descri."---Fields\n";

          $log_descri = $log_descri.$error_text."\n";

          $log_descri = $log_descri."shipping_number[new]:{$shipping_number}\n";
          $log_descri = $log_descri."haisou_bangou[new]:{$haisou_bangou}\n";

          $log_descri = $log_descri."updated_by[new]:{$user_id}\n";
          $log_descri = $log_descri."updated_at[new]:{$time_no}\n";

          $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
          // print $insert_sql;
          $insert_res = mysql_query($insert_sql);

        }
      }//end while


      fclose($fp);
      //ファイルの削除
      // unlink('./csv/'.$file_name);

      if($insert_res){
        header("location: https://rifa.life/shop5/kit_confirm_list.php");
        exit();
      }

    } else {
      $err_msg = "ファイルをアップロードできません。";
    }
  }
} else {
  $err_msg = "ファイルが選択されていません。";
}

?>




</body>
</html>
