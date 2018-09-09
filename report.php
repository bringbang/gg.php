<!DOCTYPE html>
<html>
<body>
<?php
include("conn/mysqlcon.php");

$sql ="SELECT * FROM userprofile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["UserID"]. " - Name: ". $row["name"]. " " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>