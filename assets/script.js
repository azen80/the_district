// Boutons catégories
  document.addEventListener('DOMContentLoaded', function() {
    const prevBtn = document.getElementById('prevbtn');
    const nextBtn = document.getElementById('nextbtn');
  
    const initialCategories = document.querySelectorAll('.cat:not(#boissons, #desserts)');
    
    const boissons = document.getElementById('boissons');
    const desserts = document.getElementById('desserts');
    
    let isNextClicked = false;
  
    function hideInitialCategories() {
      initialCategories.forEach(cat => {
        cat.style.display = 'none';
      });
    }
  
    function showInitialCategories() {
      initialCategories.forEach(cat => {
        cat.style.display = 'block';
      });
    }
  
    function showExtraCategories() {
      boissons.style.display = 'block';
      desserts.style.display = 'block';
    }
  
    function hideExtraCategories() {
      boissons.style.display = 'none';
      desserts.style.display = 'none';
    }
  
    nextBtn.addEventListener('click', function() {
      if (!isNextClicked) {
        hideInitialCategories();
        showExtraCategories();
        isNextClicked = true;
      }
    });
  
    prevBtn.addEventListener('click', function() {
      if (isNextClicked) {
        showInitialCategories();
        hideExtraCategories();
        isNextClicked = false;
      }
    });
  });
  

  //Boutons burgers
  document.addEventListener('DOMContentLoaded', function() {
    const prevBtn = document.getElementById('prevbtn');
    const nextBtn = document.getElementById('nextbtn');

    const allBurgers = document.querySelectorAll('.burger-card');
    let currentIndex = 0;  
 
    function updateBurgers() {
        allBurgers.forEach((burger, index) => {
            if (index >= currentIndex && index < currentIndex + 4) {
                burger.classList.add('visible');
                burger.classList.remove('hidden');
            } else {
                burger.classList.add('hidden');
                burger.classList.remove('visible');
            }
        });
    }

    nextBtn.addEventListener('click', function() {
        if (currentIndex + 4 < allBurgers.length) {
            currentIndex += 4; 
            updateBurgers();
        }
    });

    prevBtn.addEventListener('click', function() {
        if (currentIndex - 4 >= 0) {
            currentIndex -= 4;
            updateBurgers();
        }
    });

    updateBurgers();
});





//Formulaire commande
function validateFormCommande(event) {
  event.preventDefault(); 


  document.getElementById("nameErrorCommande").style.display = "none";
  document.getElementById("emailErrorCommande").style.display = "none";
  document.getElementById("telephoneErrorCommande").style.display = "none"; 
  document.getElementById("addressErrorCommande").style.display = "none";
  
  let valid = true;


  const name = document.getElementById("nameInputCommande").value;
  if (!name) {
      document.getElementById("nameErrorCommande").style.display = "block";
      valid = false;
  }


  const email = document.getElementById("emailInputCommande").value;
  if (!email) {
      document.getElementById("emailErrorCommande").style.display = "block";
      valid = false;
  }


  const telephone = document.getElementById("telephoneCommande").value;
  if (!telephone) {
      document.getElementById("telephoneErrorCommande").style.display = "block";
      valid = false;
  }

  const address = document.getElementById("addressCommande").value;
  if (!address) {
      document.getElementById("addressErrorCommande").style.display = "block";
      valid = false;
  }


  if (valid) {
    alert("Formulaire soumis avec succès !");
    document.getElementById("orderForm").submit(); 
} else {
    alert("Certains champs n'ont pas été remplis.");
}
}


document.getElementById("orderForm").addEventListener("submit", validateFormCommande); 





//Formulaire contact
function validateFormContact(event) {
  event.preventDefault(); 


  document.getElementById("nameErrorContact").style.display = "none";
  document.getElementById("emailErrorContact").style.display = "none";
  document.getElementById("telephoneErrorContact").style.display = "none";
  document.getElementById("demandErrorContact").style.display = "none";
  
  let valid = true;


  const name = document.getElementById("nameInputContact").value;
  if (!name) {
      document.getElementById("nameErrorContact").style.display = "block";
      valid = false;
  }


  const email = document.getElementById("emailInputContact").value;
  if (!email) {
      document.getElementById("emailErrorContact").style.display = "block";
      valid = false;
  }


  const telephone = document.getElementById("telephoneContact").value;
  if (!telephone) {
      document.getElementById("telephoneErrorContact").style.display = "block";
      valid = false;
  }

  const demand = document.getElementById("demandContact").value;
  if (!demand) {
      document.getElementById("demandErrorContact").style.display = "block";
      valid = false;
  }




  if (!valid) {
    alert("Certains champs n'ont pas été remplis.");
  }

  if (valid) {
      alert("Formulaire soumis avec succès !");
  }
}


document.getElementById("orderFormContact").addEventListener("submit", validateFormContact); 


