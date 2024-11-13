<?php
require_once("models/Provider.php");
$p = new Provider();
$db = $p->getconnection();

session_start();

if (isset($_POST['acces']) && $_POST['acces'] == '1') {
    $email = $_POST['email'];
    $motpasse = $_POST['motpasse'];
    
    // Vérification des informations de connexion
    $v = $db->prepare("SELECT email, motpasse, nom FROM inscription WHERE email = ? AND motpasse = ?");
    $v->execute([$email, $motpasse]);
    $tabv = $v->fetch();

    if ($tabv && $tabv['email'] == $email && $tabv['motpasse'] == $motpasse) {
        // Stocker l'email et le nom dans la session
        $_SESSION['cmp'] = $email;
        $_SESSION['nom'] = $tabv['nom'];
        header("location:index.php");
        exit();
    } else {
        header("location:authent.php?msg=1");
        exit();
    }
}

if (isset($_POST['register']) && $_POST['register'] == '1') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $motpasse = $_POST['motpasse'];

    // Vérifier si l'email existe déjà dans la base de données
    $check = $db->prepare("SELECT email FROM inscription WHERE email = ?");
    $check->execute([$email]);
    if ($check->fetch()) {
        // Redirige avec un message d'erreur pour email déjà utilisé
        header("location:authent.php?msg=2"); // msg=2 indique que l'email est déjà utilisé
        exit();
    }

    // Insérer un nouvel utilisateur si l'email n'existe pas encore
    $requete = 'INSERT INTO inscription (nom, email, motpasse) VALUES (:nm, :mail, :mp)';
    $stat = $db->prepare($requete);
    $stat->execute([
        'nm' => $nom,
        'mail' => $email,
        'mp' => $motpasse
    ]);

    header("Location: authent.php");
    exit();
}
?>
