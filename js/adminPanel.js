const uil = document.querySelector(".sidebar-toggle")
const navAdminPanel = document.querySelector(".nav-adminPanel")
const darkmodecheckbox = document.querySelector(".dark-mode")

const body = document.querySelector("body")
const dashboard = document.querySelector(".dashboard")

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

darkmodecheckbox.addEventListener("change", (v) => {
    body.classList.toggle("darkmode")
    dashboard.classList.toggle("darkmode")
    // console.log(v.target.checked)
})