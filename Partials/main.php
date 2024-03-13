<div class=" container p-3">
    <div class="row mb-3">
        <h1>List of Movies</h1>
        <ul>
            <?php
            // Include the file containing the array of Movie objects
            include_once 'db.php';
            foreach ($all_movies as $movie) : ?>
                <li>
                    <strong><?php echo $movie->name; ?></strong><br>
                    Duration: <?php echo $movie->duration; ?> minutes<br>
                    Year: <?php echo $movie->year; ?><br>
                    Genres:
                    <?php foreach ($movie->genres as $genre) :
                        echo $genre . " ";
                    endforeach; ?>
                    <br>
                    Vote: <?php echo $movie->getStars($movie->vote); ?>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</div>