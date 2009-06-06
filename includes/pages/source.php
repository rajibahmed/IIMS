<?php
require_once('../../lib/stock.class.php');

if ($_REQUEST['root'] == "source"){

	$stock = new Stock();
	$stock_groups = $stock->getStockGroupTreeView();
	
}	
?>	
[
	<?php foreach($stock_groups as $stock_group): ?>
	{

	<?php endforeach ?>
]

