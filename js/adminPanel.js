const uil = document.querySelector(".sidebar-toggle")
const navAdminPanel = document.querySelector(".nav-adminPanel")

window.addEventListener("resize", () => {
    if (window.innerWidth < 500 || window.innerWidth > 1000) {
        navAdminPanel.classList.remove("open")
    }
})

uil.addEventListener("click", () => {
    if (window.innerWidth > 500 && window.innerWidth < 1000) {
        navAdminPanel.classList.remove("close")
        navAdminPanel.classList.toggle("open")
    } else {
        navAdminPanel.classList.remove("open")
        navAdminPanel.classList.toggle("close")
    }
})
