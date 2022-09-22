<?php

class Movie
{
    public $title;
    public $year;
    public $director;
    public $synopsis;


    public function __construct($title, $year, $director, $synopsis)
    {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        $this->synopsis = $synopsis;
    }

    public function getMovieInfo()
    {
?>
        <div class="card">
            <h3 class="py-1"><?php echo $this->title ?></h3>
            <h4 class="py-1"><?php echo $this->year ?></h4>
            <h4 class="py-1"><?php echo $this->director ?></h4>
            <p class="py-1"><?php echo $this->synopsis ?></p>
        </div>

<?php
    }
}
