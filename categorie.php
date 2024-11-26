<?php include('header.php'); ?>
    
    <div class="bg mt-5">
        <img src="./assets/images/bg1.jpeg" alt="image_fond">
    </div>


  <div class="carousel-container">
    <div class="row" id="carouselrow">
      <div class="cat col-4 p-5 text-center">
        <p>Nos plats asiatique</p>
        <div class="zoom-image mx-auto"><img src="./assets/images/asian_food_cat.jpg" alt="sushi"></div>
      </div>
      <div class="cat col-4 p-5 text-center">
        <a href="cat_burger.php" class="lien_cat"><p>Nos Burgers</p></a>
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
      <div class="cat col-4 mt-5 text-center" id="boissons">
        <p>Nos boissons</p>
        <div class="zoom-image mx-auto"><img src="./assets/images/boissons.jpg" style="object-fit:cover" alt="boisson"></div>
      </div>
      <div class="cat col-4 mt-5 text-center" id="desserts">
        <p>Nos Desserts</p>
        <div class="zoom-image mx-auto"><img src="./assets/images/desserts.jpg" style="object-fit:cover; object-position: 20%;" alt="dessert"></div>
      </div>
    </div>
  </div>
  
  <div class="boutonnav">
    <button class="btn btn-primary fontbouton" id="prevbtn">PRÉCÉDENT</button>
    <button class="btn btn-primary fontbouton" id="nextbtn">SUIVANT</button>
  </div>



  <?php include('footer.php'); ?>