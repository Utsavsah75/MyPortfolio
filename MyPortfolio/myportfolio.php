<?php include "conn.php"; // Insert data into the database
 if (isset($_POST['login'])) { 
    $name = mysqli_real_escape_string($conn, $_POST['name']); 
    $password = mysqli_real_escape_string($conn, $_POST['pwd']); 
    $rem = isset($_POST['rem']) ? 1 : 0; 
    // Hash the password before storing it in the database 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); 
    $sql = "INSERT INTO myportfolio (name, pwd) VALUES ('$name', '$hashed_password')"; $result = mysqli_query($conn, $sql);
     if ($result) { 
        // Set cookies if "Remember Me" is checked 
        if ($rem) { 
            setcookie('rem_user', $name, time() + 86400 * 30); 
            setcookie('rem_pwd', $password, time() + 86400 * 30); 
        } else { 
            // Clear cookies if "Remember Me" is unchecked 
            
            if (isset($_COOKIE['rem_user'])) { 
                setcookie('rem_user', '', time() - 3600); 
            } if (isset($_COOKIE['rem_pwd'])) { 
                setcookie('rem_pwd', '', time() - 3600); } } 
                // Redirect the user to the relevant page 
                echo '<script>window.location.href = "index.php";</script>'; 
                exit(); 
            } else { 
                    echo "Error: " . mysqli_error($conn); } } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="myportfolio.css">
    <title>PortFolio</title> <!-- SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body> <!-- Your HTML content here -->


    <div class="container-bar navbar navbar-expand-lg navbar-light bg-light">
        <!-- Logo (Full width on all screen sizes) -->
        <div class="logo navbar-brand">MyPortfolio</div>

        <!-- Toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign-up</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Skill</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li> -->

            </ul>
        </div>
    </div>
    <!-- //create a form for login PageMake. -->
    <form id="loginForm" class="userform" method="post">
        <div class="content">
            <input type="text" class="input-box" id="name" name="name"> <!-- Add id and name attributes for name -->
            <label class="placeholder-text">User Name</label>
        </div>
        <div class="content">
            <input class="input-box" type="password" id="pwd" name="pwd" required="required" autocomplete="off" onBlur="forgetpwd()" />
            <label class="placeholder-text">Password</label>
            <span id="pwd-avability-status" style="font-size:12px;"></span>
        </div>
        <div class="content">
            <div class="col-sm-10 offset-sm-3">
                <input type="checkbox" class="form-check-input" id="remember" name="rem" <?php if (isset($_COOKIE['rem_user'])) {
                                                                                                echo "checked";
                                                                                            } ?>>
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
        </div>
        <div class="content">
            <div class="col-sm-10 offset-sm-4">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 text-center">
                New Member? <a href="index.php">Register Here</a>
            </div>
        </div>
    </form>
    <!-- Bootstrap JS (Optional, for toggling navigation menu on small screens) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script for handling form submission -->
<script>
    // Listen for form submission
    $(document).ready(function() {
        $('#loginForm').submit(function(event) {
            event.preventDefault(); // Prevent form submission
            var name = $('#name').val(); // Get name value
            var password = $('#pwd').val(); // Get password value

            // Simulate login success for demonstration purposes
            // Replace this with your actual login validation
            var loginSuccess = true; // Change to false to simulate login failure

            if (loginSuccess) {
                // Display SweetAlert success message
                Swal.fire({
                    title: "Login Successful!",
                    text: "Welcome, " + name + "!",
                    icon: "success",
                    confirmButtonText: "Okay"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "index.php"; // Redirect upon confirmation
                    }
                });
            } else {
                // Display SweetAlert error message
                Swal.fire({
                    title: "Login Failed!",
                    text: "Invalid name orpassword.",
                    icon: "error",
                    confirmButtonText: "Okay"
                });
            }
        });
    });
</script>
</body>

</html>