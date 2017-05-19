$(function(){
	$(".modal").modal();
	$("#m1").click();
	$("#addMoneda").click(function(){
		deadclear('moneda');
	});
	$("script").each(function(){
		$(this).remove();
	});
});


function validar (varreglo,vmodulo) {
	
	var salida = {}
	switch(vmodulo['modulo']) {
		
		default:
			return 'Módulo "'+vmodulo['modulo']+'" no Existente';
			break;
	}
	
	salida = odin(varreglo,"f"+vmodulo['modulo']+"s");
	// console.log(salida)
	return salida;

}


function cargar(vmodulo,vid) {
	switch(vmodulo['modulo']) {
		
		default:
			console.log('Cargar Módulo no Existente');
			break;
	}
	
	return vmodulo;
}

function cargarSintax(vtabla){
	var arr = {}

	switch(vtabla){
		
		default:
			console.error('ERROR: autodestrucción: '+vtabla);
			break;
	}

	return arr;
}


function endDetail(vid,vacc,modulo){
	switch(modulo){
		
		default:
			setTimeout(function(){ deadclear(modulo); }, 2500);
    		thorload(modulo);
			break;
	}
}

function postload(vmodulo){
	console.log(vmodulo)
	switch(vmodulo){
		default:
			break;
	}
}