<script>
function clearInputVal(){
	$("#product_id_area").val('');
}

$(window).load(function() {
	$link_btn = '';
 	$link_btn += '<div><a class="rnr-button btn btn-default" href="https://rifa.life/evaProject/batch_sales_dia_costs">更新する</a></div>';
	$(".rnr-hfiller").append($link_btn);
	$("#print_form").submit(function(event) {
		setTimeout(clearInputVal, 2000);
		$("#product_id_area").focus();
	});
})
<?php
// }
?>
</script>

<style type="text/css">
	.bs-gridcell .form-control[name*='DA_INTENSITY']
	,.bs-gridcell .form-control[name*='DA_OVERTONE']
	,.bs-gridcell .form-control[name*='DA_COLOR']
	,.bs-gridcell .form-control[name*='DA_CLARITY']
	,.bs-gridcell .form-control[name*='DA_CUT']
	,.bs-gridcell .form-control[name*='DA_POLISH']
	,.bs-gridcell .form-control[name*='DA_SYMMETRY']
	,.bs-gridcell .form-control[name*='DA_FLUO']
	,.bs-gridcell .form-control[name*='DA_COLOR_FLUO']
	{
		width: auto!important;
	}
</style>
