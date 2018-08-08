  <html lang="pt">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/login.css">


    <title> Login de Usuário </title>
  </head>
  <body>
    <main>
      <section id="tela-login">
        <div class="caixa">
          <div class="conteudo">
        <header><h1> Faça o Login </h1></header>
        <p> Entre com seu usuario e a senha</p>
        <form method="POST" action="processaLogin.php">
          <label> <strong>Usuario: </label><input type="text" size="40" name="username" size="30"><br>
          <br><label>Senha:</strong> </label><input type="password" size="40" name="password"><br>
          <br><input type="submit" value="Acessar" name="botaoAcessar"><br>
          <br><input type="submit" value="Esqueci a Senha" onclick="location.href='LembrarSenha.php'"></a>
        </form>
      </section>
    </div>
  </div>
    </main>
  </body>
  </html>
