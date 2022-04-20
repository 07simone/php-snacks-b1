<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];



$insegnante = $db["teachers"];

$pm = $db["pm"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="teachers">
        <h1>teachers</h1>
            <?php  
                for($index = 0; $index < count($insegnante); $index++){
                ?>
                <li>  <?php echo $insegnante[$index]['name']; ?> <?php echo $insegnante[$index]['lastname'] ?>  </li>   
                <?php } ?>
            
        
    </div>
    <div class="pm">
        <h1>PM</h1>
                <?php  
                    for($index = 0; $index < count($pm); $index++){
                ?>
                <li>  <?php echo $pm[$index]['name']; ?> <?php echo $pm[$index]['lastname'] ?>  </li>   
                <?php } ?>
        
    </div>
</body>
</html>