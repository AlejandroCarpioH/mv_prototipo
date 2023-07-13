

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



// test lazy scroll



// const videoContainer = document.querySelectorAll(".video-container")

// const observer = new IntersectionObserver((entries) => {
//     if (entries[0].isIntersecting) {
//         apivideo()
//         console.log("se llamo")
//     }
// }, {
//     root: root,
//     rootMargin: "10px"
// })

// observer.observe(observer)



//
// var iframe = document.createElement('iframe');
// iframe.src = 'https://www.youtube.com/embed/';
// iframe.width = '560';
// iframe.height = '315';
// iframe.frameBorder = '0';
// iframe.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
// iframe.allowFullscreen = true;