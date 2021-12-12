const slider = document.getElementById('slider');
if (slider) {
    new Glide(slider, {
        type: "carousel",
        startAt: 0,
        autoplay: 5000,
        hoverpause: true,
        perView: 1,
        animationDuration: 500,
        animationTimingFunc: "linear",
    }).mount()
}
const trendingSlider = document.getElementById('trending-products-slider');
if (trendingSlider) {
    new Glide(trendingSlider, {
        type: "carousel",
        startAt: 0,
        autoplay: 5000,
        hoverpause: true,
        perView: 5,
        animationDuration: 500,
        animationTimingFunc: "linear",
        breakpoints: {
            1200: {
                perView: 3,
            },
            768: {
                perView: 2,
            },
            590: {
                perView: 1
            }
        }
    }).mount()
}
const newSlider = document.getElementById('new-products-slider');
if (newSlider) {
    new Glide(newSlider, {
        type: "carousel",
        startAt: 0,
        autoplay: 8000,
        hoverpause: true,
        perView: 5,
        animationDuration: 500,
        animationTimingFunc: "linear",
        breakpoints: {
            1200: {
                perView: 3,
            },
            768: {
                perView: 2,
            },
            590: {
                perView: 1
            }
        }
    }).mount()
}