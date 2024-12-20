<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
            <select name="purchase_type" required="required">
				<option value="">選択して下さい。</option>
				<option value="3" <?if($purchase_type == "3"){?>selected<?}?>>宅kin</option>
				<option value="5" <?if($purchase_type == "5"){?>selected<?}?>>宅bra</option>
				<option value="25" <?if($purchase_type == "25"){?>selected<?}?>>宅dia</option>
			</select>
            <input type="submit" value="aaa">
    </form>
</body>
</html>