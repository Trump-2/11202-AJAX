<?php
include_once "db.php";
$schools = $GraduateSchool->all();
$options = "";
foreach ($schools as $school) {
  $options .= "<option value='{$school['id']}'>{$school['county']}{$school['name']}</option>";
}

// echo 對 AJAX 來說就是回傳
echo $options;
