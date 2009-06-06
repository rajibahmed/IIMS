<?php
session_start();  
include('../../lib/requisition.class.php');
include('../../lib/helper_functions.php');

$requisition=new Requisition;
$user_level = $_SESSION[user_level];
$user_id = $_SESSION[userid];
$user_office= $_SESSION[user_office];
$user_dept =$_SESSION[user_dept] ;

$requisitions=$requisition->FindAll($user_id,$user_level,$user_dept,$user_office); 

require 'partials/_requisition_list.php';
?>