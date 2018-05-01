/**
* Created by IntelliJ IDEA.
* User: tarun
* Date: 4/30/18
* Time: 10:02 PM
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Debate Paradise</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
          crossorigin="anonymous">
    <link rel="stylesheet" href="/NewWeb/css/style.css">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="myApp">


<!--    nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/NewWeb/index.php">HOME <span
                            class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/NewWeb/php/leaderboard.php">LEADERBOARD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/NewWeb/php/debate.php">DEBATE ZONE</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navDropDownLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-address-book-o" style="font-size:30px"></i> <strong>My
                    Profile</strong>
            </a>
            <div class="dropdown-menu" aria-labelledby="navDropDownLink">
                <a class="dropdown-item" href="#">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
    </ul>

</nav>


<div ng-controller="myCtrl">
    <p>Click the button to run a function:</p>
    <button ng-click="myFunc()">Like Me</button>
    <p>You have liked the debate content {{count}} times.</p>
</div>

<script>
    angular.module('myApp', [])
        .controller('myCtrl', ['$scope', function ($scope) {
            $scope.count = 0;
            $scope.myFunc = function () {
                $scope.count++;
            };
        }]);
</script>


<!--    heading-->
<!--    main content-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="/NewWeb/js/app.js"></script>


</body>
</html>
