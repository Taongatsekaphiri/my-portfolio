const images = document.querySelectorAll('#slideshow img');

let currentImageIndex = 0;

// Function to show the next image
function showNextImage() {
  // Hide the current active image
  images[currentImageIndex].classList.remove('active');
  
  // Increment the image index
  currentImageIndex = (currentImageIndex + 1) % images.length;
  
  // Show the next image
  images[currentImageIndex].classList.add('active');
}

// Start the slideshow
setInterval(showNextImage, 2500); // Change the duration (in milliseconds) between slides if needed





//greeting code
document.addEventListener("DOMContentLoaded", function() {
  var greetingElement = document.getElementById("greeting");
  var currentTime = new Date();
  var currentHour = currentTime.getHours();

  var greeting;

  if (currentHour < 12) {
    greeting = "Good morning";
  } 
  else if (currentHour < 18) {
    greeting = "Good afternoon";
  } 
  else {
    greeting = "Good evening";
  }
  greetingElement.textContent = greeting;
});








        // Get the search input element and search results element
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');
        
        // Event listener for search input
        searchInput.addEventListener('input', function() {
          // Clear previous search results
          searchResults.innerHTML = '';
        
          // Get the search query
          const query = searchInput.value.toLowerCase();
        
          // Iterate through the sections
          const sections = document.getElementsByTagName('section');
          for (let i = 0; i < sections.length; i++) {
            const section = sections[i];
            const sectionContent = section.innerText.toLowerCase();
        
            // Check if section content contains the search query
            if (sectionContent.includes(query)) {
              // Create a link to the section
              const link = document.createElement('a');
              link.textContent = section.querySelector('h2').textContent;
              link.href = '#' + section.id;
        
              // Append the link to the search results
              searchResults.appendChild(link);
            }
          }
        });