<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Upload Simples de Arquivos</title>
    <meta charset="UTF-8">
</head>
<body>

    <div id="global">
        <header>
            <h1>Upload simples de Arquivos</h1>
        </header>

        <main>
            <form method="post" action="up_simples_melhorado.php" enctype="multipart/form-data"> <!--form para upload-->

                <label>Arquivo:
                    <input name="arquivo_up" type="file" />
                </label>

            
                <button type="submit">Enviar</button>
            </form>
        </main>
        <footer>

        </footer>

    </div>
    
</body>
</html>