function validarSalon(){
	
	var codigo = document.getElementById("codigo").value;
	var estatus = document.getElementById("estatus").value;
	var capacidad = document.getElementById("capacidad").value;
	
	
	if(codigo == ""){ 
	alert("Debe ingresar el Codigo");
	document.getElementById("codigo").focus();
	return false;
	}
	if(estatus == ""){ 
	alert("Debe ingresar el Estatus");
	document.getElementById("estatus").focus();
	return false;
	}
	if(capacidad == ""){ 
	alert("Debe ingresar la Capacidad");
	document.getElementById("capacidad").focus();
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
