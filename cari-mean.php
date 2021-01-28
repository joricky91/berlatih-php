<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cari Mean</h1>

    <?php 
        $arr = array(); 
        function cari_mean($arr){
            $length = count($arr);
            $sum = array_sum($arr);
            $hasil = $sum / $length;
            echo intval ($hasil);
        }

        cari_mean([1, 2, 3, 4, 5]);
        echo "<br>";
        cari_mean([3, 5, 7, 5, 3]);
        echo "<br>";
        cari_mean([6, 5, 4, 7, 3]); 
        echo "<br>";
        cari_mean([1, 3, 3]); 
        echo "<br>";
        cari_mean([7, 7, 7, 7, 7]);

    ?>
</body>
</html>