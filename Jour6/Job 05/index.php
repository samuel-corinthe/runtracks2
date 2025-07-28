<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="CSS/main.css" type="text/css">
    <title>Style</title>
</head>


<body>
    <form action="" method="post">
        <select name="style_1" id="style">
            <option value="style_1" name="style_1"><a href="style1.css">Style 1</a> </option>
            <option value="style_2" name="style_2">Style 2</option>
            <option value="style_3" name="style_3">Style 3</option>
        </select>
        <button type="submit">submit</button>
    </form>
    <style>
    <?php
$css1 = file_get_contents('CSS/style1.css');
$css2 = file_get_contents('CSS/style2.css');
$css3 = file_get_contents('CSS/style3.css');

    if (isset($_POST['style_1'])) {
        $select1 = $_POST['style_1'];
        switch ($select1) {
            case 'style_1':
                echo $css1;

                break;
            case 'style_2':
                echo $css2;

                break;
            case 'style_3':
                echo $css3;
                break;
        }
    }

    ?>
    </style>

</body>

</html>