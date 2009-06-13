<div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2">Quality Certificate</div>
        <div class="bodybanner3"></div>
    </div>
<div id="inventory" class="column">

<ul>
	 <li><a 
	 	title='Create Q.C'
	 	href="includes/contents/create_qc.php?height=300&width=800"
	 	class='thickbox'>Create Q.C</a></li>
	 
 	
 	<li>
	 	<a 
		title='Consumption List' href="includes/contents/list_all/list_all_delivery.php?height=300&width=700"
	 	class='thickbox' >Q.C List
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