<?php
require_once "App/config/config.php";
require_once "App/classe/User.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Remove extra square brackets
    $password = $_POST['password']; // Remove extra square brackets
    $user = new User();
    $result = $user->login($username, $password);

    if (!$result) { // Fix typo in if condition
        session_start(); // Start the session if not started already
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "Netacna sifra";
        header("Location: login.php");
        exit();
    }
    header("Location: index.php");
}
?>

<!-- Your HTML for the login form goes here -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="izgled.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-r4JSEV8OLcW2TToJ8dKFPCgAqOIFKgoLNFa6eC/7E9RHIf1Q5U6h" crossorigin="anonymous">

</head>

<body class="login-body">
<div class="container20">
    <div class="form-wrap">

       <form method="post" id="login-form" action="">

            <h2>Prijavi se</h2>
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Korisničko ime" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Lozinka" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Prijavi se</button>
            </div>
            <p class="signup-link">Nemate račun?   
        

        </form>        
    </div>
</div>

<script>
    document.getElementById('signup-link').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('login-form').style.display = 'none';
    });

    document.getElementById('signin-link').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('signup-form').style.display = 'none';
    });
</script>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.8/dist/umd/popper.min.js" integrity="sha384-PLACEHOLDER" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJcFCQD8DST" crossorigin="anonymous"></script>
    
</body>
</html>


