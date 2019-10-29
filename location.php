

<html>
<head>
    <title>KUET</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="external.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
a1
{
	font-size: 400%;
	color: violet;
}
h1
{
	font-size: 30;
	color: blue;
}
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6Y5TwYN3wqDwah3aNGi7B056yjJQ2nTY&callback=myMap"></script>

<script>
var myCenter=new google.maps.LatLng(22.8993497,89.501581);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"KUET!"
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


</head>
<body>
    <div class="header">
	<header>
       <center><a1>KUET ALUMNI</a1><center>
	     <p style="font-color:red;font-size:16px;"><div class="absolute"><a href="hme.php"><b>HOME</b></a></div></p><br>
</header>
<center> <h1>Location:</h1> </center>
    </div>
    <div class="content">
       <div style="width:850px;float:left;padding-left:10px;padding-top:50px;">
            <center> <div id="googleMap" style="width:1000px;height:550px;"></div></center>
    </div>

    <script src="libs/jquery/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>