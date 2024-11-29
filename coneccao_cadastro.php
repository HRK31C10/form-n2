<?php
date_default_timezone_set('America/Sao_Paulo');
$now = new DateTime('Now');
$datetime = $now->format('Y-m-d H:i:s'); 
include_once("conecao_bd.php");
$email_cad = $_POST['email_cad'];
$senha_cad = $_POST['senha_cad'];
$nome_cad = $_POST['nome_cad'];
$cpf = $_POST['cpf'];
$dtnasc = $_POST['dtnasc'];
$sexo = $_POST['sexo'];
$fone = $_POST['fone'];
$fone_emer = $_POST['fone_emer'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$hist_sau = $_POST['hist_sau'];
$obj_sau = $_POST['obj_sau'];
$nvl_fisico = $_POST['nvl_fisico'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $_POST['imc'];
$avaliacao = $_POST['avaliacao'];
$hora_desejada = $_POST['hora_desejada'];
$modalidades = $_POST['modalidades'];
$hora_pref = $_POST['hora_pref'];
$data = $datetime;
if (!$conn) {
 die('Não foi possível conectar ao Banco de Dados');
}
$sql = "INSERT INTO cadastro (email_cad,senha_cad,nome_cad,cpf,dtnasc,sexo,fone,fone_emer,cep,rua,num,bairro,hist_sau,obj_sau,nvl_fisico,peso,altura,imc,avaliacao,hora_desejada,modalidades,hora_pref,data) VALUES ";
$sql .= "('$email_cad', '$senha_cad','$nome_cad', '$cpf', '$dtnasc', '$sexo', '$fone','$fone_emer', '$cep', '$rua', '$num', '$bairro', '$hist_sau', '$obj_sau', '$nvl_fisico', '$peso', '$altura', '$imc', '$avaliacao', '$hora_desejada', '$modalidades', '$hora_pref', '$data')"; 
mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);
echo "<script type='text/javascript'>

alert('Parabens! Você se cadastrou, logo entraremos em contato por email! Obrigado.');

window.location = 'inicio.html';

</script>";
?>