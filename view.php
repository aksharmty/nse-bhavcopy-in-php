<body style="background-color:#000000; color:white;">
<?php
include"connect.php";
echo "<b> Only for short trem long signal<br> BUY Condition : ma20 > ma50 & last day close > ma50 <br> SELL Condition ma20 > ma9 & last day close < ma20 <br> Please do not try this signal for short selling</b>";
//ma
$sql = "SELECT * FROM sma";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Stock Name</th><th>Open</th><th>Close</th><th>High</th><th>Low</th><th>Signal</th><th>Trand start</th><th>Ma9</th><th>Ma20</th><th>Ma50</th><th>Date</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["id"]. " </td><td> " . $row["name"]. " </td><td> " . $row["open"]. "</td><td> " . $row["close"]. "</td><td> " . $row["high"]. "</td><td> " . $row["low"]. "</td><td> " . $row["sig"]. "</td><td> " . $row["day"]. "</td><td> " . $row["ma9"]. "</td><td> " . $row["ma20"]. "</td><td> " . $row["ma50"]. "</td><td> " . $row["time"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
$connection->close();
?>
