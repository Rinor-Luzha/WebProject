const slider = document.getElementById('slider');
if (slider) {
    new Glide(slider, {
        type: "carousel",
        startAt: 0,
        autoPlay: true,
        hoverpause: true,
        perView: 1,
        animationDuration: 300,
        animationTimingFunc: "linear",
    }).mount()
}