<?php
  include __DIR__.'../../models/movie.php';
  include __DIR__.'../../models/genre.php';

  $movie_1 = new Movie('Un giorno in pretura', 'un bel film', 5, new Genre('azione'), new Genre('fantasy'), new Genre('dramma'));
  $movie_2 = new Movie('Juventus', 'una storia meravigliosa, però i 15 punti di penalizzazione stonavano un po\'', 3, new Genre('dramma'), new Genre('documentario'));
  $movie_3 = new Movie('John Wick', 'un romano a roma', 3, new Genre('azione'));

  $movies = [$movie_1, $movie_2, $movie_3];
?>