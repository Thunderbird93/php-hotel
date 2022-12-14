<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $park_y = 'Disponibile';
    $park_n = 'Non Disponibile';

/*
    foreach ($hotels as $hotel){
        echo $hotel['name'];
        echo $hotel['description'];
        echo $hotel['parking'];
        echo $hotel['vote'];
        echo $hotel['distance_to_center'];
    };
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <title>PHP HOTEL</title>
</head>
<body>
    <main>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Media Voti</th>
      <th scope="col">Distanza dal Centro Citt??</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hotels as $hotel){ ?>
    <tr>
      <th scope="row"> <?php echo $hotel['name']; ?> </th>
      <td><?php echo $hotel['description'];?></td>
<!--Parcheggio-->
      <td> <?php 
      if ($hotel['parking'] == 1){
        echo $park_y;
      } else {
        echo $park_n;
      }
      ?></td>
<!--/Parcheggio -->
      <td><?php echo $hotel['vote'];?></td>
      <td><?php echo $hotel['distance_to_center'];?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </main>
</body>
</html>