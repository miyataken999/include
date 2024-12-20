<?php
$year_list_box = "";
$month_list_box = "";
$day_list_box = "";
$now_year = date('Y');
for ($i=0; $i < 4; $i++) {
	$select_year = $now_year-$i;
	if($i==0){
		$year_list_box .= "<option value=$select_year selected>{$select_year}年</option>";
	}else{
		$year_list_box .= "<option value=$select_year>{$select_year}年</option>";
	}
}
$year_list_box = '<select name="year_val">'.$year_list_box.'</select>';

$now_month = date('m');
for ($i=1; $i < 13; $i++) {
	if($now_month == $i){
		$month_list_box .= "<option value=$i selected>{$i}月</option>";
	}else{
		$month_list_box .= "<option value=$i>{$i}月</option>";
	}
}
$month_list_box = '<select name="month_val">'.$month_list_box.'</select>';


$now_day = date('d');
for ($i=1; $i < 32; $i++) {
	if($now_day == $i){
		$day_list_box .= "<option value=$i selected>{$i}日</option>";
	}else{
		$day_list_box .= "<option value=$i >{$i}日</option>";
	}
}
$day_list_box = '<select name="day_val">'.$day_list_box.'</select>';

$current_page_pass = $_SERVER["REQUEST_URI"];

?>




<script type="text/javascript">



$(window).load(function() {

	$memo_append_btn = '';
	$memo_append_btn += '<div class = "input_area">'
	$memo_append_btn += '<div id="memo_input_area">';
	$memo_append_btn += 'メモの末尾に追加<input type="text" id="memo_append_text">';
	$memo_append_btn += '<div id="memo_append_btn" class="btn btn-default">追加</div>';
	$memo_append_btn += '</div>';

	$memo_append_btn += '<div id="comment_input_area">';
	$memo_append_btn += 'コメントの末尾に追加<input type="text" id="comment_append_text">';
	$memo_append_btn += '<div id="comment_append_btn" class="btn btn-default">追加</div>';
	$memo_append_btn += '</div>';
	$memo_append_btn += '<div id="kanryohenbi_input_area">';
	$memo_append_btn += '指定日を完了変日に一括挿入';
	$memo_append_btn += '<?=$year_list_box?>';
	$memo_append_btn += '<?=$month_list_box?>';
	$memo_append_btn += '<?=$day_list_box?>';
	$memo_append_btn += '<div id="kanryohenbi_append_btn" class="btn btn-default">追加</div>';
	$memo_append_btn += '</div>';
	$memo_append_btn += '</div>';
	$(".rnr-hfiller").append($memo_append_btn);


	$("#memo_append_btn").click(function(){
		$memo_append = $("#memo_append_text").val();
		$memo_area = $(".bs-sidebar-main").find(".form-control[id*='value_memo_']");
		$memo_area.each(function(index,el) {
			if($(el).val() != ''){
				$(el).val(' '+$(el).val()+$memo_append);
			}else{
				$(el).val($(el).val()+$memo_append);
			}
		});
	})
	$("#comment_append_btn").click(function(){
		$comment_append = $("#comment_append_text").val();
		$comment_area = $(".bs-sidebar-main").find(".form-control[id*='value_comment_']");
		$comment_area.each(function(index,el) {
			if($(el).val() != ''){
				$(el).val(' '+$(el).val()+$comment_append);
			}else{
				$(el).val($(el).val()+$comment_append);
			}
		});
	})
	$("#kanryohenbi_append_btn").click(function(){
		$year_val = $('select[name="year_val"]').val();
		console.log($year_val);
		$month_val = $('select[name="month_val"]').val();
		console.log($month_val);
		$day_val = $('select[name="day_val"]').val();
		console.log($day_val);
		$year_insert_area = $(".bs-sidebar-main").find(".form-control[id*='yearvalue_kanryou_henbi_']");
		$month_insert_area = $(".bs-sidebar-main").find(".form-control[id*='monthvalue_kanryou_henbi_']");
		$day_insert_area = $(".bs-sidebar-main").find(".form-control[id*='dayvalue_kanryou_henbi_']");

		$year_insert_area.val($year_val);
		$month_insert_area.val($month_val);
		$day_insert_area.val($day_val);
		$(".bs-sidebar-main").find(".form-control[id*='value_kanryou_henbi_']").val($year_val+"-"+ $month_val +"-"+ $day_val);

	})
});

</script>
<style type="text/css">
	.input_area {
		display: flex;
	}
	#memo_input_area{
		overflow: hidden;
	}
	#memo_append_text {
	    height: 30px!important;
	    margin: 0 5px;
	    -webkit-box-sizing: border-box;
	       -moz-box-sizing: border-box;
	            box-sizing: border-box;
	}
	#memo_append_btn{
		display: inline-block;
	}
	#comment_input_area{
		overflow: hidden;
		padding: 0 0 0 15px;
	}
	#comment_append_text {
			height: 30px!important;
			margin: 0 5px;
			-webkit-box-sizing: border-box;
				 -moz-box-sizing: border-box;
							box-sizing: border-box;
	}
	#comment_append_btn{
		display: inline-block;
	}
</style>
