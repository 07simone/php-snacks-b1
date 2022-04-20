<!-- primo snacks -->

<?php
$game = [
    [
        "team 1" => "orlando magic",
        "team 2" => "maiami",
        "punti_team1" => 60,
        "punti_team2" => 96

    ],
    [
        "team 1" => "golden state",
        "team 2" => "boston",
        "punti_team1" => 60,
        "punti_team2" => 96

    ],
    
]; 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($index = 0; $index < count($game); $index++ ){ ?>
        <li> <?php echo $game[$index]['team 1'] ?> - <?php echo $game[$index]['team 2'] ?> | <?php echo $game[$index]['punti_team1'] . '-' . $game[$index]['punti_team2']?>     </li>
        <?php } ?>
    </ul>
</body>
</html>