import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

function postsSwiperConfigListItems() {
    const listItems = [].slice.call(document.querySelectorAll(".posts-swiper .swiper-wrapper li"));
    listItems.forEach(item => {
        item.classList.add("swiper-slide");
    });
}

function productDetailsSwiperConfigListItems() {
    const listItems = [].slice.call(document.querySelectorAll(".product-details-swiper .swiper-wrapper .slideshow-image"));
    listItems.forEach(item => {
        item.classList.add("swiper-slide");
    });
}

function addSwiperNav() {
    const swiperContainers = document.querySelectorAll(".swiper");

    const swiperNavigation = `
        <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    `;
    swiperContainers.forEach(swiperContainer => {
        // swiperContainer.appendChild(swiperNavigation);
        swiperContainer.insertAdjacentHTML("afterbegin", swiperNavigation);
    });
}

addSwiperNav();
postsSwiperConfigListItems();
productDetailsSwiperConfigListItems();

const postsSwiper = new Swiper(".posts-swiper", {
    modules: [Navigation],
    enabled: true,
    slidesPerView: 1,
    spaceBetween: 20,
    cssMode: false,
    breakpoints: {
        600: {
            enabled: false
        }
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const productDetailsSwiper = new Swiper(".product-details-swiper", {
    modules: [Navigation],
    enabled: true,
    slidesPerView: 3,
    spaceBetween: 5,
    cssMode: false,
    setWrapperSize: false,
    breakpoints: {
        700: {
            
            // setWrapperSize: true,
            slidesPerView: 5,
            spaceBetween: 10
        }
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
