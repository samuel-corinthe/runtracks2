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
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "SELECT COUNT(*) AS total_etudiants FROM etudiants; ";
        $req = $pdo->query($sql);


        echo "<table>";
        echo "<tr>";


        for ($i = 0; $i < $req->columnCount(); $i++) {
            $colonne = $req->getColumnMeta($i);
            echo "<th>" . htmlspecialchars($colonne['name']) . "</th>";
        }
        echo "</tr>";


        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>

</body>

</html>