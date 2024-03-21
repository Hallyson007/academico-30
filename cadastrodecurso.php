<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
    <style>
        body {
            transition: background-color 0.5s ease;
        }

        .dark-mode {
            background-color: #121212;
            color: white;
        }
    </style>



</head>

<body>
    <button onclick="toggleDarkMode()">Alternar Modo</button>

    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
    <p>Preencher os dados do Curso</p>

    <fieldset>
        <legend>Cadastro do Curso</legend>
        <form action="cadastro_curso.php" method="post">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </p>
            <p>
                <label for="duracao">Duração:</label>
                <input type="text" name="duracao" id="duracao">
            </p>
            <p>
                <label for="coordenador">Coordenador:</label>
                <select name="coordenador" id="coordenador">
                    <?php
                    require('script/conexao.php');
                    $sql = "SELECT cpf,nome FROM professor";
                    $resultado = mysqli_query($conexao, $sql);
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='{$row['cpf']}'>{$row['nome']}</option>";
                    }

                    ?>
                </select>

            <p>
                <label for="nivel">Nível do Curso:</label>
                <select name="nivel" id="select">
                    <option value="">Selecione o nível do curso</option>
                    <option value="tecnico">Técnico</option>
                    <option value="tecnologico">Tecnológico</option>
                    <option value="bacharelado">Bacharelado</option>
                    <option value="especializacao">Especialização</option>
                </select>
            </p>
            <p>
                <label for="modalidade">Modalidade</label>
                <select name="modalidade" id="modalidade">
                    <option value="">Selecione o Modalidade do curso</option>
                    <option value="presencial">Presencial</option>
                    <option value="ead">Educação á distancia</option>

                </select>
            </p>

            </p>
            <p>
                <input type="reset" value="Limpar">
                <input type="submit" value="Enviar">
            </p>
    </fieldset>

    </form>


</body>

</html>