<?php 
include ("include.inc.php");
$ptitle="Houses - $cfg[server_name]";
include ("header.inc.php");
if (!is_file($cfg['dirdata'].$cfg['house_file']))
	throw new Exception('House file not found: '.$cfg['dirdata'].$cfg['house_file']);
?>
<div id="content">
<div class="top">Houses</div>
<div class="mid">
    <center><select name="sort" onchange="self.location.href='houses.php?server=' + this.value">
    <option selected value="0">Servidor 1</option></select></center>

    <font class=f3><p>Comandos de Casas:</p></font>
    <p><font class=f2> !buyhouse -</font><font class=f1> Usado para comprar uma casa. O jogador fica em frente a porta e usa este comando, tendo o dinheiro e nível necessário a casa é adquirida. (lembrando que só é possível comprar casas vazias)</p></font>
    <p><font class=f2> !sellhouse -</font><font class=f1> Usado para vender uma casa a outro jogador. Usa-se este comando seguido do nick do jogador que irá comprar a casa, então os dois fazem um trade em que o comprador poe a quantia oferecida e o vendedor pode aceitar a oferta ou não. (usado apenas se o jogador tem um casa no game)</p></font>
    <p><font class=f2> !leavehouse -</font><font class=f1> Com este comando você abandona sua casa.</p></font>
    <p><font class=obs> OBS: Utilizando os comandos !sellhouse ou !leavehouse, o jogador precisa se certificar de tirar os itens da casa antes!</p></font>
    
    <font class=f3><p>Nível para comprar:</p></font>
    <font class=f1> Você precisa ter um personagem de no mínimo nível 150 para comprar uma casa. Lembrando que se for vender, o interessado em comprar também precisa ser 150. Se você perder o nível mínimo para ter uma casa, não a perderá.</font>
    
    <font class=f3><p>Preços e Alugueis:</p></font>
    <font class=f1> As casas são vendidas a 10k cada SQM(quadrado) e semanalmente(7 dias) você precisa pagar um aluguel que corresponde ao Rent de cada casa(geralmente 1k por SQM). Para pagar o aluguel, é necessário deixar o valor do aluguel no DP(Depot) da cidade onde fica a casa lembrando que o valor pode ser maior pois ele retirará só o valor do aluguel.</font>
    
    <font class=f3><p>Lista de Casas do Eagle World:</p></font>

<div style="height: 500px; overflow: auto; margin: 10px;">
<table>
    <tr class="color0"><td width="35%"><font class=f2>House</font></td><td width="25%"><font class=f2>Location</font></td><td width="25%"><font class=f2>Owner</font></td><td><font class=f2>Size</font></td><td><font class=f2>Rent</font></td></tr>
<?php 
$HousesXML = simplexml_load_file($cfg['dirdata'].$cfg['house_file']);
$MySQL = new SQL();
$MySQL->myQuery('SELECT `players`.`name`, `houses`.`id` FROM `players`, `houses` WHERE `houses`.`owner` = `players`.`id`;');
if ($MySQL->failed())
	throw new Exception('SQL query failed:<br/>'.$SQL->getError());
while ($row = $MySQL->fetch_array()){
	$houses[(int)$row['id']] = $row['name'];
}
foreach ($HousesXML->house as $house){
	$i++;
	$list.= '<tr '.getStyle($i).'><td>'.htmlspecialchars($house['name']).'</td><td>'.htmlspecialchars($cfg['temple'][(int)$house['townid']]['name']).'</td><td>'.$houses[(int)$house['houseid']].'</td><td>'.$house['size'].'</td><td>'.$house['rent'].'</td></tr>'."\r\n";
}
echo $list;

?>
</table>
</div>
</div>
<div class="bot"></div>
</div>
<?php include('footer.inc.php');?>