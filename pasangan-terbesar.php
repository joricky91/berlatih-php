<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pasangan Terbesar</h1>

    <?php 
        function pasangan_terbesar($angka){
            $max = 0;
            $int = intval($angka);
            for ($i = 0; $i < strlen($angka); $i++){
                $besar = substr($angka, $i, 2);
                if($besar > $max){
                    $max = $besar;
                }
            }
            return $max;
        }
        echo pasangan_terbesar(641573); // 73
        echo '<br>';
        echo pasangan_terbesar(12783456); // 83
        echo '<br>';
        echo pasangan_terbesar(910233); // 91
        echo '<br>';
        echo pasangan_terbesar(71856421); // 85
        echo '<br>';
        echo pasangan_terbesar(79918293); // 99
    ?>
</body>
</html>