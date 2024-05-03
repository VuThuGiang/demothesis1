
<?php
require('connection.php');
session_start();
if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM `user_form` WHERE `username`= '$_POST[username]' OR `email`= '$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) # will be executed if username or emial is already taken
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                echo "
                     <script>
                         alert('$result_fetch[username] - Username already taken');
                         window.location.href='index.php';
                    </script>
                    ";
            } else {
                echo "
                <script>
                    alert('$result_fetch[email] - Email already registered');
                    window.location.href='index.php';
                </script>
               ";
            }
        } else {
            $password= password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `user_form`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
            if (mysqli_query($con, $query)) {
                echo "
                <script>
                     alert('Registration Successful');
                     window.location.href='index.php';
                </script>
                ";
            } else {
                echo "
            <script>
                 alert('Cannot Run Query');
                 window.location.href='index.php';
            </script>
            ";
            }
        }
    } else {
        echo "
            <script>
                 alert('Cannot Run Query');
                 window.location.href='index.php';
            </script>
            ";
    }
}
 ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER NOW</title>
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="wrapper">
        <form action="register.php" id="form-register" method="POST">
            <h1 class="form-heading">Create An Account</h1>
            
            <div class="form-group">
                <i class="bi bi-person"></i>
                <input type="text" class="form-input" placeholder="Full Name" name="fullname">
            </div>

            <div class="form-group">
                <i class="bi bi-person"></i>
                <input type="text" class="form-input" placeholder="Username " name="username" >
            </div>
            <div class="form-group">
                <i class="bi bi-envelope"></i>
                <input type="email" class="form-input" placeholder="Your Email" name="email"  >
            </div>
            <div class="form-group">
                <i class="bi bi-bag-dash"></i>
                <input type="password" class="form-input" placeholder="Password" name="password">
            </div>

            <input type="submit" value="Signup" class="form-submit" name="register">

           
    </div>
    </form>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="/js/register.js"></script>
</html>
