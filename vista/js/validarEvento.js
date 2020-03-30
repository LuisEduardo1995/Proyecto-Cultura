function validarEvento(){
	var tipoEvento = document.getElementById("tipoEvento").value;
	var nombre = document.getElementById("nombre").value;
	var estatus = document.getElementById("estatus").value;
	var feinicio = document.getElementById("feinicio").value;
	var fecierre = document.getElementById("fecierre").value;
	var hoinicio = document.getElementById("hoinicio").value;
	var hocierre = document.getElementById("hocierre").value;
	if(tipoEvento == ""){ 
	alert("Debe ingresar el tipo de evento");
	document.getElementById("tipoEvento").focus();
	return false;
	}
	if(tipoEvento == "ESPECIAL"){ 
	var capacidad1 = document.getElementById("capacidad1").value;
		if(capacidad1 == ""){ 
		alert("Debe ingresar la capacidad del evento");
		document.getElementById("capacidad1").focus();
		return false;
		}
	}
	if(nombre == ""){ 
	alert("Debe ingresar el nombre del Evento");
	document.getElementById("nombre").focus();
	return false;
	}
	if(estatus == ""){ 
	alert("Debe ingresar el Estatus");
	document.getElementById("estatus").focus();
	return false;
	}
	if(feinicio == ""){ 
	alert("Debe ingresar la fecha de Inicio");
	document.getElementById("feinicio").focus();
	return false;
	}
	if(fecierre == ""){ 
	alert("Debe ingresar la fecha de Cierre");
	document.getElementById("correo").focus();
	return false;
	}
	
	if(hoinicio == ""){ 
	alert("Debe ingresar la hora de Inicio");
	document.getElementById("hoinicio").focus();
	return false;
	}
	if(hocierre == ""){ 
	alert("Debe ingresar la hora de Cierre");
	document.getElementById("hocierre").focus();
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
        window.open(URL, 'Modificar Evento', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=500,height=700,left = 390,top = 50');
    }