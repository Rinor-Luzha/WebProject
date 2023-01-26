//nav open and close
const openButton = document.querySelector(".collapse");
const closeButton = document.querySelector(".close");
const nav = document.querySelector(".nav-menu");
const navigation = document.querySelector(".navigation");

const navLeft = nav.getBoundingClientRect().left;
openButton.addEventListener("click", () => {
    navigation.classList.add("show");
    nav.classList.add("show");
    document.body.classList.add("show");
});

closeButton.addEventListener("click", () => {
    navigation.classList.remove("show");
    nav.classList.remove("show");
    document.body.classList.remove("show");
});


// dropdowns
document.addEventListener('click', (e) => {
    const dropdown = document.querySelector('#dropdown');
    if (e.target.hash === '#products') {
        dropdown.classList.toggle('active');
    } else if (e.target.closest('#dropdown')) {
        //do nothing -> inside of dropdown list
    } else {
        dropdown.classList.remove('active');
    }
})
document.addEventListener('click', (e) => {
    const dropdown = document.querySelector('#dashboard');
    if (e.target.hash === '#options') {
        dropdown.classList.toggle('active');
    } else if (e.target.closest('#dashboard')) {
        //do nothing -> inside of dropdown list
    } else {
        dropdown.classList.remove('active');
    }
})

//fix nav bar to the top
const navHeight = navigation.getBoundingClientRect().height;
window.addEventListener('scroll', () => {
    const scrollHeight = window.pageYOffset;
    if (scrollHeight > navHeight / 4) {
        navigation.classList.add('fix-nav')
    } else {
        navigation.classList.remove('fix-nav')
    }
});

//scrolling when clicking link in home
const links = [...document.querySelectorAll(".scroll-link")];
links.map((link) => {
    link.addEventListener("click", (e) => {
        e.preventDefault();

        const id = e.target.getAttribute("href").slice(1);
        console.log(id);
        const element = document.getElementById(id);
        const fixNav = navigation.classList.contains("fix-nav");
        let position = element.offsetTop - navHeight;

        if (!fixNav) {
            position = position - navHeight;
        }
        window.scrollTo({
            top: position,
            left: 0,
            behavior: 'smooth'
        });

        navigation.classList.remove("show");
        nav.classList.remove("show");
        document.body.classList.remove("show");
    });
});
