<?php
require_once("mysql.php");

$link = create_connect();
$sql = "SELECT SUM(`number`)FROM`訂位資料`
        GROUP BY `date_s`, `period`HAVING count(*)>1";
$result = execute_sql($link, "aa123", $sql);
echo $result;