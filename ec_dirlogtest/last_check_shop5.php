<script type="text/javascript">
	var raku_dir_id = $("#result_id").text();
	var yahoo_dir_id = $("#yahoo_result_id").text();
	var confirm_text = "";
	var seq = $("#seq_td").text();
	var rakutag_res = $("#rakutag_res").text();
console.log(user_id);

	if((raku_dir_id != "") && (yahoo_dir_id != "")){
		confirm_text = "SEQ\n"+seq+"\n楽天ディレクトリID\n"+raku_dir_id+"\nヤフオクカテゴリID\n"+yahoo_dir_id+"\n\nでよろしいですか？";

		if(window.confirm(confirm_text)){
			$("#last_process_area").load("/include/ec_dirlogtest/last_process_shop5.php?raku_dir_id="+raku_dir_id+"&yahoo_dir_id="+yahoo_dir_id+"&seq="+seq+"&user_id="+user_id+"&rakutag_res="+rakutag_res , function(){
				//採寸画面へ自動で戻る
				location.href = "/shop5/saisun_list.php";
			});
		}else{
			alert("キャンセルしました。");
		}
	}else{
		if(raku_dir_id == ""){
			alert("楽天ディレクトリIDが入ってません。");
		}
		if(yahoo_dir_id == ""){
			alert("ヤフオクカテゴリIDが入ってません。");
		}
	}

	$(".ec_area").find("select").change(function(){
		$("#last_check_area").html("");
	})



</script>
