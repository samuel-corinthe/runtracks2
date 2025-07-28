<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method="get" action="">
        <input type="text" name="arg1" >
        <input type="text" name="val1" >
        <input type="text" name="arg2" >
        <input type="text" name="val2" >
        <input type="submit" name="send" value="Envoyer">
    </form>

    <?php
    
    $arguments = [];
    for ($i = 1; isset($_GET["arg$i"]) && isset($_GET["val$i"]); $i++) {
        $arg = $_GET["arg$i"];
        $val = $_GET["val$i"];
        $arguments[$arg] = $val;
    }

    if (!empty($arguments)) {
        echo '<table border="1">';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        foreach ($arguments as $arg => $val) {
            echo '<tr>';
            echo '<td>' . $arg . '</td>';
            echo '<td>' . $val . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>
</html>