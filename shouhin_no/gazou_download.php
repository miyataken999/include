<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
ini_set( 'display_errors', 1 );
/*
    引数はターゲットファイルへの相対又は絶対パス
*/

$path_file = "./tmp/gazou.zip";
download_file($path_file);

function download_file($path_file)
{

    /* ファイルサイズの確認 */
    if (($content_length = filesize($path_file)) == 0) {
        die("Error: File size is 0.(".$path_file.")");
    }

    /* ダウンロード用のHTTPヘッダ送信 */
    header("Content-Disposition: inline; filename=\"".basename($path_file)."\"");
    header("Content-Length: ".$content_length);
    header("Content-Type: application/octet-stream");

    /* ファイルを読んで出力 */
    if (!readfile($path_file)) {
        die("Cannot read the file(".$path_file.")");
    }



}
?>
