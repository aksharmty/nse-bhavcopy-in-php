<body style="background-color:#000000; color:white;">
    Price action 1 Day<br> 
<?php 
include "connect.php";
define('TIMEZONE', 'Asia/kolkata');
date_default_timezone_set(TIMEZONE);
  $date = DATE("Y-m-d");
$coinsql = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM sma where hma ='0'"));  
$coin = $coinsql['name']; $day = $coinsql['day'];
echo "coin : ",$coin; 
$sql123 = mysqli_query($connection,"TRUNCATE TABLE candle");

$sql = "SELECT * FROM nse where symbol = '$coin' AND series =' EQ' order by timestamp desc limit 50";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$symbol=$row["symbol"]; $open=$row["open"]; $close=$row["close"]; $high=$row["high"]; $low=$row["low"]; $timestamp=$row["timestamp"];
 //   echo " symbol " .$symbol . " open ". $open . " close ". $close . " high  " .$high . " low " . $low . " timestamp ". $timestamp. "<br>";
$sql0 = mysqli_query($connection,"INSERT INTO candle (name,open,close,high,low,date) values ('$symbol','$open','$close','$high','$low','$timestamp')");
}
} else {
  echo "0 results";
}


//ma
$ma900 = mysqli_fetch_assoc(mysqli_query($connection, "select avg(close) as ma901 from candle where id between 1 and 9"));
$ma9 =number_format($ma900['ma901'],2,".",""); echo "<br> Ma9 ".$ma9;
$ma200 = mysqli_fetch_assoc(mysqli_query($connection, "select avg(close) as ma201 from candle where id between 1 and 20"));
$ma20 =number_format($ma200['ma201'],2,".",""); echo "<br> Ma20 ".$ma20;
$ma500 = mysqli_fetch_assoc(mysqli_query($connection, "select avg(close) as ma501 from candle where id between 1 and 50"));
$ma50 =number_format($ma500['ma501'],2,".",""); echo "<br> Ma50 ".$ma50;

$smaup = mysqli_fetch_assoc(mysqli_query($connection, "select * from candle order by id asc limit 1"));
$open0=$smaup["open"]; $close0=$smaup["close"]; $high0=$smaup["high"]; $low0=$smaup["low"]; $timestamp0=$smaup["date"];
echo "<br>last open ". $open0 . " last close ". $close0 . " last high  " .$high0 . " last low " . $low0 . " last trade day ". $timestamp0. "<br>";
if($ma20 > $ma50 && $close0 > $ma50){ $sig = "BUY"; $date0 = $date; echo " signal " .$sig;}
if($ma20 > $ma9 && $close0 < $ma20){ $sig = "SELL"; echo " signal " .$sig;}
if($day == 0 && $sig == "BUY"){ $day0 = $date0; echo " Trand day " .$day0;}
if($day > 0 && $sig == "BUY"){ $day0 = $day; echo " Trand day " .$day0;}
if($day > 0 && $sig == "SELL"){ $day0 = 0; echo " Buy Trand off " .$day0;}

if($hma != "1"){ echo " update sma ";
$smaup = mysqli_query($connection, "UPDATE `sma` SET open='$open0',close='$close0',high='$high0',low='$low0',ma9='$ma9',ma20='$ma20',ma50='$ma50',sig='$sig',day='$day0',time='$timestamp0',hma='1' WHERE name='$symbol'");
} else { echo " Reset sma "; $smareset = mysqli_query($connection,"update sma set hma ='0'"); }
