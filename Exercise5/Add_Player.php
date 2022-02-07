<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add player</title>
    <link rel="stylesheet" type="text/css" href="./Add_player.css">
</head>

<body>
    <form action="./Insert.php" method="POST">
        <h2 style="color:#04AA6D;text-align:center;">Add Player Details Here</h2>
        <h2>Name</h2>
        <input type="text" placeholder="Enter the name of the player" name="player_name"><br>
        <h2>Wicket</h2>
        <input type="number" placeholder="Enter the number of wickets taken" name="total_wickets"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>