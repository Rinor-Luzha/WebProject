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


// dropdown
document.addEventListener('click', e => {
    const isDropDownButton = e.target.matches("[dropdown-button]");
    if (!isDropDownButton && e.target.closest('[data-dropdown]') != null) return
    let currentDropDown;
    if (isDropDownButton) {
        currentDropDown = e.target.closest('[data-dropdown]');
        currentDropDown.classList.toggle('active');
    }
    document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
        if (dropdown === currentDropDown) return
        dropdown.classList.remove('active')
    })
})
//fix nav bar to the top
const navBar = document.querySelector('.navigation');
const navHeight = navBar.getBoundingClientRect().height;
window.addEventListener('scroll', () => {
    const scrollHeight = window.pageYOffset;
    if (scrollHeight > navHeight) {
        navBar.classList.add('fix-nav')
    } else {
        navBar.classList.remove('fix-nav')
    }
});