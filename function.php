<?php
include('db.php');

if ($_GET['status']==1) {
    $sql = "SELECT * FROM Appointment";
    $result = $conn->query($sql);
    while ($row = $result->fetch_array()) {
        if (date('Y-m-d') >= $row['LDate'] && ($row['LDate'] != "-")) {
            $sql = "UPDATE Appointment SET status='Expired' WHERE id=".$row['id'];
            $conn->query($sql);
        }else if (($row['FDate'] < $row['LDate']) || ($row['LDate'] == "-")) {
            $sql = "UPDATE Appointment SET status='Active' WHERE id=".$row['id'];
            $conn->query($sql);
        }else{
            $sql = "UPDATE Appointment SET status='Expired' WHERE id=".$row['id'];
            $conn->query($sql);
        }
    }
    $conn->close();
    header("location: getall.php");
}else if ($_GET['status']==2) {
    $sql = "DELETE FROM Appointment WHERE id=".$_GET['id'];
    $conn->query($sql);

    header("location: getall.php");
}else if ($_GET['status']==3) {
    $sql = "SELECT * FROM Appointment";
    mysqli_query("SET NAMES utf8");
    $result = $conn->query($sql);
    while($row = $result->fetch_array()) {
        if ($row['id']==$_GET['id']) {
            if ($row['status']=="Active") {
                $sql = "UPDATE Appointment SET status='Expired', LDate='".date('Y-m-d')."' WHERE id=".$_GET['id'];
                $conn->query($sql);
                header("location: getall.php");
            }else if ($row['status']=="Expired") {
                $sql = "UPDATE Appointment SET status='Active', LDate='-' WHERE id=".$_GET['id'];
                $conn->query($sql);
                header("location: getall.php");
            }
        }
    }
}
?>