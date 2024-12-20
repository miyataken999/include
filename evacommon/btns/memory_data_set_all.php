<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$table_arr = array(
  'mst_Intensity',
  'mst_overtone',
  '_DIA_DA_COLOR',
  '_DIA_DA_CLARITY',
  '_DIA_DA_CUT',
  'mst_gold_property',
  'mst_unit',
  'mst_Destination_selling',
  'mst_Finish',
  'mst_Discrimination',
  'mst_accessories',
  'mst_DA_POLISH',
  'mst_DA_SYMMETRY',
  '_DIA_DA_FLUO',
  'mst_color_fluo',
  'mst_Appraiser',
  'mst_motif',
  'mst_Setting',
  'mst_processing',
  'mst_Ring_size',
  'mst_designer',
  'mst_hahakai',
  'mst_effect',
  'mst_shape',
  'mst_cutting_style',
  'mst_chain_type',
  'mst_number_of_stones',
  'mst_producing_area',
  'mst_side_gem',
  'mst_country_of_origin',
  '_mst_condition',
  'mst_handle',
  'mst_color',
  'mst_Sleeve_Length',
  'mst_length',
  'mst_zipper',
  'mst_amount',
  'mst_collar_neck_line',
  'mst_breast',
  'mst_silhouette',
  'mst_sleeve',
  'mst_hall_mark',
  'mst_toe',
  'mst_heel',
  'mst_cloth'
);

foreach ($table_arr as $table_name) {
  var_dump($table_name);
  $memory_table_name = "memory_".$table_name;
  var_dump($memory_table_name);

  $query = "DELETE FROM $memory_table_name";
  $sql = mysql_query('SET NAMES utf8');
  $sql = mysql_query($query);

  $query = "INSERT INTO $memory_table_name SELECT * FROM $table_name";
  $sql = mysql_query('SET NAMES utf8');
  $sql = mysql_query($query);
}





?>
