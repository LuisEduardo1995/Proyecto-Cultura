function validarusuario(){
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var cedula = document.getElementById("cedula").value;
	var correo = document.getElementById("correo").value;
	var edad = document.getElementById("edad").value;
	var tipo_usuario = document.getElementById("tipo_usuario").value;
	var clave = document.getElementById("clave").value;
	var clave1 = document.getElementById("clave1").value;
	if(nombre == ""){ 
	alert("Debe ingresar el primer nombre");
	document.getElementById("nombre").focus();
	return false;
	}
	if(apellido == ""){ 
	alert("Debe ingresar el primer apellido");
	document.getElementById("apellido").focus();
	return false;
	}
	if(cedula == ""){ 
	alert("Debe ingresar la cedula");
	document.getElementById("cedula").focus();
	return false;
	}
	if(correo == ""){ 
	alert("Debe ingresar el correo");
	document.getElementById("correo").focus();
	return false;
	}
	re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
	if(!re.exec(correo)){
		alert(' El correo no es valido');
		return false;
	}
	if(edad == ""){ 
	alert("Debe ingresar la edad");
	document.getElementById("edad").focus();
	return false;
	}
	if(tipo_usuario == ""){ 
	alert("Debe ingresar el tipo de usuario");
	document.getElementById("tipo_usuario").focus();
	return false;
	}
	if(clave == ""){ 
	alert("Debe ingresar la clave");
	document.getElementById("clave").focus();
	return false;
	}
	if(clave != clave1){ 
	alert("Las clave deben ser iguales");
	document.getElementById("clave").focus();
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
	
function confirmar()
          {
             if(confirm('¿Estas seguro que desea eliminar el registro?'))
		return true;
	else
		return false;
          }

function popUp(URL) {
        window.open(URL, 'Modificar Usuario', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=500,height=700,left = 390,top = 50');
    }
