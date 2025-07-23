<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barrio&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$countv = 0;
$countc = 0;
$vowels = ['a', 'e', 'i', 'o', 'O', 'u', 'y'];

foreach (mb_str_split($str) as $char) {
    if (ctype_alpha($char)) {
        if (in_array($char, $vowels)) {
            $countv++;
        } else {
            $countc++;
        }
    }
}
?>

<table>
    <tr>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </tr>
    <tr>
        <td><?php echo $countv; ?></td>
        <td><?php echo $countc; ?></td>
    </tr>
</table>
<style>

    body 
    {
        font-family: "Barrio", system-ui;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-size: 50px;;
    }

    th {
            border : 3px solid brown;
            border-radius: 10px;
            padding: 2px;
}
    

     td{
        text-align: center;
        border : 3px solid brown;
         border-radius: 10px;
          padding: 2px;
}

    tr {
        
        background : wheat;
         border-radius: 10px;
          padding: 2px;
    }
</style>
</body>
</html>
