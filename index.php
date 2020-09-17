<?php
$index = 0;
$order = ['Artist','Album','Year','Track','Genre']; //Multi dimensional array with the music collection data
$musicAlbums = [
    [
        'Artist' => 'Imagine Dragons',
        'Album'=> 'Evolve',
        'Year'=> 2017,
        'Track'=> 12,
        'Genre'=> 'Pop rock, Alternative rock, Pop, electropop, Indie rock (early)',
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
    ],
    [
        'Artist' => 'Saint Motel',
        'Album'=> 'saintmotelevision',
        'Year'=> 2019,
        'Track'=> 10,
        'Genre'=> 'Indie pop, Indie rock, Funk rock',
    ],
    [
        'Artist' => 'Bad Suns',
        'Album'=> 'Disappear Here',
        'Year'=> 2016,
        'Track'=> 13,
        'Genre'=> 'Alternative rock, Indie rock, Dream pop, Post-punk',
    ],
    [
        'Artist' => 'half•alive',
        'Album'=> 'Now, Not Yet',
        'Year'=> 2019,
        'Track'=> 12,
        'Genre'=> 'Indie pop, Pop, Alternative rock, Dance-pop, Electronic rock, Electropop',
    ],
    [
        'Artist' => 'half•alive',
        'Album'=> '3',
        'Year'=> 2017,
        'Track'=> 3,
        'Genre'=> 'Indie pop, Pop, Alternative rock, Dance-pop, Electronic rock, Electropop',
    ],
    [
        'Artist' => 'Wallows',
        'Album'=> 'Nothing Happens',
        'Year'=> 2019,
        'Track'=> 11,
        'Genre'=> 'Post-punk, Power pop, Bedroom pop, Alternative rock, Surf punk',
    ]
];  //fill the collection with albums (also arrays)
$rows = count($musicAlbums); // amount of tr
$cols = count($order);// amount of td
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Q's Music Collection</title>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
</head>
<body>
<h1>Quincy's Music Collection</h1>
<hr/>
<table>
    <thead>
    <tr>
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
    <tbody>        <!--Loop through all albums in the collection-->
        <?php drawTable($musicAlbums, $order);
        function drawTable($musicAlbums, $order)
        {
            for ($i = 0; $i <= sizeof($musicAlbums)-1; $i++) {
                echo "<tr>";
                echo "<td>". $i .  "</td>";
                for ($k = 0; $k <= count($order)-1; $k++) {
                    try {
                        if(!$musicAlbums[$i]){
                            throw new Exception( 'Row'. $i . 'Column'. $k .'does not exist');
                        }else{

                            echo "<td>". $musicAlbums[$i][$order[$k]]. "</td>";
                        }
                    }
                    catch (Exception $e){
                        echo $e->getMessage(), "\n";
                    };
                }
               echo "</tr>";
            }
            echo "</table>";
        }
        ?>
<!--     Kijkt naar de array en pakt de lengte van de array zodat die er in 1 keer staat-->
<!--    --><?php //foreach ($musicAlbums as $musicAlbum) : $index++?><!-- -->
<!--        <tr>-->
<!---->
<!--            <td>--><?//= $index ?><!--</td>-->
<!--            <td >--><?//= $musicAlbum['Artist'];?><!--</td>-->
<!--            <td >--><?//= $musicAlbum['Album'];?><!--</td>-->
<!--            <td>--><?//= $musicAlbum['Year'];?><!--</td>-->
<!--            <td>--><?//= $musicAlbum['Track'];?><!--</td>-->
<!--            <td>--><?//= $musicAlbum['Genre'];?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
    </tbody>
</table>
</body>
</html>
