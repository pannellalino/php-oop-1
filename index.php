<?php

include './class/Movies.php';

$first_movie = new Movie("Suits", 2011, "Serie TV Giudiziaria", 9, "Arguto");
$first_movie->setImg("https://wips.plug.it/cips/libero.it/magazine/cms/2022/08/suits.jpg");

$second_movie = new Movie("Narcos", 2017, "Serie TV Crime", 3, "Crudo");
$second_movie->setImg("https://www.wonderchannel.it/wp-content/uploads/2016/03/narcos-serie-tv.jpg");

$third_movie = new Movie("The Last Dance", 2020, "Docuserie", 10, "Ottimista");
$third_movie->setImg("https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(jpeg):focal(1155x551:1157x549)/origin-imgresizer.eurosport.com/2020/05/19/2821025-58185528-2560-1440.jpg");

$fourth_movie = new Movie("Peaky Blinders", 2013, "Serie TV Crime", 6, "Violento");
$fourth_movie->setImg("https://media.gqitalia.it/photos/5d959f398fa7a00008f88949/16:9/w_1280,c_limit/PeakyBlinders5.jpg");

$fifth_movie = new Movie("La Casa di Carta", 2017, "Thriller TV", 5, "Suspance");
$fifth_movie->setImg("https://static.open.online/wp-content/uploads/2020/04/la-casa-di-carta-4-serie-1280x731.jpg");
  
$sixth_movie = new Movie("the Big Bang Theory", 2007, "Commedie TV", 12, "Bizzarro");
$sixth_movie->setImg("https://media-assets.wired.it/photos/615f18b351e4a6072a85bfe1/master/pass/1490087815_big-bang-theory-cast.jpg");

$movieList = [$first_movie, $second_movie, $third_movie, $fourth_movie, $fifth_movie, $sixth_movie];

//var_dump($movieList);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="./css/style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous'/>
  <title>php-oop-1</title>
</head>
<body>
  
  <div class="container p-5">
    <h1 class="text-center">Serie TV</h1>
    <div class="d-flex flex-wrap">
      <?php foreach ($movieList as $movie) : ?>
      <div class="card text-center">
      <div class="card-header p-0">
        <img class="w-100 rounded-top" src="<?php echo $movie->getImg() ?>" alt="">
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $movie->title ?></h5>
        <h6 class="card-text"><?php echo $movie->genre ?></h6>
        <h6 class="card-text">" <?php echo $movie->characteristic ?> "</h6>
        <h6 class="card-text"><?php echo $movie->year ?></h6>
        <button type="button" class="btn btn-outline-light"><i class="fa-solid fa-play"></i> Watch Now</button>
      </div>
      <div class="card-footer text-muted">
        <?php echo $movie->seasons ?> Stagioni
      </div>
    </div>
    <?php endforeach; ?>
    </div>
  </div>
</body>
</html>