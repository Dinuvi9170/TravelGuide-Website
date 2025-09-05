// --------------------------------------------- Back to top button ------------------------------------------------

    window.onscroll = function() {
        showBackToTop();
      };
  
      function showBackToTop() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.querySelector(".back-to-top").classList.add("show");
        } else {
          document.querySelector(".back-to-top").classList.remove("show");
        }
      }
  
      function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
  
// ----------------------------------------------- Search bar -----------------------------------------------------

  const cards = document.querySelectorAll('.card-container');
  const searchButton = document.querySelector('.search-bar button');
  const searchInput = document.getElementById('searchInput');
  const notFoundMessage = document.getElementById('notFoundMessage');
  
  searchButton.addEventListener('click', handleSearch);
  searchInput.addEventListener('keyup', function (event) {
    // Check if the Enter key was pressed (key code 13)
    if (event.keyCode === 13) {
      handleSearch();
    }
  });
  
  searchInput.addEventListener('input', function () {
    handleSearch();
  });
  
  function handleSearch() {
    const searchQuery = searchInput.value.trim().toLowerCase();
    let foundMatch = false;
  
    cards.forEach(card => {
      const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();
      if (cardTitle.includes(searchQuery)) {
        card.style.display = 'block';
        foundMatch = true;
      } else {
        card.style.display = 'none';
      }
    });
  
// ----------------------------- Display the "not found" message if no match is found ----------------------------

    if (!foundMatch) {
      notFoundMessage.style.display = 'block';
    } else {
      notFoundMessage.style.display = 'none';
    }
  }
  
// ------------------------------------------------ Cards --------------------------------------------------------
  
    // Get all card containers
    const cardContainers = document.querySelectorAll('.card-container');
  
    // Loop through each card container
    cardContainers.forEach((cardContainer) => {
      const contactDetails = cardContainer.querySelector('.contact-details');
      const description = cardContainer.querySelector('.description');
      const cardMessage = cardContainer.querySelector('.card-message');
  
      let contactDetailsVisible = false;
  
      cardContainer.addEventListener('click', function (event) {
        // Check if the clicked element is one of the ignored elements (social icons or book button)
        const ignoredElements = cardContainer.querySelectorAll('.social-icons, .btn-book');
        if (Array.from(ignoredElements).some(element => element.contains(event.target))) {
          return; // Ignore the click and don't toggle contact details
        }
  
        if (contactDetailsVisible) {
          description.classList.remove('hidden');
          contactDetails.classList.add('hidden');
          cardMessage.textContent = 'Click for contact details';
        } else {
          description.classList.add('hidden');
          contactDetails.classList.remove('hidden');
          cardMessage.textContent = 'Click to go back';
        }
        contactDetailsVisible = !contactDetailsVisible;
      });
  
      cardContainer.addEventListener('mouseout', function (e) {
        if (contactDetailsVisible && !cardContainer.contains(e.relatedTarget)) {
          description.classList.remove('hidden');
          contactDetails.classList.add('hidden');
          cardMessage.textContent = 'Click for contact details';
          contactDetailsVisible = false;
        }
      });
    });
  
// --------------------------------------- Display the alert message --------------------------------------------

          function checkInstagramAccount() {
  
              // Display the alert message
              alert("Sorry, they don't have an Instagram account yet.");
          }
          
                  function checkFacebookAccount() {
  
              // Display the alert message
              alert("Sorry, they don't have an facebook account yet.");
          }
 
                          function checkYoutubeAccount() {
  
              // Display the alert message
              alert("Sorry, they don't have an Youtube account yet.");
          }
  
                          function checkTwitterAccount() {

              // Display the alert message
              alert("Sorry, they don't have an Twitter account yet.");
          }
          
                                  function checkBookingAccount() {
  
              // Display the alert message
              alert("Sorry, they don't have an Online Booking System yet.");
          }
  
  