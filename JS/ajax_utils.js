// JavaScript Document

// Function 1: basic function to create a XMLHttpRequest object
function getXMLHttpRequestObject(){
	var http_request = false;

	if (window.XMLHttpRequest){ // Mozilla, Safari,...
		http_request = new XMLHttpRequest();
		
		if (http_request.overrideMimeType)	{
			http_request.overrideMimeType('text/xml');
			// See note below about this line
		}
	} else if (window.ActiveXObject){ // IE
		try{
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e){
			try{
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {}
		}
	}

	if (!http_request){
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}

	return http_request;
}

// Function 2: function to create dynamic body area/contents based on menu click
function loadDynamicContent(url){
	var arg = url;
	url = "includes/contents/contents.php?page=" + url;

	var http_request = getXMLHttpRequestObject();

	if (http_request){
		http_request.onreadystatechange = function() { 
			createDynamicContents(http_request); 
		};
		http_request.open('GET', url, true);
		http_request.send(null);
	}
}

//Function 3: supports function 2
function createDynamicContents(http_request){
	if (http_request.readyState == 4){
		if (http_request.status == 200){
			document.getElementById("content-area").innerHTML=http_request.responseText;
		}else{
			alert('There was a problem with the request.');
		}
	}
}

// Function 4: load left side dynamic menu for menu click
function loadDynamicLeftMenu(url){
	var arg = url;
	url = "includes/left_menu_sec.php?section=" + url;

	var http_request = getXMLHttpRequestObject();

	if (http_request){
		http_request.onreadystatechange = function() { 
			createDynamicLeftMenu(http_request); 
		};
		http_request.open('GET', url, true);
		http_request.send(null);
	}
}

// Function 5: support function 4
function createDynamicLeftMenu(http_request) {
	if (http_request.readyState == 4){
		if (http_request.status == 200){
			document.getElementById("left-menu-sec").innerHTML=http_request.responseText;
		}else{
			alert('There was a problem with the request.');
		}
	}	
}

// Function 6: save/insert/update form data
function saveFormData(f){
	xmlReq  = getXMLHttpRequestObject();
	
	if (xmlReq){
		var formData = '', elem = '';
		for(var s = 0; s < f.elements.length; s++){
			elem = f.elements[s];
			if(formData != ''){
				formData += '&';
			}
			formData += elem.name+"="+elem.value;
		}
	
		xmlReq.onreadystatechange = function(){
			if(xmlReq.readyState == 4){
				var previousContents = document.getElementById('content-area').innerHTML;
				document.getElementById('content-area').innerHTML = xmlReq.responseText + "<br />" ;
			}
		}

		xmlReq.open(f.method, f.action, true);
		xmlReq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlReq.send(formData);
		return false;
	}
}

// Function 7: execute a sql select operation based on 
//            given url(action page) and selected value
function selectDataBySQL(actionUrl,param){
	ajaxRequest  = getXMLHttpRequestObject();
	
	if (xmlReq){
		ajaxRequest.onreadystatechange = function(){
			if(ajaxRequest.readyState == 4){
				var ajaxDisplay = document.getElementById('ajaxDiv');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		}
		alert(actionUrl);
		var url = actionUrl;
		//var params = "lorem=ipsum&name=binny";
		var params = "param="+param;
		http.open("POST", url+"?"+params, true);
		
		//Send the proper header information along with the request
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.setRequestHeader("Content-length", params.length);
		http.setRequestHeader("Connection", "close");

		ajaxRequest.onreadystatechange=function() {
			if (ajaxRequest.readyState==4 || ajaxRequest.readyState=="complete") {
				document.getElementById('form-contents').innerHTML=ajaxRequest.responseText;
			}
		}
		ajaxRequest.send(params);	
	}
}

//function selectFataBySqlQuery(actionUrl,param)
//{
	// this function for project information
	
	function handleHttpResponse3() 
	{  
	   
        if(http3.readyState == 0) { document.getElementById('form-contents').innerHTML = "<img src='../../img/animated_loading.gif'> Sending  Your Request..."; }   

		if(http3.readyState == 1) { document.getElementById('form-contents').innerHTML = " <img src='../../img/animated_loading.gif'> Your Request Is Processing ..."; }   
    	if(http3.readyState == 2) { document.getElementById('form-contents').innerHTML = "<img src='../../img/animated_loading.gif'> Your Data is Loading 1st ..."; }   
   	 	if(http3.readyState == 3) { document.getElementById('form-contents').innerHTML = "<img src='../../img/animated_loading.gif'> Your Data is loading 2nd ..."; }   
	
		if (http3.readyState == 4) 
		{ 
              if(http3.status==200) 
			  { 
                  var results3=http3.responseText; 
				 //alert(results);
              	document.getElementById('form-contents').innerHTML = results3; 
              }
		}
     } 

	function requestSqlForGetData(actionUrl,param) 
	{      
		var url3 = actionUrl; // "getBalanceSheetData.php"; // The server-side script 
		var params = "param="+param;
		http3.open("GET", url3 +"?"+ params, true); 
		http3.onreadystatechange = handleHttpResponse3; 
		http3.send(null); 
	}

	function getHTTPObject3() 
	{ 
  		var xmlhttp3; 

  		if(window.XMLHttpRequest)
		{ 
    		xmlhttp3 = new XMLHttpRequest(); 
  		} 
  		else if (window.ActiveXObject)
		{ 
			xmlhttp3=new ActiveXObject("Microsoft.XMLHTTP"); 
			if (!xmlhttp3)
			{ 
				xmlhttp3=new ActiveXObject("Msxml2.XMLHTTP"); 
			} 
		} 
  		return xmlhttp3; 
	} 
	var http3 = getHTTPObject3(); // We create the HTTP Object 
//}


function addRowToTable()
{
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  // if there's no header row in the table, then iteration = lastRow + 1
  var iteration = lastRow+1;
 // alert(iteration); 
  var row = tbl.insertRow(lastRow);
  // First cell
 var cellRightleft = row.insertCell(0);
  var e = document.createElement('input');
  e.type = 'text';
  e.name = 'item_desc[]';
  e.id = 'item_desc_'+iteration;
  e.onkeyup=function(){
	ajax_showOptions(this,'getCountriesByLetters',event,'oder_dl_thread_color');
}
  e.size = 25;
  var h= document.createElement('input');
  h.type = 'hidden';
  h.name = 'accid[]';
  h.id = 'country'+iteration+'_hidden';
  cellRightleft.appendChild(e);
  cellRightleft.appendChild(h);

// 2nd cell
  var cellRight = row.insertCell(1);
  var el = document.createElement('input');
  el.type = 'text';
  el.name = 'style[]';
  el.id = 'style_'+iteration;
  el.size = 10;
  cellRight.appendChild(el);
  
  // 3rd cell
  var cellRight1 = row.insertCell(2);
  var e2 = document.createElement('input');
  e2.type = 'text';
  e2.name = 'count[]';
  e2.id = 'count_'+iteration;
  e2.size = 10;
   cellRight1.appendChild(e2);
   // 4th cell
  var cellRight1 = row.insertCell(3);
  var e3 = document.createElement('input');
  e3.type = 'text';
  e3.name = 'fcolor[]';
  e3.id = 'fcolor_'+iteration;
  e3.size = 15;
   cellRight1.appendChild(e3);
   // 5th cell
  var cellRight1 = row.insertCell(4);
  var e4 = document.createElement('input');
  e4.type = 'text';
  e4.name = 'tcolor[]';
  e4.id = 'tcolor_'+iteration;
  e4.size = 15;
   cellRight1.appendChild(e4);
   // 6th cell
  var cellRight1 = row.insertCell(5);
  var e5 = document.createElement('input');
  e5.type = 'text';
  e5.name = 'qty[]';
  e5.id = 'qty_'+iteration;
  e5.size = 5;
   cellRight1.appendChild(e5);
   var lastRow = tbl.rows.length; 
   // 7th
    var cellRight1 = row.insertCell(6);
  var e6 = document.createElement('input');
  e6.type = 'text';
  e6.name = 'price[]';
  e6.id = 'price_'+iteration;
  e6.size = 5;
   cellRight1.appendChild(e6);
   var lastRow = tbl.rows.length; 
   
}
// Remove last row on the table
function removeRowFromTable()
{
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  if (lastRow > 1) tbl.deleteRow(lastRow - 1);
}

function submitOrderFormstep2(orderFormstep2)

{
	
	submitForm(orderFormstep2);	
	return;
}

function saveFormData2(f){
	xmlReq  = getXMLHttpRequestObject();
	
	if (xmlReq){
		var formData = '', elem = '';
		for(var s = 0; s < f.elements.length; s++){
			elem = f.elements[s];
			if(formData != ''){
				formData += '&';
			}
			formData += elem.name+"="+elem.value;
		}
	
		xmlReq.onreadystatechange = function(){
			if(xmlReq.readyState == 4){
				var previousContents = document.getElementById('content-area').innerHTML;
				document.getElementById('content-area').innerHTML = xmlReq.responseText + previousContents ;
				
			}
		}

		xmlReq.open(f.method, f.action, true);
		xmlReq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlReq.send(formData);
		return false;
	}
}
