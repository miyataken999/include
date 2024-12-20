<?php
include_once '/var/www/html/include/idiorm_paris/app/config.php';

class shouhin extends Model{

  public static $_table = 'shouhin';    // table name (異なる場合オーバライドできる)
  public static $_id_column = 'product_id';     // primary key (同様)


}
