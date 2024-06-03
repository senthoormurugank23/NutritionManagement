<html>
<head>
<title>BMI CALCULATOR</title>
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
		<h1>BMI Calculator</h1>
		<form action="bmi1.php" method="post">
          <label for="name">Name:</label>
			<input type="text" name="name" id="name">
			
			<label>Enter your weight (in kg):</label>
			<input type="number" name="weight" required>
			<label>Enter your height (in cm):</label>
			<input type="number" name="height" required>
			<input type="submit" value="Calculate BMI">
           <a href="main.php">Back</a>
		</form>
	</div>
</body>
</html>
