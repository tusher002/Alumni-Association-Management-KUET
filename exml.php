<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
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


<button class="btn btn-success btn-lg" type="submit" onclick="loadDoc()">View Committe Member</button>
<br><br>
<table id="dem"></table>

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
  var table="<tr><th>NAME</th><th>DESIGNATION</th><th>WORKING TIME</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("dem").innerHTML = table;
}
</script>

</body>
</html>
