<!DOCTYPE html>
<?php
include('db.php');
if(isset($_POST['submit'])){
    $fDate = date('Y-m-d', strtotime($_POST['FDate']));
    $LDate = date('Y-m-d', strtotime($_POST['LDate']));
    $sql = "INSERT INTO Appointment(FDate,LDate) VALUES('$fDate','$LDate')";
    $conn->query($sql);
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
    $( function() {
        $( "#datepicker2" ).datepicker();
    } );
  </script>
</head>
<body>
    <form action="index.php" method="post">
        <p>Start Date: <input type="text" id="datepicker" name="FDate"></p>
        <p>Finish Date: <input type="text" id="datepicker2" name="LDate"></p>
        <input type="submit" name="submit">
    </form>
</body>
</html>