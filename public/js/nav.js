// Auto scroll

window.addEventListener("scroll", function(){
    var nav = this.document.querySelector("nav");
    var back_up = this.document.querySelector(".back-to-top");
    var dropdown = this.document.querySelector(".dropdown");
    dropdown.classList.toggle("dropdown-after-scroll", window.scrollY > 0);
    nav.classList.toggle("after-scroll", window.scrollY > 0);
    back_up.classList.toggle("visible", window.scrollY > 0);
});
  
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});