<?php
	
	//require_once("display_stock_group.php");
?>


<head>
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>

<div id="loadingbox"></div>

<script language="JavaScript">




var UI = new Object();
UI.expand = '+';
UI.collapse = '-';
	function getData(id)
	{
		//alert("Get Data for Id : " + id);
	}

var Page = new Object();
Page.width;
Page.height;
Page.top;

Page.loadOut = function ()
{
	document.getElementById('loadingbox').innerHTML ='';
}
Page.getPageCenterX = function ()
{
	 
		var fWidth;
		var fHeight;
		//For old IE browsers
		if(document.all)
		{
		fWidth = document.body.clientWidth;
		fHeight = document.body.clientHeight;
		}
		//For DOM1 browsers
		else if(document.getElementById &&!document.all)
		{
		fWidth = innerWidth;
		fHeight = innerHeight;
		}
		else if(document.getElementById)
		{
		fWidth = innerWidth;
		fHeight = innerHeight;
		}
		//For Opera
		else if (is.op)
		{
		fWidth = innerWidth;
		fHeight = innerHeight;
		}
		//For old Netscape
		else if (document.layers)
		{
		fWidth = window.innerWidth;
		fHeight = window.innerHeight;
		}
	Page.width = fWidth-180;
	Page.height = fHeight-342;
	Page.top = window.document.body.scrollTop;
}
onload=(loadChild('tree1',0));
</script>
<div id="definition">
<div id="tree1" class="nodecls"></div>
</div>
</body>