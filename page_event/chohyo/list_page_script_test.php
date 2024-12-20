<style type="text/css">
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="ecc_id"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="yahoo_sinaban"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="price"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="satei_by"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="satei_hi"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="REG_AUTHOR"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="DT_UP_DATE"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="kaitori_by"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="kaitory_hi"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="updated_by"],
	body .table>thead:first-child>tr:first-child>th.rnr-gridfieldlabel[data-field="updated_at"]
	{
		background: #ff0;
		color: #111;
	}
	.table>tbody>tr>td {
	    width: min-content!important;
	}
	body .table>thead:first-child>tr:first-child>th {
	    width: min-content!important;
	}
	.org_btn_box{
	}
	.float-left{
		float: left;
	}
	.org_btn_box form{
		float: right;
	}
</style>

<script type="text/javascript">
	$(window).load(function() {
		$link_btn = '';
		$link_btn += '<br>';
		$link_btn += '<div class="org_btn_box">';

		$link_btn += '<div class="float-left">';
		$link_btn += '<a class="rnr-button btn btn-default" target="_blank" href="/shop5/shouhin_list.php?q=(status~equals~124)(chohyo_id~empty)" typeid="ib">【ストック一覧】</a>';
		$link_btn += '</div>';

		$link_btn += '<div class="float-left">';
		$link_btn += '<span class="rnr-button btn btn-default" id="batch_popup_open" onclick="batch_popup_open();" >batch開始</span>';
		$link_btn += '</div>';

		$link_btn += '<br clear="all" >';
		$link_btn += '</div>';




		$(".rnr-hfiller").append($link_btn);
	});
</script>


