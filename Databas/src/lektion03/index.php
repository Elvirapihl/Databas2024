<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 03 - Kontrollstrukturer, funktioner, objekt och klasser</title>
</head>
<body>
    <h1> Lektion 03 - Kontrollstrukturer, funktioner, objekt och klasser </h1>
    <h2> Kontrollstrukturer </h2>
    <h3>If, else, if-else satser </h3>
    <p> Vi använder villkorssatser för att köra olika kod beroende på uttryck</p>
    <?php 
    $anvInput = 'Sverige';
    $countryCode = '';

    if ($anvInput == 'Sverige'){
        $countryCode = 'se';
    } else if ($anvInput == 'Danmark'){
        $countryCode= 'dk';
    } else {
        $countryCode = 'unknown';
    }
    ?>
    <p> Användaren har <b> <?= $countryCode ?> </b> som landskod</p>
    <h3> Switch-sats </h3>
    <p> Switch satsen använder vi när vi vill göra olika</p>
    <?php 
    $anvInput = 'Syd Afrika';

    switch($anvInput){
        case 'Sverige':
            $countryCode = 'se';
            break;
        case 'Danmark':
            $countryCode = 'dk';
            break;
        case 'Syd Afrika':
            $countryCode= 'za';
            break;
        default;
    }
    ?>
    <p> Användaren har <b><?= $countryCode ?> </b> som landskod</p>
    <h3> While-loop</h3>

    <?php 
    $count = 0;
    $value = 1;
    while ($value < 100){
        $value = $value * 2; //$value*=2;
        $count++;
    }
    ?>
    <p> Om vi dubblar 1 så behöver vi dubbla värde <b> <?= $count?></b> gånger innan vi kommer över 100.</p>
    <h3> For-loop </h3>
    <?php 
    $lista = [];
    for ($i = 1; $i <= 203; $i++){
        $lista[] = $i;
    }
    // print_r($lista);

     $countries = [
        'Sverige' => 'se',
        'Danmark' => 'dk',
        'Syd Afrika' => 'za'
     ];
     $anvInput = 'Danmark';
     //$countryCode = $countries[$anvInput];
     foreach($countries as $key  => $val){
        if($anvInput == $key){
            $countryCode = $val;
        }
     }
    ?>
    <p> Användaren har <b><?= $countryCode ?> </b> som landskod</p>

    <h3> Funktioner </h3>

    <?php 
    function funktionsNamn($parameter1, $parameter2){
        echo "<$parameter2> $parameter1 </$parameter2>";
    }
    funktionsNamn("Detta är en paragraf", "p");
    ?>
    <ul> 
        <?php
        for($i=1; $i<=5; $i++){
            funktionsNamn("Item nummer $i", "li");
        }
        ?>
    </ul>
    <?php 
    // Anonyma funktioner
    $max = function($tal1, $tal2){
        if ($tal1 > $tal2){
            return $tal1;
        }
        return $tal2;
    };
    $min = function ($tal1, $tal2){
        return $tal1 > $tal2 ? $tal2 : $tal1;
    };
    $tal1 = 43; $tal2= 50;
    echo "Av $tal1 och $tal2 är, ". $min($tal1, $tal2);
    echo " minst och ". $max($tal1,$tal2). " är störst <br>";
    ?>

</body>
</html>