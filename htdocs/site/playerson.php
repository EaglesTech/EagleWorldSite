<?php
include 'include.inc.php';
$ptitle = 'Players ON - ' . $cfg['server_name'];
include 'header.inc.php';
?>
<center>
<div id="content">
<div class="top">Players ON</div>
<div class="mid"><br><br><table>
<?php
$SQL = new SQL();
$SQL->myQuery('SELECT name, vocation, level, group_id FROM players WHERE online = 1 AND group_id < 2 ORDER BY name ASC');
if ($SQL->failed()) {
	throw new Exception('<b>Are you using TFS server?</b><br/>SQL query failed:<br/>'.$SQL->getError());
}
if ($SQL->num_rows() == 0) {
	echo '<font class=f2>Não há jogadores online neste momento! :(</font>';
} else {
	$i = 0;
	echo '<tr class="color0"><td style="width:30px">#</td><td style="width:200px"><b>Name</b></td><td style="width:140px"><b>Vocation</b></td><td style="width:40px"><b>Level</b></td></tr>';
}
while ($player = $SQL->fetch_array()) {
	$i++;
	echo '<tr '.getStyle($i).'><td>'.$i.'</td><td><a href="characters.php?player_name='.urlencode($player['name']).'">'.htmlspecialchars($player['name']).'</a>';
	if ($player['vocation'] >= 15){ echo " <a href=vantagens.php target=vantagens><font color=yellow><b>(VIP)</b></font></a><br/>"; }
	echo '</td><td>'.htmlspecialchars($cfg['vocations'][$player['vocation']]['name']).'</td><td>'.$player['level'].'</td></tr>'."\n";
}
?>
</table>
</div>
<div class="bot"></div>
</div>
</center>
<?php include 'footer.inc.php';
