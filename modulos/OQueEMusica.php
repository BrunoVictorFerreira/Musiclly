<?php

$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'php/banco.php');
include_once($serve_file.'php/functions.php');
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
  }else{
    echo "<script>window.location.href='index.php';</script>";
}
$verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 1";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if($row['progresso'] <= 17){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 17 where id_cad = $id and id_Curso = 1";
  $resultProg = mysqli_query($conn, $progresso);
}

?>
<html lang="pt_br">

<head>
    <!-- STYLES =========================================-->
    <link rel="stylesheet" type="text/css" href="/musiclly/css/style.css">
    <style>
        .titulosh1 {
            color: #1778aa;
        }

        .boldAzul {
            color: #1778aa;
        }

        .circulosModulos {
            width: 50px;
            height: 50px;
            margin-top: 10px;
            background-color: #1778aa;
            border-radius: 50%;
            color: white;
            box-shadow: 2px 2px rgba(0, 0, 0, .2);
        }

        .titleCirculos {
            text-align: center;
            padding-top: 20%;

        }

        .proximo {
            float: right;
            color: #1778aa;
        }
        .backMenuExpandido:hover {
      background-color: rgba(23, 120, 170, .2);

    }
    </style>
    <!--METAS   =========================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <!-- BOOTSTRAP CSS =========================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP JS =========================================-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--FONTES ================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!--SCRIPTS JS-->
    <script>
        function msg() {
            location.href = '#';
        }
    </script>
    <!--SCRIPTS JS-->
    <script>
        function msg() {
            location.href = '#';
        }

        var i = 1;


        $(document).ready(function() {
            $('#menuUsuarioExpandido').hide();

            $("#menuUsuario").click(function() {
                $("#menuUsuarioExpandido").slideToggle("slow");
            });
        });
    </script>
</head>

