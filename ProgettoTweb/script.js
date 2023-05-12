const buttons = document.querySelectorAll("[data-carousel-button]")

buttons.forEach(button => {
  button.addEventListener("click", () => {
    const offset = button.dataset.carouselButton === "next" ? 1 : -1
    const slides = button
      .closest("[data-carousel]")
      .querySelector("[data-slides]")

    const activeSlide = slides.querySelector("[data-active]")
    let newIndex = [...slides.children].indexOf(activeSlide) + offset
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0

    slides.children[newIndex].dataset.active = true
    delete activeSlide.dataset.active
  })
})

// responsive navbar
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    820: {
      slidesPerView: 1,
      spaceBetween: 0,
    }, 
    1024: {
      slidesPerView: 2,
      spaceBetween:1,
    },
  },
});


$('.s-checkbox').on('change', function() {
  $('.s-checkbox').not(this).prop('checked', false);  
});

/*
const hamburger=document.getElementById("hamburger");
const btn = document.getElementById("btn")
const sec = document.getElementById("sec")
let isSectionVisible=true;
let isloginvisible=true;

hamburger.addEventListener("click", ()=>{ 
  if (isSectionVisible) {
    sec.style.display = "none";
    isSectionVisible = false;
  } else {
    setTimeout(() => {
      sec.style.display = "flex";
      isSectionVisible = true;
    }, 400); // Ritardo di 400 millisecondi
  }
})

const field = document.getElementsByClassName("field")
const username = document.getElementById("Username")
const password = document.getElementById("Password")
hamburger.addEventListener("click",()=>{
if(isloginvisible){
  username.style.display  = "none";
  password.style.display  = "none";
  isloginvisible=false;
}else {
  setTimeout(() => {
  username.style.display="flex";
  password.style.display="flex";
  isloginvisible=true;
}, 400); // Ritardo di 400 millisecondi
}
})

/*
window.addEventListener("scroll", function() {
  var navbar = document.querySelector(".navbar");
  var content = document.querySelector(".foto");
  
  if (window.pageYOffset > 0) {
    navbar.classList.add("scrolled");
    content.style.marginTop = navbar.offsetHeight + "px";
  } else {
    navbar.classList.remove("scrolled");
    content.style.marginTop = "0";
  }
});*/
