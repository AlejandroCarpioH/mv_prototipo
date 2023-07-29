export default async function getLogin({ user, pass }) {

    const body = {
        username: user,
        password: pass
    }
    const ruta = window.location.href.replace('index.php', 'api/routes/login.php')
    // console.log(ruta)
    const ruta2 = "http://localhost/pruebaBD/MV_PROTOTIPO_2/api/routes/login.php"
    try {
        const data = await fetch(ruta, {
            method: "POST",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json; charset=UTF-8'
            },
            body: JSON.stringify(body)
        })
        const value = await data.json()
        return value
    } catch (error) {
        alert(`error en la coneccion con la base de datos ${error}`)
        window.location.reload()
    }

}
