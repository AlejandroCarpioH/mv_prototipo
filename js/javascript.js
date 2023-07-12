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


const root = document.querySelector(".root")
const rootContainer = document.querySelector(".root-container")
let obser = document.querySelector(".view")
console.log(root.lastElementChild)
const token = "c3f7f163af7c0c6e551889353efd682f"

// const imgs = document.querySelectorAll(".root-container .img-container")
// console.log(imgs.length)
// imgs.forEach(v => {

//     v.addEventListener("click", (ele) => {
//         console.log()
//         var iframe = document.createElement('iframe');
//         iframe.src = "https://www.youtube.com/embed/D4LOq1bFTxE?autoplay=1"
//         iframe.width = '560';
//         iframe.height = '315';
//         iframe.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
//         iframe.allowFullscreen = true;


//         v.replaceChild(iframe, ele.target)
//     })
// })



const apivideo = () => {

    const divVideo = document.querySelector(".root > div > div")
    let limit = 0
    console.log(divVideo.id === "login")
    if (divVideo.id === "login") {
        limit = 20
    } else {
        limit = 1
    }

    fetch(`https://api.vimeo.com/me/videos?per_page=${limit}`, {
        method: "GET",
        headers: {
            'Authorization': 'Bearer ' + token,
            'Content-Type': 'application/json'
        }
    }).then(json => json.json()
        .then(data => {
            data['data'].map(value => {

                const { html } = value['embed']
                const { player_embed_url } = value
                console.log(player_embed_url)
                const { sizes } = value['pictures']
                const urlImg = sizes[5]['link_with_play_button']
                const img = document.createElement('img')
                const div = document.createElement("div")
                div.classList = "video-container"
                img.src = urlImg


                // iframe
                var iframe = document.createElement('iframe');
                iframe.src = `${player_embed_url}&autoplay=1`
                iframe.width = '560';
                iframe.height = '315';
                iframe.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
                iframe.allowFullscreen = true;


                div.addEventListener("click", (e) => {
                    div.replaceChild(iframe, e.target)
                })

                div.appendChild(img)
                rootContainer.appendChild(div)


            })

        }))






    // for (let index = 0; index < 5; index++) {

    //     rootContainer.innerHTML += '<iframe width="560" height="315" src="https://www.youtube.com/embed/D4LOq1bFTxE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'

    // }
    // console.log(document.querySelectorAll("section iframe").length)
    // obser = document.querySelector("section img:nth-last-child()")

    // fetch("https://api.vimeo.com/me/videos", {
    //     method: "GET",
    //     headers: {
    //         'Authorization': 'Bearer ' + token,
    //         'Content-Type': 'application/json'
    //     }
    // }).then(json => json.json()
    //     .then(data => {
    //         console.log(data.data)
    //         // data['data'].map(v => {
    //         //     const { html } = v['embed']
    //         //     root.innerHTML += html
    //         // })
    //     }))
}

const videoContainer = document.querySelectorAll(".video-container")

const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
        apivideo()
        console.log("se llamo")
    }
}, {
    root: root,
    rootMargin: "10px"
})

observer.observe(obser)



//
// var iframe = document.createElement('iframe');
// iframe.src = 'https://www.youtube.com/embed/';
// iframe.width = '560';
// iframe.height = '315';
// iframe.frameBorder = '0';
// iframe.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
// iframe.allowFullscreen = true;