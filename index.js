snowFall.snow(document.querySelector(".snow"))

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      } else {
        entry.target.classList.remove('show');
      }
    });
  });
  
  const hiddenElements = document.querySelectorAll('.hidden');
  hiddenElements.forEach((el) => observer.observe(el));
  

  $(document).ready(function() {
    $('.nav-tabs a').on('click', function() {
      // Get the index of the clicked tab
      var tabIndex = $(this).parent().index();
  
      // Show the corresponding image in the carousel
      $('.owl-carousel .owl-item img').eq(tabIndex).show().siblings('img').hide();
  
      // Go to the corresponding slide in the carousel
      $('.owl-carousel').trigger('to.owl.carousel', [tabIndex]);
    });
  });
  