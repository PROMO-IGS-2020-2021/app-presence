<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script/script.js"></script>
</head>
<body>
    <div id="menu">
        <div>
        <img src="images/logo-igs2.png" class="logo" alt="Logo igs">
        </div>
    
        <nav>
            <ul>
                <li>
                    <a href="#" class="app-title">IGS Présence</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="formulaire-presence">
        <div class="login-image">
            <img src="images/login.png" alt="Login image">
        </div>
        <div class="formulaire">
            <form action="" method="POST" onsubmit="return validerFormulaire();">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="adresse email"><br>
                    <span id="emailmessage"></span>
                </div>
                <button class="btn-register" type="submit" name="register">MARQUER SA PRESENCE</button>
            </form>
        </div>
    </div>
    <footer>
        <div class="copywright">
            <p class="footer-content">
                2021 - Realisé par Ivoire Geek School
            </p>
        </div>
    </footer>
</body>
</html>