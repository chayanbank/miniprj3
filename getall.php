<?php
include('db.php');
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$sql = "SELECT *
        FROM Appointment";
$result = $conn->query($sql);

if(!$_GET['Fyear']) $Fyear = 1995;
else $Fyear = intval($_GET['Fyear']);

if(!$_GET['Lyear']) $Lyear = 2035;
else $Lyear = intval($_GET['Lyear']);

if ($result->num_rows > 0) {
    $rows = array();
    while($row = $result->fetch_object()) { 
        if($Fyear <= intval(substr($row->FDate,0,4)) && ($Lyear >= intval(substr($row->LDate,0,4)) || $row->LDate == '-')){
            $rows[] = $row;
        }
    }
    $str = "{ ";
    $str.= "\"Item\":".json_encode($rows);
    $str.= " }";
} else {
    $str = "{\"Item\": []}";
}

header('Content-Type: application/json');
echo $str;

// Close connection
$conn->close();

?>