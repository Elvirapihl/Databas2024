<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 02</title>
</head>
<body>
    <h1>Övning 1</h1>
    <ul>
    <?php 
    $name = 'Elvira';
    $age = 28;
    $redcar = true;
    $heigth = 15.9;
    $width = 30.4;

    echo '<li> Mitt namn är '.$name. '</li>';
    echo '<li>Jag är '.$age.' år gammal'.'</li>';
    echo '<li> Jag äger en röd bil: '.$redcar.'</li>';
    echo '<li> Min datorskärm är '.$heigth.'cm hög'. ' och '.$width.'cm bred'.'</li>';
    
    echo "Name ($name) är: " . gettype($name) . "<br>";
    echo "Age ($age) är: " . gettype($age) . "<br>";
    echo "Bil ($redcar) är: " . gettype($redcar) . "<br>";
    echo "Heigth ($heigth) är: " . gettype($heigth) . "<br>";
    echo "Width ($width) är: " . gettype($width) . "<br>";

    define('PI', 3.14159);
    echo "PI är " . PI . "<br>";

    $yta = $heigth * $width;
    echo 'Ytan på min skärm är: '.$yta."<br>";

    $lastname = 'Pilblad';
    echo 'Mitt fullständiga namn är '.$name.' '.$lastname."<br>";

// Definiera momssatsen som en konstant
define("MOMS_SATS", 0.25);

// Produktens pris utan moms
$prisExklMoms = 823.50;

// Beräkna momsbeloppet
$momsBelopp = $prisExklMoms * MOMS_SATS;

// Beräkna totalpriset (inklusive moms)
$totalPris = $prisExklMoms + $momsBelopp;

// Formatera resultaten till två decimaler
$momsBelopp = number_format($momsBelopp, 2);
$totalPris = number_format($totalPris, 2);

echo 'Momspriset är: '.$momsBelopp."<br>";
echo 'Totalpriset är: '.$totalPris."<br>";

    ?>
    </ul>

    <h2>Momsberäkning för Adventsstjärna</h2>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Beskrivning</th>
            <th>Belopp (SEK)</th>
        </tr>
        <tr>
            <td>Pris exklusive moms</td>
            <td><?= $prisExklMoms ?></td>
        </tr>
        <tr>
            <td>Momsbelopp (25%)</td>
            <td><?= $momsBelopp ?></td>
        </tr>
        <tr>
            <td>Totalt pris (inklusive moms)</td>
            <td><?= $totalPris ?></td>
        </tr>
    </table>

    <?php 
    $lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $ensiffra = $lista[3];
    $lista[3] = 8;
    $ensiffra = $lista[7];
    $lista[7] = 4;
    print_r($lista);
    
    unset($lista[4], $lista[5]);
    print_r($lista);

    count($lista);
    echo 'Mitt antal är '. count($lista);

    // Tar bort det första elementet och spara det
    $firstElement = array_shift($lista);
    // Ta bort det sista elementet och spara det
    $lastElement = array_pop($lista);

    // Lägg det sista elementet först
    array_unshift($lista, $lastElement);
    // Lägg det första elementet sist
    array_push($lista, $firstElement);

    print_r($lista);
    
    
    ?>
    
</body>
</html>