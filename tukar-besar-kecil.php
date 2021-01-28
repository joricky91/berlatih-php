<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function tukar_besar_kecil($string){
            $tukar = '';
            $code = '';
            $word = '';

            for($i = 0; $i < strlen($string); $i++){
                $tukar = ord($string{$i});
                if ($tukar >= 65 && $tukar <= 90){
                    $code = $tukar + 32;
                    $word = chr($code);
                    echo $word;
                }
                else if ($tukar == 32 || $tukar == 45 || $tukar == 33){
                    $code = $tukar;
                    $word = chr($code);
                    echo $word;
                }
                else if ($tukar >= 48 && $tukar <= 57){
                    $code = $tukar;
                    $word = chr($code);
                    echo $word;
                }
                else if ($tukar >= 97 && $tukar <= 122){
                    $code = $tukar - 32;
                    $word = chr($code);
                    echo $word;
                }
            }
        }
        tukar_besar_kecil('Hello World');
        echo "<br>";
        tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
        echo "<br>";
        tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
        echo "<br>";
        tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
        echo "<br>";
        tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
        
    ?>
</body>
</html>