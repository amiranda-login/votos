$(function(){
    dibujarGrafico("chartG1",'Cantidad de Votos','Cantidad de Votos','pie',{sel:'*',tbl:6,where:''});
    setInterval(function(){ dibujarGrafico("chartG1",'Cantidad de Votos','Cantidad de Votos','pie',{sel:'*',tbl:6,where:''}); }, 15000);
});