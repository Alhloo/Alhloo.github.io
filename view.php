<?php

$con = mysqli_connect("192.168.1.7", "root", "root", "ximgs");

if (!$con) {
  echo "Database connection failed: " . mysqli_connect_error();
}

$img_id = $_GET["v"];

$sql = mysqli_query($con, "SELECT * FROM imgs WHERE img_id = '$img_id'");

$row = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="header"></div>
      <div class="view">
        <img src="imgs/<?php echo $row["img_src"]; ?>" alt="" />
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
