<?php
  require 'db_conection.php';

  session_start();

  if ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) )
  {
    $usuario = array(
      'email' => addslashes( $_POST['email'] ),
      'senha' => md5( addslashes( $_POST['senha'] ) )
    );

    try
    {
      $sql = "SELECT * FROM restrita WHERE email = '".$usuario['email']."' AND
                                           senha = '".$usuario['senha']."'";

      $sql = $db -> query( $sql );

      if ( ($sql -> rowCount()) > 0 )
      {
        $dados = $sql -> fetch();

        $_SESSION['id'] = $dados['id'];

        header( 'Location: ../index.php' );
      }
    }
    catch ( PDOException $ex )
    {
      echo 'Falhou: '.$ex -> getMessage();
    }

  }
?>
