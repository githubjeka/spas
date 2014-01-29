<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <base href="/test/goto/">
    <meta charset="utf-8">
    <meta name="fragment" content="!" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic,cyrillic-ext'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!--[if lte IE 8]>
<p class="browsehappy">
    Похоже, вы используете <strong>устаревшую версию</strong> Internet Explorer. <a href="http://browsehappy.com/">Обновите
    свой браузер</a>.
</p>
<![endif]-->

<div ng-view class="height100"></div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.9/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.9/angular-route.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.9/angular-animate.js"></script>
<script src="js/app.js"></script>
<script src="js/controllers.js"></script>

</body>
</html>
