<?php

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}


if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']); 
    setcookie('prenom', $prenom, time() + 3600); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom'])): ?>
       
        <h1>Bonjour <?= htmlspecialchars($_COOKIE['prenom']); ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
      
        <form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
