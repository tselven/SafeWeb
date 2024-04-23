<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bug Web</title>
  <link rel="icon" type="image/x-icon" href="./favicon.ico" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  $txt = $_POST["txt"];
  echo "<div style='width:100%;display:flex;justify-content:center;align-items:center;height:50px; background:rgba(255,255,255,0.4);box-shadow:2px 2px 10px black;'>";
  echo "<form style='width:95%' action='./results.php' method='get'>
  <input type='text' name='txt' placeholder='search' value='{$txt}' required />
  <input type='submit' name='submit' value='&#128269; Search' />
  </form>";
  echo "</div>";
  //echo "<h1>$txt</h1>";

  //sql
  $servername = "localhost";
  $username = "root";
  $password = "tSelven@321#";
  $db = "Exploid";
  // Create connection
  $con = mysqli_connect($servername, $username, $password, $db);

  // Check connection
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //echo "Connected successfully";
  $query = "SELECT * FROM sites where SiteName LIKE '%{$txt}%' OR Category LIKE '%{$txt}%'";
  $result = mysqli_query($con, $query) or die(mysqli_error($con));
  while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    echo "<div style='width:95%; padding:10px; background-color: white; margin-top:10px; border:2px solid black;border-radius:0.5rem;'>";
    echo "<b style='color:blue'><a href='{$row['url']}'>{$row['SiteName']}</a></b><br/>";
    echo "<i style='color:green;'>{$row['category']}</i>";
    echo "</div>";
  }
  mysqli_close($con);

  ?>
</body>

</html>