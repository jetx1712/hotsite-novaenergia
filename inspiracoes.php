<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Energia - Conceito</title>
    <!-- Inclua o link para o arquivo CSS do Bootstrap -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php require('header.php') ?>
    <section id="banner-interno-inspiracoes">
        <div class="col-md-12">
            <div class="banner-top">
                <div id="nome-interno">
                    <i class="bi bi-house"></i><label>/ Inspirações</label>
                </div>
                <div class="container">
                    <div class="titulo-banner-top">
                        <h1>O caminho para uma energia mais sustentável e com menos impacto para os prédios públicos.</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="conteudo-titulo-intencoes">
        <div class="container">
            <div class="col-md-12">
                <div class="">
                    <h1>Rio de Janeiro</h1>
                    <img class="img-conceito" src="assets/images/Imagem_Riodejaneiro.png" />
                    <p class="paragrafo-conteudo"><span>Rio de Janeiro é a primeira cidade da América Latina</span> adotar fontes limpas e renováveis de energia para abastecer órgãos públicos.
                        O <span>Programa de Eficiência Energética (PPE)</span> do Rio foi inaugurado em setembro de 2023 abastecendo o Centro Administrativo São Sebastião (CASS), sede da Prefeitura.
                    </p>
                    <p class="paragrafo-conteudo">
                        Hoje, <span>20 unidades de saúde</span> também são abastecidas com energia renovável, como os hospitais <span>Miguel Couto, Albert Schweitzer, Rocha Faria, Lourenço Jorge e Pedro II.</span>
                        A estimativa é de que haverá uma economia de <span>R$ 115 milhões em cinco anos e 74 mil toneladas de Gases de Efeito Estufa evitadas.</span>
                    </p>
                </div>
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
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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