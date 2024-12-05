<?php include('header.php'); ?>
    
    <div class="bg mt-5">
        <img src="./assets/images/bg1.jpeg" alt="image_fond">
    </div>


      <h1 class="titrecat mb-5 mt-5 ms-md-5 text-center text-md-start">Nos burgers</h1>

  <div class="rowplats d-block d-md-flex">
    <div class="card mb-3 mt-5 burger-card visible " style="max-width: 800px;">
      <div class="row g-0">
        <div class="col-12 col-md-4">
          <img src="./assets/images/burger_cat.jpg" class="img-fluid rounded-start" style="width:100%" alt="...">
        </div>
        <div class="col-12 col-md-8">
          <div class="card-body">
            <h5 class="card-title display-6">Le classique</h5>
            <p class="card-text">Un incontournable qui ne déçoit jamais ! Un steak juteux, accompagné de laitue croquante, de tomates fraîches et d'une tranche de cheddar fondant, le tout dans un pain moelleux. Simple, savoureux et toujours délicieux.</p>
            <p class="card-text">Prix : 10€</p>
            <button class = "btn btn-primary btn-xs position-absolute bottom-0 end-0 mb-3 me-3 commander" onclick="window.location.href='classic_burger.php';">Commander</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 mt-5 burger-card visible" style="max-width: 800px;">
      <div class="row g-0">
        <div class="col-12 col-md-4">
          <img src="./assets/images/bbq-bacon-burger-recipe.jpeg" class="img-fluid rounded-start" style="height:332.47px;object-fit: cover; object-position: 65%; width:100%" alt="...">
        </div>
        <div class="col-12 col-md-8">
          <div class="card-body">
            <h5 class="card-title display-6">Le BBQ Bacon</h5>
            <p class="card-text">Un burger généreux avec un steak juteux, du bacon croquant et une touche de sauce barbecue pour un mélange sucré-salé irrésistible.</p>
            <p class="card-text">Prix : 12€</p>
            <button class = "btn btn-primary btn-xs position-absolute bottom-0 end-0 mb-3 me-3 commander">Commander</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="rowplats d-block d-md-flex">
    <div class="card mb-3 burger-card visible" style="max-width: 800px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./assets/images/burger_tex-mex.jpg" class="img-fluid rounded-start" style="height:332.47px;object-fit: cover; object-position: 15%; width:100%" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title display-6">Le Tex-Mex</h5>
            <p class="card-text">Pour les amateurs de sensations fortes ! Un burger épicé avec du guacamole crémeux et des jalapeños qui réveillent les papilles.</p>
            <p class="card-text">Prix : 12€</p>
            <button class = "btn btn-primary btn-xs position-absolute bottom-0 end-0 mb-3 me-3 commander">Commander</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 burger-card visible" style="max-width: 800px;">
      <div class="row g-0">
        <div class="col-md-4">
        <img src="./assets/images/burger-vegetarien-1-scaled-576x728-c.webp" class="img-fluid rounded-start" style="height:332.47px;object-fit: cover; object-position: 15%; width:100%" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title display-6">Le végé</h5>
            <p class="card-text">Un burger à base de galette de légumes, pois chiches, ou un steak végétal, accompagné de légumes frais, de sauce avocat ou de mayo végé.</p>
            <p class="card-text">Prix : 11€</p>
            <button class = "btn btn-primary btn-xs position-absolute bottom-0 end-0 mb-3 me-3 commander">Commander</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="rowplats d-block d-md-flex">
    <div class="card mb-3 burger-card hidden" style="max-width: 800px;">
      <div class="row g-0">
        <div class="col-md-4" style="overflow: hidden;">
          <img src="./assets/images/burger_poulet.jpg" class="img-fluid rounded-start" style="height:332.47px;object-fit: cover; width:100%" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title display-6">Le Chicken</h5>
            <p class="card-text">Un burger avec une grosse poitrine de poulet panée et dorée, servie avec une tranche de fromage fondu, de la laitue iceberg, des cornichons, des tomates fraîches et une sauce ranch ou barbecue.</p>
            <p class="card-text">Prix : 11,50€</p>
            <button class = "btn btn-primary btn-xs position-absolute bottom-0 end-0 mb-3 me-3 commander">Commander</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 burger-card hidden" style="max-width: 800px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./assets/images/burger_truffe.jpg" class="img-fluid rounded-start" style="height:332.47px; object-fit: cover; object-position: 50%;" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title display-6">Le premium</h5>
            <p class="card-text">Un burger haut de gamme avec un steak haché de bœuf de qualité, du fromage fondant, des éclats de truffe noire, des tomates fraîches, de la roquette fraîche et une sauce mayonnaise à la truffe. Le tout dans un pain brioché légèrement grillé.</p>
            <p class="card-text">Prix : 16€</p>
            <button class = "btn btn-primary btn-xs position-absolute bottom-0 end-0 mb-3 me-3 commander">Commander</button>
          </div>
        </div>
      </div>
    </div>
</div>


    <div class="boutonnav mt-5 mb-5">
      <button class="btn btn-primary fontbouton" id="prevbtn">PRECEDENT</button>
      <button class="btn btn-primary fontbouton" id="nextbtn" >SUIVANT</button>
    </div>


    <?php include('footer.php'); ?>