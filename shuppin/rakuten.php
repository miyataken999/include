
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>楽天出品アラート画面</title>
  <!-- <link rel="stylesheet" href=""> -->
<style type="text/css">
.folder_data_table{
  display: none;
}
</style>
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";
?>



<?


// エラー出力する場合
// ini_set( 'display_errors', 1 );

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//キャビネット関連チェック
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/cabinet.php";
  // $mail_to = "nishitani@urlounge.co.jp";
  // $subject = "楽天キャビネット関連エラー";
  $mail_text = "▼▼▼楽天キャビネット関連エラー▼▼▼\n\n";
    //-----キャビネット容量-----
    if($error["over_MaxSpace"] == "on"){
      $mail_text .= "▼契約容量オーバー▼\n契約容量 : {$MaxSpace}MB\n利用容量 : {$UseSpace}\n\n";
    }
    //-----残り利用可能フォルダ数が10以下-----
    if($error["AvailFolderCount"] == "on"){
      $mail_text .= "▼残り利用可能フォルダ数が10以下▼\n残り利用可能フォルダ数 : {$AvailFolderCount}\n\n";
    }

  $folder_data = array();

  include $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/cabinet_navi.php";
  //-----フォルダ内の画像数が1500越え-----
  if($error["folder_array"] == "on"){
    for ($err_folders_i=0; $err_folders_i < count($err_folders); $err_folders_i++) {
      array_push($folder_data , array(
          "FolderId"=>$err_folders[$err_folders_i]["FolderId"],
          "FolderName"=>$err_folders[$err_folders_i]["FolderName"],
          "FileCount"=>$err_folders[$err_folders_i]["FileCount"],
          // "FileSize"=>$err_folders[$err_folders_i]["FileSize"],
          // "TimeStamp"=>$err_folders[$err_folders_i]["TimeStamp"],
        ));
    }
  $mail_text .= "▼格納画像数1500枚オーバー▼\n";

  //フォルダ名の新しい順でソート
  foreach ($folder_data as $key => $value) {
      $sort[$key] = $value['FolderName'];
  }
  array_multisort($sort, SORT_DESC, $folder_data);

  foreach ($folder_data as $key => $value) {
    $mail_text .= "フォルダ名 : ".$value["FolderName"]."　";
    $mail_text .= "格納画像数 : ".$value["FileCount"]."\n";
    $mail_text .= "フォルダ内画像一覧 : https://rifa.life/include/shuppin/rakuten/folder_file.php?folderId=".$value["FolderId"]."\n";
    // $mail_text .= "フォルダ内サイズ : ".$value["FileSize"]."KB\n";
    // $mail_text .= "フォルダ更新日 : ".$value["TimeStamp"]."\n\n";
  }
  $mail_text .= "\n\n";
}



  if($mail_text != ""){
    //メール発信
      // mb_language('uni');
      // mb_internal_encoding("UTF-8");
      // $header_text_info="From: rakuten\nContent-Type: text/plain;charset=ISO-2022-JP\nX-Mailer: PHP/".phpversion();
      // mb_send_mail($mail_to,$subject,$mail_text,$header_text_info);


    //チャットワーク流す
    $word = $mail_text;
    $word = mb_convert_encoding($word, "UTF-8", "auto");
    //メール送信
    $subject = '楽天アラート';
    $mail_body = $word;
    $sendPostData = array("subject" => $subject, "text" => $mail_body);
    $sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
    try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}



  }

?>

</body>
</html>
