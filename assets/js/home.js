import $ from 'jquery';
import Swiper from 'swiper';

export default function () {
    $(document).ready(function () {
        new Swiper('.category .swiper-container', {
            slidesPerView: 4,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true,
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
        });

        new Swiper('.feedback .container .swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            observer: true,
            observeParents: true,
        });
    });
}
