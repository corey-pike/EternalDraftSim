<?php
	include "headerA4.php";
?>
<main class="content">
		<div id="content">
			<h1>
				<a>Log In</a>
			</h1>
			<small>this will be a popup window</small>
                        <form id="login" class=""  method="post" action="index.php">					
				<ul >
					<li>
						<label class="formLabel" for="username">Username </label>
						<div>
							<input name="username" class="" type="text" maxlength="50" pattern="[a-zA-Z0-9]{1,}#[0-9]{4}" title="Can only use alphanumeric characters and must end with '#' followed by 4 numbers"/> 
						</div>
					</li>
					<li>
						<label class="formLabel" for="password">Password </label>
						<div>
							<input type="password" id="password" name="password" pattern="^([a-zA-Z0-9@*#]{8,15})$" title="Password must consists of at least 8 characters and not more than 15 characters">
						</div> 
					</li>
                                        <li>
						<input id="saveForm" class="" type="submit" name="submit" value="Submit" />
                                        </li>
				</ul>
			</form>	
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"/>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"/>
	</main>
<?php
    include "footerA4.php";
?>