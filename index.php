<!DOCTYPE html>
<?php
include('db.php');
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
    <p>Start Date: <input type="text" id="datepicker"></p>
    <p>Finish Date: <input type="text" id="datepicker2"></p>
</body>
</html>