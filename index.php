<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>PHP Hotel</title>

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

        $park = $_GET["park"];

    ?>
</head>
<body>

    <form>
        <label for="parking">Parcheggio: </label>
        <input type="checkbox" name="park" value="Si">
        <input type="submit" value="Invia">
    </form>

    <div class="container-fluid">

        <div class="row fw-bold">
            <div class="col-2">
                Nome hotel
            </div>

            <div class="col-2">
                Descrizione
            </div>

            <div class="col-2">
                Parcheggio
            </div>

            <div class="col-2">
                Voto
            </div>

            <div class="col-2">
                Distanza dal centro
            </div>
        </div>

        <?php

            foreach ($hotels as $hotel) {
                $name = $hotel["name"];
                $description = $hotel["description"];
                $parking = $hotel["parking"];
                $vote = $hotel["vote"];
                $distance_to_center = $hotel["distance_to_center"];

                if ($parking) {
                    $parking = "Si";
                }
                else {
                    $parking = "No";
                }

                $col = "<div class='col-2'>";

                $row = "<div class='row'>";

                $div = "</div>";


                if ($park !== $parking && $park === "Si") {
                    $row = str_replace("<div class='row'>", "<div class='row d-none'>", $row);
                }

                echo 
                    $row .
                    $col . $name . $div . 
                    $col . $description . $div .
                    $col . $parking . $div .
                    $col . $vote . $div .
                    $col . $distance_to_center . $div . 
                    $div;
            }

        ?>
    </div>

    
</body>
</html>