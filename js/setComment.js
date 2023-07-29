import { handleComment } from "./videos.js"
export default async function setComment({ user, id_video, comm }) {

    // console.log(`este son los valores ${user} ${id_video} ${comm} `)
    const body = {
        username: user,
        comment: comm,
        id_video: id_video
    }
    // const ruta = window.location.href.replace('index.php', 'api/routes/comment.php')
    const ruta = window.location.href.replace('pages/videos.php', `api/routes/comment.php`)
    const response = await fetch(ruta, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(body)
    })
    // console.log(response)
    handleComment({ id_video })

}