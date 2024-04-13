<?php

include("connection.php");

if(isset($_POST["register_button"]))
{
$fn = $_POST["fullname"];	//no
	
$pwd = $_POST["password"]; //no
$cont = $_POST["contact"]; //no

$qry = "INSERT INTO `register`(`id`, `fullname`, `password`, `contact`) VALUES (NULL, '$fn','$pwd','$cont')";

$result = mysqli_query($connect, $qry);

if($result)
{
	?> <script> alert("Registration Successfull"); </script> <?php
}
else
{
	?> <script> alert("Something went wrong, try again later"); </script> <?php
}
	
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link  rel="stylesheet" href="style.css">
</head>
<body>
    <h2>
        Registration Form
    </h2>

    <div class="row">
        <div class="col-md-3 mx-auto">
        <form method="post" enctype="multipart/form-data" >
					<input type="text" name="fullname" placeholder="username" class="form-control" id="one">
					
					<input type="password" name="password" placeholder="Password" class="form-control" id="one">
					<input type="tel" name="contact" placeholder="Mobile Number" class="form-control" id="one">
					<button type="submit" class="btn btn-primary" id="btnsubmit" name="register_button"> Register </button>		
                </form>  
    </div>
    </div>







    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
</body>
</html>