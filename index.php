<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Authors Album</title>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="app/src/style/style.css">
</head>
<body>
	<div ng-app="myAuthorAlbum">
		<div class="container lead">
			<h1>Liste d auteurs</h1>
		</div>
		<div ng-view></div>
	</div>
	<script src="bower_components/angular/angular.min.js"></script>
	<script src="bower_components/angular-route/angular-route.min.js"></script>
	<script src="app/config/app.js"></script>
	<script src="app/config/router.js"></script>
	<script src="app/src/controllers/authorCtrl.js"></script>
	<script src="app/src/controllers/mainCtrl.js"></script>
</body>
</html>