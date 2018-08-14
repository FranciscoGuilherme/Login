<?php
  require 'php/db_login.php';
?>

<html>
  <header>
    <title>Login</title>

    <meta charset="UTF-8" />
  </header>

  <body>
    <nav>
    </nav>

    <section>
      <article>
        <form method="POST">
          <label for="email">E-mail:</label>
          <input id="email" type="email" name="email" placeholder="Digite seu e-mail" />

          <br />
          <br />

          <label for="senha">Senha:</label>
          <input id="senha" type="password" name="senha" placeholder="Digite sua senha" />

          <br />
          <br />

          <input type="submit" value="Logar" />
        </form>
      </article>
    </section>

    <aside>
    </aside>

    <footer>
    </footer>
  </body>
</html>
