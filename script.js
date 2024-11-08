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