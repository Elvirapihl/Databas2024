<?php
    require('../../database.php');

    if(isset($_GET['deleteId'])) {

        $sql = 'DELETE FROM PokemonType WHERE id = ' . $_GET['deleteId'];
        //echo $sql;
        $conn->query($sql);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateWeight'])) {
        $updateWeight = intval($_POST['updateWeight']);
        $newWeight = trim($_POST['weight']);
    
        // Kontrollera att alla fält är ifyllda
        if (!empty($newWeight)) {
            $sql = "UPDATE PokemonType SET weight = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
    
            if ($stmt) {
                $stmt->bind_param("ii", $newWeight, $updateWeight); // "s" för string, "i" för integer
                if ($stmt->execute()) {
                    echo "Pokémon med ID $updateWeight har uppdaterats.";
                } else {
                    echo "Fel vid uppdatering: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Fel vid förberedning av SQL: " . $conn->error;
            }
        } else {
            echo "Alla fält måste fyllas i.";
        } }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Övnningsuppgifter lektion 6</title>
</head>
<body>
    <h1> Övnningsuppgifter lektion 6 </h1>

    <?php

    $sql = 'SELECT * FROM PokemonType';

    $result = $conn->query($sql);

    $counter = 0;

    ?>

    <table border="4">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>type</td>
                <td>height</td>
                <td>weight</td>
            </tr>
        </thead>
        <tbody>
        <?php
            while($rad = $result->fetch_assoc()) {
                $counter++;
                ?>
                    <tr>
                        <td><?= $rad['id'] ?></td>
                        <td><?= $rad['name'] ?></td>
                        <td><?= $rad['type'] ?></td>
                        <td><?= $rad['height'] ?></td>
                        <td><?= $rad['weight'] ?></td>
                        <td><a href="index.php?deleteId=<?= $rad['id'] ?>">Radera</a></td>
                        <td>
                <!-- Uppdateringsformulär -->
                <form method="post" action="">
                    <input type="hidden" name="updateWeight" value="<?= $rad['weight'] ?>">
                    <input type="text" name="weight" placeholder="Ny vikt" required>
                    <button type="submit">Uppdatera</button>
                </form>
            </td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>
