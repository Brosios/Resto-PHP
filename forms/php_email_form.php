<?php
include '../dbh.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    $message = $_POST['message'];


  
    
    require '../dbh.php';
    $sql = "INSERT INTO reservation (name, email, phone, date, time, people, message) VALUES ('$name', '$email', '$phone', '$date', '$time', '$people, '$message');"; // Inserting data into the database
    $db->query($sql);
    header("Location: ../index.php?success=true"); // Redirecting to index.php
    exit(); 
}
