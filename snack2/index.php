<!DOCTYPE html>
<html lang="it" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>

    <style>
        body{
            background-color: dodgerblue;
            text-align: center;
            padding: 100px;
        }
        ul{
            list-style-type: none;
        }
        p, li{
            font-size: 30px;
            margin-bottom: 20px;
        }

    </style>
</head>

<body>
    <p>
        <?php 
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];

            if(strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') !== false && strpos($mail, '.') !== false){
                echo 'Accesso riuscito!';
            }else{
                echo 'Accesso negato!';
            }
        ?>
    </p>
</body>
</html>