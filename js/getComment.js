export async function getComment({ id_video }) {

    const json = await fetch(`http://localhost/PRUEBABD/MV_PROTOTIPO_2/api/routes/comment.php?id_video=${id_video}`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json"
        }
    })

    const data = await json.json()

    return data

}