<?php
 
try {  // tentar

    //definindo diretorio de destino
    $diretorio_destino = "enviados/";  //pasta onde será armazenado arquivo do upload

    //verificando se diretorio de destino existe
    if(!is_dir($diretorio_destino))  // se não for um diretorio destino
    {
        throw new Exception("diretorio não encontrado."); // manda mensgaem de erro
    } else {
        //echo "tudo certo até agora";

        //var_dump($_FILES); // verificar caracteristicas do arquivo

        //passando o arquivo do servidor concatenando com o nome dado ao arquivo.
        $nome_arquivo_servidor = $diretorio_destino . "enviado.png"; //caminho de novo arquivo no servidor

        //função para pegar o arquivo do temp e mover pro lugar certo
        if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor))  // precisa passar [$file_name] [$destination]
        {
            echo "arquivo Enviado!";  
        }else {
            throw new Exception("erro ao enviar. Erro:" . $_FILES["arquivo_up"]["error"]);
        }
    }



    //if(!is_writable($diretorio_destino)) // verifica se tem permissão para alterar destino em linux


} catch(Exception $e){

    echo $e-> getMessage();
}