<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tentukan Deret Aritmatika</h1>

    <?php 
        $arr = array();
        function tentukan_deret_aritmatika($arr){
            $beda = $arr[1] - $arr[0];
            for($i = 0; $i < count($arr) - 1; $i++){
                if(($arr[$i + 1] - $arr[$i]) != $beda){
                    return 'false';
                }
            }
            return 'true';
        }

        echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
        echo '<br>';
        echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
        echo '<br>';
        echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
        echo '<br>';
        echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
        echo '<br>';
        echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
    ?>
</body>
</html>