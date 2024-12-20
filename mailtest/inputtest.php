<?
include_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>メール送信画面</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;
?>


<?

if($ecc_id == ''){
?>
	<h2>顧客SEQが入っていません。</h2>
	<form action="./input.php" method="get" accept-charset="utf-8">
		顧客SEQ<input type="text" name="ecc_id" value="" id="ecc_id_text">
		<input type="submit" name="" value="更新">
	</form>
	<script type="text/javascript">
		$("#ecc_id_text").focus();
	</script>
<?
	exit();
}else{
?>





	<form action="./action/send.php" method="post" accept-charset="utf-8" class="container" id="send_form">
		<input type="hidden" name="ecc_id" value="<?=$ecc_id?>">
		<input type="hidden" name="tmp_id" value="<?=$tmp_id?>">



		<div class="form-row form-group">
			<div class="col-1">
				<label class="control-label" for="tmp_categoryInput">大カテ</label>
			</div>
			<div class="col-3">
				<?
				$array = $tmp_category_result; // リスト用Array
				$itemName = "tmp_category"; // name,id用
				$key = "id"; // 保存値
				$val = $category_id; // 選択値
				$displayNameKey = "name"; // 表示値
				echo createSelectHtml($array, $itemName, $key, $val, $displayNameKey);
				?>
			</div>
			<div class="col-1">
				<label class="control-label" for="tmp_sub_categoryInput">中カテ</label>
			</div>
			<div class="col-4">
				<?
				$array = $tmp_sub_category_result; // リスト用Array
				$itemName = "tmp_sub_category"; // name,id用
				$key = "id"; // 保存値
				$val = $sub_category_id; // 選択値
				$displayNameKey = "name"; // 表示値
				$option_data_key = "category_id";
				echo createSelectHtml($array, $itemName, $key, $val, $displayNameKey, $option_data_key);
				?>
			</div>
		</div>
		<div class="form-row form-group">
			<div class="col-1">
				<label class="control-label" for="templateInput">テンプレート</label>
			</div>
			<div class="col-8">
				<?
				$array = $tmp_result; // リスト用Array
				$itemName = "template"; // name,id用
				$key = "id"; // 保存値
				$val = $tmp_id; // 選択値
				$displayNameKey = "title"; // 表示値
				$option_data_key = "sub_category_id";
				echo createSelectHtml($array, $itemName, $key, $val, $displayNameKey, $option_data_key);
				?>
			</div>
			<div class="col-2">
				<input type="button" value="読込" class="btn btn-outline-primary" id="reload">
			</div>
		</div>
		<div class="form-row form-group">
			<div class="col">
				<label class="control-label" for="to_addrInput">Toアドレス</label>
				<select name="to_addrInput" class="form-control" id="to_addrInput">
					<option value="<?=$replace_data["Eoc"]["mail1"]?>" <?if($to_addr==$replace_data["Eoc"]["mail1"]){?>selected<?}?> ><?=$replace_data["Eoc"]["mail1"]?></option>
					<option value="<?=$replace_data["Eoc"]["mail2"]?>" <?if($to_addr==$replace_data["Eoc"]["mail2"]){?>selected<?}?> ><?=$replace_data["Eoc"]["mail2"]?></option>
				</select>
			</div>
			<div class="col">
				<label class="control-label" for="from_addrInput">Fromアドレス</label>
				<input type="text" class="form-control" id="from_addrInput" name="from_addrInput" value="<?=$from_addr?>" readonly>
			</div>
		</div>
		<div class="form-row form-group">
			<label class="control-label" for="displayNameInput">表示名</label>
			<input type="text" class="form-control" id="displayNameInput" name="displayNameInput" value="<?=$displayName?>">
		</div>
		<div class="form-row form-group">
			<label class="control-label" for="subject_pcInput">件名</label>
			<input type="text" class="form-control" id="subject_pcInput" name="subject_pcInput" value="<?=$subject_pc?>">
		</div>
		<div class="form-row form-group">
			<label class="control-label" for="str_headerInput">本文 ヘッダー</label>
			<textarea type="text" class="form-control" id="str_headerInput" name="str_headerInput" ><?=$str_header?></textarea>
		</div>

<?
//査定送信の場合のみ
if($category_id == 5){
?>
<div id="category_table">
	<div class="form-row form-group">
		<div class="col-12">
			<label>カテゴリー別計算</label>
		</div>
	</div>
	<div class="form-row form-group">
		<div class="col-2 col-k">
			<label>K</label>
			<span><?=number_format($sumprice["K"])?>円</span>
		</div>
		<div class="col-2 col-d">
			<label>D</label>
			<span><?=number_format($sumprice["D"])?>円</span>
		</div>
		<div class="col-2 col-j">
			<label>J</label>
			<span><?=number_format($sumprice["J"])?>円</span>
		</div>
		<div class="col-2 col-w">
			<label>W</label>
			<span><?=number_format($sumprice["W"])?>円</span>
		</div>
		<div class="col-2 col-b">
			<label>B</label>
			<span><?=number_format($sumprice["B"])?>円</span>
		</div>
		<div class="col-2 col-h">
			<label>H</label>
			<span><?=number_format($sumprice["H"])?>円</span>
		</div>
	</div>
</div>
<?
}//end if
?>

		<div class="form-row form-group">
			<label class="control-label" for="str_pcInput">本文１</label>
			<textarea type="text" class="form-control" id="str_pcInput" name="str_pcInput" ><?=$str_pc?></textarea>
		</div>
		<div class="form-row form-group">
			<label class="control-label" for="str2_pcInput">本文２</label>
			<textarea type="text" class="form-control" id="str2_pcInput" name="str2_pcInput" ><?=$str2_pc?></textarea>
		</div>
		<div class="form-row form-group">
			<label class="control-label" for="str3_pcInput">署名</label>
			<textarea type="text" class="form-control" id="shomeiInput" name="shomeiInput" ><?=$shomei?></textarea>
		</div>

		<div class="form-row form-group">
			<button type="button" class="control-label btn btn-outline-primary btn-block" role="button" id="sousin_pcInput" >送信</button>
		</div>
	</form>

<?
} //end else (通常form)
?>





