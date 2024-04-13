<?php
session_start();
if(isset($_SESSION['uid'])){
    header("location:user.php");
}

if(isset($_POST["loginbtn"])){

    include("dbconnect.php");
$eid =  $_POST["email"];
$pwd = $_POST["password"];

if($eid == "admin" && $pwd == "admin"){
    header("location:admin.php");

}
$pwd = md5($_POST["password"]);
$qry ="select * from register where email = '$eid' AND password = '$pwd'";
$result = mysqli_query($connect,$qry);
$row = mysqli_num_rows($result);
if($row>0){

   $data = mysqli_fetch_assoc($result);
   session_start();
   $_SESSION["uid"] =  $data["id"];
header("location:user.php");
}
else{
    echo "Invalid email or password";
}

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Login form
                    </div>
                    <div class="card-body">
                         <form method="post">
                            
                            <div class="from-group">
                                <label>Email</label>
                                <input type="text" name = "email" class="form-control">
                            </div>
                            <div class="from-group">
                                <label>Password</label>
                                <input type="password" name = "password" class="form-control">
                            </div>
                            <br>
                            <div class="from-group">
                                <button class="btn btn-primary" type="submit" name = "loginbtn">Login</button>
                            </div>
                            <p>Dont have an account? <a href="register.php">sign up</a></p>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>