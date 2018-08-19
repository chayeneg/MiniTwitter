<html lang="pt-br">
  <head>
    <title>Mini-Twitter</title>
  </head>
  <body>
    <h1>Mini-Twitter</h1>
    <h2>Cadastro</h2>
    <p>Os campos com * são obrigatórios.</p>
    <form action="processa-cadastro.php" method="post">
      <input type="text" id="name" name="name" size="40" placeholder="Seu nome completo" required>*<br><br>
      <input type="text" id="username" name="username" size="40" placeholder="Nome de usuário" required>*<br><br>
      <input type="email" id="email" name="email" size="40" placeholder="Seu email" required>*<br><br>
      <input type="password" id="password" name="password" size="40" placeholder="Mínimo de 8 caracteres" required>*<br><br>
      <input type="password" id="confirmation" name="confirmation" size="40" placeholder="Mínimo de 8 caracteres" required>*<br><br>
      <input type="date" id="date" name="date" size="40" required>*<br><br>
      <select id="sex" name="sex" required>
        <option value="masculino" selected>Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
      </select>*<br><br>
      <input type="text" id="city" name="city" size="40" placeholder="Sua cidade" required>*<br><br>
      <input type="text" id="website"  name="website" size="40" placeholder="Seu site"><br><br>
      <input type="submit" id="submit" size="40" value="Enviar"><br><br>
    </form>
  </body>
</html>
