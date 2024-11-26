<?php include('header.php'); ?>
    

    <div class="bg mt-5">
      <img src="./assets/images/bg2.jpeg" alt="image_fond">
  </div>




  <div style="display:flex; justify-content:center">
    <div class="container-form">
      <form id="orderForm">
      <div class="d-flex mb-3">
          <div class="me-2">
            <label for="nameInput" class="form-label" style="font-family: 'Baloo Paaji 2'">Nom</label>
            <input type="text" id="email" class="form-control" style="width:350px">
            <div id="nameError" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
          <div class="mb-3">
            <label for="surnameInput" class="form-label" style="font-family: 'Baloo Paaji 2'">Prénom</label>
            <input type="text" id="surname" class="form-control" style="width:350px">
            <div id="surnameError" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
        </div>
        <div class="d-flex mb-3">
          <div class="me-2">
            <label for="email" class="form-label" style="font-family: 'Baloo Paaji 2'">Email</label>
            <input type="email" id="email" class="form-control" style="width:350px">
            <div id="emailError" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
          <div class="mb-3">
            <label for="telephone" class="form-label" style="font-family: 'Baloo Paaji 2'">Téléphone</label>
            <input type="tel" id="telephone" class="form-control" style="width:350px" pattern="[0-9]{10}">
            <div id="telephoneError" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
        </div>
        <div class="mb-3">
          <label for="demand" class="form-label" style="font-family: 'Baloo Paaji 2'">Votre demande</label>
          <textarea id="demand" class="form-control" style="width:100%; height:100px"></textarea>
          <div id="demandError" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
        </div>
        <button type="submit" class="btn btn-primary ms-auto" style="font-family: 'Baloo Paaji 2'; display:block;">Envoyer</button>
      </form>
    </div>
  </div>



  <?php include('footer.php'); ?>