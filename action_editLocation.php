<?php
include("config.php");
include("firebaseRDB.php");


//include("index.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("Management", $id, [
   "address" => $_POST['address'],
   "name" => $_POST['name'],
   "date" => $_POST['date'],
   "daysWithoutCovid" => $_POST['daysWithoutCovid'],
   "checkIns" => $_POST['checkIns'],
   "email" => $_POST['email'],
   "pass" => $_POST['pass'],
]);

header("Location:view_locations.php");

