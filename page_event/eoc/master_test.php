<?
$masterkey1 = htmlspecialchars($_GET["masterkey1"]);
?>
<script type="text/javascript">
	$(window).load(function() {
		$link_btn = '';
		$link_btn += '<br>';
		$link_btn += '<div class="sateimeisai_box">';
		$link_btn += '<a class="rnr-button btn btn-default" href="/include/satei/kin_satei/kinprice.php?koSEQ=<?=$masterkey1?>" typeid="ib">金査項目</a>';
		$link_btn += '<a class="rnr-button btn violet" href="/include/satei/kin_satei/allkin_sabutsu_price.php?koSEQ=<?=$masterkey1?>" typeid="ib">金査+査物合算</a>';



		$link_btn += '<br>';
		$link_btn += '<br>';

<?
if(stristr($current_page_pass, "/shop5test/")){
?>
		$link_btn += '<a class="rnr-button btn btn-gold" href="/include/mail/input.php?tmp_id=136&ecc_id=<?=$masterkey1?>" typeid="ib">査定</a>';
		$link_btn += '<a class="rnr-button btn btn-blue" href="/include/mail/input.php?tmp_id=146&ecc_id=<?=$masterkey1?>" typeid="ib">全部なし査定</a>';
		// $link_btn += '<a class="rnr-button btn btn-primary" href="/include/mail/input.php?tmp_id=137&ecc_id=<?=$masterkey1?>" typeid="ib">通常◆服飾◆</a>';
		$link_btn += '<a class="rnr-button btn btn-green-gold" href="/include/mail/input.php?tmp_id=158&ecc_id=<?=$masterkey1?>" typeid="ib">【成約】</a>';
		// $link_btn += '<a class="rnr-button btn btn-blue-gold" href="/include/mail/input.php?tmp_id=159&ecc_id=<?=$masterkey1?>" typeid="ib">【成約：服飾】</a>';


		// $link_btn += '<a class="rnr-button btn btn-violet" href="/include/mail/input.php?tmp_id=160&ecc_id=<?=$masterkey1?>" typeid="ib">【ID：宝飾】</a>';
		// $link_btn += '<a class="rnr-button btn btn-violet" href="/include/mail/input.php?tmp_id=161&ecc_id=<?=$masterkey1?>" typeid="ib">【ID：服飾】</a>';
		$link_btn += '<a class="rnr-button btn btn-red" href="/include/mail/input.php?tmp_id=162&ecc_id=<?=$masterkey1?>" typeid="ib">【合わず】</a>';
		// $link_btn += '<a class="rnr-button btn btn-red" href="/include/mail/input.php?tmp_id=163&ecc_id=<?=$masterkey1?>" typeid="ib">【合わず：服飾】</a>';

		$link_btn += '<a class="rnr-button btn btn-seiyaku" href="/include/satei/kaibi/?ecc_id=<?=$masterkey1?>" typeid="ib">【成約：買い備】</a>';
		$link_btn += '<a class="rnr-button btn btn-taiki" href="/include//mail/input.php?tmp_id=160&ecc_id=<?=$masterkey1?>" typeid="ib"> ID到着後<br>送金待機 </a>'
<?
}else{
?>
		$link_btn += '<a class="rnr-button btn btn-gold" href="/include/mail/input.php?tmp_id=136&ecc_id=<?=$masterkey1?>" typeid="ib">査定</a>';
		$link_btn += '<a class="rnr-button btn btn-blue" href="/include/mail/input.php?tmp_id=146&ecc_id=<?=$masterkey1?>" typeid="ib">全部なし査定</a>';
		// $link_btn += '<a class="rnr-button btn btn-primary" href="/include/mail/input.php?tmp_id=137&ecc_id=<?=$masterkey1?>" typeid="ib">通常◆服飾◆</a>';
		$link_btn += '<a class="rnr-button btn btn-green-gold" href="/include/mail/input.php?tmp_id=158&ecc_id=<?=$masterkey1?>" typeid="ib">【成約】</a>';
		// $link_btn += '<a class="rnr-button btn btn-blue-gold" href="/include/mail/input.php?tmp_id=159&ecc_id=<?=$masterkey1?>" typeid="ib">【成約：服飾】</a>';


		// $link_btn += '<a class="rnr-button btn btn-violet" href="/include/mail/input.php?tmp_id=160&ecc_id=<?=$masterkey1?>" typeid="ib">【ID：宝飾】</a>';
		// $link_btn += '<a class="rnr-button btn btn-violet" href="/include/mail/input.php?tmp_id=161&ecc_id=<?=$masterkey1?>" typeid="ib">【ID：服飾】</a>';
		$link_btn += '<a class="rnr-button btn btn-red" href="/include/mail/input.php?tmp_id=162&ecc_id=<?=$masterkey1?>" typeid="ib">【合わず】</a>';
		// $link_btn += '<a class="rnr-button btn btn-red" href="/include/mail/input.php?tmp_id=163&ecc_id=<?=$masterkey1?>" typeid="ib">【合わず：服飾】</a>';

		$link_btn += '<a class="rnr-button btn btn-seiyaku" href="/include/satei/kaibi/?ecc_id=<?=$masterkey1?>" typeid="ib">【成約：買い備】</a>';
		$link_btn += '<a class="rnr-button btn btn-taiki" href="/include//mail/input.php?tmp_id=160&ecc_id=<?=$masterkey1?>" typeid="ib"> ID到着後<br>送金待機 </a>'
<?
}
?>


		$link_btn += '</div>';

		$(".rnr-hfiller").append($link_btn);
	});
