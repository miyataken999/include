<?php
/*

Description
Occurs before the record is displayed. You can alter the displayed field values here.

Parameters
$values     - array of values to be displayed on the page.
              To access specific field value use $values["FieldName"]
$pageObject - an object of Page class representing the current page

*/


// process_record

if($values["hash_tag"] == ''){
    $chat_id = $values["chat_id"];
	$text = '';
    if($chat_id != ''){
        $sql = "SELECT msg from zendesk_chats where chat_id = {$chat_id} order by id ";
        $rs = CustomQuery($sql);


        while ($data = db_fetch_array($rs)) {
            if($data["msg"] != 'NULL'){
                if(strstr($data["msg"],'最後に今回のやり取りをサイト上に掲載しても宜しいでしょうか。')){
                    break;
                }elseif(strstr($data["msg"],'このチャットでのやり取りをさせて頂きます【サポート：')){
                    $text .= "■■";
                    continue;
                }elseif(strstr($data["msg"],'何かお困りの事はありますでしょうか？')){
                    $text .= "■■";
                    continue;
                }elseif(strstr($data["msg"],'ご入力ありがとうございます。担当スタッフより迅速に対応させて頂きます。チャット画面を開いたままお待ちください。')){
                    $text .= "■■";
                    continue;
                }
                $text .= $data["msg"];
            }
        }





    	$tokentoken = 'djfkal;jfjkdaslfj;sdljvslf;dkjvfsdlk;jfo;sirfjer;wodfja;lkfjer;eoiwjfa;dosjv;odlfjair;oerwjfn;lksdnvlkscnv;lzcxknvo;ifsnh;igfsnjfg;iasdjhfoi;weahgo;rihjgo;ihejrg;osfadj;lasdjfgaoi';
        $url = 'http://rifa.life/lounge_API/google_language.php';
        $data = array(
            "tokentoken" => $tokentoken,
            "text" => $text,
        );
        $data = http_build_query($data, "", "&");
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
        $html = file_get_contents($url, false, stream_context_create($context));


        $values["hash_tag"] = $html;
    }
}
