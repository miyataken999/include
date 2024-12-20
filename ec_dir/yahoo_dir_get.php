<?
// phpinfo();
//データベース接続
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
$change = $_GET["change"];
$dir_1 = $_GET["y_dir_1"];
$dir_2 = $_GET["y_dir_2"];
$dir_3 = $_GET["y_dir_3"];
$dir_4 = $_GET["y_dir_4"];
$dir_5 = $_GET["y_dir_5"];
$dir_6 = $_GET["y_dir_6"];
$dir_7 = $_GET["y_dir_7"];
$dir_8 = $_GET["y_dir_8"];
$dir_9 = $_GET["y_dir_9"];
$dir_10 = $_GET["y_dir_10"];



//固定値でtest
// $dir_1 = "バッグ・小物・ブランド雑貨";

$where = ' WHERE dir_1="'.$dir_1.'" ';
// $where .= ' AND dir_2 NOT LIKE "%商品登録不可%" ';

if($change >= 2){
	$where .= ' AND dir_2="'.$dir_2.'" ';
	// $where .= ' AND dir_3 NOT LIKE "%商品登録不可%" ';
}
if($change >= 3){
	$where .= ' AND dir_3="'.$dir_3.'" ';
	// $where .= ' AND dir_4 NOT LIKE "%商品登録不可%" ';
}
if($change >= 4){
	$where .= ' AND dir_4="'.$dir_4.'" ';
	// $where .= ' AND dir_5 NOT LIKE "%商品登録不可%" ';
}
if($change >= 5){
	$where .= ' AND dir_5="'.$dir_5.'" ';
	// $where .= ' AND dir_5 NOT LIKE "%商品登録不可%" ';
}
if($change >= 6){
	$where .= ' AND dir_6="'.$dir_6.'" ';
	// $where .= ' AND dir_5 NOT LIKE "%商品登録不可%" ';
}
if($change >= 7){
	$where .= ' AND dir_7="'.$dir_7.'" ';
	// $where .= ' AND dir_5 NOT LIKE "%商品登録不可%" ';
}
if($change >= 8){
	$where .= ' AND dir_8="'.$dir_8.'" ';
	// $where .= ' AND dir_5 NOT LIKE "%商品登録不可%" ';
}
if($change >= 9){
	$where .= ' AND dir_9="'.$dir_9.'" ';
	// $where .= ' AND dir_5 NOT LIKE "%商品登録不可%" ';
}

$dir_sql = mysql_query('SET NAMES utf8');
$dir_sql = mysql_query("SELECT distinct dir_".($change+1)." FROM yahoo_all_dir ".$where);



$option_tag = "";
while ($dir_res = mysql_fetch_assoc($dir_sql)) {

if($change == 1){
$option_tag .= '<option value="'.$dir_res[dir_2].'">'.$dir_res[dir_2].'</option>';
}elseif($change == 2){
$option_tag .= '<option value="'.$dir_res[dir_3].'">'.$dir_res[dir_3].'</option>';
}elseif($change == 3){
$option_tag .= '<option value="'.$dir_res[dir_4].'">'.$dir_res[dir_4].'</option>';
}elseif($change == 4){
$option_tag .= '<option value="'.$dir_res[dir_5].'">'.$dir_res[dir_5].'</option>';
}elseif($change == 5){
$option_tag .= '<option value="'.$dir_res[dir_6].'">'.$dir_res[dir_6].'</option>';
}elseif($change == 6){
$option_tag .= '<option value="'.$dir_res[dir_7].'">'.$dir_res[dir_7].'</option>';
}elseif($change == 7){
$option_tag .= '<option value="'.$dir_res[dir_8].'">'.$dir_res[dir_8].'</option>';
}elseif($change == 8){
$option_tag .= '<option value="'.$dir_res[dir_9].'">'.$dir_res[dir_9].'</option>';
}elseif($change == 9){
$option_tag .= '<option value="'.$dir_res[dir_10].'">'.$dir_res[dir_10].'</option>';
}


}//end while
if($option_tag != '<option value=""></option>'){
	$option_tag = '<option value="選択して下さい。" >選択して下さい。</option>'.$option_tag;
}else{
	$option_tag = '<option value="" >選択肢なし</option>'.$option_tag;
}
echo $option_tag;
?>




