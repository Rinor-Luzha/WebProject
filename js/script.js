document.addEventListener('click', e => {
    const isDropDownButton = e.target.matches("[nav-link]");
    if (!isDropDownButton) return
    if (isDropDownButton) {
        currentDropDown = e.target.closest('[nav-link]');
        currentDropDown.classList.toggle('active');
    }
    document.querySelectorAll("[nav-link].active").forEach(dropdown => {
        if (dropdown === currentDropDown) return
        dropdown.classList.remove('active')
    })
})