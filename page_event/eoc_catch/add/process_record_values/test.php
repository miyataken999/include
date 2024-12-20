<?//郵便番号自動入力ファイル取得?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>


<?
// Place event code here.
// Use "Add Action" button to add code snippets
if($values['created_t'] == "")
$values['created_t'] = date("Y/m/d H:i:s");

if($values['updated_at'] == "")
$values['updated_at'] = date("Y/m/d H:i:s");

if($values['registerd_id'] == "")
$values['registerd_id'] = $_SESSION["uid"];

//if($values['kaitori_staff_id'] == "")
//$values['kaitori_staff_id'] = $_SESSION["uid"];

if($values['_registerd_id'] == "")
$values['_registerd_id'] = $_SESSION["uid"];

$values['mail_check_type'] = "1";
$values['dm_check_type'] = "1";
