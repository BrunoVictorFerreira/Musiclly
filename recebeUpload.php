<?php
      error_reporting(0);
      $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
      session_save_path($serve_file.'cache/temp');
      session_start();
      include_once($serve_file.'php/banco.php');
    session_start();
    if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
    }
/******
 * Upload de imagens
 ******/
 
// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
    
 
    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
        
        // Concatena a pasta com o nome
        $destino = 'uploads/'.$novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            $sql = "UPDATE cadastro set imagem='/musiclly/$destino' where id = $id";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('Foto Alterada Com Sucesso!');window.location.href='/musiclly/painel.php';</script>";
            }
            
        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';