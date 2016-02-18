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
/*	 try{ 
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
					  } 				  } 	  } }
*/

function intAJAX() {
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){
		innput = encodeURIComponent(document.getElementById("daInput").value);
		//xmlHttp.open("POST","doorDB.php",true);
		xmlHttp.open("GET","doorDB.php?daInput="+innput, true);
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
		//xmlHttp.send("daInput=" + input);
	}else {
		setTimeout('intAJAX()',1000);
	}
}

function handleServerResponse() {
	if(xmlHttp.readyState == 4) {
		if(xmlHttp.status == 200) {
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("daOutput").innerHTML = '<span style="color:green">'+ message+"</span>";
			setTimeout('intAJAX()', 1000);
		}
		else{
			alert('Something went worng');
		}
	}
	var s;
	s="<ul>"
		+"<li>sunshine pic</li>"
		+"<li>smile pic</li>"
		+"<li>hair pic</li>"
		+"</ul>";
	divPortfolio = document.getElementById("Portfolio");
	divPortfolio.innerHTML = s;
}