<script type="text/javascript">
//全反映
<?if($change == 1){?>
	// console.log("change 2 start!");
	yahoo_dir_auto_2();
<?}?>
<?if($change == 2){?>
	// console.log("change 3 start!");
	yahoo_dir_auto_3();
	last_check_start_3_after();
<?}?>
<?if($change == 3){?>
	// console.log("change 4 start!");
	yahoo_dir_auto_4();
	last_check_start_4_after();
<?}?>
<?if($change == 4){?>
	// console.log("change 5 start!");
	yahoo_dir_auto_5();
	last_check_start_5_after();
<?}?>
<?if($change == 5){?>
	// console.log("change 6 start!");
	yahoo_dir_auto_6();
	last_check_start_6_after();
<?}?>
<?if($change == 6){?>
	// console.log("change 7 start!");
	yahoo_dir_auto_7();
	last_check_start_7_after();
<?}?>
<?if($change == 7){?>
	// console.log("change 8 start!");
	yahoo_dir_auto_8();
	last_check_start_8_after();
<?}?>
<?if($change == 8){?>
	// console.log("change 9 start!");
	yahoo_dir_auto_9();
	last_check_start_9_after();
<?}?>
<?if($change == 9){?>
	// console.log("change 10 start!");
	yahoo_dir_auto_10();
<?}?>


//dir_9が選択肢なしで終わった場合
function last_check_start_9_after(){
	var id_value_yahoo_dir_9_1_text = $("#value_yahoo_dir_9_1").text();
	var id_value_yahoo_dir_10_1_html = $("#value_yahoo_dir_10_1").html();

	if(id_value_yahoo_dir_9_1_text.match("選択肢なし")){
		$("#value_yahoo_dir_10_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
	if(id_value_yahoo_dir_10_1_html == ""){
		$("#value_yahoo_dir_10_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
}

//dir_8が選択肢なしで終わった場合
function last_check_start_8_after(){
	var id_value_yahoo_dir_8_1_text = $("#value_yahoo_dir_8_1").text();
	var id_value_yahoo_dir_9_1_html = $("#value_yahoo_dir_9_1").html();

	if(id_value_yahoo_dir_8_1_text.match("選択肢なし")){
		$("#value_yahoo_dir_9_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
	if(id_value_yahoo_dir_9_1_html == ""){
		$("#value_yahoo_dir_9_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
}

//dir_7が選択肢なしで終わった場合
function last_check_start_7_after(){
	var id_value_yahoo_dir_7_1_text = $("#value_yahoo_dir_7_1").text();
	var id_value_yahoo_dir_8_1_html = $("#value_yahoo_dir_8_1").html();

	if(id_value_yahoo_dir_7_1_text.match("選択肢なし")){
		$("#value_yahoo_dir_8_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
	if(id_value_yahoo_dir_8_1_html == ""){
		$("#value_yahoo_dir_8_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
}

//dir_6が選択肢なしで終わった場合
function last_check_start_6_after(){
	var id_value_yahoo_dir_6_1_text = $("#value_yahoo_dir_6_1").text();
	var id_value_yahoo_dir_7_1_html = $("#value_yahoo_dir_7_1").html();

	if(id_value_yahoo_dir_6_1_text.match("選択肢なし")){
		$("#value_yahoo_dir_7_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
	if(id_value_yahoo_dir_7_1_html == ""){
		$("#value_yahoo_dir_7_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
}

//dir_5が選択肢なしで終わった場合
function last_check_start_5_after(){
	var id_value_yahoo_dir_5_1_text = $("#value_yahoo_dir_5_1").text();
	var id_value_yahoo_dir_6_1_html = $("#value_yahoo_dir_6_1").html();

	if(id_value_yahoo_dir_5_1_text.match("選択肢なし")){
		$("#value_yahoo_dir_6_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
	if(id_value_yahoo_dir_6_1_html == ""){
		$("#value_yahoo_dir_6_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
}

//dir_4が選択肢なしで終わった場合
function last_check_start_4_after(){
	var id_value_yahoo_dir_4_1_text = $("#value_yahoo_dir_4_1").text();
	var id_value_yahoo_dir_5_1_html = $("#value_yahoo_dir_5_1").html();

	if(id_value_yahoo_dir_4_1_text.match("選択肢なし")){
		$("#value_yahoo_dir_5_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
	if(id_value_yahoo_dir_5_1_html == ""){
		$("#value_yahoo_dir_5_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
}

//dir_3が選択肢なしで終わった場合
function last_check_start_3_after(){
	var id_value_yahoo_dir_3_1_text = $("#value_yahoo_dir_3_1").text();
	var id_value_yahoo_dir_4_1_html = $("#value_yahoo_dir_4_1").html();

	if(id_value_yahoo_dir_3_1_text.match("選択肢なし")){
		$("#value_yahoo_dir_4_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
	if(id_value_yahoo_dir_4_1_html == ""){
		$("#value_yahoo_dir_4_1").html("<option value=''></option>");
		$("#yahoo_id_res_btn").click();
	}
}

</script>






