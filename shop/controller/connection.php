<?php
include 'SimpleOrm.class.php';
$conn = new mysqli('localhost', 'root', '');
if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn, 'projet');
?>