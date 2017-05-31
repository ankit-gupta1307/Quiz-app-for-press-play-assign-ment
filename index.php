<html ng-app="questionaireApp">
    <head>
<!--        <base href="/">-->
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Angular Material style sheet -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/angular-material.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/angular-animate.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
        <script src="js/angular-material.min.js"></script>
        <title> Quiz App</title>   
    </head>
    <body layout-align="center center">
        <header>
            <md-toolbar class="fixedHeader" layout-align="center center" style="background-color: #009688;">
                <span class="header">Quiz</span>
            </md-toolbar>
        </header>
        
        <div ng-view></div>
        <script src="js/angular-route.js"></script>
        <script src="main.js"></script>
        <script src="services/questionaireServices.js"></script>
        <script src = "controllers/questionController.js"></script>
        <script src = "controllers/resultController.js"></script>
        <script src = "controllers/loginController.js"></script>
        <script src = "js/fusioncharts.js"></script>
        <script src = "js/fusioncharts.charts.js"></script>
        <script src = "js/angular-fusioncharts.min.js"></script>
    </body>
</html>
    