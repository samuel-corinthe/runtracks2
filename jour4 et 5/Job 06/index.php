<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Pair ou Impair</title>
</head>
<body>
    <form method="get" action="">
        <input type="text" name="nombre" placeholder="Entrez un nombre">
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if (isset($nombre[0])) {
            $isValid = true;
            $i = 0;
            if ($nombre[0] == '-') {
            $i = 1;
            }
            for (; $i < strlen($nombre); $i++) {
            if ($nombre[$i] < '0' || $nombre[$i] > '9') {
                $isValid = false;
                break;
            }
            }
            if ($isValid) {
            if ($nombre % 2 == 0) {
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
        } else {
            echo "Veuillez entrer un nombre valide.";
        }
    }
    }
    ?>
</body>
</html>