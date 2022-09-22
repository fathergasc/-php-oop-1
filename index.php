<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>OOP Movies</title>
</head>

<body>
    <h1>OOP Movies</h1>
    <div class="movies">
        <?php

        require_once __DIR__ . './movie.php';

        $mrVendetta = new Movie("Mr. Vendetta", "2002", "Park Chan-wook", "Un operaio recentemente licenziato rapisce la figlia di un suo ex amico, sperando di usare i soldi del riscatto per pagare il trapianto di rene della sorella.");

        $oldboy = new Movie("Oldboy", "2003", "Park Chan-wook", "Dopo essere stato rapito e tenuto prigoniero per quindici anni, Oh Dae-Su viene lasciato andare, ma scopre che ha solo cinque giorni di tempo per scoprire chi è dietro al suo rapimento.");

        $ladyVendetta = new Movie("Lady Vendetta", "2005", "Park Chan-wook", "Dopo essere stata imprigionata ingiustamente per tredici anni e aver portato via suo figlio, una donna cerca vendetta con mezzi sempre più brutali.");


        $mrVendetta->getMovieInfo();
        $oldboy->getMovieInfo();
        $ladyVendetta->getMovieInfo();
        ?>
    </div>
</body>

</html>