<?php  
	    require_once 'model/m_general.php';
	    $kakaroto = new _general();

	    if (!isset($_POST['accion'])) {
	   	require '../_config/mySmarty.php';
	   
	   	$smarty  = new mySmarty();
	   	$smarty->setModule('dashboard');
	   	$pg = $smarty->fetch('../view/menuSmarty.php');
	   	$sty = $smarty->fetch('../view/style.php');
	   	$scr = $smarty->fetch('../view/script.php');
	    
	   	$smarty->assign('STY',$sty);
	   	$smarty->assign('SCR',$scr);
	   	$smarty->assign('NAV',$pg);

	   	$smarty->assign('VOT',$kakaroto->kamehameha('id,nombre',1,'id > 0 order by fecha_inicio'));
	   	$smarty->display('v_main.tpl');
	   }else{
	   $pagina = 0;
	   	switch ($_POST['accion']) {
	   		case 1:
	   			break;
	   		case 2:
	   			break;
	   		case 3:
	   			
	   			break;
	   		case 4:
	   			
	   			break;
	   		case 5:
	   			
	   			break;
	   	}
		if(!$pagina){
		   	if (is_array($transaccion)){
				$marcas = $transaccion;
				$succed = 1;
				}else{
					$marcas = array('ERROR'=>$transaccion);
					$succed = 0;
				}
		
				$salida = array('succed'=>$succed);
				array_push($salida, $marcas);
				print_r(json_encode($salida));	
		
		   }
	    }	
			   
?>