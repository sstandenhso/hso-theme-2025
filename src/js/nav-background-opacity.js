const header = document.getElementById('site-header-main');
const hero = document.querySelector(".banner-hero");

document.addEventListener("DOMContentLoaded", function(arg) {
    if(hero && !hero.classList.contains("banner-hero-light-bg")) {
        header.classList.add("background-opacity-0");
    }
});

document.addEventListener("scroll", e => {
    if(window.scrollY > 200) {
        header.style.transition = "all 0.3s ease-in-out"
        header.classList.remove("background-opacity-0");
    }
})