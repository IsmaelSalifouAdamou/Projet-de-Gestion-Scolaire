<!--
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Gestion Scolaire</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
                /* Couleurs */
        :root {
            --yellow: #fad434;
            --blue: #38b6ff;
            --red: #d61e25;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, var(--yellow), var(--blue), var(--red));
        }

        .background {
            width: 100%;
            height: 100%;
            position: absolute;
            background: linear-gradient(135deg, var(--yellow), var(--blue), var(--red));
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-wrapper {
            background: rgba(255, 255, 255, 0.9);
            width: 400px;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .logo img {
            width: 100px;
            height: auto;
            margin-bottom: 1.5rem;
        }

        h2 {
            color: var(--red);
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }

        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 1.2rem;
            background-color: #fff;
            border: 2px solid var(--blue);
            border-radius: 10px;
            padding: 0.6rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .input-group i {
            color: var(--yellow);
            font-size: 1.3rem;
            margin-right: 0.5rem;
        }

        .input-group input {
            border: none;
            outline: none;
            background: none;
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            color: #333;
        }

        button {
            width: 100%;
            padding: 0.8rem;
            background: var(--red);
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 1rem;
            transition: background 0.3s;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        }

        button:hover {
            background: #a1141b;
        }

        .forgot-password {
            display: block;
            margin-top: 1rem;
            color: var(--blue);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

    </style>



</head>
<body>
    <div class="background">
        <div class="login-wrapper">
            <div class="logo">
                <img src="Nouvelle.png" alt="Logo de l'école">
            </div>
            <h2>Connexion</h2>
            <form action="log.php" method="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="name" placeholder="Nom du compte" name="compte" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" name="motpasse" required>
                </div>
                <button type="submit" name="acces" value="1">Se connecter</button>
                <a href="#" class="forgot-password"> Creer un compte </a>
                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
            </form>
        </div>
    </div>
</body>
</html>
-->  



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Gestion Scolaire</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Couleurs */
        :root {
            --yellow: #fad434;
            --blue: #38b6ff;
            --red: #d61e25;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, var(--yellow), var(--blue), var(--red));
        }

        .background {
            width: 100%;
            height: 100%;
            position: absolute;
            background: linear-gradient(135deg, var(--yellow), var(--blue), var(--red));
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-wrapper {
            background: rgba(255, 255, 255, 0.9);
            width: 400px;
            max-width: 90%;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .logo img {
            width: 100px;
            height: auto;
            margin-bottom: 1.5rem;
        }

        h2 {
            color: var(--red);
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }

        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 1.2rem;
            background-color: #fff;
            border: 2px solid var(--blue);
            border-radius: 10px;
            padding: 0.6rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .input-group:hover {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
        }

        .input-group i {
            color: var(--yellow);
            font-size: 1.3rem;
            margin-right: 0.5rem;
        }

        .input-group input {
            border: none;
            outline: none;
            background: none;
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            color: #333;
        }

        button {
            width: 100%;
            padding: 0.8rem;
            background: var(--red);
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 1rem;
            transition: background 0.3s;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        }

        button:hover {
            background: #a1141b;
        }

        .forgot-password {
            display: block;
            margin-top: 1rem;
            color: var(--blue);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .signup-link {
            display: block;
            margin-top: 1rem;
            font-size: 0.9rem;
            color: var(--blue);
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="login-wrapper">
            <div class="logo">
                <img src="Nouvelle.png" alt="Logo de l'ecole">
            </div>
            <h2>Connexion</h2>
            <form action="log.php" method="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Entrez votre mail" name="email" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" name="motpasse" required>
                </div>
                <button type="submit" name="acces" value="1">Se connecter</button>
                <a href="inscription.php" class="signup-link">Créer un compte</a>
            </form>
        </div>
    </div>
</body>
</html>