</script>
<style>
	.bs-gridcell.rnr-field-number[data-field="meisai_number"] span {
	    width: 20px!important;
	}


.test_btn {
    background-color: #f00;
    color: #fff;
    width: 50%;
    padding: 5px;
}

.sateimeisai_box .btn.btn-default{
    background-image: -webkit-linear-gradient(#fff, #fff 60%, #f5f5f5);
    background-image: -o-linear-gradient(#fff, #fff 60%, #f5f5f5);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), color-stop(60%, #fff), to(#f5f5f5));
    background-image: linear-gradient(#fff, #fff 60%, #f5f5f5);
    background-repeat: no-repeat;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff5f5f5', GradientType=0);
    -webkit-filter: none;
    filter: none;
    border-bottom: 1px solid #e6e6e6;
    border-color: #e6e6e6;
}
.sateimeisai_box .btn.violet{
    background: linear-gradient(#f7badc, #d12dec);
    color: #fff;
    width: 300px;
}
.sateimeisai_box{
	margin-top: 15px;
}


.rnr-rowcontainer .rnr-button:nth-child(4).btn-primary {
    background-image: -webkit-linear-gradient(#54b4eb, #2fa4e7 60%, #1d9ce5);
    background-image: -o-linear-gradient(#54b4eb, #2fa4e7 60%, #1d9ce5);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#54b4eb), color-stop(60%, #2fa4e7), to(#1d9ce5));
    background-image: linear-gradient(#54b4eb, #2fa4e7 60%, #1d9ce5);
    background-repeat: no-repeat;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff54b4eb', endColorstr='#ff1d9ce5', GradientType=0);
    -webkit-filter: none;
    filter: none;
    border-bottom: 1px solid #178acc;
}

	.alert_origin .alert-danger {
		text-align: left;
	    color: #721c24;
	    background-color: #f00;
	    border-color: #a00;
	    color: #fff;
	    margin: 5px;
	}
	.alert_origin .alert_details table {
	    min-width: 50%;
	    margin: 10px;
	}



	.btn-gold {
	    background-image: linear-gradient(#ffd98e, #f90 60%, #e4d091);
	    border-color: #f90;
	    color: #fff;
	}
	.btn-blue {
		background-image: linear-gradient(#84b7d0, #002bff 60%, #84b7d0);
		border-color: #004eff;
		color: #fff;
	}

	.btn-green-gold {
	    background-image: linear-gradient(#0f0, #080 50%, #f90 95%, #e4d091);
	    border-color: #f90;
	    color: #fff;
	}
	.btn-blue-gold {
	    background-image: linear-gradient(#004eff, #008 50%, #f90 95%, #e4d091);
	    border-color: #f90;
	    color: #fff;
	}
	.btn-violet {
	    background: linear-gradient(#f7badc, #d12dec);
	    color: #fff;
	    border-color: #d12dec;
	}
	.btn-red {
	    background: linear-gradient(#f00, #700);
	    color: #fff;
	    border-color: #700;
	}
.btn-seiyaku {
    background: #ff0;
    color: #111!important;
    border: 5px solid #111;
    padding: 20px;
    font-size: 26px;
}
.btn-taiki {
	background: #eee;
	color: #111!important;
	border: 2px solid #111;
	font-size: 15px;
}
</style>
<style type="text/css">
	select#kinsyou_auto_list {
	    /*position: fixed;*/
	    bottom: 0;
	    right: 0;
	    z-index: 10000000;
	}
</style>
<select id="kinsyou_auto_list">
<?php
$sql = "SELECT val,reference_id FROM mst_gold_property ";
$rs = CustomQuery($sql);

while($data = db_fetch_array($rs)){
	$reference_id = $data["reference_id"];
	if($reference_id == ''){
		continue;
	}
	$price_sql = "SELECT id,category,item,price FROM tb_gold_property_price where id={$reference_id}";
	$price_rs = CustomQuery($price_sql);
	$price_data = db_fetch_array($price_rs);

?>
	<option value="<?=floor($price_data['price'])?>" data="<?=$data['val']?>" ><?=number_format(floor($price_data['price']))?> ： <?=$data['val']?></option>
<?php
}
?>
</select>
