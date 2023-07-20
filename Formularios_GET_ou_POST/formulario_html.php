<!DOCTYPE html>
<html lang="en">
<head>
    <title>Primeiro Formulário</title>
    <meta charset="UTF-8">
</head>
<body>

<div id="global">
    <header>
        <h1>Cadastro de Clientes</h1>
    </header>

    <main>
        <form id="" method="post" action="processa_formulario.php"> <!--trocar o "method" post para get-->
            <label for="nome"> Nome:</label>
            <input id="nome" name="nome" type="text" placeholder="Digite seu nome:" required>

            <label for="email"> E-mail: </label>
            <input id="email" name="email" type="email" placeholder="Digite seu e-mail:" required>

            <label for="estado"> Estado: </label>
            <select name="estado" id="estado">
                <option>Selecione aqui</option>
                <optgroup>
                    <option value="SP">São Paulo</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PR">Paraná</option>
                </optgroup>
            </select>


            <label for="cidade">Cidade: </label>
            <input id="cidade" name="cidade" type="text" placeholder="Informe sua cidade:" required>

            <button type="submit">Enviar</button>
        </form>
    </main>
    <footer>

    </footer>

</div>
    
</body>
</html>