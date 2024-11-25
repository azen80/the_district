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
      <div class="cat col-4 p-5 text-center">
        <p>Nos plats asiatique</p>
        <div class="zoom-image mx-auto"><img src="./assets/images/asian_food_cat.jpg" alt="sushi"></div>
      </div>
      <div class="cat col-4 p-5 text-center">
        <a href="cat_burger.html" class="lien_cat"><p>Nos Burgers</p></a>
        <div class=" zoom-image mx-auto"><a href="cat_burger.php"><img src="./assets/images/burger_cat.jpg" alt="burger"></a></div>
      </div>
      <div class="cat col-4 p-5 text-center">
        <p>Nos Pates</p>
        <div class="zoom-image mx-auto"><img src="./assets/images/pasta_cat.jpg" alt="pates"></div>
      </div>
     
      <div class="cat col-4 mt-5 text-center">
        <p>Nos Pizzas</p>
        <div class="zoom-image mx-auto"><img src="./assets/images/pizza_cat.jpg" alt="pizza"></div>
      </div>
      <div class="cat col-4 mt-5 text-center">
        <p>Nos Salades</p>
        <div class="zoom-image mx-auto"><img src="./assets/images/salade_cat.jpg" alt="salade"></div>
      </div>
      <div class="cat col-4 mt-5 text-center">
        <p>Nos Sandwichs</p>
        <div class="zoom-image mx-auto"><img src="./assets/images/sandwich_cat.jpg" alt="sandwich"></div>
      </div>
    </div>
 
  <h2 class="ms-5 titrecat">Plats phares du moments</h2>
    <div class="row">
      <div class="col-4 text-center">
        <p class="mt-2">Pizza Marguerita</p>
        <img src="./assets/images/pizza-margherita.jpg" alt="pizza_marguerita" class="phares">
      </div>
      <div class="col-4 text-center ">
        <p class="mt-2">Smoky Burger</p>
        <img src="./assets/images/cheesburger.jpg" alt="burger_bacon" class="phares">
      </div>
      <div class="col-4 text-center">
        <p class="mt-2">Wrap poulet</p>
        <img src="./assets/images/buffalo-chicken.webp" alt="wrap" class="phares">
      </div>
    </div>



<?php include('footer.php'); ?>
    