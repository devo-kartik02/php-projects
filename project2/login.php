<?php
if(isset($_POST["login_button"])){
    include("connection.php");
    $fn = $_POST["fullname"];
    $pwd = $_POST["password"];
    $qry = "select * from student where fullname = '$fn' AND password = '$pwd'";
    $result = mysqli_query($connect,$qry);
    $rows = mysqli_num_rows($result);
    $data = mysqli_fetch_assoc($result);
  //  echo $data["id"];

    if($rows>0){
      session_start();
    $id = $data["id"];
   
    $_SESSION["sid"] = $data["id"];

      header("location:user.php");
    }
    else{
      
      ?> <script>alert("Wrong User name or Password")</script><?php }
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Login form
    </h2>
    <div class="row">
        <div class="col-md-3 mx-auto">
        <form method="post">
								
                                <input type="text" name="fullname" placeholder="User name" class="form-control"> <br>
								<input type="password" name="password" placeholder="Password" class="form-control"><br>
								<button type="submit" class="btn btn-primary" id="btnsubmit" name="login_button"> Login </button><br>

								<!-- <p> Don't Have an Account? <a href="#registermodal" data-toggle="modal" data-dismiss="modal"> Sign Up </a> </p> -->

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