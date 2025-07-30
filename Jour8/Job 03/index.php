<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    } elseif (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
        $_SESSION['prenoms'][] = htmlspecialchars(trim($_POST['prenom']));
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Session</title>
</head>
<body>
    <h1>Ajouter un prénom</h1>
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <button type="submit" name="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <h2>Liste des prénoms :</h2>
    <ul>
        <?php
        if (!empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>" . htmlspecialchars($prenom) . "</li>";
            }
        } else {
            echo "<li>Aucun prénom ajouté.</li>";
        }
        ?>
    </ul>
</body>
</html>
