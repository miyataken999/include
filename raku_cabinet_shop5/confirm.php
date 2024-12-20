
<?//画像参照用のページだったが、そのままZIP作成用のページに。?>

<!DOCTYPE html>
<html>
<head>
	<!--NO INDEX -->
	<meta name="robots" content="noindex">
	<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>出品用ZIP作成画面</title>
	<style type="text/css">
		.h2 {
		    background-color: #1cf;
		    color: #111;
		    padding: 10px;
		    margin: 0;
		}
		img{
			width: 35px;
			height: 35px;
		}
		a:hover{
			opacity: 0.5;
		}
		table{
			border: 1px solid;
		}
		td {
		    padding: 5px;
		    border: 1px solid;
		}
		#zip_edit_area table{
			float: left;
		}
		#zip_edit_area {
		    text-align: right;
		    position: fixed;
		    right: 0px;
		    bottom: 20px;
		    background-color: rgba(0,0,0,0.8);
		    display: block;
		    width: 100%;
		    padding: 15px 0;
		    color: #fff;
		    font-size: 18px;
		}
		#zip_edit_area select{
			padding: 10px;
		}
		#submit:hover{
			opacity: 0.5;
			cursor: pointer;
		}
		#submit{
			padding: 10px;
			margin-right: 20px;
		}
		#rakuten_cabinet_name {
		    padding: 0 10px 10px;
		}
		#main_table{
		}
		#id_text{
			/*display: inline-block;*/
			margin-right: 20px;
			font-size: 26px;
		}
		#new_eva_link{
			float: right;
		}
		#new_eva_link a{
			color: #111;
			text-decoration: none;
			display: inline-block;
			padding: 15px 30px;
			margin-right: 20px;
			background-color: #ddd;
			border: 2px solid #000;
		}
		#settei_table{
			padding-left: 20px;
			float: left;
		}
		#set_st_up_area{
			position: absolute;
			top: 0;
			left: 0;
			text-align: left;
		}
		#set_st_up_area .set_st_up:hover{
			opacity: 0.5;
		}
		#set_st_up_area .set_st_up{
			background-color: #dcdcdc;
			border: 2px solid #111;
			padding: 10px 10px;
			width: 90px;
			color: #111;
			font-size: 12px;
			display: inline-block;
			cursor: pointer;
		}
	</style>
</head>
<body>


<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$box_id = 5096;
if($_GET[box_id] != ""){
	$box_id = $_GET[box_id];
	$box_id_default = $box_id;
	$box_id_name = str_replace("_","&",$box_id);




//入力値から10個分出す
$box_id_array = array();

for ($box_id_i=0; $box_id_i < 10; $box_id_i++) {
	$push_box_id = $box_id-$box_id_i;
	if($push_box_id != 424){
		array_push($box_id_array,$push_box_id);
	}
}


	var_dump($box_id_array);
	// exit();
}
?>
<h1>box_id = <?=$box_id_name?></h1>


<div id="all_table" style="padding-bottom: 500px;">

	<table cellpadding="0" cellspacing="0" id="main_table">
<?

$urlounge_box_name = "";
$rakuten_cabinet_name = "";

for ($box_i=0; $box_i < count($box_id_array); $box_i++) {
	$box_id = $box_id_array[$box_i];
?>
		<tr><th colspan="16" class="h2">box_id = <?=$box_id?></th></tr>
<?
	include $_SERVER["DOCUMENT_ROOT"]."/include/raku_cabinet/confirm_inc.php";
}
?>
	</table>

</div><!-- enc all_table -->

<form action="./confirm.php" method="get" accept-charset="utf-8">
	box_id最大値 <input type="text" name="box_id" id="box_id" placeholder="" value="<?=($box_id-1)?>">
	<input type="submit" name="submit" value="実行">
</form>

<?
session_start();
//旧EVAのユーザーID
if($_SESSION["PortalUserID"] != ""){
	$user_id = $_SESSION["PortalUserID"];
}
//新EVAのユーザーID
if($_SESSION["uid"] != ""){
	$user_id = $_SESSION["uid"];
}


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
var new_st = "";
var st_res = "";
var row_id_seq = "";
var st_up_val = "";
var st_id = "";
var confirm_flag = "";
	$("#set_st_up_area").find(".set_st_up").click(function(){
		new_st = $(this).attr("data");
		$("#main_table").find(".st_up_select").val(new_st);
	})
	$("#zip_edit_area").submit(function(){
		st_res = "";
		row_id_seq = "";
		$("#main_table").find(".st_up_select").each(function(index, val) {
			st_up_val = $(this).val();
			st_id = "";
			if(st_up_val == 3){
				row_id_seq = $(this).parent().parent().attr("id");
				row_id_seq = row_id_seq.replace("toprow_","");
				st_id = $("#underrow_"+row_id_seq).find(".st_id").attr("data");
				console.log("st_id"+st_id);
				st_res = st_res+"_"+row_id_seq;

				//STが加工待ちと入庫待ち以外があったらconfirm出すフラグをたてる
				if((st_id != 106) && (st_id != 107) && (st_id != 108)){
					confirm_flag = "out";
				}
			}
		});
		$("#st_up_result").val(st_res);

		if(confirm_flag == "out"){
			if(window.confirm('ST「加工待ち」「入庫待ち」「P待ち」以外がUP済み変更に含まれています。このまま続行しますか？')){
				return true;
			}else{
				return false;
			}
		}else{
			return true;
		}


	})

$(document).ready(function() {
    // //画像にclassを付加
    // $('img').addClass('miss');
    // //画像が見つからないときにエラーイベント発生
    // $('img.miss').error(function() {
    //     alert("画像ミスあり");
    // });

    $("#box_id").focus();
    var kec = "";
    $("body").keydown(function(event){
    	kec = event.keyCode;
    	// console.log(kec);
    	if(kec == 17){
		    $("#box_id").focus();
    	}
    });
});



</script>
</body>
</html>
