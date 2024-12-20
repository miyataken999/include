<?
// phpinfo();
//データベース接続
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


?>

<script type="text/javascript">

var id_value_yahoo_dir_1_1 = $("#value_yahoo_dir_1_1");
var id_value_yahoo_dir_2_1 = $("#value_yahoo_dir_2_1");
var id_value_yahoo_dir_3_1 = $("#value_yahoo_dir_3_1");
var id_value_yahoo_dir_4_1 = $("#value_yahoo_dir_4_1");
var id_value_yahoo_dir_5_1 = $("#value_yahoo_dir_5_1");
var id_value_yahoo_dir_6_1 = $("#value_yahoo_dir_6_1");
var id_value_yahoo_dir_7_1 = $("#value_yahoo_dir_7_1");
var id_value_yahoo_dir_8_1 = $("#value_yahoo_dir_8_1");
var id_value_yahoo_dir_9_1 = $("#value_yahoo_dir_9_1");
var id_value_yahoo_dir_10_1 = $("#value_yahoo_dir_10_1");
var id_value_yahoo_dir_1_1_val = "";
var id_value_yahoo_dir_2_1_val = "";
var id_value_yahoo_dir_3_1_val = "";
var id_value_yahoo_dir_4_1_val = "";
var id_value_yahoo_dir_5_1_val = "";
var id_value_yahoo_dir_6_1_val = "";
var id_value_yahoo_dir_7_1_val = "";
var id_value_yahoo_dir_8_1_val = "";
var id_value_yahoo_dir_9_1_val = "";
var id_value_yahoo_dir_10_1_val = "";

var id_brand_kashira_for_yahoo_val = "<?=$seach_j?>";

var id_value_yahoo_product_num_1_val = "<?=$product_num?>";

//全反映
console.log("change 1 start!");
yahoo_dir_auto_1();



$("#yahoo_auto_1").click(function(){
	yahoo_dir_auto_1();
})


