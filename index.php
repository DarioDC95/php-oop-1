<?php
    include __DIR__. "/models/movie-constructor.php";
    include __DIR__. "/models/genre-constructor.php";
    
    $genre1 = new Genre(array("Adventure", "Action", "Fantasy"));
    $genre2 = new Genre(array("Adventure", "Action", "Fantasy", "Horror"));

    $movie1 = new Movie('Pirati dei Caraibi - La Maledizione della Prima Luna', 2003, 4, $genre1, "https://cdn.chili.com/images/public/cms/5e/69/58/79/5e695879-b01d-428d-943d-56bbb6675bf0.jpg?width=800");
    $movie2 = new Movie('Pirati dei Caraibi - Ai Confini del Mondo', 2006, 5, $genre2, "https://cdn.chili.com/images/public/cms/5f/f3/95/bb/5ff395bb-097d-4981-bd38-21320fad7b73.jpg?width=422");

    $movie1->setStars($movie1->vote);
    $movie2->setStars($movie2->vote);

    $arrayFilm = array($movie1, $movie2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($arrayFilm as $value) { ?>
                    <div class="col-6">
                        <div class="card">
                            <img class="img-top" src="<?php echo $value->image ?>" alt="">
                            <div class="card-body">
                                <h1><?php echo $value->title; ?></h1>
                                <h4><?php echo implode(", ", $value->genre->genre); ?></h4>
                                <h5><?php echo $value->year; ?></h5>
                                <h5>E' di: <?php echo $value->getYearsOfOld(); ?> anni fa</h5>
                                <h2 class="text-warning"><?php echo implode(" ", $value->star); ?></h2>
                            </div>
                        </div>
                    </div>
                <?php } ?>    
            </div>
        </div>
    </main>
</body>
</html>