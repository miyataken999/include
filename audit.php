<?php
class AuditTrailTable
{
	var $logTableName="evav62122_audit";
	var $params;
	
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength = 300;

	/**
	 * @type Connection
	 */
	protected $connection;
	
	function __construct()
	{
		global $cman;
		
		$this->connection = $cman->getForAudit();		
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
			
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
    }
	
    function LogLoginFailed($pUsername)
    {
    }
	
    function LogLogout()
    {
    }
	
    function LogChPassword()
    {
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($val,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
												
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{	
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }
    
    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }
	
    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;
			
			$this->connection->exec( $sql );
		}
		
    }
	
    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }
    
	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;
			
			$qResult = $this->connection->query( $sql );
			
			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}
			
			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}
	
	function logValueEnable($table)
	{
		if($table=="Eoc")
		{
			return true;
		}
		if($table=="PMT_EV001")
		{
			return true;
		}
		if($table=="Eoc_chigins2")
		{
			return true;
		}
		if($table=="Eoc_chigins")
		{
			return true;
		}
		if($table=="shouhin")
		{
			return true;
		}
		if($table=="saisun")
		{
			return true;
		}
		if($table=="satei")
		{
			return true;
		}
		if($table=="shouhin_batch")
		{
			return true;
		}
		if($table=="users")
		{
			return true;
		}
		if($table=="awazu")
		{
			return true;
		}
		if($table=="kaibutu")
		{
			return true;
		}
		if($table=="evav62122_audit")
		{
			return true;
		}
		if($table=="vw_Ehiden_kaitori")
		{
			return true;
		}
		if($table=="vw_Ehiden_kaitori_yuubin")
		{
			return true;
		}
		if($table=="mailsystem_send_schedule")
		{
			return true;
		}
		if($table=="vw_shuukei_st")
		{
			return true;
		}
		if($table=="auctions")
		{
			return true;
		}
		if($table=="voice_sub_id_3")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return false;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="sagawa_sales_office")
		{
			return false;
		}
		if($table=="store_sub_categories")
		{
			return true;
		}
		if($table=="store_categories")
		{
			return true;
		}
		if($table=="mst_rakuten_category")
		{
			return false;
		}
		if($table=="users1")
		{
			return false;
		}
		if($table=="_sex")
		{
			return false;
		}
		if($table=="mst_gold_property")
		{
			return true;
		}
		if($table=="KEN_ALL")
		{
			return false;
		}
		if($table=="mst_item_name")
		{
			return true;
		}
		if($table=="mst_item_name1")
		{
			return false;
		}
		if($table=="mst_item_name11")
		{
			return false;
		}
		if($table=="mst_item_name111")
		{
			return false;
		}
		if($table=="mst_item_name1111")
		{
			return false;
		}
		if($table=="_mail_check_type")
		{
			return false;
		}
		if($table=="Eoc_takuhai")
		{
			return true;
		}
		if($table=="_purchase_type")
		{
			return true;
		}
		if($table=="_pref")
		{
			return false;
		}
		if($table=="brand_price")
		{
			return true;
		}
		if($table=="mst_country_of_origin")
		{
			return true;
		}
		if($table=="mst_brand2")
		{
			return false;
		}
		if($table=="mst_zipper")
		{
			return true;
		}
		if($table=="mst_brand")
		{
			return true;
		}
		if($table=="Eoc_guestquestion")
		{
			return true;
		}
		if($table=="mst_designer")
		{
			return true;
		}
		if($table=="mst_line")
		{
			return true;
		}
		if($table=="mst_wasabi")
		{
			return true;
		}
		if($table=="mst_hahakai")
		{
			return true;
		}
		if($table=="mst_effect")
		{
			return true;
		}
		if($table=="mst_shape")
		{
			return true;
		}
		if($table=="mst_cutting_style")
		{
			return true;
		}
		if($table=="mst_chain_type")
		{
			return true;
		}
		if($table=="mst_number_of_stones")
		{
			return true;
		}
		if($table=="mst_amount")
		{
			return true;
		}
		if($table=="mst_reebonz_required")
		{
			return true;
		}
		if($table=="mst_motif")
		{
			return true;
		}
		if($table=="mst_Setting")
		{
			return true;
		}
		if($table=="mst_processing")
		{
			return true;
		}
		if($table=="mst_Appraiser")
		{
			return true;
		}
		if($table=="mst_producing_area")
		{
			return true;
		}
		if($table=="mst_satei_error")
		{
			return true;
		}
		if($table=="mst_satei_error_item")
		{
			return true;
		}
		if($table=="mst_wasabi_brand")
		{
			return true;
		}
		if($table=="mst_side_gem")
		{
			return true;
		}
		if($table=="mst_silhouette")
		{
			return true;
		}
		if($table=="mst_sleeve")
		{
			return true;
		}
		if($table=="mst_breast")
		{
			return true;
		}
		if($table=="mst_collar_neck_line")
		{
			return true;
		}
		if($table=="mst_saisun_item")
		{
			return true;
		}
		if($table=="mst_unit")
		{
			return true;
		}
		if($table=="mst_saisun_item_by_category")
		{
			return true;
		}
		if($table=="mst_hall_mark")
		{
			return true;
		}
		if($table=="mst_hall_mark1")
		{
			return true;
		}
		if($table=="mst_hall_mark11")
		{
			return true;
		}
		if($table=="mst_hall_mark111")
		{
			return true;
		}
		if($table=="mst_hall_mark1111")
		{
			return true;
		}
		if($table=="mst_toe")
		{
			return true;
		}
		if($table=="mst_heel")
		{
			return true;
		}
		if($table=="mst_cloth")
		{
			return true;
		}
		if($table=="mst_journal_account_item")
		{
			return true;
		}
		if($table=="mst_journal_supplementary_subject")
		{
			return true;
		}
		if($table=="mst_journal_group")
		{
			return true;
		}
		if($table=="_chigin_type")
		{
			return true;
		}
		if($table=="laravel_users")
		{
			return true;
		}
		if($table=="mst_saisun_model")
		{
			return true;
		}
		if($table=="_chigin_result_type")
		{
			return true;
		}
		if($table=="vw_box_csv")
		{
			return false;
		}
		if($table=="kit_confirm")
		{
			return true;
		}
		if($table=="mst_bank")
		{
			return true;
		}
		if($table=="mst_item")
		{
			return true;
		}
		if($table=="mst_color")
		{
			return true;
		}
		if($table=="vw_shouhin_ON_Eoc")
		{
			return true;
		}
		if($table=="_goods_status2")
		{
			return true;
		}
		if($table=="vw_shouhin_column")
		{
			return true;
		}
		if($table=="mst_shouhin_column_name")
		{
			return true;
		}
		if($table=="mst_wasabi_apparel_size")
		{
			return true;
		}
		if($table=="mst_wasabi_shoe_size")
		{
			return true;
		}
		if($table=="mst_DA_POLISH")
		{
			return true;
		}
		if($table=="mst_DA_SYMMETRY")
		{
			return true;
		}
		if($table=="mst_Destination_selling")
		{
			return true;
		}
		if($table=="mst_Finish")
		{
			return true;
		}
		if($table=="mst_Discrimination")
		{
			return true;
		}
		if($table=="mst_accessories")
		{
			return true;
		}
		if($table=="mst_Sleeve_Length")
		{
			return true;
		}
		if($table=="mst_length")
		{
			return true;
		}
		if($table=="id_key")
		{
			return true;
		}
		if($table=="vw_hinbankaburi")
		{
			return false;
		}
		if($table=="Eoc_chigins_unfinished")
		{
			return false;
		}
		if($table=="Eoc_unfinished")
		{
			return false;
		}
		if($table=="haraidasi")
		{
			return false;
		}
		if($table=="dia")
		{
			return true;
		}
		if($table=="_DIA_DA_SHAPE")
		{
			return false;
		}
		if($table=="_DIA_DA_SUGARCANE")
		{
			return false;
		}
		if($table=="mst_Intensity")
		{
			return false;
		}
		if($table=="mst_overtone")
		{
			return false;
		}
		if($table=="_DIA_DA_COLOR")
		{
			return false;
		}
		if($table=="_DIA_DA_CLARITY")
		{
			return false;
		}
		if($table=="_DIA_DA_CUT")
		{
			return true;
		}
		if($table=="_DIA_DA_FLUO")
		{
			return false;
		}
		if($table=="mst_color_fluo")
		{
			return false;
		}
		if($table=="_DIA_DA_APPRAISER")
		{
			return false;
		}
		if($table=="_DIA_DA_CUSTOMER")
		{
			return false;
		}
		if($table=="kin_satei")
		{
			return true;
		}
		if($table=="goods_num_seaquence")
		{
			return false;
		}
		if($table=="seq")
		{
			return false;
		}
		if($table=="Eoc_catch")
		{
			return true;
		}
		if($table=="Eoc_received")
		{
			return true;
		}
		if($table=="Eoc_received_events")
		{
			return true;
		}
		if($table=="mst_Eoc_received_events")
		{
			return true;
		}
		if($table=="mst_Eoc_received_event_contents")
		{
			return true;
		}
		if($table=="satei_of_jewelry")
		{
			return true;
		}
		if($table=="satei_of_brand")
		{
			return true;
		}
		if($table=="Eoc_takuhai_for_catch")
		{
			return true;
		}
		if($table=="Eoc_takuhai_events")
		{
			return true;
		}
		if($table=="Eoc_guestquestion_for_catch")
		{
			return true;
		}
		if($table=="mst_Eoc_takuhai_status")
		{
			return true;
		}
		if($table=="Eoc_transfer_confirm")
		{
			return true;
		}
		if($table=="Eoc_transfer_confirm_after")
		{
			return true;
		}
		if($table=="Eoc_takuhai_for_catch_history")
		{
			return true;
		}
		if($table=="vw_cw_task_id")
		{
			return true;
		}
		if($table=="mst_ritou")
		{
			return true;
		}
		if($table=="Eoc_takuhai_speed")
		{
			return true;
		}
		if($table=="users_code")
		{
			return true;
		}
		if($table=="transaction_ID")
		{
			return true;
		}
		if($table=="tb_gold_property_price")
		{
			return true;
		}
		if($table=="from_mail_tbl")
		{
			return true;
		}
		if($table=="shomei_tbl")
		{
			return true;
		}
		if($table=="mail_data_tbl")
		{
			return true;
		}
		if($table=="mail_data_tbl_category")
		{
			return true;
		}
		if($table=="mail_data_tbl_sub_category")
		{
			return true;
		}
		if($table=="vw_Eoc_mail_magazine")
		{
			return false;
		}
		if($table=="mst_mail_replace")
		{
			return true;
		}
		if($table=="vw_information_schema_for_mail")
		{
			return false;
		}
		if($table=="chohyo")
		{
			return true;
		}
		if($table=="chohyo_by_seihin")
		{
			return true;
		}
		if($table=="mst_special_instructions")
		{
			return true;
		}
		if($table=="chohyo_by_dia")
		{
			return true;
		}
		if($table=="chohyo_by_seihin_result")
		{
			return true;
		}
		if($table=="chohyo_by_dia_result")
		{
			return true;
		}
		if($table=="mst_chohyo_type")
		{
			return true;
		}
		if($table=="mst_color_code")
		{
			return true;
		}
		if($table=="mail_data_tbl_template")
		{
			return true;
		}
		if($table=="Eoc_timeline")
		{
			return true;
		}
		if($table=="mst_Eoc_timeline_category")
		{
			return true;
		}
		if($table=="mst_destination")
		{
			return false;
		}
		if($table=="Eoc_speed")
		{
			return true;
		}
		if($table=="vw_Eoc_returned_items")
		{
			return false;
		}
		if($table=="lounge_report__buy_takuhai")
		{
			return false;
		}
		if($table=="mst_price_zone")
		{
			return true;
		}
		if($table=="mst_saisun_condition_details")
		{
			return true;
		}
		if($table=="mst_saisun_detailed_description")
		{
			return true;
		}
		if($table=="vw_store_categories_for_saisun_group")
		{
			return false;
		}
		if($table=="mst_sales_discount")
		{
			return true;
		}
		if($table=="mst_ban_word")
		{
			return true;
		}
		if($table=="kataban_price")
		{
			return false;
		}
		if($table=="mst_category_class")
		{
			return false;
		}
		if($table=="mst_ichiba_meeting")
		{
			return true;
		}
		if($table=="market_product_performance")
		{
			return true;
		}
		if($table=="mst_gold_of_bullion_merchants")
		{
			return false;
		}
		if($table=="gold_check")
		{
			return true;
		}
		if($table=="gold_check_item")
		{
			return true;
		}
		if($table=="mst_delivery_type")
		{
			return false;
		}
		if($table=="mst_bullion_dealer")
		{
			return false;
		}
		if($table=="Eoc_nittsuu")
		{
			return true;
		}
		if($table=="mst_refining_status")
		{
			return true;
		}
		if($table=="Eoc_refining")
		{
			return true;
		}
		if($table=="Eoc_refining_item")
		{
			return true;
		}
		if($table=="mst_bullion_type")
		{
			return true;
		}
		if($table=="mst_gold_of_bullion_merchants_price")
		{
			return true;
		}
		if($table=="box")
		{
			return true;
		}
		if($table=="ichiba_exhibition")
		{
			return true;
		}
		if($table=="mst_jigane_sheet")
		{
			return false;
		}
		if($table=="vw_jigane_taiki")
		{
			return true;
		}
		if($table=="ichiba_exhibition_shouhin")
		{
			return true;
		}
		if($table=="DIA_QR_reading")
		{
			return true;
		}
		if($table=="mst_ichiba_meeting1")
		{
			return true;
		}
		if($table=="mst_exhibition_item_type")
		{
			return true;
		}
		if($table=="sorting_batch")
		{
			return true;
		}
		if($table=="mst_sorting_color_apart")
		{
			return true;
		}
		if($table=="mst_label_replace")
		{
			return false;
		}
		if($table=="mst_label_layout")
		{
			return false;
		}
		if($table=="user_label_output")
		{
			return false;
		}
		if($table=="nyuko")
		{
			return true;
		}
		if($table=="shouhin_for_labels")
		{
			return true;
		}
		if($table=="mst_saisun_manual")
		{
			return true;
		}
		if($table=="mst_ebay_price")
		{
			return true;
		}
		if($table=="mst_finish_terms")
		{
			return true;
		}
		if($table=="mst_colorstone")
		{
			return true;
		}
		if($table=="mst_cost_category")
		{
			return true;
		}
		if($table=="Eoc_trader")
		{
			return true;
		}
		if($table=="mst_business_partner")
		{
			return true;
		}
		if($table=="mst_condition_details")
		{
			return false;
		}
		if($table=="mst_quality")
		{
			return false;
		}
		if($table=="market_product_performance_original")
		{
			return true;
		}
		if($table=="satei_items")
		{
			return false;
		}
		if($table=="satei_items_rules")
		{
			return false;
		}
		if($table=="vw_store_categories_add_all")
		{
			return false;
		}
		if($table=="vw_store_sub_categories_add_all")
		{
			return false;
		}
		if($table=="vw_mst_brand2_add_all")
		{
			return false;
		}
		if($table=="mst_brand_color")
		{
			return true;
		}
		if($table=="Eoc_takuhai_return")
		{
			return true;
		}
		if($table=="Eoc_takuhai_return_items")
		{
			return true;
		}
		if($table=="buy_campaign_data")
		{
			return true;
		}
		if($table=="buy_campaign_data_detail")
		{
			return true;
		}
		if($table=="buy_campaign_data_rules")
		{
			return true;
		}
		if($table=="shouhin_group")
		{
			return true;
		}
		if($table=="shouhin_group_detail")
		{
			return true;
		}
		if($table=="sales_report")
		{
			return false;
		}
		if($table=="analysisMail_send_emails")
		{
			return true;
		}
		if($table=="analysisMail_send_logs")
		{
			return true;
		}
		if($table=="analysisMail_send_logs_bcc")
		{
			return true;
		}
		if($table=="mst_analysisMail_contents")
		{
			return true;
		}
		if($table=="mst_analysisMail_fromaddress")
		{
			return true;
		}
		if($table=="mst_analysisMail_send_categories")
		{
			return true;
		}
		if($table=="mst_analysisMail_send_groups")
		{
			return true;
		}
		if($table=="mst_analysisMail_send_targets")
		{
			return true;
		}
		if($table=="mst_analysisMail_shomei")
		{
			return true;
		}
		if($table=="mst_analysisMail_status")
		{
			return true;
		}
		if($table=="sagawa_api_results")
		{
			return true;
		}
		if($table=="sagawa_api_result_codes")
		{
			return true;
		}
		if($table=="sagawa_api_error_details")
		{
			return true;
		}
		if($table=="sagawa_api_error_details1")
		{
			return true;
		}
		if($table=="mst_dept_group")
		{
			return true;
		}
		if($table=="ycbm_bookings")
		{
			return true;
		}
		if($table=="royal_customer")
		{
			return true;
		}
		if($table=="royal_customer_type")
		{
			return true;
		}
		if($table=="analysisMail_tags")
		{
			return true;
		}
		if($table=="mst_analysisMail_tags")
		{
			return true;
		}
		if($table=="mst_royal_customer_status")
		{
			return true;
		}
		if($table=="Eoc_royal_customers")
		{
			return true;
		}
		if($table=="mst_ycbm_booking_status")
		{
			return false;
		}
		if($table=="freee_PLBS_by_year")
		{
			return false;
		}
		if($table=="freee_PLBS_details")
		{
			return false;
		}
		if($table=="freee_PLBS_by_day")
		{
			return false;
		}
		if($table=="freee_PLBS_by_day_details")
		{
			return false;
		}
		if($table=="ad_params")
		{
			return false;
		}
		if($table=="vw_Eoc_chigins_summaray")
		{
			return false;
		}
		if($table=="mst_area")
		{
			return false;
		}
		if($table=="freee_work_record_summaries")
		{
			return false;
		}
		if($table=="vw_freee_work_record_summaries_by_nendo")
		{
			return false;
		}
		if($table=="freee_employees_details")
		{
			return false;
		}
		if($table=="Eoc_inventory")
		{
			return false;
		}
		if($table=="Eoc_inventory_item")
		{
			return false;
		}
		if($table=="Eoc_inventory_weekly")
		{
			return false;
		}
		if($table=="freee_work_records_by_term")
		{
			return false;
		}
		if($table=="freee_work_records")
		{
			return false;
		}
		if($table=="freee_employees")
		{
			return false;
		}
		if($table=="mst_dept_group_categories")
		{
			return true;
		}
		if($table=="freee_deals")
		{
			return false;
		}
		if($table=="freee_deal_details")
		{
			return false;
		}
		if($table=="freee_memotags")
		{
			return false;
		}
		if($table=="vw_freee_deals_data")
		{
			return false;
		}
		if($table=="freee_partners")
		{
			return false;
		}
		if($table=="freee_items")
		{
			return false;
		}
		if($table=="freee_sections")
		{
			return false;
		}
		if($table=="freee_account_items")
		{
			return false;
		}
		if($table=="freee_taxes")
		{
			return false;
		}
		if($table=="freee_deal_detail__memotag")
		{
			return false;
		}
		if($table=="mst_freee_deal_status")
		{
			return false;
		}
		if($table=="mst_freee_deal_type")
		{
			return false;
		}
		if($table=="mst_freee_entry_side")
		{
			return false;
		}
		if($table=="freee_deal_join_manual_journal__detail__memotag")
		{
			return false;
		}
		if($table=="freee_manual_journals")
		{
			return false;
		}
		if($table=="freee_manual_journal_details")
		{
			return false;
		}
		if($table=="freee_saisanhyou")
		{
			return false;
		}
		if($table=="freee_saisan_rule_details")
		{
			return false;
		}
		if($table=="freee_saisan_rules")
		{
			return false;
		}
		if($table=="freee_deal_join_manual_journal__details")
		{
			return false;
		}
		if($table=="freee_expense_categories")
		{
			return false;
		}
		if($table=="freee_apportionment_rule_detail")
		{
			return false;
		}
		if($table=="freee_apportionment_rules")
		{
			return false;
		}
		if($table=="vw_freee_account_category")
		{
			return false;
		}
		if($table=="freee_account_categories_revenue")
		{
			return false;
		}
		if($table=="freee_inventory_details")
		{
			return false;
		}
		if($table=="freee_saisanhyou_check_logs")
		{
			return false;
		}
		if($table=="vw_Eoc_chigins_for_freee_import")
		{
			return false;
		}
		if($table=="Eoc_chigins_for_freee_import")
		{
			return true;
		}
		if($table=="freee_in_house_sales")
		{
			return true;
		}
		if($table=="work_check_targets")
		{
			return true;
		}
		if($table=="work_check_target_details")
		{
			return true;
		}
		if($table=="mst_freee_apportionment_rule_calc_bases")
		{
			return true;
		}
		if($table=="freee_saisan_goals")
		{
			return true;
		}
		if($table=="users_group_memberships")
		{
			return true;
		}
		if($table=="shop_front_details")
		{
			return true;
		}
		if($table=="updated_Eoc_logs")
		{
			return true;
		}
		if($table=="mst_shops")
		{
			return true;
		}
		if($table=="shop_front_seiren_details")
		{
			return true;
		}
		if($table=="_mst_condition")
		{
			return true;
		}
		if($table=="mst_jewelry_conditions")
		{
			return true;
		}
		if($table=="mst_work_task_categories")
		{
			return true;
		}
		if($table=="mst_work_task_statuses")
		{
			return true;
		}
		if($table=="work_tasks")
		{
			return true;
		}
		if($table=="voice_sub_id_1")
		{
			return true;
		}
		if($table=="shop_front_seiren_brands")
		{
			return true;
		}
		if($table=="shop_reservations")
		{
			return true;
		}
		if($table=="Eoc_monthly_reports")
		{
			return true;
		}
		if($table=="Eoc_monthly_reports_by_prefectures")
		{
			return false;
		}
		if($table=="screenshots")
		{
			return false;
		}
		if($table=="Eoc_refining_v1")
		{
			return false;
		}
	}
	
	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table"). 
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip). 
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action). 
			"," .$this->connection->prepareString($description).
			")";
		
		return $this->connection->exec( $sql );
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength = 300;
	
	function __construct()
	{
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
		    }
	
    function LogLoginFailed($pUsername)
    {
		    }
	
    function LogLogout()
    {
    }
	
    function LogChPassword()
    {
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v1)>$this->maxFieldLength)
								$v1=runner_substr($v1,0,$this->maxFieldLength);
						}
						
						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v2)>$this->maxFieldLength)
								$v2=runner_substr($v2,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v=str_replace(array("\r\n","\n","\t")," ",$val);
						if(strlen($v)>$this->maxFieldLength)
							$v=runner_substr($v,0,$this->maxFieldLength);
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";
				
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;
		
		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );
		
	}
	
	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
    
    function LoginAccess()
	{
		return false;
	}
	
	function LoginSuccessful()
    {
		return true;
    }
	
    function LoginUnsuccessful($pUsername)
    {	
		return true;
	}
	
	function logValueEnable($table)
	{
		if($table=="Eoc")
		{
			return true;
		}
		if($table=="PMT_EV001")
		{
			return true;
		}
		if($table=="Eoc_chigins2")
		{
			return true;
		}
		if($table=="Eoc_chigins")
		{
			return true;
		}
		if($table=="shouhin")
		{
			return true;
		}
		if($table=="saisun")
		{
			return true;
		}
		if($table=="satei")
		{
			return true;
		}
		if($table=="shouhin_batch")
		{
			return true;
		}
		if($table=="users")
		{
			return true;
		}
		if($table=="awazu")
		{
			return true;
		}
		if($table=="kaibutu")
		{
			return true;
		}
		if($table=="evav62122_audit")
		{
			return true;
		}
		if($table=="vw_Ehiden_kaitori")
		{
			return true;
		}
		if($table=="vw_Ehiden_kaitori_yuubin")
		{
			return true;
		}
		if($table=="mailsystem_send_schedule")
		{
			return true;
		}
		if($table=="vw_shuukei_st")
		{
			return true;
		}
		if($table=="auctions")
		{
			return true;
		}
		if($table=="voice_sub_id_3")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return false;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="sagawa_sales_office")
		{
			return false;
		}
		if($table=="store_sub_categories")
		{
			return true;
		}
		if($table=="store_categories")
		{
			return true;
		}
		if($table=="mst_rakuten_category")
		{
			return false;
		}
		if($table=="users1")
		{
			return false;
		}
		if($table=="_sex")
		{
			return false;
		}
		if($table=="mst_gold_property")
		{
			return true;
		}
		if($table=="KEN_ALL")
		{
			return false;
		}
		if($table=="mst_item_name")
		{
			return true;
		}
		if($table=="mst_item_name1")
		{
			return false;
		}
		if($table=="mst_item_name11")
		{
			return false;
		}
		if($table=="mst_item_name111")
		{
			return false;
		}
		if($table=="mst_item_name1111")
		{
			return false;
		}
		if($table=="_mail_check_type")
		{
			return false;
		}
		if($table=="Eoc_takuhai")
		{
			return true;
		}
		if($table=="_purchase_type")
		{
			return true;
		}
		if($table=="_pref")
		{
			return false;
		}
		if($table=="brand_price")
		{
			return true;
		}
		if($table=="mst_country_of_origin")
		{
			return true;
		}
		if($table=="mst_brand2")
		{
			return false;
		}
		if($table=="mst_zipper")
		{
			return true;
		}
		if($table=="mst_brand")
		{
			return true;
		}
		if($table=="Eoc_guestquestion")
		{
			return true;
		}
		if($table=="mst_designer")
		{
			return true;
		}
		if($table=="mst_line")
		{
			return true;
		}
		if($table=="mst_wasabi")
		{
			return true;
		}
		if($table=="mst_hahakai")
		{
			return true;
		}
		if($table=="mst_effect")
		{
			return true;
		}
		if($table=="mst_shape")
		{
			return true;
		}
		if($table=="mst_cutting_style")
		{
			return true;
		}
		if($table=="mst_chain_type")
		{
			return true;
		}
		if($table=="mst_number_of_stones")
		{
			return true;
		}
		if($table=="mst_amount")
		{
			return true;
		}
		if($table=="mst_reebonz_required")
		{
			return true;
		}
		if($table=="mst_motif")
		{
			return true;
		}
		if($table=="mst_Setting")
		{
			return true;
		}
		if($table=="mst_processing")
		{
			return true;
		}
		if($table=="mst_Appraiser")
		{
			return true;
		}
		if($table=="mst_producing_area")
		{
			return true;
		}
		if($table=="mst_satei_error")
		{
			return true;
		}
		if($table=="mst_satei_error_item")
		{
			return true;
		}
		if($table=="mst_wasabi_brand")
		{
			return true;
		}
		if($table=="mst_side_gem")
		{
			return true;
		}
		if($table=="mst_silhouette")
		{
			return true;
		}
		if($table=="mst_sleeve")
		{
			return true;
		}
		if($table=="mst_breast")
		{
			return true;
		}
		if($table=="mst_collar_neck_line")
		{
			return true;
		}
		if($table=="mst_saisun_item")
		{
			return true;
		}
		if($table=="mst_unit")
		{
			return true;
		}
		if($table=="mst_saisun_item_by_category")
		{
			return true;
		}
		if($table=="mst_hall_mark")
		{
			return true;
		}
		if($table=="mst_hall_mark1")
		{
			return true;
		}
		if($table=="mst_hall_mark11")
		{
			return true;
		}
		if($table=="mst_hall_mark111")
		{
			return true;
		}
		if($table=="mst_hall_mark1111")
		{
			return true;
		}
		if($table=="mst_toe")
		{
			return true;
		}
		if($table=="mst_heel")
		{
			return true;
		}
		if($table=="mst_cloth")
		{
			return true;
		}
		if($table=="mst_journal_account_item")
		{
			return true;
		}
		if($table=="mst_journal_supplementary_subject")
		{
			return true;
		}
		if($table=="mst_journal_group")
		{
			return true;
		}
		if($table=="_chigin_type")
		{
			return true;
		}
		if($table=="laravel_users")
		{
			return true;
		}
		if($table=="mst_saisun_model")
		{
			return true;
		}
		if($table=="_chigin_result_type")
		{
			return true;
		}
		if($table=="vw_box_csv")
		{
			return false;
		}
		if($table=="kit_confirm")
		{
			return true;
		}
		if($table=="mst_bank")
		{
			return true;
		}
		if($table=="mst_item")
		{
			return true;
		}
		if($table=="mst_color")
		{
			return true;
		}
		if($table=="vw_shouhin_ON_Eoc")
		{
			return true;
		}
		if($table=="_goods_status2")
		{
			return true;
		}
		if($table=="vw_shouhin_column")
		{
			return true;
		}
		if($table=="mst_shouhin_column_name")
		{
			return true;
		}
		if($table=="mst_wasabi_apparel_size")
		{
			return true;
		}
		if($table=="mst_wasabi_shoe_size")
		{
			return true;
		}
		if($table=="mst_DA_POLISH")
		{
			return true;
		}
		if($table=="mst_DA_SYMMETRY")
		{
			return true;
		}
		if($table=="mst_Destination_selling")
		{
			return true;
		}
		if($table=="mst_Finish")
		{
			return true;
		}
		if($table=="mst_Discrimination")
		{
			return true;
		}
		if($table=="mst_accessories")
		{
			return true;
		}
		if($table=="mst_Sleeve_Length")
		{
			return true;
		}
		if($table=="mst_length")
		{
			return true;
		}
		if($table=="id_key")
		{
			return true;
		}
		if($table=="vw_hinbankaburi")
		{
			return false;
		}
		if($table=="Eoc_chigins_unfinished")
		{
			return false;
		}
		if($table=="Eoc_unfinished")
		{
			return false;
		}
		if($table=="haraidasi")
		{
			return false;
		}
		if($table=="dia")
		{
			return true;
		}
		if($table=="_DIA_DA_SHAPE")
		{
			return false;
		}
		if($table=="_DIA_DA_SUGARCANE")
		{
			return false;
		}
		if($table=="mst_Intensity")
		{
			return false;
		}
		if($table=="mst_overtone")
		{
			return false;
		}
		if($table=="_DIA_DA_COLOR")
		{
			return false;
		}
		if($table=="_DIA_DA_CLARITY")
		{
			return false;
		}
		if($table=="_DIA_DA_CUT")
		{
			return true;
		}
		if($table=="_DIA_DA_FLUO")
		{
			return false;
		}
		if($table=="mst_color_fluo")
		{
			return false;
		}
		if($table=="_DIA_DA_APPRAISER")
		{
			return false;
		}
		if($table=="_DIA_DA_CUSTOMER")
		{
			return false;
		}
		if($table=="kin_satei")
		{
			return true;
		}
		if($table=="goods_num_seaquence")
		{
			return false;
		}
		if($table=="seq")
		{
			return false;
		}
		if($table=="Eoc_catch")
		{
			return true;
		}
		if($table=="Eoc_received")
		{
			return true;
		}
		if($table=="Eoc_received_events")
		{
			return true;
		}
		if($table=="mst_Eoc_received_events")
		{
			return true;
		}
		if($table=="mst_Eoc_received_event_contents")
		{
			return true;
		}
		if($table=="satei_of_jewelry")
		{
			return true;
		}
		if($table=="satei_of_brand")
		{
			return true;
		}
		if($table=="Eoc_takuhai_for_catch")
		{
			return true;
		}
		if($table=="Eoc_takuhai_events")
		{
			return true;
		}
		if($table=="Eoc_guestquestion_for_catch")
		{
			return true;
		}
		if($table=="mst_Eoc_takuhai_status")
		{
			return true;
		}
		if($table=="Eoc_transfer_confirm")
		{
			return true;
		}
		if($table=="Eoc_transfer_confirm_after")
		{
			return true;
		}
		if($table=="Eoc_takuhai_for_catch_history")
		{
			return true;
		}
		if($table=="vw_cw_task_id")
		{
			return true;
		}
		if($table=="mst_ritou")
		{
			return true;
		}
		if($table=="Eoc_takuhai_speed")
		{
			return true;
		}
		if($table=="users_code")
		{
			return true;
		}
		if($table=="transaction_ID")
		{
			return true;
		}
		if($table=="tb_gold_property_price")
		{
			return true;
		}
		if($table=="from_mail_tbl")
		{
			return true;
		}
		if($table=="shomei_tbl")
		{
			return true;
		}
		if($table=="mail_data_tbl")
		{
			return true;
		}
		if($table=="mail_data_tbl_category")
		{
			return true;
		}
		if($table=="mail_data_tbl_sub_category")
		{
			return true;
		}
		if($table=="vw_Eoc_mail_magazine")
		{
			return false;
		}
		if($table=="mst_mail_replace")
		{
			return true;
		}
		if($table=="vw_information_schema_for_mail")
		{
			return false;
		}
		if($table=="chohyo")
		{
			return true;
		}
		if($table=="chohyo_by_seihin")
		{
			return true;
		}
		if($table=="mst_special_instructions")
		{
			return true;
		}
		if($table=="chohyo_by_dia")
		{
			return true;
		}
		if($table=="chohyo_by_seihin_result")
		{
			return true;
		}
		if($table=="chohyo_by_dia_result")
		{
			return true;
		}
		if($table=="mst_chohyo_type")
		{
			return true;
		}
		if($table=="mst_color_code")
		{
			return true;
		}
		if($table=="mail_data_tbl_template")
		{
			return true;
		}
		if($table=="Eoc_timeline")
		{
			return true;
		}
		if($table=="mst_Eoc_timeline_category")
		{
			return true;
		}
		if($table=="mst_destination")
		{
			return false;
		}
		if($table=="Eoc_speed")
		{
			return true;
		}
		if($table=="vw_Eoc_returned_items")
		{
			return false;
		}
		if($table=="lounge_report__buy_takuhai")
		{
			return false;
		}
		if($table=="mst_price_zone")
		{
			return true;
		}
		if($table=="mst_saisun_condition_details")
		{
			return true;
		}
		if($table=="mst_saisun_detailed_description")
		{
			return true;
		}
		if($table=="vw_store_categories_for_saisun_group")
		{
			return false;
		}
		if($table=="mst_sales_discount")
		{
			return true;
		}
		if($table=="mst_ban_word")
		{
			return true;
		}
		if($table=="kataban_price")
		{
			return false;
		}
		if($table=="mst_category_class")
		{
			return false;
		}
		if($table=="mst_ichiba_meeting")
		{
			return true;
		}
		if($table=="market_product_performance")
		{
			return true;
		}
		if($table=="mst_gold_of_bullion_merchants")
		{
			return false;
		}
		if($table=="gold_check")
		{
			return true;
		}
		if($table=="gold_check_item")
		{
			return true;
		}
		if($table=="mst_delivery_type")
		{
			return false;
		}
		if($table=="mst_bullion_dealer")
		{
			return false;
		}
		if($table=="Eoc_nittsuu")
		{
			return true;
		}
		if($table=="mst_refining_status")
		{
			return true;
		}
		if($table=="Eoc_refining")
		{
			return true;
		}
		if($table=="Eoc_refining_item")
		{
			return true;
		}
		if($table=="mst_bullion_type")
		{
			return true;
		}
		if($table=="mst_gold_of_bullion_merchants_price")
		{
			return true;
		}
		if($table=="box")
		{
			return true;
		}
		if($table=="ichiba_exhibition")
		{
			return true;
		}
		if($table=="mst_jigane_sheet")
		{
			return false;
		}
		if($table=="vw_jigane_taiki")
		{
			return true;
		}
		if($table=="ichiba_exhibition_shouhin")
		{
			return true;
		}
		if($table=="DIA_QR_reading")
		{
			return true;
		}
		if($table=="mst_ichiba_meeting1")
		{
			return true;
		}
		if($table=="mst_exhibition_item_type")
		{
			return true;
		}
		if($table=="sorting_batch")
		{
			return true;
		}
		if($table=="mst_sorting_color_apart")
		{
			return true;
		}
		if($table=="mst_label_replace")
		{
			return false;
		}
		if($table=="mst_label_layout")
		{
			return false;
		}
		if($table=="user_label_output")
		{
			return false;
		}
		if($table=="nyuko")
		{
			return true;
		}
		if($table=="shouhin_for_labels")
		{
			return true;
		}
		if($table=="mst_saisun_manual")
		{
			return true;
		}
		if($table=="mst_ebay_price")
		{
			return true;
		}
		if($table=="mst_finish_terms")
		{
			return true;
		}
		if($table=="mst_colorstone")
		{
			return true;
		}
		if($table=="mst_cost_category")
		{
			return true;
		}
		if($table=="Eoc_trader")
		{
			return true;
		}
		if($table=="mst_business_partner")
		{
			return true;
		}
		if($table=="mst_condition_details")
		{
			return false;
		}
		if($table=="mst_quality")
		{
			return false;
		}
		if($table=="market_product_performance_original")
		{
			return true;
		}
		if($table=="satei_items")
		{
			return false;
		}
		if($table=="satei_items_rules")
		{
			return false;
		}
		if($table=="vw_store_categories_add_all")
		{
			return false;
		}
		if($table=="vw_store_sub_categories_add_all")
		{
			return false;
		}
		if($table=="vw_mst_brand2_add_all")
		{
			return false;
		}
		if($table=="mst_brand_color")
		{
			return true;
		}
		if($table=="Eoc_takuhai_return")
		{
			return true;
		}
		if($table=="Eoc_takuhai_return_items")
		{
			return true;
		}
		if($table=="buy_campaign_data")
		{
			return true;
		}
		if($table=="buy_campaign_data_detail")
		{
			return true;
		}
		if($table=="buy_campaign_data_rules")
		{
			return true;
		}
		if($table=="shouhin_group")
		{
			return true;
		}
		if($table=="shouhin_group_detail")
		{
			return true;
		}
		if($table=="sales_report")
		{
			return false;
		}
		if($table=="analysisMail_send_emails")
		{
			return true;
		}
		if($table=="analysisMail_send_logs")
		{
			return true;
		}
		if($table=="analysisMail_send_logs_bcc")
		{
			return true;
		}
		if($table=="mst_analysisMail_contents")
		{
			return true;
		}
		if($table=="mst_analysisMail_fromaddress")
		{
			return true;
		}
		if($table=="mst_analysisMail_send_categories")
		{
			return true;
		}
		if($table=="mst_analysisMail_send_groups")
		{
			return true;
		}
		if($table=="mst_analysisMail_send_targets")
		{
			return true;
		}
		if($table=="mst_analysisMail_shomei")
		{
			return true;
		}
		if($table=="mst_analysisMail_status")
		{
			return true;
		}
		if($table=="sagawa_api_results")
		{
			return true;
		}
		if($table=="sagawa_api_result_codes")
		{
			return true;
		}
		if($table=="sagawa_api_error_details")
		{
			return true;
		}
		if($table=="sagawa_api_error_details1")
		{
			return true;
		}
		if($table=="mst_dept_group")
		{
			return true;
		}
		if($table=="ycbm_bookings")
		{
			return true;
		}
		if($table=="royal_customer")
		{
			return true;
		}
		if($table=="royal_customer_type")
		{
			return true;
		}
		if($table=="analysisMail_tags")
		{
			return true;
		}
		if($table=="mst_analysisMail_tags")
		{
			return true;
		}
		if($table=="mst_royal_customer_status")
		{
			return true;
		}
		if($table=="Eoc_royal_customers")
		{
			return true;
		}
		if($table=="mst_ycbm_booking_status")
		{
			return false;
		}
		if($table=="freee_PLBS_by_year")
		{
			return false;
		}
		if($table=="freee_PLBS_details")
		{
			return false;
		}
		if($table=="freee_PLBS_by_day")
		{
			return false;
		}
		if($table=="freee_PLBS_by_day_details")
		{
			return false;
		}
		if($table=="ad_params")
		{
			return false;
		}
		if($table=="vw_Eoc_chigins_summaray")
		{
			return false;
		}
		if($table=="mst_area")
		{
			return false;
		}
		if($table=="freee_work_record_summaries")
		{
			return false;
		}
		if($table=="vw_freee_work_record_summaries_by_nendo")
		{
			return false;
		}
		if($table=="freee_employees_details")
		{
			return false;
		}
		if($table=="Eoc_inventory")
		{
			return false;
		}
		if($table=="Eoc_inventory_item")
		{
			return false;
		}
		if($table=="Eoc_inventory_weekly")
		{
			return false;
		}
		if($table=="freee_work_records_by_term")
		{
			return false;
		}
		if($table=="freee_work_records")
		{
			return false;
		}
		if($table=="freee_employees")
		{
			return false;
		}
		if($table=="mst_dept_group_categories")
		{
			return true;
		}
		if($table=="freee_deals")
		{
			return false;
		}
		if($table=="freee_deal_details")
		{
			return false;
		}
		if($table=="freee_memotags")
		{
			return false;
		}
		if($table=="vw_freee_deals_data")
		{
			return false;
		}
		if($table=="freee_partners")
		{
			return false;
		}
		if($table=="freee_items")
		{
			return false;
		}
		if($table=="freee_sections")
		{
			return false;
		}
		if($table=="freee_account_items")
		{
			return false;
		}
		if($table=="freee_taxes")
		{
			return false;
		}
		if($table=="freee_deal_detail__memotag")
		{
			return false;
		}
		if($table=="mst_freee_deal_status")
		{
			return false;
		}
		if($table=="mst_freee_deal_type")
		{
			return false;
		}
		if($table=="mst_freee_entry_side")
		{
			return false;
		}
		if($table=="freee_deal_join_manual_journal__detail__memotag")
		{
			return false;
		}
		if($table=="freee_manual_journals")
		{
			return false;
		}
		if($table=="freee_manual_journal_details")
		{
			return false;
		}
		if($table=="freee_saisanhyou")
		{
			return false;
		}
		if($table=="freee_saisan_rule_details")
		{
			return false;
		}
		if($table=="freee_saisan_rules")
		{
			return false;
		}
		if($table=="freee_deal_join_manual_journal__details")
		{
			return false;
		}
		if($table=="freee_expense_categories")
		{
			return false;
		}
		if($table=="freee_apportionment_rule_detail")
		{
			return false;
		}
		if($table=="freee_apportionment_rules")
		{
			return false;
		}
		if($table=="vw_freee_account_category")
		{
			return false;
		}
		if($table=="freee_account_categories_revenue")
		{
			return false;
		}
		if($table=="freee_inventory_details")
		{
			return false;
		}
		if($table=="freee_saisanhyou_check_logs")
		{
			return false;
		}
		if($table=="vw_Eoc_chigins_for_freee_import")
		{
			return false;
		}
		if($table=="Eoc_chigins_for_freee_import")
		{
			return true;
		}
		if($table=="freee_in_house_sales")
		{
			return true;
		}
		if($table=="work_check_targets")
		{
			return true;
		}
		if($table=="work_check_target_details")
		{
			return true;
		}
		if($table=="mst_freee_apportionment_rule_calc_bases")
		{
			return true;
		}
		if($table=="freee_saisan_goals")
		{
			return true;
		}
		if($table=="users_group_memberships")
		{
			return true;
		}
		if($table=="shop_front_details")
		{
			return true;
		}
		if($table=="updated_Eoc_logs")
		{
			return true;
		}
		if($table=="mst_shops")
		{
			return true;
		}
		if($table=="shop_front_seiren_details")
		{
			return true;
		}
		if($table=="_mst_condition")
		{
			return true;
		}
		if($table=="mst_jewelry_conditions")
		{
			return true;
		}
		if($table=="mst_work_task_categories")
		{
			return true;
		}
		if($table=="mst_work_task_statuses")
		{
			return true;
		}
		if($table=="work_tasks")
		{
			return true;
		}
		if($table=="voice_sub_id_1")
		{
			return true;
		}
		if($table=="shop_front_seiren_brands")
		{
			return true;
		}
		if($table=="shop_reservations")
		{
			return true;
		}
		if($table=="Eoc_monthly_reports")
		{
			return true;
		}
		if($table=="Eoc_monthly_reports_by_prefectures")
		{
			return false;
		}
		if($table=="screenshots")
		{
			return false;
		}
		if($table=="Eoc_refining_v1")
		{
			return false;
		}
	}
}
?>