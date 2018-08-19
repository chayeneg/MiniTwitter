<html lang="pt-br">
  <head>
    <title>Mini-Twitter</title>
  </head>
  <body>
    <h1>Mini-Twitter</h1>
    <h2>Cadastro</h2>
    <p>Informe todos os campos obrigatórios</p>
    <form action="processaCadastro.php" method="post">
      <input type="text" id="name" size="40" placeholder="Seu nome completo" required><br>
      <input type="text" id="username" size="40" placeholder="Nome de usuário" required><br>
      <input type="email" id="email" size="40" placeholder="Seu email" required><br>
      <input type="password" id="password" size="40" placeholder="Mínimo de 8 caracteres" required><br>
      <input type="password" id="confirm-password" size="40" placeholder="Mínimo de 8 caracteres" required><br>
      <input type="date" id="date" size="40" required><br>
      <select id="sex" required>
        <option value="masculino" selected>Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
      </select><br>
      <input type="text" id="city" size="40" placeholder="Sua cidade" required><br>
      <input type="text" id="website" size="40" placeholder="Seu site"><br>
      <input type="submit" id="submit" size="40" value="Enviar"><br>
    </form>
  </body>
</html>
