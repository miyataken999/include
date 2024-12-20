<style>
	img{
		max-width: 100%;
	}
	.bs-center a[href^='https://rifa.life/mypage/'] {
	    display: inline-block;
	    width: 60px;
	    margin-right: 5px;
	    margin-bottom: 5px;
	}
	.modal-dialog {
	    width: 1200px;
	    text-align: center;
	}
</style>


<a href="#" data-toggle="modal" data-target="#imgModal" class="btn btn-link" style="display: none;" id="modal_switch"></a>

<div class="modal fade"id="imgModal"tabindex="-1"role="dialog"aria-labelledby="basicModal"aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button"class="close"data-dismiss="modal"aria-hidden="true">Close</button>
	<h4 class="modal-title"id="myModalLabel">添付画像</h4>
</div>
<div class="modal-body" >
	<img src="" id="modal_target">
</div>
<div class="modal-footer">
	<button type="button"class="btn btn-default"data-dismiss="modal">Close</button>
	<!-- <button type="button"class="btn btn-primary">Save changes</button> -->
	</div>
	</div>
	</div>
</div>


<script type="text/javascript">
$(window).load(function(){
	$(".bs-center a[href^='https://rifa.life/mypage/']").click(function(){
		$("#modal_target").attr("src",$(this).attr("href"));
		$("#modal_switch").click();
		return false;
	});
});
</script>
