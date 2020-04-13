<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Account Registration</title>
	<meta name="author" content="name">
	<meta name="description" content="description here">
	<meta name="keywords" content="keywords,here">
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
	</head>
	<body id="" >
		<div id="content">
			<h1>
				<a>Account Registration</a>
			</h1>
			<form id="registration" class="userForm"  method="post" action="">					
				<ul >
					<li id="" >
						<label class="formLabel" for="username">Eternal Username </label>
						<div>
							<input id="username" name="username" class="" type="text" maxlength="50" value=""/> 
						</div>
					</li>
					<li id="" >
						<label class="formLabel" for="email">Email </label>
						<div>
							<input id="email" name="email" class="" type="text" maxlength="50" value=""/> 
						</div>
					</li>
					<li id="" >
						<label class="formLabel" for="password">Password </label>
						<div>
							<input id="password" name="password" class="" type="text" maxlength="15" value=""/> 
						</div> 
					</li>
					<li id="" >
						<label class="formLabel" for="password2">Confirm Password </label>
						<div>
							<input id="password2" name="password2" class="" type="text" maxlength="15" value=""/> 
						</div> 
					</li>
						<input id="saveForm" class="" type="submit" name="submit" value="Submit" />
				</ul>
			</form>	
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"/>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"/>
	</body>
</html>