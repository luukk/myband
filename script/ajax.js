function showHint(str) {
    var xmlhttp;
    if (str.length==0) {
  document.getElementById("output").innerHTML="";
  return;
  }
  if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
  else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("output").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","./models/searchquery.php?q="+str,true);
  xmlhttp.send();
  }
