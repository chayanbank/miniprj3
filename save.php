<?php
include('db.php');

$id = $_GET['id'];

$idAppoint = $_GET['idAppoint'];
$Appointment = $_GET['Appointment'];
$Committee = $_GET['Committee'];
$FDate = date('Y-m-d',strtotime($_GET['FDate']));
if ($_GET['LDate']=="" || $_GET['LDate']=="undefined" || $_GET['LDate']=="-") {
    $LDate = "-";
}else{
    $LDate = date('Y-m-d',strtotime($_GET['LDate']));
}
$status = "Active";
$link = $_GET['link'];

$sql = "UPDATE Appointment SET 
			idAppoint = '$idAppoint' ,
			Appointment = '$Appointment' ,
			Committee = '$Committee' ,
			FDate = '$FDate' , 
			LDate = '$LDate'
			WHERE id = $id ";
$conn->query($sql);

$conn->close();

header("location: getall.php");
?>