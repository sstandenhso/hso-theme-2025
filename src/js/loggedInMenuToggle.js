function getCookie(name) {
    const cookieString = document.cookie;
    const cookies = cookieString.split(';');
    for (let i = 0; i < cookies.length; i++) {
      let cookie = cookies[i].trim();
      if (cookie.startsWith(name + '=')) {
        return cookie.substring(name.length + 1, cookie.length);
      }
    }
    return null;
  }

document.addEventListener("DOMContentLoaded", event => {
    //Find Cookie if exists
    let isUserLoggedIn = getCookie("customerLoggedInLayout=true");

    //Get "My Account" Navigation Dropdowns Desktop
    const accountDropdownAuthenticated = document.querySelectorAll(".account-dropdown-authenticated");
    const accountDropdownUnauthenticated = document.querySelectorAll(".account-dropdown-unauthenticated");

    isUserLoggedIn ? console.log('User logged in.') : console.log("User not authenticated.");

    if (isUserLoggedIn) {
      //Show Authenticated Dropdowns
      accountDropdownAuthenticated.forEach(element => {
        element.style.display = "block";
      });

      //Hide Unauthenticated Dropdowns
      accountDropdownUnauthenticated.forEach(element => {
        element.style.display = "none";
      });

    } else {
      //Show Unauthenticated Dropdowns
      accountDropdownUnauthenticated.forEach(element => {
        element.style.display = "block";
      });

      //Hide Authenticated Dropdowns
      accountDropdownAuthenticated.forEach(element => {
        element.style.display = "none";
      });

    }
})