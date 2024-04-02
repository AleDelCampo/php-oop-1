<?php
class Movie {

    public $title;
    public $plot;
    public $year;
    public $genres;

    /**
     * __construct
     *
     * @param  string $_title
     * @param  string $_plot
     * @param  int $_year
     * @param  array $_genres
     */
    
    public function __construct($_title, $_plot, $_year, $_genres) {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    public function showInfo() {
        echo "Film: {$this->title}";
        echo "<br>";
        echo "Trama: {$this->plot}";
        echo "<br>";
        echo "Anno: {$this->year}";
        echo "<br>";
        echo "Generi: ";
        foreach ($this->genres as $genre) {
            echo $genre;
        }
    }
}

$movie1 = new Movie("Il Labirinto del Fauno", "Spagna, 1944. L'esercito sta piegando le ultime frange di resistenza e la piccola Ofelia si rifugia in un realistico mondo delle fiabe...", 2006, ["Fantasy","/","War"]);
$movie2 = new Movie("Pinocchio", "Il desiderio di un padre porta magicamente in vita un bambino di legno in Italia, dandogli la possibilità di prendersene cura.", 2022, ["Fantasy"]);
$movie3 = new Movie("Beetlejuice", "Una coppia di felici coniugi fantasmi è alle prese con una famiglia di chiassosi e petulanti snob che hanno occupato la loro casa.", 1988, ["Comedy","/","Horror"]);
$movie4 = new Movie("Beetlejuice 2", "Lo spiritello porcello è tornato per un esilarante e irriverente sequel. In questo capitolo, il fantasma reclutato per aiutare a infestare una casa condividerà un'avventura con la figlia di Lydia.", 2024, ["Comedy","/","Horror"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<h1>My Favourite Films:</h1>

    <ul>
        <?php
        echo "<li>" . $movie1->showInfo() . "</li>";
        echo "<li>" . $movie2->showInfo() . "</li>";
        echo "<li>" . $movie3->showInfo() . "</li>";
        echo "<li>" . $movie4->showInfo() . "</li>";
        ?>
    </ul>

</body>
</html>