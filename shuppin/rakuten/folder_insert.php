
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>フォルダ作成</title>
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


if($_GET["image_pass"] != ""){
  $image_pass = htmlspecialchars($_GET["image_pass"]);
}

?>

<h1>楽天キャビネットフォルダの作成</h1>
<form action="./folder_insert.php" method="get" accept-charset="utf-8" id="forder_ins_form">
  <input type="text" name="image_pass" value="<?=$image_pass?>" >
  <input type="submit" value="作成" >
</form>

<?

if($_GET["image_pass"] == ""){
  print "イメージパスを設定してください。";
  exit();
}



//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//認証部分作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include_once $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/code/key.php";

//リクエストパラメータ
$rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/cabinet/folder/insert";
$rakuten_url = "{$rakuten_baseurl}";

$rootNode = new SimpleXMLElement( '<?xml version="1.0" encoding="UTF-8"?><request></request>' );

// ノードの追加
$itemNode = $rootNode->addChild('folderInsertRequest')->addChild('folder');
$itemNode->addChild( 'folderName', $image_pass );
$itemNode->addChild( 'directoryName', $image_pass );
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
  print "そのフォルダは既に存在します。";
}else{
?>
  <h2>作成完了しました。</h2>
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
      <th>フォルダID</th>
      <td><?=$FolderId?></td>
    </tr>
    <tr>
      <th>フォルダ（ディレクトリ）名</th>
      <td><?=$image_pass?></td>
    </tr>
  </table>
<?
}
?>

<script type="text/javascript">
  $("#forder_ins_form").submit(function(){
    if(window.confirm('フォルダを新規作成します。\nよろしいですか？')){
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
