function SearchForItem(search_item){
	var xmlhttp;
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("search_results").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","search.php?search=" + search_item);
	xmlhttp.send();
}