//Declaracion de constantes

const form = document.getElementById("contenido_text")
const title = document.getElementById("content_p_title")
const content = document.getElementById("content_p_content")
const parrafo = document.getElementById("warnings")



form.addEventListener("submit", e=> {
e.preventDefault()
let warnings= ""
let entrar= false
parrafo.innerHTML = ""

//Validacion de constantes

if(title.value.length <2){
    warnings += `Se requiere del titulo <br>`
    entrar= true
}

if(content.value.length <2){
    warnings += `Se requiere del contenido <br>`
    entrar= true
}

if(entrar){
    parrafo.innerHTML = warnings
}else{
    parrafo.innerHTML = "Registro enviado"
    form.submit();
    }



})