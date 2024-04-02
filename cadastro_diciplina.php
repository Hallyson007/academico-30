<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h2>Cadastro de Curso</h2>
    <p>Prezado aluno(a) preencha com seus dados: </p>
    <form action="cadastromatricula.php" method="post">
    <p> <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>

        <p>
            <label for="carga">Carga Horaria</label>
            <input type="number" name="carga" id="carga">
        </p>
        <p>
            <label for="creditos">Creditos</label>
            <input type="number" name="creditos" id="creditos">
        </p>
        <p>
            <label for="ementa">Ementa</label>
            <textarea name="ementa" id="ementa" cols="40" rows="6"></textarea>
        </p>
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">

  
    </form>
   

    </table>
</body>
</html>