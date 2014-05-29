<?php

$link = mysqli_connect('192.168.50.5', 'app', 'secret', 'hello');

if (mysqli_connect_errno($link)) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$res = mysqli_query($link, "SELECT greeting FROM greetings ORDER BY RAND() LIMIT 1");
$row = mysqli_fetch_assoc($res);

echo $row['greeting'] . " everyone\n";