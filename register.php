<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<h1>Register a User</h1>

<form action="save-registration.php" method="POST">
	<div>
		<label>First Name</label>
		<input type="text" name="first_name" required />	
	</div>
	<div>
		<label>Middle Name</label>
		<input type="text" name="middle_name" />	
	</div>
	<div>
		<label>Last Name</label>
		<input type="text" name="last_name" required />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" required />	
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password" required />	
	</div>
	<div>
		<label>Confirm Password</label>
		<input type="password" name="confirm_password" required />	
	</div>
	<div>
		<label>Birthdate</label>
		<input type="date" name="birthdate" required />	
	</div>
	<div>
		<label>Gender:</label>
		<input type="radio" name="gender" value="male" required />
		<label>Male</label>
		<input type="radio" name="gender" value="female" />
		<label>Female</label>
	</div><br>
	<div>
		<label>Address</label>
		<textarea name="address" required></textarea>	
	</div>
	<div>
		<label>Contact Number</label>
		<input type="tel" name="contact_number" required />	
	</div><br>
	<div>
		<button>
			Register User
		</button>	
	</div>
</form>


</body>
</html>