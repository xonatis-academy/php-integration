<?php

// Include the Simple ORM class
include 'SimpleOrm.class.php';

// Connect to the database using mysqli
$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

// Tell Simple ORM to use the connection you just created.
SimpleOrm::useConnection($conn, 'projet');

echo 'Ca marche bien';
?>