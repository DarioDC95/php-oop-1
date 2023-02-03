<?php
    echo "ciao";
    echo '<br>';

    class Movie
    {
        public $title;
        public $year;
        public $genre;
        public $vote;
        public $star = [];

        function __construct($_title, $_year, $_vote, Genre $_genre)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
            $this->vote = $_vote;
        }

        public function setStars() {
            for($i = 0; $i < $this->vote; $i++) {
                $this->star[] = '<i class="fa-solid fa-star"></i>';
            }
        }

        public function getYearsOfOld() 
        {
            $yearsOld = date('Y') - $this->year;
            return $yearsOld;
        }
    }

    class Genre
    {
        public $genre;

        function __construct($_genre)
        {
            $this->genre = $_genre;
        }
    }
    
    $genre1 = new Genre(array("Adventure", "Action", "Fantasy"));
    $genre2 = new Genre(array("Adventure", "Action", "Fantasy", "Horror"));

    $movie1 = new Movie('Pirati dei Caraibi - La Maledizione della Prima Luna', 2003, 4, $genre1);
    $movie2 = new Movie('Pirati dei Caraibi - Ai Confini del Mare', 2006, 5, $genre2);

    $movie1->setStars($movie1->vote);
    $movie2->setStars($movie2->vote);

    echo '<pre>';
    var_dump($movie1);
    echo '</pre>';
    echo '<pre>';
    var_dump($movie2);
    echo '</pre>';
    echo $movie1->title;
    echo '<br>';
    echo implode(", ", $movie1->genre->genre);
    echo '<br>';
    echo implode(", ", $movie2->genre->genre);
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
                <div class="col">
                    <div class="card">
                        <h1><?php echo $movie1->title; ?></h1>
                        <h4><?php echo implode(", ", $movie1->genre->genre); ?></h4>
                        <h3><?php echo $movie1->year; ?></h3>
                        <h2><?php echo $movie1->getYearsOfOld(); ?></h2>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <h1><?php echo $movie2->title; ?></h1>
                        <h4><?php echo implode(", ", $movie2->genre->genre); ?></h4>
                        <h3><?php echo $movie2->year; ?></h3>
                        <h2><?php echo $movie2->getYearsOfOld(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>