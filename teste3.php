
<?php
include("Conexao.php"); 
require_once 'Conexao.php';
$db = new Geral();


?>
<html>
    <head>
	<meta charset="UTF-8"> 
    <title>Exemplo</title>
</head>
<body>

<form  name="Pesquisa" method="POST">
  <label for="fname">Pesquisa</label>
  <input type="text" name="pesquisar" placeholder="Digite o nome para pesquisar"><br><br>
  <input type="submit" value="Procurar">
</form>

<table border="1">
		<label for="tabela1">Histórico</label>
			<tr> 
			  <td>idtreino</td> 
			  <td>nomeAluno</td>
			  <td>dataHoraTreino</td>
			  <td>objetivoTreino</td>
			  <td>nomeInstrutor</td>
			  <td>descTreino</td>  
			</tr>
		<?php
		$db->select($_POST['pesquisar']);
		?>
</table> 

<table border="1">
		<label for="tabela2">Treino</label>
			<tr> 
			  <td>idserioe</td>
			  <td>nome</td>
			  <td>exercicio</td>
			  <td>tempoTotal</td>
			  <td>tempoParcial</td>
			  <td>tempoMedio</td>
			  <td>TempoMinimo</td>
			  <td>Repeticoes</td>
			  <td>treino_idtreino</td>
			</tr> 
		<?php 
		$db->select2($_POST['pesquisar']);
		?>	
</table> 
	<input type="submit" value="Inserir">
	<input type="submit" value="Alterar">

</body>
</html>
<?php
//mysql_free_result($result);
//mysql_close($link);
?>