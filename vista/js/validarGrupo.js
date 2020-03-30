function validarGrupo(){
	
	var nucleo = document.getElementById("nucleo").value;
	var expresion = document.getElementById("expresionCurso").value;
	var profesor = document.getElementById("profesor").value;
	var capacidad = document.getElementById("capacidad").value;
	
	if(nucleo == ""){ 
	alert("Debe ingresar el Nucleo");
	document.getElementById("nucleo").focus();
	return false;
	}
	if(expresion == ""){ 
	alert("Debe ingresar el Expresion");
	document.getElementById("expresionCurso").focus();
	return false;
	}	
	if(profesor == ""){ 
	alert("Debe ingresar el Profesor");
	document.getElementById("profesor").focus();
	return false;
	}
	if(capacidad == ""){ 
	alert("Debe ingresar la capacidad");
	document.getElementById("capacidad").focus();
	return false;
	}
	
	
	
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


function expresion(){
	var nucleo = document.getElementById("nucleo").value;
	
	 switch(nucleo){
		 case 'MUSICA':
		 document.getElementById("expresionMusical").style.display = "block";
		 document.getElementById("expresionCine").style.display = "none";
		 document.getElementById("expresionArtesEsc").style.display = "none";
		 document.getElementById("expresionPlastica").style.display = "none";
		 document.getElementById("expresionArtesania").style.display = "none";
		 break;
		 case 'CINEMATOGRAFIA':
		 document.getElementById("expresionMusical").style.display = "none";
		 document.getElementById("expresionCine").style.display = "block";
		 document.getElementById("expresionArtesEsc").style.display = "none";
		 document.getElementById("expresionPlastica").style.display = "none";
		 document.getElementById("expresionArtesania").style.display = "none";
		 break;
		 case 'ARTES ESCENICAS':
		 document.getElementById("expresionCine").style.display = "none";
		 document.getElementById("expresionMusical").style.display = "none";
		 document.getElementById("expresionArtesEsc").style.display = "block";
		 document.getElementById("expresionPlastica").style.display = "none";
		 document.getElementById("expresionArtesania").style.display = "none";
		 break;
		 case 'PLASTICA':
		 document.getElementById("expresionCine").style.display = "none";
		 document.getElementById("expresionMusical").style.display = "none";
		 document.getElementById("expresionArtesEsc").style.display = "none";
		 document.getElementById("expresionPlastica").style.display = "block";
		 document.getElementById("expresionArtesania").style.display = "none";
		 break;
		 case 'ARTESANIA':
		 document.getElementById("expresionCine").style.display = "none";
		 document.getElementById("expresionMusical").style.display = "none";
		 document.getElementById("expresionArtesEsc").style.display = "none";
		 document.getElementById("expresionPlastica").style.display = "none";
		 document.getElementById("expresionArtesania").style.display = "block";
		 break;
		 default:
		 document.getElementById("expresionCine").style.display = "none";
		 document.getElementById("expresionMusical").style.display = "none";
		 document.getElementById("expresionArtesEsc").style.display = "none";
		 document.getElementById("expresionPlastica").style.display = "none";
		 document.getElementById("expresionArtesania").style.display = "none";
		 break;
	}
	 
}