//Declaracion de constantes

const form = document.getElementById("contenido_archive")
const materia = document.getElementById("content_a_title")
const parrafo = document.getElementById("warnings")



form.addEventListener("submit", e=> {
e.preventDefault()
let warnings= ""
let entrar= false
parrafo.innerHTML = ""

//Validacion de constantes

if(materia.value.length <2){
    warnings += `Se requiere del titulo <br>`
    entrar= true
}

if(entrar){
    parrafo.innerHTML = warnings
}else{
    parrafo.innerHTML = "Registro enviado"
    form.submit();
    }



})