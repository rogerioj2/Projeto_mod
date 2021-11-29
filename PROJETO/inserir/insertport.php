<?php


include "conexaoalt.php";
if ( $_POST ) {

    $nome = $_POST['txtnome'];
	$sobrenome = $_POST['txtsobrenome'];
	$telefone = $_POST['txttel'];
	$mensagem = $_POST['txtmensagem'];
	$ok =['Cadastro Ok'];
	


	



		try {
			$sql = $conn->prepare( 'insert into jet_shark values (:codigo,:nome,:sobrenome,:telefone,:mensagem)' );

			$sql->execute( array(
            ':codigo' => "",
			':nome' => $nome,
			':sobrenome' => $sobrenome,
			':telefone' => $telefone,
			':mensagem' => $mensagem,
			

			) );

			if ( $sql->rowCount() == 1 ) {
                
                $ok;
                
				header("Location:../Index.html");
			}
		} catch ( PDOException $s ) {
			echo $s->getMessage();
		}

	} else
    {
    
		echo "Não é possivel enviar";
	}






?>