<?php

class SET_camp extends DA_Abs{

	public static function setEstadistica($camp){
		$owner = $camp->owners_idOwner;
		$fuente = $camp->source->idFuente;
		
		$camp = $camp->idCamp;
		
		$ip = self::getRealIP();
		$ips = array('181.46.62.91','200.114.218.114');
		if (in_array($ip, $ips)) return 1;
		
		$url = null;
		
		$fecha = new Fecha();
		$toView = $fecha->format('Y-m-d');

		$sql = "INSERT INTO estadisticas (ip,url,navegador,camp,owner,fuente,fecha,fecha_simple)
				VALUES (
				'$ip','$url','$navegador',$camp,$owner,$fuente,'$fecha','$toView')";

		try
		{
			$db = Conexion::getConexion('usuarios');
			//echo $sql;die;
			$db->execute($sql);			
		}
		catch (Exception $e) {
			$c = $e->getCode();			
			throw new AppException("setEstadistica(): Error inesperado ($c):" . $e->getMessage(), 200);			
		}
				
		return 1;		
	}
	
	public static function getRealIP() 
	{
		 if (!empty($_SERVER['HTTP_CLIENT_IP']))
		  return $_SERVER['HTTP_CLIENT_IP'];
		  
		 if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		  return $_SERVER['HTTP_X_FORWARDED_FOR'];
		 
		 return $_SERVER['REMOTE_ADDR'];
	}
	
	public static function setUsuario($camp,$params){
		
		$nombre = escape($params->nombre);
		$apellido = escape($params->apellido);
		$dni = (property_exists($params, 'dni')) ? escape($params->dni) : '';
		$email = escape($params->email);
		$tel = escape($params->telefono);
		
		$tipo = escape($camp->evento->tipo->nombre);
		$source = escape($camp->source->nombre);
		$owner = escape($camp->owner->nombre);
		$idCamp = escape($camp->idCamp);		
	
		$fecha = new Fecha();

		$sql = "INSERT INTO usuarios (nombre,apellido,dni,email,telefono,tipo,source,owner,campaing,creado)
				VALUES (
				'$nombre','$apellido','$dni','$email','$tel','$tipo','$source','$owner',$idCamp,'$fecha')";
		try
		{
			$db = Conexion::getConexion('usuarios');
			//echo $sql;die;
			$db->execute($sql);
			//$nid = self::lastId($db);
			//return $nid;
		}
		catch (Exception $e) {
			$c = $e->getCode();			
			if($c != 1062)throw new AppException("setUsuario(): Error inesperado ($c):" . $e->getMessage(), 200);
			else{
				$sql = "UPDATE usuarios SET
				nombre='$nombre',
				apellido='$apellido',
				dni='$dni',
				telefono='$tel'
				WHERE email='$email'";
				//echo $sql;die;
				try{
					$db->execute($sql);
				}catch (Exception $e) {
					throw new AppException("setUsuarioUPDATE(): Error inesperado ($c):" . $e->getMessage(), 200);
				}			
			}
		}
		
		return GET_camp::getUsuario($email);
	}
	
	public static function setReserva($camp,$params,$idUsuario){
		$evento = $camp->evento->idEvento;
		$lugares = $params->lugares;
		$camp = $camp->idCamp;
		
		$sql = "INSERT INTO reservas (eventos_idEvento,usuarios_idUsuario,cantLugares,fecha,camp_idCamp,confirmado)
				VALUES (
				$evento,$idUsuario,$lugares,now(),$camp,0)";
		try
		{
			$db = Conexion::getConexion('usuarios');
			//echo $sql;die;
			$db->execute($sql);
			return true;
		}
		catch (Exception $e) {
			$c = $e->getCode();			
			throw new AppException("setReserva(): Error inesperado ($c):" . $e->getMessage(), 200);			
		}
	}
	
	public static function setConsulta($params,$idUsuario){		
		$consulta = $params->consulta;		
		
		$sql = "INSERT INTO consultas (usuarios_idUsuario,consulta)
				VALUES (
				$idUsuario,'$consulta')";
		try
		{
			$db = Conexion::getConexion('usuarios');
			//echo $sql;die;
			$db->execute($sql);

			return true;
		}
		catch (Exception $e) {
			$c = $e->getCode();			
			throw new AppException("setConsulta(): Error inesperado ($c):" . $e->getMessage(), 200);			
		}
	}
}

?>