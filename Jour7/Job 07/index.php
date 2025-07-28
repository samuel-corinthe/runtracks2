

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Style</title>
</head>


<body>
    <form action="" method="post">
        <input type="text" name=str>
        <select name="fonction" >
            <option  name="gras">gras</option>
            <option  name="cesar">cesar</option>
            <option  name="plateforme">plateforme</option>
        </select>0
        <button type="submit">submit</button>
    </form>
<?php 

function gras($str){
     return "<b>". mb_strtoupper($str[0])."</b>". substr($str,1);
}

function laplateforme($str){
    return $str . "_";
}
function cesar($str, $decalage = 2) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? 'A' : 'a';
            $result .= chr((ord($char) - ord($base) + $decalage) % 26 + ord($base));
        } else {
            $result .= $char;
        }
    }
    return $result;
}


function MyList(){
    $str=$_POST['str'];
    if (isset($_POST['fonction'])) {
        $list = $_POST['fonction'];
        switch ($list) {
            case 'gras':
                
                echo gras($str);

                break;
            case 'cesar':
                echo cesar($str, $decalage = 2);
                break;
            case 'plateforme':
                echo laplateforme($str);
                break;
        }
    }

    }

    MyList();

?>
</body>

</html>



