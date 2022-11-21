function dale(){
    let contenidoMail = document.formularioContacto.correoEmpresa.value;
    let contenidoMensaje = document.formularioContacto.mensajeEmpresa.value;
    let boton = document.formularioContacto.buttonForm;
    contiene = boton.classList.contains('incorrecto');
    if(contenidoMail&&contenidoMensaje){
        boton.setAttribute('class','');
        document.getElementById('advertenciaContacto').textContent='';
    }else{
        if(!contiene){
            boton.setAttribute('class','incorrecto');
        }else{
            boton.setAttribute('class','sigeIncorrecto');
        }
        document.getElementById('advertenciaContacto').textContent='¡Rellena los campos para calmar el botón!';
    }
}