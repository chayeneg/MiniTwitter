<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="cadastro.css"/>
</head>

<body>
  <form action="enviaCadastro.php" method="post">
    <div class="caixa">
      <h1>Crie sua conta</h1>
      <div class="formulario">

        <label>Nome</label>
        <input type="text" name="nome" size="40" maxlength="50" placeholder="Ex: Bruce Wayne" pattern="[a-z A-Z0-9]+" onkeyup="contaCharNome()" required/>
        <br>
        <br>
        <label>Usuário</label>
        <input type="text" name="usuario" size="40" maxlength="15" placeholder="Ex: waynecorp" pattern="^[A-Za-z0-9_]{1,15}$" onkeyup="contaCharUsername()" required/>
        <br>
        <br>
        <label>Email</label>
        <input type="email" name="email" size="40" maxlength="100" placeholder="Ex: bruce@wayne.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeyup="contaCharEmail()" required/>
        <br>
        <br>
        <label>Senha</label>
        <input type="password" name="senha" size="40" maxlength="16"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required/>
        <br>
        <br>
        <label>Confirmar senha</label>
        <input type="password" name="confirmasenha"  size="40" maxlength="100" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required/>
        <br>
        <br>
        <label>Data de nascimento</label>
        <input type="date" name="data" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1900-01-01" max="2100-12-31" required>
        <br>
        <br>
        <label>Sexo</label>
        <select name="sexo" required>
          <option value="">Selecione</option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">feminino</option>
          <option value="Outro"></option>
        </select>
        <br>
        <br>
        <label>Pais</label>
        <select name="pais" required>
          <option value="">Selecione</option>
          <option value="África do Sul">África do Sul</option>
          <option value="Albânia">Albânia</option>
          <option value="Alemanha">Alemanha</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antigua">Antigua</option>
          <option value="Arábia Saudita">Arábia Saudita</option>
          <option value="Argentina">Argentina</option>
          <option value="Armênia">Armênia</option>
          <option value="Aruba">Aruba</option>
          <option value="Austrália">Austrália</option>
          <option value="Áustria">Áustria</option>
          <option value="Azerbaijão">Azerbaijão</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrein">Bahrein</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Bélgica">Bélgica</option>
          <option value="Benin">Benin</option>
          <option value="Bermudas">Bermudas</option>
          <option value="Botsuana">Botsuana</option>
          <option value="Brasil">Brasil </option>
          <option value="Brunei">Brunei</option>
          <option value="Bulgária">Bulgária</option>
          <option value="Burkina Fasso">Burkina Fasso</option>
          <option value="botão">botão</option>
          <option value="Cabo Verde">Cabo Verde</option>
          <option value="Camarões">Camarões</option>
          <option value="Camboja">Camboja</option>
          <option value="Canadá">Canadá</option>
          <option value="Cazaquistão">Cazaquistão</option>
          <option value="Chade">Chade</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Cidade do Vaticano">Cidade do Vaticano</option>
          <option value="Colômbia">Colômbia</option>
          <option value="Congo">Congo</option>
          <option value="Coréia do Sul">Coréia do Sul</option>
          <option value="Costa do Marfim">Costa do Marfim</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Croácia">Croácia</option>
          <option value="Dinamarca">Dinamarca</option>
          <option value="Djibuti">Djibuti</option>
          <option value="Dominica">Dominica</option>
          <option value="EUA">EUA</option>
          <option value="Egito">Egito</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Emirados Árabes">Emirados Árabes</option>
          <option value="Equador">Equador</option>
          <option value="Eritréia">Eritréia</option>
          <option value="Escócia">Escócia</option>
          <option value="Eslováquia">Eslováquia</option>
          <option value="Eslovênia">Eslovênia</option>
          <option value="Espanha">Espanha</option>
          <option value="Estônia">Estônia</option>
          <option value="Etiópia">Etiópia</option>
          <option value="Fiji">Fiji</option>
          <option value="Filipinas">Filipinas</option>
          <option value="Finlândia">Finlândia</option>
          <option value="França">França</option>
          <option value="Gabão">Gabão</option>
          <option value="Gâmbia">Gâmbia</option>
          <option value="Gana">Gana</option>
          <option value="Geórgia">Geórgia</option>
          <option value="Gibraltar">Gibraltar</option>
          <option value="Granada">Granada</option>
          <option value="Grécia">Grécia</option>
          <option value="Guadalupe">Guadalupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guiana">Guiana</option>
          <option value="Guiana Francesa">Guiana Francesa</option>
          <option value="Guiné-bissau">Guiné-bissau</option>
          <option value="Haiti">Haiti</option>
          <option value="Holanda">Holanda</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungria">Hungria</option>
          <option value="Iêmen">Iêmen</option>
          <option value="Ilhas Cayman">Ilhas Cayman</option>
          <option value="Ilhas Cook">Ilhas Cook</option>
          <option value="Ilhas Curaçao">Ilhas Curaçao</option>
          <option value="Ilhas Marshall">Ilhas Marshall</option>
          <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
          <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
          <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
          <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
          <option value="Índia">Índia</option>
          <option value="Indonésia">Indonésia</option>
          <option value="Inglaterra">Inglaterra</option>
          <option value="Irlanda">Irlanda</option>
          <option value="Islândia">Islândia</option>
          <option value="Israel">Israel</option>
          <option value="Itália">Itália</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japão">Japão</option>
          <option value="Jordânia">Jordânia</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Latvia">Latvia</option>
          <option value="Líbano">Líbano</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lituânia">Lituânia</option>
          <option value="Luxemburgo">Luxemburgo</option>
          <option value="Macau">Macau</option>
          <option value="Macedônia">Macedônia</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malásia">Malásia</option>
          <option value="Malaui">Malaui</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Marrocos">Marrocos</option>
          <option value="Martinica">Martinica</option>
          <option value="Mauritânia">Mauritânia</option>
          <option value="Mauritius">Mauritius</option>
          <option value="México">México</option>
          <option value="Moldova">Moldova</option>
          <option value="Mônaco">Mônaco</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Nepal">Nepal</option>
          <option value="Nicarágua">Nicarágua</option>
          <option value="Niger">Niger</option>
          <option value="Nigéria">Nigéria</option>
          <option value="Noruega">Noruega</option>
          <option value="Nova Caledônia">Nova Caledônia</option>
          <option value="Nova Zelândia">Nova Zelândia</option>
          <option value="Omã">Omã</option>
          <option value="Palau">Palau</option>
          <option value="Panamá">Panamá</option>
          <option value="Papua-nova Guiné">Papua-nova Guiné</option>
          <option value="Paquistão">Paquistão</option>
          <option value="Peru">Peru</option>
          <option value="Polinésia Francesa">Polinésia Francesa</option>
          <option value="Polônia">Polônia</option>
          <option value="Porto Rico">Porto Rico</option>
          <option value="Portugal">Portugal</option>
          <option value="Qatar">Qatar</option>
          <option value="Quênia">Quênia</option>
          <option value="Rep. Dominicana">Rep. Dominicana</option>
          <option value="Rep. Tcheca">Rep. Tcheca</option>
          <option value="Reunion">Reunion</option>
          <option value="Romênia">Romênia</option>
          <option value="Ruanda">Ruanda</option>
          <option value="Rússia">Rússia</option>
          <option value="Saipan">Saipan</option>
          <option value="Samoa Americana">Samoa Americana</option>
          <option value="Senegal">Senegal</option>
          <option value="Serra Leone">Serra Leone</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Singapura">Singapura</option>
          <option value="Síria">Síria</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
          <option value="St. Lúcia">St. Lúcia</option>
          <option value="St. Vincent">St. Vincent</option>
          <option value="Sudão">Sudão</option>
          <option value="Suécia">Suécia</option>
          <option value="Suiça">Suiça</option>
          <option value="Suriname">Suriname</option>
          <option value="Tailândia">Tailândia</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tanzânia">Tanzânia</option>
          <option value="Togo">Togo</option>
          <option value="Trinidad & Tobago">Trinidad & Tobago</option>
          <option value="Tunísia">Tunísia</option>
          <option value="Turquia">Turquia</option>
          <option value="Ucrânia">Ucrânia</option>
          <option value="Uganda">Uganda</option>
          <option value="Uruguai">Uruguai</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Vietnã">Vietnã</option>
          <option value="Zaire">Zaire</option>
          <option value="Zâmbia">Zâmbia</option>
          <option value="Zimbábue">Zimbábue</option>
        </select>
        <br>
        <br>
        <label>Site</label>
        <input type="text" name="site" size="40" maxlength="100" placeholder="Ex: waynecorp.com" >
        <br>
        <br>
      </div>
      <input type="submit" name="cadastrar" value="Enviar">
    </div>
  </form>
</body>

</html>
