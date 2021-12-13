
<?php
include("db.php");

$getid = $_GET['edit'];
$seledittwo = "SELECT * FROM `insertdeleteedit` WHERE `id` = '$getid'";
$qry = mysqli_query($connect, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$firstname = $selassoc['firstname'];
$lastname = $selassoc['lastname'];
$email = $selassoc['email'];

if(isset($_POST['updateedit'])){
 $upid =  $_POST['upid'];
 $upfirstname =  $_POST['upfirstname'];
 $uplastname =  $_POST['uplastname'];
 $upemail =  $_POST['upemail'];
 
 
 $seleditt = "UPDATE `insertdeleteedit` SET `firstname`='$upfirstname',`lastname`='$uplastname',`email`='$upemail' WHERE `id` = '$upid'";
 $qry = mysqli_query($connect,$seleditt);
 if($qry) {
  header("location: display.php");
 }
}
 
//$seledit = "UPDATE `insertdeleteedit` SET `id`=&#91;value-1&#93;,`firstname`=&#91;value-2&#93;,`lastname`=&#91;value-3&#93;,`email`=&#91;value-4&#93; WHERE `id` = '$getid'";
 
?>
 
 <!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<form method="POST" action="">
   <input type="text" name="upid" value="<?php echo $id; ?>"><br><br>
 <input type="text" name="upfirstname" value="<?php echo $firstname; ?>"><br><br>
 <input type="text" name="uplastname" value="<?php echo $lastname ; ?>"><br><br>
 <input type="text" name="upemail" value="<?php echo $email; ?>"><br><br>
 <input type="submit" name="updateedit" value="Update">
</form>
</body>
</html>

 
