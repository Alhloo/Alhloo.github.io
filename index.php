<?php

$con = mysqli_connect("github.com", "root", "root", "ximgs");

if (!$con) {
  echo "Database connection failed: " . mysqli_connect_error();
}

function generateRandomId($length = 11)
{
  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $numChars = strlen($chars);
  $id = "";
  for ($i = 0; $i < $length; $i++) {
    $index = mt_rand(0, $numChars - 1);
    $id .= $chars[$index];
  }
  return $id;
}

function generateRandomName($length = 32)
{
  $chars = "abcdef0123456789";
  $numChars = strlen($chars);
  $name = "";
  for ($i = 0; $i < $length; $i++) {
    $index = mt_rand(0, $numChars - 1);
    $name .= $chars[$index];
  }
  return $name;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dir = "imgs/";
  $fileName = $_FILES["fileToUpload"]["name"];
  $filExtension = pathinfo($fileName, PATHINFO_EXTENSION);
  $img_src = generateRandomName();
  $fileNewName = $img_src . "." . $filExtension;
  $fileTmpName = $_FILES["fileToUpload"]["tmp_name"];
  $img_id = generateRandomId();

  $sql = mysqli_query(
    $con,
    "INSERT INTO imgs(img_id, img_src) VALUES ('$img_id', '$fileNewName')"
  );
  move_uploaded_file($fileTmpName, $dir . $fileNewName);
}

$sql = mysqli_query($con, "SELECT * FROM imgs ORDER BY id DESC");

while ($row = mysqli_fetch_assoc($sql)) {
  $li .=
    '<li><a href="view.php?v=' .
    $row["img_id"] .
    '"><img src="imgs/' .
    $row["img_src"] .
    '"></a></li>';
}
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
      <div class="header">
        <i class="bx bx-plus" onclick="uploadActive()"></i>
        <div class="all">الكل</div>
      </div>
      <div class="upload">
        <div class="upload-header">
          <i class="bx bx-left-arrow-alt" onclick="removeActive()"></i>
          <div class="head">Create</div>
          <i class="bx bx-send" onclick="submitClick()"></i>
        </div>
        <div class="preview">
          <img src="" alt="" />
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="file" name="fileToUpload" id="fileToUpload" hidden />
          <div class="title">
            <input type="text" required />
            <label>Title</label>
          </div>
          <button type="submit" name="submit" hidden></button>
        </form>
      </div>
      <ul>
        <?php echo $li; ?>
      </ul>
    </div>
    <script src="script.js"></script>
  </body>
</html>
