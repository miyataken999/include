<style type="text/css">
	#syousai_select{
		display: block;
	}
	#syousai_select_btn{
		display: block;
	}
</style>
<script type="text/javascript">
	$(window).load(function(){
		$syousai_select = "<select id='syousai_select'>";
		$syousai_select += "<option value='多少の使用感はありますが、目立つダメージは無く比較的綺麗なコンディションです★'>多少の使用感はありますが、目立つダメージは無く比較的綺麗なコンディションです★</option>";
		$syousai_select += "<option value='使用感はありますが、着用時(ご使用時)に目立つダメージではございません★'>使用感はありますが、着用時(ご使用時)に目立つダメージではございません★</option>";
		$syousai_select += "<option value='使用感(ダメージ)が強くありますので、ご理解頂ける方のご購入をお願い致します。'>使用感(ダメージ)が強くありますので、ご理解頂ける方のご購入をお願い致します。</option>";
		$syousai_select += "<option value='使用感の感じられないとても綺麗なコンディションです★'>使用感の感じられないとても綺麗なコンディションです★</option>";
		$syousai_select += "<option value='新品仕上げ済みとなります★'>新品仕上げ済みとなります★</option>";
		$syousai_select += "<option value='新品・未使用品です★'>新品・未使用品です★</option>";
		$syousai_select += "</select>";
		$syousai_select += "<input type='button' id='syousai_select_btn' value='決定'>";
		$("#edit1_remark_0").prepend($syousai_select);

		$("#syousai_select_btn").click(function(){
			$("#value_remark_1").val($("#syousai_select").val());
		})
	})


</script>

