<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("users");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblinternet_at_urlounge_co_jp___chigin_result_type;
	var $tblinternet_at_urlounge_co_jp___chigin_type;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_APPRAISER;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_CLARITY;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_COLOR;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_CUSTOMER;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_CUT;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_FLUO;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_SHAPE;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_ST2;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_STATUS;
	var $tblinternet_at_urlounge_co_jp___DIA_DA_SUGARCANE;
	var $tblinternet_at_urlounge_co_jp___goods_status2;
	var $tblinternet_at_urlounge_co_jp___hentou_houhou_type;
	var $tblinternet_at_urlounge_co_jp___mail_check_type;
	var $tblinternet_at_urlounge_co_jp___mst_condition;
	var $tblinternet_at_urlounge_co_jp___pref;
	var $tblinternet_at_urlounge_co_jp___purchase_type;
	var $tblinternet_at_urlounge_co_jp___sex;
	var $tblinternet_at_urlounge_co_jp___shokugyou;
	var $tblinternet_at_urlounge_co_jp__ad_params;
	var $tblinternet_at_urlounge_co_jp__analysisMail_send_emails;
	var $tblinternet_at_urlounge_co_jp__analysisMail_send_logs;
	var $tblinternet_at_urlounge_co_jp__analysisMail_send_logs_bcc;
	var $tblinternet_at_urlounge_co_jp__analysisMail_tags;
	var $tblinternet_at_urlounge_co_jp__auctions;
	var $tblinternet_at_urlounge_co_jp__box;
	var $tblinternet_at_urlounge_co_jp__brand_price;
	var $tblinternet_at_urlounge_co_jp__buy_campaign_data;
	var $tblinternet_at_urlounge_co_jp__buy_campaign_data_detail;
	var $tblinternet_at_urlounge_co_jp__buy_campaign_data_rules;
	var $tblinternet_at_urlounge_co_jp__chohyo;
	var $tblinternet_at_urlounge_co_jp__DIA_QR_reading;
	var $tblinternet_at_urlounge_co_jp__Eoc;
	var $tblinternet_at_urlounge_co_jp__Eoc_area;
	var $tblinternet_at_urlounge_co_jp__Eoc_chigins;
	var $tblinternet_at_urlounge_co_jp__Eoc_chigins2;
	var $tblinternet_at_urlounge_co_jp__Eoc_chigins_unfinished;
	var $tblinternet_at_urlounge_co_jp__Eoc_guestquestion;
	var $tblinternet_at_urlounge_co_jp__Eoc_inventory;
	var $tblinternet_at_urlounge_co_jp__Eoc_inventory_item;
	var $tblinternet_at_urlounge_co_jp__Eoc_inventory_weekly;
	var $tblinternet_at_urlounge_co_jp__Eoc_monthly_reports;
	var $tblinternet_at_urlounge_co_jp__Eoc_monthly_reports_by_prefectures;
	var $tblinternet_at_urlounge_co_jp__Eoc_received;
	var $tblinternet_at_urlounge_co_jp__Eoc_received_events;
	var $tblinternet_at_urlounge_co_jp__Eoc_refining;
	var $tblinternet_at_urlounge_co_jp__Eoc_refining_item;
	var $tblinternet_at_urlounge_co_jp__Eoc_refining_v1;
	var $tblinternet_at_urlounge_co_jp__Eoc_takuhai;
	var $tblinternet_at_urlounge_co_jp__Eoc_takuhai_error;
	var $tblinternet_at_urlounge_co_jp__Eoc_takuhai_events;
	var $tblinternet_at_urlounge_co_jp__Eoc_takuhai_return;
	var $tblinternet_at_urlounge_co_jp__Eoc_takuhai_return_items;
	var $tblinternet_at_urlounge_co_jp__Eoc_timeline;
	var $tblinternet_at_urlounge_co_jp__Eoc_trader;
	var $tblinternet_at_urlounge_co_jp__Eoc_unfinished;
	var $tblinternet_at_urlounge_co_jp__evashop5uggroups;
	var $tblinternet_at_urlounge_co_jp__evashop5ugmembers;
	var $tblinternet_at_urlounge_co_jp__evashop5ugrights;
	var $tblinternet_at_urlounge_co_jp__evav62122_audit;
	var $tblinternet_at_urlounge_co_jp__freee_account_categories_revenue;
	var $tblinternet_at_urlounge_co_jp__freee_account_items;
	var $tblinternet_at_urlounge_co_jp__freee_apportionment_rule_detail;
	var $tblinternet_at_urlounge_co_jp__freee_apportionment_rules;
	var $tblinternet_at_urlounge_co_jp__freee_deal_detail__memotag;
	var $tblinternet_at_urlounge_co_jp__freee_deal_details;
	var $tblinternet_at_urlounge_co_jp__freee_deal_join_manual_journal__detail__memotag;
	var $tblinternet_at_urlounge_co_jp__freee_deal_join_manual_journal__details;
	var $tblinternet_at_urlounge_co_jp__freee_deals;
	var $tblinternet_at_urlounge_co_jp__freee_employees;
	var $tblinternet_at_urlounge_co_jp__freee_employees_details;
	var $tblinternet_at_urlounge_co_jp__freee_expense_categories;
	var $tblinternet_at_urlounge_co_jp__freee_in_house_sales;
	var $tblinternet_at_urlounge_co_jp__freee_inventory_details;
	var $tblinternet_at_urlounge_co_jp__freee_items;
	var $tblinternet_at_urlounge_co_jp__freee_manual_journal_details;
	var $tblinternet_at_urlounge_co_jp__freee_manual_journals;
	var $tblinternet_at_urlounge_co_jp__freee_memotags;
	var $tblinternet_at_urlounge_co_jp__freee_partners;
	var $tblinternet_at_urlounge_co_jp__freee_PLBS_by_day;
	var $tblinternet_at_urlounge_co_jp__freee_PLBS_by_day_details;
	var $tblinternet_at_urlounge_co_jp__freee_PLBS_by_year;
	var $tblinternet_at_urlounge_co_jp__freee_PLBS_details;
	var $tblinternet_at_urlounge_co_jp__freee_saisan_goals;
	var $tblinternet_at_urlounge_co_jp__freee_saisan_rule_details;
	var $tblinternet_at_urlounge_co_jp__freee_saisan_rules;
	var $tblinternet_at_urlounge_co_jp__freee_saisanhyou;
	var $tblinternet_at_urlounge_co_jp__freee_saisanhyou_check_logs;
	var $tblinternet_at_urlounge_co_jp__freee_sections;
	var $tblinternet_at_urlounge_co_jp__freee_taxes;
	var $tblinternet_at_urlounge_co_jp__freee_work_record_summaries;
	var $tblinternet_at_urlounge_co_jp__freee_work_records;
	var $tblinternet_at_urlounge_co_jp__freee_work_records_by_term;
	var $tblinternet_at_urlounge_co_jp__from_mail_tbl;
	var $tblinternet_at_urlounge_co_jp__gold_check;
	var $tblinternet_at_urlounge_co_jp__gold_check_item;
	var $tblinternet_at_urlounge_co_jp__goods_num_seaquence;
	var $tblinternet_at_urlounge_co_jp__haraidasi;
	var $tblinternet_at_urlounge_co_jp__ichiba_exhibition;
	var $tblinternet_at_urlounge_co_jp__id_key;
	var $tblinternet_at_urlounge_co_jp__kataban_price;
	var $tblinternet_at_urlounge_co_jp__KEN_ALL;
	var $tblinternet_at_urlounge_co_jp__laravel_users;
	var $tblinternet_at_urlounge_co_jp__line_report;
	var $tblinternet_at_urlounge_co_jp__lounge_report__buy_takuhai;
	var $tblinternet_at_urlounge_co_jp__mail_data_tbl;
	var $tblinternet_at_urlounge_co_jp__mail_data_tbl_category;
	var $tblinternet_at_urlounge_co_jp__mail_data_tbl_sub_category;
	var $tblinternet_at_urlounge_co_jp__mail_data_tbl_template;
	var $tblinternet_at_urlounge_co_jp__mailsystem_send_schedule;
	var $tblinternet_at_urlounge_co_jp__market_product_performance_original;
	var $tblinternet_at_urlounge_co_jp__mst_accessories;
	var $tblinternet_at_urlounge_co_jp__mst_amount;
	var $tblinternet_at_urlounge_co_jp__mst_analysisMail_contents;
	var $tblinternet_at_urlounge_co_jp__mst_analysisMail_fromaddress;
	var $tblinternet_at_urlounge_co_jp__mst_analysisMail_send_categories;
	var $tblinternet_at_urlounge_co_jp__mst_analysisMail_send_groups;
	var $tblinternet_at_urlounge_co_jp__mst_analysisMail_send_targets;
	var $tblinternet_at_urlounge_co_jp__mst_analysisMail_shomei;
	var $tblinternet_at_urlounge_co_jp__mst_analysisMail_status;
	var $tblinternet_at_urlounge_co_jp__mst_analysisMail_tags;
	var $tblinternet_at_urlounge_co_jp__mst_Appraiser;
	var $tblinternet_at_urlounge_co_jp__mst_area;
	var $tblinternet_at_urlounge_co_jp__mst_ban_word;
	var $tblinternet_at_urlounge_co_jp__mst_bank;
	var $tblinternet_at_urlounge_co_jp__mst_brand;
	var $tblinternet_at_urlounge_co_jp__mst_brand2;
	var $tblinternet_at_urlounge_co_jp__mst_brand_color;
	var $tblinternet_at_urlounge_co_jp__mst_brand_report;
	var $tblinternet_at_urlounge_co_jp__mst_breast;
	var $tblinternet_at_urlounge_co_jp__mst_bullion_dealer;
	var $tblinternet_at_urlounge_co_jp__mst_bullion_type;
	var $tblinternet_at_urlounge_co_jp__mst_business_partner;
	var $tblinternet_at_urlounge_co_jp__mst_category_class;
	var $tblinternet_at_urlounge_co_jp__mst_chain_type;
	var $tblinternet_at_urlounge_co_jp__mst_chohyo_type;
	var $tblinternet_at_urlounge_co_jp__mst_cloth;
	var $tblinternet_at_urlounge_co_jp__mst_collar_neck_line;
	var $tblinternet_at_urlounge_co_jp__mst_color;
	var $tblinternet_at_urlounge_co_jp__mst_color_code;
	var $tblinternet_at_urlounge_co_jp__mst_color_fluo;
	var $tblinternet_at_urlounge_co_jp__mst_colorstone;
	var $tblinternet_at_urlounge_co_jp__mst_condition_details;
	var $tblinternet_at_urlounge_co_jp__mst_cost_category;
	var $tblinternet_at_urlounge_co_jp__mst_country_of_origin;
	var $tblinternet_at_urlounge_co_jp__mst_cutting_style;
	var $tblinternet_at_urlounge_co_jp__mst_DA_POLISH;
	var $tblinternet_at_urlounge_co_jp__mst_DA_SYMMETRY;
	var $tblinternet_at_urlounge_co_jp__mst_delivery_type;
	var $tblinternet_at_urlounge_co_jp__mst_dept_group;
	var $tblinternet_at_urlounge_co_jp__mst_dept_group_categories;
	var $tblinternet_at_urlounge_co_jp__mst_designer;
	var $tblinternet_at_urlounge_co_jp__mst_destination;
	var $tblinternet_at_urlounge_co_jp__mst_Destination_selling;
	var $tblinternet_at_urlounge_co_jp__mst_dia;
	var $tblinternet_at_urlounge_co_jp__mst_Discrimination;
	var $tblinternet_at_urlounge_co_jp__mst_ebay_price;
	var $tblinternet_at_urlounge_co_jp__mst_effect;
	var $tblinternet_at_urlounge_co_jp__mst_Eoc_received_event_contents;
	var $tblinternet_at_urlounge_co_jp__mst_Eoc_received_events;
	var $tblinternet_at_urlounge_co_jp__mst_Eoc_takuhai_status;
	var $tblinternet_at_urlounge_co_jp__mst_Eoc_timeline_category;
	var $tblinternet_at_urlounge_co_jp__mst_exhibition_item_type;
	var $tblinternet_at_urlounge_co_jp__mst_Finish;
	var $tblinternet_at_urlounge_co_jp__mst_finish_terms;
	var $tblinternet_at_urlounge_co_jp__mst_freee_apportionment_rule_calc_bases;
	var $tblinternet_at_urlounge_co_jp__mst_freee_deal_status;
	var $tblinternet_at_urlounge_co_jp__mst_freee_deal_type;
	var $tblinternet_at_urlounge_co_jp__mst_freee_entry_side;
	var $tblinternet_at_urlounge_co_jp__mst_gold_of_bullion_merchants;
	var $tblinternet_at_urlounge_co_jp__mst_gold_of_bullion_merchants_price;
	var $tblinternet_at_urlounge_co_jp__mst_gold_property;
	var $tblinternet_at_urlounge_co_jp__mst_hahakai;
	var $tblinternet_at_urlounge_co_jp__mst_hall_mark;
	var $tblinternet_at_urlounge_co_jp__mst_handle;
	var $tblinternet_at_urlounge_co_jp__mst_heel;
	var $tblinternet_at_urlounge_co_jp__mst_ichiba_meeting;
	var $tblinternet_at_urlounge_co_jp__mst_Intensity;
	var $tblinternet_at_urlounge_co_jp__mst_item;
	var $tblinternet_at_urlounge_co_jp__mst_item_name;
	var $tblinternet_at_urlounge_co_jp__mst_item_name_report;
	var $tblinternet_at_urlounge_co_jp__mst_jewelry_conditions;
	var $tblinternet_at_urlounge_co_jp__mst_jigane_sheet;
	var $tblinternet_at_urlounge_co_jp__mst_journal_account_item;
	var $tblinternet_at_urlounge_co_jp__mst_journal_group;
	var $tblinternet_at_urlounge_co_jp__mst_journal_supplementary_subject;
	var $tblinternet_at_urlounge_co_jp__mst_label_layout;
	var $tblinternet_at_urlounge_co_jp__mst_label_replace;
	var $tblinternet_at_urlounge_co_jp__mst_length;
	var $tblinternet_at_urlounge_co_jp__mst_line;
	var $tblinternet_at_urlounge_co_jp__mst_mail_replace;
	var $tblinternet_at_urlounge_co_jp__mst_Material;
	var $tblinternet_at_urlounge_co_jp__mst_motif;
	var $tblinternet_at_urlounge_co_jp__mst_number_of_stones;
	var $tblinternet_at_urlounge_co_jp__mst_overtone;
	var $tblinternet_at_urlounge_co_jp__mst_price_zone;
	var $tblinternet_at_urlounge_co_jp__mst_processing;
	var $tblinternet_at_urlounge_co_jp__mst_producing_area;
	var $tblinternet_at_urlounge_co_jp__mst_quality;
	var $tblinternet_at_urlounge_co_jp__mst_rakuten_category;
	var $tblinternet_at_urlounge_co_jp__mst_reebonz_required;
	var $tblinternet_at_urlounge_co_jp__mst_refining_status;
	var $tblinternet_at_urlounge_co_jp__mst_Ring_size;
	var $tblinternet_at_urlounge_co_jp__mst_ritou;
	var $tblinternet_at_urlounge_co_jp__mst_royal_customer_status;
	var $tblinternet_at_urlounge_co_jp__mst_saisun_condition_details;
	var $tblinternet_at_urlounge_co_jp__mst_saisun_detailed_description;
	var $tblinternet_at_urlounge_co_jp__mst_saisun_item;
	var $tblinternet_at_urlounge_co_jp__mst_saisun_item_by_category;
	var $tblinternet_at_urlounge_co_jp__mst_saisun_manual;
	var $tblinternet_at_urlounge_co_jp__mst_saisun_model;
	var $tblinternet_at_urlounge_co_jp__mst_sales_discount;
	var $tblinternet_at_urlounge_co_jp__mst_satei_error;
	var $tblinternet_at_urlounge_co_jp__mst_satei_error_item;
	var $tblinternet_at_urlounge_co_jp__mst_Setting;
	var $tblinternet_at_urlounge_co_jp__mst_shape;
	var $tblinternet_at_urlounge_co_jp__mst_shops;
	var $tblinternet_at_urlounge_co_jp__mst_shouhin_column_name;
	var $tblinternet_at_urlounge_co_jp__mst_side_gem;
	var $tblinternet_at_urlounge_co_jp__mst_silhouette;
	var $tblinternet_at_urlounge_co_jp__mst_sleeve;
	var $tblinternet_at_urlounge_co_jp__mst_Sleeve_Length;
	var $tblinternet_at_urlounge_co_jp__mst_sorting_color_apart;
	var $tblinternet_at_urlounge_co_jp__mst_special_instructions;
	var $tblinternet_at_urlounge_co_jp__mst_toe;
	var $tblinternet_at_urlounge_co_jp__mst_unit;
	var $tblinternet_at_urlounge_co_jp__mst_wasabi;
	var $tblinternet_at_urlounge_co_jp__mst_wasabi_apparel_size;
	var $tblinternet_at_urlounge_co_jp__mst_wasabi_brand;
	var $tblinternet_at_urlounge_co_jp__mst_wasabi_shoe_size;
	var $tblinternet_at_urlounge_co_jp__mst_work_task_categories;
	var $tblinternet_at_urlounge_co_jp__mst_work_task_statuses;
	var $tblinternet_at_urlounge_co_jp__mst_ycbm_booking_status;
	var $tblinternet_at_urlounge_co_jp__mst_zipper;
	var $tblinternet_at_urlounge_co_jp__PMT_EV001;
	var $tblinternet_at_urlounge_co_jp__purchase_category_report;
	var $tblinternet_at_urlounge_co_jp__royal_customer;
	var $tblinternet_at_urlounge_co_jp__royal_customer_type;
	var $tblinternet_at_urlounge_co_jp__sagawa_api_error_details;
	var $tblinternet_at_urlounge_co_jp__sagawa_api_result_codes;
	var $tblinternet_at_urlounge_co_jp__sagawa_api_results;
	var $tblinternet_at_urlounge_co_jp__sagawa_sales_office;
	var $tblinternet_at_urlounge_co_jp__sales_report;
	var $tblinternet_at_urlounge_co_jp__satei_items;
	var $tblinternet_at_urlounge_co_jp__satei_items_rules;
	var $tblinternet_at_urlounge_co_jp__screenshots;
	var $tblinternet_at_urlounge_co_jp__seq;
	var $tblinternet_at_urlounge_co_jp__shomei_tbl;
	var $tblinternet_at_urlounge_co_jp__shop_front_details;
	var $tblinternet_at_urlounge_co_jp__shop_front_seiren_brands;
	var $tblinternet_at_urlounge_co_jp__shop_front_seiren_details;
	var $tblinternet_at_urlounge_co_jp__shop_reservations;
	var $tblinternet_at_urlounge_co_jp__shouhin;
	var $tblinternet_at_urlounge_co_jp__shouhin_batch;
	var $tblinternet_at_urlounge_co_jp__shouhin_group;
	var $tblinternet_at_urlounge_co_jp__shouhin_group_detail;
	var $tblinternet_at_urlounge_co_jp__shouhin_tax;
	var $tblinternet_at_urlounge_co_jp__store_categories;
	var $tblinternet_at_urlounge_co_jp__store_sub_categories;
	var $tblinternet_at_urlounge_co_jp__tb_gold_property_price;
	var $tblinternet_at_urlounge_co_jp__updated_Eoc_logs;
	var $tblinternet_at_urlounge_co_jp__user_label_output;
	var $tblinternet_at_urlounge_co_jp__users;
	var $tblinternet_at_urlounge_co_jp__users1;
	var $tblinternet_at_urlounge_co_jp__users_group_memberships;
	var $tblinternet_at_urlounge_co_jp__voice_sub;
	var $tblinternet_at_urlounge_co_jp__vw_box_csv;
	var $tblinternet_at_urlounge_co_jp__vw_cw_task_id;
	var $tblinternet_at_urlounge_co_jp__vw_Ehiden_kaitori;
	var $tblinternet_at_urlounge_co_jp__vw_Eoc_chigins_for_freee_import;
	var $tblinternet_at_urlounge_co_jp__vw_Eoc_chigins_summaray;
	var $tblinternet_at_urlounge_co_jp__vw_Eoc_mail_magazine;
	var $tblinternet_at_urlounge_co_jp__vw_Eoc_returned_items;
	var $tblinternet_at_urlounge_co_jp__vw_Eoc_takuhai_group_Eoc_chigins;
	var $tblinternet_at_urlounge_co_jp__vw_Eoc_takuhai_group_shouhin;
	var $tblinternet_at_urlounge_co_jp__vw_Eoc_takuhai_group_shouhin_awazu;
	var $tblinternet_at_urlounge_co_jp__vw_freee_account_category;
	var $tblinternet_at_urlounge_co_jp__vw_freee_deals_data;
	var $tblinternet_at_urlounge_co_jp__vw_freee_work_record_summaries_by_nendo;
	var $tblinternet_at_urlounge_co_jp__vw_hinbankaburi;
	var $tblinternet_at_urlounge_co_jp__vw_information_schema_for_mail;
	var $tblinternet_at_urlounge_co_jp__vw_jigane_taiki;
	var $tblinternet_at_urlounge_co_jp__vw_mst_brand2_add_all;
	var $tblinternet_at_urlounge_co_jp__vw_shouhin_column;
	var $tblinternet_at_urlounge_co_jp__vw_shouhin_ON_Eoc;
	var $tblinternet_at_urlounge_co_jp__vw_store_categories_add_all;
	var $tblinternet_at_urlounge_co_jp__vw_store_categories_for_saisun_group;
	var $tblinternet_at_urlounge_co_jp__vw_store_sub_categories_add_all;
	var $tblinternet_at_urlounge_co_jp__work_check_target_details;
	var $tblinternet_at_urlounge_co_jp__work_check_targets;
	var $tblinternet_at_urlounge_co_jp__work_tasks;
	var $tblinternet_at_urlounge_co_jp__ycbm_bookings;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "_chigin_result_type", "varname" => "internet_at_urlounge_co_jp___chigin_result_type", "altvarname" => "_chigin_result_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_chigin_type", "varname" => "internet_at_urlounge_co_jp___chigin_type", "altvarname" => "_chigin_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_APPRAISER", "varname" => "internet_at_urlounge_co_jp___DIA_DA_APPRAISER", "altvarname" => "_DIA_DA_APPRAISER", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_CLARITY", "varname" => "internet_at_urlounge_co_jp___DIA_DA_CLARITY", "altvarname" => "_DIA_DA_CLARITY", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_COLOR", "varname" => "internet_at_urlounge_co_jp___DIA_DA_COLOR", "altvarname" => "_DIA_DA_COLOR", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_CUSTOMER", "varname" => "internet_at_urlounge_co_jp___DIA_DA_CUSTOMER", "altvarname" => "_DIA_DA_CUSTOMER", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_CUT", "varname" => "internet_at_urlounge_co_jp___DIA_DA_CUT", "altvarname" => "_DIA_DA_CUT", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_FLUO", "varname" => "internet_at_urlounge_co_jp___DIA_DA_FLUO", "altvarname" => "_DIA_DA_FLUO", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_SHAPE", "varname" => "internet_at_urlounge_co_jp___DIA_DA_SHAPE", "altvarname" => "_DIA_DA_SHAPE", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_ST2", "varname" => "internet_at_urlounge_co_jp___DIA_DA_ST2", "altvarname" => "_DIA_DA_ST2", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_STATUS", "varname" => "internet_at_urlounge_co_jp___DIA_DA_STATUS", "altvarname" => "_DIA_DA_STATUS", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_DIA_DA_SUGARCANE", "varname" => "internet_at_urlounge_co_jp___DIA_DA_SUGARCANE", "altvarname" => "_DIA_DA_SUGARCANE", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_goods_status2", "varname" => "internet_at_urlounge_co_jp___goods_status2", "altvarname" => "_goods_status2", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_hentou_houhou_type", "varname" => "internet_at_urlounge_co_jp___hentou_houhou_type", "altvarname" => "_hentou_houhou_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_mail_check_type", "varname" => "internet_at_urlounge_co_jp___mail_check_type", "altvarname" => "_mail_check_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_mst_condition", "varname" => "internet_at_urlounge_co_jp___mst_condition", "altvarname" => "_mst_condition", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_pref", "varname" => "internet_at_urlounge_co_jp___pref", "altvarname" => "_pref", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_purchase_type", "varname" => "internet_at_urlounge_co_jp___purchase_type", "altvarname" => "_purchase_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_sex", "varname" => "internet_at_urlounge_co_jp___sex", "altvarname" => "_sex", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "_shokugyou", "varname" => "internet_at_urlounge_co_jp___shokugyou", "altvarname" => "_shokugyou", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "ad_params", "varname" => "internet_at_urlounge_co_jp__ad_params", "altvarname" => "ad_params", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "analysisMail_send_emails", "varname" => "internet_at_urlounge_co_jp__analysisMail_send_emails", "altvarname" => "analysisMail_send_emails", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "analysisMail_send_logs", "varname" => "internet_at_urlounge_co_jp__analysisMail_send_logs", "altvarname" => "analysisMail_send_logs", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "analysisMail_send_logs_bcc", "varname" => "internet_at_urlounge_co_jp__analysisMail_send_logs_bcc", "altvarname" => "analysisMail_send_logs_bcc", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "analysisMail_tags", "varname" => "internet_at_urlounge_co_jp__analysisMail_tags", "altvarname" => "analysisMail_tags", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "auctions", "varname" => "internet_at_urlounge_co_jp__auctions", "altvarname" => "auctions", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "box", "varname" => "internet_at_urlounge_co_jp__box", "altvarname" => "box", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "brand_price", "varname" => "internet_at_urlounge_co_jp__brand_price", "altvarname" => "brand_price", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "buy_campaign_data", "varname" => "internet_at_urlounge_co_jp__buy_campaign_data", "altvarname" => "buy_campaign_data", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "buy_campaign_data_detail", "varname" => "internet_at_urlounge_co_jp__buy_campaign_data_detail", "altvarname" => "buy_campaign_data_detail", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "buy_campaign_data_rules", "varname" => "internet_at_urlounge_co_jp__buy_campaign_data_rules", "altvarname" => "buy_campaign_data_rules", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "chohyo", "varname" => "internet_at_urlounge_co_jp__chohyo", "altvarname" => "chohyo", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "DIA_QR_reading", "varname" => "internet_at_urlounge_co_jp__DIA_QR_reading", "altvarname" => "DIA_QR_reading", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc", "varname" => "internet_at_urlounge_co_jp__Eoc", "altvarname" => "Eoc", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_area", "varname" => "internet_at_urlounge_co_jp__Eoc_area", "altvarname" => "Eoc_area", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_chigins", "varname" => "internet_at_urlounge_co_jp__Eoc_chigins", "altvarname" => "Eoc_chigins", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_chigins2", "varname" => "internet_at_urlounge_co_jp__Eoc_chigins2", "altvarname" => "Eoc_chigins2", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_chigins_unfinished", "varname" => "internet_at_urlounge_co_jp__Eoc_chigins_unfinished", "altvarname" => "Eoc_chigins_unfinished", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_guestquestion", "varname" => "internet_at_urlounge_co_jp__Eoc_guestquestion", "altvarname" => "Eoc_guestquestion", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_inventory", "varname" => "internet_at_urlounge_co_jp__Eoc_inventory", "altvarname" => "Eoc_inventory", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_inventory_item", "varname" => "internet_at_urlounge_co_jp__Eoc_inventory_item", "altvarname" => "Eoc_inventory_item", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_inventory_weekly", "varname" => "internet_at_urlounge_co_jp__Eoc_inventory_weekly", "altvarname" => "Eoc_inventory_weekly", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_monthly_reports", "varname" => "internet_at_urlounge_co_jp__Eoc_monthly_reports", "altvarname" => "Eoc_monthly_reports", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_monthly_reports_by_prefectures", "varname" => "internet_at_urlounge_co_jp__Eoc_monthly_reports_by_prefectures", "altvarname" => "Eoc_monthly_reports_by_prefectures", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_received", "varname" => "internet_at_urlounge_co_jp__Eoc_received", "altvarname" => "Eoc_received", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_received_events", "varname" => "internet_at_urlounge_co_jp__Eoc_received_events", "altvarname" => "Eoc_received_events", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_refining", "varname" => "internet_at_urlounge_co_jp__Eoc_refining", "altvarname" => "Eoc_refining", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_refining_item", "varname" => "internet_at_urlounge_co_jp__Eoc_refining_item", "altvarname" => "Eoc_refining_item", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_refining_v1", "varname" => "internet_at_urlounge_co_jp__Eoc_refining_v1", "altvarname" => "Eoc_refining_v1", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_takuhai", "varname" => "internet_at_urlounge_co_jp__Eoc_takuhai", "altvarname" => "Eoc_takuhai", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_takuhai_error", "varname" => "internet_at_urlounge_co_jp__Eoc_takuhai_error", "altvarname" => "Eoc_takuhai_error", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_takuhai_events", "varname" => "internet_at_urlounge_co_jp__Eoc_takuhai_events", "altvarname" => "Eoc_takuhai_events", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_takuhai_return", "varname" => "internet_at_urlounge_co_jp__Eoc_takuhai_return", "altvarname" => "Eoc_takuhai_return", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_takuhai_return_items", "varname" => "internet_at_urlounge_co_jp__Eoc_takuhai_return_items", "altvarname" => "Eoc_takuhai_return_items", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_timeline", "varname" => "internet_at_urlounge_co_jp__Eoc_timeline", "altvarname" => "Eoc_timeline", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_trader", "varname" => "internet_at_urlounge_co_jp__Eoc_trader", "altvarname" => "Eoc_trader", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "Eoc_unfinished", "varname" => "internet_at_urlounge_co_jp__Eoc_unfinished", "altvarname" => "Eoc_unfinished", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "evashop5uggroups", "varname" => "internet_at_urlounge_co_jp__evashop5uggroups", "altvarname" => "evashop5uggroups", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "evashop5ugmembers", "varname" => "internet_at_urlounge_co_jp__evashop5ugmembers", "altvarname" => "evashop5ugmembers", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "evashop5ugrights", "varname" => "internet_at_urlounge_co_jp__evashop5ugrights", "altvarname" => "evashop5ugrights", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "evav62122_audit", "varname" => "internet_at_urlounge_co_jp__evav62122_audit", "altvarname" => "evav62122_audit", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_account_categories_revenue", "varname" => "internet_at_urlounge_co_jp__freee_account_categories_revenue", "altvarname" => "freee_account_categories_revenue", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_account_items", "varname" => "internet_at_urlounge_co_jp__freee_account_items", "altvarname" => "freee_account_items", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_apportionment_rule_detail", "varname" => "internet_at_urlounge_co_jp__freee_apportionment_rule_detail", "altvarname" => "freee_apportionment_rule_detail", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_apportionment_rules", "varname" => "internet_at_urlounge_co_jp__freee_apportionment_rules", "altvarname" => "freee_apportionment_rules", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_deal_detail__memotag", "varname" => "internet_at_urlounge_co_jp__freee_deal_detail__memotag", "altvarname" => "freee_deal_detail__memotag", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_deal_details", "varname" => "internet_at_urlounge_co_jp__freee_deal_details", "altvarname" => "freee_deal_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_deal_join_manual_journal__detail__memotag", "varname" => "internet_at_urlounge_co_jp__freee_deal_join_manual_journal__detail__memotag", "altvarname" => "freee_deal_join_manual_journal__detail__memotag", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_deal_join_manual_journal__details", "varname" => "internet_at_urlounge_co_jp__freee_deal_join_manual_journal__details", "altvarname" => "freee_deal_join_manual_journal__details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_deals", "varname" => "internet_at_urlounge_co_jp__freee_deals", "altvarname" => "freee_deals", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_employees", "varname" => "internet_at_urlounge_co_jp__freee_employees", "altvarname" => "freee_employees", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_employees_details", "varname" => "internet_at_urlounge_co_jp__freee_employees_details", "altvarname" => "freee_employees_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_expense_categories", "varname" => "internet_at_urlounge_co_jp__freee_expense_categories", "altvarname" => "freee_expense_categories", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_in_house_sales", "varname" => "internet_at_urlounge_co_jp__freee_in_house_sales", "altvarname" => "freee_in_house_sales", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_inventory_details", "varname" => "internet_at_urlounge_co_jp__freee_inventory_details", "altvarname" => "freee_inventory_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_items", "varname" => "internet_at_urlounge_co_jp__freee_items", "altvarname" => "freee_items", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_manual_journal_details", "varname" => "internet_at_urlounge_co_jp__freee_manual_journal_details", "altvarname" => "freee_manual_journal_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_manual_journals", "varname" => "internet_at_urlounge_co_jp__freee_manual_journals", "altvarname" => "freee_manual_journals", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_memotags", "varname" => "internet_at_urlounge_co_jp__freee_memotags", "altvarname" => "freee_memotags", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_partners", "varname" => "internet_at_urlounge_co_jp__freee_partners", "altvarname" => "freee_partners", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_PLBS_by_day", "varname" => "internet_at_urlounge_co_jp__freee_PLBS_by_day", "altvarname" => "freee_PLBS_by_day", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_PLBS_by_day_details", "varname" => "internet_at_urlounge_co_jp__freee_PLBS_by_day_details", "altvarname" => "freee_PLBS_by_day_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_PLBS_by_year", "varname" => "internet_at_urlounge_co_jp__freee_PLBS_by_year", "altvarname" => "freee_PLBS_by_year", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_PLBS_details", "varname" => "internet_at_urlounge_co_jp__freee_PLBS_details", "altvarname" => "freee_PLBS_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_saisan_goals", "varname" => "internet_at_urlounge_co_jp__freee_saisan_goals", "altvarname" => "freee_saisan_goals", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_saisan_rule_details", "varname" => "internet_at_urlounge_co_jp__freee_saisan_rule_details", "altvarname" => "freee_saisan_rule_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_saisan_rules", "varname" => "internet_at_urlounge_co_jp__freee_saisan_rules", "altvarname" => "freee_saisan_rules", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_saisanhyou", "varname" => "internet_at_urlounge_co_jp__freee_saisanhyou", "altvarname" => "freee_saisanhyou", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_saisanhyou_check_logs", "varname" => "internet_at_urlounge_co_jp__freee_saisanhyou_check_logs", "altvarname" => "freee_saisanhyou_check_logs", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_sections", "varname" => "internet_at_urlounge_co_jp__freee_sections", "altvarname" => "freee_sections", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_taxes", "varname" => "internet_at_urlounge_co_jp__freee_taxes", "altvarname" => "freee_taxes", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_work_record_summaries", "varname" => "internet_at_urlounge_co_jp__freee_work_record_summaries", "altvarname" => "freee_work_record_summaries", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_work_records", "varname" => "internet_at_urlounge_co_jp__freee_work_records", "altvarname" => "freee_work_records", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "freee_work_records_by_term", "varname" => "internet_at_urlounge_co_jp__freee_work_records_by_term", "altvarname" => "freee_work_records_by_term", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "from_mail_tbl", "varname" => "internet_at_urlounge_co_jp__from_mail_tbl", "altvarname" => "from_mail_tbl", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "gold_check", "varname" => "internet_at_urlounge_co_jp__gold_check", "altvarname" => "gold_check", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "gold_check_item", "varname" => "internet_at_urlounge_co_jp__gold_check_item", "altvarname" => "gold_check_item", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "goods_num_seaquence", "varname" => "internet_at_urlounge_co_jp__goods_num_seaquence", "altvarname" => "goods_num_seaquence", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "haraidasi", "varname" => "internet_at_urlounge_co_jp__haraidasi", "altvarname" => "haraidasi", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "ichiba_exhibition", "varname" => "internet_at_urlounge_co_jp__ichiba_exhibition", "altvarname" => "ichiba_exhibition", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "id_key", "varname" => "internet_at_urlounge_co_jp__id_key", "altvarname" => "id_key", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "kataban_price", "varname" => "internet_at_urlounge_co_jp__kataban_price", "altvarname" => "kataban_price", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "KEN_ALL", "varname" => "internet_at_urlounge_co_jp__KEN_ALL", "altvarname" => "KEN_ALL", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "laravel_users", "varname" => "internet_at_urlounge_co_jp__laravel_users", "altvarname" => "laravel_users", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "line_report", "varname" => "internet_at_urlounge_co_jp__line_report", "altvarname" => "line_report", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "lounge_report__buy_takuhai", "varname" => "internet_at_urlounge_co_jp__lounge_report__buy_takuhai", "altvarname" => "lounge_report__buy_takuhai", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mail_data_tbl", "varname" => "internet_at_urlounge_co_jp__mail_data_tbl", "altvarname" => "mail_data_tbl", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mail_data_tbl_category", "varname" => "internet_at_urlounge_co_jp__mail_data_tbl_category", "altvarname" => "mail_data_tbl_category", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mail_data_tbl_sub_category", "varname" => "internet_at_urlounge_co_jp__mail_data_tbl_sub_category", "altvarname" => "mail_data_tbl_sub_category", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mail_data_tbl_template", "varname" => "internet_at_urlounge_co_jp__mail_data_tbl_template", "altvarname" => "mail_data_tbl_template", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mailsystem_send_schedule", "varname" => "internet_at_urlounge_co_jp__mailsystem_send_schedule", "altvarname" => "mailsystem_send_schedule", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "market_product_performance_original", "varname" => "internet_at_urlounge_co_jp__market_product_performance_original", "altvarname" => "market_product_performance_original", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_accessories", "varname" => "internet_at_urlounge_co_jp__mst_accessories", "altvarname" => "mst_accessories", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_amount", "varname" => "internet_at_urlounge_co_jp__mst_amount", "altvarname" => "mst_amount", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_analysisMail_contents", "varname" => "internet_at_urlounge_co_jp__mst_analysisMail_contents", "altvarname" => "mst_analysisMail_contents", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_analysisMail_fromaddress", "varname" => "internet_at_urlounge_co_jp__mst_analysisMail_fromaddress", "altvarname" => "mst_analysisMail_fromaddress", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_analysisMail_send_categories", "varname" => "internet_at_urlounge_co_jp__mst_analysisMail_send_categories", "altvarname" => "mst_analysisMail_send_categories", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_analysisMail_send_groups", "varname" => "internet_at_urlounge_co_jp__mst_analysisMail_send_groups", "altvarname" => "mst_analysisMail_send_groups", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_analysisMail_send_targets", "varname" => "internet_at_urlounge_co_jp__mst_analysisMail_send_targets", "altvarname" => "mst_analysisMail_send_targets", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_analysisMail_shomei", "varname" => "internet_at_urlounge_co_jp__mst_analysisMail_shomei", "altvarname" => "mst_analysisMail_shomei", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_analysisMail_status", "varname" => "internet_at_urlounge_co_jp__mst_analysisMail_status", "altvarname" => "mst_analysisMail_status", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_analysisMail_tags", "varname" => "internet_at_urlounge_co_jp__mst_analysisMail_tags", "altvarname" => "mst_analysisMail_tags", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Appraiser", "varname" => "internet_at_urlounge_co_jp__mst_Appraiser", "altvarname" => "mst_Appraiser", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_area", "varname" => "internet_at_urlounge_co_jp__mst_area", "altvarname" => "mst_area", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_ban_word", "varname" => "internet_at_urlounge_co_jp__mst_ban_word", "altvarname" => "mst_ban_word", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_bank", "varname" => "internet_at_urlounge_co_jp__mst_bank", "altvarname" => "mst_bank", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_brand", "varname" => "internet_at_urlounge_co_jp__mst_brand", "altvarname" => "mst_brand", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_brand2", "varname" => "internet_at_urlounge_co_jp__mst_brand2", "altvarname" => "mst_brand2", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_brand_color", "varname" => "internet_at_urlounge_co_jp__mst_brand_color", "altvarname" => "mst_brand_color", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_brand_report", "varname" => "internet_at_urlounge_co_jp__mst_brand_report", "altvarname" => "mst_brand_report", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_breast", "varname" => "internet_at_urlounge_co_jp__mst_breast", "altvarname" => "mst_breast", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_bullion_dealer", "varname" => "internet_at_urlounge_co_jp__mst_bullion_dealer", "altvarname" => "mst_bullion_dealer", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_bullion_type", "varname" => "internet_at_urlounge_co_jp__mst_bullion_type", "altvarname" => "mst_bullion_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_business_partner", "varname" => "internet_at_urlounge_co_jp__mst_business_partner", "altvarname" => "mst_business_partner", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_category_class", "varname" => "internet_at_urlounge_co_jp__mst_category_class", "altvarname" => "mst_category_class", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_chain_type", "varname" => "internet_at_urlounge_co_jp__mst_chain_type", "altvarname" => "mst_chain_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_chohyo_type", "varname" => "internet_at_urlounge_co_jp__mst_chohyo_type", "altvarname" => "mst_chohyo_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_cloth", "varname" => "internet_at_urlounge_co_jp__mst_cloth", "altvarname" => "mst_cloth", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_collar_neck_line", "varname" => "internet_at_urlounge_co_jp__mst_collar_neck_line", "altvarname" => "mst_collar_neck_line", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_color", "varname" => "internet_at_urlounge_co_jp__mst_color", "altvarname" => "mst_color", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_color_code", "varname" => "internet_at_urlounge_co_jp__mst_color_code", "altvarname" => "mst_color_code", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_color_fluo", "varname" => "internet_at_urlounge_co_jp__mst_color_fluo", "altvarname" => "mst_color_fluo", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_colorstone", "varname" => "internet_at_urlounge_co_jp__mst_colorstone", "altvarname" => "mst_colorstone", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_condition_details", "varname" => "internet_at_urlounge_co_jp__mst_condition_details", "altvarname" => "mst_condition_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_cost_category", "varname" => "internet_at_urlounge_co_jp__mst_cost_category", "altvarname" => "mst_cost_category", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_country_of_origin", "varname" => "internet_at_urlounge_co_jp__mst_country_of_origin", "altvarname" => "mst_country_of_origin", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_cutting_style", "varname" => "internet_at_urlounge_co_jp__mst_cutting_style", "altvarname" => "mst_cutting_style", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_DA_POLISH", "varname" => "internet_at_urlounge_co_jp__mst_DA_POLISH", "altvarname" => "mst_DA_POLISH", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_DA_SYMMETRY", "varname" => "internet_at_urlounge_co_jp__mst_DA_SYMMETRY", "altvarname" => "mst_DA_SYMMETRY", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_delivery_type", "varname" => "internet_at_urlounge_co_jp__mst_delivery_type", "altvarname" => "mst_delivery_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_dept_group", "varname" => "internet_at_urlounge_co_jp__mst_dept_group", "altvarname" => "mst_dept_group", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_dept_group_categories", "varname" => "internet_at_urlounge_co_jp__mst_dept_group_categories", "altvarname" => "mst_dept_group_categories", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_designer", "varname" => "internet_at_urlounge_co_jp__mst_designer", "altvarname" => "mst_designer", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_destination", "varname" => "internet_at_urlounge_co_jp__mst_destination", "altvarname" => "mst_destination", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Destination_selling", "varname" => "internet_at_urlounge_co_jp__mst_Destination_selling", "altvarname" => "mst_Destination_selling", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_dia", "varname" => "internet_at_urlounge_co_jp__mst_dia", "altvarname" => "mst_dia", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Discrimination", "varname" => "internet_at_urlounge_co_jp__mst_Discrimination", "altvarname" => "mst_Discrimination", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_ebay_price", "varname" => "internet_at_urlounge_co_jp__mst_ebay_price", "altvarname" => "mst_ebay_price", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_effect", "varname" => "internet_at_urlounge_co_jp__mst_effect", "altvarname" => "mst_effect", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Eoc_received_event_contents", "varname" => "internet_at_urlounge_co_jp__mst_Eoc_received_event_contents", "altvarname" => "mst_Eoc_received_event_contents", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Eoc_received_events", "varname" => "internet_at_urlounge_co_jp__mst_Eoc_received_events", "altvarname" => "mst_Eoc_received_events", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Eoc_takuhai_status", "varname" => "internet_at_urlounge_co_jp__mst_Eoc_takuhai_status", "altvarname" => "mst_Eoc_takuhai_status", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Eoc_timeline_category", "varname" => "internet_at_urlounge_co_jp__mst_Eoc_timeline_category", "altvarname" => "mst_Eoc_timeline_category", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_exhibition_item_type", "varname" => "internet_at_urlounge_co_jp__mst_exhibition_item_type", "altvarname" => "mst_exhibition_item_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Finish", "varname" => "internet_at_urlounge_co_jp__mst_Finish", "altvarname" => "mst_Finish", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_finish_terms", "varname" => "internet_at_urlounge_co_jp__mst_finish_terms", "altvarname" => "mst_finish_terms", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_freee_apportionment_rule_calc_bases", "varname" => "internet_at_urlounge_co_jp__mst_freee_apportionment_rule_calc_bases", "altvarname" => "mst_freee_apportionment_rule_calc_bases", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_freee_deal_status", "varname" => "internet_at_urlounge_co_jp__mst_freee_deal_status", "altvarname" => "mst_freee_deal_status", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_freee_deal_type", "varname" => "internet_at_urlounge_co_jp__mst_freee_deal_type", "altvarname" => "mst_freee_deal_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_freee_entry_side", "varname" => "internet_at_urlounge_co_jp__mst_freee_entry_side", "altvarname" => "mst_freee_entry_side", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_gold_of_bullion_merchants", "varname" => "internet_at_urlounge_co_jp__mst_gold_of_bullion_merchants", "altvarname" => "mst_gold_of_bullion_merchants", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_gold_of_bullion_merchants_price", "varname" => "internet_at_urlounge_co_jp__mst_gold_of_bullion_merchants_price", "altvarname" => "mst_gold_of_bullion_merchants_price", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_gold_property", "varname" => "internet_at_urlounge_co_jp__mst_gold_property", "altvarname" => "mst_gold_property", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_hahakai", "varname" => "internet_at_urlounge_co_jp__mst_hahakai", "altvarname" => "mst_hahakai", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_hall_mark", "varname" => "internet_at_urlounge_co_jp__mst_hall_mark", "altvarname" => "mst_hall_mark", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_handle", "varname" => "internet_at_urlounge_co_jp__mst_handle", "altvarname" => "mst_handle", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_heel", "varname" => "internet_at_urlounge_co_jp__mst_heel", "altvarname" => "mst_heel", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_ichiba_meeting", "varname" => "internet_at_urlounge_co_jp__mst_ichiba_meeting", "altvarname" => "mst_ichiba_meeting", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Intensity", "varname" => "internet_at_urlounge_co_jp__mst_Intensity", "altvarname" => "mst_Intensity", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_item", "varname" => "internet_at_urlounge_co_jp__mst_item", "altvarname" => "mst_item", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_item_name", "varname" => "internet_at_urlounge_co_jp__mst_item_name", "altvarname" => "mst_item_name", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_item_name_report", "varname" => "internet_at_urlounge_co_jp__mst_item_name_report", "altvarname" => "mst_item_name_report", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_jewelry_conditions", "varname" => "internet_at_urlounge_co_jp__mst_jewelry_conditions", "altvarname" => "mst_jewelry_conditions", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_jigane_sheet", "varname" => "internet_at_urlounge_co_jp__mst_jigane_sheet", "altvarname" => "mst_jigane_sheet", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_journal_account_item", "varname" => "internet_at_urlounge_co_jp__mst_journal_account_item", "altvarname" => "mst_journal_account_item", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_journal_group", "varname" => "internet_at_urlounge_co_jp__mst_journal_group", "altvarname" => "mst_journal_group", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_journal_supplementary_subject", "varname" => "internet_at_urlounge_co_jp__mst_journal_supplementary_subject", "altvarname" => "mst_journal_supplementary_subject", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_label_layout", "varname" => "internet_at_urlounge_co_jp__mst_label_layout", "altvarname" => "mst_label_layout", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_label_replace", "varname" => "internet_at_urlounge_co_jp__mst_label_replace", "altvarname" => "mst_label_replace", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_length", "varname" => "internet_at_urlounge_co_jp__mst_length", "altvarname" => "mst_length", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_line", "varname" => "internet_at_urlounge_co_jp__mst_line", "altvarname" => "mst_line", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_mail_replace", "varname" => "internet_at_urlounge_co_jp__mst_mail_replace", "altvarname" => "mst_mail_replace", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Material", "varname" => "internet_at_urlounge_co_jp__mst_Material", "altvarname" => "mst_Material", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_motif", "varname" => "internet_at_urlounge_co_jp__mst_motif", "altvarname" => "mst_motif", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_number_of_stones", "varname" => "internet_at_urlounge_co_jp__mst_number_of_stones", "altvarname" => "mst_number_of_stones", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_overtone", "varname" => "internet_at_urlounge_co_jp__mst_overtone", "altvarname" => "mst_overtone", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_price_zone", "varname" => "internet_at_urlounge_co_jp__mst_price_zone", "altvarname" => "mst_price_zone", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_processing", "varname" => "internet_at_urlounge_co_jp__mst_processing", "altvarname" => "mst_processing", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_producing_area", "varname" => "internet_at_urlounge_co_jp__mst_producing_area", "altvarname" => "mst_producing_area", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_quality", "varname" => "internet_at_urlounge_co_jp__mst_quality", "altvarname" => "mst_quality", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_rakuten_category", "varname" => "internet_at_urlounge_co_jp__mst_rakuten_category", "altvarname" => "mst_rakuten_category", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_reebonz_required", "varname" => "internet_at_urlounge_co_jp__mst_reebonz_required", "altvarname" => "mst_reebonz_required", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_refining_status", "varname" => "internet_at_urlounge_co_jp__mst_refining_status", "altvarname" => "mst_refining_status", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Ring_size", "varname" => "internet_at_urlounge_co_jp__mst_Ring_size", "altvarname" => "mst_Ring_size", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_ritou", "varname" => "internet_at_urlounge_co_jp__mst_ritou", "altvarname" => "mst_ritou", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_royal_customer_status", "varname" => "internet_at_urlounge_co_jp__mst_royal_customer_status", "altvarname" => "mst_royal_customer_status", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_saisun_condition_details", "varname" => "internet_at_urlounge_co_jp__mst_saisun_condition_details", "altvarname" => "mst_saisun_condition_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_saisun_detailed_description", "varname" => "internet_at_urlounge_co_jp__mst_saisun_detailed_description", "altvarname" => "mst_saisun_detailed_description", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_saisun_item", "varname" => "internet_at_urlounge_co_jp__mst_saisun_item", "altvarname" => "mst_saisun_item", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_saisun_item_by_category", "varname" => "internet_at_urlounge_co_jp__mst_saisun_item_by_category", "altvarname" => "mst_saisun_item_by_category", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_saisun_manual", "varname" => "internet_at_urlounge_co_jp__mst_saisun_manual", "altvarname" => "mst_saisun_manual", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_saisun_model", "varname" => "internet_at_urlounge_co_jp__mst_saisun_model", "altvarname" => "mst_saisun_model", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_sales_discount", "varname" => "internet_at_urlounge_co_jp__mst_sales_discount", "altvarname" => "mst_sales_discount", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_satei_error", "varname" => "internet_at_urlounge_co_jp__mst_satei_error", "altvarname" => "mst_satei_error", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_satei_error_item", "varname" => "internet_at_urlounge_co_jp__mst_satei_error_item", "altvarname" => "mst_satei_error_item", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Setting", "varname" => "internet_at_urlounge_co_jp__mst_Setting", "altvarname" => "mst_Setting", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_shape", "varname" => "internet_at_urlounge_co_jp__mst_shape", "altvarname" => "mst_shape", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_shops", "varname" => "internet_at_urlounge_co_jp__mst_shops", "altvarname" => "mst_shops", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_shouhin_column_name", "varname" => "internet_at_urlounge_co_jp__mst_shouhin_column_name", "altvarname" => "mst_shouhin_column_name", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_side_gem", "varname" => "internet_at_urlounge_co_jp__mst_side_gem", "altvarname" => "mst_side_gem", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_silhouette", "varname" => "internet_at_urlounge_co_jp__mst_silhouette", "altvarname" => "mst_silhouette", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_sleeve", "varname" => "internet_at_urlounge_co_jp__mst_sleeve", "altvarname" => "mst_sleeve", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_Sleeve_Length", "varname" => "internet_at_urlounge_co_jp__mst_Sleeve_Length", "altvarname" => "mst_Sleeve_Length", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_sorting_color_apart", "varname" => "internet_at_urlounge_co_jp__mst_sorting_color_apart", "altvarname" => "mst_sorting_color_apart", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_special_instructions", "varname" => "internet_at_urlounge_co_jp__mst_special_instructions", "altvarname" => "mst_special_instructions", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_toe", "varname" => "internet_at_urlounge_co_jp__mst_toe", "altvarname" => "mst_toe", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_unit", "varname" => "internet_at_urlounge_co_jp__mst_unit", "altvarname" => "mst_unit", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_wasabi", "varname" => "internet_at_urlounge_co_jp__mst_wasabi", "altvarname" => "mst_wasabi", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_wasabi_apparel_size", "varname" => "internet_at_urlounge_co_jp__mst_wasabi_apparel_size", "altvarname" => "mst_wasabi_apparel_size", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_wasabi_brand", "varname" => "internet_at_urlounge_co_jp__mst_wasabi_brand", "altvarname" => "mst_wasabi_brand", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_wasabi_shoe_size", "varname" => "internet_at_urlounge_co_jp__mst_wasabi_shoe_size", "altvarname" => "mst_wasabi_shoe_size", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_work_task_categories", "varname" => "internet_at_urlounge_co_jp__mst_work_task_categories", "altvarname" => "mst_work_task_categories", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_work_task_statuses", "varname" => "internet_at_urlounge_co_jp__mst_work_task_statuses", "altvarname" => "mst_work_task_statuses", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_ycbm_booking_status", "varname" => "internet_at_urlounge_co_jp__mst_ycbm_booking_status", "altvarname" => "mst_ycbm_booking_status", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "mst_zipper", "varname" => "internet_at_urlounge_co_jp__mst_zipper", "altvarname" => "mst_zipper", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "PMT_EV001", "varname" => "internet_at_urlounge_co_jp__PMT_EV001", "altvarname" => "PMT_EV001", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "purchase_category_report", "varname" => "internet_at_urlounge_co_jp__purchase_category_report", "altvarname" => "purchase_category_report", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "royal_customer", "varname" => "internet_at_urlounge_co_jp__royal_customer", "altvarname" => "royal_customer", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "royal_customer_type", "varname" => "internet_at_urlounge_co_jp__royal_customer_type", "altvarname" => "royal_customer_type", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "sagawa_api_error_details", "varname" => "internet_at_urlounge_co_jp__sagawa_api_error_details", "altvarname" => "sagawa_api_error_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "sagawa_api_result_codes", "varname" => "internet_at_urlounge_co_jp__sagawa_api_result_codes", "altvarname" => "sagawa_api_result_codes", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "sagawa_api_results", "varname" => "internet_at_urlounge_co_jp__sagawa_api_results", "altvarname" => "sagawa_api_results", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "sagawa_sales_office", "varname" => "internet_at_urlounge_co_jp__sagawa_sales_office", "altvarname" => "sagawa_sales_office", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "sales_report", "varname" => "internet_at_urlounge_co_jp__sales_report", "altvarname" => "sales_report", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "satei_items", "varname" => "internet_at_urlounge_co_jp__satei_items", "altvarname" => "satei_items", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "satei_items_rules", "varname" => "internet_at_urlounge_co_jp__satei_items_rules", "altvarname" => "satei_items_rules", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "screenshots", "varname" => "internet_at_urlounge_co_jp__screenshots", "altvarname" => "screenshots", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "seq", "varname" => "internet_at_urlounge_co_jp__seq", "altvarname" => "seq", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shomei_tbl", "varname" => "internet_at_urlounge_co_jp__shomei_tbl", "altvarname" => "shomei_tbl", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shop_front_details", "varname" => "internet_at_urlounge_co_jp__shop_front_details", "altvarname" => "shop_front_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shop_front_seiren_brands", "varname" => "internet_at_urlounge_co_jp__shop_front_seiren_brands", "altvarname" => "shop_front_seiren_brands", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shop_front_seiren_details", "varname" => "internet_at_urlounge_co_jp__shop_front_seiren_details", "altvarname" => "shop_front_seiren_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shop_reservations", "varname" => "internet_at_urlounge_co_jp__shop_reservations", "altvarname" => "shop_reservations", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shouhin", "varname" => "internet_at_urlounge_co_jp__shouhin", "altvarname" => "shouhin", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shouhin_batch", "varname" => "internet_at_urlounge_co_jp__shouhin_batch", "altvarname" => "shouhin_batch", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shouhin_group", "varname" => "internet_at_urlounge_co_jp__shouhin_group", "altvarname" => "shouhin_group", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shouhin_group_detail", "varname" => "internet_at_urlounge_co_jp__shouhin_group_detail", "altvarname" => "shouhin_group_detail", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "shouhin_tax", "varname" => "internet_at_urlounge_co_jp__shouhin_tax", "altvarname" => "shouhin_tax", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "store_categories", "varname" => "internet_at_urlounge_co_jp__store_categories", "altvarname" => "store_categories", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "store_sub_categories", "varname" => "internet_at_urlounge_co_jp__store_sub_categories", "altvarname" => "store_sub_categories", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "tb_gold_property_price", "varname" => "internet_at_urlounge_co_jp__tb_gold_property_price", "altvarname" => "tb_gold_property_price", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "updated_Eoc_logs", "varname" => "internet_at_urlounge_co_jp__updated_Eoc_logs", "altvarname" => "updated_Eoc_logs", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "user_label_output", "varname" => "internet_at_urlounge_co_jp__user_label_output", "altvarname" => "user_label_output", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "users", "varname" => "internet_at_urlounge_co_jp__users", "altvarname" => "users", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "users1", "varname" => "internet_at_urlounge_co_jp__users1", "altvarname" => "users1", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "users_group_memberships", "varname" => "internet_at_urlounge_co_jp__users_group_memberships", "altvarname" => "users_group_memberships", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "voice_sub", "varname" => "internet_at_urlounge_co_jp__voice_sub", "altvarname" => "voice_sub", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_box_csv", "varname" => "internet_at_urlounge_co_jp__vw_box_csv", "altvarname" => "vw_box_csv", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_cw_task_id", "varname" => "internet_at_urlounge_co_jp__vw_cw_task_id", "altvarname" => "vw_cw_task_id", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_Ehiden_kaitori", "varname" => "internet_at_urlounge_co_jp__vw_Ehiden_kaitori", "altvarname" => "vw_Ehiden_kaitori", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_Eoc_chigins_for_freee_import", "varname" => "internet_at_urlounge_co_jp__vw_Eoc_chigins_for_freee_import", "altvarname" => "vw_Eoc_chigins_for_freee_import", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_Eoc_chigins_summaray", "varname" => "internet_at_urlounge_co_jp__vw_Eoc_chigins_summaray", "altvarname" => "vw_Eoc_chigins_summaray", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_Eoc_mail_magazine", "varname" => "internet_at_urlounge_co_jp__vw_Eoc_mail_magazine", "altvarname" => "vw_Eoc_mail_magazine", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_Eoc_returned_items", "varname" => "internet_at_urlounge_co_jp__vw_Eoc_returned_items", "altvarname" => "vw_Eoc_returned_items", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_Eoc_takuhai_group_Eoc_chigins", "varname" => "internet_at_urlounge_co_jp__vw_Eoc_takuhai_group_Eoc_chigins", "altvarname" => "vw_Eoc_takuhai_group_Eoc_chigins", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_Eoc_takuhai_group_shouhin", "varname" => "internet_at_urlounge_co_jp__vw_Eoc_takuhai_group_shouhin", "altvarname" => "vw_Eoc_takuhai_group_shouhin", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_Eoc_takuhai_group_shouhin_awazu", "varname" => "internet_at_urlounge_co_jp__vw_Eoc_takuhai_group_shouhin_awazu", "altvarname" => "vw_Eoc_takuhai_group_shouhin_awazu", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_freee_account_category", "varname" => "internet_at_urlounge_co_jp__vw_freee_account_category", "altvarname" => "vw_freee_account_category", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_freee_deals_data", "varname" => "internet_at_urlounge_co_jp__vw_freee_deals_data", "altvarname" => "vw_freee_deals_data", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_freee_work_record_summaries_by_nendo", "varname" => "internet_at_urlounge_co_jp__vw_freee_work_record_summaries_by_nendo", "altvarname" => "vw_freee_work_record_summaries_by_nendo", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_hinbankaburi", "varname" => "internet_at_urlounge_co_jp__vw_hinbankaburi", "altvarname" => "vw_hinbankaburi", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_information_schema_for_mail", "varname" => "internet_at_urlounge_co_jp__vw_information_schema_for_mail", "altvarname" => "vw_information_schema_for_mail", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_jigane_taiki", "varname" => "internet_at_urlounge_co_jp__vw_jigane_taiki", "altvarname" => "vw_jigane_taiki", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_mst_brand2_add_all", "varname" => "internet_at_urlounge_co_jp__vw_mst_brand2_add_all", "altvarname" => "vw_mst_brand2_add_all", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_shouhin_column", "varname" => "internet_at_urlounge_co_jp__vw_shouhin_column", "altvarname" => "vw_shouhin_column", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_shouhin_ON_Eoc", "varname" => "internet_at_urlounge_co_jp__vw_shouhin_ON_Eoc", "altvarname" => "vw_shouhin_ON_Eoc", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_store_categories_add_all", "varname" => "internet_at_urlounge_co_jp__vw_store_categories_add_all", "altvarname" => "vw_store_categories_add_all", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_store_categories_for_saisun_group", "varname" => "internet_at_urlounge_co_jp__vw_store_categories_for_saisun_group", "altvarname" => "vw_store_categories_for_saisun_group", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "vw_store_sub_categories_add_all", "varname" => "internet_at_urlounge_co_jp__vw_store_sub_categories_add_all", "altvarname" => "vw_store_sub_categories_add_all", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "work_check_target_details", "varname" => "internet_at_urlounge_co_jp__work_check_target_details", "altvarname" => "work_check_target_details", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "work_check_targets", "varname" => "internet_at_urlounge_co_jp__work_check_targets", "altvarname" => "work_check_targets", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "work_tasks", "varname" => "internet_at_urlounge_co_jp__work_tasks", "altvarname" => "work_tasks", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
		$this->lstTables[] = array("name" => "ycbm_bookings", "varname" => "internet_at_urlounge_co_jp__ycbm_bookings", "altvarname" => "ycbm_bookings", "connId" => "internet_at_urlounge_co_jp", "schema" => "", "connName" => "internet at 34.84.18.177");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>