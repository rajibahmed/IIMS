<?php 
require_once('../../lib/stock.class.php');

$q = strtolower($_GET["q"]);
if (!$q) return;
$stock= new Stock;
$items = $stock->retriveStockItem();

foreach ($items as $value) 
{
	if (strpos(strtolower($value[stock_item_name]), $q) !== false) 
	{ 
		echo "$value[stock_item_id]#$value[stock_item_name]\n";
	} 
} 

?>