<?php
include_once __DIR__ . '/../Models/Movie.php';

function color($oscar)
{
    if ($oscar) {
        return Movie::getColorMovie();
    } else {
        return " ";
    }
}
