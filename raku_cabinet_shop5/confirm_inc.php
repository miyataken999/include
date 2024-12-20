	<tr>
		<td>SEQ</td>
		<td>品番</td>
		<td></td>
		<td></td>
		<td></td>
		<td colspan="10">画像１</td>
		<!-- <td>画像２</td>
		<td>画像３</td>
		<td>画像４</td>
		<td>画像５</td>
		<td>画像６</td>
		<td>画像７</td>
		<td>画像８</td>
		<td>画像９</td>
		<td>画像１０</td> -->
	</tr>
<?
	$query = ' SELECT box_id , raku_image_name , zip , box_name , rakuten_cabinet_name FROM box WHERE box_id = '.$box_id;

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);
	$img_pass = $result['raku_image_name'];
	$urlounge_img_pass = $result['zip'];
	$pieces = explode(".", $urlounge_img_pass);
	$urlounge_box_name = $result['box_name'];
	$rakuten_cabinet_name .= "<br>ボックスID".$result['box_id']." ".$result['rakuten_cabinet_name'];

	$query = ' SELECT product_id , status FROM shouhin WHERE `status`=10 AND box_id = '.$box_id;

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {
?>
	<tr id="toprow_<?=$result['product_id']?>">
		<td><?=$result['product_id']?></td>
		<td><?//=$result['yahoo_sinaban']?></td>
		<td>Yタイトル</td>
		<td><?//=$result['yahoo_title']?></td>
		<td>楽天</td>
		<!-- <td colspan="10" style="background-color: #000;"></td> -->
		<td colspan="10"><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_1.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_1.jpg" alt="" width="35px" height="35px" ></a></td>

		<!-- <td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_2.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_2.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_3.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_3.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_4.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_4.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_5.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_5.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_6.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_6.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_7.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_7.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_8.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_8.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_9.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_9.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_10.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_10.jpg" alt="" width="35px" height="35px" ></a></td> -->
	</tr>
	<tr id="underrow_<?=$result['product_id']?>">
		<td>ST<br>
<?
$status_id = $result['status'];
	$status_query = " SELECT goods_status FROM _goods_status2 WHERE goods_id={$status_id} ";

	$status_sql = mysql_query('SET NAMES utf8');
	$status_sql = mysql_query($status_query);
	$status_result = mysql_fetch_assoc($status_sql);
?>
		<?=$status_result['goods_status']?>
		<span class="st_id" data="<?=$status_id?>"></span>
	</td>
<?
//reset
$status_id = "";
?>
		<td>販売額<br><?//=number_format($result['sales_price'])?>円</td>
		<td></td>
		<td></td>
		<td>urlounge</td>

		<td colspan="10"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_1.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_1.jpg" alt="" width="35px" height="35px" ></a></td>
		<!-- <td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_2.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_2.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_3.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_3.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_4.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_4.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_5.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_5.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_6.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_6.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_7.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_7.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_8.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_8.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_9.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_9.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_10.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_10.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td> -->
	</tr>
<?
	}


?>
