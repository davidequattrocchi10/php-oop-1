<?php

/**
 * Class Movie
 * Represents a movie entity with basic information.
 */
class Movie
{
    public static $button = "Win the premio oscar";
    /**
     * Movie constructor.
     * 
     * @param string $name The name of the movie.
     * @param int $duration The duration of the movie in minutes.
     * @param int $year The release year of the movie.
     * @param int $vote The user vote for the movie.
     * @param array $genre An array of genres of the movie.
     * @param bool $oscar Value bool if movie win premio oscar.
     */

    function __construct(public string $name, public int $duration, public int $year, public int $vote, public array $genres, public bool $oscar)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->year = $year;
        $this->vote = $vote;
        $this->genres = $genres;
        $this->oscar = $oscar;
    }

    /**
     * Get the star rating based on the user vote.
     * 
     * @param int $vote The user vote for the movie (out of 100).
     * @return string The star rating of the movie.
     */
    public function getStars($vote)
    {
        $this->vote = intval($this->vote / 100 * 5);
        return $this->vote . " stars";
    }

    /**
     * Returns a message indicating whether the film won an Oscar.
     * @return string A message indicating whether the film won the Oscar.
     */
    public function getOscar()
    {
        if ($this->oscar) {
            return 'This film won the oscar';
        } else {
            return "This film din't win the oscar";
        }
    }

    /**
     * Retrieves a string on the button.
     * @return string 
     */
    public static function getStaticMovie()
    {
        return self::$button;
    }

    /**
     * Retrieves a string that colors the card .
     * @return string 
     */
    public static function getColorMovie()
    {
        return 'text-bg-primary';
    }
}
