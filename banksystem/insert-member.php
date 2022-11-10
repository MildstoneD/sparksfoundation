<?php

include('db.php');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$accnum = $_POST['account_number'];
$accbal = $_POST['account_balance'];

$sql = "INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `account_number`, `account_balance`) 
VALUES (NULL, '$fname', '$lname', '$email', '$accnum', '$accbal')";

if ($conn->query($sql) === TRUE) {
    header("location: view.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  ?>