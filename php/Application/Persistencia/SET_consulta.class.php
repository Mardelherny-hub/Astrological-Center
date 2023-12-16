<?php

class SET_consulta extends DA_Abs{
	
	public static function getConsultas(){
	
		$db=Conexion::getConexion();
		$rs=$db->getRecordset();
	
		$sql="SELECT * FROM formulario_contacto ORDER BY id DESC LIMIT 30";
		//echo $sql;die;
		$camp = $rs->getObjects($sql);
			
		return $camp;
	
	}
	
	public static function getConsultasAstro(){
	
		$db=Conexion::getConexion("centroastrologicoaztlan");
		$rs=$db->getRecordset();
	
		$sql="SELECT * FROM formulario_contacto ORDER BY id DESC LIMIT 30";
		//echo $sql;die;
		$camp = $rs->getObjects($sql);
			
		return $camp;
	
	}


	public static function setConsulta($data){

		$nombre = escape($data->nombre);
		$dni = escape($data->dni);
		$facebook = escape($data->facebook);
		$tel = escape($data->telefono);
		$email = escape($data->email);
		$consulta = escape($data->consulta);
		$newsletter = $data->newsletter;
		$fecha = new Fecha();

		echo $dni;
		echo $facebook;

		$sqlAbs = "INSERT INTO formulario_contacto (nombre,dni,facebook,telefono,email,consulta,newsletter,fecha)
				VALUES ('$nombre','$dni','$facebook','$tel','$email','$consulta',$newsletter,'$fecha')";
		try
		{
			$db = Conexion::getConexion();
			//echo $sqlAbs;die;
			$db->execute($sqlAbs);

			$nid = self::lastId($db);

			return $nid;
		}
		catch (Exception $e) {
			$c = $e->getCode();
			throw new AppException("Error inesperado ($c):" . $e->getMessage(), 200);
		}
	}

}

?>