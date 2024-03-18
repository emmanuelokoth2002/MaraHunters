document.addEventListener("DOMContentLoaded", function() {
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slide');
  
    function showSlides() {
      slides.forEach(slide => slide.style.display = "none");  
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      slides[slideIndex-1].style.display = "flex";  
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  
    showSlides();
  });

  