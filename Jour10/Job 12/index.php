<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    $host = 'localhost';
    $dbname = 'jour 09';
    $username = 'root';
    $password = '';

    try {
        $mysqli = new mysqli($host, $username, $password, $dbname);
        $mysqli->set_charset("utf8");
        
        if ($mysqli->connect_error) {
            throw new Exception("Connection failed: " . $mysqli->connect_error);
        }

        $sql = "SELECT nom, prenom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'";
        $req = $mysqli->query($sql);

        if (!$req) {
            throw new Exception("Query failed: " . $mysqli->error);
        }

        echo "<table>";
        echo "<tr>";
        
        
        $fields = $req->fetch_fields();
        foreach ($fields as $field) {
            echo "<th>" . htmlspecialchars($field->name) . "</th>";
        }
        echo "</tr>";

        
        while ($row = $req->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        
        $req->free();
        $mysqli->close();
        
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>
</body>
</html>