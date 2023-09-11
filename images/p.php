<?php

 @include '../config.php';

 if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $user_type = $_POST['user_type'];

  $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){
    $error[] = 'user already exists!';
  }else{
    if($pass != $cpass){
      $error[] = 'Password not matched!';
    }else{
        $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
        mysqli_query($conn,$insert);
        header('location:login.php');
    }
  }

 };



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Registration</title>
  <style>
    body {
      background-image: url('back.jpg');
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 300px;
      margin: 0 auto;
      padding: 10px;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 90%;
      padding: 8px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      width: 90%;
      padding: 10px;
      font-size: 18px;
      color: #fff;
      background-color: #333;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }

    .form-footer {
      text-align: center;
      margin-top: 20px;
    }

    .form-footer p {
      color: #777;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Restaurant Registration</h1>
    <form method = 'POST'>
      <?php
        if(isset($error)){
          foreach($error as $error){
            echo '<span>'.$error.'</span>';
          };
        };
      ?>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="cpassword">Confirm Password:</label>
        <input type="password" id="cpassword" name="cpassword" required>
      </div>
      <select name="user_type" id="" class="form-group">
        <option value="user">user</option>
        <option value="admin">admin</option>
      </select>
      <input type="submit" name='submit' value="Register">
    </form>
    <div class="form-footer">
      <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
  </div>
</body>
</html>
