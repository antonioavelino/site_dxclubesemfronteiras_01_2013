<?
##########################################################
/////////////////////////////////////////////////////  ###
/// Autor: Mateus Campos                         ////  ###
/// E-mail: mateuscampos@globo.com               ////  ###
/// Site: www.centralwarez.com                   ////  ###
/// Msn: mateus@centralwarez.com                 ////  ###
/// Obs: favor n�o retirar os nossos cr�ditos!!! ////  ###
/////////////////////////////////////////////////////  ###
##########################################################
// aqui come�a o script
//pega as variaveis por POST
$nome      = $_POST["nome"];
$site     = $_POST["site"];
$email   = $_POST["email"];
$fone  = $_POST["fone"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

global $email; //fun��o para validar a vari�vel $email no script todo

$data      = date("d/m/y");                     //fun��o para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //fun��o para pegar o ip do usu�rio
$navegador = $_SERVER['HTTP_USER_AGENT'];       //fun��o para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a fun��o date

//aqui envia o e-mail para voc�
mail ("dxclubesemfronteiras@hotmail.com",                       //email aonde o php vai enviar os dados do form
      "$assunto",
      "Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nSite: $site\nE-mail: $email\nTelefone: $fone\n\nMensagem: $mensagem",
      "From: $email"
     );

//aqui s�o as configura��es para enviar o e-mail para o visitante
$site   = "dxclubesemfronteiras@hotmail.com";                    //o e-mail que aparecer� na caixa postal do visitante
$titulo = "Recebemos seu e-mail";                  //titulo da mensagem enviada para o visitante
$msg    = "$nome, Obrigado por entrar em contato conosco, em breve entraremos em contato";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );
echo "<p align=center>$nome, sua mensagem foi enviada com sucesso!</p>";
echo "<p align=center>Estaremos retornando em breve.</p>";

?>
