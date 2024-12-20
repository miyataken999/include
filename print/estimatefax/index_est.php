<?
// ini_set("display_errors",1);
// phpinfo();
//ログイン認証
if($_SERVER["REMOTE_ADDR"] == '35.189.145.255'){
// if(1 == 1){

	$uid = $_GET["uid"];

	$ecc_id = $_GET["ecc_id"];

    //pdoのクラス
    include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

    // $kinsa_pdo = new pdo_connect;
    // $query = "SELECT * FROM shouhin WHERE ecc_id={$ecc_id} AND `status`=126 AND kinsa_flag=1 order by product_id";
    // $kinsa_result = $kinsa_pdo->select_many($query);


    // $satei_pdo = new pdo_connect;
    // $query = "SELECT * FROM shouhin WHERE `status`=32 AND ecc_id={$ecc_id}";
    // $satei_result = $satei_pdo->select_many($query);



    include "./temp_estimate.html";

}

