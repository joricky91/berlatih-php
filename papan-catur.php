<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function papan_catur($angka){
            $pager = '';
            for ($i = 0; $i < $angka; $i++){
                if ($i % 2 == 0){
                    for ($j = 0; $j < $angka; $j++){
                        $pager .= '# ';
                    }
                }
                else{
                    for ($k = 0; $k < $angka - 1; $k++){
                        $pager .= ' #';
                    }
                }
                $pager .= '<br>';
            }
            return $pager;
        }
        echo papan_catur(4);
        echo "<br>";
        echo papan_catur(8);
        echo "<br>";
        echo papan_catur(5);
    ?>
</body>
</html>