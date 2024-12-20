<?
// phpinfo();
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<form id="reflect_form" class="" action="http://rifa.life/lounge_API/mst_gold_of_bullion_merchants_price.php" method="post">
  <input type="hidden" name="tokentoken" value="djfkal;jfjkdaslfj;sdljvslf;dkjvfsdlk;jfo;sirfjer;wodfja;lkfjer;eoiwjfa;dosjv;odlfjair;oerwjfn;lksdnvlkscnv;lzcxknvo;ifsnh;igfsnjfg;iasdjhfoi;weahgo;rihjgo;ihejrg;osfadj;lasdjfgaoi">
  <input type="hidden" name="uid" value="<?=$uid?>">
  <input type="submit" name="" value="送信">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
  $("#reflect_form").submit()
</script>
