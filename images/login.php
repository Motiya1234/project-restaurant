<?php
  @include '../config.php';

  session_start();

  if(isset($_POST['submit'])){
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $pass = md5($_POST['password']);

      $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

      $result = mysqli_query($conn, $select);

      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){
          $_SESSION['admin_name'] = $row['name'];
          header('location:../admin_page.php');
        }elseif($row['user_type'] == 'user'){
          $_SESSION['user_name'] = $row['name'];
          header('location:../user_page.php');
        }
        }else{
        $error[] = 'Incorrect email or password!';
      }
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Website - Login</title>
  <style>
    body {
      background-image: url('back.jpg');
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 300px;
      margin: 100px auto;
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
      width: 95%;
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
    <h1>Welcome to our Restaurant</h1>
    <form action="#" method="POST">
      <?php
        if(isset($error)){
          foreach($error as $error){
            echo '<span>'.$error.'</span>';
          };
        };
      ?>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Login">
      </div>
      <div class="form-footer">
      <p>Don't have an account? <a href="p.php">Register now!</a></p>
    </div>
    </form>
  </div>
</body>
</html>
