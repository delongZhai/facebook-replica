<!DOCTYPE html> 
<html lang="en"> 

<head>
		<!-- adding bootstrap stylesheet and js files -->
    <title>Facebook -Log In or Sign Up</title>
		<h1 id="white" class="facebook"><span class="title">facebook</span></h1>

    <!-- adding bootstrap stylesheet and js files -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="styles/styles.css" rel="stylesheet" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- When the user clicks submit an alert will pop up -->
		<script>
			$(document).ready(function(){
  			elem.onclick = function() {
    		alert('Thank you for signing up. If there are no errors you will be registed. If there are errors they will display on the next page.');
  			};
			});
		</script>

</head>

<body>
    <!-- Form for signing in -->
		<form action="signin.php" method="POST" target="_self">
		<div class="login"> 
			<span class="emailLogin">Email</span> 
			<input type="email" name="user" >
			<span class="passwordLogin">Password </span>
			<input type="password" name="pass" >
			<button type="submit">Log In</button>
		</div>
	</form>

	<div class="div3">Connect with friends and the</div>
	<div class="div3">world around you on Facebook. </div>

		<p id="info1">
			<img src="../Images/logo1.png" alt="Logo1" title="Logo1" width="50"/>
			<strong>See photos and updates</strong> from friends in News Feed. 
		</p>
		<p id="info2">
			<img src="../Images/logo2.png" alt="Logo2" title="Logo2" width="50"/>
			<strong>Share what's new</strong> in your life on your Timeline. 
		</p>
		<p id="info3">
			<img src="../Images/logo3.png" alt="Logo3" title="Logo3" width="50"/>
			<strong>Find more</strong> of what you're looking for with Facebook Search. 
		</p>

	<!-- Form for signing up -->
	<form name="signup" class="form" action="new_user.php" id="newuser" method="POST" target="_blank">
	<div class="div1">Sign Up</div>
	<div class="div2">It’s free and always will be. </div>

	<p>
			<input type="text" class="textbox" name="first_name" placeholder="First name">
			<input type="text" class="textbox" name="last_name" placeholder="Last name">
	</p>
	<p> <input type="email" class="textbox" id="wid" name="email" placeholder="Email"></p>
	<p> <input type="password" class="textbox" id="wid1" name="pass" placeholder="New password"></p>

	<div>Birthday</div>
			<input type="date" name="bday">
	<br/>
	
		<input type="radio" name="sex" value="female"> Female
		<input type="radio" name="sex" value="male"> Male
		<br/>
		<p class="terms">
		By clicking Sign Up, you agree to our Terms, Data Policy and Cookies Policy. You may receive SMS Notifications from us and can opt out any time. 
		</p>
  	<button class= "sub" id="elem" type="submit">Sign Up</button>
	</form>
</body>

</html>