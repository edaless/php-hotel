<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome -->
    <!-- <script src="https://kit.fontawesome.com/a523a9c105.js" crossorigin="anonymous"></script> -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Ajax -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script> -->
    <!-- Vue -->
    <!-- <script src="https://unpkg.com/vue@3"></script> -->
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->
    <!--gfont-->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!--roboto -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->



    <style>
        * {
            margin: 0;
        }
    </style>


    <!-- data -->
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

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance to center</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($hotels as $hotel) {
                // per ogni hotel mettere una nuova riga
                echo "<tr>";

                // per ognu elemento dell'hotel mettere una nuova casella 
                foreach ($hotel as $key => $value) {
                    // se si parla di parcheggio scrivere solo sì o no
                    if ($key === "parking") {
                        if ($value) {
                            echo "<td>sì</td>";
                        } else {
                            echo "<td>no</td>";
                        };

                        // se si parla di distanza aggiungere "Km"
                    } else if ($key === "distance_to_center") {
                        echo "<td>" . $value . " Km</td>";

                        // altrimenti scrivere il contenuto così com'è
                    } else {
                        echo "<td>" . $value . "</td>";
                    };
                };

                echo "</tr>";
            };
            ?>
        </tbody>
    </table>





    <!-- mio js -->
    <!-- <script type="text/javascript" src="JS/functions.js"> -->
    <!-- </script> -->
    <!-- <script type="text/javascript" src="JS/main.js"> -->
    <!-- </script> -->
    <!-- js BootStrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> -->


</body>

</html>