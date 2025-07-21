<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&display=swap" rel="stylesheet">
    <title>Table</title>
</head>
<body>
    <header> 
        <style> 
    body {
        font-family: "Bitcount Prop Single", system-ui;
        font-size: 2.5rem;
    }
    table {border : solid 3px black;
            border-radius: 10px;}
    td {border : solid, 3px, black;}
    tr { background-color: black;
        color: orange;
        border : solid, 3px, black;}
    .head_table{ color: black;background-color: gray;}
        </style>
    <table>
        <?php 
    // Différente variable
    $str="Hello";
    $bol=true;
    $int=5;
    $reel=2.3;
    ?>
    <tr class=head_table>
        <th>
            Type
        </th>


        <th>
            Name
        </th>

         <th>
            Value
        </th>
     </tr>

     <tr>
        <td>
            Integer
        </td>
        <td>
            $int
        </td>
        <td>
            <?php echo $int ?>
        </td>
     </tr>
     <tr>
        <td>
            String
        </td>
        <td>
            $str
        </td>
        <td>
            <?php echo $str ?>
        </td>
     </tr>

     <tr>
        <td>
            Boléen
        </td>
        <td>
            $bol
        </td>
        <td>
            <?php echo $bol ?>
        </td>
     </tr>
     <tr>
        <td>
            Reel
        </td>
        <td>
            $reel
        </td>
        <td>
            <?php echo $reel ?>
        </td>
     </tr>



    </table>

    </header>
</body>
</html>





