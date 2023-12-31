import getLogin from './getLogin.js'
import setRegistration from './setRegistration.js'

const isLogged = JSON.parse(localStorage.getItem('userValue'))?.log

if (JSON.parse(localStorage.getItem('userValue'))?.type === 'admin') {
    const adminPaenl = document.querySelector(".adminpanel")

    adminPaenl.classList.toggle("isAdmin")
}

if (isLogged) {
    const headerActions = document.querySelector(".login-panel")
    const sessionContainer = document.querySelector(".session-container")
    const sessionWelcome = document.querySelector(".session-container .session p")
    const containerLink = document.querySelector("section .root-container")

    containerLink.classList.toggle('hidden')
    headerActions.classList.toggle("login-panel-hidden")
    sessionContainer.classList.toggle("session-hidden")
    sessionWelcome.innerHTML += JSON.parse(localStorage.getItem("userValue")).user
}
const loginButtom = document.querySelector(".form-login input[type='submit']")
console.log(isLogged)

// login
loginButtom.addEventListener('click', (e) => {
    e.preventDefault()
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
            if (response.log) {

                const { log, username, type } = response
                const values = {
                    log: log,
                    user: username,
                    type: type
                }

                form.innerHTML = ""
                form.classList.toggle("loading-animate")
                formchildren.map(childen => {
                    form.append(childen)
                })
                const ruta = window.location.href.replace('index.php', 'pages/adminPanel.php')
                type === 'admin' ? location.href = ruta : location.reload()
                // location.reload()

                localStorage.setItem('userValue', JSON.stringify(values))
                console.log(log, username, type)
            } else {
                alert(response.message)
                location.reload()
            }
        })
})

//registration

const registrationButtom = document.querySelector(".form-reg .login-button")

registrationButtom.addEventListener('click', (e) => {
    e.preventDefault()

    const form = document.querySelector(".form-reg")
    const formchildren = []
    for (let index = 0; index < form.children.length; index++) {
        formchildren.push(form.children[index])
    }

    const user = form.elements['username'].value
    const pass = form.elements['password'].value
    const email = form.elements['email'].value
    form.innerHTML = "cargando..."
    form.classList.toggle("loading-animate")

    setRegistration({ user, pass, email })
        .then(res => {
            const { response, message } = res


            form.innerHTML = ""
            form.classList.toggle("loading-animate")
            formchildren.map(childen => {
                form.append(childen)
            })
            alert(message)

        })


})

// cerrar session

const logOutSession = document.querySelector(".logOutSession")

logOutSession.addEventListener('click', () => {

    localStorage.clear()
    location.reload()
})

// 


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