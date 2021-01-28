<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Skor Terbesar</h1>

    <?php 
        function skor_terbesar($arr){
            $hasil = array();
            for ($i = 0; $i < count($arr); $i++){
                $key_arr = $arr[$i]['kelas'];
                if (!array_key_exists($key_arr, $hasil)){
                    $hasil[$key_arr] = $arr[$i];
                }
                else{
                    if ($hasil[$key_arr]['nilai'] < $arr[$i]['nilai']){
                        $hasil[$key_arr] = $arr[$i];
                    }
                }
            }
            return $hasil;
        }

        $skor = [
            [
            "nama" => "Bobby",
            "kelas" => "Laravel",
            "nilai" => 78
            ],
            [
            "nama" => "Regi",
            "kelas" => "React Native",
            "nilai" => 86
            ],
            [
            "nama" => "Aghnat",
            "kelas" => "Laravel",
            "nilai" => 90
            ],
            [
            "nama" => "Indra",
            "kelas" => "React JS",
            "nilai" => 85
            ],
            [
            "nama" => "Yoga",
            "kelas" => "React Native",
            "nilai" => 77
            ],
            ];
            
            print_r(skor_terbesar($skor));
    ?>
</body>
</html>