<?php
include ("include.inc.php");
$ptitle="Confirmar Depósito - $cfg[server_name]";
include ("header.inc.php");
?>

<div id="content">
	<div class="top">Confirmar Depósito</div>
	<div class="mid">
			<font class=obs><p>OBS: Este método de confirmação só é adotado caso o jogador não tenha recebido suas Eagle automaticamente após o PagSeguro confirmar seu depósito.</p></font>
            
			<p><font class=f1>Quando o PagSeguro confirma um depósito, é enviado uma mensagem para o email que você cadastrou no site deles. Nesta mensagem contém o número de autenticação, segue um exemplo:</font></p>
			<center><p><img src="images/autenticacao.jpg"></p></center>
			
			<p><font class=f1>Então a única coisa que é necessário fazer para confirmar seu depósito, é nos enviar um email para <font color=green>- eagleworldserver@gmail.com aqui!.
			<center>
            <table border=1 cellpadding=1 cellspacing=1 width="300">
            <tr>
            <td align="left">
            <font class=f2>
            <p> --> Nick/Nome no Eagle World:</p>
            <p> --> Valor do Depósito:</p>
			<p> --> Data do Depósito:</p>
			<p> --> Autenticação PagSeguro:</p>
			</font>
            </td>
            </tr>
            </table>
			</center>

            <font class=f3><p>Tempo de Ativação:</p></font>
            <font class=f1><p>Assim que receber-mos seu email, confirmaremos os dados contidos neste e em um prazo máximo de 3 dias úteis (segunda-feira à sexta-feira) você receberá seus Eagle Gold no Eagle Shop!</p></font>
            
			<font class=f3><p>Dicas de Valor:</p></font>
            <font class=f1>
			<p>Evite mandar emails em partes, como dados de confirmação em um email e dados do formulário em outro, ou seja, se esqueceu algo, mande um email COMPLETO já com a correção.</p>
            <p>Dê atenção dobrada na hora de escrever seu nick (nome do personagem), pois não iremos transferir Eagle Gold de uma conta pra outra.</p>
			</font>
			
            <font class=obs><p><b>Atenção:</b> Qualquer tentativa de fraude resultará na exclusão da conta do responsável ou a punição que nos melhor convir diante do caso.</p></font>
</div>
<div class="bot"></div>
</div>

<?php
	include ("footer.inc.php");
?>