<?php require ('backend/conexao.php');
$sql = "SELECT * FROM `etapa-1`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Energia - Linha do tempo</title>
    <!-- Inclua o link para o arquivo CSS do Bootstrap -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
</head>

<body>
    <?php require ('header.php') ?>
    <section id="banner-interno">
        <div class="col-md-12">
            <div class="banner-top">
                <div id="nome-interno">
                    <i class="bi bi-house"></i><label>/ Linha do tempo</label>
                </div>
                <div class="container">
                    <div class="linha-tempo-titulo">
                        <div class="linha-tempo-titulo-primeiro">
                            <img src="assets/images/boneco.png" />
                        </div>
                        <div class="linha-tempo-titulo-segundo">
                            <p>Linha do tempo</p>
                            <h1>Acompanhe O Projeto</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="conteudo-titulo-linha-tempo">
        <div class="container">
            <div class="col-md-12">
                <div class="">
                    <h1>Conheça as etapas do projeto Nova Energia</h1>
                </div>
            </div>
            <div class="botoes-linha-tempo">
                <div class="col-md-12">
                    <div class="conteudo-linha-tempo" id="icons-linha-tempo">
                        <?php
                        $rows = [];
                        while ($row = $result->fetch_assoc()) {
                            if ($row['status_etapa'] == 'Não iniciou') {
                                echo "<img src='assets/images/icons/Icon_Linhatempo_desativado.png' />";
                            } else {
                                echo "<img src='assets/images/icons/Icon_Linhatempo.png' />";
                            }
                            $rows[] = $row;
                        }
                        ?>
                    </div>
                    <div class="linha-hr-tempo"> </div>
                    <div class="conteudo-interno-linha-tempo">
                        <?php
                        foreach ($rows as $row2) {
                            ?>
                            <div class="col-md-3 texto-interno-linha-tempo">
                                <label <?php if ($row2['status_etapa'] == 'Não iniciou') {
                                    echo 'style="color: #CECECE"';
                                } ?>><?php echo $row2['nome_etapa'] ?></label>
                                <p <?php if ($row2['status_etapa'] == 'Não iniciou') {
                                    echo 'style="background: #EAEAEA"';
                                }
                                elseif ($row2['status_etapa'] == 'Concluido') {
                                    echo 'style="background: #18AF18; color: white"';
                                }
                                 ?> class="paragrafo-enfatico"><?php echo $row2['status_etapa'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="img-banner-download">
        <div class="container">
            <div class="col-md-12">
                <a href="downloads">
                    <div>
                        <img src="assets/images/Banner_Downloads.png" />
                    </div>
                </a>
            </div>
        </div>
    </section>
    <footer>
        <div style="background-color: #eaeaea;" class="col-md-12">
            <div class="rodape">
                <div>
                    <img src="assets/images/logo-rodape.png" />
                </div>
                <div>
                    <label>Nova Energia - 2024 | Todos os direitos reservados.<label>
                </div>
            </div>
        </div>
        <div style="justify-content:center" class="col-md-12">
            <div class="logos-fundo">
                <img src="assets/images/imagem-footer.png" />
            </div>
            <div>
                <div>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                        crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            var $searchOverlay = $("#search-overlay");
                            var $searchPopup = $("#search-popup");
                            var $searchIcon = $("#search-icon");
                            var $searchInput = $("#search-input");

                            $searchIcon.on("click", function(event) {
                                $searchOverlay.show();
                                $searchPopup.show();
                                $searchInput.focus();
                                event.stopPropagation();
                            });

                            $(document).on("click", function(event) {
                                if (!$(event.target).closest("#search-popup").length && !$(event.target).is("#search-input")) {
                                    $searchOverlay.hide();
                                    $searchPopup.hide();
                                }
                            });
                            $searchPopup.on("click", function(event) {
                                event.stopPropagation();
                            });
                        });
                    </script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </footer>

</body>

</html>