<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method= "get" action="">
        <label>Texte
            <input type="texte" name="texte" value="bonjour">
        </label>
        <label>
            <input type="submit" name="send" value="envoyer">
        </label>
    </form>

    <?php
         echo "On vous a dis &nbsp" . $_GET['texte'];?>
</body>

<style>

    label {
        color: brown;
        font-size: 35px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    form {
        background: burlywood;
        display: flex;
        justify-content: center;
        align-items: center;
        border: solid brown;
        width: 500px;
        height: 250px;
        border-radius: 10px;
    }
    input {
        border : solid 2px brown;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
</style>
</html>