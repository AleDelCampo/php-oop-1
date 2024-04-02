<?php 

require './Models/Movie.php';

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

<ul class="my-movies">
        <li class="movie fauno"><span><?php echo $movie1->showInfo(); ?></span></li>
        <li class="movie pinocchio"><span><?php echo $movie2->showInfo(); ?></span></li>
        <li class="movie beetle1"><span><?php echo $movie3->showInfo(); ?></span></li>
        <li class="movie beetle2"><span><?php echo $movie4->showInfo(); ?></span></li>
    </ul>

</body>
</html>