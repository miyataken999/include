































































































































































































































	

Runner.pages.PageSettings.addPageEvent('gold_check_item', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	

// Place event code here.
// Use "Add Action" button to add code snippets.

$("select[id*=value_name_]").change(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$name_val = $("#value_name_"+$this_id_num).val();
	$date_selctor_input = $("#date_selctor_input").val();

	$tanka_data = $date_selctor_input+':'+$name_val;
	console.log($tanka_data);

	$kinsyou_tanka = parseInt($("#jigane_table tr[data='"+$tanka_data+"'] .price").attr("data"));
	console.log($kinsyou_tanka);
	$netjapan_flag = document.getElementById("net_japan_flag").innerHTML;
	if(($netjapan_flag == "on") && (($this_id_num == 4) || ($this_id_num == 19) || ($this_id_num == 29))){
		$kinsyou_tanka += 1;
	}
	// if($("#value_unit_"+$this_id_num).val() == ''){
		$("#value_unit_"+$this_id_num).val($kinsyou_tanka);
	// }
})

$("input[id*=value_gram_2_]").keyup(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$kinsyou_tanka = parseInt($("#value_unit_"+$this_id_num).val());
	$netjapan_flag = document.getElementById("net_japan_flag").innerHTML;
	if(($netjapan_flag == "on") && (($this_id_num == 4) || ($this_id_num == 19) || ($this_id_num == 29))){
		$kinsyou_tanka += 1;
	}
	if($kinsyou_tanka != ''){
		$gram = $("#value_gram_2_"+$this_id_num).val();
		if($gram != ''){
			$("#value_price_"+$this_id_num).val(Math.floor($gram * $kinsyou_tanka));
		}
	}
});

$("input[id*=value_unit_]").keyup(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$kinsyou_tanka = parseInt($("#value_unit_"+$this_id_num).val());
	$netjapan_flag = document.getElementById("net_japan_flag").innerHTML;
	if(($netjapan_flag == "on") && (($this_id_num == 4) || ($this_id_num == 19) || ($this_id_num == 29))){
		$kinsyou_tanka += 1;
	}
	if($kinsyou_tanka != ''){
		$gram = $("#value_gram_2_"+$this_id_num).val();
		if($gram != ''){
			$("#value_price_"+$this_id_num).val(Math.floor($gram * $kinsyou_tanka));
		}
	}
});;
});
	

Runner.pages.PageSettings.addPageEvent('gold_check_item', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	

// Place event code here.
// Use "Add Action" button to add code snippets.

$("select[id*=value_name_]").change(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$name_val = $("#value_name_"+$this_id_num).val();
	$date_selctor_input = $("#date_selctor_input").val();

	$tanka_data = $date_selctor_input+':'+$name_val;
	console.log($tanka_data);

	$kinsyou_tanka = parseInt($("#jigane_table tr[data='"+$tanka_data+"'] .price").attr("data"));
	console.log($kinsyou_tanka);
	$netjapan_flag = document.getElementById("net_japan_flag").innerHTML;
	if(($netjapan_flag == "on") && (($this_id_num == 4) || ($this_id_num == 19) || ($this_id_num == 29))){
		$kinsyou_tanka += 1;
	}
	// if($("#value_unit_"+$this_id_num).val() == ''){
		$("#value_unit_"+$this_id_num).val($kinsyou_tanka);
	// }
})

$("input[id*=value_gram_2_]").keyup(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$kinsyou_tanka = parseInt($("#value_unit_"+$this_id_num).val());
	$netjapan_flag = document.getElementById("net_japan_flag").innerHTML;
	if(($netjapan_flag == "on") && (($this_id_num == 4) || ($this_id_num == 19) || ($this_id_num == 29))){
		$kinsyou_tanka += 1;
	}
	if($kinsyou_tanka != ''){
		$gram = $("#value_gram_2_"+$this_id_num).val();
		if($gram != ''){
			$("#value_price_"+$this_id_num).val(Math.floor($gram * $kinsyou_tanka));
		}
	}
});

$("input[id*=value_unit_]").keyup(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];
	
	$kinsyou_tanka = parseInt($("#value_unit_"+$this_id_num).val());
	$netjapan_flag = document.getElementById("net_japan_flag").innerHTML;
	if(($netjapan_flag == "on") && (($this_id_num == 4) || ($this_id_num == 19) || ($this_id_num == 29))){
		$kinsyou_tanka += 1;
	}

	if($kinsyou_tanka != ''){
		$gram = $("#value_gram_2_"+$this_id_num).val();
		if($gram != ''){
			$("#value_price_"+$this_id_num).val(Math.floor($gram * $kinsyou_tanka));
		}
	}
});;
});
	

Runner.pages.PageSettings.addPageEvent('gold_check_item', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	function funcAfter(fieldsData) {
  for (f in fieldsData) {
      var field = fieldsData[f];
      if (field.name == 'authorize_check') {
          if (field.value == '1') {
				location.reload();
          }
       }
   }
}
this.on('afterInlineEdit', funcAfter);

// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
