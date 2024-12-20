<?php
ini_set("display_errors",1);


$csv_download_flag = $_GET["csv_download_flag"];
$file_name = $_GET["file_name"];
// echo $file_name;

if($csv_download_flag == "on"){
?>

  <script type = "text/javascript">
  window.open("https://rifa.life/include/evacommon/<?=$file_name?>");
  </script>
<?php
}
?>
