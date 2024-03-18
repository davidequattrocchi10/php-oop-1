<?php
include_once __DIR__ . '/../Models/movie.php';
?>
<header class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand mb-0 h1">Movie List</span>
        <h4>
            <button class="btn btn-primary">
                <?php echo Movie::getStaticMovie(); ?>
            </button>
        </h4>
    </div>
</header>