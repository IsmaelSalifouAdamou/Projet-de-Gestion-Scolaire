<?php
session_start();
if (empty($_SESSION['cmp'])) {
    header("location:authent.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Gestion Scolaire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        :root {
            --yellow: #fad434;
            --purple: #6a67ce;
            --blue: #38b6ff;
            --red: #d61e25;
            --light-gray: #f3f4f6;
            --dark-gray: #333;
            --white: #ffffff;
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
            flex-direction: column;
            background-color: var(--light-gray);
        }

        .dashboard-container {
            display: flex;
            flex: 1;
            width: 100%;
        }

        /* Barre latérale */
        .sidebar {
            width: 250px;
            background-color: var(--dark-gray);
            color: var(--white);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 80px;
            margin-bottom: 10px;
        }

        .logo h2 {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--yellow);
        }

        /* Contenu principal */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* En-tête */
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: var(--white);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .welcome-msg {
            font-size: 1.2rem;
            color: var(--dark-gray);
            font-weight: bold;
        }

        .welcome-msg span {
            color: var(--blue);
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .logout-button a {
            text-decoration: none;
            color: var(--red);
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s;
            background-color: var(--white);
            border: 2px solid var(--red);
        }

        .logout-button a:hover {
            color: var(--white);
            background-color: var(--red);
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }

        /* Section des blocs fonctionnels */
        .blocks {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 30px;
        }

        .block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            border-radius: 10px;
            color: var(--white);
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .block i {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .block h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .block p {
            font-size: 1rem;
        }

        .block:hover {
            transform: translateY(-10px);
        }

        /* Pied de page */
        .footer {
            background-color: var(--dark-gray);
            color: var(--white);
            padding: 10px;
            text-align: center;
            font-size: 0.9rem;
        }

        /* Responsivité */
        @media (max-width: 768px) {
            .blocks {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Barre latérale -->
        <aside class="sidebar">
            <div class="logo">
                <img src="Nouvelle.png" alt="Logo de l'école">
                <h2>Gestion Scolaire</h2>
            </div>
        </aside>

        <!-- Contenu principal -->
        <main class="main-content">
            <!-- En-tête avec message de bienvenue et bouton de déconnexion -->
            <header class="topbar">
                <div class="welcome-msg">
                    Bienvenue, <span><?php echo isset($_SESSION['nom']) ? htmlspecialchars($_SESSION['nom']) : 'Utilisateur'; ?></span> !
                </div>
                <div class="profile">
                    <!-- <img src="user-profile.png" alt="Photo de profil de l'utilisateur"> -->
                    <div class="logout-button">
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                    </div>
                </div>
            </header>

            <!-- Section des 4 blocs fonctionnels -->
            <form action="controllers/page.php" method="POST">
                <section class="blocks">
                    <button class="block" type="submit" name="etudiant" style="background-color: var(--yellow);">
                        <i class="fas fa-user-graduate"></i>
                        <h3>Étudiants</h3>
                        <p>Gérer les étudiants inscrits.</p>
                    </button>

                    <button class="block" type="submit" name="prof" style="background-color: var(--blue);">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3>Enseignants</h3>
                        <p>Gérer les enseignants de l'école.</p>
                    </button>

                    <button class="block" type="submit" name="salle" style="background-color: var(--red);">
                        <i class="fas fa-door-open"></i>
                        <h3>Salles</h3>
                        <p>Gérer les salles de classe disponibles.</p>
                    </button>

                    <button class="block" type="submit" name="cour" style="background-color: var(--purple);">
                        <i class="fas fa-book-open"></i>
                        <h3>Cours</h3>
                        <p>Organiser et gérer les cours proposés.</p>
                    </button>
                </section>
            </form>

            <!-- Pied de page -->
            <footer class="footer">
                © 2024 Gestion Scolaire - Tous droits réservés
            </footer>
        </main>
    </div>
</body>
</html>
