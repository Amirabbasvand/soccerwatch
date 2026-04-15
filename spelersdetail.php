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

    <title>Document</title>
</head>

<body>
    <video preload="none" autoplay muted loop id="bg-video">
        <source src="assets/ska.mp4" type="video/mp4">
    </video>
    <?php


    echo "<h1>INFORMATIE</h1>";

    $Dih = $_GET['id'];
    $smnt = $pdo->prepare("SELECT `teamnaam`,`ST`,`LW`,`RW`,`CAM`,`CM`,`CVM`,`LB`,`CB1`,`CB2`,`RB`,`GK`,`teamlogo`,`Videoteams` FROM `spelers` WHERE id = :id");
    $smnt->execute(['id' => $Dih]);
    $result = $smnt->fetchall();
    $infoska = '';

    foreach ($result as $key => $value) {

        $infoska .= "     <tr>
        <td>Team</td>
        <td>{$value['teamnaam']}</td>
    </tr>
    <tr>
        <td>Spits</td>
        <td>{$value['ST']}</td>
    </tr>
    <tr>
        <td>Linksvoor</td>
        <td>{$value['LW']}</td>
    </tr>
    <tr>
        <td>Rechtsvoor</td>
        <td>{$value['RW']}</td>
    </tr>
    <tr>
        <td>Aanvalendmiddenvelder</td>
        <td>{$value['CAM']}</td>
    </tr>
    <tr>
        <td>Centralemiddenvelder</td>
        <td>{$value['CM']}</td>
    </tr>
     <tr>
        <td>Verdedigendmiddenvelder</td>
        <td>{$value['CVM']}</td>
    </tr>
    <tr>
        <td>Linksachter</td>
        <td>{$value['LB']}</td>
    </tr>
    <tr>
        <td>Centraleverdediger</td>
        <td>{$value['CB1']}</td>
    </tr>
    <tr>
        <td>Centraleverdediger</td>
        <td>{$value['CB2']}</td>
    </tr>
    <tr>
        <td>Rechtsachter</td>
        <td>{$value['RB']}</td>
    </tr>
    <tr>
        <td>Keeper</td>
        <td>{$value['GK']}</td>
    </tr>
    
   
";
    }






    ?>
    <video id="bg-video" autoplay muted loop playsinline>
    <source src="/Jouw_idee_op_papier/<?php echo ($value['Videoteams']); ?>" type="video/mp4">
</video>
    <a href="spelers.php"><button class="ska">Terug</button></a>
    <img src="/Jouw_idee_op_papier/<?php echo $value['teamlogo']; ?>">
    <table>

        <th>info</th>
        <th>info</th>
        <?php echo "$infoska" ?>

        </tr>
    </table>


</body>

</html>