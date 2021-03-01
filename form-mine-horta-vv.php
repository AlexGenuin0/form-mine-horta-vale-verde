<?php

if(!isset($firma)) 
{
	$firma = "";
	$data = "";
	$num = "";
	$ende = "";
	$comp = "";
    $bairro = "";
	$cidade = "";
	$estado = "";
	$cep = "";
	$cnpj = "";
    $inscr = "";
	$tels = "";
	$cel = "";
	$email = "";
	$obs = "";
}

?>

<h1>Mine Horta Vale Verde </h1>

<form method="post" action="salva-resposta.php">
    <p>Firma: <input type="text" name="firma" size="80" value="<?=$firma?>"></p>
    <p>Data: <input type="text" name="fata" size="80" value="<?=$data?>"></p>
    <p>Nº <input type="text" name="num" size="80" value="<?=$num?>"></p>
    <p>Endereço: <input type="text" name="endereco" size="80" value="<?=$ende?>"></p>
    <p>Complemento: <input type="text" name="comp" size="80" value="<?=$comp?>"></p>
    <p>Bairro: <input type="text" name="bairro" size="80" value="<?=$bairro?>"></p>
    <p>Cidade: <input type="text" name="cidade" size="80" value="<?=$cidade?>"></p>
    <p>Estado: <input type="text" name="estado" size="80" value="<?=$estado?>"></p>
    <p>CEP: <input type="text" name="cep" size="80" value="<?=$cep?>"></p>
    <p>CNPJ: <input type="text" name="cnpj" size="80" value="<?=$cnpj?>"></p>
    <p>Inscrição: <input type="text" name="inscr" size="80" value="<?=$inscr?>"></p>
    <p>Telefone(s): <input type="text" name="tels" size="80" value="<?=$tels?>"></p>
    <p>Celular: <input type="text" name="cel" size="80" value="<?=$cel?>"></p>
    <p>Email: <input type="text" name="email" size="80" value="<?=$email?>"></p>
    <p>OBS:</p>
    <p><textarea name="obs" rows="6" cols="80"><?=$obs?></textarea></p>
    <p><button type="submit">Envia</button></p>
</form>


