<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida sem restrições</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="./assets/images/logosf.png" alt="Logo" />
        <div class="form">
            <form method="post" action="process_form.php">
                <label for="username" class="label">Nome:</label>
                <input type="text" id="username" name="username" class="input" placeholder="Digite seu nome" required>
                <label for="idade" class="label">Idade:</label>
                <input type="text" id="idade" name="idade" class="input" placeholder="Digite sua idade" required>
                <label for="sexo" class="label">Sexo:</label>
                <select id="sexo" name="sexo" class="select" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select><br><br>
                <label for="cidade" class="label">Cidade:</label>
                <input type="text" id="cidade" name="cidade" class="input" placeholder="Digite sua cidade" required>
                <label for="estado" class="label">Estado:</label>
                <select id="estado" name="estado" class="select" required>
                    <option value="AC">AC - Acre</option>
                    <option value="AL">AL - Alagoas</option>
                    <option value="AP">AP - Amapá</option>
                    <option value="AM">AM - Amazonas</option>
                    <option value="BA">BA - Bahia</option>
                    <option value="CE">CE - Ceará</option>
                    <option value="DF">DF - Distrito Federal</option>
                    <option value="ES">ES - Espírito Santo</option>
                    <option value="GO">GO - Goiás</option>
                    <option value="MA">MA - Maranhão</option>
                    <option value="MT">MT - Mato Grosso</option>
                    <option value="MS">MS - Mato Grosso do Sul</option>
                    <option value="MG">MG - Minas Gerais</option>
                    <option value="PA">PA - Pará</option>
                <option value="PB">PB - Paraíba</option>
                <option value="PR">PR - Paraná</option>
                <option value="PE">PE - Pernambuco</option>
                <option value="PI">PI - Piauí</option>
                <option value="RJ">RJ - Rio de Janeiro</option>
                <option value="RN">RN - Rio Grande do Norte</option>
                <option value="RS">RS - Rio Grande do Sul</option>
                <option value="RO">RO - Rondônia</option>
                <option value="RR">RR - Roraima</option>
                <option value="SC">SC - Santa Catarina</option>
                <option value="SP">SP - São Paulo</option>
                <option value="SE">SE - Sergipe</option>
                <option value="TO">TO - Tocantins</option>
                </select><br><br>
                <button type="submit" class="button">Enviar</button>
            </form>
        </div>
    </div>
    
</body>

</html>
