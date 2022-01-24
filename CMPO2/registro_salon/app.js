//Declaracion de constantes

const form = document.getElementById("registro_salon")
const materia = document.getElementById("materia")
const sub_title = document.getElementById("sub_title")
const aula_type = document.getElementById("aula_type")
const aula_grade = document.getElementById("aula_grade")
const aula_docente = document.getElementById("aula_docente")
const parrafo = document.getElementById("warnings")



form.addEventListener("submit", e=> {
e.preventDefault()
let warnings= ""
let entrar= false
parrafo.innerHTML = ""

//Validacion de constantes

if(materia.value.length <2){
    warnings += `La materia ingresada no es valida <br>`
    entrar= true
}

if(sub_title.value.length <2){
    warnings += `El subtitulo ingresado no es valido <br>`
    entrar= true
}

if(aula_type.value = "Primaria"){
    if(aula_grade.value > 6 || aula_grade.value < 1){
    warnings += `Primaria solo permite hasta sexto grado <br>`
    entrar= true
}}

if(aula_type.value = "Secundaria"){
    if(aula_grade.value > 5 || aula_grade.value < 1){
    warnings += `Secundaria solo permite hasta quinto año <br>`
    entrar= true
}}

if(entrar){
    parrafo.innerHTML = warnings
}else{
    parrafo.innerHTML = "Registro enviado"
    form.submit();
    }



})