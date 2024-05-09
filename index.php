<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Energia</title>
    <!-- Inclua o link para o arquivo CSS do Bootstrap -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php require ('header.php') ?>
    <section id="banner">
        <div class="col-md-12">
        <img class="col-md-12" src="assets/images/banner.png" />
        </div>
        
        <div class="texto-banner">
            <h1 class="titulo-banner">
                Projeto<br>
                Nova Energia
            </h1>
            <p class="subtitulo-banner">
                O caminho para uma energia mais sustentável e com menos impacto para os prédios públicos da <span>Região
                    metropolitada no estado do Rio de Janeiro.</span>
            </p>
            <button class="button-text-banner"><i class="fa-solid fa-arrow-right"></i> Conheça o projeto</button>
        </div>
    </section>
    <section id="topicos">
        <div class="container">
            <div class="col-md-12 blocos">
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/Foto_Conceito.png" />
                        <label class="titulo-bloco">Conceito do projeto</label>
                        <p class="paragrafo-bloco">Entenda o que significa os conceitos que permeiam o Projeto Nova
                            Energia, eficiência energética e transição energética.</p>
                        <a class="saiba-mais" href="#"><i class="fa-solid fa-arrow-right"></i> Saiba mais</a>

                    </div>
                </div>
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/Foto_Inspiracoes.png" />
                        <label class="titulo-bloco">Inspirações</label>
                        <p class="paragrafo-bloco">Projetos que inspiram. Iniciativas de eficiência e transição
                            energética que vão gerar economia e reduzir a emissao de poluentes na atmosfera.</p>
                        <a class="saiba-mais" href="#"><i class="fa-solid fa-arrow-right"></i> Saiba mais</a>

                    </div>
                </div>
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/Foto_Downloads.png" />
                        <label class="titulo-bloco">Downloads</label>
                        <p class="paragrafo-bloco">Entenda o que significa os conceitos que permeiam o Projeto Nova
                            Energia, eficiência energética e transição energética.</p>
                        <a class="saiba-mais" href="#"><i class="fa-solid fa-arrow-right"></i> Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="linha-tempo">
        <div class="container">
            <div class="col-md-12 linha">
                <div class="col-md-5 boneco">
                    <img class="img-boneco" src="assets/images/boneco.png" />
                </div>
                <div class="col-md-5 boneco">
                    <div>
                        <h2>Confira a linha do tempo do projeto</h2>
                        <label id="nova-energia">Nova Energia</label><br>
                        <a class="saiba-mais" href="#"><i class="fa-solid fa-arrow-right"></i> Ver
                            agora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contato">
        <div class="container">
            <h1>Ficou com dúvidas?</h1>
            <p style="margin-bottom: 50px">Abaixo segue os canais de comunicação do projeto</p>
            <div class="col-md-12 blocos">
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/icons/phone.svg" />
                        <span class="titulo-contato">21 2000-1000</span>
                        <p class="paragrafo-contato">De segunda a sexta, das 09:00h as 17:00h</p>
                    </div>
                </div>
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/icons/whatsapp.png" />
                        <p style="margin-top: 6px" class="paragrafo-contato">WhatsApp</p>
                        <span class="titulo-contato">21 2000-1000</span>

                    </div>
                </div>
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/icons/mail.webp" />
                        <p style="margin-top: 6px" class="paragrafo-contato">Via email</p>
                        <button><i style="width: 30px;" class="fa-solid fa-arrow-right"></i>Acesso ao
                            formulário</button>
                    </div>
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
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                        crossorigin="anonymous"></script>
    </footer>

</body>

</html>