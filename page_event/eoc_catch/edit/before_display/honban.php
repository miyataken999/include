<style media="screen">
  .flex {
    display: flex;
    align-items: center;
  }
  .line-box{
    border: 1px solid #111;
    width: min-content;
    margin: 5px 0 10px;
  }
  .line-box div, .line-box a{
    padding: 5px 10px;
    width: max-content;
  }
  .line-head{
    background: #0f0;
    color: #111;
  }
</style>
<?php
// var_dump($_SESSION["uid"]);
$pageObject->setProxyValue("uid", $_SESSION["uid"]);
?>
