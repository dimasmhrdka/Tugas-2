<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hello.php</title>
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
        //Meng create nama
        $nama =  "Dimas Mahardika";
        //Meng create NIM
        $NIM = "200411100093";
        echo "Nama : ". $nama . "<br>NIM : ". $NIM;
        ?>
    </body>
</html>