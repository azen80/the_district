<?php include('header.php'); ?>
    

    <div class="bg mt-5">
      <img src="./assets/images/ibg.jpg" alt="image_fond">
  </div>




  <div style="display:flex; justify-content:center">
    <div class="container-form mt-5">
      <form id="orderFormContact">
      <div class="d-flex mb-3">
          <div class="me-2">
            <label for="nameInput" class="form-label" style="font-family: 'Baloo Paaji 2'">Nom</label>
            <input type="text" id="nameInputContact" class="form-control" style="width:350px">
            <div id="nameErrorContact" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
          <div class="mb-3">
            <label for="surnameInput" class="form-label" style="font-family: 'Baloo Paaji 2'">Prénom</label>
            <input type="text" id="surnameContact" class="form-control" style="width:350px">
          </div>
        </div>
        <div class="d-flex mb-3">
          <div class="me-2">
            <label for="email" class="form-label" style="font-family: 'Baloo Paaji 2'">Email</label>
            <input type="email" id="emailInputContact" class="form-control" style="width:350px">
            <div id="emailErrorContact" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
          <div class="mb-3">
            <label for="telephone" class="form-label" style="font-family: 'Baloo Paaji 2'">Téléphone</label>
            <input type="tel" id="telephoneContact" class="form-control" style="width:350px" pattern="[0-9]{10}">
            <div id="telephoneErrorContact" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
          </div>
        </div>
        <div class="mb-3">
          <label for="demand" class="form-label" style="font-family: 'Baloo Paaji 2'">Votre demande</label>
          <textarea id="demandContact" class="form-control" style="width:100%; height:100px"></textarea>
          <div id="demandErrorContact" class="form-text error" style="font-family: 'Baloo Paaji 2'; color:red">Ce champ est obligatoire.</div>
        </div>
        <button type="submit" class="btn btn-primary ms-auto" style="font-family: 'Baloo Paaji 2'; display:block;">Envoyer</button>
      </form>
    </div>
  </div>



  <?php include('footer.php'); ?>