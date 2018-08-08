<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="css/cadastro.css"/>
</head>

<body>

  <section id="panel">
    <form action="enviaCadastro.php" method="post">
      <div class="caixa">
        <h1>Crie sua conta</h1>
        <p>Os campos com o icone<img src="https://png.icons8.com/color/50/000000/high-priority.png" name="img-topo">são obrigatórios. </p>
        <br>
        <div class="formulario"><strong>
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" size="40" maxlength="50" placeholder="Ex: Bruce Wayne" pattern="[a-z A-Z0-9]+" onkeyup="contaCharNome()" required/>
          <img src="https://png.icons8.com/color/50/000000/high-priority.png" name="img-padrao"><br/><br/>

          <label for="usuario">Usuário</label>
          <input type="text" id="usuario" name="usuario" size="40" maxlength="50" placeholder="Ex: waynecorp" pattern="^[A-Za-z0-9_]{1,15}$" onkeyup="contaCharUsername()" required/>
          <img src="https://png.icons8.com/color/50/000000/high-priority.png" name="img-padrao"><br/><br/>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" size="40" maxlength="50" placeholder="Ex: bruce@wayne.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeyup="contaCharEmail()" required/>
          <img src="https://png.icons8.com/color/50/000000/high-priority.png" name="img-padrao"><br/><br/>

          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" size="40" maxlength="50"  pattern="[a-z0-9]{6,12}" title="Utilize os caracteres" required/>
          <img src="https://png.icons8.com/color/50/000000/high-priority.png" name="img-padrao"><br/><br/>

          <label for="confirmasenha">Confirmar senha</label>
          <input type="password" id="confirmasenha" name="confirmasenha"  size="40" maxlength="50" pattern="[a-z0-9]{6,12}" required/>
          <img src="https://png.icons8.com/color/50/000000/high-priority.png" name="img-padrao"><br/><br/>

          <label for="data">Data de nascimento</label>
          <input type="date" id="data" name="data" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1900-01-01" max="2100-12-31" required>
          <img src="https://png.icons8.com/color/50/000000/high-priority.png" name="img-data"><br/><br/>
          <label for="sexo">Sexo</label>

          <select name="sexo" id="sexo" required>
            <option value="">Selecione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">feminino</option>
            <option value="Outro"></option>
          </select>
          <img src="https://png.icons8.com/color/50/000000/high-priority.png"name="img-sexo"><br/><br/>

          <label for="cidade">Cidade</label>
          <input type="text" id="cidade" name="city" size="40" maxlength="100" placeholder="Cidade"/>
          <img src="https://png.icons8.com/color/50/000000/high-priority.png"name="img-padrao"><br/><br/>

          <label for="site">Site</label>
          <input type="text" id="site" name="site" size="40" maxlength="100" placeholder="Ex: waynecorp.com"/><br/><br/>
        </div><br/></strong>
        <input type="submit" name="cadastrar" value="Enviar">
      </div>
    </form>
  </section>
</body>

</html>
