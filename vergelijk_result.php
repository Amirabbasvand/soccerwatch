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
    <link rel="stylesheet" href="style/stylels.css">
    <title>Document</title>
</head>

<body>

    <?php
    $kies1 = $_POST["Kies"] ?? null;
    $kies2 = $_POST["Kies2"] ?? null;

    $infoska = "";
    $infoska2 = "";

    $stmt1 = $pdo->prepare("SELECT * FROM teams WHERE id = :id");
    $stmt1->execute(['id' => $kies1]);
    $club1 = $stmt1->fetchall(PDO::FETCH_ASSOC);


    foreach ($club1 as $clubs1) {
        $infoska .= "     <tr>
        <td>Team</td>
        <td>{$clubs1['teamsnaam']}</td>
    </tr>
    <tr>
        <td>Lands Titels</td>
        <td>{$clubs1['LeagueTitels']}</td>
    </tr>
    <tr>
        <td>UCL</td>
        <td>{$clubs1['UCL']}</td>
    </tr>
    <tr>
        <td>Beker</td>
        <td>{$clubs1['Beker']}</td>
    </tr>
    
    
    
   
";
    }
    $stmt2 = $pdo->prepare("SELECT * FROM teams WHERE id = :id");
    $stmt2->execute(['id' => $kies2]);
    $club2 = $stmt2->fetch(PDO::FETCH_ASSOC);

    $infoska2 .= "     <tr>
        <td>Team</td>
        <td>{$club2['teamsnaam']}</td>
    </tr>
    <tr>
        <td>Lands Titels</td>
        <td>{$club2['LeagueTitels']}</td>
    </tr>
    <tr>
        <td>UCL</td>
        <td>{$club2['UCL']}</td>
    </tr>
    <tr>
        <td>Beker</td>
        <td>{$club2['Beker']}</td>
    </tr>
    
    
    
   
";




    ?>
    <h1>Vergelijking</h1>

    <div class="tables">
        <table>
            <th>info</th>
            <th>info</th>
            <?php echo $infoska ?>
        </table>
        <p class="VS">VS</p>
        <table>
            <th>info</th>
            <th>info</th>
            <?php echo $infoska2 ?>
        </table>
    </div>
    <a href="toevoegen.php"><button class="ska">Terug</button></a>

</body>

</html>