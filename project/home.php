<!doctype html>
<html>

<head>
<title>Nutrition And Management</title>
<link rel="stylesheet" href="styles.css"/>
<style>
    input[type=submit] {
  background-color: lightgreen;
  border: 1px green;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
    }
.myd{
border:6px outset red;
background-color:cyan;
text-align:center;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
padding: 10px;
}

body
{
background-color:rgb(11,50,50);
}
</style>
</head>

<body bgcolor='black'>
<main>
<form method="post" action="">

<div class="myd">
<marquee direction = "right">Get your free diet plan</marquee>
<center><h1>Nutrition And Management<h1></center>
<center><h3>----------------------------------<h3></center>

<center><input type="submit" name="admin" value="admin"></center><br>

<center><input type="submit" name="login" value="login"></center>
</div>

<?php 
if(isset($_POST['admin']))
{
header("location:admin.php");
exit;
}
?>

<?php 
if(isset($_POST['login']))
{
header("location:login.php");
exit;
}
?>


</form>
</main>
</body>
</html>
