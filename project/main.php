<!doctype html>
<html>

<head>
<title>Home page</title>
<link rel="stylesheet" href="styles.css"/>
<style>
body
{
background-color:rgb(32,178,170);
}
</style>
</head>

<body>
<main>
<form method="post" action="">
<div>
<center><h1>Nutrition And Management<h1></center>

<div>
<center><input type="submit" name="bmr" value="bmr Calculator"></center><br>

<center><input type="submit" name="bmi" value="bmi Calculator"></center><br>

<center><input type="submit" name="diet" value="Diet Plan"></center><br>
</div>
<div>
<center><input type="submit" name="exi" value="logout"></center><br>
</div>
</div>

<?php 
if(isset($_POST['bmr']))
{
header("location:bmr.php");
exit;
}
?>

<?php 
if(isset($_POST['bmi']))
{
header("location:bmi.php");
exit;
}
?>


<?php 
if(isset($_POST['diet']))
{
header("location:diet.php");
exit;
}
?>

<?php 
if(isset($_POST['exi']))
{
header("location:home.php");
exit;
}
?>



</form>
</main>
</body>
</html>
