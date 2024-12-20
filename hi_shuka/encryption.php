<?php
/**
 * 暗号化・複合化。
 */
class Encryption
{
	/**
	 * 暗号化
	 */
	function DataEncryption($Data, $key)
	{
		$data = array();
		$data["field2"] = true;
		$data["field3"] = 1;
		$data["field1"] = "foobar";
		$data["field4"] = array("foobar", true, 1);
		$data["field5"] = array("foo" => "bar");

		$key = "Ae7w8WoSUWCzD0HDoYvokRTuwoIgoSy8RIskzU34YbsYP";
		$data = json_encode($data);

        // 暗号化するデータ
        $base64_data = base64_encode($data);

        // 事前処理
        $resource = mcrypt_module_open(MCRYPT_RIJNDAEL_256, '', MCRYPT_MODE_CBC, '');

        // key設定
        $ks = mcrypt_enc_get_key_size($resource);
        //$key = substr(md5($key), 0, $ks);

        // 初期化ベクトル
        $ivsize = mcrypt_enc_get_iv_size($resource);
        $iv = substr(md5($key), 0, $ivsize);
        $iv = substr($key, 0, $ivsize);

        // 暗号化処理
        mcrypt_generic_init($resource, $key, $iv);
        $encrypted_data = mcrypt_generic($resource, $base64_data);
        mcrypt_generic_deinit($resource);

        // モジュールを閉じる
        mcrypt_module_close($resource);

        // 暗号化データ
        return base64_encode($encrypted_data);
	}

	function DataDecryption($data, $key)
	{
		// 復号化するデータ
		$encrypted_data = base64_decode($data);

		// 事前処理
		$resource = mcrypt_module_open(MCRYPT_RIJNDAEL_256, '',  MCRYPT_MODE_CBC, '');

		// key設定
		$ks = mcrypt_enc_get_key_size($resource);
		$key = substr(md5($key), 0, $ks);

		// 初期化ベクトル
		$ivsize = mcrypt_enc_get_iv_size($resource);
		$iv = substr(md5($key), 0, $ivsize);

		// 復号処理
		mcrypt_generic_init($resource, $key, $iv);
		$base64_decrypted_data = mdecrypt_generic($resource, $encrypted_data);
		mcrypt_generic_deinit($resource);

		// モジュールを閉じる
		mcrypt_module_close($resource);

		// 複合化データ
		return base64_decode($base64_decrypted_data);
	}
}
?>
