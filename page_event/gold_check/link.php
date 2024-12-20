<?php
$gold_check_id = $value;
if(strstr($_SERVER["REQUEST_URI"],'mastertable=gold_check')){


$gold_check_sql = "SELECT create_at FROM gold_check WHERE id = {$gold_check_id} limit 1";
$gold_check_rs = CustomQuery($gold_check_sql);
$gold_check_data = db_fetch_array($gold_check_rs);
$create_at = $gold_check_data["create_at"];// 2019-10-01 17:30:21
$create_at =strtotime($create_at);// 123456484638768
$create_at = date("Y-m-d 00:00:00", $create_at);// 2019-10-01 00:00:00
$create_at = strtotime($create_at);// 1245254152340000
$nowdate = date("Y-m-d 00:00:00");// 2019-10-21 14:46:53
$nowdate = strtotime($nowdate);// 1354385458463415248


$sql = "SELECT product_id FROM shouhin WHERE gold_check_id = {$gold_check_id} limit 1";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
$product_id = $data["product_id"];

  if($product_id==''){
    //正当な１日
    $msg = '';
    $flag = 'first';
  }else{
    //kanryo_query
    $kanryou_sql = "SELECT product_id FROM shouhin WHERE gold_check_id = {$gold_check_id} AND `status`=142 limit 1";
    $kanryou_rs = CustomQuery($kanryou_sql);
    $kanryou_data = db_fetch_array($kanryou_rs);
    $kanryou_product_id = $kanryou_data["product_id"];

    if($create_at==$nowdate){
      if($kanryou_product_id != ''){
        //すでに完了している　confirm
          $msg = 'すでに完了していますが、良いですか？';
           $flag = 'after_complete';
      }else{
        //追加で良いか　confirm
          $msg = '追加で良いですか？';
           $flag = 'second';
      }
      //end today
    }else{
        //昨日以前
      if($kanryou_product_id != ''){
          //すでに過去完了しています false
          $msg = 'すでに過去に完了していますが、良いですか？';
           $flag = 'already_complete';
      }else{
          //作成日が古いです false
          $msg = '作成日が古いですが、良いですか？';
           $flag = 'not_complete';
      }
    }// end not today

  }// end else first
  $html = '';

  $html .= "<a class =click_func  href='";
  $html .= "https://rifa.life/include/page_event/gold_check/gold_check_add_id.php?";
  $html .= "gold_check_id=$gold_check_id'>";
  // $html .= "&msg='{$msg}' flag='{$flag}' ";
  $html .= "地金商品登録";
  $html .= "</a>";
  // mastertable=gold_check
  // onclick='gold_check_func()'

  $html .= "<style type = \"text/css\">";
  $html .= ".click_func{";
  $html .= "font-size: 16px;";
  $html .= "display: block;";
  $html .= "width: 100px;";
  $html .= "padding-top: 10px;";
  $html .= "padding-bottom: 10px;";
  $html .= "text-align: center;";
  // $html .= "border: 2px solid;";
  // $html .= "border-color: #4dea25 #4dea25 #4dea25 #4dea25;";
  $html .= "color: #111;";
  $html .= "background: -moz-linear-gradient(top, #FFF, #FFC778 30%, #F89174 60%, #748af8);";
  $html .= "background: -webkit-linear-gradient(top, #FFF, #FFC778 30%, #F89174 60%, #748af8);";
  $html .= "background: linear-gradient(to bottom, #FFF, #FFC778 30%, #F89174 60%, #748af8);";
  $html .= "}";
  $html .= ".click_func:hover{";
  $html .= "background: radial-gradient(#F13F79, #FFC778);";
  $html .= "color: ##0e15ef;";
  $html .= "}";
  $html .= "</style>";

  $html .="<script> $('.click_func').click(function(){ ";
  if($flag == 'first'){
    //なにもしない
    $html .="return true;";
  }elseif(($flag == 'after_complete')or($flag == 'second')){
    $html .="
      if(window.confirm('{$msg}')){
        //続行
    	}else{
        alert('中止しました。');
        return false;
    	}
    ";
  }elseif(($flag == 'already_complete')or($flag == 'not_complete')){
    // alert('{$msg}:{$create_at}:{$nowdate}:{$flag}');
    $html .="
      if(window.confirm('{$msg}')){
        //続行
      }else{
        alert('中止しました。');
        return false;
      }
    ";
  }
  $html .="}) //end gold_check_func </script>";



  $value = $html;


  // $value = $create_at."<br>".$nowdate;
  //
  // if($create_at==$nowdate){
  //   $value = 1;
  // }

}else{
  $count_sql = "SELECT count(gold_check_id) FROM gold_check_item WHERE gold_check_id = $gold_check_id";
  $count_rs = CustomQuery($count_sql);
  $count_data = db_fetch_array($count_rs);
  $count = $count_data["count(gold_check_id)"];


  $html = '';
  $html .= "<a class ='click_func' 'btn' 'btn-default'  href='";
  $html .= "https://rifa.life/shop5/gold_check_item_list.php?";
  $html .= "masterkey1=$gold_check_id&mastertable=gold_check'>";
  // $html .= "&msg='{$msg}' flag='{$flag}' ";
  $html .= "地金商品リンク($count)";
  $html .= "</a>";

  $value = $html;
}//if mastertable end
