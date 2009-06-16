<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />
<div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2">Create Master</div>
        <div class="bodybanner3"></div>
    </div>
<div id="inventory" class="column">
	<!-- <strong>Stock Group </strong>
    <strong>Stock Catagory </strong>
    <strong>Stock Item </strong>
    <strong>Unit of Measurment </strong>
    <strong>Locations</strong>
    <strong>Department</strong>
    <strong>Machine Model</strong>
    <strong>Section</strong>
    <strong>Machine</strong>
    <strong>Manufacturer</strong> -->
    
<ul>
	<li><a class="thickbox" href="includes/contents/ca_create_stock_group.php?height=200&width=500" title="Stock Group" >Stock Group</a></li>
	<li><a class="thickbox" href="includes/contents/create_stock_machine.php?width=500&height=200" title="Machine" >Machine</a></li>
    <li><a class="thickbox" href="includes/contents/ca_create_locations.php?width=500&height=300" title="Location">location</a></li>
    
    <li><a class="thickbox" href="includes/contents/create_stock_department.php?width=500&height=200" title="Stock Department" >Stock Department </a></li>
    <li><a class="thickbox" href="includes/contents/create_stock_manufacture.php?width=500&height=300" title="CREATE MANUFACTURE " >Stock Manufacturer</a></li>
    <li><a class="thickbox" href="includes/contents/ca_create_unit.php?width=500&height=200" title="Unit">Measurment Unit</a></li>
    <li><a class="thickbox" href="includes/contents/create_stock_section.php?width=500&height=200" title="Section">Stock Section</a></li>
    <li><a class="thickbox" href="includes/contents/create_machine_model.php?width=500&height=230" title="Machine Model" >Machine Model</a></li>
	 <li class="left-menu-item" id="stock_item_home">  <a href='includes/contents/ca_stock_item_home.php' class="button ajax" > Stock Item</a> </li> 
    <li><a class="thickbox" href="includes/contents/create_lot.php?width=500&height=230" title="Lot" >Lot</a></li> 
	<li><a class="thickbox" href="includes/contents/create_count.php?width=500&height=230" title="Count" >Count</a></li>   
	<li><a class="thickbox" href="includes/contents/create_lc.php?width=500&height=230" title="LC" >L/C</a></li> 
	<!--<li><a class="thickbox" href="includes/contents/create_staple_length.php?width=500&height=230" title="Staple Length" >Staple Length</a></li> -->  
     
	
    
	<!--<li><a class="thickbox" href="includes/contents/display_stock_group.php?width=400&height=400">Stock Group</a></li>
	<li><a class="thickbox" href="includes/contents/create_stock_department.php?width=400&height=400" >Create Stock Dept</a></li>
	<li><a class="thickbox" href="includes/contents/create_Supplier.php?width=580&height=490" >Create Supplier</a></li>
	<li><a class="thickbox" href="includes/contents/create_supplier_category.php?width=400&height=400" >Create Supplier Category</a></li>-->
	
</ul>
  <div class="rightimg3">
        <div class="downimg1"></div>
        <div class="downimg2"></div>
        <div class="downimg3"></div>
  </div>
  
</div>

<div class="clear"> </div>

<script type="text/javascript" language="javascript" src="js/thickbox-compressed.js"></script>
<script language="javascript">

$(".button.ajax").click(function(){
	var uri = $(this).attr("href");

	$.ajax({
		type:"GET",
		url:uri,
		success:function(data){
			$("#ajax_content").html(data);
		}
	});	
	return false;	
});

</script>