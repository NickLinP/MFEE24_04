<?php
require_once("mysql.php");

$link = create_connect();
// $li = mysqli_connect("localhost", "root", "", "aa123");
    $dbh = new PDO(
        'mysql:host=127.0.0.1;dbname=test;charset=utf8mb4', 
        'root',''
    );
$sql = "SELECT `date_s`,`period` FROM 訂位資料 GROUP BY `date_s`, `period` HAVING SUM(`number`) > 10;";
// $result = mysqli_query($li, $x);
$sth = $dbh->prepare($sql);
$count = $sth->rowCount();
echo $count;
if ($count != 0) {
    $date_s = $_POST["date_s"];
    $period = $_POST["period"];
    $number = $_POST["number"];
    $name = $_POST["name"];
    $telephone = $_POST["telephone"];

    // $link = create_connect();
    $sql = "INSERT INTO 訂位資料(date_s,period,number,name,telephone)
    VALUES('" . $date_s . "','" . $period . "','" . $number . "','" . $name . "','" . $telephone . "')";

    $result = execute_sql($link, "aa123", $sql);
    echo "訂位成功";
} else {
    echo "該時段已滿";
    exit();
}
