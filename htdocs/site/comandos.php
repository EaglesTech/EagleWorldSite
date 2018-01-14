<?php
      include ("include.inc.php");
            $ptitle="Comandos - $cfg[server_name]";
      include ("header.inc.php");
?>

<div id="content">
  <div class="top">Comandos IN GAME</div>
  <div class="mid">
      <font class=f3><p>Comandos para os servidores UP-LEVEL:</p></font>
      <p><font class=f2>/q -</font> <font class=f1>Informa o quanto você está carregando em dinheiro.</p></font>
      <p><font class=f2>!online -</font> <font class=f1>Informa o número de jogadores online no momento.</p></font>
      <p><font class=f2>!serverinfo -</font> <font class=f1>Informa as rates do server.</p></font>
      <p><font class=f2>!exp -</font> <font class=f1>Informa quanto falta de experiência para o próximo nível.</p></font>
      <p><font class=f2>!kills -</font> <font class=f1>Informa quantos você matou sem justificativa em um determinado período de tempo. (usado para saber se pode obter red skull ou ser banido)</p></font>
      <p><font class=f2>!data, !hora -</font> <font class=f1>Mostra um relógio com a real data/hora do Brasil a cada 5 segundos.</p></font>
      <p><font class=f2>!arena -</font> <font class=f1>Quando usado nos SQMs brancos do templo de Solaris, o jogador é teleportado para a Arena PVP Livre.</p></font>
      <p><font class=f2>!quit, !logout -</font> <font class=f1>Ti tira do jogo se estiver em Protection Zone(PZ).</p></font>
      <p><font class=f2><font color=yellow>!changesex</font> -</font> <font class=f1>Troca o sexo do jogador no custo de 5 dias de Premium Account.</p></font>
      <p><font class=f2><font color=yellow>!addon</font> -</font> <font class=f1>Possibilita o jogador a comprar 1 addon dos disponíveis na listagem em troca de 20 dias de Premium Account.</p></font>
      <p><font class=f2><font color=yellow>!shiny</font> -</font> <font class=f1>Possibilita o jogador a transformar 1 outfit em Shiny Outfit em troca de 35 dias de Premium Account.</p></font>
      <p><font class=f2>craw, crew, crau, creu -</font> <font class=f1>Com este comando você definitivamente acarca o jogador que estiver de costas pra você õO (sátira em cima da Dança do Creu, 100% original).</p></font>
      <br>
      <font class=f3><p>Sistema de Casas:</p></font>
      <p><font class=f2>!buyhouse -</font> <font class=f1>Usado para comprar uma casa. O jogador fica em frente a porta e usa este comando, tendo o dinheiro e nível necessário a casa é adquirida. (lembrando que só é possível comprar casas vazias)</p></font>
      <p><font class=f2>!sellhouse -</font> <font class=f1>Usado para vender uma casa a outro jogador. Usa-se este comando seguido do nick do jogador que irá comprar a casa, então os dois fazem um trade em que o comprador poe a quantia oferecida e o vendedor pode aceitar a oferta ou não. (usado apenas se o jogador tem um casa no game)</p></font>
      <p><font class=f2>!leavehouse -</font> <font class=f1>Com este comando você abandona sua casa e seus itens vão para seu depósito (depot ou dp).</p></font>
      <br>
      <font class=f3><p>Comandos para o WAR Server:</p></font>
      <p><font class=f2>!online -</font> <font class=f1>Informa o número de jogadores online no momento.</p></font>
      <p><font class=f2>!quit, !logout -</font> <font class=f1>Ti tira do jogo instantaneamente.</p></font>
      <p><font class=f2>!kills, !frags, !assists -</font> <font class=f1>Mostra quantos jogadores você já eliminou e quantas assistências tem.</p></font>
      <p><font class=f2>!sair, !leave, !sairtemplo -</font> <font class=f1>Estando nos SQMs brancos do seu templo, muda sua posição para uma aleatória fora do templo.</p></font>
      <p><font class=f2>!rank -</font> <font class=f1>Mostra o HALL OF FAME, onde é listado os 10 jogadores que mais mataram.</p></font>
      <p><font class=f2>!name "nick, !nome "nick -</font> <font class=f1>Troca seu apelido no documento de identidade para participar do HALL OF FAME.</p></font>
      <p><font class=f2>!changesex -</font> <font class=f1>Troca o sexo do jogador.</p></font>
      <p><font class=f2>craw, crew, crau, creu -</font> <font class=f1>Com este comando você definitivamente acarca o jogador que estiver de costas pra você õO (sátira em cima da Dança do Creu, 100% original).</p></font>
  </div>
  <div class="bot"></div>
</div>



<?php
	include ("footer.inc.php");
?>