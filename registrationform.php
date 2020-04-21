<?php
	include "headerA4.php";
?>
<main class="content">
			<h1>
				<a>Account Registration</a>
			</h1>
    			<small>this will be a popup window</small>	
                        <form class="userForm" name="registrationForm" method="post" action="profile.php" onsubmit="return validateUserForm('registrationForm')">		
				<ul >
					<li>
						<label class="formLabel" for="username">Eternal Username </label>
						<div>
							<input id="username" name="username" class="" type="text" maxlength="50" value=""/> 
						</div>
					</li>
					<li>
						<label class="formLabel" for="email">Email </label>
						<div>
							<input id="email" name="email" class="" type="text" maxlength="50" value=""/> 
						</div>
					</li>
					<li>
						<label class="formLabel" for="password">Password </label>
						<div>
							<input id="password" name="password" class="" type="text" maxlength="15" value=""/>
						</div> 
					</li>
					<li>
						<label class="formLabel" for="password2">Confirm Password </label>
						<div>
							<input id="password2" name="password2" class="" type="text" maxlength="15" value=""/> 
						</div> 
					</li>
                                        <li>
						<input id="saveForm" class="" type="submit" name="submit" value="Submit" />
                                        </li>
				</ul>
			</form>	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"/>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"/>
	</main>
<?php
    include "footerA4.php";
?>