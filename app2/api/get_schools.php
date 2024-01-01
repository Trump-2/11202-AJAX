<?php
include_once "db.php";
$schools = $GraduateSchool->all();
$options = "";
if (isset($_GET['id'])) {
  $user = $Student->find($_GET['id']);
}
foreach ($schools as $school) {
  $selected = (isset($user) && ($user['graduate_at'] == $school['id'])) ? 'selected' : ''; // 這裡有兩個條件 : 第一個是防止新增學生時不會產生 $user；第二個是判斷學生的 graduate_at 欄位跟迴圈的某個學校的 id 欄位是否相同，相同代表該學生就是那所學校畢業的；兩個條件都滿足時，就給那個被產生的 < option > 加上 selected attribute
  $options .= "<option $selected value='{$school['id']}'>{$school['county']}{$school['name']}</option>";
}

// echo 對 AJAX 來說就是回傳
echo $options;