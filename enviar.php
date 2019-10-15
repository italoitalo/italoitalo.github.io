<?php
	//recebe as variaveis
  $nome		= $_POST['nome'];
  $email	= $_POST['email'];
  $tel		= $_POST['tel'];
  $mensagem = $_POST['mensagem'];
  $assunto  = $_POST['assunto']; //2  
  $to 		= "ialvesjesus01@gmail.com"; //1

  //envia o email
  $enviaremail =  mail(
  	$to,
	$assunto,
  	"
  	Mensagem: $mensagem

  	TELEFONE: $tel

  	FROM: $nome<$email>");
  //valida se foi enviado
  if ($enviaremail) {
  	$mensagem = 'Sua mensagem foi enviada com sucesso!';
	header("Location: http://www.quadroecia.com/index.php?msg=$mensagem");
  	//echo ‘<meta HTTP-EQUIV=”Refresh” CONTENT=”0; URL=index.html”>’;  	 	
  	//echo  "<script>alert('$nome seu Email foi enviado com Sucesso!');</script>";

  } else{
  	$mensagem = 'Aconteceu algum erro! Sua mensagem não foi enviada.';
	header("Location: http://www.quadroecia.com/index.php?msg=$mensagem");
  }
  //mail(email que recebe, titulo do email, dentro do email)
?>

