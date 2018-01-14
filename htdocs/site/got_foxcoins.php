<?php
include ("include.inc.php");
$ptitle="Obter Eagle Gold - $cfg[server_name]";
include ("header.inc.php");
?>

<div id="content">
	<div class="top">Obter Eagle Gold</div>
	<div class="mid">
		<center>
	<font class=f1>
		<p>Voce pode doar utilizando o PagSeguro, sendo assim, voce ajuda no desenvolvimento do servidor</p>
		<p>Apos o pagamento, o jogador deve mandar um e-mail para eagleworldserver@gmail.com informando o nome do char em que será ativado os Eagle Golds!</p>
		<p>Obs. NENHUM Eagle Gold será entregue se o pagamento não estiver APROVADO!</p>
	</font>
	<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
	<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
		<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
		<input type="hidden" name="currency" value="BRL" />
		<input type="hidden" name="receiverEmail" value="ps.eggabriel@gmail.com" />
		<input type="hidden" name="iot" value="button" />
		<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/120x53-doar-azul.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
	</form>
	<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
	<br>
</center>
		<!-- <form name="checkout_confirmation" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml" method="post" onsubmit="return validaDados();"><br>
		<input type="hidden" name="email_cobranca" value="ps.eggabriel@gmail.com">
		<input type="hidden" name="tipo" value="CP">
		<input type="hidden" name="moeda" value="BRL">
		<input type="hidden" name="item_descr_1" value="Eagle Golds">
		<input type="hidden" name="item_id_1" value="1">
		<input name="item_valor_1" type="hidden" value="1.00" size="5" maxlength="5">

    	<table width="100%" cellpadding="3" cellspacing="0">
    		<tr align=center><td width="35%"><font class=f2>Seu Nome Real:</font></td></tr>
    		<tr align=center><td><input type="text" name="nome" id="nome" size="25" /></td></tr>
    		<tr align=center><td width="35%"><font class=f2><br>Número de Eagle Golds:</font></td></tr>
    		<tr align=center><td><input name="item_quant_1" value="10" id="item_quant_1" style="width:27px;" maxlength="3" /></td></tr>
			<tr align=center><td><font class=f2><br>Deseja Enviar Como Presente:</font></td></tr>
  		  	<tr align=center><td><input type="radio" name="presente" onclick="mostrarPersonagem(1);" value="1" /> <font class=f1>Sim</font> <input type="radio" name="presente"  onclick="mostrarPersonagem(0);" value="0" checked /> <font class=f1>N&atilde;o</font></td></tr>
		</table>
		
		<table width="100%" cellpadding="3" cellspacing="0">
    		<tr id="principal" style="display:none;" align=center><td width="35%">
    			<font class=f2><br>Nome do Personagem:</font><br><br><input type="text" name="presente_char" id="presente_char" size="25" onkeyup="checkName();" />
					<div id="name_check"><b><font color="red">Digite o nome do personagem.</font></b></div>
				</td>
			</tr>
    		<tr align=center>
    			<td colspan="2">
        			<br><input type="submit" value="Finalizar" id="finaliza" />
       			</td>
    		</tr>
    	</table>
		</form>
		<center><br>
			<font class=obs><b>Dica:<br></b>Devido a um problema no Internet Explorer, aconselhamos utilizar outro navegador caso receba a mensagem do PagSeguro de sessão expirada.</font></center>
		<script type="text/javascript">
		function mostrarPersonagem(personagem){
			if(personagem == 1){
				document.getElementById('principal').style.display="block";
				document.getElementById('principal2').style.display="inherit";
			}
			else {
				document.getElementById('principal').style.display="none";
				document.getElementById('principal2').style.display="none";
			}
		}

		function validaDados(){
			var CliNome = document.getElementById('nome');
			var produtoNome = document.getElementById('itemQuantity1');
			var produtoValor = document.getElementById('item_valor_1');	

			if(CliNome.value == ""){
				alert("Faltou seu Nome Real");
				return false;
			}
			else if(produtoNome.value == ""){
				alert("Faltou informar quanto Eagle Gold deseja adquirir!");
				return false;
			}
			else {
				exp = /^\d+$/

				if(produtoNome.value < 1){
					produtoNome.value = 1;
				}
				else if(!exp.test(produtoNome.value)){
					alert("Digite apenas números no campo do Eagle Gold!");
					return false;
				}
			}
		}
		</script> -->
    </div>
	<div class="bot"></div>
</div>

<?php
	include ("footer.inc.php");
?>