const loginButton = document.querySelectorAll(".login-session");
const registrationButton = document.querySelectorAll(".registration-buttom");
const login = document.querySelector(".login");
const registration = document.querySelector(".registration");
const exitLogin = document.querySelectorAll(".exit-login");

const dialog = document.querySelector("dialog");



const lis = document.querySelectorAll(".navbar-list li")
const body = document.querySelector("body")
const nav = document.querySelector(".nav-container")

window.addEventListener("scroll", () => {
    if (window.scrollY > 5) {
        nav.classList.contains("nav-reduce") ? " " : nav.classList += " nav-reduce"
    }
    if (window.scrollY < 5) {
        nav.classList.remove("nav-reduce")
    }
})
// lis[0].classList = "decoration"
lis.forEach(li => {
    li.addEventListener("click", () => {
        lis.forEach(v => {
            v.classList.remove("decoration")
        })
        li.classList = "decoration"
    })
})

loginButton.forEach(v => {
    v.addEventListener("click", () => {
        if (dialog.contains(document.querySelector(".sessionIsStarted"))) {
            window.location.href = "pages/adminPanel.php"
            return
        }
        registration.close();
        login.showModal();
    })
})

registrationButton.forEach(v => {
    v.addEventListener("click", () => {
        login.close()
        registration.showModal();
    })
})

exitLogin.forEach(v => {
    v.addEventListener("click", () => {
        login.close()
        registration.close()
    })
})
