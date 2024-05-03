<nav class="top-nav" id="home">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p>
                    <i class="bi bi-envelope"></i>
                    <span>infor@gmail.com</span>
                </p>
                <p>
                    <i class="bi bi-telephone"></i>
                    <span>+84 123456789</span>
                </p>
                <p>
                    <i class="bi bi-geo-alt"></i>
                    <span>222 Ha Dong, Ha Noi</span>
                </p>
            </div>
            <div class="col-auto">
                <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><span>TripBoss</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./destination.php">Destination</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contact</a>
                </li>
            </ul>

            <?php
                session_start(); // Bắt đầu phiên
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
                {
                    echo "
                        <div>
                        <a href='logout.php' class='btn btn-brand ms-lg-2 $_SESSION[username]'> $_SESSION[username] - LOGOUT</a>
                        </div>
                        ";
                } 
                else 
                {
                    echo "
                   
                    <a type='button' href='login.php' class='btn btn-brand ms-lg-2' name='login'>LOGIN</a>
                    <a type='button' href='register.php' class='btn btn-brand ms-lg-2' mame='register'>REGISTER</a>
                    
                 ";
                }
                ?>


          
            <!-- <a href="./login.php" class="btn btn-brand ms-lg-2">Login</a>
            <a href="./register.php" class="btn btn-brand ms-lg-2">Register</a> -->
        </div>
      

    </div>
</nav>