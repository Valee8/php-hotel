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

    ?>
</head>
<body>

    <form>
        <label for="parking">Parcheggio: </label>
        <input type="checkbox" name="parking">
        <br>
        <label for="vote">Inserisci voto: </label>
        <input type="text" name="vote">
        <br>
        <input type="submit" value="Filtra">
    </form>


    <table class="table">
        <thead>
            <tr>
                <th>
                    Nome hotel
                </th>
                <th>
                    Descrizione
                </th>
                <th>
                    Parcheggio
                </th>
                <th>
                    Voto
                </th>
                <th>
                    Distanza dal centro
                </th>
            </tr>

        </thead>


        <tbody>
            <tr>  
                <?php

                    $filterParking = $_GET["parking"];
                    $filterVote = $_GET["vote"];

                    foreach ($hotels as $hotel) {
                        $name = $hotel["name"];
                        $description = $hotel["description"];
                        $parking = $hotel["parking"];
                        $vote = $hotel["vote"];
                        $distance_to_center = $hotel["distance_to_center"];

                        if ($vote >= $filterVote && (!$filterParking || ($filterParking && $parking))) {
            
                            echo 
                                "<tr>" .
                                "<td>" . $name . "</td>" . 
                                "<td>" . $description . "</td>" .
                                "<td>" . ( $parking ? "Si" : "No" ) . "</td>" .
                                "<td>" . $vote . "</td>" .
                                "<td>" . $distance_to_center . "</td>" . 
                                "</tr>";

                            }
                    }

                ?>
           
            </tr>
        </tbody> 
    </table>

</body>
</html>