<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ubah Huruf</h1>

    <?php 
        function ubah_huruf($string){
            $replace = '';
            $code = '';
            $word = '';
            for($i = 0; $i < strlen($string); $i++){
                $replace = ord($string{$i});
                $code = $replace + 1;
                $word = chr($code);
                echo $word;
            }
        }
        ubah_huruf("wow");
        echo "<br>";
        ubah_huruf('developer'); // efwfmpqfs
        echo "<br>";
        ubah_huruf('laravel'); // mbsbwfm
        echo "<br>";
        ubah_huruf('keren'); // lfsfo
        echo "<br>";
        ubah_huruf('semangat'); // tfnbohbu
        
    ?>
</body>
</html>