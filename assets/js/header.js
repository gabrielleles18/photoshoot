import $ from 'jquery';
import Swiper from 'swiper';

export default function () {
    $(document).ready(function () {
        new Swiper('.banners .swiper .swiper-container', {
            navigation: {
                clickable: true,
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            spaceBetween: 90,
            effect: 'fade',
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
        });
    });

    $('.container .search button').click(function (e) {
        const search = $(this).parent();
        if ($(this).hasClass('open-search')) {
            e.preventDefault();

            search.addClass('border');
            $(this).removeClass('open-search');
            search.find('input').addClass('ativar').focus();
        }
    });
}
