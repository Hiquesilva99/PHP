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

        //verificar se o arquivo é executavel
        if(is_executable($_FILES["arquivo_up"]["tmp_name"])) 
            throw new Exception("Arquivos Executáveis não são permitidos");
        
            //obtendo a extensão do arquivo
            $ext_arquivo = pathinfo($_FILES["arquivo_up"]["name"], PATHINFO_EXTENSION);

            //colocando um nome unico para cada arquivo (o nome vai ser "enviado_exemplo.extensão"
            $nome_unico = uniqid("enviado_") . "." . $ext_arquivo;

        $nome_arquivo_servidor = $diretorio_destino . $nome_unico; //caminho de novo arquivo no servidor
        

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