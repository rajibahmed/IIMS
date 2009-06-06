<?php 	

session_start();
require_once('../../lib/requisition.class.php');
$requisition= new Requisition;


if(isset($_POST['submit']))
{	
	$fields=array();
	extract($_POST);
	
	if(	$_SESSION[user_level]==0)	
	{	$status=1;	}
	
	
	$getData="$user_id,$status,'$required_within','$submit_date'";
	
	extract($requisition->CreateRequisitionMaster($getData));
	

	
	$requisition_master_id = $id;
	
	$getData='';
	
	for($i=0;$i<count($item_code);$i++)
	{	
		$getData =	"'null',	$requisition_master_id,
								$item_code[$i],
								$item_qty[$i],
								$item_price[$i],
								'$item_description[$i]'";
								
		$requisition->CreateRequisitionDetails($getData);
	}
	
}


/*-------------------------------------------------------
|  Comments about this function 
|
| @parameter list parameters
| return return type of function 
|--------------------------------------------------------*/

if(isset($_GET['btn_send']))
{
	$requisition->updateReqStatus($_SESSION[user_level],$_GET[id]);
	echo "<b>Sent</b>";
}



/*-------------------------------------------------------
| This is for the delete button
|
| @parameter boolean delete,integer id		
| return string
|--------------------------------------------------------*/
if(isset($_POST['delete']))
{
	
	$id=(int) $_POST['id'];
	if($requisition->deleteRequisitionById($id)>0){
		echo "U have Deleted Succesfully";
	}
	else{
		echo "sorry record does not exists";
	}
}


/*-------------------------------------------------------
|  Comments about this function 
|
| @parameter list parameters
| return return type of function 
|--------------------------------------------------------*/
if(isset($_GET['delete_rd']))
{
	 
	if ($_GET['detail_id'])
	{
		$requisition->deleteDetailById($_GET['detail_id']);
		echo "<b> You have deleted a </b>";
	}
}


/*-------------------------------------------------------
| Update of a requsition 

|--------------------------------------------------------*/

if(isset($_POST['update']))
{
	extract($_POST);
	
	for($i=0;$i<count($rd_id);$i++)
	{	
		$data =array( 	'id'=>$rd_id[$i],
						'stock_item_id'=>$stock_item_id[$i],
						'item_qty'=> $item_qty[$i],
						'item_total'=> $item_total[$i], 
						'item_remark'=>$item_remark[$i]
					);
		$requisition->updateRequisitionDetails($data);
		
	}
	echo "<b>Requisition Updated</b>";
}


?>