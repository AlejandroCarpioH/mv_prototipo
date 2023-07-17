import getLogin from './getLogin.js'

const loginButtom = document.querySelector(".form-login input[type='buttom']")

const isLogged = JSON.parse(localStorage.getItem('userValue'))?.log
console.log(isLogged)

loginButtom.addEventListener('click', () => {
    const form = document.querySelector(".form-login")
    const formchildren = []
    for (let index = 0; index < form.children.length; index++) {
        formchildren.push(form.children[index])
    }

    const user = form.elements['username'].value
    const pass = form.elements['password'].value
    form.innerHTML = "cargando..."
    form.classList.toggle("loading-animate")
    getLogin({ user, pass })
        .then(response => {
            const { log, username, type } = response
            const values = {
                log: log,
                user: username,
                type: type
            }
            setTimeout(() => {
                form.innerHTML = ""
                form.classList.toggle("loading-animate")
                formchildren.map(childen => {
                    form.append(childen)
                })
                location.reload()
            }, 3000)
            localStorage.setItem('userValue', JSON.stringify(values))
            console.log(log, username, type)
        })

})

if (isLogged) {
    const headerActions = document.querySelector(".login-panel")
    const sessionContainer = document.querySelector(".session-container")
    const sessionWelcome = document.querySelector(".session-container .session p")
    headerActions.classList.toggle("login-panel-hidden")
    sessionContainer.classList.toggle("session-hidden")
    sessionWelcome.innerHTML += JSON.parse(localStorage.getItem("userValue")).user
}

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
        //console.log(JSON.parse(localStorage.getItem("userValue")))
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