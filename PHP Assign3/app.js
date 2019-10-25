this.className = "";
//  document.location.refresh();
var burger = document.querySelector(".burger");
var nav = document.querySelector(".nav-links");
var btnslide = document.querySelector(".butn");
var iconNav = document.querySelector(".icon");
var iconNavLink = document.querySelector(".nav-link");

var container = document.getElementsByClassName("container")[0];
const navSlide = () => {
  // Burger menu click
  burger.addEventListener("click", () => {
    document.getElementsByClassName("nav-links")[0].style.transition =
      "0.5s ease-out";

    nav.classList.toggle("nav-active");
    burger.classList.toggle("toggle");
    container.classList.toggle("container-left");
  });

  // Icon click
  iconNav.addEventListener("click", () => {
    //  document.getElementsByClassName("nav-link")[0].style.transition="0.5s ease-out";
    iconNavLink.classList.toggle("iconNav-active");
    console.log(iconNav.classList.value);
  });

  // Side btn clicked
  btnslide.addEventListener("click", () => {
  
  });
};

navSlide();
