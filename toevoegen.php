<?php
session_start();

include 'db_connect.php';


$stmt = $pdo->query("SELECT id, teamsnaam FROM teams");
$clubs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/styletvg.css">
<title>Spelers</title>
<html>

<head>
    <title>Vergelijk clubs</title>
</head>

<body>
    <ul class="navi">
        <li><a href="index.php"><button class="ska">Clubs</button></a></li>
        <li><a href="spelers.php"><button class="ska">Spelers</button></a></li>
        <li><a href="toevoegen.php"><button class="ska">Clubvergelijking</button></a></li>
        <li class="h">
            <h3>𝐒𝐎𝐂𝐂𝐄𝐑𝐖𝐀𝐓𝐂𝐇</h3>
        </li>
        <li class="ha"><a href="logout.php"><button class="ska">Logout</button></a></li>

    </ul>
    <h1>Clubvergelijking</h1>

    <form method="POST" action="vergelijk_result.php">
        <label for="Kies"></label>
        <select name="Kies" id="Kies">
            <?php foreach ($clubs as $club): ?>
                <option value="<?= $club["id"] ?>">
                    <?= $club["teamsnaam"] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <label for="Kies2"></label>
        <select name="Kies2" id="Kies2">
            <?php foreach ($clubs as $club): ?>
                <option value="<?= $club["id"] ?>">
                    <?= $club["teamsnaam"] ?>
                </option>
            <?php endforeach; ?>
        </select>


        <button type="submit" class="jojojo">Vergelijk</button>

        </select>
    </form>

</body>

</html>
