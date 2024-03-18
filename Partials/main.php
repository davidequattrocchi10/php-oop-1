<div class=" container p-3 ">
    <div class="row mb-3">
        <h1>List of Movies</h1>
        <?php
        include_once 'db.php';
        include_once __DIR__ . '/../Functions/functions.php';
        foreach ($all_movies as $movie) : ?>
            <div class="col-md-4">
                <div class="card <?php echo color($movie->oscar); ?> mb-3">
                    <div class="card-body">
                        <strong><?php echo $movie->name; ?></strong><br>
                        Duration: <?php echo $movie->duration; ?> minutes<br>
                        Year: <?php echo $movie->year; ?><br>
                        Genres:
                        <?php foreach ($movie->genres as $genre) :
                            echo $genre . "  ";
                        endforeach; ?>
                        <br>
                        Vote: <?php echo $movie->getStars($movie->vote); ?>
                        <br>
                        <?php echo $movie->getOscar($oscar); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>