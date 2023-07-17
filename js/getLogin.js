export default function getLogin({ user, pass }) {

    const body = {
        username: user,
        password: pass
    }

    return fetch("http://localhost/pruebaBD/MV_PROTOTIPO_2/api/routes/login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(body)
    })
        .then(data => data.json())
        .then(value => {
            return value
        })
}
