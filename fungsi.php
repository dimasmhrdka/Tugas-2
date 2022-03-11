<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fungsi.php</title>
        <style>
            .body{
                background-color: hsl(160, 100%, 90%);
                display: grid;
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
        function biodata($nama, $nim, $prodi, $universitas){
            return "Nama : " . $nama . "<br>NIM : " . $nim . "<br>Program Studi : " . $prodi . "<br>Universitas : " . $universitas;
        }
        echo biodata("Dimas Mahardika", 200411100093, "Teknik Informatika", "Universitas Trunojoyo Madura <br><hr/>");
        echo biodata("Muhammad Fahmi C.P", 162012233084, "Teknik Robotika Dan Kecerdasan Buatan", "Universitas Airlangga <br><hr/>");
        echo biodata("Aknaf Haqqani S", 210410200023, "Televisi Dan Film", "Universitas Padjajaran <br><hr/>");
        ?>
        
    </body>
</html>