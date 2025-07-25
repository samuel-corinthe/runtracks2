<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur d'arguments POST</title>
</head>
<body>
    <form method="POST" action="">
        <label for="champ1">Champ 1 :</label>
        <input type="text" name="champ1" id="champ1">
        <label for="champ2">Champ 2 :</label>
        <input type="text" name="champ2" id="champ2">
        <label for="champ3">Champ 3 :</label>
        <input type="text" name="champ3" id="champ3">
        <input type="submit" value="Envoyer">
    </form>

    <?php
$nombreNonVides = 0;
foreach ($_POST as $valeur) {
    if (!empty($valeur)) {
        $nombreNonVides++;
    }
}
echo "Nombre de champs non vides : $nombreNonVides";

    ?>
</body>
</html>