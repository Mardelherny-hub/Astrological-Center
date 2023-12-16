<?php

include "../../../php/HX_Fmwk/load.php";
error_reporting(0);
class Index extends AppSerializableController {

  public function onLoad() {

  	//PARAMS:------->
	  		//params
		  	//camp
		  	
  	$isReserva = ($this->data->camp->evento->tipo->tipo == 1) ? true:false;
  	$usuario = SET_camp::setUsuario($this->data->camp,$this->data->params);
  	//var_dump($usuario);die;
  	if($isReserva) {
  		SET_camp::setReserva($this->data->camp,$this->data->params,$usuario->idUsuario);
  		parent::addToSend(GET_camp::getReserva($this->data->camp,$usuario->idUsuario),'reserva');
  	}
  	else SET_camp::setConsulta($this->data->params,$usuario->idUsuario);

	parent::addToSend($usuario,'usuario');
	
	/*
	
	if($isReserva){
		parent::send();
		return;
	}
	
	*/
	
  	$fecha = new Fecha();

	// PREPARE THE BODY OF THE MESSAGE
	$message .= '';
	//$message .= '<html>';
	$message .= '<body style="font-family:Tahoma, Geneva, sans-serif;">';
	$message .= '<div style="background: #1b1b1b;width:800px;margin:0 auto;">';
	$message .= '<div style="color:black;background: #F9FAF7;width:800px;text-align:center">';	
	$message .= '<h3 style="margin:0px;padding-top:20px;">CONSULTAS DESDE LA WEB</h3>';
	$message .= '<h2 style="margin:0px;padding-top:20px;"> '. $this->data->camp->evento->titulo .'</h2>';
	$message .= '<h2 style="margin:0px;padding-top:20px;"> '. $this->data->camp->evento->subtitulo .'</h2>';
	$message .= '<h2 style="margin:0px;padding-top:20px;"> '. $this->data->camp->evento->fechaStr .'</h2>';
	$message .= '<h3 style="margin:0px;padding:20px 0px">FORMULARIO '.$fecha.'</h3>';
	$message .= '</div>';
	$message .= '<table rules="all" style="background: white;border-color: #666;" cellpadding="10" width="800">';

  foreach ($this->data->params as $key => $valor)
		{
			$message .= '<tr><td><strong>'.ucfirst(strtolower($key)).'</strong> </td><td>' . strip_tags($valor) . '</td></tr>';
		}
	$message .= '<tr><td><strong>'.$this->data->camp->owner->nombre .'</strong> </td><td>' . $this->data->camp->source->nombre . '</td></tr>';
	$message .= '</table>';
	$message .= '</div>';
	$message .= "</body>";
	//$message .= '</html>';

	//echo $message;return;



	$mail = new PHPMailer;

	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail

	$emailserver = 'formularios@aztlan.com.ar';

	//DESCOMENTAR ESTOS PARA CORREO PRIVADO

	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = $emailserver;
	$mail->Password = 'aztlanforms';


	$mail->From = $emailserver;
	$mail->FromName = 'Form Web Psico';
	$mail->addAddress($this->data->camp->email);
	$mail->addReplyTo($emailserver, 'Respuesta de formulario web');
	$mail->addBCC('sergio@aztlan.com.ar');
	$mail->addBCC('nicolas.nardi@aztlan.org.ar');
	$mail->addBCC('secretaria@aztlan.com.ar');
	$mail->addBCC('secretaria@aztlan.org.ar');
	$mail->isHTML(true);                                  // Set email format to HTML

	if($isReserva) $mail->Subject = 'Reserva - ' .$usuario->idUsuario ;
	else $mail->Subject = 'Consulta - ' .$usuario->idUsuario ;
	$mail->Body    = $message;
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	$serviceMsg = '';
	if(!$mail->send()) {
		$serviceMsg.= 'Message could not be sent.';
		$serviceMsg.= '\n' . 'Mailer Error: ' . $mail->ErrorInfo;
		//TWROW EXEPTION;
	}else 	$serviceMsg.= 'Message has been sent';

	parent::addToSend($serviceMsg,"email");

    parent::send();

  }

  public function onUnLoad() {}
}
Controller::load("Index");

?>