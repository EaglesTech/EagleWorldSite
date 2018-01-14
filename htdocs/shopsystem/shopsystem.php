<?PHP
if($logged) {
	$user_premium_points = $account_logged->getCustomField('premium_points');
} else {
	$user_premium_points = 'Precisa estar logado';
}

function getItemByID($id) {
	$id = (int) $id;
	$data = $GLOBALS['SQL']->query('SELECT * FROM z_shop_offer WHERE id = '.$id)->fetch();
	if ($data['offer_type'] == 'pacc') {
		$offer['id'] = $data['id'];
		$offer['type'] = $data['offer_type'];
		$offer['days'] = $data['count1'];
		$offer['points'] = $data['points'];
		$offer['description'] = $data['offer_description'];
		$offer['name'] = $data['offer_name']; }
	elseif ($data['offer_type'] == 'skill') {
		$offer['id'] = $data['id'];
		$offer['type'] = $data['offer_type'];
		$offer['item_id'] = $data['itemid1'];
		$offer['item_count'] = $data['count1'];
		$offer['points'] = $data['points'];
		$offer['description'] = $data['offer_description'];
		$offer['name'] = $data['offer_name']; }
	return $offer;
}

function getOfferArray() {
	$offer_list = $GLOBALS['SQL']->query('SELECT * FROM z_shop_offer');
	$i_pacc = 0;
	$i_skill = 0;
	while($data = $offer_list->fetch()) {
		if ($data['offer_type'] == 'pacc') {
			$offer_array['pacc'][$i_pacc]['id'] = $data['id'];
			$offer_array['pacc'][$i_pacc]['days'] = $data['count1'];
			$offer_array['pacc'][$i_pacc]['points'] = $data['points'];
			$offer_array['pacc'][$i_pacc]['description'] = $data['offer_description'];
			$offer_array['pacc'][$i_pacc]['name'] = $data['offer_name'];
			$i_pacc++;
		}
		elseif ($data['offer_type'] == 'skill') {
			$offer_array['skill'][$i_skill]['id'] = $data['id'];
			$offer_array['skill'][$i_skill]['item_id'] = $data['itemid1'];
			$offer_array['skill'][$i_skill]['item_count'] = $data['count1'];
			$offer_array['skill'][$i_skill]['points'] = $data['points'];
			$offer_array['skill'][$i_skill]['description'] = $data['offer_description'];
			$offer_array['skill'][$i_skill]['name'] = $data['offer_name'];
			$i_skill++;
		}
	}
	return $offer_array;
}

	if($action == 'login') {
		if($logged) {
			header("Location: index.php?subtopic=shopsystem");
		} else {
			$main_content .= '<p><b><font color="green">&nbsp;Seus créditos:</font><font color="red"> '.$user_premium_points.'</font></b></p>Antes de usar o shop você precisar logar com sua conta.<br />
			<form action="?subtopic=shopsystem&action=login" method="post" >
			<span><b>Account: </b></span><input type="password" name="account_login" SIZE="10" maxlength="10" ><br />
			<span><b>Password: </b></span><input type="password" name="password_login" size="30" maxlength="29" ><br />
			<input type="submit" value="LOGIN">
			</font>';
		}
	}
	
	if($action == 'logout') {
		$main_content .= '<p><b><font color="green">&nbsp;Seus créditos:</font><font color="red"> '.$user_premium_points.'</font></b></p><br /><b>Você saiu de sua conta com sucesso.</b><br />';
	}
	
	if($action == '') {
		unset($_SESSION['viewed_confirmation_page']);
		$main_content .= '<p><b><font color="green">&nbsp;Seus cr&eacute;ditos:</font><font color="red"> '.$user_premium_points.'</font></b></p><h2>Bem-Vindo ao Eagle Shop! Troque seu Eagle Gold aqui.</h2>';
		$offer_list = getOfferArray();
		//show list of pacc offers
		if(count($offer_list['pacc']) > 0) {
			$main_content .= '<table border="0" cellpadding="1" cellspacing="1" width="650"><tr width="650" bgcolor="black"><td colspan="3"><font color="gold" size="4"><b>&nbsp;Premium Account</b></font></td></tr><tr bgcolor="black"><td width="50" align="center"><font color=red><b>Dias</b></font></td><td width="350" align="left"><font color=red><b>Descri&ccedil;&atilde;o</b></font></td><td width="250" align="center"><font color=red><b>Selecione quantos dias</b></font></td></tr>';
			foreach($offer_list['pacc'] as $pacc) {
				$main_content .= '<tr bgcolor="gold"><td align="center">'.$pacc['days'].'</td><td><b>'.$pacc['name'].'</b> ('.$pacc['points'].' eagle golds)<br />'.$pacc['description'].'</td><td align="center">';
				if(!$logged) {
					$main_content .= '<b>Precisa estar logado</b>';
				}
				else {
					$main_content .= '<form action="index.php?subtopic=shopsystem&action=select_player" method=POST><input type="hidden" name="buy_id" value="'.$pacc['id'].'"><input type="submit" value="Adquira '.$pacc['name'].'"><br><b>por '.$pacc['points'].' eagle golds</b></form>';
				}
			}
			$main_content .= '</table><br />';
		}
		//show list of skill offers
		if(count($offer_list['skill']) > 0) {
			$main_content .= '<table border="0" cellpadding="1" cellspacing="1" width="650"><tr width="650" bgcolor="black"><td colspan="3"><font color="gold" size="4"><b>&nbsp;Special Skills</b></font></td></tr><tr bgcolor="black"><td width="50" align="center"><font color=red><b>Img</b></font></td><td width="350" align="left"><font color=red><b>Descri&ccedil;&atilde;o</b></font></td><td width="250" align="center"><font color=red><b>Selecione a Habilidade Especial</b></font></td></tr>';
			foreach($offer_list['skill'] as $skill) {
				$main_content .= '<tr bgcolor="gold"><td align="center"><img src="skill_images/'.$skill['id'].'.bmp" width="34" height="34"></td><td><b>'.$skill['name'].'</b> ('.$skill['points'].' eagle golds)<br />'.$skill['description'].'</td><td align="center">';
				if(!$logged){
					$main_content .= '<b>Precisa estar logado</b>';
				}
				else {
					$main_content .= '<form action="index.php?subtopic=shopsystem&action=select_player" method=POST><input type="hidden" name="buy_id" value="'.$skill['id'].'"><input type="submit" value="Adquira '.$skill['name'].'"><br><b>por '.$skill['points'].' eagle golds</b></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table><br />';
		}
	}
	
	if($action == 'select_player')
	{
		unset($_SESSION['viewed_confirmation_page']);
		if(!$logged) { $main_content .= '<b>Precisa estar logado</b>'; }
		
		else {
			$main_content .= '<p><b><font color="green">&nbsp;Seus créditos:</font><font color="red"> '.$user_premium_points.'</font></b></p>';
			$buy_id = (int) $_REQUEST['buy_id'];
			if(empty($buy_id)) { $main_content .= 'Please <a href="index.php?subtopic=shopsystem">select item</a> first.'; }
			
			else {
				$buy_offer = getItemByID($buy_id);
				if(isset($buy_offer['id'])) //item exist in database
				{
					if($user_premium_points >= $buy_offer['points']) {
						$main_content .= '<h2>Selecione o Personagem</h2>
						<table border="0" cellpadding="1" cellspacing="1" width="650">
						<tr bgcolor="black"><td colspan="2"><font color="gold" size="4"><b>Item escolhido</b></font></td></tr>
						<tr bgcolor="gold"><td width="100"><b>Nome:</b></td><td width="550">'.$buy_offer['name'].'</td></tr>
						<tr bgcolor="gold"><td width="100"><b>Descrição:</b></td><td width="550">'.$buy_offer['description'].'</td></tr>
						</table><br />
						<form action="index.php?subtopic=shopsystem&action=confirm_transaction" method=POST><input type="hidden" name="buy_id" value="'.$buy_id.'">
						<table border="0" cellpadding="1" cellspacing="1" width="650">
						<tr bgcolor="black"><td colspan="2"><font color="gold" size="4"><b>Que personagem de sua conta irá receber o item?</b></font></td></tr>
						<tr bgcolor="gold"><td width="110"><b>Nome:</b></td><td width="550"><select name="buy_name">';
						$players_from_logged_acc = $account_logged->getPlayersList();
						if(count($players_from_logged_acc) > 0) {
							$players_from_logged_acc->orderBy('name');
							foreach($players_from_logged_acc as $player) {
								$main_content .= '<option>'.$player->getName().'</option>';
							}
						} else {
							$main_content .= 'You don\'t have any character on your account.';
						}
						$main_content .= '</select>&nbsp;<input type="submit" value="Enviar"></td></tr></table> </form><br />';
						if(strtolower($config['site']['give_to_other_users']) == "yes") {
							$main_content .= '<form action="index.php?subtopic=shopsystem&action=confirm_transaction" method=POST><input type="hidden" name="buy_id" value="'.$buy_id.'">
							<table border="0" cellpadding="1" cellspacing="1" width="650">
							<tr bgcolor="black"><td colspan="2"><font color="gold" size="4"><b>Será um presente? Então informe quem será presentiado</b></font></td></tr>
							<tr bgcolor="gold"><td width="110"><b>De:</b></td><td width="550"><select name="buy_name"> ';
							$players_from_logged_acc = $account_logged->getPlayersList();
							if(count($players_from_logged_acc) > 0) {
								$players_from_logged_acc->orderBy('name');
								foreach($players_from_logged_acc as $player) {
									$main_content .= '<option>'.$player->getName().'</option>';
								}
							} else {
								$main_content .= 'You don\'t have any character on your account.';
							}
							$main_content .= '</select>&nbsp;<input type="submit" value="Enviar"></td></tr>
								<tr bgcolor="gold"><td width="110"><b>Para:</b></td><td width="550"><input type="text" name="buy_name"> - nome do presentiado
								</table><br />
								</form>';
						} $main_content .= 'Lembrando que se for uma Premium Account, é pra todos jogadores da conta.';
					}
					else {
						$main_content .= 'Para este item você precisa de <b>'.$buy_offer['points'].'</b> Eagle Golds. Você tem apenas <b>'.$user_premium_points.'</b> Eagle Golds. Favor <a href="index.php?subtopic=shopsystem">selecione outro item </a> ou adquira já seus Eagle Golds.';
					}
				}
				else {
					$main_content .= 'Offer with ID <b>'.$buy_id.'</b> doesn\'t exist. Please <a href="index.php?subtopic=shopsystem">select item</a> again.';
				}
			}
		}
	}
	
	if($action == 'confirm_transaction') {
		if(!$logged) { $main_content .= '<b>Precisa estar logado</b>'; }
		
		else {
			$main_content .= '<p><b><font color="green">&nbsp;Seus créditos:</font><font color="red"> '.$user_premium_points.' Eagle Golds</font></b></p>';
			$buy_id = (int) $_POST['buy_id'];
			$buy_name = $_POST['buy_name'];
			$buy_from = $_POST['buy_from'];
			if(empty($buy_from)) { $buy_from = 'Anonymous'; }

			if(empty($buy_id)) { $main_content .= 'Please <a href="index.php?subtopic=shopsystem">select item</a> first.'; }

			else {
				
				if(!check_name($buy_from)) {
					$main_content .= 'Invalid nick ("from player") format. Please <a href="index.php?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'">select other name</a> or contact with administrator.';
				} else {
				$buy_offer = getItemByID($buy_id);
				if(isset($buy_offer['id'])) //item exist in database
				{
					if($user_premium_points >= $buy_offer['points'])
					{
						if(check_name($buy_name))
						{
							$buy_player = new OTS_Player();
							$buy_player->find($buy_name);
							$buy_player_account = $buy_player->getAccount();
							if($buy_player->isLoaded())
							{
								if($_SESSION['viewed_confirmation_page'] == 'yes' && $_POST['buy_confirmed'] == 'yes') {
									if($buy_offer['type'] == 'pacc')
									{
										$player_premdays = $buy_player_account->getCustomField('premdays');
										$player_lastlogin = $buy_player_account->getCustomField('lastday');
										$save_transaction = 'INSERT INTO z_shop_history_pacc (id, to_name, to_account, from_nick, from_account, price, pacc_days, trans_state, trans_start, trans_real) VALUES (NULL, \''.$buy_player->getName().'\', \''.$buy_player_account->getId().'\', \''.$buy_from.'\',  \''.$account_logged->getId().'\', \''.$buy_offer['points'].'\', \''.$buy_offer['days'].'\', \'realized\', \''.time().'\', \''.time().'\');';
										$SQL->query($save_transaction);
										$buy_player_account->setCustomField('premdays', $player_premdays+$buy_offer['days']);
										$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
										$user_premium_points = $user_premium_points - $buy_offer['points'];
										if($player_premdays == 0)
										{
											$buy_player_account->setCustomField('lastday', time());
										}
										$main_content .= '<h2>Premium Account adicionada!</h2><b>'.$buy_offer['days'].' dias</b> de Premium Account adicionados ao personagem <b>'.$buy_player->getName().'</b> por <b>'.$buy_offer['points'].' Eagle Golds</b> da sua conta.<br /><br />Agora você tem <b>'.$user_premium_points.' Eagle Golds</b>.<br /><a href="index.php?subtopic=shopsystem">VOLTAR À LISTA.</a>';
									}
									elseif($buy_offer['type'] == 'skill') {
										$sql = 'INSERT INTO z_ots_comunication (id, name, type, action, param1, param2, param3, param4, param5, param6, param7, delete_it) VALUES (NULL, \''.$buy_player->getName().'\', \'login\', \'give_item\', \''.$buy_offer['item_id'].'\', \''.$buy_offer['item_count'].'\', \'\', \'\', \'skill\', \''.$buy_offer['name'].'\', \'\', \'1\');';
										$SQL->query($sql);
										$save_transaction = 'INSERT INTO z_shop_history_item (id, to_name, to_account, from_nick, from_account, price, offer_id, trans_state, trans_start, trans_real) VALUES ('.$SQL->lastInsertId().', \''.$buy_player->getName().'\', \''.$buy_player_account->getId().'\', \''.$buy_from.'\',  \''.$account_logged->getId().'\', \''.$buy_offer['points'].'\', \''.$buy_offer['id'].'\', \'wait\', \''.time().'\', \'0\');';
										$SQL->query($save_transaction);
										$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
										$user_premium_points = $user_premium_points - $buy_offer['points'];
										$main_content .= '<h2>Item added!</h2><b>'.$buy_offer['name'].'</b> added to player <b>'.$buy_player->getName().'</b> items (he will get this items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="index.php?subtopic=shopsystem">GO TO MAIN SHOP SITE</a>';
									}
								}
								else
								{
									$set_session = TRUE;
									$_SESSION['viewed_confirmation_page'] = 'yes';
									$main_content .= '<h2>Confirm transaction</h2>
									<table border="0" cellpadding="1" cellspacing="1" width="650">
									<tr bgcolor="black"><td colspan="3"><font color="gold" size="4"><b>Confirme a transação</b></font></td></tr>
									<tr bgcolor="gold"><td width="100"><b>Nome:</b></td><td width="550" colspan="2">'.$buy_offer['name'].'</td></tr>
									<tr bgcolor="gold"><td width="100"><b>Descrição:</b></td><td width="550" colspan="2">'.$buy_offer['description'].'</td></tr>
									<tr bgcolor="gold"><td width="100"><b>Custo:</b></td><td width="550" colspan="2"><b>'.$buy_offer['points'].' Eagle Golds</b> de sua conta</td></tr>
									<tr bgcolor="gold"><td width="100"><b>Para o personagem:</b></td><td width="550" colspan="2"><font color="red">'.$buy_player->getName().'</font></td></tr>
									<tr bgcolor="gold"><td width="100"><b>Do personagem:</b></td><td width="550" colspan="2"><font color="red">'.$buy_from.'</font></td></tr>
									<tr bgcolor="red"><td width="100"><b>Proceder?</b></td><td width="275" align="left">
									<form action="index.php?subtopic=shopsystem&action=confirm_transaction" method="POST"><input type="hidden" name="buy_confirmed" value="yes"><input type="hidden" name="buy_id" value="'.$buy_id.'"><input type="hidden" name="buy_name" value="'.$buy_name.'"><input type="submit" value="Aceitar"></form></td>
									<td align="right"><form action="index.php?subtopic=shopsystem" method="POST"><input type="submit" value="Cancelar"></form></td></tr>
									</table> 
									';
								}
							}
							else
							{
								$main_content .= 'Personagem com o nome <b>'.$buy_name.'</b> não existe. Favor <a href="index.php?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'">selecionar outro nome</a>.';
							}
						}
						else
						{
							$main_content .= 'Formato inválido. Favor <a href="index.php?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'"> selecionar outro nome</a> ou contate nossa equipe.';
						}
					}
					else
					{
						$main_content .= 'For this item you need <b>'.$buy_offer['points'].'</b> points. You have only <b>'.$user_premium_points.'</b> premium points. Please <a href="index.php?subtopic=shopsystem">select other item</a> or buy premium points.';
					}
				}
				else
				{
					$main_content .= 'Offer with ID <b>'.$buy_id.'</b> doesn\'t exist. Please <a href="index.php?subtopic=shopsystem">select item</a> again.';
				}
			}
		}
	}
	if(!$set_session) { unset($_SESSION['viewed_confirmation_page']); }}

	if($action == 'show_history') {
		if(!$logged) { $main_content .= '<b>Precisa estar logado</b>'; }
		
		else {
			$main_content .= '<p><b><font color="green">&nbsp;Seus créditos:</font><font color="red"> '.$user_premium_points.'</font></b></p>';
			$main_content .= '<p><b><font color="green">&nbsp;Conta: </font><font color="blue">'.$account_logged->getId().'</font></b></p>';
			$items_history_received = $SQL->query('SELECT * FROM z_shop_history_item WHERE to_account = '.$account_logged->getId().' OR from_account = '.$account_logged->getId());
			if(is_object($items_history_received)) {
				foreach($items_history_received as $item_received) {
					if($account_logged->getId() == $item_received['to_account'])
						$char_color = 'green';
					else
						$char_color = 'red';
					$items_received_text .= '<tr bgcolor="gold"><td><font color="'.$char_color.'">'.$item_received['to_name'].'</font></td><td>';
					if($account_logged->getId() == $item_received['from_account'])
						$items_received_text .= '<i>Sua conta</i>';
					else
						$items_received_text .= $item_received['from_name'];
					$item_bought = getItemByID($item_received['offer_id']);
					$items_received_text .= '</td><td>'.$item_bought['name'].'</td><td>'.$item_received['price'].' Eagle Golds</td><td>'.date("j F Y, H:i:s", $item_received['trans_start']).'</td>';
					if($item_received['trans_real'] > 0)
						$items_received_text .= '<td>'.date("j F Y, H:i:s", $item_received['trans_real']).'</td>';
					else
						$items_received_text .= '<td><b><font color="red">Not realized yet.</font></b></td>';
					$items_received_text .= '</tr>';
				}
			}
			$paccs_history_received = $SQL->query('SELECT * FROM z_shop_history_pacc WHERE to_account = '.$account_logged->getId().' OR from_account = '.$account_logged->getId());
			if(is_object($paccs_history_received)) {
				foreach($paccs_history_received as $pacc_received) {
					if($account_logged->getId() == $item_received['to_account'])
						$char_color = 'green';
					else
						$char_color = 'red';
					$paccs_received_text .= '<tr bgcolor="gold"><td><font color="'.$char_color.'">'.$pacc_received['to_name'].'</font></td><td>';
					if($account_logged->getId() == $pacc_received['from_account'])
						$paccs_received_text .= '<i>Sua conta</i>';
					else
						$paccs_received_text .= $pacc_received['from_name'];
					$paccs_received_text .= '</td><td>'.$pacc_received['pacc_days'].' days</td><td>'.$pacc_received['price'].' Eagle Golds</td><td>'.date("j F Y, H:i:s", $pacc_received['trans_real']).'</td></tr>';
				}
			}
			if(!empty($items_received_text)) {
				$main_content .= '<h2>Itens Adquiridos</h2><table cellpadding="1" cellspacing="1" width="650"><tr bgcolor="gold"><td><b>Para:</b></td><td><b>De:</b></td><td><b>Nome do Item</b></td><td><b>Custo</b></td><td><b>Pedido no site</b></td><td><b>Recebido no Eagle World</b></td></tr>'.$items_received_text.'</table><br />';
			}
			if(!empty($paccs_received_text)) {
				$main_content .= '<h2>Premium Accounts Adquiridas</h2><table cellpadding="1" cellspacing="1" width="650"><tr bgcolor="gold"><td><b>Para:</b></td><td><b>De:</b></td><td><b>Duração</b></td><td><b>Custo</b></td><td><b>Adicionada:</b></td></tr>'.$paccs_received_text.'</table><br />';
			}
		}
	}

	/*if ($action == 'transfer') {
		$main_content .= '<p><b><font color="green">&nbsp;Seus créditos:</font><font color="red"> '.$user_premium_points.' Eagle Golds</font></b></p>';
		if(!$logged) { $main_content .= '<b>Precisa estar logado</b>'; }
		$coins = $_POST['coins'];
		if ($user_premium_points < $coins) {
			$main_content .= 'Você não possui a quantidade de moedas necessárias para doar. <a href="index.php?subtopic=shopsystem&action=transfer">voltar</a>';
		}
		elseif (check_name($buy_name)) {
			$main_content .= 'O Personagem informado para transferir, não existe. <a href="index.php?subtopic=shopsystem&action=transfer">voltar</a>';
		}
		else {
			$main_content .= '<b>Transferindo coins para outra conta</b>.<br />
			<form action="?subtopic=shopsystem&action=transfer" method="post" >
			<span><b>Quantidade de Coins: </b></span><input type="text" name="coins" size="6" maxlength="6" ><br />
			<span><b>Seu Char:</b></span>&nbsp;<select name="buy_name">';
			$players_from_logged_acc = $account_logged->getPlayersList();
				if(count($players_from_logged_acc) > 0) {
					$players_from_logged_acc->orderBy('name');
					foreach($players_from_logged_acc as $player) {
						$main_content .= '<option>'.$player->getName().'</option>';
					}
				} else {
					$main_content .= 'You don\'t have any character on your account.';
			}
			$main_content .= '</select><br />
			<span><b>Para o Jogador: </b></span><input type="text" name="$buy_name" size="30" maxlength="100" ><br />
			<input type="submit" value="Transferir">';
		}
	}
	*/
?>