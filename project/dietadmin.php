<html>
<head>
<title>CRUD DIET</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
background-color:rgb(192,192,192);
}
</style>
</head>
<body>
<form method="post" action="dietadmin1.php">
    <center><h1>DIET PLAN<h1>


    <label for="name">Enter ID:</label>
    <input type="text" name="id" ><br>


     <label for="name">Enter minimum protein:</label>
    <input type="text" name="min1" ><br>

    
    <label for="name">Enter miximun protein:</label>
    <input type="text" name="max1" ><br>   
  
    <label for="breakfast">enter breakfast:</label>
    <input type="text" name="breakfast" ><br>

    <label for="snack1">enter snack:</label>
    <input type="text" name="snack1" ><br>

    <label for="lunch">enter lunch:</label>
    <input type="text" name="lunch" ><br>

    <label for="snack2">enter snack2:</label>
    <input type="text" name="snack2" ><br>

    <label for="dinner">enter dinner:</label>
    <input type="text" name="dinner" ><br>

    <label for="total">enter total protein:</label>
    <input type="text" name="total_protein" ><br>
  


    <input type="submit" name="insert" value="insert"><br><br>

    <input type="submit" name="delete" value="delete"><br><br>

    <input type="submit" name="ShowAll" value="ShowAll"><br><br>
    
<a href="adminmain.php">Back</a></center>

</form>
</body>
</html>