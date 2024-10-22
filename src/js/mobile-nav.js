// const navToggleOpen = document.querySelectorAll('.site-main-nav--mobile button')[0];
// navToggleOpen.addEventListener('click', e => {
//     e.target.nextElementSibling.style.display = 'block';
//     console.log(navToggleOpen)
// });

const mobileNavMenuWrapper = document.querySelector(".site-main-nav--mobile .wp-block-navigation__responsive-container-content");

const mobileSearchBar = `<!-- Search Bar for Navigation -->
<form id="navbar_search" class="mobile-navbar-search" role="search" method="post" action="https://henryschein.webjaguar.dev/lsearch.jhtm">
    <div class="input-group">
        <span class="input-group-btn">
            <button class="btn btn-search" type="submit">
                <span class="fa fa-search"><img src="https://staging.henryscheinortho.com/wp-content/themes/HSO-Theme-2024-Production/assets/images/navigational-icons/search.png" alt="Search" width="15px" height="15px"></span>
            </button>
        </span>
        <input type="text" name="keywords" class="form-control typeahead" placeholder="Search...">
    </div>
</form>`

document.addEventListener("DOMContentLoaded", function(arg) {
    mobileNavMenuWrapper.insertAdjacentHTML("afterbegin", mobileSearchBar);
});