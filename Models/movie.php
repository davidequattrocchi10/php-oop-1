<?php

/**
 * Class Movie
 * Represents a movie entity with basic information.
 */
class Movie
{
    public $name;
    public $duration;
    public $year;
    public $vote;
    public $genres;

    /**
     * Movie constructor.
     * 
     * @param string $_name The name of the movie.
     * @param int $_duration The duration of the movie in minutes.
     * @param int $_year The release year of the movie.
     * @param int $_vote The user vote for the movie.
     * @param array $_genre An array of genres of the movie.
     */

    function __construct($_name, $_duration, $_year, $_vote, $_genres)
    {
        $this->name = $_name;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->vote = $_vote;
        $this->genres = $_genres;
    }

    /**
     * Get the star rating based on the user vote.
     * 
     * @param int $_vote The user vote for the movie (out of 100).
     * @return string The star rating of the movie.
     */
    public function getStars($_vote)
    {
        $this->vote = intval($this->vote / 100 * 5);
        return $this->vote . " stars";
    }
}
