<?php
$x = 0;
$order = ['Artist','Album','Year','Track','Genre']; //Multi dimensional array with the music collection data
$musicAlbums = [
    [
        'Artist' => 'Imagine Dragons',
        'Album'=> 'Evolve',
        'Year'=> 2017,
        'Track'=> 12,
        'Genre'=> 'Pop rock',
    ],
    [
        'Artist' => 'Arctic Monkeys',
        'Album'=> 'Favourite Worst Nightmare',
        'Year'=> 2017,
        'Track'=> 12,
        'Genre'=> 'Pop',
    ],
    [
        'Artist' => 'Glass Animals',
        'Album'=> 'How To Be A Human Being',
        'Year'=> 2016,
        'Track'=> 11,
        'Genre'=> 'Art Pop, PBR&B',
    ],
    [
        'Artist' => 'Foster The People',
        'Album'=> 'Torches',
        'Year'=> 2011,
        'Track'=> 10,
        'Genre'=> 'Alternative/Indie',
    ],
    [
        'Artist' => 'Snow Patrol',
        'Album'=> 'Eyes Open',
        'Year'=> 2006,
        'Track'=> 11,
        'Genre'=> 'Alternative/Indie, Rock',
    ],
    [
        'Artist' => 'Electric Light Orchestra',
        'Album'=> 'Out of the Blue',
        'Year'=> 1977,
        'Track'=> 17,
        'Genre'=> 'Rock',
    ],
    [
        'Artist' => 'Coldplay',
        'Album'=> 'A Head Full of Dreams',
        'Year'=> 2015,
        'Track'=> 11,
        'Genre'=> 'Rock',
    ],
    [
        'Artist' => 'Imagine Dragons',
        'Album'=> 'Origins (Deluxe)',
        'Year'=> 2018,
        'Track'=> 15,
        'Genre'=> 'Rock',
    ],
    [
        'Artist' => 'Imagine Dragons',
        'Album'=> 'Night Visions (Deluxe)',
        'Year'=> 2012,
        'Track'=> 20,
        'Genre'=> 'Rock',
    ],
    [
        'Artist' => 'Hozier',
        'Album'=> 'Hozier',
        'Year'=> 2014,
        'Track'=> 13,
        'Genre'=> 'Blues, Soul, R&B, Folk, Indie rock',
    ]
];  //fill the collection with albums (also arrays)
$rows = 10; // amout of tr
$cols = $musicAlbums;// amjount of td
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Q's Music Collection</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css"/>
</head>
<body>
<h1>Quincy's Music Collection</h1>
<hr/>
<table>
    <thead>
    <tr>
<!--        Selects every fourth element-->
<!--        among any group of siblings-->
<!--        :nth-child(odd) {-->
<!--        color: grey;-->
<!--        }-->
        <th>#</th>
        <th>Artist</th>     <!--Naam artiest-->
        <th>Album</th>      <!--Naam album-->
        <th>Year</th>       <!--Jaar van uitkomen-->
        <th>Tracks</th>     <!--Aantal tracks-->
        <th>Genre</th>      <!--Genre-->
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; Quincy van der Sluis Collection</td>
    </tr>
    </tfoot>
    <tbody><!--        Loop through all albums in the collection-->
<!--        drawTable(count($musicAlbums), $order);-->
<!--        function drawTable($rows, $cols)-->
<!--        {-->
<!--            echo "<table border='1'>";-->
<!--            for ($i = 1; $i <= $rows; $i++) { -->
<!--                echo "<tr>"; -->
<!--                for ($k = 1; $k <= $cols; $k++) {-->
<!--                    echo "<td align='center'>". $rows[$i][$cols[$k]]. "</td>";-->
<!--                }-->
<!--               echo "</tr>";-->
<!--            }-->
<!--            echo "</table>"; -->
<!--        }-->
    <?php foreach ($musicAlbums as $i) : $x++?> <!-- Kijkt naar de array en pakt de lengte van de array zodat die er in 1 keer staat-->
        <tr>

            <td><?= $x ?></td>
            <td align='center'><?= $i['Artist'];?></td>
            <td align='center'><?= $i['Album'];?></td>
            <td align='center'><?= $i['Year'];?></td>
            <td align='center'><?= $i['Track'];?></td>
            <td align='center'><?= $i['Genre'];?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
