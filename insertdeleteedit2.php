<?php
include("db2.php");

if(isset($_POST['submitinserdetails'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
if(!empty($firstname) && !empty($lastname) && !empty($email) ) {
 $sql = "INSERT INTO `insertdeleteedit2`( `firstname`, `lastname`, `email`)
                                     VALUES ('$firstname','$lastname','$email')";
$qry = mysqli_query($connect, $sql);
if($qry) {
 echo "inserted successfully";
}
} else {
 echo "all fields must be filled";
}
}
 
?>
 
 
 
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="firstname"><br ><br >
<input type="text" name="lastname"><br ><br >
<input type="text" name="email"><br ><br >
<input type="submit" name="submitinserdetails" value="insert">
<li><a href="display2.php">Please click to access the data for staff</a></li>

</form>
</body>
</html>
 