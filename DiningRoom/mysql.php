<?php

$link = mysqli_connect("localhost", "root", "", "aa123")
  or die("無法建立資料連接: " . mysqli_connect_error());

mysqli_query($link, "SET NAMES utf8");

return $link;

function execute_sql($link, $database, $sql)
{
  mysqli_select_db($link, $database)
    or die("開啟資料庫失敗: " . mysqli_error($link));

  $result = mysqli_query($link, $sql);

  return $result;
}
?>

<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$database = "aa123";

$con = mysqli_connect("$db_host", "$db_username", "$db_password", "$database");
?>
