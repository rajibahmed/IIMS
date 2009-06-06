
<div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2">Create Master</div>
        <div class="bodybanner3"></div>
    </div>
<div id="inventory" class="column">

<ul>
	 <li><a 
	 	title='Create Consumption'
	 	href="includes/contents/create_consumption.php?height=300&width=700"
	 	class='thickbox'>Create Consumption</a></li>
	 <li>
	 	<a 
		title='Consumption Raw Material'	 	href="includes/contents/create_consumption_raw_item.php?height=300&width=700"
	 	class='thickbox' >Consumption-Raw Material
 		</a>
 	</li>	
 	
 	<li>
	 	<a 
		title='Consumption List'	 	href="includes/contents/list_all/list_all_consumption.php?height=300&width=700"
	 	class='thickbox' >Consumption List
 		</a>
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