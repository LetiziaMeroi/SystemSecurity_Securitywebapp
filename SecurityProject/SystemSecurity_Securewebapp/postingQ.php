<?php 
session_start();

include_once 'connect.php';

$username = $_SESSION["username"];
$titleQ = htmlspecialchars($_POST["titleQ"]); 
$bodyQ = htmlspecialchars($_POST["bodyQ"]); 

$conn = mysqli_connect($server,$user,$password,$db) or die("unable to connect");



    $sql = "INSERT INTO question (titleQ, bodyQ, username) VALUES ('$titleQ', '$bodyQ','$username')";



    $query = mysqli_query($conn, $sql);
    header("location: ../SystemSecurity_Securewebapp/forum.php");

    ?>