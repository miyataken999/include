
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>楽天キャビネットフォルダ一覧</title>
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

$err_folders = array();


for ($offset=5; $offset >= 1; $offset--) {



  $limit = 100;
  $rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/cabinet/folders/get";
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


  $folderAllCount = $obj->cabinetFoldersGetResult->folderAllCount;
  $folderCount = $obj->cabinetFoldersGetResult->folderCount;
  $folder_array = $obj->cabinetFoldersGetResult->folders->folder;
  // var_dump($folder_array[0]);



  ?>
  <table id="folder_data_table_<?=$offset?>" class="folder_data_table">
    <tr>
      <th>フォルダID</th>
      <th>フォルダ名</th>
      <th>フォルダ内画像</th>
      <th>フォルダパス</th>
      <th>格納画像数</th>
      <th>フォルダ内の画像の合計サイズ（KB）</th>
      <th>フォルダ更新日時</th>
    </tr>
  <?

  for ($folder_i=0; $folder_i < count($folder_array); $folder_i++) {
    $FolderId = $folder_array[$folder_i]->FolderId;
    $FolderName = $folder_array[$folder_i]->FolderName;
    $FolderPath = $folder_array[$folder_i]->FolderPath;
    $FileCount = $folder_array[$folder_i]->FileCount;
    $FileSize = $folder_array[$folder_i]->FileSize;
    $TimeStamp = $folder_array[$folder_i]->TimeStamp;
  ?>
    <tr id="<?=$FolderId?>">
      <td><?=$FolderId?></td>
      <td><?=$FolderName?></td>
      <td><a href="/include/shuppin/rakuten/folder_file.php?folderId=<?=$FolderId?>" target="_blank">画像一覧</a></td>
      <td id="<?=(str_replace('/','',$FolderPath))?>"><?=$FolderPath?></td>
      <td>
        <?
        print $FileCount;
        if($FileCount >= 1500){
          $error["folder_array"] = "on";
          array_push($err_folders , array(
              "FolderId" => $FolderId ,
              "FolderName" => $FolderName ,
              "FolderPath" => $FolderPath ,
              "FileCount" => $FileCount ,
              "FileSize" => $FileSize ,
              "TimeStamp" => $TimeStamp
            ));
        }


        ?>
      </td>
      <td><?=$FileSize?></td>
      <td><?=$TimeStamp?></td>
    </tr>
  <?

    //変数リセット
    $FolderId = "";
    $FolderName = "";
    $FolderPath = "";
    $FileCount = "";
    $FileSize = "";
    $TimeStamp = "";
  }

  // var_dump($err_folders);

}

  ?>
  </table>


<table>
  <tr>
    <th>全フォルダ数</th>
    <td><?=$folderAllCount?></td>
    <th>返却フォルダ数</th>
    <td><?=$folderCount?></td>
  </tr>
</table>


<?
if($_GET["foder_name"] != ""){
  $kensaku_foder = htmlspecialchars($_GET["foder_name"]);
?>
<div id="stop_field">
  <div id="stop_field_text">
    このまま移動しますので、お待ちください。
  </div>
</div>
<style type="text/css">
  #stop_field{
    background-color: rgba(0,0,0,0.6);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  #stop_field_text{
    background-color: #fff;
    padding: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%,-50%);
       -moz-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
         -o-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
  }
</style>
<script type="text/javascript">
$(window).load(function(){
  var kensaku_foder_id = $("#<?=$kensaku_foder?>").parent().attr("id");
  if(kensaku_foder_id != ""){
    window.location.href = "/include/shuppin/rakuten/folder_file.php?folderId="+kensaku_foder_id;
  }
})
</script>
<?}?>



</body>
</html>
