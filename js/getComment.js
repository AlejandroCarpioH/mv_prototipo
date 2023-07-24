export function getComment({ id_video }) {

    return fetch(`http://localhost/PRUEBABD/MV_PROTOTIPO_2/api/routes/comment.php?id_video=${id_video}`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json"
        }
    })
        .then(data => data.json())
        .then(value => {
            return value
        })

}