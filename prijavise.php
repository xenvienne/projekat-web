<?php
require_once "App/config/config.php";
require_once "App/classe/User.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
   

    $user = new User();
    $created = $user->create($firstname, $lastname, $username, $email, $password);
    
   if($created){
    $_SESSION['message']['type'] = "danger";
    $_SESSION['message']['text'] = "Uspjesno registrovan ";
    header("Location: index.php");
    exit();
   }else{
    $_SESSION['message']['type'] = "danger";
    $_SESSION['message']['text'] = "Greska ";
    header("Location: prijavise.php");
   }
}

// Clear the error message from the session
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="izgled.css">
</head>

<body class="login-body">
<div class="container20">
    <div class="form-wrap">
     <form method="post" id="login-form" action="">
          <h2>Registruj se</h2>
            <div class="input-group">
                <input type="text" id="firstname" name="firstname" placeholder="Ime" required>
            </div>
            <div class="input-group">
                <input type="text" id="lastname" name="lastname" placeholder="Prezime" required>
            </div>
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Korisničko ime" required>
            </div>
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Lozinka" required>
            </div>
            <div class="input-group">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Potvrdi lozinku" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Registracija</button>
            </div>
            <p class="signin-link">Imate račun? <a href="login.php" id="signin-link">Prijavite se</a></p>
                                              

    </div>
</div>




<!--  <form method="post" id="login-form" action="">
            <h2>Prijavi se</h2>
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Korisničko ime" required>4
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Lozinka" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Prijavi se</button>
            </div>
            <p class="signup-link">Nemate račun? <a href="#" id="signup-link">Registruj se</a></p>
        </form>

        <!-- Uncomment the registration form 
        <form method="post" id="signup-form" style="display: none;" action="">
            <h2>Registruj se</h2>
            <div class="input-group">
                <input type="text" id="firstname" name="firstname" placeholder="Ime" required>
            </div>
            <div class="input-group">
                <input type="text" id="lastname" name="lastname" placeholder="Prezime" required>
            </div>
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Korisničko ime" required>
            </div>
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Lozinka" required>
            </div>
            <div class="input-group">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Potvrdi lozinku" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Registracija</button>
            </div>
            <p class="signin-link">Imate račun? <a href="#" id="signin-link">Prijavite se</a></p>

-->












<script>
    document.getElementById('signup-link').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('signup-form').style.display = 'block';
    });

    document.getElementById('signin-link').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('signup-form').style.display = 'none';
    });
</script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.8/dist/umd/popper.min.js" integrity="sha384-PLACEHOLDER" crossorigin="anonymous"></script>


</body>
</html>


