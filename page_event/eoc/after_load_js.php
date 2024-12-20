<?
header('Content-Type: text/html; charset=UTF-8');
// print mb_internal_encoding();
?>
<script type="text/javascript">
	function js_load(){
		$("input[id*=mail] , select[id*=mail_check_type]").parents("span[id*='mail']").addClass("open_mail_input");
		// $(".sidebar").find("input[id*='value_ecc_id']").focus();
	}
</script>
