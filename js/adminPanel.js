const uil = document.querySelector(".sidebar-toggle")
const navAdminPanel = document.querySelector(".nav-adminPanel")

uil.addEventListener("click", () => {
    if (window.innerWidth > 500 && window.innerWidth < 1000) {
        navAdminPanel.classList.remove("close")
        navAdminPanel.classList.toggle("open")
    } else {
        navAdminPanel.classList.remove("open")
        navAdminPanel.classList.toggle("close")
    }
    // if (window.innerWidth > 1000) {
    //     // desktop

    //     dashboard.classList.remove("dashboard-open")
    //     navAdminPanel.classList.remove("nav-adminPanelOpen")
    //     dashboard.classList.remove("dashboard-reduce-mobile")
    //     navAdminPanel.classList.remove("nav-adminPanelHiddenMobil")

    //     dashboard.classList.toggle("dashboard-reduce")
    //     navAdminPanel.classList.toggle("nav-adminPanelHidden")
    // } else if (window.innerWidth < 500) {
    //     // mobile
    //     dashboard.classList.remove("dashboard-open")
    //     navAdminPanel.classList.remove("nav-adminPanelOpen")
    //     dashboard.classList.remove("dashboard-reduce")
    //     navAdminPanel.classList.remove("nav-adminPanelHidden")

    //     dashboard.classList.toggle("dashboard-reduce-mobile")
    //     navAdminPanel.classList.toggle("nav-adminPanelHiddenMobil")
    // }
    // else {
    //     dashboard.classList.remove("dashboard-reduce")
    //     navAdminPanel.classList.remove("nav-adminPanelHidden")
    //     dashboard.classList.remove("dashboard-reduce-mobile")
    //     navAdminPanel.classList.remove("nav-adminPanelHiddenMobil")
    //     dashboard.classList.toggle("dashboard-open")
    //     navAdminPanel.classList.toggle("nav-adminPanelOpen")

    // }
})
window.addEventListener("resize", (v) => {

    console.log()
})