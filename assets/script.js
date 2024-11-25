/*
document.getElementById('nextbtn').addEventListener('click', function() {
    moveCarousel('next');
  });
  
  document.getElementById('prevbtn').addEventListener('click', function() {
    moveCarousel('prev');
  });
  
  function moveCarousel(direction) {
    const row = document.getElementById('carouselrow');
    const itemWidth = row.children[0].offsetWidth;  
    const currentTransform = parseInt(window.getComputedStyle(row).transform.split(',')[4]) || 0; 
    
    if (direction === 'next') {
      row.style.transform = `translateX(${currentTransform - itemWidth}px)`;
    } else if (direction === 'prev') {
      row.style.transform = `translateX(${currentTransform + itemWidth}px)`;
    }
  }
    */


  
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






function validateForm(event) {
  event.preventDefault();  // Empêcher l'envoi du formulaire

  // Réinitialiser les erreurs
  document.getElementById("nameError").style.display = "none";
  document.getElementById("emailError").style.display = "none";
  document.getElementById("telephoneError").style.display = "none";
  document.getElementById("addressError").style.display = "none";

  let valid = true;

  // Vérification du champ "Nom et prénom"
  const name = document.getElementById("name").value;
  if (!name) {
      document.getElementById("nameError").style.display = "block";
      valid = false;
  }

  // Vérification du champ "Email"
  const email = document.getElementById("email").value;
  if (!email) {
      document.getElementById("emailError").style.display = "block";
      valid = false;
  }

  // Vérification du champ "Téléphone"
  const telephone = document.getElementById("telephone").value;
  if (!telephone) {
      document.getElementById("telephoneError").style.display = "block";
      valid = false;
  }

  // Vérification du champ "Adresse"
  const address = document.getElementById("address").value;
  if (!address) {
      document.getElementById("addressError").style.display = "block";
      valid = false;
  }

  // Si tout est valide, soumettre le formulaire
  if (!valid) {
    alert("Certains champs n'ont pas été remplis.");
  }

  if (valid) {
      alert("Formulaire soumis avec succès !");
      // Ici, vous pouvez soumettre le formulaire avec `event.target.submit()` si nécessaire
  }
}

// Attacher la fonction de validation au formulaire
document.getElementById("orderForm").addEventListener("submit", validateForm);