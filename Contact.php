<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Contactstyle.css">
</head>
<body>
<div class= "container">
<form action= "" method="POST">
    <label> Name :</label>    
        <input type= "text" name="name" class="form-control" requried>

        <label>Email :</label>
        <input type= "email" name="email" class="form-control" requried>

        <label> Phone Number :</label>
        <input type= "number" name="phone" class="form-control" requried>

        <label> Message :</label>
        <textarea name= "msg" cols="10" rows="5" class="form-control" required></textarea>

        <input type= "submit" name="submit_form"  value="submit" class="btn-primary">
</form>
</body>
</head>