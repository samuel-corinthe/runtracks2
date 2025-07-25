<!DOCTYPE html>
<html>
<head>
    <title>Maison</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>

<form method="POST">
    <label>Largeur : </label>
    <input type="text" name="largeur" required>
    <br>
    <label>Hauteur : </label>
    <input type="text" name="hauteur" required>
    <br><br>
    <input type="submit" value="Afficher la maison">
</form>

<?php
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = intval($_POST['largeur']);
    $hauteur = intval($_POST['hauteur']);

    if ($largeur < 3 || $hauteur < 1) {
        echo "<p>Valeurs trop petites pour dessiner une maison.</p>";
        exit;
    }

    echo "<pre>";

    $roof_height = intval(($largeur + 0) / 2);
    for ($i = 0; $i < $roof_height; $i++) {
        $espaces = str_repeat(' ', $roof_height - $i - 1);
        $milieu = $largeur - 2 * ($roof_height - $i - 1) - 2;
        if ($milieu < 0) $milieu = 0;
        echo $espaces . '/' . str_repeat($i == $roof_height - 1 ? '-' : ' ', $milieu + 2) . '\\' . "\n";
    }

    for ($j = 0; $j < $hauteur; $j++) {
        echo '|' . str_repeat(' ', $largeur - 1) . "|\n";
    }


    echo "</pre>";
}
?>

</body>
</html>
