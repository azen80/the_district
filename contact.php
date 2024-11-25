<?php include('header.php'); ?>
    

    <div class="bg mt-5">
      <img src="./assets/images/bg2.jpeg" alt="image_fond">
  </div>




  <div style="display:flex; justify-content:center">
    <div class="container-form">
      <form>
        <div class="d-flex mb-3">
          <div class="me-2">
            <label for="mail" class="form-label" style="font-family: 'Baloo Paaji 2'">Nom</label>
            <input type="mail" class="form-control" style="width:350px">
            <div id="mail" class="form-text" style="font-family: 'Baloo Paaji 2'">Ce champ est obligatoire.</div>
          </div>
          <div class="mb-3">
            <label for="telephone" class="form-label" style="font-family: 'Baloo Paaji 2'">Prénom</label>
            <input type="telephone" class="form-control" style="width:350px">
          </div>
        </div>
        <div class="d-flex mb-3">
          <div class="me-2">
            <label for="mail" class="form-label" style="font-family: 'Baloo Paaji 2'">Email</label>
            <input type="mail" class="form-control" style="width:350px">
          </div>
          <div class="mb-3">
            <label for="telephone" class="form-label" style="font-family: 'Baloo Paaji 2'">Téléphone</label>
            <input type="telephone" class="form-control" style="width:350px">
            <div id="telephone" class="form-text" style="font-family: 'Baloo Paaji 2'">Ce champ est obligatoire.</div>
          </div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label" style="font-family: 'Baloo Paaji 2'">Votre demande</label>
          <textarea class="form-control" style="width:100%; height:100px"></textarea>
        </div>
        <button type="submit" class="btn btn-primary ms-auto" style="font-family: 'Baloo Paaji 2'; display:block">Envoyer</button>
      </form>
    </div>
  </div>



  <?php include('footer.php'); ?>