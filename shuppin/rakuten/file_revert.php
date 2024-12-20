
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>画像ファイル復活</title>
</head>
<body>
<style type="text/css">
  th{
    font-weight: normal;
    background-color: #ffc;
    border: 1px solid #aaa;
    padding: 5px;
  }
  td{
    border: 1px solid #aaa;
    background-color: #fff;
    padding: 5px;
  }
</style>


<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";
?>


<?
// エラー出力する場合
// ini_set( 'display_errors', 1 );


if($_GET["fileId"] != ""){
  $fileId = htmlspecialchars($_GET["fileId"]);
}
if($_GET["folderId"] != ""){
  $folderId = htmlspecialchars($_GET["folderId"]);
}

?>

<h1>画像復活</h1>
<form action="./file_revert.php" method="get" accept-charset="utf-8" id="file_revert_form">
  画像ファイルID<input type="text" name="fileId" value="<?=$fileId?>" >
  戻し先フォルダID<input type="text" name="folderId" value="<?=$folderId?>" >
  <input type="submit" value="復活させる" >
</form>

<?

if($_GET["fileId"] == ""){
  print "画像ファイルIDを設定してください。";
  exit();
}
if($_GET["folderId"] == ""){
  $folder_pass = htmlspecialchars($_GET["folder_pass"]);
  print "フォルダパス {$folder_pass}<br>戻し先フォルダIDを設定してください。<br><a href='/include/shuppin/rakuten/cabinet_navi.php' target='_blank' >フォルダ一覧</a>から確認できます。";
  exit();
}



//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//認証部分作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include_once $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/code/key.php";

//リクエストパラメータ
$rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/cabinet/trashbox/file/revert";
$rakuten_url = "{$rakuten_baseurl}";

$rootNode = new SimpleXMLElement( '<?xml version="1.0" encoding="UTF-8"?><request></request>' );

// ノードの追加
$itemNode = $rootNode->addChild('fileRevertRequest')->addChild('file');
$itemNode->addChild( 'fileId', $fileId );
$itemNode->addChild( 'folderId', $folderId );
// $itemNode->addChild( 'upperFolderId', $image_pass );

// 作ったxmlツリーを出力する
$request_body = $rootNode->asXML();

// print $request_body;



$result = file_get_contents(
  $rakuten_url,
  false,
  stream_context_create(
    array(
      'http' => array(
        'method' => 'POST',
        'header' => implode(
          "\r\n",
          array(
            0 => "Authorization: {$ccc}"
          )
        ),
        'content' => $request_body
      )
    )
  )
);
$obj = simplexml_load_string($result);

// var_dump($obj);

$systemStatus = $obj->status->systemStatus;
$message = $obj->status->message;

$FolderId = $obj->cabinetFolderInsertResult->FolderId;



if($result == ""){
  print "失敗しました。";
}else{
  mb_internal_encoding("utf8");
  include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
  //log
  $log_time = date("Y-m-d H:i:s");
  $log_ip = $_SERVER["REMOTE_ADDR"];
  //user_login取得
  $user_login_query = " SELECT user_login FROM users WHERE user_id={$user_id} LIMIT 1";
  $user_login_sql = mysql_query('SET NAMES utf8');
  $user_login_sql = mysql_query($user_login_query);
  $user_login_result = mysql_fetch_assoc($user_login_sql);
  $log_user = $user_login_result["user_login"];
  //user_login取得 end
  $log_table = "rakuten_cabinet";
  $log_action = "revert";
  $log_descri = "---Keys\n";
  $log_descri .= "画像ファイルID:{$fileId}\n";
  $log_descri .= "戻し先フォルダID:{$folderId}\n";
  $log_descri .= "---Fields\n";
  $log_descri .= "楽天キャビネット削除フォルダから画像復活\n";


  $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
  // print $insert_sql."<br><br>";
  $result_flag = mysql_query('SET NAMES utf8');
  $result_flag = mysql_query($insert_sql);
  if (!$result_flag) {
    print mysql_error();
    exit('データを登録できませんでした。');
  }


?>
  <h2>復活完了しました。</h2>
  <table>
    <tr>
      <th>systemStatus</th>
      <td><?=$systemStatus?></td>
    </tr>
    <tr>
      <th>message</th>
      <td><?=$message?></td>
    </tr>
    <tr>
      <th>画像ファイルID</th>
      <td><?=$fileId?></td>
    </tr>
    <tr>
      <th>戻し先フォルダ</th>
      <td><?=$folderId?></td>
    </tr>
  </table>
<?
}
?>

<script type="text/javascript">
  $("#file_revert_form").submit(function(){
    if(window.confirm('ファイルを復活します。\nよろしいですか？')){
      return true;
    }
    else{
      window.alert('キャンセルしました。');
      return false;
    }
  })
</script>

</body>
</html>
