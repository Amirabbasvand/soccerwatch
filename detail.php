<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header("Location: login.php?id=");
}
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stylespelers.css">

    <title>Detail</title>
</head>

<body>

    <?php

    echo "<h1>INFORMATIE</h1>";

    $Dih = $_GET['id'];
    $smnt = $pdo->prepare("SELECT `teamsnaam`,`LeagueTitels`,`UCL`,`Beker`,`Rivals`,`Opgerichtjaar`,`Land`,`teamlogo`,`Videoteams` FROM `teams` WHERE id = :id");
    $smnt->execute(['id' => $Dih]);
    $result = $smnt->fetchall();
    $infoska = '';

    foreach ($result as $key => $value) {

        $infoska .= "     <tr>
        <td>Team</td>
        <td>{$value['teamsnaam']}</td>
    </tr>
    <tr>
        <td>LandsTitel</td>
        <td>{$value['LeagueTitels']}</td>
    </tr>
    <tr>
        <td>UCL</td>
        <td>{$value['UCL']}</td>
    </tr>
    <tr>
        <td>Beker</td>
        <td>{$value['Beker']}</td>
    </tr>
    <tr>
        <td>Rivals</td>
        <td>{$value['Rivals']}</td>
    </tr>
    <tr>
        <td>Oprichtjaar</td>
        <td>{$value['Opgerichtjaar']}</td>
    </tr>
     <tr>
        <td>Land</td>
        <td>{$value['Land']}</td>
    </tr>
   
";
    }






    ?>
    <video id="bg-video" autoplay muted loop playsinline>
    <source src="/Jouw_idee_op_papier/<?php echo ($value['Videoteams']); ?>" type="video/mp4">
</video>
    <a href="index.php"><button class="ska">Terug</button></a>
    <img src="/Jouw_idee_op_papier/<?php echo $value['teamlogo']; ?>">
    <table>

        <th>info</th>
        <th>info</th>
        <?php echo "$infoska" ?>

        </tr>
    </table>

</body>

</html>