<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>csv_create</title>
  </head>
  <body>
    <?php
    // var_dump($_POST["product_id_array[]"]);
    $product_id_array = array();
    $product_id_array = $_POST["product_id_array"];
    echo $product_id_array;
    var_dump($product_id_array);

    ?>
    <!-- <form action ="./csv_create_batch.php">
      <>

    </form> -->
  </body>
</html>
