<?php
$username = "u538666326_root1"; // username
$password = "9Q29o5Ix+n[IGEihB6"; // password of the database
$hostname = "mysql.hostinger.fr"; // host of the database
$namebase = "u538666326_lsmdb"; // name of the database























// Attempt to connect to the database
try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
 }
  catch (Exception $e)
 {
  // If an error is thrown, display the message
  die('Erreur : ' . $e->getMessage());
 }
 ?>
