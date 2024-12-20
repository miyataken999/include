
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>楽天キャビネット利用容量</title>
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

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//認証部分作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include_once $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/code/key.php";


//リクエストパラメータ
$rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/cabinet/usage/get";
$request = "";
$rakuten_url = "{$rakuten_baseurl}{$request}";

$result = file_get_contents(
  $rakuten_url,
  false,
  stream_context_create(
    array(
      'http' => array(
        'method' => 'GET',
        'header' => implode(
          "\r\n",
          array(
            0 => "Authorization: {$ccc}"
          )
        )
      )
    )
  )
);
// var_dump($result);
$obj = simplexml_load_string($result);
// echo date("H:i:s");
// echo "<br>";
// var_dump($obj->status);


$resultCode = $obj->cabinetUsageGetResult->resultCode;
$MaxSpace = $obj->cabinetUsageGetResult->MaxSpace;
$MaxSpace = $MaxSpace*1024;
$FolderMax = $obj->cabinetUsageGetResult->FolderMax;
$FileMax = $obj->cabinetUsageGetResult->FileMax;
$UseSpace = $obj->cabinetUsageGetResult->UseSpace;
$AvailSpace = $obj->cabinetUsageGetResult->AvailSpace;
$UseFolderCount = $obj->cabinetUsageGetResult->UseFolderCount;
$AvailFolderCount = $obj->cabinetUsageGetResult->AvailFolderCount;

if($UseSpace > $MaxSpace){
  $error["over_MaxSpace"] = "on";
}
if($AvailFolderCount <= 10){
  $error["AvailFolderCount"] = "on";
}





?>
<table>
  <tr>
    <th>結果コード</th>
    <td><?=$resultCode?></td>
  </tr>
  <tr>
    <th>契約容量 (MB)</th>
    <td><?=$MaxSpace?></td>
  </tr>
  <tr>
    <th>フォルダ数上限</th>
    <td><?=$FolderMax?></td>
  </tr>
  <tr>
    <th>フォルダ内画像数上限</th>
    <td><?=$FileMax?></td>
  </tr>
  <tr>
    <th>利用容量 (KB)</th>
    <td><?=$UseSpace?></td>
  </tr>
  <tr>
    <th>利用可能容量 (KB)</th>
    <td><?=$AvailSpace?></td>
  </tr>
  <tr>
    <th>利用フォルダ数</th>
    <td><?=$UseFolderCount?></td>
  </tr>
  <tr>
    <th>利用可能フォルダ数 </th>
    <td><?=$AvailFolderCount?></td>
  </tr>
</table>


</body>
</html>
