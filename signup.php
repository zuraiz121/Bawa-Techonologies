<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>SIGNUP FORM </title>
</head>
<body>
<div class="container">
    <h1 class="alert alert-success">Signup For For registration:</h1>
    <form method="post">
     <input type="text" placeholder="Enter Your Name:" name="username" class="form-control">
     <input type="email" placeholder="Enter Your Email:" name="email" class="form-control">
     <input type="text" placeholder="Enter Your Phone Number:" name="phone" class="form-control">
     <input type="text" placeholder="Enter Your Addresss:" name="address" class="form-control">
     <input type="password" placeholder="Enter Your password:" name="password" class="form-control">
     <input type="date" placeholder="Enter Your Dob:" name="dob" class="form-control">
     <label for="gender">Select Gender:</label>
     <input type="radio" name="gender" value="Female">
     <label for="">Female:</label>
     <input type="radio" name="gender" value="Male">
     <label for="">Male:</label>
     <br>
     <input type="submit" value="Signup" name="btn_signup" class="btn btn-success">
    </form>
</div>
</body>
<?php 
if(isset($_POST['btn_signup']))
{
  $username =  $_POST['username'];
  $email =  $_POST['email'];
  $password =  $_POST['password'];
  $phone =  $_POST['phone'];
  $address =  $_POST['address'];
  $dob =  $_POST['dob'];
  $gender =  $_POST['gender'];

  $insert = "INSERT INTO signup(username, email, phone, address, gender, password, dob) VALUES ('$username','$email','$phone','$address','$gender','$password','$dob')";

  $result = mysqli_query($conn,$insert);
  if($result)
  { 
    echo "<script> alert('value inserted successfully') </script>";
    header("location:login.php");
  }
}


?>
</html>