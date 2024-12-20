<?php
/**
 * シグネチャクラス。
 */
class Signature
{
	/**
	 * シグネチャ生成
	 */
	function CreateSignature($BaseUrl, $param, $SecretKey)
	{
		$Signature = "";

		$paramString = "";
		if (is_array($param))
		{
			$param = $this->ArraySort($param);
			$paramString = "&" . json_encode($param);
		}
		$paramString = urlencode($BaseUrl . $paramString);
		$Signature = hash_hmac("SHA256", $paramString, $SecretKey);

		return $Signature;
	}

	/**
	 * 配列のソート
	 * @return $array
	 */
	function ArraySort($BeforeSort)
	{

		$AfterSort = array();
		foreach($BeforeSort as $key => $value)
		{
			if(is_array($value))
			{
				$AfterSort[$key] = $this->ArraySort($value);
			}
			else
			{
				$AfterSort[$key] = $value;
			}
		}
		ksort($AfterSort);
		return $AfterSort;

	}
}
?>
