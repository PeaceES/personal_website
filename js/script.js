document.addEventListener('DOMContentLoaded', function() {
  // Get the contact icon element
  const contactIcon = document.querySelector('.contact-icon');
  
  // Set a timeout to add the animation class after a small delay
  setTimeout(function() {
    contactIcon.classList.add('tilt-animation');
    
    // Optional: Remove the animation class after it completes
    setTimeout(function() {
      contactIcon.classList.remove('tilt-animation');
    }, 1000);
  }, 1500); // Start the animation 1.5 seconds after page load
});