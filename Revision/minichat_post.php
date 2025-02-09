<?php
include('connection.php');

$query = "INSERT INTO minichat(pseudo, message) VALUES (?, ?)";

$name = $_POST['name'];
$message = $_POST['message'];

$request = $connect->prepare($query);

$request->execute([$name, $message]);


header('location: minichat.php');
?>