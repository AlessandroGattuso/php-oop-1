<?php
include __DIR__.'/models/movie.php';
include __DIR__.'/models/genre.php';

$movie_1 = new Movie('Un giorno in pretura', 'un bel film', 5, new Genre('azione'), new Genre('fantasy'), new Genre('dramma'));
$movie_2 = new Movie('Juventus', 'una storia meravigliosa, però i 15 punti di penalizzazione stonavano un po\'', 3, new Genre('dramma'), new Genre('documentario'));
$movie_3 = new Movie('John Wick', 'un romano a roma', 3, new Genre('azione'));

$movies = [$movie_1, $movie_2, $movie_3];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>php-oop-1</title>
</head>

<body>
  <div class="container d-flex flex-wrap justify-content-around mt-5">
    <?php foreach ($movies as $movie) { ?>
      <div class="card" style="width: 18rem;">
        <div class="card-header"><?php echo $movie->title; ?></div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Descrizione: <?php echo $movie->description; ?></li>
          <li class="list-group-item">Valutazione: <?php echo $movie->rate.'/5'; ?></li>
          <li class="list-group-item">
            Generi:
            <?php foreach ($movie->genres as $index => $value)
                    echo $movie->getGenres($index); 
            ?>
          </li>
        </ul>
      </div>
    <?php } ?>
  </div>
</body>

</html>