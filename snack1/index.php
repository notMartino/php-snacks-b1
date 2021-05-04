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
    <ul>
    <?php 
        // Array partite
        $games = [
            [
                'home' => 'Olimpia Milano',
                'guest' => 'Cologno Monzese',
                'homePts' => 100,
                'guestPts' => 92
            ],
            [
                'home' => 'Juventus Basket',
                'guest' => 'Barcelona',
                'homePts' => 117,
                'guestPts' => 114
            ],
            [
                'home' => 'Real Madrid',
                'guest' => 'Liverpool',
                'homePts' => 112,
                'guestPts' => 115
            ]
        ];

        // Stampa di tutte le partite
        for ($i = 0; $i < count($games); $i++) { 
            echo '<li>' . $games[$i]['home'] . ' - ' . $games[$i]['guest'] . ' | ' . $games[$i]['homePts'] . '-' . $games[$i]['guestPts'] . '</li>';
        }
    ?>
    </ul>
</body>
</html>