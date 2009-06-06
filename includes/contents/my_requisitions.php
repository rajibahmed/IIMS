<?php
session_start();  
include('../../lib/requisition.class.php');
include('../../lib/helper_functions.php');

$requisition=new Requisition;
$user_id = $_SESSION[userid];
$user_level = $_SESSION[user_level];

$requisitions=$requisition->FindAll($user_id); 

require 'partials/_requisition_list.php';

?>

