<?
exit();


header('Content-Type: text/html; charset=UTF-8');



			$word = "データベース再起動開始します。";
			$word = mb_convert_encoding($word, "UTF-8", "auto");

			//メール送信
			$subject = 'データベース再起動開始します。';
			$mail_body = $word;
			$sendPostData = array("subject" => $subject, "text" => $mail_body);
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
			try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}





// $chk = system("echo 1 > /proc/sys/vm/drop_caches",$a);
// $chk = system("/etc/rc.d/init.d/mysqld restart",$a);
// $chk = system("/etc/rc.d/init.d/httpd restart",$a);


sleep(5);

			include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


			$query = 'DELETE FROM mst_brand2';
			$sql = mysql_query('SET NAMES utf8');
			$sql = mysql_query($query);

			$query = 'INSERT INTO mst_brand2 SELECT name,"",id,"" FROM mst_brand';
			$sql = mysql_query('SET NAMES utf8');
			$sql = mysql_query($query);



			$word = "データベース再起動完了しました。";
			$word = mb_convert_encoding($word, "UTF-8", "auto");

			//メール送信
			$subject = 'データベース再起動完了しました。';
			$mail_body = $word;
			$sendPostData = array("subject" => $subject, "text" => $mail_body);
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
			try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}


?>
データベース再起動しました！
