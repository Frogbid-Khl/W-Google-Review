$('#owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    items: 2,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        1000: {
            items: 2
        },
    },
})


let SwiperTop = new Swiper('.swiper--top', {
    spaceBetween: 0,
    centeredSlides: true,
    speed: 6000,
    autoplay: {
        delay: 1,
    },
    loop: true,
    slidesPerView:'auto',
    allowTouchMove: false,
    disableOnInteraction: true
});

let SwiperBottom = new Swiper('.swiper--bottom', {
    spaceBetween: 0,
    centeredSlides: true,
    speed: 6000,
    autoplay: {
        delay: 1,
        reverseDirection: true
    },
    loop: true,
    loopedSlides: 15,
    slidesPerView:'auto',
    allowTouchMove: false,
    disableOnInteraction: true
});
