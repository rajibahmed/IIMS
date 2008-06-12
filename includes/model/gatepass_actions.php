<?php
session_start();
require_once('../../lib/gatePass.class.php');




	extract($_POST);
	//print_r($_POST);
	$GatePass=new GatePass;
	
	$num = $GatePass->getNewId();
	$getData="'$num','$GatePass_num','$date_of_submit','$purpose','$name','$address', '$status','$IssueNo',''";
	
	extract($GatePass->CreateGatePassMaster($getData));
	
	$getData='';
	$counter=$id;
	

	for($i=0;$i<count($item_code);$i++)
	{	
		$getData =	"'null',	'$counter',
								'$item_code[$i]',
								'$item_qty[$i]',
								'$remark[$i]'
								";
	
		$GatePass->CreateGatePassDetails($getData);
	}
	echo "Gate Pass Save Successfully"	;

?>