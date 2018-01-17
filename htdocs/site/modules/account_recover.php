<?php

include '../include.inc.php';
($cfg['Email_Recovery']) or die('Disabled in config');

//retrieve post data
$form = new Form('recover');
//check if any data was submited
if ($form->exists()){
	//image verification
	if ($form->validated()){
		//load the character
		$player = new Player();
		if ($player->find($form->attrs['character'])){
			//load account
			$account = new Account();
			if ($account->load($player->getAttr('account'))){
				//check for email match
				if (strtolower($account->getAttr('email')) == strtolower($form->attrs['email']) && !empty($form->attrs['email'])){
					//assign recovery key to account
					$key = $account->addRecoveryKey(); #esse codigo aqui gera a rk depois só cola em outro arquivo eu tenho uma print de como é
					if ($account->save()){
						$body = 'Caro jogador,

						O pedido de recuperação de sua conta(account) foi atendido através do site http://'.$cfg['server_url'].'/

						Segue sua solicitação: '.$player->getAttr('account').'

						Caso você também tenha perdido sua senha(password) siga este link para gerar um novo:

						http://'.$cfg['server_url'].$_SERVER['PHP_SELF'].'?account='.$player->getAttr('account').'&key='.$key.'
						
						Se acha que este email pode ser uma fraude, verifique se o mesmo se encontra na lista de emails de contato no site oficial do FoxFoxWorld Open Tibia

						Caso você não tenha perdido sua conta, apenas ignore ou exclua este email.';
						
						//send recovery key
						require_once("../extensions/class.phpmailer.php");

						$mail = new PHPMailer();
						$mail->setLanguage('en', '../extensions/language/');
						$mail->IsSMTP();						
						$mail->Host = $cfg['SMTP_Host'];
						$mail->Port = $cfg['SMTP_Port'];
						$mail->SMTPAuth = $cfg['SMTP_Auth'];
						$mail->Username = $cfg['SMTP_User'];
						$mail->Password = $cfg['SMTP_Password'];

						$mail->From = $cfg['SMTP_From'];
						$mail->AddAddress($account->getAttr('email'));

						$mail->Subject = $cfg['server_name'].' - Lost Account';
						$mail->Body    = $body;

						if ($mail->Send()){
							//create new message
							$msg = new IOBox('message');
							$msg->addMsg('An email with recovery details was sent to your inbox.');
							$msg->addClose('Finish');
							$msg->show();
						}else{ $error = "Mailer Error: " . $mail->ErrorInfo; }
					}else{ $error = $account->getError();}
				}else{ $error = "Incorrect email address";}
			}else{ $error = "Failed to load account";}
		}else{ $error = "Failed to load this character";}
	}else{ $error = "Image verification failed";}
	if (!empty($error)){
		//create new message
		$msg = new IOBox('message');
		$msg->addMsg($error);
		$msg->addReload('<< Back');
		$msg->addClose('OK');
		$msg->show();
	}
//user clicks the link in his email
}elseif(!empty($_GET['account'])){
	//load the account
	$account = new Account();
	if ($account->load($_GET['account'])){
		//check recovery key against database
		if ($account->checkRecoveryKey($_GET['key'])){#ele gera ela e depois apaga como se fosse uma chave aleatoria
			//set new password if key correct
			$password = substr(str_shuffle('qwertyuipasdfhjklzxcvnm12345789'), 0, 8);
			$account->setPassword($password);
			//show the password
			$msg = new IOBox('message');
			$msg->addMsg('A new password has been set for you!<br/>Account: <b>'.$account->getAttr('accno').'</b><br/>Password: <b>'.$password.'</b>');
			$msg->addClose('Finish');
			$msg->show();
			//save password, remove recovery key
			$account->removeRecoveryKey(); #aqui remove e troca ela ao trocar a senha
			if (!$account->save()) {$error = 'Error saving account';}
		}else{ $error = "The link is invalid";}
	}else{ $error = "Failed to load account";}
	if (!empty($error)){
		//create new message
		$msg = new IOBox('message');
		$msg->addMsg($error);
		$msg->addReload('<< Back');
		$msg->addClose('OK');
		$msg->show();
	}
}else{
	//create new form
	$form = new IOBox('recover');
	$form->target = $_SERVER['PHP_SELF'];
	$form->addLabel('Account Recovery');
	$form->addInput('character');
	$form->addInput('email');
	$form->addCaptcha();
	$form->addClose('Cancel');
	$form->addSubmit('Next >>');
	$form->show();
}
