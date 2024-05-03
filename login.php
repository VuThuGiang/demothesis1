<?php
require('connection.php');
session_start();
#for login
if (isset($_POST['login'])) {
    $query = "SELECT * FROM `user_form` WHERE `email` = '$_POST[email_username]' OR `username = '$_POST[email_username]' ";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $result_fetch['password'])) {
                #if password match
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['username'];
                header("location: index.php");
            } 
            else 
            {
                #if incorrect password
                echo "
                <script>
                    alert('Incorrect password');

                </script>
                ";
            }
        } 
        else 
        {    
            echo "
            <script>
                alert('Email or Username Not Registered');

            </script>
            ";
        }
    } 
    else {
        echo "
        <script>
            alert('Cannot Run Query');
            </script>
            ";
        }
    #window.location.href='index.php'
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN NOW</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div id="wrapper">
        <form action="#" id="form-login" method="POST">
            <h1 class="form-heading"> User Login</h1>
            <div class="form-group">
                <i class="bi bi-person"></i>
                <input type="text" class="form-input" placeholder="Email or Username" name="email_username">
            </div>
            <div class="form-group">
                <i class="bi bi-pen"></i>
                <input type="password" class="form-input" placeholder="Password" name="password">
                <div id="eye">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <button type="submit" class="form-submit" name="login"> LOGIN</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="./js/login.js"></script>

</html>