<?php include('header.php'); ?>
    



  <div class="comm mt-5">
    <div class="card mb-3 mt-5 burger-card visible" style="max-width: 800px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./assets/images/burger_cat.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title display-6">Le classique</h5>
            <p class="card-text">Un incontournable qui ne déçoit jamais ! Un steak juteux, accompagné de laitue croquante, de tomates fraîches et d'une tranche de cheddar fondant, le tout dans un pain moelleux. Simple, savoureux et toujours délicieux.</p>
            <p class="card-text">Prix : 10€</p>
            <label for="quantité" class="position-absolute end-0 mb-5 me-5">Quantité :</label>
            <input type="number" id="quantité" class="position-absolute end-0 me-2" style="width:30px" name="burgers" min="1">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="display:flex; justify-content:center">
    <div class="container-form">
      <form id="orderForm">
        <div class="mb-3">
          <label for="nameInputCommande" class="form-label" style="font-family: 'Baloo Paaji 2'">Nom et prénom</label>
          <input type="text" id="nameInputCommande" class="form-control" style="width:100%">
          <div id="nameErrorCommande" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
        </div>
        <div class="d-flex mb-3">
          <div class="me-2">
            <label for="email" class="form-label" style="font-family: 'Baloo Paaji 2'">Email</label>
            <input type="email" id="emailInputCommande" class="form-control" style="width:350px">
            <div id="emailErrorCommande" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
          <div class="mb-3">
            <label for="telephone" class="form-label" style="font-family: 'Baloo Paaji 2'">Téléphone</label>
            <input type="tel" id="telephoneCommande" class="form-control" style="width:350px" pattern="[0-9]{10}">
            <div id="telephoneErrorCommande" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label" style="font-family: 'Baloo Paaji 2'">Votre adresse</label>
          <textarea id="addressCommande" class="form-control" style="width:100%; height:100px"></textarea>
          <div id="addressErrorCommande" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
        </div>
        <button type="submit" class="btn btn-primary ms-auto" style="font-family: 'Baloo Paaji 2'; display:block;">Envoyer</button>
      </form>
    </div>
  </div>



  <?php include('footer.php'); ?>