<?php
$conn = new mysqli("database", "root", ".sweetpwd.", "my_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM users";
$result = $conn->query($sql);
echo "<h1 style='color:red;'> My MAJU CLOUD SHOP </h1> <h1 style='color:red;'> SYED ANWAR AHMED SHAH </h1><b><ol>";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<li> $row[name] </li> <br>";
    }
    echo "</ol>";
} else {
    echo "0 results";
}
$conn->close();