function yahoo_dir_auto_1(){
//第一階層

<?
$teigi_sql = mysql_query('SET NAMES utf8');
$teigi_sql = mysql_query("SELECT * FROM mst_yahoo_teigi_1 ORDER BY dir_1_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res = mysql_fetch_assoc($teigi_sql)) {
	if(($dir_teigi_res["name_1"] != "" ) &&($dir_teigi_res["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if(";
		}else{
			$teigi .= "if(";
		}
		$teigi .= "($(\"#value_".$dir_teigi_res["name_1"]."_1\").val() == ".$dir_teigi_res["value_1"]." )";

		//2個目の定義　あれば追加
		if(($dir_teigi_res["conjunction_2"] != "" ) && ($dir_teigi_res["name_2"] != "" ) && ($dir_teigi_res["value_2"] != "" )){
			if($dir_teigi_res["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res["name_2"]."_1\").val() == ".$dir_teigi_res["value_2"]." )";
		}

		//3個目の定義　あれば追加
		// echo 'console.log(\'接続詞３　'.$dir_teigi_res["conjunction_3"].'\');';
		if(($dir_teigi_res["conjunction_3"] != "" ) && ($dir_teigi_res["name_3"] != "" ) && ($dir_teigi_res["value_3"] != "" )){
			if($dir_teigi_res["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}
			$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res["name_3"]."_1\").val() == ".$dir_teigi_res["value_3"]." )";
		}


		//4個目の定義　あれば追加
		// echo 'console.log(\'接続詞３　'.$dir_teigi_res["conjunction_4"].'\');';
		if(($dir_teigi_res["conjunction_4"] != "" ) && ($dir_teigi_res["name_4"] != "" ) && ($dir_teigi_res["value_4"] != "" )){
			if($dir_teigi_res["conjunction_4"] == "AND"){
				$conjunction_4 = " && ";
			}elseif($dir_teigi_res["conjunction_4"] == "OR"){
				$conjunction_4 = " || ";
			}
			$teigi .= $conjunction_4."($(\"#value_".$dir_teigi_res["name_4"]."_1\").val() == ".$dir_teigi_res["value_4"]." )";
		}


		//5個目の定義　あれば追加
		// echo 'console.log(\'接続詞３　'.$dir_teigi_res["conjunction_5"].'\');';
		if(($dir_teigi_res["conjunction_5"] != "" ) && ($dir_teigi_res["name_5"] != "" ) && ($dir_teigi_res["value_5"] != "" )){
			if($dir_teigi_res["conjunction_5"] == "AND"){
				$conjunction_5 = " && ";
			}elseif($dir_teigi_res["conjunction_5"] == "OR"){
				$conjunction_5 = " || ";
			}
			$teigi .= $conjunction_5."($(\"#value_".$dir_teigi_res["name_5"]."_1\").val() == ".$dir_teigi_res["value_5"]." )";
		}


		//6個目の定義　あれば追加
		// echo 'console.log(\'接続詞３　'.$dir_teigi_res["conjunction_6"].'\');';
		if(($dir_teigi_res["conjunction_6"] != "" ) && ($dir_teigi_res["name_6"] != "" ) && ($dir_teigi_res["value_6"] != "" )){
			if($dir_teigi_res["conjunction_6"] == "AND"){
				$conjunction_6 = " && ";
			}elseif($dir_teigi_res["conjunction_6"] == "OR"){
				$conjunction_6 = " || ";
			}
			$teigi .= $conjunction_6."($(\"#value_".$dir_teigi_res["name_6"]."_1\").val() == ".$dir_teigi_res["value_6"]." )";
		}


		//7個目の定義　あれば追加
		// echo 'console.log(\'接続詞３　'.$dir_teigi_res["conjunction_7"].'\');';
		if(($dir_teigi_res["conjunction_7"] != "" ) && ($dir_teigi_res["name_7"] != "" ) && ($dir_teigi_res["value_7"] != "" )){
			if($dir_teigi_res["conjunction_7"] == "AND"){
				$conjunction_7 = " && ";
			}elseif($dir_teigi_res["conjunction_7"] == "OR"){
				$conjunction_7 = " || ";
			}
			$teigi .= $conjunction_7."($(\"#value_".$dir_teigi_res["name_7"]."_1\").val() == ".$dir_teigi_res["value_7"]." )";
		}


		//8個目の定義　あれば追加
		// echo 'console.log(\'接続詞３　'.$dir_teigi_res["conjunction_8"].'\');';
		if(($dir_teigi_res["conjunction_8"] != "" ) && ($dir_teigi_res["name_8"] != "" ) && ($dir_teigi_res["value_8"] != "" )){
			if($dir_teigi_res["conjunction_8"] == "AND"){
				$conjunction_8 = " && ";
			}elseif($dir_teigi_res["conjunction_8"] == "OR"){
				$conjunction_8 = " || ";
			}
			$teigi .= $conjunction_8."($(\"#value_".$dir_teigi_res["name_8"]."_1\").val() == ".$dir_teigi_res["value_8"]." )";
		}


		//9個目の定義　あれば追加
		// echo 'console.log(\'接続詞３　'.$dir_teigi_res["conjunction_9"].'\');';
		if(($dir_teigi_res["conjunction_9"] != "" ) && ($dir_teigi_res["name_9"] != "" ) && ($dir_teigi_res["value_9"] != "" )){
			if($dir_teigi_res["conjunction_9"] == "AND"){
				$conjunction_9 = " && ";
			}elseif($dir_teigi_res["conjunction_9"] == "OR"){
				$conjunction_9 = " || ";
			}
			$teigi .= $conjunction_9."($(\"#value_".$dir_teigi_res["name_9"]."_1\").val() == ".$dir_teigi_res["value_9"]." )";
		}



			//定義の中の動作
			$teigi .= "){";
			$teigi .= "id_value_yahoo_dir_1_1.val(\"".$dir_teigi_res["dir_1_name"]."\");";
			$teigi .= "id_value_yahoo_dir_1_1.change();";
			$teigi .= "}";




$teigi_sum++;


	}
?>


<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第一階層
}//end yahoo_dir_auto_1





$("#yahoo_auto_2").click(function(){
	yahoo_dir_auto_2();
})
function yahoo_dir_auto_2(){
//第二階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();

<?
$teigi_sql_2 = mysql_query('SET NAMES utf8');
$teigi_sql_2 = mysql_query("SELECT dir_1_name , dir_2_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 FROM mst_yahoo_teigi_2 ORDER BY dir_2_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_2 = mysql_fetch_assoc($teigi_sql_2)) {
	if(($dir_teigi_res_2["name_1"] != "" ) &&($dir_teigi_res_2["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}
		$teigi .= "($(\"#value_".$dir_teigi_res_2["name_1"]."_1\").val() == ".$dir_teigi_res_2["value_1"]." )";

		//2個目の定義　あれば追加
		if(($dir_teigi_res_2["conjunction_2"] != "" ) && ($dir_teigi_res_2["name_2"] != "" ) && ($dir_teigi_res_2["value_2"] != "" )){
			if($dir_teigi_res_2["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_2["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_2["name_2"]."_1\").val() == ".$dir_teigi_res_2["value_2"]." )";
		}
		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_2["dir_1_name"]."\") ){";
		$teigi .= "id_value_yahoo_dir_2_1.val(\"".$dir_teigi_res_2["dir_2_name"]."\");";
		$teigi .= "id_value_yahoo_dir_2_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第二階層
}//end yahoo_dir_auto_2





$("#yahoo_auto_3").click(function(){
	yahoo_dir_auto_3();
})
function yahoo_dir_auto_3(){
//第三階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();
	id_value_yahoo_dir_2_1_val = $("#value_yahoo_dir_2_1").val();


<?
$teigi_sql_3 = mysql_query('SET NAMES utf8');
$teigi_sql_3 = mysql_query("SELECT dir_1_name , dir_2_name , dir_3_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM mst_yahoo_teigi_3 ORDER BY dir_3_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_3 = mysql_fetch_assoc($teigi_sql_3)) {
	if(($dir_teigi_res_3["name_1"] != "" ) &&($dir_teigi_res_3["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}

		//優先用のかっこ開始
		$teigi .= "(";

		if($dir_teigi_res_3["name_1"] == "seach_j"){
			$teigi .= "(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_3["value_1"]."\")";
		}else{
			$teigi .= "($(\"#value_".$dir_teigi_res_3["name_1"]."_1\").val() == ".$dir_teigi_res_3["value_1"]." )";
		}

		//2個目の定義　あれば追加
		if(($dir_teigi_res_3["conjunction_2"] != "" ) && ($dir_teigi_res_3["name_2"] != "" ) && ($dir_teigi_res_3["value_2"] != "" )){
			if($dir_teigi_res_3["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_3["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}

			if($dir_teigi_res_3["name_2"] == "seach_j"){
				$teigi .= $conjunction_2."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_3["value_2"]."\")";
			}else{
				$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_3["name_2"]."_1\").val() == ".$dir_teigi_res_3["value_2"]." )";
			}

		}

		//優先用のかっこ閉じ
		$teigi .= ")";

		//3個目の定義　あれば追加
		if(($dir_teigi_res_3["conjunction_3"] != "" ) && ($dir_teigi_res_3["name_3"] != "" ) && ($dir_teigi_res_3["value_3"] != "" )){
			if($dir_teigi_res_3["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res_3["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}

			if($dir_teigi_res_3["name_3"] == "seach_j"){
				$teigi .= $conjunction_3."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_3["value_3"]."\")";
			}else{
				$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res_3["name_3"]."_1\").val() == ".$dir_teigi_res_3["value_3"]." )";
			}

		}

		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_3["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_3["dir_2_name"]."\") ";
		if($dir_teigi_res_3["brand_junle"] != ""){
			$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_3["brand_junle"]."\") ";
		}
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_3_1.val(\"".$dir_teigi_res_3["dir_3_name"]."\");";
		$teigi .= "id_value_yahoo_dir_3_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}elseif($dir_teigi_res_3["brand_junle"] != ""){
		$teigi .= "if(";
		$teigi .= " (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_3["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_3["dir_2_name"]."\") ";
		$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_3["brand_junle"]."\") ";
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_3_1.val(\"".$dir_teigi_res_3["dir_3_name"]."\");";
		$teigi .= "id_value_yahoo_dir_3_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第三階層
}//end yahoo_dir_auto_2


$("#yahoo_auto_4").click(function(){
	yahoo_dir_auto_4();
})
function yahoo_dir_auto_4(){
//第四階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();
	id_value_yahoo_dir_2_1_val = $("#value_yahoo_dir_2_1").val();
	id_value_yahoo_dir_3_1_val = $("#value_yahoo_dir_3_1").val();


<?
$teigi_sql_4 = mysql_query('SET NAMES utf8');
$teigi_sql_4 = mysql_query("SELECT dir_1_name , dir_2_name , dir_3_name , dir_4_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM mst_yahoo_teigi_4 ORDER BY dir_4_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_4 = mysql_fetch_assoc($teigi_sql_4)) {
	if(($dir_teigi_res_4["name_1"] != "" ) &&($dir_teigi_res_4["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}

		//優先用のかっこ開始
		$teigi .= "(";

		if($dir_teigi_res_4["name_1"] == "seach_j"){
			$teigi .= "(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_4["value_1"]."\")";
		}else{
			$teigi .= "($(\"#value_".$dir_teigi_res_4["name_1"]."_1\").val() == ".$dir_teigi_res_4["value_1"]." )";
		}

		//2個目の定義　あれば追加
		if(($dir_teigi_res_4["conjunction_2"] != "" ) && ($dir_teigi_res_4["name_2"] != "" ) && ($dir_teigi_res_4["value_2"] != "" )){
			if($dir_teigi_res_4["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_4["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			if($dir_teigi_res_4["name_2"] == "seach_j"){
				$teigi .= $conjunction_2."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_4["value_2"]."\")";
			}else{
				$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_4["name_2"]."_1\").val() == ".$dir_teigi_res_4["value_2"]." )";
			}
		}

		//優先用のかっこ閉じ
		$teigi .= ")";

		//3個目の定義　あれば追加
		if(($dir_teigi_res_4["conjunction_3"] != "" ) && ($dir_teigi_res_4["name_3"] != "" ) && ($dir_teigi_res_4["value_3"] != "" )){
			if($dir_teigi_res_4["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res_4["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}
			if($dir_teigi_res_4["name_3"] == "seach_j"){
				$teigi .= $conjunction_3."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_4["value_3"]."\")";
			}else{
				$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res_4["name_3"]."_1\").val() == ".$dir_teigi_res_4["value_3"]." )";
			}
		}

		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_4["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_4["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_4["dir_3_name"]."\") ";
		if($dir_teigi_res_4["brand_junle"] != ""){
			$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_4["brand_junle"]."\") ";
		}
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_4_1.val(\"".$dir_teigi_res_4["dir_4_name"]."\");";
		$teigi .= "id_value_yahoo_dir_4_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}elseif($dir_teigi_res_4["brand_junle"] != ""){
		$teigi .= "if(";
		$teigi .= " (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_4["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_4["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_4["dir_3_name"]."\") ";
		$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_4["brand_junle"]."\") ";
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_4_1.val(\"".$dir_teigi_res_4["dir_4_name"]."\");";
		$teigi .= "id_value_yahoo_dir_4_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第四階層
}//end yahoo_dir_auto_4






$("#yahoo_auto_5").click(function(){
	yahoo_dir_auto_5();
})
function yahoo_dir_auto_5(){
//第四階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();
	id_value_yahoo_dir_2_1_val = $("#value_yahoo_dir_2_1").val();
	id_value_yahoo_dir_3_1_val = $("#value_yahoo_dir_3_1").val();
	id_value_yahoo_dir_4_1_val = $("#value_yahoo_dir_4_1").val();


<?
$teigi_sql_5 = mysql_query('SET NAMES utf8');
$teigi_sql_5 = mysql_query("SELECT dir_1_name , dir_2_name , dir_3_name , dir_4_name , dir_5_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM mst_yahoo_teigi_5 ORDER BY dir_5_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_5 = mysql_fetch_assoc($teigi_sql_5)) {
	if(($dir_teigi_res_5["name_1"] != "" ) &&($dir_teigi_res_5["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}

		//優先用のかっこ開始
		$teigi .= "(";

		if($dir_teigi_res_5["name_1"] == "seach_j"){
			$teigi .= "(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_5["value_1"]."\")";
		}else{
			$teigi .= "($(\"#value_".$dir_teigi_res_5["name_1"]."_1\").val() == ".$dir_teigi_res_5["value_1"]." )";
		}

		//2個目の定義　あれば追加
		if(($dir_teigi_res_5["conjunction_2"] != "" ) && ($dir_teigi_res_5["name_2"] != "" ) && ($dir_teigi_res_5["value_2"] != "" )){
			if($dir_teigi_res_5["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_5["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			if($dir_teigi_res_5["name_2"] == "seach_j"){
				$teigi .= $conjunction_2."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_5["value_2"]."\")";
			}else{
				$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_5["name_2"]."_1\").val() == ".$dir_teigi_res_5["value_2"]." )";
			}
		}

		//優先用のかっこ閉じ
		$teigi .= ")";

		//3個目の定義　あれば追加
		if(($dir_teigi_res_5["conjunction_3"] != "" ) && ($dir_teigi_res_5["name_3"] != "" ) && ($dir_teigi_res_5["value_3"] != "" )){
			if($dir_teigi_res_5["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res_5["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}
			if($dir_teigi_res_5["name_3"] == "seach_j"){
				$teigi .= $conjunction_3."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_5["value_3"]."\")";
			}else{
				$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res_5["name_3"]."_1\").val() == ".$dir_teigi_res_5["value_3"]." )";
			}
		}

		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_5["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_5["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_5["dir_3_name"]."\") ";
		if($dir_teigi_res_5["brand_junle"] != ""){
			$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_5["brand_junle"]."\") ";
		}
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_5_1.val(\"".$dir_teigi_res_5["dir_5_name"]."\");";
		$teigi .= "id_value_yahoo_dir_5_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}elseif($dir_teigi_res_5["brand_junle"] != ""){
		$teigi .= "if(";
		$teigi .= " (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_5["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_5["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_5["dir_3_name"]."\") ";
		$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_5["brand_junle"]."\") ";
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_5_1.val(\"".$dir_teigi_res_5["dir_5_name"]."\");";
		$teigi .= "id_value_yahoo_dir_5_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第五階層
}//end yahoo_dir_auto_5






$("#yahoo_auto_6").click(function(){
	yahoo_dir_auto_6();
})
function yahoo_dir_auto_6(){
//第四階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();
	id_value_yahoo_dir_2_1_val = $("#value_yahoo_dir_2_1").val();
	id_value_yahoo_dir_3_1_val = $("#value_yahoo_dir_3_1").val();
	id_value_yahoo_dir_4_1_val = $("#value_yahoo_dir_4_1").val();
	id_value_yahoo_dir_5_1_val = $("#value_yahoo_dir_5_1").val();


<?
$teigi_sql_6 = mysql_query('SET NAMES utf8');
$teigi_sql_6 = mysql_query("SELECT dir_1_name , dir_2_name , dir_3_name , dir_4_name , dir_5_name , dir_6_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM mst_yahoo_teigi_6 ORDER BY dir_6_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_6 = mysql_fetch_assoc($teigi_sql_6)) {
	if(($dir_teigi_res_6["name_1"] != "" ) &&($dir_teigi_res_6["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}

		//優先用のかっこ開始
		$teigi .= "(";

		if($dir_teigi_res_6["name_1"] == "seach_j"){
			$teigi .= "(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_6["value_1"]."\")";
		}else{
			$teigi .= "($(\"#value_".$dir_teigi_res_6["name_1"]."_1\").val() == ".$dir_teigi_res_6["value_1"]." )";
		}

		//2個目の定義　あれば追加
		if(($dir_teigi_res_6["conjunction_2"] != "" ) && ($dir_teigi_res_6["name_2"] != "" ) && ($dir_teigi_res_6["value_2"] != "" )){
			if($dir_teigi_res_6["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_6["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			if($dir_teigi_res_6["name_2"] == "seach_j"){
				$teigi .= $conjunction_2."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_6["value_2"]."\")";
			}else{
				$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_6["name_2"]."_1\").val() == ".$dir_teigi_res_6["value_2"]." )";
			}
		}

		//優先用のかっこ閉じ
		$teigi .= ")";

		//3個目の定義　あれば追加
		if(($dir_teigi_res_6["conjunction_3"] != "" ) && ($dir_teigi_res_6["name_3"] != "" ) && ($dir_teigi_res_6["value_3"] != "" )){
			if($dir_teigi_res_6["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res_6["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}
			if($dir_teigi_res_6["name_3"] == "seach_j"){
				$teigi .= $conjunction_3."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_6["value_3"]."\")";
			}else{
				$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res_6["name_3"]."_1\").val() == ".$dir_teigi_res_6["value_3"]." )";
			}
		}

		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_6["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_6["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_6["dir_3_name"]."\") ";
		if($dir_teigi_res_6["brand_junle"] != ""){
			$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_6["brand_junle"]."\") ";
		}
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_6_1.val(\"".$dir_teigi_res_6["dir_6_name"]."\");";
		$teigi .= "id_value_yahoo_dir_6_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}elseif($dir_teigi_res_6["brand_junle"] != ""){
		$teigi .= "if(";
		$teigi .= " (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_6["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_6["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_6["dir_3_name"]."\") ";
		$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_6["brand_junle"]."\") ";
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_6_1.val(\"".$dir_teigi_res_6["dir_6_name"]."\");";
		$teigi .= "id_value_yahoo_dir_6_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第六階層
}//end yahoo_dir_auto_6






$("#yahoo_auto_7").click(function(){
	yahoo_dir_auto_7();
})
function yahoo_dir_auto_7(){
//第四階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();
	id_value_yahoo_dir_2_1_val = $("#value_yahoo_dir_2_1").val();
	id_value_yahoo_dir_3_1_val = $("#value_yahoo_dir_3_1").val();
	id_value_yahoo_dir_4_1_val = $("#value_yahoo_dir_4_1").val();
	id_value_yahoo_dir_5_1_val = $("#value_yahoo_dir_5_1").val();
	id_value_yahoo_dir_6_1_val = $("#value_yahoo_dir_6_1").val();


<?
$teigi_sql_7 = mysql_query('SET NAMES utf8');
$teigi_sql_7 = mysql_query("SELECT dir_1_name , dir_2_name , dir_3_name , dir_4_name , dir_5_name , dir_6_name , dir_7_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM mst_yahoo_teigi_7 ORDER BY dir_7_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_7 = mysql_fetch_assoc($teigi_sql_7)) {
	if(($dir_teigi_res_7["name_1"] != "" ) &&($dir_teigi_res_7["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}

		//優先用のかっこ開始
		$teigi .= "(";

		if($dir_teigi_res_7["name_1"] == "seach_j"){
			$teigi .= "(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_7["value_1"]."\")";
		}else{
			$teigi .= "($(\"#value_".$dir_teigi_res_7["name_1"]."_1\").val() == ".$dir_teigi_res_7["value_1"]." )";
		}

		//2個目の定義　あれば追加
		if(($dir_teigi_res_7["conjunction_2"] != "" ) && ($dir_teigi_res_7["name_2"] != "" ) && ($dir_teigi_res_7["value_2"] != "" )){
			if($dir_teigi_res_7["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_7["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			if($dir_teigi_res_7["name_2"] == "seach_j"){
				$teigi .= $conjunction_2."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_7["value_2"]."\")";
			}else{
				$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_7["name_2"]."_1\").val() == ".$dir_teigi_res_7["value_2"]." )";
			}
		}

		//優先用のかっこ閉じ
		$teigi .= ")";

		//3個目の定義　あれば追加
		if(($dir_teigi_res_7["conjunction_3"] != "" ) && ($dir_teigi_res_7["name_3"] != "" ) && ($dir_teigi_res_7["value_3"] != "" )){
			if($dir_teigi_res_7["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res_7["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}
			if($dir_teigi_res_7["name_3"] == "seach_j"){
				$teigi .= $conjunction_3."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_7["value_3"]."\")";
			}else{
				$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res_7["name_3"]."_1\").val() == ".$dir_teigi_res_7["value_3"]." )";
			}
		}

		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_7["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_7["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_7["dir_3_name"]."\") ";
		if($dir_teigi_res_7["brand_junle"] != ""){
			$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_7["brand_junle"]."\") ";
		}
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_7_1.val(\"".$dir_teigi_res_7["dir_7_name"]."\");";
		$teigi .= "id_value_yahoo_dir_7_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}elseif($dir_teigi_res_7["brand_junle"] != ""){
		$teigi .= "if(";
		$teigi .= " (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_7["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_7["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_7["dir_3_name"]."\") ";
		$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_7["brand_junle"]."\") ";
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_7_1.val(\"".$dir_teigi_res_7["dir_7_name"]."\");";
		$teigi .= "id_value_yahoo_dir_7_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第七階層
}//end yahoo_dir_auto_7






$("#yahoo_auto_8").click(function(){
	yahoo_dir_auto_8();
})
function yahoo_dir_auto_8(){
//第四階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();
	id_value_yahoo_dir_2_1_val = $("#value_yahoo_dir_2_1").val();
	id_value_yahoo_dir_3_1_val = $("#value_yahoo_dir_3_1").val();
	id_value_yahoo_dir_4_1_val = $("#value_yahoo_dir_4_1").val();
	id_value_yahoo_dir_5_1_val = $("#value_yahoo_dir_5_1").val();
	id_value_yahoo_dir_6_1_val = $("#value_yahoo_dir_6_1").val();
	id_value_yahoo_dir_7_1_val = $("#value_yahoo_dir_7_1").val();


<?
$teigi_sql_8 = mysql_query('SET NAMES utf8');
$teigi_sql_8 = mysql_query("SELECT dir_1_name , dir_2_name , dir_3_name , dir_4_name , dir_5_name , dir_6_name , dir_7_name , dir_8_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM mst_yahoo_teigi_8 ORDER BY dir_8_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_8 = mysql_fetch_assoc($teigi_sql_8)) {
	if(($dir_teigi_res_8["name_1"] != "" ) &&($dir_teigi_res_8["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}

		//優先用のかっこ開始
		$teigi .= "(";

		if($dir_teigi_res_8["name_1"] == "seach_j"){
			$teigi .= "(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_8["value_1"]."\")";
		}else{
			$teigi .= "($(\"#value_".$dir_teigi_res_8["name_1"]."_1\").val() == ".$dir_teigi_res_8["value_1"]." )";
		}

		//2個目の定義　あれば追加
		if(($dir_teigi_res_8["conjunction_2"] != "" ) && ($dir_teigi_res_8["name_2"] != "" ) && ($dir_teigi_res_8["value_2"] != "" )){
			if($dir_teigi_res_8["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_8["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			if($dir_teigi_res_8["name_2"] == "seach_j"){
				$teigi .= $conjunction_2."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_8["value_2"]."\")";
			}else{
				$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_8["name_2"]."_1\").val() == ".$dir_teigi_res_8["value_2"]." )";
			}
		}

		//優先用のかっこ閉じ
		$teigi .= ")";

		//3個目の定義　あれば追加
		if(($dir_teigi_res_8["conjunction_3"] != "" ) && ($dir_teigi_res_8["name_3"] != "" ) && ($dir_teigi_res_8["value_3"] != "" )){
			if($dir_teigi_res_8["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res_8["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}
			if($dir_teigi_res_8["name_3"] == "seach_j"){
				$teigi .= $conjunction_3."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_8["value_3"]."\")";
			}else{
				$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res_8["name_3"]."_1\").val() == ".$dir_teigi_res_8["value_3"]." )";
			}
		}

		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_8["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_8["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_8["dir_3_name"]."\") ";
		if($dir_teigi_res_8["brand_junle"] != ""){
			$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_8["brand_junle"]."\") ";
		}
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_8_1.val(\"".$dir_teigi_res_8["dir_8_name"]."\");";
		$teigi .= "id_value_yahoo_dir_8_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}elseif($dir_teigi_res_8["brand_junle"] != ""){
		$teigi .= "if(";
		$teigi .= " (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_8["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_8["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_8["dir_3_name"]."\") ";
		$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_8["brand_junle"]."\") ";
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_8_1.val(\"".$dir_teigi_res_8["dir_8_name"]."\");";
		$teigi .= "id_value_yahoo_dir_8_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第八階層
}//end yahoo_dir_auto_8






$("#yahoo_auto_9").click(function(){
	yahoo_dir_auto_9();
})
function yahoo_dir_auto_9(){
//第四階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();
	id_value_yahoo_dir_2_1_val = $("#value_yahoo_dir_2_1").val();
	id_value_yahoo_dir_3_1_val = $("#value_yahoo_dir_3_1").val();
	id_value_yahoo_dir_4_1_val = $("#value_yahoo_dir_4_1").val();
	id_value_yahoo_dir_5_1_val = $("#value_yahoo_dir_5_1").val();
	id_value_yahoo_dir_6_1_val = $("#value_yahoo_dir_6_1").val();
	id_value_yahoo_dir_7_1_val = $("#value_yahoo_dir_7_1").val();
	id_value_yahoo_dir_8_1_val = $("#value_yahoo_dir_8_1").val();


<?
$teigi_sql_9 = mysql_query('SET NAMES utf8');
$teigi_sql_9 = mysql_query("SELECT dir_1_name , dir_2_name , dir_3_name , dir_4_name , dir_5_name , dir_6_name , dir_7_name , dir_8_name , dir_9_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM mst_yahoo_teigi_9 ORDER BY dir_9_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_9 = mysql_fetch_assoc($teigi_sql_9)) {
	if(($dir_teigi_res_9["name_1"] != "" ) &&($dir_teigi_res_9["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}

		//優先用のかっこ開始
		$teigi .= "(";

		if($dir_teigi_res_9["name_1"] == "seach_j"){
			$teigi .= "(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_9["value_1"]."\")";
		}else{
			$teigi .= "($(\"#value_".$dir_teigi_res_9["name_1"]."_1\").val() == ".$dir_teigi_res_9["value_1"]." )";
		}

		//2個目の定義　あれば追加
		if(($dir_teigi_res_9["conjunction_2"] != "" ) && ($dir_teigi_res_9["name_2"] != "" ) && ($dir_teigi_res_9["value_2"] != "" )){
			if($dir_teigi_res_9["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_9["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			if($dir_teigi_res_9["name_2"] == "seach_j"){
				$teigi .= $conjunction_2."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_9["value_2"]."\")";
			}else{
				$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_9["name_2"]."_1\").val() == ".$dir_teigi_res_9["value_2"]." )";
			}
		}

		//優先用のかっこ閉じ
		$teigi .= ")";

		//3個目の定義　あれば追加
		if(($dir_teigi_res_9["conjunction_3"] != "" ) && ($dir_teigi_res_9["name_3"] != "" ) && ($dir_teigi_res_9["value_3"] != "" )){
			if($dir_teigi_res_9["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res_9["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}
			if($dir_teigi_res_9["name_3"] == "seach_j"){
				$teigi .= $conjunction_3."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_9["value_3"]."\")";
			}else{
				$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res_9["name_3"]."_1\").val() == ".$dir_teigi_res_9["value_3"]." )";
			}
		}

		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_9["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_9["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_9["dir_3_name"]."\") ";
		if($dir_teigi_res_9["brand_junle"] != ""){
			$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_9["brand_junle"]."\") ";
		}
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_9_1.val(\"".$dir_teigi_res_9["dir_9_name"]."\");";
		$teigi .= "id_value_yahoo_dir_9_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}elseif($dir_teigi_res_9["brand_junle"] != ""){
		$teigi .= "if(";
		$teigi .= " (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_9["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_9["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_9["dir_3_name"]."\") ";
		$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_9["brand_junle"]."\") ";
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_9_1.val(\"".$dir_teigi_res_9["dir_9_name"]."\");";
		$teigi .= "id_value_yahoo_dir_9_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第九階層
}//end yahoo_dir_auto_9






$("#yahoo_auto_10").click(function(){
	yahoo_dir_auto_10();
})
function yahoo_dir_auto_10(){
//第四階層
	id_value_yahoo_dir_1_1_val = $("#value_yahoo_dir_1_1").val();
	id_value_yahoo_dir_2_1_val = $("#value_yahoo_dir_2_1").val();
	id_value_yahoo_dir_3_1_val = $("#value_yahoo_dir_3_1").val();
	id_value_yahoo_dir_4_1_val = $("#value_yahoo_dir_4_1").val();
	id_value_yahoo_dir_5_1_val = $("#value_yahoo_dir_5_1").val();
	id_value_yahoo_dir_6_1_val = $("#value_yahoo_dir_6_1").val();
	id_value_yahoo_dir_7_1_val = $("#value_yahoo_dir_7_1").val();
	id_value_yahoo_dir_8_1_val = $("#value_yahoo_dir_8_1").val();
	id_value_yahoo_dir_9_1_val = $("#value_yahoo_dir_9_1").val();


<?
$teigi_sql_10 = mysql_query('SET NAMES utf8');
$teigi_sql_10 = mysql_query("SELECT dir_1_name , dir_2_name , dir_3_name , dir_4_name , dir_5_name , dir_6_name , dir_7_name , dir_8_name , dir_9_name , dir_10_name , name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM mst_yahoo_teigi_10 ORDER BY dir_10_id");
//定義の合計数
$teigi_sum = 0;
$teigi = "";
while ($dir_teigi_res_10 = mysql_fetch_assoc($teigi_sql_10)) {
	if(($dir_teigi_res_10["name_1"] != "" ) &&($dir_teigi_res_10["value_1"] != "" )){
		//1個目の定義があれば、if文作成
		if($teigi_sum != 0){
			$teigi .= "else if((";
		}else{
			$teigi .= "if((";
		}

		//優先用のかっこ開始
		$teigi .= "(";

		if($dir_teigi_res_10["name_1"] == "seach_j"){
			$teigi .= "(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_10["value_1"]."\")";
		}else{
			$teigi .= "($(\"#value_".$dir_teigi_res_10["name_1"]."_1\").val() == ".$dir_teigi_res_10["value_1"]." )";
		}

		//2個目の定義　あれば追加
		if(($dir_teigi_res_10["conjunction_2"] != "" ) && ($dir_teigi_res_10["name_2"] != "" ) && ($dir_teigi_res_10["value_2"] != "" )){
			if($dir_teigi_res_10["conjunction_2"] == "AND"){
				$conjunction_2 = " && ";
			}elseif($dir_teigi_res_10["conjunction_2"] == "OR"){
				$conjunction_2 = " || ";
			}
			if($dir_teigi_res_10["name_2"] == "seach_j"){
				$teigi .= $conjunction_2."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_10["value_2"]."\")";
			}else{
				$teigi .= $conjunction_2."($(\"#value_".$dir_teigi_res_10["name_2"]."_1\").val() == ".$dir_teigi_res_10["value_2"]." )";
			}
		}

		//優先用のかっこ閉じ
		$teigi .= ")";

		//3個目の定義　あれば追加
		if(($dir_teigi_res_10["conjunction_3"] != "" ) && ($dir_teigi_res_10["name_3"] != "" ) && ($dir_teigi_res_10["value_3"] != "" )){
			if($dir_teigi_res_10["conjunction_3"] == "AND"){
				$conjunction_3 = " && ";
			}elseif($dir_teigi_res_10["conjunction_3"] == "OR"){
				$conjunction_3 = " || ";
			}
			if($dir_teigi_res_10["name_3"] == "seach_j"){
				$teigi .= $conjunction_3."(id_brand_kashira_for_yahoo_val == \"".$dir_teigi_res_10["value_3"]."\")";
			}else{
				$teigi .= $conjunction_3."($(\"#value_".$dir_teigi_res_10["name_3"]."_1\").val() == ".$dir_teigi_res_10["value_3"]." )";
			}
		}

		//定義の中の動作
		$teigi .= ") && (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_10["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_10["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_10["dir_3_name"]."\") ";
		if($dir_teigi_res_10["brand_junle"] != ""){
			$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_10["brand_junle"]."\") ";
		}
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_10_1.val(\"".$dir_teigi_res_10["dir_10_name"]."\");";
		$teigi .= "id_value_yahoo_dir_10_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}elseif($dir_teigi_res_10["brand_junle"] != ""){
		$teigi .= "if(";
		$teigi .= " (id_value_yahoo_dir_1_1_val == \"".$dir_teigi_res_10["dir_1_name"]."\") && (id_value_yahoo_dir_2_1_val == \"".$dir_teigi_res_10["dir_2_name"]."\") && (id_value_yahoo_dir_3_1_val == \"".$dir_teigi_res_10["dir_3_name"]."\") ";
		$teigi .= " && (id_value_yahoo_product_num_1_val == \"".$dir_teigi_res_10["brand_junle"]."\") ";
		$teigi .= "){";
		$teigi .= "id_value_yahoo_dir_10_1.val(\"".$dir_teigi_res_10["dir_10_name"]."\");";
		$teigi .= "id_value_yahoo_dir_10_1.change();";
		$teigi .= "}";
		$teigi_sum++;
	}
?>
<?
}//end while
// echo "console.log('nishitani');";
// echo 'console.log(\''.$teigi.'\');';
echo $teigi;
?>

//END 第十階層

console.log("change id start!");
$("#yahoo_id_res_btn").click();

}//end yahoo_dir_auto_10

id_value_yahoo_dir_10_1.change(function(){
	console.log("change id start!");
	$("#yahoo_id_res_btn").click();
})





























































//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★★★★★タグID選択
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
// var tag_sel_area = '<div id="tag_sel_area"><input id="tag_sel_btn" type="button" value="タグＩＤリストボックス抽出\n時間かかります。"><div id="tag_sel" ></div></div>';
// $("#edit1_yahoo_tag_result_0").prepend(tag_sel_area);
// $("#tag_sel_btn").click(function(){
// 	var dir_id_res_num = $("#value_yahoo_dir_result_1").val();
// 	var brand_junle_name = $("#display_value_yahoo_junle_1").val();
// 	var color = $("#value_yahoo_color_1").val();
// 	var this_seq = $("#readonly_value_product_id_1").text();
// 	brand_junle_name = brand_junle_name.replace(/\s+/g, "");
// 	if(dir_id_res_num != ""){
// 		// alert("ロードします");

//             $.ajax({
//                 url: '/include/yahoo_tag/tag_res.php',
//                 type:'POST',
//                 dataType: 'json',
//                 data : {
//                 	"dir_id_res_num" : dir_id_res_num ,
//                 	"brand" : brand_junle_name ,
//                 	"color" : color ,
//                 	"this_seq" : this_seq
//                 },
//                 // timeout:10000,
//                 success: function(data) {
//                 	$("#tag_sel").html(data);
// 					$(".tag_title").click(function(){
// 						$(this).next(".tag_select_box").toggleClass('active_tag');
// 					})

// 					$("#value_yahoo_tag_result_1").focus(function(){
// 						var sel_res = "";
// 						$("#tag_sel").find(".tag_select_box").each(function(index){
// 							var val = $(this).val();
// 							if(val != null){
// 								sel_res = sel_res+"/"+val;
// 							}
// 						});

// 						// 文字列の先頭1文字を取得する
// 						var result = sel_res.substr( 0, 1 ) ;
// 						if(result == "/"){
// 							sel_res = sel_res.substr(1);
// 						}

// 						// console.log(sel_res);
// 						$(this).val(sel_res);
// 					})
// 					alert("タグID一覧、ロード完了しました。");
// 				//end success

//                 },
//                 error: function(XMLHttpRequest, textStatus, errorThrown) {
//                              alert("ロードに失敗しました。");
//                        }
//               });
// 		// $("#tag_sel").load("/include/yahoo_tag/tag_res.php?dir_id_res_num="+dir_id_res_num+"&brand="+brand_junle_name);
// 	}else{
// 		alert("ディレクトリIDが完成してません。");
// 	}
// })




</script>
