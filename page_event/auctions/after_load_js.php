<?
header("Content-Type: text/html; charset=UTF-8");
?>
<script type="text/javascript">
	function js_load(){

		jQuery(".bs-sidebar-screenbound").find("textarea[id*='value_Title_']").each(function(index){
			$ct_id = "count_"+$(this).attr("id");
			if( document.getElementById($ct_id) ){
			}else{
				$(this).parent().prepend("<div id='count_"+$(this).attr("id")+"' class='mojicount'></div>");
			}
		});


		jQuery(".bs-sidebar-screenbound").find("textarea[id*='value_Title_']").keyup(function(){

			var str = $(this).val();

			var _str = countLength(str);
			// window.alert("バイト数：" + length);
			if(_str>64){
				jQuery(this).parent().addClass("error_field");
				$(this).siblings(".mojicount").html(_str+"/64文字<br>ストップ！文字数オーバーしてます！");;
			}else{
				jQuery(this).parent().removeClass("error_field");
				$(this).siblings(".mojicount").html(_str+"/64文字");;
			}
		});




		jQuery(".bs-sidebar-screenbound").find("textarea[id*='value_raku_goods_name_']").each(function(index){
			$ct_id = "count_"+$(this).attr("id");
			if( document.getElementById($ct_id) ){
			}else{
				$(this).parent().prepend("<div id='count_"+$(this).attr("id")+"' class='mojicount'></div>");
			}
		});


		jQuery(".bs-sidebar-screenbound").find("textarea[id*='value_raku_goods_name_']").keyup(function(){

			var str = $(this).val();

			var _str = countLength(str);
			// window.alert("バイト数：" + length);
			if(_str>100){
				jQuery(this).parent().addClass("error_field");
				$(this).siblings(".mojicount").html(_str+"/100文字<br>ストップ！文字数オーバーしてます！");;
			}else{
				jQuery(this).parent().removeClass("error_field");
				$(this).siblings(".mojicount").html(_str+"/100文字");;
			}
		});








		//Yタイトル文字数エラー
		function countLength(str) {
		    var r = 0;
		    for (var i = 0; i < str.length; i++) {
		        var c = str.charCodeAt(i);
		        // Shift_JIS: 0x0 ～ 0x80, 0xa0 , 0xa1 ～ 0xdf , 0xfd ～ 0xff
		        // Unicode : 0x0 ～ 0x80, 0xf8f0, 0xff61 ～ 0xff9f, 0xf8f1 ～ 0xf8f3
		        if ( (c >= 0x0 && c < 0x81) || (c == 0xf8f0) || (c >= 0xff61 && c < 0xffa0) || (c >= 0xf8f1 && c < 0xf8f4)) {
		            r += 0.5;
		        } else {
		            r += 1;
		        }
		    }
		    return r;
		}



	}


</script>
