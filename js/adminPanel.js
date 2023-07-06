const uil = document.querySelector(".sidebar-toggle")
const bodyAdminPanel = document.querySelector(".body-adminPanel")
uil.addEventListener("click", () => {
    // alert("asdas")
    if (window.innerWidth > 800) {

        bodyAdminPanel.classList.toggle("nav-adminPanelHidden")
    } else {
        // alert("asdas")
        //bodyAdminPanel.classList.remove("nav-adminPanelHidden")
        bodyAdminPanel.classList.toggle("nav-adminPanelHiddenMobil")
    }
})
window.addEventListener("resize", (v) => {

    console.log()
})