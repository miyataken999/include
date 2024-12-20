<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];

if(isset($_GET["test"])){
	include "test.php";
}else{
	if(stristr($current_page_pass, "/shop5/")){
		include "honban.php";
	}else{
		include "test.php";
	}
}

?>
