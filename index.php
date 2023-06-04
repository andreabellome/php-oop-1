<?php

class Movie {

    public $title; 
    public $date; 
    public $director;
    public $genre;

    function __construct($_title, $_date, $_director){

        $this -> title = $_title;
        $this -> date = $_date;
        $this -> director = $_director;

    }

    public function setGenre(array $_genre){
        $this->genre = $_genre;
    }


} 

$movie1 = new Movie('The Irishman', '2019', 'Martin Scorsese');
$movie2 = new Movie('Django Unchained', '2012', 'Quentin Tarantino');

$movie1->setGenre(['Drama', 'Crime']);
$movie2->setGenre(['Western', 'Action']);

var_dump($movie1);
var_dump($movie2);

?>