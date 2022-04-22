<?php
include_once './db.php';

if (isset($_POST['hoten'])) {
  $hoten = $_POST['hoten'];
  // echo $hoten;
  global $conn;
  $hoten = $_POST['hoten'];
  $sdt = $_POST['sdt'];
  $sql = "INSERT INTO ajax (hoten,sdt) VALUES ('$hoten','$sdt')";
  $conn->query($sql);
}
if (isset($_GET['hoten'])) {
  echo $_GET['hoten'];
}
?>
<!-- // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
// $last_id = $conn->insert_id;
// echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
// echo "Error: " . $sql . "<br>" . $conn->error;
// } -->