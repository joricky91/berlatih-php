<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tentukan Deret Geometri</h1>

    <?php 
        $arr = array();
        function tentukan_deret_geometri($arr){
            $beda = $arr[1] / $arr[0];
            for($i = 1; $i < count($arr); $i++){
                if(($arr[$i] / ($arr[$i - 1])) != $beda){
                    return 'false';
                }
            }
            return 'true';
        }

        echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
        echo '<br>';
        echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
        echo '<br>';
        echo tentukan_deret_geometri([2, 4, 6, 8]); // false
        echo '<br>';
        echo tentukan_deret_geometri([2, 6, 18, 54]); // true
        echo '<br>';
        echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
    ?>
</body>
</html>