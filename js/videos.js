import getApiVimeo from "./getApiVimeo.js";

// const root = document.querySelector(".root")
const videos = document.querySelector(".videos")
let observer = document.querySelector(".view")
const videoPlay = document.querySelector(".video-play")
// console.log(root.lastElementChild)


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



const getVideos = () => {

    // const divVideo = document.querySelector(".root > div > div")
    // let limit = 0
    // console.log(divVideo.id === "login")
    // if (divVideo.id === "login") {
    //     limit = 20
    // } else {
    //     limit = 1
    // }
    // -----
    const limit = 2
    getApiVimeo({ limit }).then(data => {
        console.log(data)
        data['data'].map(value => {

            const { html } = value['embed']
            const { name } = value
            const { player_embed_url } = value
            console.log(name)
            const { sizes } = value['pictures']
            const urlImg = sizes[5]['link_with_play_button']
            const li = document.createElement("li")
            li.innerHTML = name
            const div = document.createElement("div")
            const img = document.createElement('img')
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
                const videosContainer = document.querySelectorAll(".videos .video-container")
                videosContainer.forEach(v => {
                    v.classList.contains("playing") ? v.classList.remove("playing") : ""
                })
                div.classList.toggle("playing")
                // div.replaceChild(iframe, e.target)
                videoPlay.innerHTML = ""
                videoPlay.appendChild(iframe)
                const li = document.createElement("li")
                li.innerHTML = name
                videoPlay.appendChild(li)

            })

            div.appendChild(img)
            div.appendChild(li)
            videos.appendChild(div)


        })
    })

}

getVideos()
getVideos()
getVideos()
getVideos()
getVideos()
getVideos()
getVideos()
getVideos()
console.log("asas")