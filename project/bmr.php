<html>
<head>
<title>BMR CALCULATOR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
background-color:rgb(176,196,222);
}
</style>
</head>
<body>
	<div class="container">
		<h1>BMR Calculator</h1>
		<form action="bmr1.php" method="post">
          <label for="name">Name:</label>
			<input type="text" name="name" id="name">

			<label for="gender">Gender:</label>
			<select name="gender" id="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			<label for="age">Age:</label>
			<input type="text" name="age" id="age">
			<label for="height">Height (in cm):</label>
			<input type="text" name="height" id="height">
			<label for="weight">Weight (in kg):</label>
			<input type="text" name="weight" id="weight">
			<input type="submit" value="Calculate BMR">
          <a href="main.php">Back</a>
		</form>
	</div>
</body>
</html>
