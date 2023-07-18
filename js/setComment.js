export default function setComment({ user, id_video, comm }) {

    console.log(`este son los valores ${user} ${id_video} ${comm} `)
    const body = {
        username: user,
        comment: comm,
        id_video: id_video
    }
    fetch("http://localhost/pruebaBD/MV_PROTOTIPO_2/api/routes/comment.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(body)
    })
}