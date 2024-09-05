const navToggleOpen = document.querySelectorAll('.site-main-nav--mobile button')[0];
navToggleOpen.addEventListener('click', e => {
    e.target.nextElementSibling.style.display = 'block';
    console.log(navToggleOpen)
});