<?php
include('db.php');
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$sql = "SELECT *
        FROM Committee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rows = array();
    while($row = $result->fetch_object()) { 
        $rows[] = $row;
    }
    $str = "{ ";
    $str.= "\"items\":".json_encode($rows);
    $str.= " }";
} else {
    $str = "{\"items\": []}";
}

header('Content-Type: application/json');
echo $str;

// Close connection
$conn->close();

?>