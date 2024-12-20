
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>楽天削除フォルダ参照</title>
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
  .file_btn a:hover{
    opacity: 0.6;
  }
  .file_btn a{
    color: #111;
    text-decoration: none;
    background-color: #dcdcdc;
    border: 2px solid #111;
    border-radius: 6px;
    padding: 0px 5px;
  }
</style>


<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";
?>


<h1>楽天削除フォルダ参照</h1>


<?
// エラー出力する場合
// ini_set( 'display_errors', 1 );


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//認証部分作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include_once $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/code/key.php";

$offset = 1;
$limit = 100;
//リクエストパラメータ
$rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/cabinet/trashbox/files/get";
$request = "?offset={$offset}&limit={$limit}";
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
$obj = simplexml_load_string($result);

// var_dump($obj);


$fileAllCount = $obj->cabinetTrashboxFilesGetResult->fileAllCount;
$fileCount = $obj->cabinetTrashboxFilesGetResult->fileCount;

?>
<table>
  <tr>
    <th>ファイル数</th>
    <td><?=$fileCount?></td>
  </tr>
  <tr>
    <th>編集</th>
    <th>フォルダパス</th>
    <th>画像名</th>
    <th>画像保存先</th>
    <th>ファイル名</th>
    <th>画像サイズ(KB)</th>
    <th>横×縦</th>
    <th>画像アクセス日</th>
    <th>画像情報更新日時</th>
  </tr>
<?
for ($file_i=0; $file_i < $fileCount; $file_i++) {
  $file_data["FolderPath"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FolderPath;
  $file_data["FileId"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FileId;
  $file_data["FileName"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FileName;
  $file_data["FileUrl"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FileUrl;
  $file_data["FilePath"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FilePath;
  $file_data["FileSize"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FileSize;
  $file_data["FileWidth"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FileWidth;
  $file_data["FileHeight"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FileHeight;
  $file_data["FileAccessDate"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->FileAccessDate;
  $file_data["TimeStamp"] = $obj->cabinetTrashboxFilesGetResult->files->file[$file_i]->TimeStamp;
?>
<tr>
  <td>
    画像ID : <?=$file_data["FileId"]?><br>
    <div class="file_btn">
      <a class="revert_btn" href="/include/shuppin/rakuten/file_revert.php?fileId=<?=$file_data["FileId"]?>&folder_pass=<?=$file_data["FolderPath"]?>" target="_blank">復活</a>
    </div>
  </td>
  <td><?=$file_data["FolderPath"]?></td>
  <td><?=$file_data["FileName"]?></td>
  <td><?=$file_data["FileUrl"]?></td>
  <td><?=$file_data["FilePath"]?></td>
  <td><?=$file_data["FileSize"]?>KB</td>
  <td><?=$file_data["FileWidth"]?>×<?=$file_data["FileHeight"]?></td>
  <td><?=$file_data["FileAccessDate"]?></td>
  <td><?=$file_data["TimeStamp"]?></td>
</tr>








<?
}//file for end
?>
</table>


</body>
</html>
