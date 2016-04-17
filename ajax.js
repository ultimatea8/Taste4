var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject() {
	var xmlHttp; 
	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}
	}else {
		try{
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHttp = false;
			}
		}
	
	if(!xmlHttp)
		alert("no work");
	else
		return xmlHttp;
}
/*	 
	
	  try{ 
		  // Opera 8.0+, Firefox, Safari 
		  xmlHttp = new XMLHttpRequest();
	  }catch (e){
		  try{
			  // Internet Explorer Browsers 
			  xmlHttp = new ActiveXObject("Msxml2.xmlHttp"); 
			  }catch (e) { 
				  try{ 
					  xmlHttp = new  ActiveXObject("Microsoft.xmlHttp"); 
				  }catch (e){
					  // Something went wrong
					  alert("Your browser sux!"); return false;
					  } 
				  } 
	  } 
}*/

function intAJAX() {
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){
		innput = encodeURIComponent(document.getElementById("NameInput").value);
		//xmlHttp.open("POST","nameDB.php",true);
		xmlHttp.open("GET","nameDB.php?NameInput="+innput, true);
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
		//xmlHttp.send("NameInput=" + input);
	}else {
		setTimeout('intAJAX()',700);
	}
}

function handleServerResponse() {
	if(xmlHttp.readyState == 4) {
		if(xmlHttp.status == 200) {
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("NameOutput").innerHTML = '<span style="color:green">'+ message+"</span>";
			setTimeout('intAJAX()', 700);
		}
		else{
			alert('Something went worng');
		}
	}
	var s, tex;
	sample="<ul>"
		+"<li>sunshine pic</li>"
		+"<li>smile pic</li>"
		+"<li>hair pic</li>"
		+"</ul>";
    tex = "Search by Name:";
	divPortfolio = document.getElementById("ByNameArea");
	divPortfolio.innerHTML = tex;
}