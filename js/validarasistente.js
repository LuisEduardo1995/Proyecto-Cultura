function validarUsuario(){
	var cedula = document.getElementById("cedula").value;
	var nombre1 = document.getElementById("nombre1").value;
	var apellido1 = document.getElementById("apellido1").value;
	var usuario = document.getElementById("usuario").value;
	var clave = document.getElementById("password1").value;
	var clave1 = document.getElementById("password2").value;
	if(cedula == ""){ 
	alert("Debe ingresar la cedula");
	document.getElementById("cedula").focus();2e
	return false;
	}
	if(nombre1 == ""){ 
	alert("Debe ingresar el primer nombre");
	document.getElementById("nombre1").focus();
	return false;
	}
	if(apellido1 == ""){ 
	alert("Debe ingresar el primer apellido");
	document.getElementById("apellido1").focus();
	return false;
	}
	if(usuario == ""){ 
	alert("Debe ingresar el usuario");
	document.getElementById("usuario").focus();
	return false;
	}
	if(clave == ""){ 
	alert("Debe ingresar la clave");
	document.getElementById("password1").focus();
	return false;
	}
	if(clave1 == ""){ 
	alert("Debe ingresar la confirmacion de la clave");
	document.getElementById("password2").focus();
	return false;
	}
	if (clave != clave1){
		  alert("Las claves deben ser iguales");
	       return false;
	}
	
}
function isNumberKey(evt)
          {
             var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
     
             return true;
          }
function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
	function validarConsultaUsuario(){
	var cedula = document.getElementById("cedula").value;
	if(cedula == ""){ 
	alert("Debe ingresar la cedula");
	document.getElementById("cedula").focus();
	return false;
	}	
}