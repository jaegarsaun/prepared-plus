const buttons = document.querySelectorAll(".faq-toggle");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    button.parentNode.classList.toggle("active");
  });
});

const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navbarLinks = document.getElementsByClassName("nav-links-media")[0];
const navHyperLinks = document.getElementsByClassName("nav-link")[0];
const navSocials = document.getElementsByClassName("media-socials")[0];

toggleButton.addEventListener("click", () => {
  toggleButton.classList.toggle("active");
  navbarLinks.classList.toggle("active");
  navHyperLinks.classList.toggle("active");
  navSocials.classList.toggle("active");
});
// Order page
function orderPage() {
    window.location.href = "order";
  }

  // open a mailto link on click
  function sendEmail(){
    window.location.href = "mailto:preparedbycj@gmail.com"
  }

