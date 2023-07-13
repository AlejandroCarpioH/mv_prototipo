export default function getApiVimeo({ limit }) {
    const token = "c3f7f163af7c0c6e551889353efd682f"
    return fetch(`https://api.vimeo.com/me/videos?per_page=${limit}`, {
        method: "GET",
        headers: {
            'Authorization': 'Bearer ' + token,
            'Content-Type': 'application/json'
        }

    }).then(json => json.json()
        .then(data => {
            return data

        }))
}

