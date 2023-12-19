<?php
   $voto = $_GET["vote"] ?? "Voto Nullo";
?>
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-black">
    <table class="table table-dark table-hover mt-5">
        <thead>
          <tr class='text-center'>
            <th class='text-warning'>name</th>
            <th class='text-warning'>description</th>
            <th class='text-warning'>parking</th>
            <th class='text-warning'>vote</th>
            <th class='text-warning'>distanceToCenter</th>
          </tr>
      </thead>
      <tbody>
        <?php
        foreach ($hotels as $hotel) {
            if($hotel['vote']==$voto){
                echo "<tr class='text-center'>";
                echo "<td>".$hotel['name']."</td>";
                echo "<td>".$hotel['description']."</td>";
                // echo "<td>".$hotel['parking']."</td>";
                 if($hotel['parking']==false){
                     echo "<td>"."none"."</td>";
                 }else{
                     echo "<td>".$hotel['parking']."</td>";
                 }
                echo "<td>".$voto."</td>";
                echo "<td>".$hotel['distance_to_center']."</td>";
                echo "</tr>";
            }
            if($voto==""){
                echo "<tr class='text-center'>";
                echo "<td>".$hotel['name']."</td>";
                echo "<td>".$hotel['description']."</td>";
                // echo "<td>".$hotel['parking']."</td>";
                if($hotel['parking']==false){
                    echo "<td>"."none"."</td>";
                }else{
                    echo "<td>".$hotel['parking']."</td>";
                }
                echo "<td>".$hotel['vote']."</td>";
                echo "<td>".$hotel['distance_to_center']."</td>";
                echo "</tr>";
            }    
        }
        ?>
      </tbody>
    </table>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>
