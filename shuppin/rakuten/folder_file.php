
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>楽天キャビネットフォルダ内画像一覧</title>
</head>
<body>
<style type="text/css">
  table{
    border-collapse: collapse;
  }
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
    width: 180px;
  }
  select{
    padding: 5px 10px;
    font-size: 22px;
    height: 40px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  input[type="submit"] {
    font-size: 20px;
    padding: 5px 10px;
    height: 40px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .offset_form{
    margin: 10px 15px;
  }
  .seq_row{
    border: 10px solid #111;
  }
  .item_name_td {
      width: 700px;
      padding: 10px;
      font-size: 14px;
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
  .zaiko{
    font-size: 40px;
  }
</style>

<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

?>

<?
// エラー出力する場合
// ini_set( 'display_errors', 1 );


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//認証部分作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include_once $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/code/key.php";

$err_folders = array();

if($_GET["folderId"] != ""){
  $folderId = htmlspecialchars($_GET["folderId"]);
}else{
  $folderId = 4708849;
}

if($_GET["offset"] != ""){
  $offset = htmlspecialchars($_GET["offset"]);
}else{
  $offset = 1;
}

?>

<form action="./folder_file.php" method="get" accept-charset="utf-8" class="offset_form">
  <input type="hidden" name="folderId" value="<?=$folderId?>">
  <select name="offset" >
    <?
    for ($offset_i=1; $offset_i <= 20; $offset_i++) {
    ?>
      <option value="<?=$offset_i?>" <?if($offset == $offset_i){?>selected<?}?>><?=$offset_i?></option>
    <?}?>
  </select>
  ページ
  <input type="submit" value="表示">
</form>

<?

for ($offset=20; $offset >= 1; $offset--) {

  $limit = 100;
  $rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/cabinet/folder/files/get";
  $request = "?folderId={$folderId}&offset={$offset}&limit={$limit}";
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


  $fileAllCount = $obj->cabinetFolderFilesGetResult->fileAllCount;
  $fileCount = $obj->cabinetFolderFilesGetResult->fileCount;
  if($fileCount >0){
    $file["FolderId"] = $obj->cabinetFolderFilesGetResult->files->file[0]->FolderId;
    $file["FolderName"] = $obj->cabinetFolderFilesGetResult->files->file[0]->FolderName;
    $file["FolderPath"] = $obj->cabinetFolderFilesGetResult->files->file[0]->FolderPath;

?>
  <table id="folder_files_table_<?=$offset?>" class="folder_files_table">
<?
    //最初だけ
    if($first_flag == ""){
      $first_flag = 1;
?>
    <tr>
      <th>フォルダID</th>
      <th>フォルダ名</th>
      <th>フォルダパス</th>
    </tr>
<?
    }
?>
    <tr>
      <td><?=$file["FolderId"]?></td>
      <td><?=$file["FolderName"]?></td>
      <td><?=$file["FolderPath"]?></td>
    </tr>
<?

    for ($file_array_i=0; $file_array_i < count($obj->cabinetFolderFilesGetResult->files->file); $file_array_i++) {
      $file["FileId"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->FileId;
      $file["FileName"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->FileName;
      $file["FileUrl"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->FileUrl;
      $file["FilePath"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->FilePath;
      $file["FileSize"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->FileSize;
      $file["FileWidth"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->FileWidth;
      $file["FileHeight"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->FileHeight;
      $file["FileAccessDate"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->FileAccessDate;
      $file["TimeStamp"] = $obj->cabinetFolderFilesGetResult->files->file[$file_array_i]->TimeStamp;

      $product_id_array = explode("_",$file["FilePath"]);
      $product_id = $product_id_array[0];
      //新しいSEQになったときの処理
        if(($now_product_id == "") OR ($now_product_id != $product_id)){
          $now_product_id = $product_id;

          $kanribangou = "";
          $qqq = "SELECT yahoo_sinaban FROM shouhin WHERE product_id={$now_product_id}";
          $sss = mysql_query('SET NAMES utf8');
          $sss = mysql_query($qqq);
          $rrr = mysql_fetch_array($sss);
          $kanribangou = strtolower($rrr["yahoo_sinaban"]);

          $seq_rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/item/get";
          $seq_request = "?itemUrl={$kanribangou}";
          $seq_rakuten_url = "{$seq_rakuten_baseurl}{$seq_request}";

          $seq_result = file_get_contents(
            $seq_rakuten_url,
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
          $seq_obj = simplexml_load_string($seq_result);

          // if($seq_obj->itemGetResult->item->itemName != ""){
          //   $seq["status"] = "商品情報あり";
          //   $seq["itemName"] = $seq_obj->itemGetResult->item->itemName;
          //   $seq["isDepot"] = $seq_obj->itemGetResult->item->isDepot;
          // }else{
          //   $seq["status"] = "商品情報なし";
          //   $seq["itemName"] = "";
          //   $seq["isDepot"] = "";
          // }


          $seq["status"] = $seq_obj->itemGetResult->code;
          $seq["itemName"] = $seq_obj->itemGetResult->item->itemName;
          $seq["isDepot"] = $seq_obj->itemGetResult->item->isDepot;
          $seq["inventoryCount"] = $seq_obj->itemGetResult->item->itemInventory->inventories->inventory->inventoryCount;


?>
    <tr class="seq_row">
      <th>SEQ<br>品番</th>
      <td>
        <?=$now_product_id?><br><?=$kanribangou?><br>
        <a href="http://item.rakuten.co.jp/rfstore/<?=$kanribangou?>/" target="_blank">商品ページ</a>
      </td>
      <td class="item_name_td"><?=$seq["itemName"]?></td>
      <th>データ取得<br>ステータス</th>
      <td>
        <?
        if($seq["status"] == "N000"){
          $seq["status"] = "正常";
        }elseif(($seq["status"] == "S001") OR ($seq["status"] == "S002")){
          $seq["status"] = "只今メンテナンス中のためアクセスできません。";
        }elseif(($seq["status"] == "S011") OR ($seq["status"] == "S021") OR ($seq["status"] == "S031") OR ($seq["status"] == "S999")){
          $seq["status"] = "楽天側エラー";
        }elseif($seq["status"] == "C001"){
          $seq["status"] = "該当する商品IDは存在しません。";
        }elseif($seq["status"] == "C011"){
          $seq["status"] = "指定された店舗IDは存在しません。";
        }elseif($seq["status"] == "C113"){
          $seq["status"] = "パラメータがフォーマットにそっていません。";
        }elseif($seq["status"] == "C114"){
          $seq["status"] = "商品一括登録サービスにロックされているため操作できません。";
        }elseif($seq["status"] == "C201"){
          $seq["status"] = "指定されたイベントIDは存在しません。";
        }elseif($seq["status"] == "C204"){
          $seq["status"] = "商品IDのフォーマットが正しくありません。";
        }elseif($seq["status"] == "C219"){
          $seq["status"] = "不要なデータが入っています。";
        }elseif($seq["status"] == "C301"){
          $seq["status"] = "登録・更新・削除時 :渡されたtransactionIDでの更新が既にされています。";
        }else{
          $seq["status"] = "原因不明エラー。エラーコードの再設定の必要があります。要確認です。";
        }
        print $seq["status"];
        ?>
      </td>
      <td>
        在庫数<span class="zaiko"> <?=$seq["inventoryCount"]?></span>
      </td>
      <th>倉庫<br>ステータス</th>
      <td>
        <?
        if($seq["isDepot"] == "true"){
          print "倉庫内";
        }
        ?>
      </td>
    </tr>
    <tr>
      <th>画像編集</th>
      <th>画像名</th>
      <th>画像保存先</th>
      <th>file名</th>
      <th>画像サイズ (KB)</th>
      <th>横×縦</th>
      <th>画像アクセス日</th>
      <th>画像情報更新日時</th>
    </tr>
<?
        }//end now_product_id
?>
    <tr>
      <td>
        画像ID : <?=$file["FileId"]?><br>
        <div class="file_btn">
          <a class="delete_btn" href="/include/shuppin/rakuten/file_delete.php?fileId=<?=$file["FileId"]?>" target="_blank">削除</a>
        </div>
      </td>
      <td><?=$file["FileName"]?></td>
      <td><a href='<?=$file["FileUrl"]?>' target="_blank"><?=$file["FileUrl"]?></a></td>
      <td><?=$file["FilePath"]?></td>
      <td><?=$file["FileSize"]?>KB</td>
      <td><?print $file["FileWidth"]."×".$file["FileHeight"];?></td>
      <td><?=$file["FileAccessDate"]?></td>
      <td><?=$file["TimeStamp"]?></td>
    </tr>
<?
    }// end file_array





  ?>

  </table><!-- end folder_files_table_<?=$offset?> -->


<?
  }//end count>0
}//end offset
?>

  <table>
    <tr>
      <th>総ファイル数</th>
      <td><?=$fileAllCount?></td>
    </tr>
  </table>

  <form action="./folder_file.php" method="get" accept-charset="utf-8" class="offset_form">
    <input type="hidden" name="folderId" value="<?=$folderId?>">
    <select name="offset" >
      <?
      for ($offset_i=1; $offset_i <= 20; $offset_i++) {
      ?>
        <option value="<?=$offset_i?>" <?if($offset == $offset_i){?>selected<?}?>><?=$offset_i?></option>
      <?}?>
    </select>
    ページ
    <input type="submit" value="表示">
  </form>


<script type="text/javascript">
var del_id = "";
  $(".delete_btn").click(function(){
    del_id = $(this).attr("href");
    del_id = del_id.replace("/include/shuppin/rakuten/file_delete.php?fileId=","");
    if(window.confirm('画像ID : '+del_id+'\nを削除します。\nよろしいですか？')){
      return true;
    }
    else{
      window.alert('キャンセルしました。');
      return false;
    }
  })
</script>

<?
include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
?>

</body>
</html>
