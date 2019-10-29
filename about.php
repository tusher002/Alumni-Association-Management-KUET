
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
div.absolute {
    position: absolute;
    right: 1px;

}
div.absolute1 {
    position: absolute;
	font: italic bold 80px/60px Georgia, serif;
	left: 520px;
}

div.absol {
    position: absolute;
    left: 120px;
}
div.abs {
    position: absolute;
    left: 20px;
}

p.ex2 {
    font: italic bold 80px/60px Georgia, serif;
}
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
</head>
<body>
<a href="index.html" >HOME</a>
<center><font color="blue" size="25"><div class="absolute1">KUET ALUMNI</font></div></center>

<center>
<br><br><br><br><br>
<p><b><font size="5">KUET ALUMNI page is created to keep informed and engaged alumni of our beloved KUET.
<br>And to support our current students by sharing skill and experience alumni</font></b><p>
<div class="absolute"><img width="500" height="300" src="d301fdc8f718cc4e956c6456eb2af1ee.gif"></div>
</center>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = localStorage.clickcount;
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
function unclickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.unclickcount) {
            localStorage.unclickcount = Number(localStorage.unclickcount)+1;
        } else {
            localStorage.unclickcount = 1;
        }
        document.getElementById("uresult").innerHTML = localStorage.unclickcount;
    } else {
        document.getElementById("uresult").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>
</head>
<body>
<br><br><br>
<font size="5" color="blue">Give a rating of this page</font>
( please click once )
<p><a href="#" class="btn btn-info btn-md" onclick="clickCounter()">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp <a href="#" class="btn btn-info btn-md" onclick="unclickCounter()">
          <span class="glyphicon glyphicon-thumbs-down"></span> Like
        </a></p>
<p><div class="abs" id="result" ></div>     <div class="absol" id="uresult"></div> </p>
<br><br><br><br>
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
<br><br>
<center><font size="4" color="red">Copyright &copy;Tusher Mondol</font></center>
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<center><img width="400" height="200" src="tumblr_ooe6xwE8yL1vbprslo1_500.gif">

</body>
</html>
