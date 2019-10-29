<?php
$d=strtotime("+6 Hours");
echo "&nbsp" . date("<b>h:i a", $d) . "<br>";
echo "&nbsp" . date("d-m-Y", $d) . "<br>";
echo "&nbsp" . date("l");
?>




<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link href="div.css" rel="stylesheet"> 

<style>

	ul
{
	margin: 0px;
	padding: 0px;
	list-style: none;
}

ul li
{
	float: left;
	height: 40px;
	width: 179px;
	opacity: 5;
	line-height : 40px;
	text-align: center;
	font-size: 15px;
}
 ul li a
 {
	 text-decoration: none;
	 color: black;
	 display: block;
 }
 ul li a:hover
 {
	background-color : black;
	 
 }
 ul li ul li
 {
	 display: none;
 }
 ul li:hover ul li
 {
	 display: block;
 }

div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
p.ex2 {
    font: italic bold 80px/60px Georgia, serif;
}
</style>
</head>
<body>
<nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
	
			
			
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="hme.php">Home</a>
                    </li>
                    <li><a><p style="color:lightgreen;"> KUET </p></a>
					 <ul>
						 <li><a href="http://www.kuet.ac.bd">Website</a></li>
						 <li><a href="http://localhost/project/location.php">Location</a></li>
					 </ul>
					</li>

                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
<center>
<d4><h1>Beautiful</h1></d4><font color="blue"><p class="ex2">KUET</p></font>
<marquee behavior="scroll" direction="left"><d1><h3><b>Have a look :)</b></h3></d1></marquee><br>
</center>
<a href="slide.html" class="btn btn-primary btn-lg">SLIDE SHOW</a>
<br>
<br>



<div class="responsive">
  <div class="gallery">
<video width="320" height="240" controls>
  <source src="videoplayback.mp4" type="video/mp4">
  <source src="videoplayback.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="KUET.jpg">
      <img src="KUET.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Durbar Bangla</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="maingate.jpg">
      <img src="maingate.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">KUET maingate</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="132494900.jpg">
      <img src="132494900.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">KUETwood</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="13939355_2051269155098873_284686523085668430_n.jpg">
      <img src="13939355_2051269155098873_284686523085668430_n.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Campus</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="132494861.jpg">
      <img src="132494861.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Infront of administration building</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="12193558_424309477762747_745578686241614989_n.jpg">
      <img src="12193558_424309477762747_745578686241614989_n.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Beautiful Campus</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="12096202_424309351096093_1499444264340778713_n.jpg">
      <img src="12096202_424309351096093_1499444264340778713_n.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">KUET at night</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="14224895_529534243906936_8857414469257434909_n.jpg">
      <img src="14224895_529534243906936_8857414469257434909_n.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Durbar Bangla at night</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="14141637_529534350573592_3301675668841414273_n.jpg">
      <img src="14141637_529534350573592_3301675668841414273_n.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">University Day</div>
  </div>
</div>


<div class="clearfix"></div>
</body>
</html>
