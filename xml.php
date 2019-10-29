<!DOCTYPE html>
<html>
<style>

table
{width:80%;}
table,tr,td,th
{
	border: 1px solid black;
	border-collapse: collapse;
	opacity: 0.95;
}
th,td
{
	padding:10px;
	text-align:center;
}
th
{
	background-color: #a70000;
	color:white;
}
tr:nth-child(even)
{
	background-color:#e8e8e8;
}
tr:nth-child(odd)
{
	background-color:white;
}
</style>
<body color="red">

<h1>The XMLHttpRequest Object</h1>

<button type="button" onclick="loadDoc()">View Committee member</button>
<br><br>
<table id="demo"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "com.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>alumni</th><th>Title</th></tr>";
  var x = xmlDoc.getElementsByTagName("member");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("alumni")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</body>
</html>
