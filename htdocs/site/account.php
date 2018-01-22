<?php
	include 'include.inc.php';
	
	$account = new Account();
	if (!$account->load($_SESSION['account'])) {
		$_SESSION['account'] = '';
		header('location: login.php?redirect=account.php');
		die();
	} else {
		$ptitle = 'Account - ' $cfg['server_name'];
		include 'header.inc.php';
	?>
<div id="content">
	<div class="top">Account</div>
	<div class="mid">
		<table style="width: 100%">
			<tr style="vertical-align: top">
				<td>
					<h3>Pick a Task</h3>
					<ul class="task-menu" style="width: 200px;">
						<?php if (empty($account->getAttr('recovery_key')) { ?>
							<li onclick="ajax('form', 'modules/CreateRKey.php', '', true)" style="background-image: url(ico/key.png);">Create Recovery Key</li>
						<?php } elseif (!empty($account->getAttr('recovery_key'))) { ?>
							<li onclick="ajax('form', 'modules/ChangeRKey.php', '', true)" style="background-image: url(ico/key.png);">Change Recovery Key</li>
						<?php } ?>
						
						<!-- In case you lose the Recovery Key -->
						<li onclick="ajax('form', 'modules/ChangeAndRecoverRKey.php', '', true)" style="background-image: url(ico/key.png);">Perdeu a Recovery Key?</li>
					
						<li onclick="ajax('form', 'modules/character_create.php', '', true)" style="background-image: url(ico/user_add.png);">Create Character</li>
						<li onclick="ajax('form', 'modules/character_delete.php', '', true)" style="background-image: url(ico/user_delete.png);">Delete Character</li>
							
						<?php if ($cfg['char_repair']) { ?>
							<li onclick="ajax('form', 'modules/character_repair.php', '', true)" style="background-image: url(ico/user_edit.png);">Repair Character</li>
						<?php } ?>
					
						<li onclick="ajax('form', 'modules/account_password.php', '', true)" style="background-image: url(ico/key.png);">Change Password</li>
						<li onclick="ajax('form', 'modules/account_email.php', '', true)" style="background-image: url(ico/email.png);">Change Email</li>
						<li onclick="ajax('form', 'modules/account_comments.php', '', true)" style="background-image: url(ico/page_edit.png);">Edit Comments</li>
						<li onclick="ajax('form', 'modules/guild_create.php', '', true)" style="background-image: url(ico/group_add.png);">Create Guild</li>
						<li style="background-image: url(ico/group_add.png);"><a href="got_foxcoins.php">Obter Foxcoins</a></li>
						<li onclick="window.location.href='login.php?logout&amp;redirect=account.php'" style="background-image: url(ico/resultset_previous.png);">Logout</li>
					</ul>
				</td>
				<td>
					<?php
						if (isset($account->players)){
							echo '<h3>Characters</h3>'."\n";
							echo '<ul class="task-menu">';
							foreach ($account->players as $player){
								echo '<li style="background-image: url(ico/user.png);" onclick="window.location.href=\'characters.php?player_id='.htmlspecialchars($player['id']).'\'">'.htmlspecialchars($player['name']).'</li>';
							}
							echo '</ul>';
						}
					?>
				</td>
			</tr>
		</table>
	</div>
	<div id="ajax"></div>
	<div class="bot"></div>
</div>
<?php } include 'footer.inc.php';
