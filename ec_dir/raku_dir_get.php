<?
// phpinfo();
//データベース接続
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
$change = $_GET["change"];
$dir_1 = $_GET["r_dir_1"];
$dir_2 = $_GET["r_dir_2"];
$dir_3 = $_GET["r_dir_3"];
$dir_4 = $_GET["r_dir_4"];
$dir_5 = $_GET["r_dir_5"];



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

$dir_sql = mysql_query('SET NAMES utf8');
$dir_sql = mysql_query("SELECT distinct dir_".($change+1)." FROM raku_all_dir ".$where);



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
	raku_dir_auto_2();
<?}?>
<?if($change == 2){?>
	// console.log("change 3 start!");
	raku_dir_auto_3();
	last_check_start_3_after();
<?}?>
<?if($change == 3){?>
	// console.log("change 4 start!");
	raku_dir_auto_4();
	last_check_start_4_after();
<?}?>
<?if($change == 4){?>
	// console.log("change 5 start!");
	raku_dir_auto_5();
<?}?>


//dir_4が選択肢なしで終わった場合
function last_check_start_4_after(){
	var id_value_raku_dir_4_1_text = $("#value_raku_dir_4_1").text();
	var id_value_raku_dir_5_1_html = $("#value_raku_dir_5_1").html();

	if(id_value_raku_dir_4_1_text.match("選択肢なし")){
		$("#value_raku_dir_5_1").html("<option value=''></option>");
		$("#id_res_btn").click();
	}
	if(id_value_raku_dir_5_1_html == ""){
		$("#value_raku_dir_5_1").html("<option value=''></option>");
		$("#id_res_btn").click();
	}
}

//dir_3が選択肢なしで終わった場合
function last_check_start_3_after(){
	var id_value_raku_dir_3_1_text = $("#value_raku_dir_3_1").text();
	var id_value_raku_dir_4_1_html = $("#value_raku_dir_4_1").html();

	if(id_value_raku_dir_3_1_text.match("選択肢なし")){
		$("#value_raku_dir_4_1").html("<option value=''></option>");
		$("#id_res_btn").click();
	}
	if(id_value_raku_dir_4_1_html == ""){
		$("#value_raku_dir_4_1").html("<option value=''></option>");
		$("#id_res_btn").click();
	}
}

</script>






