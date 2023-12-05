<?php
$connection = pg_connect($_SESSION['connection']);
//get the name parameter from URL
$name = $_GET["name"];
//get the info from the database
$query = "SELECT * FROM album WHERE name = '$name'";
$result = pg_query($connection, $query);
$result = pg_fetch_array($result);
//store the info in variables
//match the name of the columns in the database
$name = $result['name'];
$units = $result['units'];
$price = $result['price'];
$artist = $result['artist'];
$release_date = $result['release_date'];
$img = $result['img'];
?>