<?php
$conn = mysqli_connect("localhost", "root", "Netmedia040700_", "cafe_kupang");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
