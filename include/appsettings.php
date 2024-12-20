<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
/**
 * Breadcrumb label templates
 
 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."
 
 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();


$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["Japanese"] = array();

define('NOT_TABLE_BASED_TNAME', ".global");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_ADMIN_MEMBERS',"admin_members");
define('PAGE_ADMIN_RIGHTS',"admin_rights");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);

define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
define("DASHBOARD_SNIPPET", 7);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);



define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 'SEND');
define('RPM_RESET', 'RESET');

$globalSettings = array();
$globalSettings["nLoginForm"] = 0;

$globalSettings["nLoginMethod"] = 1;





$globalSettings["popupPagesLayoutNames"] = array();
						
	;
$globalSettings["popupPagesLayoutNames"]["login"] = "login_bootstrap";

//mail settings
$globalSettings["useBuiltInMailer"] = false;

$globalSettings["useCustomSMTPSettings"] = false;

$globalSettings["strSMTPUser"] = "";
$globalSettings["strSMTPServer"] = "localhost";
$globalSettings["strSMTPPort"] = "25";
$globalSettings["strSMTPPassword"] = "";
$globalSettings["strFromEmail"] = "";

$globalSettings["useSSL"] = false;
//


$ajaxSearchStartsWith = true;

$globalSettings["isDynamicPerm"] = true;




$globalSettings["LandingPageType"] = 0;
$globalSettings["LandingTable"] = "";
$globalSettings["LandingPage"] = "";
$globalSettings["LandingURL"] = "";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["Japanese"] = "EVA";

$globalSettings["createLoginPage"] = true;

$globalSettings["apiGoogleMapsCode"] = "";





/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$globalSettings["mapProvider"]=0;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 0;
$globalSettings["CaptchaSettings"]["siteKey"] = "";
$globalSettings["CaptchaSettings"]["secretKey"] = "";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";

$globalSettings["CaptchaSettings"]["isEnabledOnLogin"] = false;
$globalSettings["CaptchaSettings"]["isEnabledOnRegister"] = false;
$globalSettings["CaptchaSettings"]["isEnabledOnRemind"] = false;

$wr_pagestylepath = "Office1Office";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$cLoginTable = "users";
$cDisplayNameField = "first_name";
$cUserNameField	= "user_login";
$cPasswordField	= "user_password";
$cUserGroupField = "user_login";
$cEmailField = "email";

if ($cDisplayNameField == ''){
	$cDisplayNameField = $cUserNameField;
}

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;

												$cUserNameFieldType	= 200;
												$cPasswordFieldType	= 200;
																																																																																																															$cEmailFieldType = 200;
																																																																																																																																																																																																																																																												
$gPermissionsRefreshTime = 0;
$gPermissionsRead = false;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$mlang_messages = array();
$mlang_charsets = array();




$menuAssignments = array();
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "mainmenu";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "welcome_page";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;

$menuStyles = array();

$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 1;

$menuDrillDownFlags = array();
$menuDrillDownFlags["main"] = 0;

$menuTreelikeFlags["welcome_page"] = 0;
$menuDrillDownFlags["welcome_page"] = 0;



// table captions
$tableCaptions = array();
$tableCaptions["Japanese"] = array();
$tableCaptions["Japanese"][""] = "";
$tableCaptions["Japanese"]["Eoc"] = "顧客一覧";
$tableCaptions["Japanese"][""] = "";
$tableCaptions["Japanese"]["PMT_EV001"] = "Result_D";
$tableCaptions["Japanese"]["Eoc_chigins2"] = "旧) 金査定一覧";
$tableCaptions["Japanese"]["Eoc_chigins"] = "買取備考";
$tableCaptions["Japanese"]["shouhin"] = "商品一覧";
$tableCaptions["Japanese"]["saisun"] = "採寸待機";
$tableCaptions["Japanese"]["satei"] = "査定物一覧";
$tableCaptions["Japanese"]["shouhin_batch"] = "商品バッチ";
$tableCaptions["Japanese"]["users"] = "Users";
$tableCaptions["Japanese"]["awazu"] = "合わず一覧";
$tableCaptions["Japanese"]["kaibutu"] = "買取物一覧";
$tableCaptions["Japanese"]["evav62122_audit"] = "ログ一覧";
$tableCaptions["Japanese"]["vw_Ehiden_kaitori"] = "E飛伝";
$tableCaptions["Japanese"]["vw_Ehiden_kaitori_yuubin"] = "郵便";
$tableCaptions["Japanese"]["mailsystem_send_schedule"] = "メールログ";
$tableCaptions["Japanese"]["vw_shuukei_st"] = "集計商品ステータス";
$tableCaptions["Japanese"]["auctions"] = "出品情報";
$tableCaptions["Japanese"]["voice_sub_id_3"] = "サイト用実績";
$tableCaptions["Japanese"]["admin_rights"] = "Admin Rights";
$tableCaptions["Japanese"]["admin_members"] = "Admin Members";
$tableCaptions["Japanese"]["admin_users"] = "Add/Edit users";
$tableCaptions["Japanese"]["sagawa_sales_office"] = "佐川営業所パースページ";
$tableCaptions["Japanese"]["store_sub_categories"] = "中カテゴリ";
$tableCaptions["Japanese"]["store_categories"] = "大カテゴリ";
$tableCaptions["Japanese"]["mst_rakuten_category"] = "楽ジャン";
$tableCaptions["Japanese"]["users1"] = "Users1";
$tableCaptions["Japanese"]["_sex"] = "Sex";
$tableCaptions["Japanese"]["mst_gold_property"] = "金性";
$tableCaptions["Japanese"]["KEN_ALL"] = "都道府県";
$tableCaptions["Japanese"]["mst_item_name"] = "アイテム名";
$tableCaptions["Japanese"]["_mail_check_type"] = "Mail Check Type";
$tableCaptions["Japanese"]["Eoc_takuhai"] = "宅配取引全項目";
$tableCaptions["Japanese"]["_purchase_type"] = "買取種別(顧客)";
$tableCaptions["Japanese"]["_pref"] = "Pref";
$tableCaptions["Japanese"]["mst_item_name1"] = "Mst Item Name1";
$tableCaptions["Japanese"]["mst_item_name11"] = "Mst Item Name11";
$tableCaptions["Japanese"]["mst_item_name111"] = "Mst Item Name111";
$tableCaptions["Japanese"]["mst_item_name1111"] = "Mst Item Name1111";
$tableCaptions["Japanese"]["brand_price"] = "ブランド別定価一覧";
$tableCaptions["Japanese"]["mst_country_of_origin"] = "原産国一覧";
$tableCaptions["Japanese"]["mst_brand2"] = "Mst Brand2";
$tableCaptions["Japanese"]["mst_zipper"] = "金具（ファスナー）一覧";
$tableCaptions["Japanese"]["mst_brand"] = "ブランド一覧";
$tableCaptions["Japanese"]["Eoc_guestquestion"] = "サイトアンケート";
$tableCaptions["Japanese"]["mst_designer"] = "デザイナー一覧";
$tableCaptions["Japanese"]["mst_line"] = "Mst Line";
$tableCaptions["Japanese"]["mst_wasabi"] = "Mst Wasabi";
$tableCaptions["Japanese"]["mst_hahakai"] = "母貝";
$tableCaptions["Japanese"]["mst_effect"] = "効果";
$tableCaptions["Japanese"]["mst_shape"] = "シェイプ";
$tableCaptions["Japanese"]["mst_cutting_style"] = "カッティングスタイル";
$tableCaptions["Japanese"]["mst_chain_type"] = "チェーン種類";
$tableCaptions["Japanese"]["mst_number_of_stones"] = "石の個数";
$tableCaptions["Japanese"]["mst_amount"] = "内容量";
$tableCaptions["Japanese"]["mst_reebonz_required"] = "Reebonzマスタ";
$tableCaptions["Japanese"]["mst_motif"] = "モチーフ";
$tableCaptions["Japanese"]["mst_Setting"] = "セッティング";
$tableCaptions["Japanese"]["mst_processing"] = "処理";
$tableCaptions["Japanese"]["mst_Appraiser"] = "鑑定機関";
$tableCaptions["Japanese"]["mst_producing_area"] = "産地";
$tableCaptions["Japanese"]["mst_satei_error"] = "査定エラー一覧";
$tableCaptions["Japanese"]["mst_satei_error_item"] = "査定エラー項目";
$tableCaptions["Japanese"]["mst_wasabi_brand"] = "Mst Wasabi Brand";
$tableCaptions["Japanese"]["mst_side_gem"] = "脇石";
$tableCaptions["Japanese"]["mst_silhouette"] = "シルエット";
$tableCaptions["Japanese"]["mst_sleeve"] = "スリーブ";
$tableCaptions["Japanese"]["mst_breast"] = "ブレスト";
$tableCaptions["Japanese"]["mst_collar_neck_line"] = "襟・ネックライン";
$tableCaptions["Japanese"]["mst_saisun_item"] = "採寸項目";
$tableCaptions["Japanese"]["mst_unit"] = "単位";
$tableCaptions["Japanese"]["mst_saisun_item_by_category"] = "カテゴリ別採寸項目";
$tableCaptions["Japanese"]["mst_hall_mark"] = "ホールマーク";
$tableCaptions["Japanese"]["mst_toe"] = "トウ";
$tableCaptions["Japanese"]["mst_heel"] = "ソール/ヒール";
$tableCaptions["Japanese"]["mst_cloth"] = "生地";
$tableCaptions["Japanese"]["mst_hall_mark1"] = "Mst Hall Mark1";
$tableCaptions["Japanese"]["mst_hall_mark11"] = "Mst Hall Mark11";
$tableCaptions["Japanese"]["mst_hall_mark111"] = "Mst Hall Mark111";
$tableCaptions["Japanese"]["mst_hall_mark1111"] = "Mst Hall Mark1111";
$tableCaptions["Japanese"]["mst_journal_account_item"] = "勘定科目(買備)";
$tableCaptions["Japanese"]["mst_journal_supplementary_subject"] = "Mst Journal Supplementary Subject";
$tableCaptions["Japanese"]["mst_journal_group"] = "部門（買備）";
$tableCaptions["Japanese"]["_chigin_type"] = "買取種別(買備)";
$tableCaptions["Japanese"]["laravel_users"] = "Laravel Users";
$tableCaptions["Japanese"]["mst_saisun_model"] = "採寸モデル";
$tableCaptions["Japanese"]["_chigin_result_type"] = "実績種別";
$tableCaptions["Japanese"]["vw_box_csv"] = "Vw Box Csv";
$tableCaptions["Japanese"]["kit_confirm"] = "宅配キット確認画面";
$tableCaptions["Japanese"]["mst_bank"] = "金融機関マスタ";
$tableCaptions["Japanese"]["mst_item"] = "ライン";
$tableCaptions["Japanese"]["mst_color"] = "Mst Color";
$tableCaptions["Japanese"]["vw_shouhin_ON_Eoc"] = "商品＋顧客情報";
$tableCaptions["Japanese"]["_goods_status2"] = "商品状態";
$tableCaptions["Japanese"]["vw_shouhin_column"] = "Vw Shouhin Column";
$tableCaptions["Japanese"]["mst_shouhin_column_name"] = "採寸時出現項目";
$tableCaptions["Japanese"]["mst_wasabi_apparel_size"] = "Mst Wasabi Apparel Size";
$tableCaptions["Japanese"]["mst_wasabi_shoe_size"] = "Mst Wasabi Shoe Size";
$tableCaptions["Japanese"]["mst_DA_POLISH"] = "ポリッシュ";
$tableCaptions["Japanese"]["mst_DA_SYMMETRY"] = "シンメトリ";
$tableCaptions["Japanese"]["mst_Destination_selling"] = "Mst Destination Selling";
$tableCaptions["Japanese"]["mst_Finish"] = "仕上げ一覧";
$tableCaptions["Japanese"]["mst_Discrimination"] = "鑑別一覧";
$tableCaptions["Japanese"]["mst_accessories"] = "Mst Accessories";
$tableCaptions["Japanese"]["mst_Sleeve_Length"] = "Mst Sleeve Length";
$tableCaptions["Japanese"]["mst_length"] = "Mst Length";
$tableCaptions["Japanese"]["id_key"] = "商品更新時に追加される";
$tableCaptions["Japanese"]["vw_hinbankaburi"] = "Vw Hinbankaburi";
$tableCaptions["Japanese"]["Eoc_chigins_unfinished"] = "店頭詳細";
$tableCaptions["Japanese"]["Eoc_unfinished"] = "店頭取引";
$tableCaptions["Japanese"]["haraidasi"] = "Haraidasi";
$tableCaptions["Japanese"]["dia"] = "NEW D在";
$tableCaptions["Japanese"]["_DIA_DA_SHAPE"] = "DIA DA SHAPE";
$tableCaptions["Japanese"]["_DIA_DA_SUGARCANE"] = "DIA DA SUGARCANE";
$tableCaptions["Japanese"]["mst_Intensity"] = "Mst Intensity";
$tableCaptions["Japanese"]["mst_overtone"] = "Mst Overtone";
$tableCaptions["Japanese"]["_DIA_DA_COLOR"] = "DIA DA COLOR";
$tableCaptions["Japanese"]["_DIA_DA_CLARITY"] = "DIA DA CLARITY";
$tableCaptions["Japanese"]["_DIA_DA_CUT"] = "カット";
$tableCaptions["Japanese"]["_DIA_DA_FLUO"] = "DIA DA FLUO";
$tableCaptions["Japanese"]["mst_color_fluo"] = "Mst Color Fluo";
$tableCaptions["Japanese"]["_DIA_DA_APPRAISER"] = "DIA DA APPRAISER";
$tableCaptions["Japanese"]["_DIA_DA_CUSTOMER"] = "DIA DA CUSTOMER";
$tableCaptions["Japanese"]["kin_satei"] = "NEW 金査定一覧";
$tableCaptions["Japanese"]["goods_num_seaquence"] = "頭2桁の文字対応表";
$tableCaptions["Japanese"]["seq"] = "品番生成の直前利用view";
$tableCaptions["Japanese"]["Eoc_catch"] = "庶務受付業務";
$tableCaptions["Japanese"]["Eoc_received"] = "受付データ";
$tableCaptions["Japanese"]["Eoc_received_events"] = "受付詳細";
$tableCaptions["Japanese"]["mst_Eoc_received_events"] = "イベントマスタ";
$tableCaptions["Japanese"]["mst_Eoc_received_event_contents"] = "イベント内容";
$tableCaptions["Japanese"]["satei_of_jewelry"] = "宝飾査定";
$tableCaptions["Japanese"]["satei_of_brand"] = "服飾査定";
$tableCaptions["Japanese"]["Eoc_takuhai_for_catch"] = "宅配取引";
$tableCaptions["Japanese"]["Eoc_takuhai_events"] = "宅配イベント";
$tableCaptions["Japanese"]["Eoc_guestquestion_for_catch"] = "受付用 サイトアンケート";
$tableCaptions["Japanese"]["mst_Eoc_takuhai_status"] = "宅配取引ステータス";
$tableCaptions["Japanese"]["Eoc_transfer_confirm"] = "振込確認画面";
$tableCaptions["Japanese"]["Eoc_transfer_confirm_after"] = "振込確認済み一覧";
$tableCaptions["Japanese"]["Eoc_takuhai_for_catch_history"] = "宅配取引履歴";
$tableCaptions["Japanese"]["vw_cw_task_id"] = "CWタスクID一覧";
$tableCaptions["Japanese"]["mst_ritou"] = "離島一覧";
$tableCaptions["Japanese"]["Eoc_takuhai_speed"] = "Eoc Takuhai Speed";
$tableCaptions["Japanese"]["users_code"] = "Users Code";
$tableCaptions["Japanese"]["transaction_ID"] = "取引ID変更画面";
$tableCaptions["Japanese"]["tb_gold_property_price"] = "金性別　金額一覧";
$tableCaptions["Japanese"]["from_mail_tbl"] = "メールサーバー設定";
$tableCaptions["Japanese"]["shomei_tbl"] = "署名一覧";
$tableCaptions["Japanese"]["mail_data_tbl"] = "本文一覧";
$tableCaptions["Japanese"]["mail_data_tbl_category"] = "メール大カテゴリー";
$tableCaptions["Japanese"]["mail_data_tbl_sub_category"] = "メール中カテゴリー";
$tableCaptions["Japanese"]["vw_Eoc_mail_magazine"] = "BM一覧";
$tableCaptions["Japanese"]["mst_mail_replace"] = "メール置換一覧";
$tableCaptions["Japanese"]["vw_information_schema_for_mail"] = "Vw Information Schema For Mail";
$tableCaptions["Japanese"]["chohyo"] = "帳票一覧";
$tableCaptions["Japanese"]["chohyo_by_seihin"] = "帳票確認 - 製品";
$tableCaptions["Japanese"]["mst_special_instructions"] = "特別指示一覧";
$tableCaptions["Japanese"]["chohyo_by_dia"] = "帳票確認 - ダイヤ";
$tableCaptions["Japanese"]["chohyo_by_seihin_result"] = "帳票データ - 製品";
$tableCaptions["Japanese"]["chohyo_by_dia_result"] = "帳票データ - ダイヤ";
$tableCaptions["Japanese"]["mst_chohyo_type"] = "帳票タイプ一覧";
$tableCaptions["Japanese"]["mst_color_code"] = "カラーコード一覧";
$tableCaptions["Japanese"]["mail_data_tbl_template"] = "メールテンプレート";
$tableCaptions["Japanese"]["Eoc_timeline"] = "タイムライン";
$tableCaptions["Japanese"]["mst_Eoc_timeline_category"] = "タイムラインカテゴリー一覧";
$tableCaptions["Japanese"]["mst_destination"] = "送付先一覧";
$tableCaptions["Japanese"]["Eoc_speed"] = "スピード顧客一覧";
$tableCaptions["Japanese"]["vw_Eoc_returned_items"] = "返却明細一覧";
$tableCaptions["Japanese"]["lounge_report__buy_takuhai"] = "宅配集計レポート";
$tableCaptions["Japanese"]["mst_price_zone"] = "プライスゾーン";
$tableCaptions["Japanese"]["mst_saisun_condition_details"] = "【採寸】コンディションの詳細";
$tableCaptions["Japanese"]["mst_saisun_detailed_description"] = "【採寸】詳細説明";
$tableCaptions["Japanese"]["vw_store_categories_for_saisun_group"] = "Vw Store Categories For Saisun Group";
$tableCaptions["Japanese"]["mst_sales_discount"] = "自動値下げ一覧";
$tableCaptions["Japanese"]["mst_ban_word"] = "海外NGワード";
$tableCaptions["Japanese"]["kataban_price"] = "型番集計一覧";
$tableCaptions["Japanese"]["mst_category_class"] = "部門一覧";
$tableCaptions["Japanese"]["mst_ichiba_meeting"] = "市場一覧";
$tableCaptions["Japanese"]["market_product_performance"] = "市場製品実績(旧)";
$tableCaptions["Japanese"]["mst_gold_of_bullion_merchants"] = "地金商金性";
$tableCaptions["Japanese"]["gold_check"] = "地金チェック";
$tableCaptions["Japanese"]["gold_check_item"] = "地金チェックアイテム";
$tableCaptions["Japanese"]["mst_delivery_type"] = "伝票種別";
$tableCaptions["Japanese"]["mst_bullion_dealer"] = "地金商一覧";
$tableCaptions["Japanese"]["Eoc_nittsuu"] = "精錬日通";
$tableCaptions["Japanese"]["mst_refining_status"] = "精錬分割ステータス";
$tableCaptions["Japanese"]["Eoc_refining"] = "精錬分割取引一覧";
$tableCaptions["Japanese"]["Eoc_refining_item"] = "精錬分割商品一覧";
$tableCaptions["Japanese"]["mst_bullion_type"] = "地金種類一覧";
$tableCaptions["Japanese"]["mst_gold_of_bullion_merchants_price"] = "地金商金性別　金額一覧";
$tableCaptions["Japanese"]["box"] = "Box一覧";
$tableCaptions["Japanese"]["ichiba_exhibition"] = "出品表";
$tableCaptions["Japanese"]["mst_jigane_sheet"] = "出品GSS";
$tableCaptions["Japanese"]["vw_jigane_taiki"] = "地金商品一覧";
$tableCaptions["Japanese"]["ichiba_exhibition_shouhin"] = "市場出品商品";
$tableCaptions["Japanese"]["DIA_QR_reading"] = "鑑定書データ一覧";
$tableCaptions["Japanese"]["mst_exhibition_item_type"] = "市場タイプ";
$tableCaptions["Japanese"]["sorting_batch"] = "ソーティングバッチ";
$tableCaptions["Japanese"]["mst_sorting_color_apart"] = "ソーティングカラーマスタ";
$tableCaptions["Japanese"]["mst_ichiba_meeting1"] = "Mst Ichiba Meeting1";
$tableCaptions["Japanese"]["mst_label_replace"] = "ラベル置換マスタ";
$tableCaptions["Japanese"]["mst_label_layout"] = "ラベルレイアウト一覧";
$tableCaptions["Japanese"]["user_label_output"] = "ラベル待機一覧";
$tableCaptions["Japanese"]["nyuko"] = "入庫待ち一覧";
$tableCaptions["Japanese"]["shouhin_for_labels"] = "ラベル用商品一覧";
$tableCaptions["Japanese"]["mst_saisun_manual"] = "採寸マニュアル";
$tableCaptions["Japanese"]["mst_ebay_price"] = "ebay販売額";
$tableCaptions["Japanese"]["mst_finish_terms"] = "コスト一覧";
$tableCaptions["Japanese"]["mst_colorstone"] = "カラーストーン一覧";
$tableCaptions["Japanese"]["mst_cost_category"] = "コストカテゴリ一覧";
$tableCaptions["Japanese"]["Eoc_trader"] = "業者取引一覧";
$tableCaptions["Japanese"]["mst_business_partner"] = "取引先一覧";
$tableCaptions["Japanese"]["mst_condition_details"] = "コンディション詳細一覧";
$tableCaptions["Japanese"]["mst_quality"] = "品質一覧";
$tableCaptions["Japanese"]["market_product_performance_original"] = "市場製品実績";
$tableCaptions["Japanese"]["satei_items"] = "査定項目";
$tableCaptions["Japanese"]["satei_items_rules"] = "査定項目条件";
$tableCaptions["Japanese"]["vw_store_categories_add_all"] = "Vw Store Categories Add All";
$tableCaptions["Japanese"]["vw_store_sub_categories_add_all"] = "Vw Store Sub Categories Add All";
$tableCaptions["Japanese"]["vw_mst_brand2_add_all"] = "Vw Mst Brand2 Add All";
$tableCaptions["Japanese"]["mst_brand_color"] = "ブランドカラー";
$tableCaptions["Japanese"]["Eoc_takuhai_return"] = "宅配返却管理一覧";
$tableCaptions["Japanese"]["Eoc_takuhai_return_items"] = "宅配返却管理商品一覧";
$tableCaptions["Japanese"]["buy_campaign_data"] = "買取キャンペーン一覧";
$tableCaptions["Japanese"]["buy_campaign_data_detail"] = "買取キャンペーン詳細一覧";
$tableCaptions["Japanese"]["buy_campaign_data_rules"] = "買取キャンペーンルール一覧";
$tableCaptions["Japanese"]["shouhin_group"] = "商品グループ一覧";
$tableCaptions["Japanese"]["shouhin_group_detail"] = "商品グループ詳細一覧";
$tableCaptions["Japanese"]["sales_report"] = "セールスレポート";
$tableCaptions["Japanese"]["analysisMail_send_emails"] = "予約メール";
$tableCaptions["Japanese"]["analysisMail_send_logs"] = "予約メールログ";
$tableCaptions["Japanese"]["analysisMail_send_logs_bcc"] = "送信ログBCC";
$tableCaptions["Japanese"]["mst_analysisMail_contents"] = "再利用コンテンツ";
$tableCaptions["Japanese"]["mst_analysisMail_fromaddress"] = "送信元設定";
$tableCaptions["Japanese"]["mst_analysisMail_send_categories"] = "送信先カテゴリー";
$tableCaptions["Japanese"]["mst_analysisMail_send_groups"] = "送信先グループ";
$tableCaptions["Japanese"]["mst_analysisMail_send_targets"] = "送信先顧客SEQ";
$tableCaptions["Japanese"]["mst_analysisMail_shomei"] = "署名";
$tableCaptions["Japanese"]["mst_analysisMail_status"] = "ステータス";
$tableCaptions["Japanese"]["sagawa_api_results"] = "佐川集荷API結果";
$tableCaptions["Japanese"]["sagawa_api_result_codes"] = "佐川API詳細結果コード";
$tableCaptions["Japanese"]["sagawa_api_error_details"] = "佐川APIエラー詳細マスタ";
$tableCaptions["Japanese"]["sagawa_api_error_details1"] = "Sagawa Api Error Details1";
$tableCaptions["Japanese"]["mst_dept_group"] = "部署一覧";
$tableCaptions["Japanese"]["ycbm_bookings"] = "Bookings";
$tableCaptions["Japanese"]["royal_customer"] = "ロイヤルカスタマー（保存データ）";
$tableCaptions["Japanese"]["royal_customer_type"] = "ロイヤルカスタマータイプ";
$tableCaptions["Japanese"]["analysisMail_tags"] = "メールタグ";
$tableCaptions["Japanese"]["mst_analysisMail_tags"] = "メールタグ一覧";
$tableCaptions["Japanese"]["mst_royal_customer_status"] = "ロイヤルカスタマーステータス";
$tableCaptions["Japanese"]["Eoc_royal_customers"] = "ロイヤルカスタマー";
$tableCaptions["Japanese"]["mst_ycbm_booking_status"] = "Mst Ycbm Booking Status";
$tableCaptions["Japanese"]["freee_PLBS_by_year"] = "会計Freee PLBS By Year";
$tableCaptions["Japanese"]["freee_PLBS_details"] = "会計Freee PLBS Details";
$tableCaptions["Japanese"]["freee_PLBS_by_day"] = "会計Freee PLBS By Day";
$tableCaptions["Japanese"]["freee_PLBS_by_day_details"] = "会計Freee PLBS By Day Details";
$tableCaptions["Japanese"]["ad_params"] = "広告パラメータ";
$tableCaptions["Japanese"]["vw_Eoc_chigins_summaray"] = "Vw Eoc Chigins Summaray";
$tableCaptions["Japanese"]["mst_area"] = "Mst Area";
$tableCaptions["Japanese"]["freee_work_record_summaries"] = "労務Freee勤怠サマリー（生データ）";
$tableCaptions["Japanese"]["vw_freee_work_record_summaries_by_nendo"] = "年度別労務情報";
$tableCaptions["Japanese"]["freee_employees_details"] = "労務Freee従業員詳細";
$tableCaptions["Japanese"]["Eoc_inventory"] = "日間在庫集計データ";
$tableCaptions["Japanese"]["Eoc_inventory_item"] = "在庫データ";
$tableCaptions["Japanese"]["Eoc_inventory_weekly"] = "週間在庫集計データ";
$tableCaptions["Japanese"]["freee_work_records_by_term"] = "Freee Total Working Hours";
$tableCaptions["Japanese"]["freee_work_records"] = "労務Freee勤怠（生データ）";
$tableCaptions["Japanese"]["freee_employees"] = "Freee Employees";
$tableCaptions["Japanese"]["mst_dept_group_categories"] = "部署カテゴリー";
$tableCaptions["Japanese"]["freee_deals"] = "会計Freee取引データ";
$tableCaptions["Japanese"]["freee_deal_details"] = "会計Freee取引データ詳細";
$tableCaptions["Japanese"]["freee_memotags"] = "Freeeメモタグ";
$tableCaptions["Japanese"]["vw_freee_deals_data"] = "Vw Freee Deals Data";
$tableCaptions["Japanese"]["freee_partners"] = "Freee取引先";
$tableCaptions["Japanese"]["freee_items"] = "Freee品目";
$tableCaptions["Japanese"]["freee_sections"] = "Freee部門";
$tableCaptions["Japanese"]["freee_account_items"] = "Freee勘定科目";
$tableCaptions["Japanese"]["freee_taxes"] = "Freee税区分コード";
$tableCaptions["Japanese"]["freee_deal_detail__memotag"] = "Freee収支取引（メモタグ結合）";
$tableCaptions["Japanese"]["mst_freee_deal_status"] = "Mst Freee Deal Status";
$tableCaptions["Japanese"]["mst_freee_deal_type"] = "Mst Freee Deal Type";
$tableCaptions["Japanese"]["mst_freee_entry_side"] = "Mst Freee Entry Side";
$tableCaptions["Japanese"]["freee_deal_join_manual_journal__detail__memotag"] = "会計Freee取引+振替伝票+メモタグ";
$tableCaptions["Japanese"]["freee_manual_journals"] = "会計Freee振替伝票";
$tableCaptions["Japanese"]["freee_manual_journal_details"] = "会計Freee振替伝票詳細";
$tableCaptions["Japanese"]["freee_saisanhyou"] = "Freee採算表";
$tableCaptions["Japanese"]["freee_saisan_rule_details"] = "Freee採算項目条件詳細マスタ";
$tableCaptions["Japanese"]["freee_saisan_rules"] = "Freee採算項目条件マスタ";
$tableCaptions["Japanese"]["freee_deal_join_manual_journal__details"] = "会計Freee取引+振替伝票";
$tableCaptions["Japanese"]["freee_expense_categories"] = "経費カテゴリー";
$tableCaptions["Japanese"]["freee_apportionment_rule_detail"] = "配賦/按分ルール詳細";
$tableCaptions["Japanese"]["freee_apportionment_rules"] = "配賦/按分ルール";
$tableCaptions["Japanese"]["vw_freee_account_category"] = "Vw Freee勘定科目カテゴリー";
$tableCaptions["Japanese"]["freee_account_categories_revenue"] = "Freee Account Categories Revenue";
$tableCaptions["Japanese"]["freee_inventory_details"] = "Freee Inventory Details";
$tableCaptions["Japanese"]["freee_saisanhyou_check_logs"] = "Freee Saisanhyou Check Logs";
$tableCaptions["Japanese"]["vw_Eoc_chigins_for_freee_import"] = "（VW）Freeeインポート用買取備考";
$tableCaptions["Japanese"]["Eoc_chigins_for_freee_import"] = "Freeeインポート用買取備考";
$tableCaptions["Japanese"]["freee_in_house_sales"] = "社内売り";
$tableCaptions["Japanese"]["work_check_targets"] = "業務チェックターゲット";
$tableCaptions["Japanese"]["work_check_target_details"] = "業務チェックターゲット詳細";
$tableCaptions["Japanese"]["mst_freee_apportionment_rule_calc_bases"] = "MstFreee配賦/按分集計ベースマスタ";
$tableCaptions["Japanese"]["freee_saisan_goals"] = "Freee採算表目標値";
$tableCaptions["Japanese"]["users_group_memberships"] = "所属部署";
$tableCaptions["Japanese"]["shop_front_details"] = "テンタブ";
$tableCaptions["Japanese"]["updated_Eoc_logs"] = "Updated Eoc Logs";
$tableCaptions["Japanese"]["mst_shops"] = "Mst Shops";
$tableCaptions["Japanese"]["shop_front_seiren_details"] = "精錬店頭撮影";
$tableCaptions["Japanese"]["_mst_condition"] = "コンディション";
$tableCaptions["Japanese"]["mst_jewelry_conditions"] = "宝石用コンディション";
$tableCaptions["Japanese"]["mst_work_task_categories"] = "タスクカテゴリー";
$tableCaptions["Japanese"]["mst_work_task_statuses"] = "タスクステータス";
$tableCaptions["Japanese"]["work_tasks"] = "業務タスク";
$tableCaptions["Japanese"]["voice_sub_id_1"] = "お客様の手紙";
$tableCaptions["Japanese"]["shop_front_seiren_brands"] = "精錬店頭ブランド";
$tableCaptions["Japanese"]["shop_reservations"] = "店頭予約";
$tableCaptions["Japanese"]["Eoc_monthly_reports"] = "月次顧客集計";
$tableCaptions["Japanese"]["Eoc_monthly_reports_by_prefectures"] = "月次顧客集計　都道府県別";
$tableCaptions["Japanese"]["screenshots"] = "Screenshots";
$tableCaptions["Japanese"]["Eoc_refining_v1"] = "精錬分割申込";
$tableCaptions[""] = array();
$tableCaptions[""][""] = "";
$tableCaptions[""]["Eoc"] = "顧客一覧";
$tableCaptions[""]["KEN_ALL"] = "KEN ALL";
$tableCaptions[""]["satei"] = "査定物一覧";
$tableCaptions[""]["PMT_EV001"] = "D在";
$tableCaptions[""]["awazu"] = "合わず一覧";
$tableCaptions[""]["mst_item_name"] = "Mst Item Name";
$tableCaptions[""]["Eoc_chigins"] = "買取備考";
$tableCaptions[""]["shouhin"] = "商品一覧";
$tableCaptions[""]["_mail_check_type"] = "Mail Check Type";
$tableCaptions[""]["Eoc_takuhai"] = "Eoc Takuhai";
$tableCaptions[""]["_purchase_type"] = "Purchase Type";
$tableCaptions[""]["_pref"] = "Pref";
$tableCaptions[""]["saisun"] = "採寸待機";
$tableCaptions[""]["brand_price"] = "Brand Price";
$tableCaptions[""]["mst_country_of_origin"] = "Mst Country Of Origin";
$tableCaptions[""]["mst_brand2"] = "Mst Brand2";
$tableCaptions[""]["mst_zipper"] = "Mst Zipper";
$tableCaptions[""]["mst_brand"] = "Mst Brand";
$tableCaptions[""]["Eoc_guestquestion"] = "Eoc Guestquestion";
$tableCaptions[""]["mst_designer"] = "Mst Designer";
$tableCaptions[""]["mst_line"] = "Mst Line";
$tableCaptions[""]["mst_wasabi"] = "Mst Wasabi";
$tableCaptions[""]["mst_hahakai"] = "Mst Hahakai";
$tableCaptions[""]["mst_effect"] = "Mst Effect";
$tableCaptions[""]["mst_shape"] = "Mst Shape";
$tableCaptions[""]["mst_cutting_style"] = "Mst Cutting Style";
$tableCaptions[""]["mst_chain_type"] = "Mst Chain Type";
$tableCaptions[""]["mst_number_of_stones"] = "Mst Number Of Stones";
$tableCaptions[""]["mst_amount"] = "Mst Amount";
$tableCaptions[""]["mst_reebonz_required"] = "Mst Reebonz Required";
$tableCaptions[""]["mst_motif"] = "Mst Motif";
$tableCaptions[""]["mst_Setting"] = "Mst Setting";
$tableCaptions[""]["mst_processing"] = "Mst Processing";
$tableCaptions[""]["mst_Appraiser"] = "Mst Appraiser";
$tableCaptions[""]["mst_producing_area"] = "Mst Producing Area";
$tableCaptions[""]["mst_satei_error"] = "Mst Satei Error";
$tableCaptions[""]["mst_satei_error_item"] = "Mst Satei Error Item";
$tableCaptions[""]["mst_wasabi_brand"] = "Mst Wasabi Brand";
$tableCaptions[""]["mst_side_gem"] = "Mst Side Gem";
$tableCaptions[""]["mst_silhouette"] = "Mst Silhouette";
$tableCaptions[""]["mst_sleeve"] = "Mst Sleeve";
$tableCaptions[""]["mst_breast"] = "Mst Breast";
$tableCaptions[""]["mst_collar_neck_line"] = "Mst Collar Neck Line";
$tableCaptions[""]["mst_saisun_item"] = "Mst Saisun Item";
$tableCaptions[""]["mst_unit"] = "Mst Unit";
$tableCaptions[""]["mst_saisun_item_by_category"] = "Mst Saisun Item By Category";
$tableCaptions[""]["mst_hall_mark"] = "Mst Hall Mark";
$tableCaptions[""]["mst_toe"] = "Mst Toe";
$tableCaptions[""]["mst_heel"] = "Mst Heel";
$tableCaptions[""]["mst_cloth"] = "Mst Cloth";
$tableCaptions[""]["mst_journal_account_item"] = "Mst Journal Account Item";
$tableCaptions[""]["mst_journal_supplementary_subject"] = "Mst Journal Supplementary Subject";
$tableCaptions[""]["mst_journal_group"] = "Mst Journal Group";
$tableCaptions[""]["_chigin_type"] = "Chigin Type";
$tableCaptions[""]["laravel_users"] = "Laravel Users";
$tableCaptions[""]["mst_saisun_model"] = "Mst Saisun Model";
$tableCaptions[""]["_chigin_result_type"] = "Chigin Result Type";
$tableCaptions[""]["vw_box_csv"] = "Vw Box Csv";
$tableCaptions[""]["kit_confirm"] = "Kit Confirm";
$tableCaptions[""]["mst_bank"] = "Mst Bank";
$tableCaptions[""]["mst_item"] = "Mst Item";
$tableCaptions[""]["mst_color"] = "Mst Color";
$tableCaptions[""]["vw_shouhin_ON_Eoc"] = "Vw Shouhin ON Eoc";
$tableCaptions[""]["_goods_status2"] = "Goods Status2";
$tableCaptions[""]["vw_shouhin_column"] = "Vw Shouhin Column";
$tableCaptions[""]["mst_shouhin_column_name"] = "Mst Shouhin Column Name";
$tableCaptions[""]["mst_wasabi_apparel_size"] = "Mst Wasabi Apparel Size";
$tableCaptions[""]["mst_wasabi_shoe_size"] = "Mst Wasabi Shoe Size";
$tableCaptions[""]["mst_DA_POLISH"] = "Mst DA POLISH";
$tableCaptions[""]["mst_DA_SYMMETRY"] = "Mst DA SYMMETRY";
$tableCaptions[""]["mst_Destination_selling"] = "Mst Destination Selling";
$tableCaptions[""]["mst_Finish"] = "Mst Finish";
$tableCaptions[""]["mst_Discrimination"] = "Mst Discrimination";
$tableCaptions[""]["mst_accessories"] = "Mst Accessories";
$tableCaptions[""]["mst_Sleeve_Length"] = "Mst Sleeve Length";
$tableCaptions[""]["mst_length"] = "Mst Length";
$tableCaptions[""]["Eoc_chigins2"] = "金査定一覧";
$tableCaptions[""]["id_key"] = "Id Key";
$tableCaptions[""]["vw_hinbankaburi"] = "Vw Hinbankaburi";
$tableCaptions[""]["Eoc_chigins_unfinished"] = "Eoc Chigins Unfinished";
$tableCaptions[""]["Eoc_unfinished"] = "Eoc Unfinished";
$tableCaptions[""]["haraidasi"] = "Haraidasi";
$tableCaptions[""]["dia"] = "Dia";
$tableCaptions[""]["_DIA_DA_SHAPE"] = "DIA DA SHAPE";
$tableCaptions[""]["_DIA_DA_SUGARCANE"] = "DIA DA SUGARCANE";
$tableCaptions[""]["mst_Intensity"] = "Mst Intensity";
$tableCaptions[""]["mst_overtone"] = "Mst Overtone";
$tableCaptions[""]["_DIA_DA_COLOR"] = "DIA DA COLOR";
$tableCaptions[""]["_DIA_DA_CLARITY"] = "DIA DA CLARITY";
$tableCaptions[""]["_DIA_DA_CUT"] = "DIA DA CUT";
$tableCaptions[""]["_DIA_DA_FLUO"] = "DIA DA FLUO";
$tableCaptions[""]["mst_color_fluo"] = "Mst Color Fluo";
$tableCaptions[""]["_DIA_DA_APPRAISER"] = "DIA DA APPRAISER";
$tableCaptions[""]["_DIA_DA_CUSTOMER"] = "DIA DA CUSTOMER";
$tableCaptions[""]["kin_satei"] = "Kin Satei";
$tableCaptions[""]["goods_num_seaquence"] = "Goods Num Seaquence";
$tableCaptions[""]["seq"] = "Seq";
$tableCaptions[""]["Eoc_catch"] = "Eoc Catch";
$tableCaptions[""]["Eoc_received"] = "Eoc Received";
$tableCaptions[""]["Eoc_received_events"] = "Eoc Received Events";
$tableCaptions[""]["mst_Eoc_received_events"] = "Mst Eoc Received Events";
$tableCaptions[""]["mst_Eoc_received_event_contents"] = "Mst Eoc Received Event Contents";
$tableCaptions[""]["satei_of_jewelry"] = "Satei Of Jewelry";
$tableCaptions[""]["satei_of_brand"] = "Satei Of Brand";
$tableCaptions[""]["Eoc_takuhai_for_catch"] = "Eoc Takuhai For Catch";
$tableCaptions[""]["Eoc_takuhai_events"] = "Eoc Takuhai Events";
$tableCaptions[""]["Eoc_guestquestion_for_catch"] = "Eoc Guestquestion For Catch";
$tableCaptions[""]["mst_Eoc_takuhai_status"] = "Mst Eoc Takuhai Status";
$tableCaptions[""]["Eoc_transfer_confirm"] = "Eoc Transfer Confirm";
$tableCaptions[""]["Eoc_transfer_confirm_after"] = "Eoc Transfer Confirm After";
$tableCaptions[""]["Eoc_takuhai_for_catch_history"] = "Eoc Takuhai For Catch History";
$tableCaptions[""]["vw_cw_task_id"] = "Vw Cw Task Id";
$tableCaptions[""]["mst_ritou"] = "Mst Ritou";
$tableCaptions[""]["Eoc_takuhai_speed"] = "Eoc Takuhai Speed";
$tableCaptions[""]["users"] = "Users";
$tableCaptions[""]["users_code"] = "Users Code";
$tableCaptions[""]["transaction_ID"] = "Transaction ID";
$tableCaptions[""]["evav62122_audit"] = "ログ一覧";
$tableCaptions[""]["tb_gold_property_price"] = "Tb Gold Property Price";
$tableCaptions[""]["from_mail_tbl"] = "From Mail Tbl";
$tableCaptions[""]["shomei_tbl"] = "Shomei Tbl";
$tableCaptions[""]["mail_data_tbl"] = "Mail Data Tbl";
$tableCaptions[""]["mail_data_tbl_category"] = "Mail Data Tbl Category";
$tableCaptions[""]["mail_data_tbl_sub_category"] = "Mail Data Tbl Sub Category";
$tableCaptions[""]["vw_Eoc_mail_magazine"] = "Vw Eoc Mail Magazine";
$tableCaptions[""]["mst_mail_replace"] = "Mst Mail Replace";
$tableCaptions[""]["vw_information_schema_for_mail"] = "Vw Information Schema For Mail";
$tableCaptions[""]["chohyo"] = "Chohyo";
$tableCaptions[""]["chohyo_by_seihin"] = "Chohyo By Seihin";
$tableCaptions[""]["mst_special_instructions"] = "Mst Special Instructions";
$tableCaptions[""]["chohyo_by_dia"] = "Chohyo By Dia";
$tableCaptions[""]["chohyo_by_seihin_result"] = "Chohyo By Seihin Result";
$tableCaptions[""]["chohyo_by_dia_result"] = "Chohyo By Dia Result";
$tableCaptions[""]["mst_chohyo_type"] = "Mst Chohyo Type";
$tableCaptions[""]["mst_color_code"] = "Mst Color Code";
$tableCaptions[""]["mail_data_tbl_template"] = "Mail Data Tbl Template";
$tableCaptions[""]["Eoc_timeline"] = "Eoc Timeline";
$tableCaptions[""]["mst_Eoc_timeline_category"] = "Mst Eoc Timeline Category";
$tableCaptions[""]["mst_destination"] = "Mst Destination";
$tableCaptions[""]["Eoc_speed"] = "Eoc Speed";
$tableCaptions[""]["vw_Eoc_returned_items"] = "Vw Eoc Returned Items";
$tableCaptions[""]["lounge_report__buy_takuhai"] = "Lounge Report  Buy Takuhai";
$tableCaptions[""]["mst_price_zone"] = "Mst Price Zone";
$tableCaptions[""]["mst_saisun_condition_details"] = "Mst Saisun Condition Details";
$tableCaptions[""]["mst_saisun_detailed_description"] = "Mst Saisun Detailed Description";
$tableCaptions[""]["vw_store_categories_for_saisun_group"] = "Vw Store Categories For Saisun Group";
$tableCaptions[""]["mst_sales_discount"] = "Mst Sales Discount";
$tableCaptions[""]["mst_ban_word"] = "Mst Ban Word";
$tableCaptions[""]["kataban_price"] = "Kataban Price";
$tableCaptions[""]["mst_category_class"] = "Mst Category Class";
$tableCaptions[""]["kaibutu"] = "買取物一覧";
$tableCaptions[""]["mst_ichiba_meeting"] = "Mst Ichiba Meeting";
$tableCaptions[""]["market_product_performance"] = "Market Product Performance";
$tableCaptions[""]["shouhin_batch"] = "商品バッチ";
$tableCaptions[""]["mst_gold_of_bullion_merchants"] = "Mst Gold Of Bullion Merchants";
$tableCaptions[""]["gold_check"] = "Gold Check";
$tableCaptions[""]["gold_check_item"] = "Gold Check Item";
$tableCaptions[""]["mst_delivery_type"] = "Mst Delivery Type";
$tableCaptions[""]["mst_bullion_dealer"] = "Mst Bullion Dealer";
$tableCaptions[""]["Eoc_nittsuu"] = "Eoc Nittsuu";
$tableCaptions[""]["mst_refining_status"] = "Mst Refining Status";
$tableCaptions[""]["Eoc_refining"] = "Eoc Refining";
$tableCaptions[""]["Eoc_refining_item"] = "Eoc Refining Item";
$tableCaptions[""]["mst_bullion_type"] = "Mst Bullion Type";
$tableCaptions[""]["mst_gold_of_bullion_merchants_price"] = "Mst Gold Of Bullion Merchants Price";
$tableCaptions[""]["box"] = "Box";
$tableCaptions[""]["ichiba_exhibition"] = "Ichiba Exhibition";
$tableCaptions[""]["mst_jigane_sheet"] = "Mst Jigane Sheet";
$tableCaptions[""]["vw_jigane_taiki"] = "Vw Jigane Taiki";
$tableCaptions[""]["ichiba_exhibition_shouhin"] = "Ichiba Exhibition Shouhin";
$tableCaptions[""]["DIA_QR_reading"] = "DIA QR Reading";
$tableCaptions[""]["mst_exhibition_item_type"] = "Mst Exhibition Item Type";
$tableCaptions[""]["sorting_batch"] = "Sorting Batch";
$tableCaptions[""]["mst_sorting_color_apart"] = "Mst Sorting Color Apart";
$tableCaptions[""]["mst_label_replace"] = "Mst Label Replace";
$tableCaptions[""]["mst_label_layout"] = "Mst Label Layout";
$tableCaptions[""]["user_label_output"] = "User Label Output";
$tableCaptions[""]["nyuko"] = "Nyuko";
$tableCaptions[""]["shouhin_for_labels"] = "Shouhin For Labels";
$tableCaptions[""]["mst_saisun_manual"] = "Mst Saisun Manual";
$tableCaptions[""]["mst_ebay_price"] = "Mst Ebay Price";
$tableCaptions[""]["mst_finish_terms"] = "Mst Finish Terms";
$tableCaptions[""]["mst_colorstone"] = "Mst Colorstone";
$tableCaptions[""]["mst_cost_category"] = "Mst Cost Category";
$tableCaptions[""]["Eoc_trader"] = "Eoc Trader";
$tableCaptions[""]["mst_business_partner"] = "Mst Business Partner";
$tableCaptions[""]["mst_condition_details"] = "Mst Condition Details";
$tableCaptions[""]["mst_quality"] = "Mst Quality";
$tableCaptions[""]["market_product_performance_original"] = "Market Product Performance Original";
$tableCaptions[""]["satei_items"] = "Satei Items";
$tableCaptions[""]["satei_items_rules"] = "Satei Items Rules";
$tableCaptions[""]["vw_store_categories_add_all"] = "Vw Store Categories Add All";
$tableCaptions[""]["vw_store_sub_categories_add_all"] = "Vw Store Sub Categories Add All";
$tableCaptions[""]["vw_mst_brand2_add_all"] = "Vw Mst Brand2 Add All";
$tableCaptions[""]["mst_brand_color"] = "Mst Brand Color";
$tableCaptions[""]["Eoc_takuhai_return"] = "Eoc Takuhai Return";
$tableCaptions[""]["Eoc_takuhai_return_items"] = "Eoc Takuhai Return Items";
$tableCaptions[""]["buy_campaign_data"] = "Buy Campaign Data";
$tableCaptions[""]["buy_campaign_data_detail"] = "Buy Campaign Data Detail";
$tableCaptions[""]["buy_campaign_data_rules"] = "Buy Campaign Data Rules";
$tableCaptions[""]["shouhin_group"] = "Shouhin Group";
$tableCaptions[""]["shouhin_group_detail"] = "Shouhin Group Detail";
$tableCaptions[""]["sales_report"] = "Sales Report";
$tableCaptions[""]["analysisMail_send_emails"] = "AnalysisMail Send Emails";
$tableCaptions[""]["analysisMail_send_logs"] = "AnalysisMail Send Logs";
$tableCaptions[""]["analysisMail_send_logs_bcc"] = "AnalysisMail Send Logs Bcc";
$tableCaptions[""]["mst_analysisMail_contents"] = "Mst AnalysisMail Contents";
$tableCaptions[""]["mst_analysisMail_fromaddress"] = "Mst AnalysisMail Fromaddress";
$tableCaptions[""]["mst_analysisMail_send_categories"] = "Mst AnalysisMail Send Categories";
$tableCaptions[""]["mst_analysisMail_send_groups"] = "Mst AnalysisMail Send Groups";
$tableCaptions[""]["mst_analysisMail_send_targets"] = "Mst AnalysisMail Send Targets";
$tableCaptions[""]["mst_analysisMail_shomei"] = "Mst AnalysisMail Shomei";
$tableCaptions[""]["mst_analysisMail_status"] = "Mst AnalysisMail Status";
$tableCaptions[""]["sagawa_api_results"] = "Sagawa Api Results";
$tableCaptions[""]["sagawa_api_result_codes"] = "Sagawa Api Result Codes";
$tableCaptions[""]["sagawa_api_error_details"] = "Sagawa Api Error Details";
$tableCaptions[""]["sagawa_api_error_details1"] = "Sagawa Api Error Details1";
$tableCaptions[""]["mst_dept_group"] = "Mst Dept Group";
$tableCaptions[""]["ycbm_bookings"] = "Ycbm Bookings";
$tableCaptions[""]["royal_customer"] = "Royal Customer";
$tableCaptions[""]["royal_customer_type"] = "Royal Customer Type";
$tableCaptions[""]["analysisMail_tags"] = "AnalysisMail Tags";
$tableCaptions[""]["mst_analysisMail_tags"] = "Mst AnalysisMail Tags";
$tableCaptions[""]["mst_royal_customer_status"] = "Mst Royal Customer Status";
$tableCaptions[""]["Eoc_royal_customers"] = "Eoc Royal Customers";
$tableCaptions[""]["mst_ycbm_booking_status"] = "Mst Ycbm Booking Status";
$tableCaptions[""]["freee_PLBS_by_year"] = "Freee PLBS By Year";
$tableCaptions[""]["freee_PLBS_details"] = "Freee PLBS Details";
$tableCaptions[""]["freee_PLBS_by_day"] = "Freee PLBS By Day";
$tableCaptions[""]["freee_PLBS_by_day_details"] = "Freee PLBS By Day Details";
$tableCaptions[""]["ad_params"] = "Ad Params";
$tableCaptions[""]["vw_Eoc_chigins_summaray"] = "Vw Eoc Chigins Summaray";
$tableCaptions[""]["mst_area"] = "Mst Area";
$tableCaptions[""]["freee_work_record_summaries"] = "Freee Work Record Summaries";
$tableCaptions[""]["vw_freee_work_record_summaries_by_nendo"] = "Vw Freee Work Record Summaries By Nendo";
$tableCaptions[""]["freee_employees_details"] = "Freee Employees Details";
$tableCaptions[""]["Eoc_inventory"] = "Eoc Inventory";
$tableCaptions[""]["Eoc_inventory_item"] = "Eoc Inventory Item";
$tableCaptions[""]["Eoc_inventory_weekly"] = "Eoc Inventory Weekly";
$tableCaptions[""]["freee_work_records_by_term"] = "Freee Work Records By Term";
$tableCaptions[""]["freee_work_records"] = "Freee Work Records";
$tableCaptions[""]["freee_employees"] = "Freee Employees";
$tableCaptions[""]["mst_dept_group_categories"] = "Mst Dept Group Categories";
$tableCaptions[""]["freee_deals"] = "Freee Deals";
$tableCaptions[""]["freee_deal_details"] = "Freee Deal Details";
$tableCaptions[""]["freee_memotags"] = "Freee Memotags";
$tableCaptions[""]["vw_freee_deals_data"] = "Vw Freee Deals Data";
$tableCaptions[""]["freee_partners"] = "Freee Partners";
$tableCaptions[""]["freee_items"] = "Freee Items";
$tableCaptions[""]["freee_sections"] = "Freee Sections";
$tableCaptions[""]["freee_account_items"] = "Freee Account Items";
$tableCaptions[""]["freee_taxes"] = "Freee Taxes";
$tableCaptions[""]["freee_deal_detail__memotag"] = "Freee Deal Detail  Memotag";
$tableCaptions[""]["mst_freee_deal_status"] = "Mst Freee Deal Status";
$tableCaptions[""]["mst_freee_deal_type"] = "Mst Freee Deal Type";
$tableCaptions[""]["mst_freee_entry_side"] = "Mst Freee Entry Side";
$tableCaptions[""]["freee_deal_join_manual_journal__detail__memotag"] = "Freee Deal Join Manual Journal  Detail  Memotag";
$tableCaptions[""]["freee_manual_journals"] = "Freee Manual Journals";
$tableCaptions[""]["freee_manual_journal_details"] = "Freee Manual Journal Details";
$tableCaptions[""]["freee_saisanhyou"] = "Freee Saisanhyou";
$tableCaptions[""]["freee_saisan_rule_details"] = "Freee Saisan Rule Details";
$tableCaptions[""]["freee_saisan_rules"] = "Freee Saisan Rules";
$tableCaptions[""]["freee_deal_join_manual_journal__details"] = "Freee Deal Join Manual Journal  Details";
$tableCaptions[""]["freee_expense_categories"] = "Freee Expense Categories";
$tableCaptions[""]["freee_apportionment_rule_detail"] = "Freee Apportionment Rule Detail";
$tableCaptions[""]["freee_apportionment_rules"] = "Freee Apportionment Rules";
$tableCaptions[""]["vw_freee_account_category"] = "Vw Freee Account Category";
$tableCaptions[""]["freee_account_categories_revenue"] = "Freee Account Categories Revenue";
$tableCaptions[""]["freee_inventory_details"] = "Freee Inventory Details";
$tableCaptions[""]["freee_saisanhyou_check_logs"] = "Freee Saisanhyou Check Logs";
$tableCaptions[""]["vw_Eoc_chigins_for_freee_import"] = "Vw Eoc Chigins For Freee Import";
$tableCaptions[""]["Eoc_chigins_for_freee_import"] = "Eoc Chigins For Freee Import";
$tableCaptions[""]["freee_in_house_sales"] = "Freee In House Sales";
$tableCaptions[""]["work_check_targets"] = "Work Check Targets";
$tableCaptions[""]["work_check_target_details"] = "Work Check Target Details";
$tableCaptions[""]["mst_freee_apportionment_rule_calc_bases"] = "Mst Freee Apportionment Rule Calc Bases";
$tableCaptions[""]["freee_saisan_goals"] = "Freee Saisan Goals";
$tableCaptions[""]["users_group_memberships"] = "Users Group Memberships";
$tableCaptions[""]["shop_front_details"] = "Shop Front Details";
$tableCaptions[""]["updated_Eoc_logs"] = "Updated Eoc Logs";
$tableCaptions[""]["mst_shops"] = "Mst Shops";
$tableCaptions[""]["shop_front_seiren_details"] = "Shop Front Seiren Details";
$tableCaptions[""]["_mst_condition"] = "Mst Condition";
$tableCaptions[""]["mst_jewelry_conditions"] = "Mst Jewelry Conditions";
$tableCaptions[""]["mst_work_task_categories"] = "Mst Work Task Categories";
$tableCaptions[""]["mst_work_task_statuses"] = "Mst Work Task Statuses";
$tableCaptions[""]["work_tasks"] = "Work Tasks";
$tableCaptions[""]["voice_sub_id_1"] = "Voice Sub Id 1";
$tableCaptions[""]["shop_front_seiren_brands"] = "Shop Front Seiren Brands";
$tableCaptions[""]["shop_reservations"] = "Shop Reservations";
$tableCaptions[""]["Eoc_monthly_reports"] = "Eoc Monthly Reports";
$tableCaptions[""]["Eoc_monthly_reports_by_prefectures"] = "Eoc Monthly Reports By Prefectures";
$tableCaptions[""]["screenshots"] = "Screenshots";
$tableCaptions[""]["Eoc_refining_v1"] = "Eoc Refining V1";
$tableCaptions["English"] = array();
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["Eoc_chigins"] = "買取備考";
$tableCaptions["English"]["_mail_check_type"] = "Mail Check Type";
$tableCaptions["English"]["Eoc_takuhai"] = "Eoc Takuhai";
$tableCaptions["English"]["_purchase_type"] = "Purchase Type";
$tableCaptions["English"]["_pref"] = "Pref";
$tableCaptions["English"]["saisun"] = "採寸待機";
$tableCaptions["English"]["brand_price"] = "Brand Price";
$tableCaptions["English"]["mst_country_of_origin"] = "Mst Country Of Origin";
$tableCaptions["English"]["mst_brand2"] = "Mst Brand2";
$tableCaptions["English"]["mst_zipper"] = "Mst Zipper";
$tableCaptions["English"]["mst_brand"] = "Mst Brand";
$tableCaptions["English"]["Eoc_guestquestion"] = "Eoc Guestquestion";
$tableCaptions["English"]["mst_designer"] = "Mst Designer";
$tableCaptions["English"]["mst_line"] = "Mst Line";
$tableCaptions["English"]["mst_wasabi"] = "Mst Wasabi";
$tableCaptions["English"]["mst_hahakai"] = "Mst Hahakai";
$tableCaptions["English"]["mst_effect"] = "Mst Effect";
$tableCaptions["English"]["mst_shape"] = "Mst Shape";
$tableCaptions["English"]["mst_cutting_style"] = "Mst Cutting Style";
$tableCaptions["English"]["mst_chain_type"] = "Mst Chain Type";
$tableCaptions["English"]["mst_number_of_stones"] = "Mst Number Of Stones";
$tableCaptions["English"]["mst_amount"] = "Mst Amount";
$tableCaptions["English"]["mst_reebonz_required"] = "Mst Reebonz Required";
$tableCaptions["English"]["mst_motif"] = "Mst Motif";
$tableCaptions["English"]["mst_Setting"] = "Mst Setting";
$tableCaptions["English"]["mst_processing"] = "Mst Processing";
$tableCaptions["English"]["mst_Appraiser"] = "Mst Appraiser";
$tableCaptions["English"]["mst_producing_area"] = "Mst Producing Area";
$tableCaptions["English"]["mst_satei_error"] = "Mst Satei Error";
$tableCaptions["English"]["mst_satei_error_item"] = "Mst Satei Error Item";
$tableCaptions["English"]["mst_wasabi_brand"] = "Mst Wasabi Brand";
$tableCaptions["English"]["mst_side_gem"] = "Mst Side Gem";
$tableCaptions["English"]["mst_silhouette"] = "Mst Silhouette";
$tableCaptions["English"]["mst_sleeve"] = "Mst Sleeve";
$tableCaptions["English"]["mst_breast"] = "Mst Breast";
$tableCaptions["English"]["mst_collar_neck_line"] = "Mst Collar Neck Line";
$tableCaptions["English"]["mst_saisun_item"] = "Mst Saisun Item";
$tableCaptions["English"]["mst_unit"] = "Mst Unit";
$tableCaptions["English"]["mst_saisun_item_by_category"] = "Mst Saisun Item By Category";
$tableCaptions["English"]["mst_hall_mark"] = "Mst Hall Mark";
$tableCaptions["English"]["shouhin"] = "商品一覧";
$tableCaptions["English"]["mst_toe"] = "Mst Toe";
$tableCaptions["English"]["mst_heel"] = "Mst Heel";
$tableCaptions["English"]["mst_cloth"] = "Mst Cloth";
$tableCaptions["English"]["mst_journal_account_item"] = "Mst Journal Account Item";
$tableCaptions["English"]["mst_journal_supplementary_subject"] = "Mst Journal Supplementary Subject";
$tableCaptions["English"]["mst_journal_group"] = "Mst Journal Group";
$tableCaptions["English"]["_chigin_type"] = "Chigin Type";
$tableCaptions["English"]["laravel_users"] = "Laravel Users";
$tableCaptions["English"]["mst_saisun_model"] = "Mst Saisun Model";
$tableCaptions["English"]["_chigin_result_type"] = "Chigin Result Type";
$tableCaptions["English"]["vw_box_csv"] = "Vw Box Csv";
$tableCaptions["English"]["kit_confirm"] = "Kit Confirm";
$tableCaptions["English"]["mst_bank"] = "Mst Bank";
$tableCaptions["English"]["Eoc"] = "顧客一覧";
$tableCaptions["English"]["mst_item"] = "Mst Item";
$tableCaptions["English"]["mst_color"] = "Mst Color";
$tableCaptions["English"]["vw_shouhin_ON_Eoc"] = "Vw Shouhin ON Eoc";
$tableCaptions["English"]["_goods_status2"] = "Goods Status2";
$tableCaptions["English"]["vw_shouhin_column"] = "Vw Shouhin Column";
$tableCaptions["English"]["mst_shouhin_column_name"] = "Mst Shouhin Column Name";
$tableCaptions["English"]["mst_wasabi_apparel_size"] = "Mst Wasabi Apparel Size";
$tableCaptions["English"]["mst_wasabi_shoe_size"] = "Mst Wasabi Shoe Size";
$tableCaptions["English"]["mst_DA_POLISH"] = "Mst DA POLISH";
$tableCaptions["English"]["mst_DA_SYMMETRY"] = "Mst DA SYMMETRY";
$tableCaptions["English"]["mst_Destination_selling"] = "Mst Destination Selling";
$tableCaptions["English"]["mst_Finish"] = "Mst Finish";
$tableCaptions["English"]["mst_Discrimination"] = "Mst Discrimination";
$tableCaptions["English"]["mst_accessories"] = "Mst Accessories";
$tableCaptions["English"]["mst_Sleeve_Length"] = "Mst Sleeve Length";
$tableCaptions["English"]["mst_length"] = "Mst Length";
$tableCaptions["English"]["id_key"] = "Id Key";
$tableCaptions["English"]["vw_hinbankaburi"] = "Vw Hinbankaburi";
$tableCaptions["English"]["Eoc_chigins_unfinished"] = "Eoc Chigins Unfinished";
$tableCaptions["English"]["Eoc_unfinished"] = "Eoc Unfinished";
$tableCaptions["English"]["haraidasi"] = "Haraidasi";
$tableCaptions["English"]["dia"] = "Dia";
$tableCaptions["English"]["_DIA_DA_SHAPE"] = "DIA DA SHAPE";
$tableCaptions["English"]["_DIA_DA_SUGARCANE"] = "DIA DA SUGARCANE";
$tableCaptions["English"]["mst_Intensity"] = "Mst Intensity";
$tableCaptions["English"]["mst_overtone"] = "Mst Overtone";
$tableCaptions["English"]["_DIA_DA_COLOR"] = "DIA DA COLOR";
$tableCaptions["English"]["_DIA_DA_CLARITY"] = "DIA DA CLARITY";
$tableCaptions["English"]["_DIA_DA_CUT"] = "DIA DA CUT";
$tableCaptions["English"]["_DIA_DA_FLUO"] = "DIA DA FLUO";
$tableCaptions["English"]["mst_color_fluo"] = "Mst Color Fluo";
$tableCaptions["English"]["_DIA_DA_APPRAISER"] = "DIA DA APPRAISER";
$tableCaptions["English"]["_DIA_DA_CUSTOMER"] = "DIA DA CUSTOMER";
$tableCaptions["English"]["kin_satei"] = "Kin Satei";
$tableCaptions["English"]["goods_num_seaquence"] = "Goods Num Seaquence";
$tableCaptions["English"]["seq"] = "Seq";
$tableCaptions["English"]["Eoc_catch"] = "Eoc Catch";
$tableCaptions["English"]["Eoc_received"] = "Eoc Received";
$tableCaptions["English"]["Eoc_received_events"] = "Eoc Received Events";
$tableCaptions["English"]["mst_Eoc_received_events"] = "Mst Eoc Received Events";
$tableCaptions["English"]["mst_Eoc_received_event_contents"] = "Mst Eoc Received Event Contents";
$tableCaptions["English"]["satei"] = "査定物一覧";
$tableCaptions["English"]["satei_of_jewelry"] = "Satei Of Jewelry";
$tableCaptions["English"]["satei_of_brand"] = "Satei Of Brand";
$tableCaptions["English"]["Eoc_takuhai_for_catch"] = "Eoc Takuhai For Catch";
$tableCaptions["English"]["Eoc_takuhai_events"] = "Eoc Takuhai Events";
$tableCaptions["English"]["Eoc_guestquestion_for_catch"] = "Eoc Guestquestion For Catch";
$tableCaptions["English"]["mst_Eoc_takuhai_status"] = "Mst Eoc Takuhai Status";
$tableCaptions["English"]["Eoc_transfer_confirm"] = "Eoc Transfer Confirm";
$tableCaptions["English"]["Eoc_transfer_confirm_after"] = "Eoc Transfer Confirm After";
$tableCaptions["English"]["Eoc_takuhai_for_catch_history"] = "Eoc Takuhai For Catch History";
$tableCaptions["English"]["vw_cw_task_id"] = "Vw Cw Task Id";
$tableCaptions["English"]["mst_ritou"] = "Mst Ritou";
$tableCaptions["English"]["Eoc_takuhai_speed"] = "Eoc Takuhai Speed";
$tableCaptions["English"]["users"] = "Users";
$tableCaptions["English"]["users_code"] = "Users Code";
$tableCaptions["English"]["transaction_ID"] = "Transaction ID";
$tableCaptions["English"]["tb_gold_property_price"] = "Tb Gold Property Price";
$tableCaptions["English"]["from_mail_tbl"] = "From Mail Tbl";
$tableCaptions["English"]["shomei_tbl"] = "Shomei Tbl";
$tableCaptions["English"]["mail_data_tbl"] = "Mail Data Tbl";
$tableCaptions["English"]["mail_data_tbl_category"] = "Mail Data Tbl Category";
$tableCaptions["English"]["mail_data_tbl_sub_category"] = "Mail Data Tbl Sub Category";
$tableCaptions["English"]["vw_Eoc_mail_magazine"] = "Vw Eoc Mail Magazine";
$tableCaptions["English"]["mst_mail_replace"] = "Mst Mail Replace";
$tableCaptions["English"]["vw_information_schema_for_mail"] = "Vw Information Schema For Mail";
$tableCaptions["English"]["chohyo"] = "Chohyo";
$tableCaptions["English"]["chohyo_by_seihin"] = "Chohyo By Seihin";
$tableCaptions["English"]["mst_special_instructions"] = "Mst Special Instructions";
$tableCaptions["English"]["chohyo_by_dia"] = "Chohyo By Dia";
$tableCaptions["English"]["chohyo_by_seihin_result"] = "Chohyo By Seihin Result";
$tableCaptions["English"]["chohyo_by_dia_result"] = "Chohyo By Dia Result";
$tableCaptions["English"]["mst_chohyo_type"] = "Mst Chohyo Type";
$tableCaptions["English"]["mst_color_code"] = "Mst Color Code";
$tableCaptions["English"]["mail_data_tbl_template"] = "Mail Data Tbl Template";
$tableCaptions["English"]["Eoc_timeline"] = "Eoc Timeline";
$tableCaptions["English"]["mst_Eoc_timeline_category"] = "Mst Eoc Timeline Category";
$tableCaptions["English"]["mst_destination"] = "Mst Destination";
$tableCaptions["English"]["Eoc_speed"] = "Eoc Speed";
$tableCaptions["English"]["vw_Eoc_returned_items"] = "Vw Eoc Returned Items";
$tableCaptions["English"]["lounge_report__buy_takuhai"] = "Lounge Report  Buy Takuhai";
$tableCaptions["English"]["mst_price_zone"] = "Mst Price Zone";
$tableCaptions["English"]["mst_saisun_condition_details"] = "Mst Saisun Condition Details";
$tableCaptions["English"]["mst_saisun_detailed_description"] = "Mst Saisun Detailed Description";
$tableCaptions["English"]["vw_store_categories_for_saisun_group"] = "Vw Store Categories For Saisun Group";
$tableCaptions["English"]["awazu"] = "合わず一覧";
$tableCaptions["English"]["mst_sales_discount"] = "Mst Sales Discount";
$tableCaptions["English"]["mst_ban_word"] = "Mst Ban Word";
$tableCaptions["English"]["kataban_price"] = "Kataban Price";
$tableCaptions["English"]["mst_category_class"] = "Mst Category Class";
$tableCaptions["English"]["mst_ichiba_meeting"] = "Mst Ichiba Meeting";
$tableCaptions["English"]["market_product_performance"] = "Market Product Performance";
$tableCaptions["English"]["shouhin_batch"] = "商品バッチ";
$tableCaptions["English"]["mst_gold_of_bullion_merchants"] = "Mst Gold Of Bullion Merchants";
$tableCaptions["English"]["gold_check"] = "Gold Check";
$tableCaptions["English"]["gold_check_item"] = "Gold Check Item";
$tableCaptions["English"]["mst_delivery_type"] = "Mst Delivery Type";
$tableCaptions["English"]["mst_bullion_dealer"] = "Mst Bullion Dealer";
$tableCaptions["English"]["Eoc_nittsuu"] = "Eoc Nittsuu";
$tableCaptions["English"]["mst_refining_status"] = "Mst Refining Status";
$tableCaptions["English"]["Eoc_refining"] = "Eoc Refining";
$tableCaptions["English"]["Eoc_refining_item"] = "Eoc Refining Item";
$tableCaptions["English"]["mst_bullion_type"] = "Mst Bullion Type";
$tableCaptions["English"]["mst_gold_of_bullion_merchants_price"] = "Mst Gold Of Bullion Merchants Price";
$tableCaptions["English"]["box"] = "Box";
$tableCaptions["English"]["ichiba_exhibition"] = "Ichiba Exhibition";
$tableCaptions["English"]["mst_jigane_sheet"] = "Mst Jigane Sheet";
$tableCaptions["English"]["vw_jigane_taiki"] = "Vw Jigane Taiki";
$tableCaptions["English"]["ichiba_exhibition_shouhin"] = "Ichiba Exhibition Shouhin";
$tableCaptions["English"]["DIA_QR_reading"] = "DIA QR Reading";
$tableCaptions["English"]["mst_exhibition_item_type"] = "Mst Exhibition Item Type";
$tableCaptions["English"]["sorting_batch"] = "Sorting Batch";
$tableCaptions["English"]["mst_sorting_color_apart"] = "Mst Sorting Color Apart";
$tableCaptions["English"]["mst_label_replace"] = "Mst Label Replace";
$tableCaptions["English"]["mst_label_layout"] = "Mst Label Layout";
$tableCaptions["English"]["user_label_output"] = "User Label Output";
$tableCaptions["English"]["nyuko"] = "Nyuko";
$tableCaptions["English"]["shouhin_for_labels"] = "Shouhin For Labels";
$tableCaptions["English"]["mst_saisun_manual"] = "Mst Saisun Manual";
$tableCaptions["English"]["mst_ebay_price"] = "Mst Ebay Price";
$tableCaptions["English"]["mst_finish_terms"] = "Mst Finish Terms";
$tableCaptions["English"]["mst_colorstone"] = "Mst Colorstone";
$tableCaptions["English"]["mst_cost_category"] = "Mst Cost Category";
$tableCaptions["English"]["Eoc_trader"] = "Eoc Trader";
$tableCaptions["English"]["mst_business_partner"] = "Mst Business Partner";
$tableCaptions["English"]["mst_condition_details"] = "Mst Condition Details";
$tableCaptions["English"]["mst_quality"] = "Mst Quality";
$tableCaptions["English"]["market_product_performance_original"] = "Market Product Performance Original";
$tableCaptions["English"]["satei_items"] = "Satei Items";
$tableCaptions["English"]["satei_items_rules"] = "Satei Items Rules";
$tableCaptions["English"]["vw_store_categories_add_all"] = "Vw Store Categories Add All";
$tableCaptions["English"]["vw_store_sub_categories_add_all"] = "Vw Store Sub Categories Add All";
$tableCaptions["English"]["vw_mst_brand2_add_all"] = "Vw Mst Brand2 Add All";
$tableCaptions["English"]["mst_brand_color"] = "Mst Brand Color";
$tableCaptions["English"]["Eoc_takuhai_return"] = "Eoc Takuhai Return";
$tableCaptions["English"]["Eoc_takuhai_return_items"] = "Eoc Takuhai Return Items";
$tableCaptions["English"]["mst_item_name"] = "アイテム名";
$tableCaptions["English"]["buy_campaign_data"] = "Buy Campaign Data";
$tableCaptions["English"]["buy_campaign_data_detail"] = "Buy Campaign Data Detail";
$tableCaptions["English"]["buy_campaign_data_rules"] = "Buy Campaign Data Rules";
$tableCaptions["English"]["shouhin_group"] = "Shouhin Group";
$tableCaptions["English"]["shouhin_group_detail"] = "Shouhin Group Detail";
$tableCaptions["English"]["sales_report"] = "Sales Report";
$tableCaptions["English"]["analysisMail_send_emails"] = "AnalysisMail Send Emails";
$tableCaptions["English"]["analysisMail_send_logs"] = "AnalysisMail Send Logs";
$tableCaptions["English"]["analysisMail_send_logs_bcc"] = "AnalysisMail Send Logs Bcc";
$tableCaptions["English"]["mst_analysisMail_contents"] = "Mst AnalysisMail Contents";
$tableCaptions["English"]["mst_analysisMail_fromaddress"] = "Mst AnalysisMail Fromaddress";
$tableCaptions["English"]["mst_analysisMail_send_categories"] = "Mst AnalysisMail Send Categories";
$tableCaptions["English"]["mst_analysisMail_send_groups"] = "Mst AnalysisMail Send Groups";
$tableCaptions["English"]["mst_analysisMail_send_targets"] = "Mst AnalysisMail Send Targets";
$tableCaptions["English"]["mst_analysisMail_shomei"] = "Mst AnalysisMail Shomei";
$tableCaptions["English"]["mst_analysisMail_status"] = "Mst AnalysisMail Status";
$tableCaptions["English"]["sagawa_api_results"] = "Sagawa Api Results";
$tableCaptions["English"]["sagawa_api_result_codes"] = "Sagawa Api Result Codes";
$tableCaptions["English"]["sagawa_api_error_details"] = "Sagawa Api Error Details";
$tableCaptions["English"]["sagawa_api_error_details1"] = "Sagawa Api Error Details1";
$tableCaptions["English"]["mst_dept_group"] = "Mst Dept Group";
$tableCaptions["English"]["ycbm_bookings"] = "Ycbm Bookings";
$tableCaptions["English"]["royal_customer"] = "Royal Customer";
$tableCaptions["English"]["royal_customer_type"] = "Royal Customer Type";
$tableCaptions["English"]["analysisMail_tags"] = "AnalysisMail Tags";
$tableCaptions["English"]["mst_analysisMail_tags"] = "Mst AnalysisMail Tags";
$tableCaptions["English"]["mst_royal_customer_status"] = "Mst Royal Customer Status";
$tableCaptions["English"]["Eoc_royal_customers"] = "Eoc Royal Customers";
$tableCaptions["English"]["mst_ycbm_booking_status"] = "Mst Ycbm Booking Status";
$tableCaptions["English"]["freee_PLBS_by_year"] = "Freee PLBS By Year";
$tableCaptions["English"]["freee_PLBS_details"] = "Freee PLBS Details";
$tableCaptions["English"]["freee_PLBS_by_day"] = "Freee PLBS By Day";
$tableCaptions["English"]["freee_PLBS_by_day_details"] = "Freee PLBS By Day Details";
$tableCaptions["English"]["ad_params"] = "Ad Params";
$tableCaptions["English"]["vw_Eoc_chigins_summaray"] = "Vw Eoc Chigins Summaray";
$tableCaptions["English"]["mst_area"] = "Mst Area";
$tableCaptions["English"]["freee_work_record_summaries"] = "Freee Work Record Summaries";
$tableCaptions["English"]["vw_freee_work_record_summaries_by_nendo"] = "Vw Freee Work Record Summaries By Nendo";
$tableCaptions["English"]["freee_employees_details"] = "Freee Employees Details";
$tableCaptions["English"]["Eoc_inventory"] = "Eoc Inventory";
$tableCaptions["English"]["Eoc_inventory_item"] = "Eoc Inventory Item";
$tableCaptions["English"]["Eoc_inventory_weekly"] = "Eoc Inventory Weekly";
$tableCaptions["English"]["freee_work_records_by_term"] = "Freee Work Records By Term";
$tableCaptions["English"]["freee_work_records"] = "Freee Work Records";
$tableCaptions["English"]["freee_employees"] = "Freee Employees";
$tableCaptions["English"]["mst_dept_group_categories"] = "Mst Dept Group Categories";
$tableCaptions["English"]["freee_deals"] = "Freee Deals";
$tableCaptions["English"]["freee_deal_details"] = "Freee Deal Details";
$tableCaptions["English"]["freee_memotags"] = "Freee Memotags";
$tableCaptions["English"]["vw_freee_deals_data"] = "Vw Freee Deals Data";
$tableCaptions["English"]["freee_partners"] = "Freee Partners";
$tableCaptions["English"]["freee_items"] = "Freee Items";
$tableCaptions["English"]["freee_sections"] = "Freee Sections";
$tableCaptions["English"]["freee_account_items"] = "Freee Account Items";
$tableCaptions["English"]["freee_taxes"] = "Freee Taxes";
$tableCaptions["English"]["freee_deal_detail__memotag"] = "Freee Deal Detail  Memotag";
$tableCaptions["English"]["mst_freee_deal_status"] = "Mst Freee Deal Status";
$tableCaptions["English"]["mst_freee_deal_type"] = "Mst Freee Deal Type";
$tableCaptions["English"]["mst_freee_entry_side"] = "Mst Freee Entry Side";
$tableCaptions["English"]["freee_deal_join_manual_journal__detail__memotag"] = "Freee Deal Join Manual Journal  Detail  Memotag";
$tableCaptions["English"]["freee_manual_journals"] = "Freee Manual Journals";
$tableCaptions["English"]["freee_manual_journal_details"] = "Freee Manual Journal Details";
$tableCaptions["English"]["freee_saisanhyou"] = "Freee Saisanhyou";
$tableCaptions["English"]["freee_saisan_rule_details"] = "Freee Saisan Rule Details";
$tableCaptions["English"]["freee_saisan_rules"] = "Freee Saisan Rules";
$tableCaptions["English"]["freee_deal_join_manual_journal__details"] = "Freee Deal Join Manual Journal  Details";
$tableCaptions["English"]["freee_expense_categories"] = "Freee Expense Categories";
$tableCaptions["English"]["freee_apportionment_rule_detail"] = "Freee Apportionment Rule Detail";
$tableCaptions["English"]["freee_apportionment_rules"] = "Freee Apportionment Rules";
$tableCaptions["English"]["vw_freee_account_category"] = "Vw Freee Account Category";
$tableCaptions["English"]["freee_account_categories_revenue"] = "Freee Account Categories Revenue";
$tableCaptions["English"]["freee_inventory_details"] = "Freee Inventory Details";
$tableCaptions["English"]["freee_saisanhyou_check_logs"] = "Freee Saisanhyou Check Logs";
$tableCaptions["English"]["vw_Eoc_chigins_for_freee_import"] = "Vw Eoc Chigins For Freee Import";
$tableCaptions["English"]["Eoc_chigins_for_freee_import"] = "Eoc Chigins For Freee Import";
$tableCaptions["English"]["freee_in_house_sales"] = "Freee In House Sales";
$tableCaptions["English"]["work_check_targets"] = "Work Check Targets";
$tableCaptions["English"]["work_check_target_details"] = "Work Check Target Details";
$tableCaptions["English"]["mst_freee_apportionment_rule_calc_bases"] = "Mst Freee Apportionment Rule Calc Bases";
$tableCaptions["English"]["freee_saisan_goals"] = "Freee Saisan Goals";
$tableCaptions["English"]["users_group_memberships"] = "Users Group Memberships";
$tableCaptions["English"]["shop_front_details"] = "Shop Front Details";
$tableCaptions["English"]["updated_Eoc_logs"] = "Updated Eoc Logs";
$tableCaptions["English"]["mst_shops"] = "Mst Shops";
$tableCaptions["English"]["shop_front_seiren_details"] = "Shop Front Seiren Details";
$tableCaptions["English"]["_mst_condition"] = "Mst Condition";
$tableCaptions["English"]["mst_jewelry_conditions"] = "Mst Jewelry Conditions";
$tableCaptions["English"]["mst_work_task_categories"] = "Mst Work Task Categories";
$tableCaptions["English"]["mst_work_task_statuses"] = "Mst Work Task Statuses";
$tableCaptions["English"]["work_tasks"] = "Work Tasks";
$tableCaptions["English"]["voice_sub_id_1"] = "Voice Sub Id 1";
$tableCaptions["English"]["shop_front_seiren_brands"] = "Shop Front Seiren Brands";
$tableCaptions["English"]["shop_reservations"] = "Shop Reservations";
$tableCaptions["English"]["Eoc_monthly_reports"] = "Eoc Monthly Reports";
$tableCaptions["English"]["Eoc_monthly_reports_by_prefectures"] = "Eoc Monthly Reports By Prefectures";
$tableCaptions["English"]["screenshots"] = "Screenshots";
$tableCaptions["English"]["Eoc_refining_v1"] = "Eoc Refining V1";


$globalEvents = new class_GlobalEvents;
$tableEvents = array();

require_once( getabspath('classes/labels.php') );
require_once( getabspath('classes/security.php') );
require_once( getabspath("connections/dbfunctions_legacy.php") );
require_once( getabspath("connections/ConnectionManager.php") );
include(getabspath('classes/searchclause.php'));
include(getabspath('classes/projectsettings.php'));
include_once(getabspath('classes/runnerpage.php'));
include_once(getabspath("classes/controls/ViewControl.php"));

$cman = new ConnectionManager();

$mlang_defaultlang = getDefaultLanguage();



$page_titles[".global"] = array();
if(mlang_getcurrentlang()=="Japanese")
{
}
if(mlang_getcurrentlang()=="")
{
}
if(mlang_getcurrentlang()=="English")
{
}

$globalSettings["showDetailedError"] = true;

// SearchClause::getSearchObject
$_cachedSeachClauses = array();


// default connection link #9875
$conn = $cman->getDefault()->conn;

$logoutPerformed = false;
$scriptname = getFileNameFromURL();
	if(!isLogged() && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php" && $scriptname!="checkduplicates.php")
{
	Security::doGuestLogin();
}



$isGroupSecurity = true;

$isUseRTEBasic = false;

$isUseRTECK = true;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;

$menuNodesIndex=0;



?>
