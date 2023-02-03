<?php
    echo "ciao";
    echo '<br>';

    class Movie
    {
        public $title;
        public $year;
        public static $genre = 'Adventure';

        function __construct($_title, $_year)
        {
            $this->title = $_title;
            $this->year = $_year;
        }
    }

    $movie1 = new Movie('Pirati dei Caraibi - La Maledizione della Prima Luna', 2003);
    $movie2 = new Movie('Pirati dei Caraibi - Ai Confini del Mare', 2006);
    echo '<pre>';
    var_dump($movie1);
    echo '</pre>';
    echo '<pre>';
    var_dump($movie2);
    echo '</pre>';
    echo $movie1->title;
    echo '<br>';
    echo Movie::$genre;
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
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h1><?php echo $movie1->title; ?></h1>
                        <h4><?php echo Movie::$genre; ?></h4>
                        <h3><?php echo $movie1->year; ?></h3>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <h1><?php echo $movie1->title; ?></h1>
                        <h4><?php echo Movie::$genre; ?></h4>
                        <h3><?php echo $movie1->year; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>