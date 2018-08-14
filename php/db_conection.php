<?php
  $dsn = 'mysql:dbname=blog;host=localhost';
  $auth = array(
    'user' => 'root',
    'pass' => ''
  );

  try
  {
    $db = new PDO( $dsn, $auth['user'], $auth[ 'pass'] );
  }
  catch ( PDOException $e)
  {
    echo 'Falhou: '.$ex -> getMessage();
  }

?>
