<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>XMLHttpRequest</title>
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <!-- 載入 bs5 -->
  <link rel="stylesheet" href="./plugin/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 class="header">XMLHttpRequest</h1>

  <?php

  $json = file_get_contents("kktix.json");
  $kktix = json_decode($json);
  // echo "<pre>";
  // print_r($kktix);
  // echo "</pre>";

  echo "<h4>" . $kktix->title . "</h4>";
  echo "<div>" . $kktix->updated . "</div>";
  echo "<ul>";
  foreach ($kktix->entry as $event) {
    echo "<li>" . $event->title . "</li>";
  }
  echo "</ul>";
  ?>
  <!-- 載入 bs5 -->
  <script src="./plugin/js/jquery.js"></script>
  <script src="./plugin/js/bootstrap.js"></script>
</body>