<?php
  class Movie{
    public $title;
    public $description;
    public $rate;
    public $genres;

    function __construct($t, $d, $r, ...$g){
      $this->title = $t;
      $this->description = $d;
      $this->rate = $r;
      $this->genres = $g;
    }

    public function getGenres($index){
    return ($index + 1 == sizeof($this->genres)) ? 
                                      '<span>'.$this->genres[$index]->name.'</span> ' : 
                                      '<span>'.$this->genres[$index]->name.', '.'</span> ';
    }
  }

?>