<style type="text/css">
/*

対応デバイス	画面サイズ	prefixの指定方法（*は数値）	prefixの意味
デスクトップ	1200px以上	col-lg-*	Large
デスクトップ	992px以上、1200px未満	col-md-*	Medium
タブレット	768px以上、992px未満	col-sm-*	Small
モバイル	768px以下	col-xs-*	Xtra Small

*/

	#tmp_sub_categoryInput .disabled , #templateInput .disabled{
		display: none;
	}
	.control-label{
		font-size: 12px;
	}
	.form-control{
		font-size: 12px;
	}
	textarea.form-control{
		/*max-height: 400px;*/
	}
	#sousin_pcInput{
		margin-bottom: 100px;
	}


	#category_table{
		border-bottom: 1px solid #ccc;
	    margin-bottom: 15px;
	}
	#category_table .col-12 label{
		background-color: #111;
		color: #fff;
	}
	#category_table label, #category_table span{
		padding: 5px;
		border-top: 1px solid #ccc;
		border-right: 1px solid #ccc;
		border-left: 1px solid #ccc;
		margin: 0;
		display: block;
	}
	#category_table .form-row>div {
	    padding: 0;
	}
	#category_table .form-row {
	    margin: 0;
	}
#category_table .col-k label{
	background-color: #f90;
}
#category_table .col-d label{
	background-color: #0ff;
}
#category_table .col-j label{
	background-color: #0f0;
}
#category_table .col-w label{
	background-color: #ccc;
}
#category_table .col-b label{
	background-color: #f0f;
}
#category_table .col-h label{
	background-color: #ff0;
}

</style>


<script type="text/javascript">
	$("#tmp_categoryInput").change(function(){
		$("#tmp_sub_categoryInput option").addClass("disabled").removeClass("enabled");
		$("#tmp_sub_categoryInput option[data='"+$(this).val()+"']").removeClass("disabled").addClass("enabled");
		if( $("#tmp_sub_categoryInput").attr("data") != $(this).val() ){
			$("#tmp_sub_categoryInput").val($("#tmp_sub_categoryInput .enabled:first").val());
		}
		$("#tmp_sub_categoryInput").change();
	});
	// $("#tmp_categoryInput").change();

	$("#tmp_sub_categoryInput").change(function(){
		$("#templateInput option").addClass("disabled").removeClass("enabled");
		$("#templateInput option[data='"+$(this).val()+"']").removeClass("disabled").addClass("enabled");
		if( $("#templateInput").attr("data") != $(this).val() ){
			$("#templateInput").val($("#templateInput .enabled:first").val());
		}
	});
	// $("#tmp_sub_categoryInput").change();


	$("#tmp_sub_categoryInput option").addClass("disabled");
	$("#tmp_sub_categoryInput option[data='<?=$category_id?>']").removeClass("disabled");
	$("#templateInput option").addClass("disabled");
	$("#templateInput option[data='<?=$sub_category_id?>']").removeClass("disabled");


	var templateInput_val;
	$("#reload").click(function(){
		templateInput_val = $("#templateInput").val();
		if(templateInput_val == ''){

		}else{
			window.location.href = '/include/mail/input.php?tmp_id='+templateInput_val+'&ecc_id=<?=$ecc_id?>';
		}
	});


	$("#tmp_categoryInput").focus();



	$('textarea').each(function(){
		var lineHeight = parseInt($(this).css('lineHeight'));
		var lines = ($(this).val() + '\n').match(/\n/g).length;
		if(lineHeight * lines > 400){
			$(this).height(300);
		}else{
			$(this).height(lineHeight * lines);
		}
	})


	$("#sousin_pcInput, #reload").focus(function() {
		$(this).addClass('active');
	});
	$("#sousin_pcInput, #reload").focusout(function() {
		$(this).removeClass('active');
	});
	$("#sousin_pcInput").click(function() {
		$("#send_form").submit();
	});

</script>

</body>
</html>
