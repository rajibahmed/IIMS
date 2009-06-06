<?php 
	require_once('../../lib/stock.class.php');
	$id = (int) $_GET[id];
	$stock = new Stock();
	$stock_machines = $stock->getMachineBySection($id);
	
	if(!$stock_machines) return;

	$output='<option>Select ..</option>';

	foreach($stock_machines as $dept){
		$output .="<option value='$dept[m_id]'>$dept[m_name]</option>";
	}
	echo $output;
?>