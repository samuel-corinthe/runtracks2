

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
        </select>
        <button type="submit">submit</button>
    </form>
<?php 
function MyList(){
    $str=$_POST['str'];
    if (isset($_POST['fonction'])) {
        $list = $_POST['fonction'];
        switch ($list) {
            case 'gras':
                
                echo "<b>". mb_strtoupper($str[0])."</b>". substr($str,1);

                break;
            case 'cesar':
                for ($i=0;$i<strlen($str);$i++){
                $position = $str[$i]; 
                $newChar = $str[$i=+2];
                $result = substr($str, 0, $position) . $newChar . substr($str, $position + 1);
                echo $result;
                    }
                break;
            case 'plateforme':
                echo $str . "_";
                break;
        }
    }

    }

    MyList();

?>
</body>

</html>



