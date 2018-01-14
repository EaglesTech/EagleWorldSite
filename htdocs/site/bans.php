<?php
include ("include.inc.php");
$ptitle="Bans - $cfg[server_name]";
include ("header.inc.php");
// maximum ban time to display, set 0 to show all bans
$cfg['max_ban_time'] = 2*30*24*60*60; //2 months
?>
<div id="content">
<div class="top">Server Bans</div>
<div class="mid">

	<font class=f3><p>Tipos de Infrações:</p></font>
    <p><font class=f2> Offensive or Unsuitable Name<br></font>
	<font class=f1> Nome contendo palavrões, discriminação racial ou religiosa.</p></font>
	
    <p><font class=f2> Offensive Statement<br></font>
	<font class=f1> Ofender direta ou indiretamente membros da equipe.</p></font>
	
    <p><font class=f2> Spamming<br></font>
	<font class=f1> Repetir inúmeras vezes a mesma frase sem sentido algum, ou apenas para preencher espaço em chats ou na tela do jogador.</p></font>
	
    <p><font class=f2> Illegal Advertising<br></font>
	<font class=f1> Anúncio de sites, outros games, etc... sem autorização do Eagle World.</p></font>
	
	<p><font class=f2> Off-Topic Puplic Statement<br></font>
	<font class=f1> Usar os chats de maneira errada, como trade pra perguntar ou help pra vender.</p></font>
	
	<p><font class=f2> Bug Abuse<br></font>
	<font class=f1> Abusar de algum problema no game para ser beneficiado sem reportar a equipe.</p></font>
	
	<p><font class=f2> Using Unofficial Software to Play<br></font>
	<font class=f1> Fazer uso de programs ilegais que auxiliam o jogador, tirando vantagem dos outros.</p></font>
	
	<p><font class=f2> Hacking<br></font>
	<font class=f1> Tentativa de roubar contas de outros jogadores ou até mesmo tentar furtar algo do World.</p></font>
	
	<p><font class=f2> False Report to a Gamemaster<br></font>
	<font class=f1> Informar sobre algo irregular que na verdade nem existe (tentar tirar a atenção dos GMs sem motivo).</p></font>
	
	<p><font class=f2> Destructive Behaviour<br></font>
	<font class=f1> Comportamento destrutivo, como runas de fields no chão sem motivo, sujar a cidade, ofender sei lá quem, etc...</p></font>
	
	
	<font class=f3><p>Tipos de Punições ou Avisos:</p></font>
	<p><font class=f2> Notation<br></font>
	<font class=f1> É um aviso público que você e todos online recebem de uma possível punição que pode levar.</p></font>
	
	<p><font class=f2> Name Report<br></font>
	<font class=f1> Você não poderá logar no char até entrar em contato com equipe através de email com sugestão de novo nick.</p></font>
	
	<p><font class=f2> Banishment<br></font>
	<font class=f1> Jogador tem a conta banida por 7 dias.</p></font>
	
	<p><font class=f2> Final Warning<br></font>
	<font class=f1> Quando o jogador já levou 3 bans ele recebe um Final Warning que é uma ban de 30 dias ou DELETE ACCOUNT. (há casos em que o Final Warning é recebido sem as bans anteriores)</p></font>
	
  <font class=f3><p>Lista de Jogadores Banidos:<br></font><br>

<?php
$SQL = new SQL();
$SQL->myQuery('SELECT name, time FROM bans, players WHERE bans.player > 0 AND players.id = bans.player OR bans.account > 0 AND players.account_id = bans.account ORDER BY time ASC');
if ($SQL->failed()) 
	throw new Exception('SQL query failed:<br/>'.$SQL->getError());
echo '<table style="width:100%">'."\n";
echo '<tr class="color0"><td style="width:25%"><b>Name</b></td><td style="width:50%"><b>Ban Ends</b></td></tr>'."\n";
while ($ban = $SQL->fetch_array()){
	$time = date("jS F Y H:i:s",(int) $ban['time']);
	$d = floor(($ban['time'] - time())/(24*3600));
	$h = floor(($ban['time'] - time() - $d * 24*3600)/3600);
	if ($d != 0)
		$timeleft = $d.'d '.$h.'h';
	else
		$timeleft = $h.'h';
	if ($ban['time'] - time() > 0 && (($ban['time'] - time()) < $cfg['max_ban_time'] || $cfg['max_ban_time'] == 0)){
		$i++;
		echo '<tr class="color2"<td width="100%"<font class="f1"><font color=white>'.getStyle($i).'></font></font></td><td><font class=f1><font color=white>'.$ban['name'].'</font></font>/td></tr>'."\n";
	}
}
echo '</table>'."\n";
?>
</div>
<div class="bot"></div>
</div>
<?php include ("footer.inc.php");?>