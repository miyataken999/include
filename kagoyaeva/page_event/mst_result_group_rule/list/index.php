<?php
  $group_id = $data["group_id"];
  $group_query = "SELECT `category_id` FROM `mst_result_group` WHERE `id`=$group_id";
  $group_rs = CustomQuery($group_query);
  $group_data = db_fetch_array($group_rs);
  $category_id = $group_data['category_id'];
  $value = $category_id;

  $category_query = "SELECT `name` FROM `mst_result_category` WHERE `id`=$category_id";
  $category_rs = CustomQuery($category_query);
  $category_data = db_fetch_array($category_rs);
  $category_name = $category_data["name"];
  $value = $category_name;
  // $data["category_name"] = $$category_id;


 ?>
