<html>
<head>
<title>CRUD USER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
background-color:rgb(192,192,192);
}
</style>
</head>
<body>
<form method="post" action="bmradmin1.php">
    <center><h1>USER DETAILS<h1>

     <label for="id">enter id:</label>
      <input type="id" name="id" id="id"><br>

     <label for="name">Enter new name:</label>
    <input type="text" name="name" id="name"><br>

    <input type="submit" name="update" value="update"><br><br>

    <input type="submit" name="delete" value="delete"><br><br>

    <input type="submit" name="ShowAll" value="ShowAll"><br><br>
    
<a href="adminmain.php">Back</a></center>

</form>
</body>
</html>