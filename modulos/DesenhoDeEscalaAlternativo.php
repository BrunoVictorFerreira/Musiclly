<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'php/banco.php');

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
} else {
    echo "<script>window.location.href='index.php';</script>";
}
$verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 2";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if ($row['progresso'] <= 30) {
    $progresso = "UPDATE tbl_cad_curso SET progresso = 30 where id_cad = $id and id_Curso = 2";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP JS =========================================-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!--FONTES ================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
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


        $(document).ready(function () {
            $('#menuUsuarioExpandido').hide();

            $("#menuUsuario").click(function () {
                $("#menuUsuarioExpandido").slideToggle("slow");
            });
        });
    </script>
</head>

<body style="background-image: url('/musiclly/www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">
<div class="container-fluid">
    <!--CLASSE CONTAINER =======================-->
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="/musiclly/www/galeria/logo.png" class="img-fluid" id="logoNavBar"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            $sqlImg = "SELECT * from cadastro where id=$id";
            $resultImg = mysqli_query($conn, $sqlImg);
            $row = mysqli_fetch_assoc($resultImg);
            $img = $row['imagem'];
            $qtdLetras = substr_count($row['usuario']);
            if (isset($_SESSION['usuario'])) {
                echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                    <a class='nav-item nav-link' href='/musiclly/cursos.php' id='entrarNavBar' style='margin-left: 280px'><div id='divMenu1'>Cursos</div></a>
                    <a class='nav-item nav-link' href='/musiclly/index.php' id='entrarNavBar' style='margin-left: 10px;'><div id='divMenu2'>Inicio</div></a>
                    <a class='nav-item nav-link' href='/musiclly/contato.php' id='entrarNavBar' style='margin-left: 10px;'><div id='divMenu3'>Contato</div></a>

                    

                    <div style='background-color:#fafdff;z-index:2'>
                        <a class='nav-item nav-link' id='menuUsuario' href='#' style='margin-left: 240px;margin-top: 0.5%;display:inline-block;text-transform: uppercase;font-family: roboto'>".substr($usuario,0,6)."<img src='" . $img . "' style='margin-left: 3%;max-width: 35%;border-radius: 10%;max-height: 35%'>
                        </a>
                    </div>";
            } else {
                echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                    <a class='nav-item nav-link' href='/musiclly/cursos.php' id='entrarNavBar' style='margin-left: 230px'><div id='divMenu1'>Cursos</div></a>
                    <a class='nav-item nav-link' href='/musiclly/index.php' id='entrarNavBar' style='margin-left: 10px;'><div id='divMenu2'>Inicio</div></a>
                    <a class='nav-item nav-link' href='/musiclly/contato.php' id='entrarNavBar' style='margin-left: 10px;'><div id='divMenu3'>Contato</div></a>

                    

                    <div style='background-color:#fafdff;z-index:2'>
                        <a class='nav-item nav-link' id='menuUsuario' href='/musiclly/logar.php' style='color:#1778b2;margin-left: 210px;margin-top: 0.5%;display:inline-block;font-family: roboto'>Login</a>
                        <a class='nav-item nav-link'  href='/musiclly/cadastro.php' style='color:#f78726;display:inline-block;margin-top: 0.5%;font-family: roboto'>Cadastro</a>
                    </div>";
            }

            ?>
            <div id="menuUsuarioExpandido"
                 style="background-color:#fafdff;border:1px solid #1778aa;height: 250px;width: 15%;position:absolute;z-index:1;margin-left: 71%;margin-top: 5%;border-radius: 5px">
                <a href="/musiclly/painel.php"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Meu Perfil</a>
                <a href="/musiclly/alterar_senha.php"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Alterar Senha</a>
                <a href="/musiclly/alterar_usuario"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Alterar Usuário</a>
                <a href="/musiclly/alterar_email"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Alterar Email</a>
                <a href="/musiclly/notas.php"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Notas</a>
                <a href="/musiclly/logout.php"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Logout</a>
            </div>

        </nav>
            <!-- FECHAMENTO NAVBAR ===============-->
        </div>
        <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->

        <div class='container' style='height: 1000px'>
            <!--ABERTURA DA DIV CONTAINER -->
            <div class='row'>
                <div class='col-1'>
                    <div style='height:60%;margin-top: 180%'>
                    <a href='/musiclly/modulos/EscalasMusicais.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.1</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/DesenhoDeEscalaAlternativo.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.2</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/GrausMusicais.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.3</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/DiminutaAumentadaEJusta.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.4</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/Oitavas.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.5</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/DefinicaoDeAcorde.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.6</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/Triade.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.7</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/questionarios/modulo_2_Quest.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.8</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-11'>
                    <p class='text-break'>

                        <h1 class='titulosh1'>2.2 Desenho de Escala Alternativo</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        A escala de <b>dó maior</b> já foi ensinada quando mostramos o conceito básico sobre escalas e a digitação das escalas maior e menor naturais. Nesse tópico, iremos apenas mostrar (para abrir as ideias) outras formas de digitação para a escala maior no violão/ guitarra. É importante observar como, nesses instrumentos, uma mesma escala pode ter vários formatos (shapes). Na sequência, falaremos sobre as digitações no teclado/piano. 

                        <br />Observe abaixo alguns dos desenhos mais comuns para a escala de Dó maior na guitarra/ violão:

                        <b>Escala de dó maior começando da 5ª corda</b>
                        <br /><br /><img src='/musiclly/www/galeria/escalaDoMaior2.png' style='max-width: 400px'>

                        <br /><br />Outra variação da escala de C começando da 5ª corda
                        <br /><br /><img src='/musiclly/www/galeria/escalaDoMaior3.png' style='max-width: 400px'>

                        <br />Escala de dó maior começando da 6ª corda
                        <br /><br /><img src='/musiclly/www/galeria/escalaDoMaior4.png' style='max-width: 400px'>

                        <br />Outra variação da escala de C começando da 6ª corda
                        <br /><br /><img src='/musiclly/www/galeria/escalaDoMaior5.png' style='max-width: 400px'>

                        <br /><br />No teclado/piano, conhecendo a localização das notas, basta tocar cada escala conforme a tabela abaixo:

                        <br /><br /><img src='/musiclly/www/galeria/escalaMaior12Notas.png' style='max-width: 400px'>

                        <br /><br />Os tecladistas costumam seguir determinado dedilhado para facilitar a execução das escalas. Esse dedilhado permite uma maior agilidade e precisão na hora da execução. Organizamos abaixo uma tabela com os dedilhados mais utilizados para cada escala:

                        <br /><br /><img src='/musiclly/www/galeria/dedosTeclado.png' style='max-width: 400px'>

                        <br /><br /><img src='/musiclly/www/galeria/digitacao.png' style='max-width: 400px'>

                        <br /><br />Obs: os parênteses significam outra opção muito comum.

                        <br />Esses dedilhados em geral poderão ser utilizados em ambas as escalas maiores e menores.
                        </fieldset>
                    </p>
                    <div class='row' style='margin-bottom: 50px;'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/DesenhoDeEscalaAlternativo.php' class='proximo'>Ir para 2.3(Graus Musicais) >></a></div>
                    </div>
                </div>
            </div>
            </div>



        <img src="/musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
        <div class="row">
            <div class="col-12" id="footer">
                <footer></footer>
            </div>
        </div>
    </div>
    <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>