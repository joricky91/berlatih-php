<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelindrome Angka</title>
</head>
<body>
    <h1>Palindrome Angka</h1>

    <?php 
        function palindrome_angka($angka){
            if ($angka < 9){
                return $angka + 1;
            }
            else{
                while(strval($angka) != strrev(strval($angka))){
                    $angka += 1;
                }
                return $angka;
            }
            
        }

        echo palindrome_angka(8);
        echo "<br>";
        echo palindrome_angka(10); // 11
        echo "<br>";
        echo palindrome_angka(117); // 121
        echo "<br>";
        echo palindrome_angka(175); // 181
        echo "<br>";
        echo palindrome_angka(1000); // 1001
    ?>
</body>
</html>