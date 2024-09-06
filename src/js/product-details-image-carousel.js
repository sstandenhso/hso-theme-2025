//Get the button color
const button = document.getElementById("product-detail-shop-button").firstChild;
const productColor = window.getComputedStyle(button).borderColor;

//Get the main image and update the source
    const selectedImageTarget = document.getElementById("selected-image").firstChild;

//Get the text section with left border
const borderLeft = document.querySelector(".product-detail-border-left");
//Add button color to .selected element and border-left element
borderLeft.style.borderColor = productColor;

function updateSelectedBorderColor(color) {
    const selectedSlideshowImage = getCurrentlySelectedImageElement();
    selectedSlideshowImage.style.borderColor = color;
}

updateSelectedBorderColor(productColor);

//Get the carousel images
const carouselImages = document.querySelectorAll(".slideshow-image img");
carouselImages.forEach(image => {
    image.addEventListener("click", e => {
        updateSelected(image, productColor);
    })
})

//Get Selected Image Element
function getCurrentlySelectedImageElement() {
    return document.querySelector(".selected");
}

//Click listener
function updateSelected(element, color) {
    getCurrentlySelectedImageElement().classList.remove("selected");
    element.classList.add("selected");
    element.style.borderColor = color;

    //Update main image
    const newSrc = element.src + "?t=" + new Date().getTime();

    selectedImageTarget.src = newSrc;
    selectedImageTarget.srcset = element.srcset;
}

window.addEventListener("load", e => {
    const newSrc = getCurrentlySelectedImageElement().firstChild.src+ "?t=" + new Date().getTime();

    selectedImageTarget.src = newSrc;
})