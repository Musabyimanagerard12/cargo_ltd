<?php
include 'connect.php';

if(isset($_POST['submit'])){
      $names = $_POST['names'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $phone = $_POST['phone'];

      $insert = "INSERT INTO `manager`(names,UserName,password,phone) VALUES('$names','$user','$pass','$phone')";
      $result = mysqli_query($conn,$insert);

      if($result){
            header('location:index.php');
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cargo-Sign_Up</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>
            body{
                  background-color: rgb(4, 4, 88);
            }
            form{      
                  border: 1px solid #333;
                  color: white;            
                  width: 400px;
                  box-shadow: 0px 0px 5px 10px rgba(0, 0, 0, 0.1);
                  margin-top: 20px;
                  margin-left: 500px;
                  margin-right: 500px;
                  border-radius: 10px;
                  padding: 20px;
            }
      </style>
</head>
<body>
            <form action="" method="post">
                  <center>
                  <h1>CARGO</h1>
                  <h2>Manager Signup</h2><hr>
                  </center>
                  <label>FullNames</label><br>
                  <input class="form-control" type="text" name="names" placeholder="FullNames" required><br>
                  <label>UserName</label><br>
                  <input class="form-control" type="text" name="user" placeholder="UserName" required><br>
                  <label>Password</label><br>
                  <input class="form-control" type="password" name="pass" placeholder="Password" required><br>
                  <label>PhoneNumber</label><br>
                  <input class="form-control" type="number" name="phone" placeholder="Phone" required><br>
                  
                  <center><button class="btn btn-primary" type="submit" name="submit">SignUp</button></center>
                  <p>Already Have An Account? &nbsp;<a class="fs-5" href="index.php">Login</a></p>
            </form>
      
</body>
</html>