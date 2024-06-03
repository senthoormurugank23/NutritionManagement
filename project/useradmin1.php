<html>
<head>
<title>CRUD USER</title>
</head>
<body>
<form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nutrition";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql1 = "UPDATE users SET name='$name' WHERE id='$id'";

    if (mysqli_query($conn, $sql1)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}




if(isset($_POST['insert'])) {
   
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users ( id, name,email,phone_number,password) VALUES ( '$id', '$name','$email','$phone_number','$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if(isset($_POST['ShowAll'])) {


$sql3 = "SELECT * FROM users";
$result = $conn->query($sql3);

echo"<center><h1>USER ADMIN<h1></center>";

echo "<center><table style='border: 1px solid black;'>";
    echo "<tr><th>ID</th><th>name</th><th>emailid</th><th>phone_number</th><th>password</th></tr>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
 
 
    echo "<tr>";
    echo "<td style='border: 1px solid black;'>".$row["id"]."</td>";
  echo "<td style='border: 1px solid black;'>".$row["name"]."</td>";
  echo "<td style='border: 1px solid black;'>".$row["email"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["phone_number"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["password"]."</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='3'>No results found</td></tr>";
}

echo "</table></center>";
}

if(isset($_POST['delete'])) {
    
    $id = $_POST['id'];

    $sql2 = "DELETE FROM users WHERE id = '$id'";
    
    if(mysqli_query($conn, $sql2)) {
        echo "<center>Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn)."</center>";
    }
}






$conn->close();
?>
<center>
<a href="useradmin.php">Back</a></center>
</body>
</html>

