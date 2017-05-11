<?php
include('db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM Appointment WHERE id=".$id;
$result = $conn->query($sql);
?>
<html>

<head>
    <title>ADD APPOINTMENT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <div class="row" ng-app="myApp" ng-controller="myCtrl">
        <div class="col-md-2"></div>

        <div class="col-md-9">
            <?php while ($row = $result->fetch_object()) { ?>
            <h2>ID : <?php echo $row->idAppoint; ?></h2><br>
            <p class="str">Appointment Name : <?php echo $row->Appointment; ?></p><br>
            <?php $committees = explode(",", $row->Committee);
            for ($i=0; $i < count($committees); $i++) { ?>
                <p class="str">Committee Name <?php echo $i+1; ?> : <?php echo $committees[$i]; ?></p><br>
            <?php } ?>
            <p class="str">Start Date : <?php echo $row->FDate; ?></p><br>
            <p class="str">Finish Date : <?php echo $row->LDate; ?></P><br>
            <p class="str">Status : <?php echo $row->status; ?></p><br>
            <p class="str">Link : <?php echo $row->link; ?>
            <?php } ?>
            <center><button class="button submit" ng-click="Back()">Back</button></center>
        </div>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope, $http) {
            $http.get("getall.php").then(function(response) {
                $scope.data = response.data.Item;
            });
        $scope.Back = function() {
            document.location = "index.html";
        }
        });
    </script>
</body>
</html>