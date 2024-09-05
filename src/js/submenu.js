const subMenus = [].slice.call(document.querySelectorAll('.mobile-link-has-sub-menu'));

const subMenuNests = [].slice.call(document.querySelectorAll('.mobile-link-has-sub-menu .wp-block-navigation-submenu'));


//Backlink for submenus
const backLink = `<li><div class="mobile-backlink"></div></li>`

let display = false;

subMenuNests.forEach(submenu => {
    submenu.insertAdjacentHTML('afterbegin', backLink);
    submenu.style.display = 'none';
});


//Handle submenu open
subMenus.forEach(submenu => {

    //Event listener for submenu toggle
    submenu.firstChild.addEventListener("click", (e) => {
        display = true;
        submenu.childNodes[2].style.display = 'block';
    });
});

//Handle submenu close
subMenuNests.forEach(submenu => {

    submenu.firstChild.addEventListener("click", (e) => {
        display = false;
        submenu.style.display = 'none';
    })
});