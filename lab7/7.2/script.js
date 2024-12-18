let tabButton = document.querySelector('.tabButton'),
    tabContent = document.querySelector('.section-subheader-container-tabs-button_nav-content'),
    tabDarkBg = document.querySelector('.section-subheader-container-tabs-button_nav-darkBg');

tabButton.addEventListener('click', () => {
    tabContent.style.display = "block";
    tabDarkBg.style.display = "block";

    tabDarkBg.style.animationName = 'fade-darken-bg'
    tabDarkBg.style.animationTimingFunction = 'ease'
    tabDarkBg.style.animationDuration = '0.5s'

    tabContent.style.animationName = 'fade'
    tabContent.style.animationTimingFunction = 'ease'
    tabContent.style.animationDuration = '0.5s'
})

tabDarkBg.addEventListener('click', () => {
    tabContent.style.display = "none";
    tabDarkBg.style.display = "none";
})