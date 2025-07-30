
<?php

$cookieName = "visit_count";


$cookieLifetime = time() + (84600);


if (isset($_COOKIE[$cookieName])) {
    
    $visitCount = $_COOKIE[$cookieName] + 1;
} else {
   
    $visitCount = 1;
}


setcookie($cookieName, $visitCount, $cookieLifetime);



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <strong><?php echo "C'est votre visite numéro : " . $visitCount; ?></strong></p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>