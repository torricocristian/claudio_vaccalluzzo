//inicializar swiper testimonios
var swiper = new Swiper("#testimonios .mySwiper", {
    pagination: {
        clickable: true,
        el: '#testimonios .swiper-pagination',
        type: 'bullets',
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true

});