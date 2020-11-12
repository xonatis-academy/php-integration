<?php

include 'controller/connection.php';
include 'model/User.php';

$entry = User::retrieveByPrenom('Jaja', SimpleOrm::FETCH_ONE);
$entry->delete();

echo 'Ca marche bien';
?>