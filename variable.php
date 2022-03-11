<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Variable.php</title>
        <style>
            .body{
                background-color: hsl(160, 100%, 90%);
                display: flex;
                flex-direction: column;
                height: 100vh;
                align-items: center;
                justify-content: center;
                font-size: 30px;
                font-weight: bold;
            }
        </style>
    </head>
    <body class="body">
        <?php
        $a = 8;
        $b = 2;
        $c = 3;
        $penjumlahan = $a + $b + $c;
        $pengurangan = $a - $b - $c;
        $pengurungan = ($a + $b) * $c;
        $perkalian = $a * $c;
        $pembagian = ($a * $c) / $b;
        ?>
        <p><?="Hasil Penjumlahan = ". $penjumlahan . "<br>Hasil Pengurangan = ". $pengurangan . 
        "<br>Hasil Pengurungan = ". $pengurungan . "<br>Hasil Perkalian = ". $perkalian . 
        "<br>Hasil Pembagian = ". $pembagian; ?></p>
    </body>
</html>