<?php
$conn= mysqli_connect("localhost","root","","student");


$name = $_POST['fname'];
$lastname= $_POST['lname'];
$yeargroup =$_POST['yeargroup'];
$email= $_POST['email'];
$postcode= $_POST['postcode'];

$sql="INSERT INTO `list`(`firstname`, `surname`,'yeargroup','postcode','email',) VALUES ('$name'.'$yeargroup')";

$insert = mysqli_query($conn, $sql);


if (!insert) {
    echo  "Error";

}
else{
    header("location: /userregistraion/");

}
?>