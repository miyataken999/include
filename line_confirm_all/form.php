<form class="line_confirm" action="/include/line_confirm_all/confirm.php" method="post" id="line_confirm_all_form">
  <textarea name="ecc_id_text" rows="8" cols="80"><?=$ecc_id_text?></textarea>
</form>

<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
<script type="text/javascript">
<?php
if(!isset($_GET["test"])){
?>
$(window).load(function(){
  $("#line_confirm_all_form").submit();
})
<?php
}
?>
</script>
