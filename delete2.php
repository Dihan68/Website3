<?php
include("db2.php");
$getid = $_GET['deleteid'];
$sel = "DELETE FROM `insertdeleteedit2` WHERE `id` = '$getid'";
$qry = mysqli_query($connect, $sel);
if($qry) {
 header("location: insertdeleteedit2.php");
}
 
?>