<?php
// Importo traits
require_once './Traits/Discountable.php';

// Importo le classi
require_once './Models/Genre.php';
require_once './Models/Movie.php';

// Importo le info dal db
require_once './db.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">I miei Film</h1>
    <div class="row">

    
        <?php foreach ($movies as $movie) { ?>
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <?php echo $movie->name; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <strong>Uscita:</strong> <?php echo $movie->release; ?> 
                            <small>(<?php echo $movie->isRecent(); ?>)</small>
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <strong>Regia:</strong> <?php echo $movie->director; ?>
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <strong>Lingua:</strong> <?php echo $movie->language; ?>
                        </h6>
                        
                        <p class="mt-2 mb-1">
                            <strong>Prezzo:</strong> <?php echo $movie->getDiscountedPrice(); ?>€
                        </p>

                        <div class="mt-2">
                            <span class="badge bg-info text-dark">
                                <?php echo $movie->getGenresString(); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>