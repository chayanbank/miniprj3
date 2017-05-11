<?php
$host = "localhost";
$user = "it58160253";
$password = "CHSU#2785";
$dbname = "it58160253";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);

$id = $_GET['id'];
$appoint = $_GET['appoint'];
$commit = $_GET['commit'];
$FDate = date('Y-m-d',strtotime($_GET['FDate']));
if ($_GET['LDate']=="undefined" || $_GET['LDate']=="") {
    $LDate = "-";
}else{
    $LDate = date('Y-m-d',strtotime($_GET['LDate']));
}
$status = "Active";
$link = $_GET['link'];

$sql = "INSERT INTO Appointment(idAppoint,Appointment,Committee,FDate,LDate,status,link) VALUES('$id','$appoint','$commit','$FDate','$LDate','$status','$link')";
$conn->query($sql);

$com = explode(",", $commit);
for ($i = 0; $i < count($com); $i++) {
$sql2 = "INSERT INTO Committee(name) VALUES('$com[$i]')";
$conn->query($sql2);
}
$conn->close();

header("location: getall.php");
?>