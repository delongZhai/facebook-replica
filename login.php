<!DOCTYPE html> 
<html lang="en"> 

<head>
    <title>Facebook -Log In or Sign Up</title>
		<h1 id="white" class="facebook">facebook</h1>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<form>
		<div class="login"> 
			<span class="emailLogin">Email</span> 
			<input type="text" name="email" >
			<span class="passwordLogin">Password </span>
			<input type="password" name="pass" >
			<button type="button">Log In</button>
		</div>
	</form>

	<div class="div3">Connect with friends and the</div>
	<div class="div3">world around you on Facebook. </div>

	<form class="form" action="new_user.php" method="POST">
	<div class="div1">Sign Up</div>
	<div class="div2">It’s free and always will be. </div>
		<p>
			<input type="text" class="textbox" name="first_name" placeholder="First name">
			<input type="text" class="textbox" name="last_name" placeholder="Last name">
		</p>
		<p> <input type="text" class="textbox" id="wid" name="email" placeholder="Email"></p>
		<p> <input type="password" class="textbox" id="wid" name="pass" placeholder="New password"></p>
	

			<?php
			$months = array("January","February","March","April","May","June","July","August","September","October","November","December");

			echo "Birthday </br>";
			echo "<select>";
			echo "<option value = Y> Month</option>";
			foreach($months as $month){
				echo "<option value=$month>$month</option>";
			}
			echo "</select>";

			echo "<select>";
			echo "<option value = D> Day</option>";
			foreach(range(1,31) as $days){
				echo "<option value = $days>$days</option>";
			}
			echo "</select>";

			echo "<select>";
			echo "<option value = Y> Year</option>";
			foreach(range(1930,2018) as $year){
				echo "<option value = $year>$year</option>";
			}
			echo "</select>";
			?>
		<br/>
		
		<input type="radio" name="gender" value="female"> Female
		<input type="radio" name="gender" value="male"> Male
		<br/>
  	<button type="submit">Sign Up</button>
		</form>

</body>

</html>