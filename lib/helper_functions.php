<?php

	$user_levels=array(	"End User",
						"Department Head",
						"Store Incharge",
						"Plant Head",
						"Head Of Procurement",
						"Admin"
					);

	
	/*
	|Echo wrapper function with out translation
	|
	*/  
	
	function formatted_date($date,$format="F j, Y"){
		$phpdate = strtotime( $date );
		return date($format,$phpdate );
	}
	
	function sql_date($date,$format="%Y-%m-%d %H:%M:%S"){
		return strftime($format,$date);
	}

	function e($value,$html=false){
		echo ($html) ? htmlspecialchars($value): $value; 	
	}
	

	/*-------------------------------------------------------
	| Qoute Check
	|
	| @parameter string value
	| return string
	|--------------------------------------------------------*/
	function mysql_insertion_check($value)
	{
		$magic_qutes_active= get_magic_quotes_gpc();
		$new_php=function_exists('mysql_escape_string()');
		
		if($new_php)
		{
			if($magic_qutes_active==true)
				$value=stripcslashes($value);
			$value=mysql_escape_string($value);
		}
		else
		{
			if($magic_qutes_active==false)
			$value=addcslashes($value);
		}
		return $value;
	}
	
	
	/*-------------------------------------------------------
	| Select box options set
	|
	| @parameter array,integer,string
	| return string 
	|--------------------------------------------------------*/
	function options_for_select($options,$value,$display,$default=false,$id=false)
	{
		if($options)
		{
			if($default)
			{
				$output='<option selected >Primary </option>';
			}
			else
			{
				$output='';
			}
			
			foreach( $options as $option )
			{
				if($id && ($id==$option[$value]))
				{
					$output .="<option selected value=\"$option[$value]\">".$option[$display]."</option>";
				}
				else
				{
					$output .="<option value=\"$option[$value]\">".$option[$display]."</option>";
				}
			}
			return $output;
		}
		else
		{
			return	$output='<option selected > Nothing To select </option>';
		}
	}
	
	
	function options_for_select_stock_item($options,$value,$display,$display2,$default=false)
	{
		if($options)
		{
			if($default)
			{
				$output='<option selected > Select One ... </option>';
			}
			else
			{
				$output='';
			}
			
			foreach( $options as $option )
			{
				$output .="<option value=\"$option[$value]\">".$option[$display].'<strong>,'.$option[$display2]."</strong></option>";
			}
			return $output;
		}
		else
		{
			return	$output='<option selected > Nothing To select </option>';
		}
	}
	
	function generate_timestamp($name,$num)
	{
		return $name ."#". $num ."-". Date("Y");	
	}
	
	

	/**
	 * Redirect To desired page
	 *
	 * @return void
	 * @author Ahmed Rajib
	 **/
	
	function redirect_to($destination="index.php")
	{
		header("location:$destination");
		exit;
	}
	
?>