let nav_buttons = document.getElementsByClassName('mobile-nav-button')

for (let i = 0; i < nav_buttons.length; i++) {
    nav_buttons[i].addEventListener('click', function () {
        let menu = document.getElementById('mobile-menu')
        let overlay = document.getElementById('mobile-menu-overlay')
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden')
            overlay.classList.remove('hidden')
            document.body.classList.add('overflow-hidden')
        } else {
            menu.classList.add('hidden')
            overlay.classList.add('hidden')
            document.body.classList.remove('overflow-hidden')
        }
    })
}
