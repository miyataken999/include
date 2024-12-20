<script type="text/javascript">


jQuery(window).load(function(){
	jQuery("[data-field=product_num]").hide();
	jQuery("[data-field=category_id]").hide();
	jQuery("[data-field=sub_category_id1]").hide();
	jQuery("[data-field=yahoo_sex]").hide();
	jQuery("[data-field=line]").hide();
	jQuery("[data-field=item_name]").hide();

	jQuery("[data-field=serial_number]").hide();
	jQuery("[data-field=yahoo_kataban]").hide();
	jQuery("[data-field=stamp]").hide();
	jQuery("[data-field=Setting]").hide();
	jQuery("[data-field=Destination_selling]").hide();
	jQuery("[data-field=Finish]").hide();
	jQuery("[data-field=Discrimination]").hide();
	jQuery("[data-field=accessories]").hide();
	// jQuery("[data-field=yahoo_sankou_uwadai]").hide();
	// jQuery("[data-field=sales_price]").hide();


	$(document).keydown(function(event){
		// クリックされたキーのコード
		var list_keyCode = event.keyCode;
		// console.log(list_keyCode);

		if(list_keyCode == 113 ){
		//F2
		chigintogtog();
		}
	});
});

function chigintogtog(){
	jQuery("[data-field=product_num]").toggle();
	jQuery("[data-field=category_id]").toggle();
	jQuery("[data-field=sub_category_id1]").toggle();
	jQuery("[data-field=yahoo_sex]").toggle();
	jQuery("[data-field=line]").toggle();
	jQuery("[data-field=item_name]").toggle();

	jQuery("[data-field=serial_number]").toggle();
	jQuery("[data-field=yahoo_kataban]").toggle();
	jQuery("[data-field=stamp]").toggle();
	// jQuery("[data-field=Setting]").toggle();
	jQuery("[data-field=Destination_selling]").toggle();
	jQuery("[data-field=Finish]").toggle();
	jQuery("[data-field=Discrimination]").toggle();
	jQuery("[data-field=accessories]").toggle();
	// jQuery("[data-field=yahoo_sankou_uwadai]").toggle();
	// jQuery("[data-field=sales_price]").toggle();


}



</script>


<?
if($_SESSION["Eoc_chigins2_move_page"] == 'PMT_EV001'){
	$move_text = 'D在に移動しますか？';
	$move_key = $_SESSION["Eoc_chigins2_move_key"];

?>
<script type="text/javascript">
$(window).load(function(){
	if(window.confirm('<?=$move_text?>')){
		location.href = "https://rifa.life/shop5test/<?=$_SESSION["Eoc_chigins2_move_page"]?>_list.php?masterkey1=<?=$move_key?>&mastertable=Eoc"; // example_confirm.html へジャンプ
	}else{
		// window.alert('キャンセルされました'); // 警告ダイアログを表示
	}
});
</script>
<?
	$_SESSION["Eoc_chigins2_move_page"] = 'off';
	$_SESSION["Eoc_chigins2_move_key"] = '';
}

?>