<body style="background-image: url('/musiclly/www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">
    <div class="container-fluid">
        <!--CLASSE CONTAINER =======================-->
        <div class="container">
            <?php include($serve_file. 'includes/header.php'); ?>
        </div>
        <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->

        <div class='container' style='height: 1000px'>
            <!--ABERTURA DA DIV CONTAINER -->
            <div class='row'>
                <div class='col-1'>
                    <div style='height:60%;margin-top: 180%'>
                        <a href='/musiclly/modulos/OQueEMusica.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.1</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/NotasMusicais.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.2</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/Timbre.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.3</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/SustenidoEBemol.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.4</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/TomESemitom.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.5</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/NotasNoInstrumento.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.6</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/questionarios/modulo_1_Quest.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.7</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-11'>
                    <p class='text-break'>

                        <h1 class='titulosh1'>1.1 O que é música?</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                            A pergunta “<b class='boldAzul'>o que é música</b>” tem sido alvo de discussão há décadas.Alguns autores defendem que <b class='boldAzul'>música</b> é a combinação de sons e silêncios de uma maneira organizada.
                            Vamos explicar com um exemplo: Um ruído de rádio emite sons, mas não de uma forma organizada, por isso não é classificado como música. Essa definição parece simples e completa, mas <b class='boldAzul'>definir música</b> não é algo tão óbvio assim. Podemos classificar um alarme de carro como música? Ele emite sons e silêncios de uma maneira organizada, mas garanto que a maioria das pessoas não chamaria esse som de música.
                            <br /><b style='color:#f27d16'>Então, o que é música afinal?</b><br />
                            De uma maneira mais didática e abrangente, a música é composta por <b class='boldAzul'>melodia, harmonia e ritmo</b>.
                            <br /><b style='color:#f27d16'>Melodia</b><br />
                            Melodia é a voz principal do som, é aquilo que pode ser cantado.

                            <br /><b style='color:#f27d16'>Harmonia</b><br />
                            Harmonia é uma sobreposição de notas que servem de base para a melodia. Por exemplo, uma pessoa tocando violão e cantando está fazendo harmonia com os acordes no violão e melodia com a voz. Cada acorde é uma sobreposição de várias notas, como veremos adiante em outros tópicos. Por isso que os acordes fazem parte da harmonia.
                            Obs: Vale a pena destacar que a melodia não necessariamente é composta por uma única voz; é possível também que ela tenha duas ou mais vozes, apesar de ser menos frequente essa situação. Para diferenciar melodia de harmonia nesse caso, podemos fazer uma comparação com um navio no oceano. O navio representa a harmonia e as pessoas dentro do navio representam a melodia. Tanto o navio quanto as pessoas estão se mexendo, e as pessoas se mexem dentro do navio enquanto ele trafega pelo oceano. Repare que o navio serve de base, suporte, para as pessoas. Elas têm liberdade para se movimentar apenas dentro do navio. Se uma pessoa pular para fora do navio, será desastroso. Com melodia e harmonia, é a mesma coisa.

                            <br /><b style='color:#f27d16'>Ritmo</b><br />
                            Ritmo é a marcação do tempo de uma música. Assim como o relógio marca as horas, o ritmo nos diz como acompanhar a música.
                            Cada um desses três assuntos precisa ser tratado à parte. Um conhecimento aprofundado permite uma manipulação ilimitada de todos os recursos que a música fornece, e é isso o que faz os “sons e silêncios” ficarem tão interessantes para nosso ouvido. Aqui no Descomplicando a Música você vai aprender como trabalhar tudo isso. Afinal, mais importante do que saber o que é música, é saber como trabalhar em cima dela.

                            <br /><b style='color:#f27d16'>Prepare-se!</b><br />
                        </fieldset>
                    </p>
                    <div class='row'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/NotasMusicais.php' class='proximo'>Ir para 1.2(Notas Musicais) >></a></div>
                    </div>
                </div>
            </div>
        
        
        
           
            
            
            

 
        <div class="row justify-content-center">
            <div class='col-6' style=''>
            <fieldset style="background-color:rgba(23,120,170,.1);padding: 0px 10px;border-radius: 5px;margin-top: 10px;margin-bottom: 50px">
            <legend><h4 style="font-family: roboto;font-size: 20px;color:darkorange;text-shadow: 1px 1px rgba(0,0,0,.2)">Comentários</h4></legend>    
            
                
                <?php
                    $sqlComent = "SELECT * FROM comentarios where sessao = 1"; 
                    $resultComent = mysqli_query($conn, $sqlComent);
                    while($row = mysqli_fetch_assoc($resultComent)){
                        $id2 = $row['id'];
                        $sql = "SELECT a.usuario from cadastro as a join comentarios as b on a.id = b.id_cad where b.id = '$id2'";
                        $result2 = mysqli_query($conn, $sql);
                        $row23 = mysqli_fetch_assoc($result2);
                        echo "<div style='padding:2px;border-bottom: 1px solid black'>
                                <span style='color:#1778aa;font-size: 15px;font-weight: bold;float:left'>".$row['titulo']."</span><br>
                                <span class='text-break' style='font-size: 12px'>".$row['descricao']."</span><br>
                                <span style='float:left;font-size: 10px;margin-top: 5px'><b>Feito em:</b> ".$row['dataEnviada']."</span>
                                <span style='float:right'>
                                <form action='/musiclly/modulos/perfil.php' method='GET'>
                                    <input type='submit' name='usuarioNome' value='".$row23['usuario']."' style='background-color:rgba(0,0,0,.0);border: 0'>
                                </form>
                                
                                
                                
                                </span><br>
                                </div>";
                    }
                ?>

                <?php

                ?>
                <fieldset style="width: 100%;padding: 5px;border:1px solid #1778aa;border-radius: 15px;margin-top: 10px;margin-bottom: 15px">
                <p style="font-size: 12px;color:darkorange;font-weight: bold">Nova Mensagem</p>
                <form action='' method='POST'>
                    <label for="titulo" style="width: 100%">Titulo
                    <input type='text' name="titulo" id="titulo" maxlength="50" style="width: 100%;outline:0;border: 1px solid #1778aa;border-radius:5px">
                    </label>
                    <label for="descricao" style="width: 100%">Descrição
                    <textarea id="descricao" name="descricao" rows='5' maxlength="512" style='width: 100%;border: 1px solid #1778aa;border-radius: 5px;outline:0'></textarea>
                    </label>
                    <input type='submit' value='Enviar' style='float:right;margin-top: 5px;border-radius: 10px;background-color:rgba(0,0,0,.0);color:#1778aa;border: 1px solid #1778aa;outline:0'>
                </form>
                <?php
                    if(isset($_POST['titulo'])){
                    
                    date_default_timezone_set('America/Sao_Paulo');
                    $now = new DateTime();
                    $dateTime = $now->format('d-m-Y H:i:s');
                    $titulo = $_POST['titulo'];
                    $descricao = $_POST['descricao'];
                    $sqlComentInsert = "INSERT into comentarios values(null,'$titulo','$descricao','$dateTime','0',3,1,$id)";
                    $resultSqlComent = mysqli_query($conn, $sqlComentInsert);
                    if($resultSqlComent){
                        echo "<script>alert('Comentário Adicionado!');window.location.href='/musiclly/modulos/OQueEMusica.php';</script>";

                    }
                }
                ?>
                </fieldset>
                </fieldset>
            </div>
        </div>
</div>



    
        <img src="/musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
            <?php include($serve_file. 'includes/footer.php') ?>
    </div>
    <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>