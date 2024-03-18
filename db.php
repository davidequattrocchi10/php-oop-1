<?php
require_once __DIR__ . "/Models/movie.php";

$all_genres = [
    '1' => ['Adventure', 'Romantic'],
    '2' => ['Action', 'Adventure'],
    '3' => ['Drama', 'Adventure', 'Fantasy '],
    '4' => ['Drama', 'Romance'],
    '5' => ['Fantasy', 'Adventure'],
    '6' => ['Action', 'Adventure', 'Sci-Fi'],
    '7' => ['Drama', 'Romance'],
    '8' => ['Action', 'Crime'],
];
$all_movies = [
    new Movie('Life is beautiful', 145, 2000, 100, $all_genres['1'], true),
    new Movie('Mr and Mrs Smith', 127, 2005, 90, $all_genres['2'], false),
    new Movie('The Shape of Water', 123, 2017, 85, $all_genres['3'], true),
    new Movie('Titanic', 195, 1997, 95, $all_genres['4'], true),
    new Movie('The Lord of the Rings: The Return of the King', 201, 2003, 80, $all_genres['5'], true),
    new Movie('Inceptionl', 148, 2010, 92, $all_genres['6'], false),
    new Movie('Forrest Gump', 142, 1994, 100, $all_genres['7'], true),
    new Movie('The Dark Knight', 152, 2008, 87, $all_genres['8'], false)
];
