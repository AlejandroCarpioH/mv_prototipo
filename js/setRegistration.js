export default async function setRegistration({ user, pass, email }) {

    const body = {
        username: user,
        password: pass,
        email: email
    }

    const ruta = window.location.href.replace('index.php', 'api/routes/registration.php')

    const response = await fetch(ruta, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(body)
    })
    const data = await response.json()
    return data
}
