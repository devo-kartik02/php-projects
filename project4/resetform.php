<?php

$pwd="";
if(isset($_POST["resetbtn"])){

    $connect = mysqli_connect("localhost","root","","project4");
   $name= $_POST["username"];
   $mob = $_POST["mobile"];
  $qry =  "SELECT * FROM `user` WHERE username='$name' AND mobile='$mob'";
  $result = mysqli_query($connect,$qry);
  $data = mysqli_fetch_assoc($result);

  
  $id = $data["id"];
  $row = mysqli_num_rows($result);
  if($row>0){
    $pwd = randomPassword();
   $qry = " UPDATE `user` SET `password`='$pwd'WHERE id = '$id'";
  $result =  mysqli_query($connect,$qry);
  ?><script>alert("password reset successfully"); </script><?php
  }
  else{
    echo "invalid username or mobile number";
  }
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#@';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
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
            <div class="col-md-4 mx-auto" style="margin-top:50px;">
                <div class="card">
                    <div class="card-header bg-dark text-light" >
                      Reset Password
                    </div>
                    <div class="card-body">
                        <form method ="post">
                            <div class="form-group">
                                <label> User Name</label>
                                <input type="text" name="username" class="form-control">
                            </div>

                            

                            <div class="form-group">
                                <label>Mobile number</label>
                                <input type="password" name="mobile" class="form-control">
                            </div>

                            <div class="form-group">
                               <button class ="btn btn-dark" name="resetbtn">Change Password</button>
                            </div>

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