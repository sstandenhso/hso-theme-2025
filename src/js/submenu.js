const subMenus = [].slice.call(document.querySelectorAll('.mobile-link-has-sub-menu'));

const subMenuNests = [].slice.call(document.querySelectorAll('.mobile-link-has-sub-menu .wp-block-navigation-submenu'))
let display = false;

subMenuNests.forEach(submenu => {
    submenu.style.display = 'none';
})

//Backlink for submenus
const backLink = `<li><div class="mobile-backlink"></div></li>`


// subMenuNests.forEach(submenu => {

    // submenu.firstChild.addEventListener("click", (e) => {
    //     display = false;
    //     subMenuNests.style.display = 'none';
    // })
// });

//Handle click on submenu elements.
subMenus.forEach(submenu => {

    //Event listener for submenu toggle
    submenu.addEventListener("click", (e) => {
        display = !display;
        submenu.childNodes[2].style.display = display ? 'block' : 'none';
    });
});
