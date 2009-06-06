<?php 
	require_once('../../lib/stock.class.php');
	$id = (int) $_GET[id];
	$stock = new Stock();
	$stock_machines = $stock->getManufaturerByMachine($id);
	
	if(!$stock_machines) return;
	
	$output='<option> Select One</option>';
	foreach($stock_machines as $dept){
		$output .="<option value='$dept[manu_id]'>$dept[manu_name]</option>";
	}
	echo $output;
?>