<?php include('header.php'); ?>
    


    <div class="video-container mt-5">
      <video autoplay muted loop id="vid">
        <source src="./assets/vidéos/videobg.mp4" type="video/mp4">
        Votre navigateur ne prend pas en charge la vidéo
      </video>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="Search">
      </form>
    </div>



    <div class="row">
  <div class="cat col-12 col-md-4 mt-5 text-center">
    <p>Nos plats asiatiques</p>
    <div class="zoom-image mx-auto">
      <img src="./assets/images/asian_food_cat.jpg" alt="sushi" class="img-fluid">
    </div>
  </div>
  <div class="cat col-12 col-md-4 mt-5 text-center">
    <a href="cat_burger.php" class="lien_cat">
      <p>Nos Burgers</p>
    </a>
    <div class="zoom-image mx-auto">
      <a href="cat_burger.php">
        <img src="./assets/images/burger_cat.jpg" alt="burger" class="img-fluid">
      </a>
    </div>
  </div>
  <div class="cat col-12 col-md-4 mt-5 text-center">
    <p>Nos Pâtes</p>
    <div class="zoom-image mx-auto">
      <img src="./assets/images/pasta_cat.jpg" alt="pates" class="img-fluid">
    </div>
  </div>
  
  <div class="cat col-12 col-md-4 mt-5 text-center">
    <p>Nos Pizzas</p>
    <div class="zoom-image mx-auto">
      <img src="./assets/images/pizza_cat.jpg" alt="pizza" class="img-fluid">
    </div>
  </div>
  <div class="cat col-12 col-md-4 mt-5 text-center">
    <p>Nos Salades</p>
    <div class="zoom-image mx-auto">
      <img src="./assets/images/salade_cat.jpg" alt="salade" class="img-fluid">
    </div>
  </div>
  <div class="cat col-12 col-md-4 mt-5 text-center">
    <p>Nos Sandwichs</p>
    <div class="zoom-image mx-auto">
      <img src="./assets/images/sandwich_cat.jpg" alt="sandwich" class="img-fluid">
    </div>
  </div>
</div>

<h2 class="ms-5 titrecat">Plats phares du moment</h2>
<div class="row">
  <div class="col-12 col-md-4 text-center">
    <p class="mt-2">Pizza Marguerita</p>
    <img src="./assets/images/pizza-margherita.jpg" alt="pizza_marguerita" class="phares img-fluid">
  </div>
  <div class="col-12 col-md-4 text-center">
    <p class="mt-2">Smoky Burger</p>
    <img src="./assets/images/cheesburger.jpg" alt="burger_bacon" class="phares img-fluid">
  </div>
  <div class="col-12 col-md-4 text-center">
    <p class="mt-2">Wrap poulet</p>
    <img src="./assets/images/buffalo-chicken.webp" alt="wrap" class="phares img-fluid">
  </div>
</div>




<?php include('footer.php'); ?>
    