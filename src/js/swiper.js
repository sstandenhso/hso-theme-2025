import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

function postsSwiperConfigListItems() {
    const listItems = [].slice.call(document.querySelectorAll(".posts-swiper .swiper-wrapper li"));
    listItems.forEach(item => {
        item.classList.add("swiper-slide");
    });
}

function addSwiperNav() {
    const swiperContainers = [].slice.call(document.querySelectorAll(".swiper"));

    const swiperNavigation = document.createElement("div");
    swiperNavigation.innerHTML = `
        <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    `;
    swiperContainers.forEach(swiperContainer => {
        swiperContainer.appendChild(swiperNavigation);
    });
}

addSwiperNav();
postsSwiperConfigListItems();

const swiper = new Swiper(".posts-swiper", {
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

