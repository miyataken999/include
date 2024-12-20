<style type="text/css">
textarea{
	/*min-width: 1000px;*/
	min-height: 200px;
}
.container {
    max-width: none;
}
label.control-label.col-md-12 {
    text-align: left;
    padding: 10px 10px 10px 15px;
}
</style>
<script type="text/javascript">
$(window).load(function(){
	$(".control-label").removeClass("col-md-3").addClass("col-md-12").siblings(".col-md-6").removeClass('col-md-6').addClass("col-md-9");

	$('textarea').each(function(){
		var lineHeight = parseInt($(this).css('lineHeight'));
		var lines = ($(this).val() + '\n').match(/\n/g).length;
		if(lineHeight * lines > 400){
			$(this).height(300);
		}else{
			$(this).height(lineHeight * lines);
		}
	})

})
</script>
