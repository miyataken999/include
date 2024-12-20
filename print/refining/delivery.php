<?
// ini_set("display_errors",1);
// phpinfo();
//ログイン認証
if(($_SERVER["REMOTE_ADDR"] == '35.189.145.255') && ($_GET["rifa_load"] == "on")){

	$uid = $_GET["uid"];

	$ecc_id = $_GET["ecc_id"];


	$title = "お品物ご納品の連絡";
	$message = "
	お世話になっております。リファスタと申します。<br>
	この度は【金地金精錬分割加工サービス配送タイプ】のご利用、<br>
	誠にありがとうございます。<br>
	表題の件につきまして、お預かり致しましたお品物の加工が<br>完了致しましたので、ご納品させていただきます。<br>
	何卒、よろしくお願い申し上げます。<br>
	";

	include "./temp.html";

}else{
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

	$ecc_id = $_GET["ecc_id"];

	//API URL
	$url="https://rifa.life/lounge_API/wkhtml/wkhtml.php";
	//キャプチャ取得のURL
	$get_url = "https://rifa.life/include/print/refining/delivery.php?ecc_id={$ecc_id}&uid={$uid}&rifa_load=on";
	//アップロード時のファイル名
    $upload_file_name = date("Y-m-d_His").".pdf";
    //タイムラインに追加するフラグ
    $timeline_data = array(
    		"category" => 10,
    		"ecc_id" => $ecc_id,
    		"title" => "お品物ご納品の連絡",
    		"detail" => "",
    		"create_by" => $uid,
    	);

    // POSTデータ
    $data = array(
        "get_url" => $get_url,
        "upload_file_name" => $upload_file_name,
        "timeline_data" => $timeline_data,
        "content_name" => 'refining_printed_matter',
        "tokentoken" => 'djfkal;jfjkdaslfj;sdljvslf;dkjvfsdlk;jfo;sirfjer;wodfja;lkfjer;eoiwjfa;dosjv;odlfjair;oerwjfn;lksdnvlkscnv;lzcxknvo;ifsnh;igfsnjfg;iasdjhfoi;weahgo;rihjgo;ihejrg;osfadj;lasdjfgaoi'
    );
    $data = http_build_query($data, "", "&");

    // header
    $header = array(
        "Content-Type: application/x-www-form-urlencoded",
        "Content-Length: ".strlen($data)
    );

    $context = array(
        "http" => array(
            "method"  => "POST",
            "header"  => implode("\r\n", $header),
            "content" => $data
        )
    );

	try {
    $res = file_get_contents($url, false, stream_context_create($context));
	} catch (Exception $e) {
		echo $e->getMessage();
		exit();
	}


	//PDFだったらheaderをpdfにする
	//違う場合、そのまま表示
	// if($http_response_header[6] == 'Content-Type: application/pdf'){
		header('Content-type: application/pdf');
		header('Content-Disposition: filename="'.$upload_file_name.'"');
	// }
	echo $res;



}
