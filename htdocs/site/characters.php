<?php
include ("include.inc.php");
$ptitle="Characters - $cfg[server_name]";
include("header.inc.php");
?>
<div id="content">
<div class="top">Character Lookup</div>
<div class="mid">
<form method="get" action="characters.php"><br>
<center><input type="text" name="player_name"/> 
<input type="submit" value="Search"/></center>
</form>
<?php 
$player = new Player();
$SQL = new SQL();
if (!empty($_GET['player_id']) && $player->load($_GET['player_id']) || !empty($_GET['player_name']) && $player->find($_GET['player_name'])){
	echo '<hr/><table style="width: 100%"><tr><td><font class=f2>Name:</font><font class=f1> '.htmlspecialchars($player->getAttr('name'))."</font><br/>\n";
	echo '<font class=f2>Level:</font><font class=f1> '.$player->getAttr('level')."</font><br/>\n";
	echo '<font class=f2>Magic Level:</font><font class=f1> '.$player->getAttr('maglevel')."</font><br/>\n";
	echo '<font class=f2>Vocation:</font><font class=f1> '.$cfg['vocations'][$player->getAttr('vocation')]['name']."</font> ";
	$account = new Account();
	$account->load($player->getAttr('account'));
    if ($account->getAttr('premend') > time()) {
        echo "<a href=vantagens.php target=vantagens><font color=blue><b>(VIP)</b></font></a><br/>";
    } else { echo "<br/>\n";}
	if ($player->isAttr('guild_name')){
		echo '<font class=f2>Guild:</font><font class=f1> '.$player->getAttr('guild_rank').' of <a href="guilds.php?guild_id='.$player->getAttr('guild_id').'">'.htmlspecialchars($player->getAttr('guild_name')).'</a></font><br/>'."\n";
	}
	
	$gender = Array('Female','Male');
	echo '<font class=f2>Gender:</font><font class=f1> '.$gender[$player->getAttr('sex')].'</font><br/>'."\n";
	if (!empty($cfg['temple'][$player->getAttr('city')]['name'])){
		echo "<font class=f2>Residence:</font><font class=f1> ".ucfirst($cfg['temple'][$player->getAttr('city')]['name'])."</font><br/>";
	}
	
	if ($player->isAttr('position'))
		echo "<font class=f2>Position: </font><font class=f1> ".$player->getAttr('position')."</font><br/>";

	if($player->isOnline())
		echo '<font class=f2>Status:</font> <font class=f1><font color=green><b>Online</b></font></font><br/>';
    else
        echo '<font class=f2>Status:</font> <font class=f1><font color=red><b>Offline</b></font></font><br/>';

	if ($player->getAttr('lastlogin') == 0){
		$lastlogin = 'Never';}
	else {
		$lastlogin = date("jS F Y H:i:s",$player->getAttr('lastlogin'));
		echo "<font class=f2>Last Login:</font><font class=f1> ".$lastlogin."</font><br/>\n";
	}

	echo '<font class=f2><a href=onlinebonus.php target=onlinebonus><font color=purple>Online Bonus:</font></a></font> <font class=f1>';
	if(isset($player->storage['61000'])){
   		echo '' . $player->storage['61000']; } else { echo '0';}
   	echo'</font><br/>';

   	echo '<font class=f2>Warnings:</font><font class=f1>';
   	$warning = $SQL->myQuery('SELECT `warnings` FROM `accounts` WHERE `id` = '.$account->attrs['accno']);
   	while ($wa = $SQL->fetch_array()){
   		echo ' '.$wa['warnings'];
   	}
   	echo '</font><br/>';

	if ($player->getAttr('redskulltime') > time())
		echo '<font class=f2>Frag time left:</font><font class=f1> '.ceil(($player->getAttr('redskulltime') - time())/60/60).' h</font><br/>';
	
	if ($cfg['show_skills']){
		echo "</td><td>";
		$sn = $cfg['skill_names'];
		for ($i=0; $i < count($sn); $i++){
			echo '<font class=f2>'.ucfirst($sn[$i]).':</font><font class=f1> '.$player->getSkill($i)."</font><br/>\n";
		}
		echo '</td></tr>';
	}
	echo '</table>';
	$account = new Account();
	if ($account->load($player->getAttr('account')))
		if (strlen($account->getAttr('comment'))>0){
			echo "<hr><font class=f3><center>Comments</center></font><br><div style=\"overflow:hidden\"><pre><font class=f1>".htmlspecialchars($account->getAttr('comment'))."</font></pre></div><br/>\n";
		}	
	echo '<hr/>';
	
	echo '<center><font class=f3>Special Skills</font><br><br></center><font class=f1><table border=0 cellpadding=1 cellspacing=1 width=right>';
	include ('include/skills.php');
	echo '</table><br/><hr/>';
	
	if ($cfg['show_deathlist']){
		$deaths = $player->getDeaths();
		if ($deaths !== false && !empty($deaths)){
		echo '<font class=f3><center>Deaths</center></font><br/>';
			foreach ($deaths as $death){
				$killer = new Player($death['killer']);
				if ($killer->exists())
					$name = '<a href="characters.php?char='.$death['killer'].'">'.$death['killer'].'</a>';
				else
					$name = $death['killer'];
				echo '<font class=f2><i>'.date("jS F Y H:i:s",$death['date']).'</i> Killed at level '.$death['level'].' by '.$name.'</font><br/>';
			}
		}
	}
}elseif (isset($_GET['player_id']) || isset($_GET['player_name'])) echo '<font class=f1><br>Player not found</font>';
?>
</div>
<div class="bot"></div>
</div>
<?php include ("footer.inc.php"); ?>