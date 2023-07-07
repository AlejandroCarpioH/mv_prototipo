const uil = document.querySelector(".sidebar-toggle")
const bodyAdminPanel = document.querySelector(".body-adminPanel")
const dashboard = document.querySelector(".dashboard")
uil.addEventListener("click", () => {
    // alert("asdas")
    if (window.innerWidth > 800) {

        dashboard.classList.toggle("dashboard-reduce")
        bodyAdminPanel.classList.toggle("nav-adminPanelHidden")
    } else {
        // alert("asdas")
        //bodyAdminPanel.classList.remove("nav-adminPanelHidden")
        dashboard.classList.toggle("dashboard-reduce-mobile")
        bodyAdminPanel.classList.toggle("nav-adminPanelHiddenMobil")
    }
})
window.addEventListener("resize", (v) => {

    console.log()
})