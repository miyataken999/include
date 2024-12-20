<style type="text/css">
table td.bs-labelcell[data-field="tel"]
,table td.bs-labelcell[data-field="tel2"]
,table td.bs-labelcell[data-field="zip1"]
,table td.bs-labelcell[data-field="zip2"]
,table td.bs-labelcell[data-field="address1"]
,table td.bs-labelcell[data-field="address2"]
,table td.bs-labelcell[data-field="address3"]{
  font-weight: bold;
  background-color: #ff0;
}
table td.bs-labelcell[data-field="tel"] label
,table td.bs-labelcell[data-field="tel2"] label
,table td.bs-labelcell[data-field="zip1"] label
,table td.bs-labelcell[data-field="zip2"] label
,table td.bs-labelcell[data-field="address1"] label
,table td.bs-labelcell[data-field="address2"] label
,table td.bs-labelcell[data-field="address3"] label{
  color: #111;
}

table td.bs-valuecell[data-field="tel"] span
,table td.bs-valuecell[data-field="tel2"] span
,table td.bs-valuecell[data-field="zip1"] span
,table td.bs-valuecell[data-field="zip2"] span
,table td.bs-valuecell[data-field="address1"] span
,table td.bs-valuecell[data-field="address2"] span
,table td.bs-valuecell[data-field="address3"] span{
  font-size: 18px;
  font-weight: bold;
}
table td.bs-labelcell label {
    min-width: max-content;
}


.bs-gridcell span {
    width: auto!important;
}
.bs-gridcell input[type="text"] {
    min-width: 100px!important;
    width: 100px!important;
}
table td.bs-labelcell {
    background-color: #4fb2ea;
}
table td.bs-labelcell label {
    font-weight: normal;
    color: #fff;
}
table td.bs-valuecell textarea[id*='remark']{
	width: 500px!important;
    height: 150px!important;
}
table td.bs-valuecell>span[id*='remark'],table td.bs-valuecell>span[id*='mail1'],table td.bs-valuecell>span[id*='mail2'] {
    width: max-content;
    max-width: 400px;
}
table td.bs-labelcell {
    background-color: #4fb2ea;
    width: 200px;
    min-width: 150px;
    padding: 0 5px!important;
    text-align: left;
}
table td.bs-valuecell {
    padding: 0px!important;
}
table td.bs-valuecell>span {
    display: block;
    width: 200px!important;
    border-bottom: 1px solid #ddd;
    padding: 5px 5px;
}
.panel-heading a.glyphicon {
    width: 50px;
    text-align: center;
    font-size: 25px;
}
a.sagawa_shuuka_irai_btn.btn {
    border: 1px solid #06aeff;
    background: #30bcff;
    color: #fff;
    margin: 10px;
}
</style>



<script type="text/javascript">
	$(window).load(function(){
		$(".rnr-searchcontrol input[id*='ecc_id']").focus();
	})
</script>

<script type="text/javascript">
    $(window).load(function(){

      <?php
      ob_start();
      include_once $_SERVER["DOCUMENT_ROOT"].'/include/page_event/ichiba_exhibition/list_page_text.html';
      $html = ob_get_contents();
      ob_end_clean();
      $html = str_replace("\n","",$html);
      ?>
        $append_btn = '<?=$html?>';
        $(".bs-sidebar-screenbound div[data-container='add_delete']").append($append_btn);

        jQuery("#ex_details_opener").click(function(){
          jQuery("#ex_details_table").slideToggle();
        })

    });


</script>
