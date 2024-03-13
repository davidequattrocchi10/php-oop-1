<?php
require_once __DIR__ . "/Models/movie.php";

$all_genres = [
    '1' => ['Adventure', 'Romantic'],
    '2' => ['Action', 'Adventure'],
    '3' => ['Action', 'Adventure', 'Thriller'],
];
$all_movies = [
    new Movie('Life is beautiful', 145, 2000, 100, $all_genres['1']),
    new Movie('Mr and Mrs Smith', 127, 2005, 90, $all_genres['2']),
    new Movie('Mr and Mrs Smith', 130, 2012, 80, $all_genres['3'])

];
