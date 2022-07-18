<!-- 取得資料庫篩選資料 -->
<?php
session_start();
include("mysql.php");
$demo = $_POST["date_s"];
$demo_1 = $_POST["period"];
$_SESSION["date_s"] = $demo;
$_SESSION["period"] = $demo_1;
$sql = "SELECT `date_s`,`period` FROM 訂位資料 GROUP BY `date_s`, `period` HAVING 
        SUM(`number`) > 10 AND date_s = '".$demo."' AND period = '".$demo_1."'";
$run = mysqli_query($link, $sql);

?>
<?php
if (mysqli_num_rows($run) > 0) {
    foreach ($run as $row) {
?>
        <P id="x"><?php echo $row['date_s'] ?></P>
        <p id="y"><?php echo $row['period'] ?></p>
<?php
    }
}
// 以上取得資料庫篩選資料

// 上傳資料
if (
    $_POST["date_s"] === $row['date_s'] &
    $_POST["period"] === $row['period']
) {
    return false;
} else {
    $date_s = $_POST["date_s"];
    $period = $_POST["period"];
    $number = $_POST["number"];
    $name = $_POST["name"];
    $telephone = $_POST["telephone"];
    $sql = "INSERT INTO 訂位資料(date_s,period,number,name,telephone)
        VALUES('" . $date_s . "','" . $period . "','" . $number . "','" . $name . "','" . $telephone . "')";
    $result = execute_sql($link, "aa123", $sql);
}
// 以上上傳資料
