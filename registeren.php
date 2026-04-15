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

    <h1>Maak account</h1>

    <form method="post">

        <label><strong>Username</strong></label><br>
        <input type="text" name="Username" required><br><br>

        <label><strong>Wachtwoord</strong></label><br>
        <input type="Password" name="Wachtwoord" required><br><br>



        <input type="submit" name="opslaan" value="Opslaan">
    </form>
</body>

</html>