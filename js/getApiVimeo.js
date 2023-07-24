export default async function getApiVimeo({ limit }) {
    const token = "c3f7f163af7c0c6e551889353efd682f"
    const json = await fetch(`https://api.vimeo.com/me/videos?per_page=${limit}`, {
        method: "GET",
        headers: {
            'Authorization': 'Bearer ' + token,
            'Content-Type': 'application/json'
        }
    })
    const data = await json.json()
    return data
}

