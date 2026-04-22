<?php

session_start();
include "db_connect.php";

if (isset($_POST['opslaan'])) {
    $sql = "INSERT INTO Gebruikers (
    Username,
    Wachtwoord
    ) VALUES (
        :Username, :Wachtwoord
    )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':Username' => $_POST['Username'],
        ':Wachtwoord' => $_POST['Wachtwoord'],


    ]);


    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stylere.css">
    <title>Toevoegen</title>
</head>

<body>

    <h1>Registeren</h1>

    <form method="post">

        
        <input type="text" name="Username" required placeholder="Username"><br><br>

        
        <input type="Password" name="Wachtwoord" required placeholder="Wachtwoord"><br><br>



        <input type="submit" name="opslaan" value="Registeren">
    </form>
</body>

</html>
