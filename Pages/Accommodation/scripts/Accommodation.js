   
  //------------- Reduce the carousel interval to 2 seconds (2000 milliseconds)--------------------------


    document.querySelector('#carouselExampleFade').setAttribute('data-bs-interval', '2000');


  //-----------------------------------------------------------------------------------------------------




  //---------------------------------- Back to top button------------------------------------------------


    window.onscroll = function () {
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


  //-----------------------------------------------------------------------------------------------------



  
  //---------------------------------- Show loading animation--------------------------------------------


    function showLoadingAnimation(url) {
      document.getElementById("loadingOverlay").classList.add("show");
      setTimeout(function () {
        window.location.href = url;
      }, 1500);
    }
  

  //-----------------------------------------------------------------------------------------------------
