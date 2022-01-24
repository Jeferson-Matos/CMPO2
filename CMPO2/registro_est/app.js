//Declaracion de constantes

const form = document.getElementById("registro_est_form")
const name_p = document.getElementById("user_name_p")
const name_s = document.getElementById("user_name_s")
const lastname_p = document.getElementById("user_lastname_p")
const lastname_s = document.getElementById("user_lastname_s")
const cedula = document.getElementById("user_cedula")
const phone = document.getElementById("user_phone")
const grade = document.getElementById("user_grade")
const email = document.getElementById("user_email")
const passwork = document.getElementById("user_passwork")
const confirm_pass = document.getElementById("confirm_password")
const parrafo = document.getElementById("warnings")



form.addEventListener("submit", e=> {
e.preventDefault()
let warnings= ""
let entrar= false
let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
parrafo.innerHTML = ""

//Validacion de constantes

if(name_p.value.length <2){
    warnings += `El primer nombre ingresado no es valido <br>`
    entrar= true
}

if(name_s.value.length <2){
    warnings += `El segundo nombre ingresado no es valido <br>`
    entrar= true
}

if(lastname_p.value.length <2){
    warnings += `El primer apellido ingresado no es valido <br>`
    entrar= true
}

if(lastname_p.value.length <2){
    warnings += `El segundo apellido ingresado no es valido <br>`
    entrar= true
}

if(!regexEmail.test (email.value)){
    warnings += `El correo electronico no es valido <br>`
    entrar= true
}

if(grade.value <1 || grade.value >11){
    warnings += `El grado del estudiante esta fuera de rango <br>`
    entrar= true
}

if(passwork.value.length <8){
    warnings += `contraseña debe contener como minimo 8 caracteres <br>`
    entrar= true
}

if(confirm_pass.value != passwork.value){
    warnings += `contraseña ingresada no coincide <br>`
    entrar= true
}

if(phone.value.length <1){
    warnings += `El numero de telefono no es valido <br>`
    entrar= true
}

if(entrar){
    parrafo.innerHTML = warnings
}else{
    parrafo.innerHTML = "Registro enviado"
    form.submit();
    }



})