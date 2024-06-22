<!-- Back to top button -->
<button type="button" class="fixed bottom-4 right-2 rounded-full bg-green-700 hover:bg-green-500 p-2 sm:p-3 md:p-4 text-base text-white shadow-md" id="btn-back-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="transform: scale(1.3);">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
    </svg>
</button>
<!-- End of Back to top button -->
<script>
    const mybutton = document.getElementById("btn-back-to-top");
  
    // When the user scrolls down 20px from the top of the document, show the button
    const scrollFunction = () => {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        mybutton.classList.remove("hidden");
      } else {
        mybutton.classList.add("hidden");
      }
    };
    const backToTop = () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    };
  
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);
    window.addEventListener("scroll", scrollFunction);
  
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
<script>
    // Register the ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // Create a GSAP animation for elements with the class 'gsap-fade-up'
    gsap.utils.toArray('#btn-back-to-top').forEach(element => {
        gsap.fromTo(element, {
          opacity: 0,
          y: 90,
      },{
          opacity: 1,
          y: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:element
      });
    })
</script>