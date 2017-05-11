<?php
include('db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM Appointment WHERE id = $id";
$result = $conn->query($sql);
?>
<html>

<head>
    <title>EDIT APPOINTMENT</title>
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

    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
        $(function() {
            $("#datepicker2").datepicker();
        });
    </script>
</head>

<body>
    <div class="row"  >
        <div class="col-md-3" ></div>
        <div class="col-md-6" >
            <h2 style="text-align: center;">Edit Appointment</h2>
            <form ng-app="myApp" ng-controller="myCtrl"  >
                <p>ID: <input  type="text" id="id" maxlength="50" class="form-control" ng-model="idAppoint" require="required"d></p>
                <p>Appointment Name: <input type="text" id="app" class="form-control" maxlength="1000" ng-model="Appointment" required="required"></p>
                <p>Committee: </p>
                <p><input type="text" class="form-control" id="com0" ng-model="commit[0]" placeholder="Committee Name" maxlength="50" required="required"></p>
                <p id="plus">
                    <p ng-show="Count > 0"><input type="text" class="form-control" id="com1" ng-model="commit[1]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 1"><input type="text" class="form-control" id="com2" ng-model="commit[2]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 2"><input type="text" class="form-control" id="com3" ng-model="commit[3]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 3"><input type="text" class="form-control" id="com4" ng-model="commit[4]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 4"><input type="text" class="form-control" id="com5" ng-model="commit[5]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 5"><input type="text" class="form-control" id="com6" ng-model="commit[6]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 6"><input type="text" class="form-control" id="com7" ng-model="commit[7]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 7"><input type="text" class="form-control" id="com8" ng-model="commit[8]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 8"><input type="text" class="form-control" id="com9" ng-model="commit[9]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 9"><input type="text" class="form-control" id="com10" ng-model="commit[10]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 10"><input type="text" class="form-control" id="com11" ng-model="commit[11]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 11"><input type="text" class="form-control" id="com12" ng-model="commit[12]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 12"><input type="text" class="form-control" id="com13" ng-model="commit[13]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 13"><input type="text" class="form-control" id="com14" ng-model="commit[14]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 14"><input type="text" class="form-control" id="com15" ng-model="commit[15]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 15"><input type="text" class="form-control" id="com16" ng-model="commit[16]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 16"><input type="text" class="form-control" id="com17" ng-model="commit[17]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 17"><input type="text" class="form-control" id="com18" ng-model="commit[18]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 18"><input type="text" class="form-control" id="com19" ng-model="commit[19]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 19"><input type="text" class="form-control" id="com20" ng-model="commit[20]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 20"><input type="text" class="form-control" id="com21" ng-model="commit[21]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 21"><input type="text" class="form-control" id="com22" ng-model="commit[22]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 22"><input type="text" class="form-control" id="com23" ng-model="commit[23]" placeholder="Committee Name" maxlength="50" required="required"></p>
                    <p ng-show="Count > 23"><input type="text" class="form-control" id="com24" ng-model="commit[24]" placeholder="Committee Name" maxlength="50" required="required"></p>
                </p>
                <button ng-click="addNewCommittee()">Add</button><br>
                <p>Start Date: <input  type="text" id="datepicker" class="form-control" ng-model="FDate" required="required"></p>
                <p>Finish Date: <input  type="text" id="datepicker2" class="form-control" ng-model="LDate"></p>
                <p>Link: <input type="text" value="Link" class="form-control" disabled ng-model="link" maxlength="255"></p>
                <center><button class="button edit" id="edit" ng-click="edit()">Edit</button>
                    <button class="button reset" ng-click="Cancel()">Cancel</button></center>
            </form>
        </div>
    </div>
     <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope, $http ) { $scope.temp = "";$scope.auto = [];check=0;
            $scope.Count = 0;
            $http.get("auto.php").then(function mySucces(response) {
                $scope.nosctemp = response.data.items.length;
                for(i = 0, run = 0; i < response.data.items.length; i++){
                    for(j = 0; j < response.data.items.length; j++){ check=0;
                        if(response.data.items[i].Name == response.data.items[j].Name){
                            for(k = 0; k < $scope.nosctemp; k++){
                                if($scope.auto[k] == response.data.items[j].Name) {check++;}
                            }
                            if(check == 0){
                                $scope.auto[i-run] = response.data.items[j].Name;
                            }else{
                                run++;
                            }
                            break;
                        }
                    }
                }
            });
            for (i = 0, $scope.com = ""; i < 25; i++) {
                if (i == 0) $scope.com += "#com" + i;
                else $scope.com += ",#com" + i;
            }
            $(function() {
                var auto = $scope.auto;
                $($scope.com).autocomplete({
                    source: auto
                });
            });
            $scope.commit = [];
            <?php
            while($row = $result->fetch_object()){
                if($_GET['id'] == $row->id){
            ?>
                $scope.temp = "";
                $scope.Count = "<?php echo count(explode(',',$row->Committee)) - 1; ?>";
                $scope.idAppoint = "<?php echo $row->idAppoint;?>";
                $scope.Appointment = "<?php echo $row->Appointment;?>";
                $scope.FDate = "<?php echo $row->FDate;?>";
                $scope.LDate = "<?php echo $row->LDate;?>";
                $scope.link = "<?php echo $row->link;?>";
               <?php $length = explode(',',$row->Committee);
                for ($i = 0; $i < count(explode(',',$row->Committee)); $i++) { ?>
                    $scope.commit[<?php echo $i; ?>] = "<?php echo $length[$i];?>";
                <?php } ?>
        <?php }} ?>

            $scope.Cancel = function() {
                document.location = "index.html";
            }
            $scope.addNewCommittee = function() {
                $scope.Count++;
            };

            $('#edit').on('click', function(event) {
                if ($('#com0').val() == '') {
                    $("#com0").focus();
                    event.preventDefault();
                }
                if ($('#app').val() == '') {
                    $("#app").focus();
                    event.preventDefault();
                }
                if ($('#id').val() == '') {
                    $("#id").focus();
                    event.preventDefault();
                }
                if ($('#com0').val() != '' && $('#app').val() != '' && $('#id').val() != '') {
                    if ($('#datepicker').val() == '') {
                        $("#datepicker").focus();
                        event.preventDefault();
                    }
                }
                if ($('#com0').val() != '' && $('#app').val() != '' && $('#id').val() != '' && $('#datepicker').val() != '') {
                    $scope.edit = function() {
                        for (i = 0; i <= $scope.Count; i++) {
                            if (i == 0)
                                $scope.temp += $scope.commit[i];
                            else
                                $scope.temp += "," + $scope.commit[i];
                        }
                        $http.get("save.php?id=<?php echo $_GET['id'];?>&idAppoint=" + $scope.idAppoint + "&Appointment=" + $scope.Appointment + "&Committee=" + $scope.temp + "&FDate=" + $scope.FDate + "&LDate=" + $scope.LDate + "&link=" + $scope.link)
                            .then(function mySuccess(response) {
                                document.location = "index.html";
                            });
                    }
                }
            });
        });
    </script>
</body>

</html>