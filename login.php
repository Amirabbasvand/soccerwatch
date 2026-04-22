<?php

session_start();
include "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stylelogin.css">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <form method="post">
        <input type="text" id="Username" placeholder="Username" name="Username">
        <input type="password" id="Wachtwoord" placeholder="Wachtwoord" name="Wachtwoord">
        <input type="submit" value="Inloggen">
        <?php

        $username = $_POST['Username'] ?? '';
        $wachtwoord = $_POST['Wachtwoord'] ?? '';

        $stmn = $pdo->prepare("SELECT * FROM `gebruikers` WHERE Username = ?");
        $stmn->execute([$username]);

        $gebruiker = $stmn->fetch(PDO::FETCH_ASSOC);

        if ($gebruiker) {
            if ($wachtwoord === $gebruiker['Wachtwoord']) {
                $_SESSION['Username'] = $gebruiker['Username'];
                $_SESSION['Wachtwoord'] = $gebruiker['Wachtwoord'];
                header("Location: index.php?id=" . $gebruiker['id']);
                exit;
            } else {
                echo '<p2> WACHTWOORD FOUT</p2>';
            }
        }
        ?>

    </form>
    <a href="registeren.php" class="signin">Registeren</a>

    

</body>

</html>
