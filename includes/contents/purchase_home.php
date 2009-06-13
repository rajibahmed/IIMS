<div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2">Purchase Home</div>
        <div class="bodybanner3"></div>
    </div>
<div id="inventory" class="column">

<ul>
	<li >
    	<a class="thickbox" href='includes/contents/list_all/list_all_purchase.php?height=400&width=760'  title="Purchase List">Purchase List</a>    		
    </li>
    
    <li >
    	<a class="thickbox" href='includes/contents/create_purchase_order.php?height=400&width=700' > Create Purchase Order</a>
	</li> 		
	
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