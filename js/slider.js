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