<html>
<head><title>Personality</title></head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
Select your personality attributes:<br />
<select name="attributes" >
<option value="perky">Perky</option>
<option value="morose">Morose</option>
<option value="thinking">Thinking</option>
<option value="feeling">Feeling</option>
<option value="thrifty">Spend-thrift</option>
<option value="prodigal">Shopper</option>
</select>
<br>
          <button class="btn btn-primary btn-lg" type="submit" name="src_btn" id="cnt-button" value="Save">SEARCH</button>
</form>

<?php
	$description =$_GET['attributes'];
      echo "You have a $description personality.";

?>

</body>
</html>