// First we will load all of this project's JavaScript dependencies
require('./bootstrap')

// Javascript:
import Swiper from 'swiper'

require ('swiper/dist/css/swiper.min.css')

new Swiper('#home-slider', {
    // pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 1,
    speed: 500,
    autoplay: 4000,
    effect: 'fade',
})
