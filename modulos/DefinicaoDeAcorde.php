<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'php/banco.php');

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
  }else{
    echo "<script>window.location.href='index.php';</script>";
}
$verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 2";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if($row['progresso'] <= 90){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 90 where id_cad = $id and id_Curso = 2";
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

                        <h1 class='titulosh1'>2.6 Definição de Acorde</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        <b style='color:darkorange'>Definição de acorde</b>
                        <br /><br />A maioria das bibliografias define “acorde” como a união de três ou mais notas tocadas simultaneamente. Há inúmeras combinações possíveis de se fazer com notas, resultando nos mais diversos acordes. Então, para facilitar a vida dos músicos, cada acorde recebe um nome.

                        <br /><br />Esse nome é baseado nas notas fundamentais que conhecemos (dó, ré, mi, fá, sol, lá, si).

                        <br /><br /><b>Acordes naturais</b>
                        Antes de aprender como se dá nome aos acordes, é importante saber que alguns acordes recebem o mesmo nome das notas (dó, ré, mi, fá, sol, lá, si). São os chamados acordes naturais. Cada um desses acordes é formado por três notas. E existe uma regrinha para descobrir quem são essas três notas.

                        <br /><br />As notas que formam os acordes naturais são o primeiro, o terceiro e o quinto graus de suas respectivas escalas. Mais adiante, iremos aplicar essa regra na prática, para facilitar a visualização.

                        <br /><br />Antes disso, vale a pena saber que um acorde pode ser maior, menor ou suspenso. Essas nomenclaturas estão relacionadas com o terceiro grau.

                        <br /><br /><b>Acorde maior</b>
                        <br />Para formar os acordes maiores, você usa o terceiro grau maior.

                        <br /><br /><b>Acorde menor</b>
                        <br />Para formar os acordes menores, você usa o terceiro grau menor.

                        <br /><br /><b style='color:darkorange'>Acorde suspenso</b>
                        <br /><br />Quando o acorde não possui o terceiro grau, ele não pode ser classificado como maior, nem como menor, recebendo o nome de “suspenso”.

                        <br /><br />Os símbolos utilizados são os seguintes: “m” para dizer que o acorde é menor e “sus” para dizer que o acorde é suspenso.

                        <br /><br />Quando não houver nenhum desses símbolos, significa que o acorde é maior. Veja os exemplos abaixo, utilizando o acorde de dó:

                            <br /><br /><img src='/musiclly/www/galeria/acorde.png' >

                            <br /><br />Já o quinto grau, em ambos os casos (acordes maiores ou menores naturais), é a quinta justa.

                        <br />Bom, agora que já aprendemos as regras, vamos formar acordes utilizando esses conceitos. Pense num acorde que você quer formar. Por exemplo, Dó maior.

                        <br /><br />Primeiro grau: Dó

                        <br />Terceiro grau maior: Mi

                        <br />Quinto grau (quinta justa): Sol

                        <br /><br />Portanto, o acorde de Dó maior é formado pelas notas Dó, Mi e Sol. Basta que você aperte (ou deixe soar) essas notas no seu instrumento que você terá o acorde de Dó maior.

                        <br />Vamos formar agora o acorde de Fá menor:

                            <br /><br />Primeiro grau: Fá

                            <br />Terceiro grau menor: Lá bemol

                            <br />Quinta justa: Dó

                            <br /><br />Portanto, o acorde de Fá menor é formado pelas notas Fá, Lá bemol e Dó.

                            <br />É assim que se forma um acorde. Nos próximos artigos, veremos mais detalhes sobre os tipos de acordes que podemos montar, além dos acordes naturais básicos que já mostramos, introduzindo o conceito de tríades e tétrades. 

                            <br /><br />Nosso objetivo é fazer com que você saiba como montar qualquer acorde, mesmo que ele seja difícil ou cheio de extensões, sem precisar recorrer a um dicionário de acordes. Se você é um iniciante no violão e quer estudar a parte prática desse instrumento, confira esse artigo.

                        </fieldset>
                    </p>
                    <div class='row' style='margin-bottom: 50px;'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/Triade.php' class='proximo'>Ir para 2.7(Tríade) >></a></div>
                    </div>
                </div>
            </div>
            </div>





    
        <img src="/musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
        <?php include($serve_file. 'includes/footer.php') ?>
    </div>
    <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>