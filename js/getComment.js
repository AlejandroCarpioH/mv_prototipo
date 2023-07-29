export async function getComment({ id_video }) {

    const ruta = window.location.href.replace('index.php', `api/routes/comment.php?id_video=${id_video}`)
    const json = await fetch(ruta, {
        method: "GET",
        headers: {
            "Content-Type": "application/json"
        }
    })

    const data = await json.json()

    return data

}