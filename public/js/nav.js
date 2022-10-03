let sidebar = document.querySelector('.menu-sidebar')

function openMenu(event) {
    event.preventDefault()
    this.addEventListener('click', function () {
        sidebar.style.width = "280px"
    })
}

function closeMenu(event) {
    event.preventDefault()
    this.addEventListener('click', function () {
        sidebar.style.width = "0px"
    })
}