export default async function setRegistration({ user, pass, email }) {

    const body = {
        username: user,
        password: pass,
        email: email
    }

    const response = await fetch("http://localhost/pruebaBD/MV_PROTOTIPO_2/api/routes/registration.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(body)
    })
    const data = await response.json()
    return data
}
