import getLogin from './getLogin.js'

const loginButtom = document.querySelector(".form-login input[type='buttom']")

loginButtom.addEventListener('click', () => {
    const form = document.querySelector(".form-login")
    const formchildren = form.children
    console.log(formchildren)
    const user = form.elements['username'].value
    const pass = form.elements['password'].value
    getLogin({ user, pass })
        .then(response => {
            console.log(response)
            const { log, username, type } = response
            const values = {
                log: log,
                user: username,
                type: type
            }
            localStorage.setItem('userValue', JSON.stringify(values))
            console.log(log, username, type)
        })

})