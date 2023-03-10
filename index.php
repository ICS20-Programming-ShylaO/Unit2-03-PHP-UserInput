<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My First PHP Webpage with User Input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>User Input with PHP</title>
  </head>
  <body>
    <?php echo "<h1>User Input in PHP</h1>" ?>
    <form action="./welcome.php" method="post" target="result">
      <label for="street-number">Street Number</label>
      <input type="number" id="street-number" placeholder="Your Street Number" name="street-number"><br><br>
      <label for="street-name">Street Name</label>
      <input type="text" id="street-name" placeholder="Your Street Name" name="street-name"><br><br>
      <input type="submit" value="Enter">
			<br><br>	
    </form>
<div id="result"></div>
    <center>
      <iframe id="result" name="result">
				You live on <?php echo $_POST["street-number"]; ?>on<?php echo  $_POST["street-name"]; ?>.
      </iframe>
    </center>
  </body>
</html>