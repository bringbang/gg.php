<?php
include("conn/mysqlcon.php");
// define variables and set to empty values
$name = $email = $gender = $comment = $address = $size = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  //$name = trim($_POST["name"]);
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
  $size = test_input($_POST["size"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name."<br>".$email."<br>".$age."<br>".$address."<br>".$gender."<br>".$size."<br>";

//insert data
$sql = "INSERT INTO userprofile (name, email, age, address, gender, size) 
VALUES ('$name', '$email', '$age', '$address', '$gender','$size')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>