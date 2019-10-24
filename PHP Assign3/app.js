var burger = document.querySelector(".burger");
var nav = document.querySelector(".nav-links");
var container=document.getElementsByClassName("container")[0];
const navSlide = () => {
  burger.addEventListener("click", () => {
    document.getElementsByClassName("nav-links")[0].style.transition="0.5s ease-out";

    nav.classList.toggle("nav-active");
    burger.classList.toggle("toggle");
    container.classList.toggle("container-left");
    console.log(nav.classList.value);
    console.log(burger.classList.value);
  });
  //   nav.classList.toggle(".nav-links");
  //     burger.classList.toggle(".burger");
  console.log(nav.classList.value);
  console.log(burger.classList.value);
};

navSlide();
