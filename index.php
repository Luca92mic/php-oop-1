<?php

class Movie{
    public $title;
    public $year;
    public $type;
    public $country = '';
    public $plot = '';
    public $genres = [];

    function __construct($_title, $_year, $_type){
        $this->title = $_title;
        $this->year = $_year;
        $this->type = $_type;
    }

    public function printInfo(){
        $info = [
            'title' => $this->title,
            'year' => $this->year,
            'type' => $this->type,
            'country' => $this->country,
            'plot' => $this->plot,
            'genres' => $this->genres,
        ];
        echo '<h1>'. $info['title'].'</h1>';
        foreach ($info as $info_key => $info_value) {
            if ($info_key == 'genres') {
                echo '<p>'.$info_key.': ';
                foreach ($info_value as $genre_key => $genre_value) {
                    echo $genre_value.' ';
                }
                echo '</p>';
            }else{
                echo '<p>'.$info_key.': '.$info_value.'<p>';
            }
        }
    }

    public function getInfo(){
        $info = [
            'title' => $this->title,
            'year' => $this->year,
            'type' => $this->type,
            'country' => $this->country,
            'plot' => $this->plot,
            'genres' => $this->genres,
        ];
        return $info;
    }
}

$il_signore_degli_anelli = new Movie('Il Signore degli Anelli', 2001, 'Film');

$il_signore_degli_anelli->printInfo();
$il_signore_degli_anelli_info=$il_signore_degli_anelli->getInfo();
var_dump($il_signore_degli_anelli_info);


$interstellar = new Movie('Interstellar', 2014, 'Sci-fi-Avventura');

$interstellar->printInfo();
$interstellar_info=$interstellar->getInfo();
var_dump($interstellar_info);


?>